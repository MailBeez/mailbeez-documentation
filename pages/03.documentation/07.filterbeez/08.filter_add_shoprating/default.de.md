---
# http://learn.getgrav.org/content/headers
title: "Shopbewertungen in E-Mails"
module_subtitle: "Shopbewertungen mit dem früheren Vorlagensystem in E-Mails einfügen"
slug: filter_add_shoprating
menu: "Shopbewertungen in E-Mails"
published: true
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
    tag: [pro, "ShopBewertungen in Emails einfügen"]
module:
    code: 'shoprating_advanced'
    category: [filterbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    pro: 'pro'
    cert: 'true'      
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
In V5 kannst du unter [Integrationen](/extensions/integrationen) eine Bewertungsintegration auswählen. [Zur Referenz für ältere Versionen](/legacy).
[/doc-callout]

Zeige Bewertungen aus der Integration [Shopbewertungen im eigenen Shop erfassen](/configbeez/config_shopvoting) in E-Mails mit dem früheren Vorlagensystem. Prüfe zuerst, ob Bewertungen vorliegen. Installiere und aktiviere anschließend das Anzeigemodul.

Ein kurzer Kundenkommentar zu Versand oder Service kann vor einem weiteren Kauf helfen. Die Shopbewertung sollte als Rückmeldung zum Einkaufserlebnis erkennbar bleiben.

## Bewertung in die Vorlage einfügen

<span id="installation"></span>Für eine Kampagne bearbeitest du die Inhaltsvorlage, für alle E-Mails mit demselben Design die Hauptvorlage. Setze diesen Platzhalter in die HTML-Fassung.

```smarty
{$content.shoprating.html}
```

Verwende in der Textfassung den entsprechenden Textplatzhalter.

```smarty
{$content.shoprating.txt}
```
