---
# http://learn.getgrav.org/content/headers
title: "Shopbewertungen"
module_subtitle: "Um Bewertungen im eigenen Shop bitten"
slug: shoprating_advanced
routes:
    aliases: 
        - /dokumentation/mailbeez/shopbewertung-profi
# menu: Bitte zur Shopbewertung Profi
date: 13-05-2014
published: true
publish_date: 13-05-2014
# unpublish_date: 13-05-2014
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
    tag: [pro, "Um Bewertungen im eigenen Shop bitten"]
module:
    plans_position: after_guide
    code: 'shoprating_advanced'
    category: [mailbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/10/icon_322.png'
    pro: 'pro'
    cert: 'true'
    price: '99 EUR'
    title_en: 'Shoprating Advanced'
    teaser_en: 'The advanced module for the professional application of the "shopvoting" addon'
    title_de: 'Shopbewertung Profi'
    teaser_de: 'Das Profi-Modul für den ernsthaften Einsatz des Modules "Shopbewertung"'
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

Eine Kundin packt sechs Weingläser aus. Alle sind heil angekommen, und auf ihre Frage zur Lieferung hat der Shop noch am selben Nachmittag geantwortet. Diese Erfahrung interessiert andere, die zum ersten Mal bei dir bestellen möchten. Mit diesem Flow lädst du zur Shopbewertung auf deiner eigenen Website ein.

Richte zuerst die [Shopbewertungen](/configbeez/config_shopvoting) ein, damit ein Formular für das Feedback bereitsteht. Sollen die Gläser selbst bewertet werden, nutze [Um Produktbewertungen bitten](/mailbeez/review_advanced).

## Flow einrichten

Öffne **Kampagnen → Automatisierung → MailBeez Flows → Um Bewertungen im eigenen Shop bitten** und wähle **Optionen → Konfigurieren**.

[doc-steps]
[doc-step]
**Zeit für die Lieferung einplanen**

Wähle unter **Bestell-Status** deinen Versandstatus. Plane unter **Wartezeit nach dem Statuswechsel** die Lieferzeit ein. Treffen die Pakete meist nach drei Tagen ein, hat die Kundin bei einer Einladung nach einer Woche Zeit zum Auspacken.
[/doc-step]
[doc-step]
**Nach der Erfahrung mit dem Shop fragen**

Lege **Anzahl der E-Mails** und die Abstände für gewünschte Erinnerungen fest. Eine Frage wie „Wie sind deine Gläser angekommen?“ erleichtert den Einstieg. Bittest du auch um Produktbewertungen, lies beide Einladungen einmal so, wie sie im selben Postfach ankommen.
[/doc-step]
[doc-step]
**Das Formular aus Kundensicht öffnen**

Folge dem Bewertungslink einer Testeinladung auf dem Smartphone. Unter **Bewertungsformular ohne erneute Anmeldung öffnen** entscheidest du, ob eine erneute Anmeldung nötig ist. Prüfe, ob das Formular zu deinem Shop gehört und nach der Erfahrung mit der Bestellung fragt.
[/doc-step]
[/doc-steps]

Das Rezept [Bewertungseinladung planen](/kochbuch/optimierter-ablauf-bitte-um-bewertung) begleitet eine Bestellung vom Statuswechsel bis zur Bewertungsseite.
