---
# http://learn.getgrav.org/content/headers
title: "Ablaufdatum in Smarty formatieren"
#menu: Beez-O-Graph
slug: email-vorlagen
date: 17-02-2016
original_v4: true
published: true
publish_date: 17-02-2016
template: tutorial
# theme: false
visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: done
    category: [docs]
    tag: []
---

[doc-callout type="note" title="Frühere MailBeez-Versionen"]
[Zur Referenz für ältere Versionen](/legacy).
[/doc-callout]

<span id="datums-formatierung"></span><span id="problem"></span>Formatiere das Ablaufdatum in der früheren Smarty-Vorlage dort, wo der Gutschein erscheint. Ein rein numerisches Format bleibt auch bei geänderter Serversprache eindeutig.

Wähle für den Test einen Tag nach dem Zwölften des Monats. So fällt ein vertauschter Monat in der englischen und deutschen Vorschau sofort auf.

<span id="lsung"></span><span id="mglichkeit-2"></span><span id="loesung"></span><span id="moeglichkeit-2"></span>Füge diesen Ausdruck in die Kampagnenvorlage ein.

```smarty
{$coupon_expire|date_format:"%d.%m.%Y"}
```

<span id="mglichkeit-1"></span><span id="moeglichkeit-1"></span>Für einen Gutschein mit Ablaufdatum 18. Dezember 2026 lautet die Ausgabe `18.12.2026`. Möchtest du Monats- oder Wochentagsnamen ausgeben, prüfe die Locale des PHP-Prozesses, der die E-Mail rendert, und kontrolliere die Vorschau in der gewünschten Sprache.

Soll derselbe Gutschein im Deutschen als `18.12.2026` und im Englischen als `2026-12-18` erscheinen, verwende `%d.%m.%Y` in der deutschen Vorlage und `%Y-%m-%d` in der englischen. Vergleiche beide Vorschauen mit dem gespeicherten Ablaufdatum.
