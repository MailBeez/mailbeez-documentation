---
# http://learn.getgrav.org/content/headers
title: "idealo-Bewertungen"
module_subtitle: "Um Bewertungen auf idealo bitten"
slug: idealo_advanced
# menu: Idealo Profi
date: 15-04-2015
published: true
publish_date: 15-04-2015
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
    tag: [pro, "Um Bewertungen auf idealo bitten"]
    
module:
    plans_position: after_guide
    code: 'idealo_advanced'
    category: [mailbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2013/06/top_64.png'
    pro: 'pro'
    cert: 'true'
    price: '99 EUR'
    title_en: 'Idealo Advanced'
    teaser_en: 'Advanced Features: Delay for international orders, multiple Order status, recognition of regular customers'
    title_de: 'Idealo Profi'
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

Ein Käufer findet bei idealo einen Ersatzfilter für seinen Staubsauger und bestellt ihn bei dir. Nach der Lieferung kannst du ihn nach seiner Erfahrung mit deinem Shop fragen. Die Einladung führt zum Bewertungsformular für deine Händler-ID. Du entscheidest, welche Angaben aus der Bestellung der Link mitgibt.

## Flow einrichten

Öffne **Kampagnen → Automatisierung → MailBeez Flows → Um Bewertungen auf idealo bitten** und wähle **Optionen → Konfigurieren**.

<span id="bestellstatus-und-warteze"></span>
<span id="diese-einstellungen-sind-"></span>

[doc-steps]
[doc-step]
**Händler und Angaben im Link festlegen**

Trage deine **Idealo Händler ID** ein. Mit **Daten Vor-Ausfüllen** ergänzt MailBeez den Link um Bestellnummer und E-Mail-Adresse aus der Bestellung. Ohne diese Option führt der Link ebenfalls zum Händler. Verwende zum Prüfen der übergebenen Angaben eine Testbestellung.
[/doc-step]
[doc-step]
**Zeit für die Zustellung lassen**

Wähle unter **Bestell-Status** deinen Versandstatus. Für eine Einladung eine Woche nach Versand trägst du unter **Wartezeit nach dem Statuswechsel** sieben Tage ein. Wähle für **Höchstalter des Statuswechsels** mehr als sieben Tage, damit ein späterer Lauf passende Bestellungen noch finden kann.
[/doc-step]
[doc-step]
**Die Einladung aus Käufersicht öffnen**

Folge dem Link einer Testmail. Prüfe den Händlernamen im Formular und vergleiche gegebenenfalls die vorbelegten Angaben mit der Bestellung. Frag in der E-Mail etwa, ob das Paket wie angekündigt eingetroffen ist.
[/doc-step]
[/doc-steps]

Wann eine Händlerbewertung und wann eine Produktbewertung sinnvoll ist, liest du unter [Bewertungseinladung planen](/kochbuch/optimierter-ablauf-bitte-um-bewertung).
