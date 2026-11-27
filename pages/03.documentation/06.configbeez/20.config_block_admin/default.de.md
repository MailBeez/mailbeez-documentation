---
# http://learn.getgrav.org/content/headers
title: Erweitertes Opt-out mit Admin
module_subtitle: "Die Reichweite einer Abmeldung festlegen und Sperren im Shop-Admin prüfen"
slug: config_block_admin
# menu: Erweitertes Opt-out mit Admin
date: 18-10-2011
published: true
publish_date: 18-10-2011
# unpublish_date: 18-10-2011
template: docs
# theme: false
visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: done
    category: [docs]
    tag: [pro]
module:
    code: 'config_block_admin'
    category: [configbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio,comp_saas]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/10/icon_325.png'
    pro: 'pro'
    cert: 'true'
    price: '99 EUR'
    title_en: 'Advanced Opt-Out with Admin'
    teaser_en: 'Block all modules and administer customers opt-out settings'
    title_de: 'Erweitertes Opt-out mit Admin'
    teaser_de: 'Alle Module blockieren und Opt-Out der Kunden administrieren'
    author: 'MailBeez.com'
# added collection selector

author:
    name: admin
metadata:
    author: admin
#      description: Your page description goes here
#      keywords: HTML, CSS, XML, JavaScript
#      robots: noindex, nofollow
#      og:
#          title: The Rock
#          type: video.movie
#          url: http://www.imdb.com/title/tt0117500/
#          image: http://ia.media-imdb.com/images/rock.jpg
#  cache_enable: false
#  last_modified: true
---

[doc-callout type="note" title="Frühere MailBeez-Versionen"]
In V5 kannst du unter [Kontakte](/mailbeez-results/contacts) Abmeldungen und Sperren auswerten. [Zur Referenz für ältere Versionen](/legacy).
[/doc-callout]

<span id="erweitertes-opt-out"></span>Prüfe einen Eintrag in der früheren Abmeldeverwaltung, bevor du ihn änderst. Die Sperre kann ein Modul oder alle MailBeez-E-Mails betreffen. Kläre den gewünschten Geltungsbereich mit dem Empfänger, bevor du eine Sperre aufhebst.

Kläre zuerst, welche Nachricht der Empfänger abbestellen wollte. Wer keine Bewertungsanfragen mehr möchte, kann weiterhin an anderen abonnierten Nachrichten interessiert sein.

## Links in eine Vorlage einfügen

Prüfe zuerst, ob die responsive Hauptvorlage beide Links schon enthält. Der erste Platzhalter sperrt das aktuelle Modul, der zweite alle Module.

```smarty
<a href="{$block_url}">keine weiteren Emails dieser Art</a> | 
<a href="{$block_all_url}">generell keine weiteren Emails</a>
```

Bei einem Modul ohne Abmeldeoption kann die Vorlage vor der Anzeige der Links `$noblock` prüfen.

```smarty
{if $noblock}
   Sie können diese Benachrichtigung nicht abbestellen
{else}
    <a href="{$block_url}">keine weiteren Emails dieser Art</a> |
    <a href="{$block_all_url}">generell keine weiteren Emails</a>
{/if}
```

## Vorhandene Sperren verwalten

<span id="opt-out-administration"></span><span id="import-von-black-listen"></span>Suche über Kundennummer, E-Mail-Adresse oder Namen. Wähle die Modulsperre oder die globale Sperre. Für einen Import fügst du eine Adresse pro Zeile ein und wählst die betroffenen Module. Gesperrt werden die passenden Kundenkonten.

[doc-video url="https://www.youtube.com/watch?v=3yYfw8--94s" /]
