---
# http://learn.getgrav.org/content/headers
title: "Trusted Shops"
module_subtitle: "Um Bewertungen auf Trusted Shops bitten"
slug: trustedshops_advanced
# menu: Trustedshops Profi
date: 04-06-2013
published: true
publish_date: 04-06-2013
# unpublish_date: 04-06-2013
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
    tag: [pro, "Um Bewertungen auf Trusted Shops bitten"]
module:
    plans_position: after_guide
    code: 'trustedshops_advanced'
    category: [mailbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2013/06/top_64.png'
    pro: 'pro'
    cert: 'true'
    price: '99 EUR'
    title_en: 'Trustedshops Advanced'
    teaser_en: 'Advanced Features: Delay for international orders, multiple Order status, recognition of regular customers'
    title_de: 'Trustedshops Profi'
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

Stell dir vor, du betreibst einen Kochgeschirr-Shop und einen separaten Shop für den Fachhandel. Ein Kunde bestellt eine gusseiserne Pfanne im Kochgeschirr-Shop. Öffnet er deine Einladung zu Trusted Shops, sollte er denselben Shopnamen sehen wie auf seiner Bestellbestätigung. Die hinterlegte Trusted-Shops-ID entscheidet, welchen Shop er bewertet.

## Flow einrichten

Öffne **Kampagnen → Automatisierung → MailBeez Flows → Um Bewertungen auf Trusted Shops bitten** und wähle **Optionen → Konfigurieren**.

<span id="zeitpunkt-fuer-trusted-sh"></span>
<span id="diese-einstellungen-sind-"></span>

[doc-steps]
[doc-step]
**Die ID dem richtigen Shop zuordnen**

Trage unter **Ihre Trustedshops Händler ID** die ID des Kochgeschirr-Shops ein. Folge dem Bewertungslink aus einer Testmail. Vergleiche den Namen auf der Zielseite mit der Bestellbestätigung, bevor du echte Käufer einlädst.
[/doc-step]
[doc-step]
**Die Wartezeit ab Versand planen**

Wähle unter **Bestell-Status für Bewertungen** deinen Versandstatus. Trifft die Pfanne üblicherweise innerhalb einer Woche ein, bieten sich unter **Wartezeit nach dem Statuswechsel** sieben Tage an. Setze **Höchstalter des Statuswechsels** höher und nutze **Zusätzliche Wartezeit bei Auslandslieferungen**, wenn grenzüberschreitende Lieferungen länger dauern.
[/doc-step]
[doc-step]
**Den Zeitpunkt für eine weitere Einladung wählen**

Lege **Mindestabstand zwischen Einladungen** mit Blick auf Stammkunden fest. Wer in der nächsten Woche noch einen Deckel bestellt, hat vielleicht schon eine Einladung zur Bestellung der Pfanne bekommen. Der Abstand verhindert, dass gleich eine zweite Bitte um Bewertung folgt.
[/doc-step]
[/doc-steps]

Das Rezept [Bewertungseinladung planen](/kochbuch/optimierter-ablauf-bitte-um-bewertung) zeigt dir, wie du eine Bestellung vom Versand bis zum Formular verfolgst.
