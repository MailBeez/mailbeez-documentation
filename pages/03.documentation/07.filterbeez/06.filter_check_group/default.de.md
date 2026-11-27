---
# http://learn.getgrav.org/content/headers
title: "Kundengruppen"
module_subtitle: "Versand auf Kundengruppen beschränken"
slug: filter_check_group
# menu: Kundengruppen Filter
date: 27-05-2011
published: true
publish_date: 27-05-2011
# unpublish_date: 27-05-2011
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
    tag: [pro, "Versand auf Kundengruppen beschränken"]
module:
    code: 'filter_check_group'
    category: [filterbeez]
    compatiblity: [comp_zencart,comp_xtc,comp_xtcm2,comp_gambio,comp_cre,comp_saas]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/06/icon_32.png'
    pro: 'pro'
    cert: 'true'
    price: '99 EUR'
    title_en: 'Group Filter'
    teaser_en: 'Dont send the right Email to the wrong Customer Group'
    title_de: 'Kundengruppen Filter'
    teaser_de: 'Module für Kundengruppen aktivieren / de-aktivieren'
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

Eine Rösterei beliefert Privathaushalte und Cafés zu Großhandelskonditionen. Der Gutschein für einen 500-g-Beutel passt zu den Privatkunden. Über die Kundengruppen deines Shops kannst du Großhandelskonten von genau diesem Flow ausnehmen. Ihre übrigen E-Mails bleiben davon unberührt.

## Die Kundengruppen je Flow auswählen

Öffne **System → Erweiterungen → Zusatzmodule → Filter** und wähle **Versand auf Kundengruppen beschränken**.

[doc-steps]

[doc-step]
**Gruppen einem Modul zuordnen**

Öffne **Gruppen zuordnen**, suche den Nachbestell-Flow und wähle die Privatkundengruppe. Prüfe die Zuordnung auch nach der Installation eines weiteren Flows. Ist für ein Modul keine Gruppe freigegeben, schließt es Kunden mit zugehörigem Shopkonto aus.
[/doc-step]

[doc-step]
**Beide Fälle vergleichen**

Wähle ein Privat- und ein Großhandelskonto mit ähnlichen Bestellungen. Nur das Privatkonto sollte diesen Filter für den Nachbestell-Flow passieren. Empfänger ohne zugehöriges Kundenkonto passieren den Filter ebenfalls. Sollen auch sie vom Angebot ausgenommen sein, grenze die Zielgruppe zusätzlich ein.
[/doc-step]

[/doc-steps]

Dein Shop muss Kundengruppen bereitstellen. Für die frühere Modulversion sind Zen Cart, CRE Loaded B2B, xt:Commerce, xtc-Modified und Gambio GX dokumentiert.
