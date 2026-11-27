---
title: "Profildaten in Vorlagen verwenden"
module_subtitle: "Profildaten für die Verwendung in E-Mail-Vorlagen bereitstellen"
slug: filter_add_profiling
template: docs
visible: true
published: true
module:
    code: 'filterbeez_add_content_suite'
    category: [filterbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    pro: 'pro'
    cert: 'true'
taxonomy:
    migration_status: done
    category: [docs]
    tag: [pro]
---

[doc-callout type="note" title="Früheres Filtermodul"]
Die Filter für deinen V5-Shop findest du unter [Zusatzmodule](/extensions/zusatzmodule). [Zur Referenz für ältere Versionen](/legacy).
[/doc-callout]

Im früheren Entwicklungsstand von [Profilierungs-System](/configbeez/common_services/config_profiling_engine) kannst du zugewiesene Bestell- und Kunden-Tags in Smarty auslesen. `$data.profiles.order.profiles` und `$data.profiles.customer.profiles` enthalten die IDs als kommagetrennte Liste. Für jede passende ID gibt es außerdem einen Eintrag im zugehörigen Array.

Betrachte eine bekannte Bestellung und den zugehörigen Kunden getrennt. Ein Bestell-Tag kann diesen Einkauf beschreiben, ohne etwas über die übrigen Bestellungen auszusagen.

Das Beispiel zeigt in der Modulvorlage einen Text für Bestell-Tag `6`. Für Kunden-Tag `42` prüfst du entsprechend `$data.profiles.customer.42`.

```smarty
{if is_array($data.profiles.order.6)}
    Entdecke Zubehör zu deiner Bestellung.
{/if}
```
