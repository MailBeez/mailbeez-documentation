---
# http://learn.getgrav.org/content/headers
title: "SHOPVOTE"
module_subtitle: "Um Bewertungen auf SHOPVOTE bitten"
slug: shopvote_advanced
# menu: ShopVote.de Profi
date:  02-11-2015
published: true
publish_date:  02-11-2015
# unpublish_date: 15-04-2015
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
    tag: [pro, "Um Bewertungen auf SHOPVOTE bitten"]
    
module:
    plans_position: after_guide
    code: 'shopvote_advanced'
    category: [mailbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio,comp_saas]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2013/06/top_64.png'
    pro: 'pro'
    cert: 'true'
    price: '99 EUR'
    title_en: 'ShopVote.de Advanced'
    teaser_en: 'Advanced Features: Delay for international orders, multiple Order status, recognition of regular customers'
    title_de: 'ShopVote.de Profi'
    teaser_de: 'Profi-Features: Verzögerung für internationale Bestellungen, Stammkunden-Erkennung und mehr'
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

Ein Kunde bestellt jeden Monat Katzenfutter bei dir. Du möchtest ihn auf SHOPVOTE nach Lieferung und Service fragen. Eine Einladung nach jedem Sack wäre schnell zu viel. Mit diesem Flow kannst du die Lieferung abwarten und festlegen, wie bald derselbe Käufer wieder eine Einladung erhalten darf.

## Flow einrichten

Öffne **Kampagnen → Automatisierung → MailBeez Flows → Um Bewertungen auf SHOPVOTE bitten** und wähle **Optionen → Konfigurieren**.

<span id="abstand-zwischen-shopvote"></span>
<span id="diese-einstellungen-sind-"></span>

[doc-steps]
[doc-step]
**Den Bewertungslink deines Shops hinterlegen**

Trage unter **Ihre ShopVote URL** den SHOPVOTE-Bewertungslink deines Shops ein. Folge dem Link aus einer Vorschau und prüfe, ob der Käufer deinen Shop auf der Zielseite wiedererkennt.
[/doc-step]
[doc-step]
**Den frühesten Versandtag bestimmen**

Wähle unter **Bestell-Status für Bewertungen** den Status für verschickte Pakete. Plane unter **Wartezeit nach dem Statuswechsel** genug Zeit für die Lieferung ein und setze **Höchstalter des Statuswechsels** höher als diese Wartezeit. Für längere Lieferwege ins Ausland gibt es **Zusätzliche Wartezeit bei Auslandslieferungen**.
[/doc-step]
[doc-step]
**Einen Abstand für Stammkunden setzen**

Wähle für die monatliche Futterbestellung unter **Mindestabstand zwischen Einladungen** zum Beispiel 90 Tage. Vergleiche zwei sonst passende Käufer. Einer hat letzten Monat eine SHOPVOTE-Einladung erhalten, der andere noch nie. Der zweite kommt jetzt infrage. Beim ersten sind die 90 Tage noch nicht um.
[/doc-step]
[/doc-steps]

Wie du den geplanten Lauf an einer Testbestellung prüfst, zeigt [Bewertungseinladung planen](/kochbuch/optimierter-ablauf-bitte-um-bewertung).
