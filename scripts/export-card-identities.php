<?php
// Export presentation assets only. Module constructors can access a shop database.
use Components\Configuration\Directory;
use Components\Data\Live\LiveModuleProvider;
use Components\Support\Palette;

if ($argc !== 3) {
    fwrite(STDERR, "Usage: php scripts/export-card-identities.php MAILHIVE_DIR HELIOS_CATALOG_JSON\n");
    exit(2);
}
$hive = realpath($argv[1]);
$app = $hive . '/app_dev';
require $app . '/components/Base.php';
require $app . '/components/Configuration/Directory.php';
require $app . '/components/Support/Palette.php';
require $app . '/components/ModuleLoader.php';
require $app . '/components/Data/Contracts/ModuleProvider.php';
require $app . '/components/Data/Live/LiveModuleProvider.php';
$catalog = json_decode(file_get_contents($argv[2]), true, 512, JSON_THROW_ON_ERROR);
$root = dirname(__DIR__) . '/pages/03.documentation';

function declarations(string $css): array
{
    preg_match_all('/--color-([\w-]+)\s*:\s*([^;]+);/', $css, $matches, PREG_SET_ORDER);
    $colors = [];
    foreach ($matches as $match) {
        $colors[$match[1]] = trim($match[2]);
    }
    return $colors;
}

function palettes(string $app): array
{
    $base = declarations(file_get_contents($app . '/node_modules/tailwindcss/theme.css'));
    $theme = file_get_contents($app . '/appui/assets/css/tailwind.input.css');
    if (!preg_match('/^:where\(\.dark, \[data-theme="dark"\]\)\s*\{([^}]+)\}/m', $theme, $dark, PREG_OFFSET_CAPTURE)) {
        throw new RuntimeException('BeezUI dark palette missing');
    }
    $light = array_replace($base, declarations(substr($theme, 0, $dark[0][1])));
    return [$light, array_replace($light, declarations($dark[1][0]))];
}

function colorValue(string $token, array $palette): string
{
    if (preg_match('/^\[(#[0-9a-f]{6})\]$/i', $token, $hex)) {
        return $hex[1];
    }
    [$name, $opacity] = array_pad(explode('/', $token, 2), 2, null);
    $value = $palette[$name] ?? '';
    if (preg_match('/^var\(--color-([\w-]+)\)$/', $value, $alias)) {
        $value = $palette[$alias[1]] ?? '';
    }
    if (!preg_match('/^(?:#[\da-f]{3,8}|oklch\([.\d%\s-]+\))$/i', $value)) {
        throw new RuntimeException("Unknown BeezUI color $token ($value)");
    }
    return $opacity === null ? $value : "color-mix(in oklab, $value $opacity%, transparent)";
}

function tileColors(string $classes, array $palette, bool $dark): array
{
    // CloudLoader's runtime status color has a neutral default in the app.
    $classes = str_replace('configuration-license-icon', 'bg-slate-400/80', $classes);
    $colors = ['bg' => 'transparent', 'text' => colorValue('primary', $palette), 'stroke' => 'none'];
    foreach (preg_split('/\s+/', trim($classes)) as $class) {
        if (!preg_match('/^(dark:)?(bg|text|stroke)-(.+)$/', $class, $parts)) {
            throw new RuntimeException("Unknown identity class $class");
        }
        if ($parts[1] === '' || $dark) {
            $colors[$parts[2]] = colorValue($parts[3], $palette);
        }
    }
    return $colors;
}

function literalProperty(string $source, string $name, ?string $fallback = null): string
{
    // Module artwork is either one PHP single-quoted literal or joined literals.
    $literal = "'(?:[^'\\\\]|\\\\.)*'";
    $assignment = '~\$this->' . $name . '\s*=\s*(' . $literal . '(?:\s*\.\s*' . $literal . ')*)\s*;~s';
    if (!preg_match($assignment, $source, $match)) {
        if ($fallback !== null) {
            return $fallback;
        }
        throw new RuntimeException("Missing literal module property: $name");
    }
    preg_match_all('~' . $literal . '~s', $match[1], $parts);
    $value = '';
    foreach ($parts[0] as $part) {
        $value .= strtr(substr($part, 1, -1), ["\\'" => "'", "\\\\" => "\\"]);
    }
    return trim($value);
}

function tileImage(string $svg, string $classes, array $palettes): string
{
    $doc = new DOMDocument();
    if (!$doc->loadXML($svg, LIBXML_NONET) || $doc->doctype || $doc->documentElement->localName !== 'svg') {
        throw new RuntimeException('Invalid module SVG');
    }
    $art = $doc->documentElement;
    $artClasses = explode(' ', $art->getAttribute('class'));
    // Keep the source viewBox, paint, paths, brand styles and aspect ratio.
    $art->setAttribute('id', 'module-art');
    $art->setAttribute('width', '16');
    $art->setAttribute('height', '16');
    if (in_array('fill-current', $artClasses, true)) {
        $art->setAttribute('fill', 'currentColor');
    }
    $transform = '';
    if (in_array('rotate-90', $artClasses, true)) {
        $transform .= 'rotate(90 12 12) ';
    }
    if (in_array('-scale-x-100', $artClasses, true)) {
        $transform .= 'translate(24 0) scale(-1 1)';
    }
    $image = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="48" height="24" viewBox="0 0 48 24">' . "\n";
    $image .= '<defs>' . $doc->saveXML($art) . "</defs>\n";
    $classes = Palette::moduleIconClasses($classes);
    foreach ($palettes as $mode => $palette) {
        $colors = tileColors($classes, $palette, $mode === 1);
        $x = $mode * 24;
        $image .= "<g transform=\"translate($x 0)\"><rect width=\"24\" height=\"24\" rx=\"6\" fill=\"{$colors['bg']}\"/>";
        $image .= '<g' . ($transform === '' ? '' : ' transform="' . trim($transform) . '"') . '>';
        $image .= "<use xlink:href=\"#module-art\" x=\"4\" y=\"4\" color=\"{$colors['text']}\" stroke=\"{$colors['stroke']}\"/></g></g>\n";
    }
    return $image . "</svg>\n";
}

