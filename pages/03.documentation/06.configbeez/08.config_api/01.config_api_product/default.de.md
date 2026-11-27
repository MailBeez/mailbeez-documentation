---
title: "Produkt-API"
module_subtitle: "Produktbewertungen über die Produkt-API abrufen"
slug: config_api_product
template: docs
visible: true
published: true
taxonomy:
    category: [docs]
    tag: [pro, "Produktbewertungen per API abrufen"]
---

[doc-callout type="note" title="Frühere Moduleinstellungen"]
Einstellungen in der aktuellen App findest du unter [System](/app-system). [Zur Referenz für ältere Versionen](/legacy).
[/doc-callout]

Zeige neben einem Produkt auf einer anderen Shopseite die zugehörigen Bewertungen an. Der private Endpunkt liefert Bewertungsdaten oder mit einer Shopvorlage gerendertes HTML. Rufe ihn serverseitig auf, damit der API-Schlüssel nicht im Quelltext der Seite erscheint.

Wähle HTML, wenn die Shopvorlage die Darstellung bestimmen soll. Nutze Bewertungsdaten, wenn die aufrufende Seite bereits eine eigene Ansicht für Bewertungen hat.

## Abruf

Sende eine GET-Anfrage per HTTPS an `/mailhive.php/api/private/v1.0/product/reviews/` in deinem Shop. Übergib `apikey` und eine positive ganze Zahl als `products_id`. Die neueste Bewertungs-ID steht zuerst. Ohne Vorlage erhältst du für ein Produkt ohne passende Bewertungen eine leere Ergebnisliste. Fehlt die Produkt-ID oder ist sie null, steht in `result` der Wert `null`.

| Optionaler Parameter | Wirkung |
| --- | --- |
| `languages_id` | Beschränkt die Ergebnisse auf die angegebene Sprach-ID. |
| `count` | Begrenzt die Anzahl der Bewertungen. |
| `rating_min` | Legt die Mindestzahl an Sternen fest. |
| `template` | Rendert die gewählte Smarty-Vorlage. Ohne Angabe erhältst du die Bewertungsdatensätze. |

## Ergebnis einbinden

Das Beispiel läuft serverseitig in PHP mit der cURL-Erweiterung. Hinterlege die HTTPS-Basisadresse deines Shops als `MAILBEEZ_SHOP_URL` und den privaten Schlüssel als `MAILBEEZ_API_KEY` in der Serverumgebung. Für Produkt 112 liefert das Beispiel bis zu drei Bewertungen ab vier Sternen. Die Vorlage `productreviews` übernimmt die Darstellung.

```php
$shopUrl = getenv('MAILBEEZ_SHOP_URL');
$apiKey = getenv('MAILBEEZ_API_KEY');
if (!$apiKey || !$shopUrl || parse_url($shopUrl, PHP_URL_SCHEME) !== 'https') {
    throw new RuntimeException('Configure the HTTPS shop URL and API key.');
}

$query = http_build_query([
    'apikey' => $apiKey,
    'products_id' => 112,
    'count' => 3,
    'rating_min' => 4,
    'template' => 'productreviews',
]);
$url = rtrim($shopUrl, '/') . '/mailhive.php/api/private/v1.0/product/reviews/?' . $query;
$request = curl_init($url);
curl_setopt_array($request, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 5,
]);
$response = curl_exec($request);
$status = curl_getinfo($request, CURLINFO_HTTP_CODE);
if ($status !== 200 || $response === false) {
    throw new RuntimeException('Could not retrieve the product reviews.');
}

$data = json_decode($response, true);
if (!isset($data['result']) || !is_string($data['result'])) {
    throw new RuntimeException('Expected reviews rendered by the shop template.');
}
echo $data['result'];
```

Für ein eigenes Layout kopiere `default_productreviews.tpl.html` im Verzeichnis `mailhive/configbeez/config_api_product/apibeez/api_private_product_reviews/templates/` nach `productreviews.tpl.html`. Bearbeite die Kopie, damit ein Modulupdate die Standarddatei ersetzen kann. Der ursprüngliche Beispielclient im benachbarten Verzeichnis `_client/` schaltet die TLS-Zertifikatsprüfung aus. Das obige Beispiel nutzt die reguläre Zertifikatsprüfung von cURL.
