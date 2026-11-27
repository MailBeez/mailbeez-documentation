---
# http://learn.getgrav.org/content/headers
title: "Shopbewertungs-Abgleich"
module_subtitle: "Vor dem Wechsel zur Profi-Version versandte Shopbewertungs-Einladungen überspringen"
slug: filter_check_shopbewertung_advanced
# menu: Shopbewertung Advanced Cross Check
date: 18-12-2012
published: true
publish_date: 18-12-2012
# unpublish_date: 18-12-2012
template: docs
# theme: false
visible: false
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: done
    category: [docs]
    tag: [pro, "Shopbewertung Advanced Cross Check"]
module:
    code: 'shoprating_advanced'
    category: [filterbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    pro: 'pro'
    cert: 'true' 

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
In V5 kannst du unter [Um Bewertungen im eigenen Shop bitten](/mailbeez/shoprating_advanced) Einladungen zur Shopbewertung einrichten. [Zur Referenz für ältere Versionen](/legacy).
[/doc-callout]

Beim Wechsel vom einfachen Modul zur Profi-Ausgabe berücksichtigte dieser frühere Filter die bisherige Versandhistorie und Abmeldungen. Wer die Nachricht über das einfache Modul bereits erhalten oder gesperrt hatte, sollte sie über das Profi-Modul nicht erneut bekommen.

Teste den Übergang mit einer früheren Einladung zur Shopbewertung. Eine Anfrage zur Produktbewertung beim selben Kunden gehört zu einem anderen Kampagnenverlauf.

Bei einem Shop, der direkt mit der Profi-Ausgabe begann, gibt es keine Versandhistorie des einfachen Moduls zu prüfen.