function targets(string $overview, string $root, array $catalog): array
{
    $folders = [];
    foreach ($catalog['pages'][$overview]['sources'] as $filename) {
        $file = $root . '/' . $overview . '/' . $filename;
        preg_match_all('/\[doc-link-card\b[^\]\n]*?\bhref="([^"]+)"/', file_get_contents($file), $links);
        foreach ($links[1] as $url) {
            if (!isset($catalog['canonical'][$url])) {
                throw new RuntimeException("Unknown card destination $url");
            }
            $folders[$catalog['canonical'][$url]] = true;
        }
    }
    return array_keys($folders);
}

// Use the same normalizer as the Extensions table and install catalog. Its public
// collection API scans an installed shop. Only the per-item step is needed offline.
$extensionItem = (new ReflectionMethod(LiveModuleProvider::class, 'buildExtensionItem'))
    ->getClosure(new LiveModuleProvider());
$beez = file_get_contents($hive . '/common/classes/beez.php');
preg_match_all("/\\bconst\\s+(GROUP_\\w+)\\s*=\\s*'([^']+)'/", $beez, $groupConstants, PREG_SET_ORDER);
$groups = array_column($groupConstants, 2, 1);

$sections = [
    'automatic-processing' => 'automation', 'appearance' => 'app_ui', 'sender-addresses' => 'config_senders',
    'tracking-codes' => 'config_analytics_custom', 'preview-test-data' => 'config_preview_data',
    'language-assignment' => 'language_assignment',
];
$palettes = palettes($app);
$images = [];
$overviews = ['04.mailbeez', '26.extensions/01.addons', '26.extensions/02.integrations', '06.configbeez'];
foreach ($overviews as $overview) {
    foreach (targets($overview, $root, $catalog) as $folder) {
        // The Automation overview also links to guides without a module identity.
        if ($folder === '04.mailbeez/60.custom-flows' || strpos($folder, '11.cookbook/') === 0) {
            continue;
        }
        $code = preg_replace('/^\d+\./', '', basename($folder));
        if ($overview === '06.configbeez') {
            $key = $sections[$code] ?? $code;
            $images[$folder] = tileImage(Directory::icon($key), Directory::iconClass($key), $palettes);
            continue;
        }
        // A filter can belong to another package. Use its own display metadata.
        $code = $code === 'sitezen' ? 'config_sitezen' : $code;
        $type = $overview === '04.mailbeez' ? 'mailbeez' : (strpos($code, 'filter_') === 0 ? 'filterbeez' : 'configbeez');
        $file = "$hive/$type/$code.php";
        $source = file_get_contents($file);
        $svg = literalProperty($source, 'svg_icon');
        $color = literalProperty($source, 'color');
        if ($type !== 'mailbeez') {
            // Read the module's declared group without running its database-backed constructor.
            if (preg_match('/\$this->group\s*=\s*(?:self|beez)::(GROUP_\w+)\s*;/', $source, $match)) {
                if (!isset($groups[$match[1]])) {
                    throw new RuntimeException("Unknown group $match[1] in $file");
                }
                $group = $groups[$match[1]];
            } else {
                $group = literalProperty($source, 'group');
            }
            // The app also recognizes older integrations by group when no type is declared.
            $extensionType = literalProperty($source, 'extension_type',
                $group === $groups['GROUP_INTEGRATIONS'] ? 'integration' : null);
            $item = $extensionItem([
                'key' => $code, 'group' => $group, 'svg_icon' => $svg, 'color' => $color,
                'title' => '', 'desc' => '', 'blueprint' => '', 'config_keys' => [],
            ], $extensionType);
            $svg = $item['svg_icon'];
            $color = $item['color'];
        }
        $images[$folder] = tileImage($svg, $color, $palettes);
    }
}
$newsletter = file_get_contents($hive . '/mailbeez/mb_newsletter.php');
$images['04.mailbeez/21.newsletter'] = tileImage(literalProperty($newsletter, 'svg_icon'), literalProperty($newsletter, 'color'), $palettes);

foreach ($images as $folder => $image) {
    $file = "$root/$folder/card-identity.svg";
    if (!is_file($file) || file_get_contents($file) !== $image) {
        if (file_put_contents($file, $image) === false) {
            throw new RuntimeException("Failed to write $file");
        }
    }
}
echo count($images) . " guide identities exported.\n";
