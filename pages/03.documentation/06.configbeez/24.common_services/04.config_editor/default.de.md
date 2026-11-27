---
# http://learn.getgrav.org/content/headers
title: Editor und Bildgenerator
module_subtitle: "Bildquellen und Cache-Einstellungen des früheren visuellen Editors konfigurieren"
slug: config_editor
routes:
    default: /dokumentation/configbeez/config_editor
    
# menu: Visueller Editor
date: 06-04-2017
published: true
publish_date: 24-03-2014
# unpublish_date: 24-03-2014
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
    code: 'pro'
    category: [pro]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio,comp_saas]   
    pro: 'pro'       
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
In V5 kannst du unter [Haupt-Vorlagen](/content/main-templates) den gemeinsamen E-Mail-Rahmen ändern. [Zur Referenz für ältere Versionen](/legacy).
[/doc-callout]

Lege fest, wo der frühere visuelle Editor Bilder sucht, wo der Bildgenerator Dateien zwischenspeichert und mit welchen Breiten du Vorlagen prüfst. Die Einstellungen gelten für die Module, die diesen Editor nutzen.

Originalbild und erzeugte Vorschau erfüllen verschiedene Aufgaben. Kläre, wo die Quelldateien liegen, bevor du ein Verzeichnis für zwischengespeicherte Bilder änderst oder aufräumst.

- **Ausgangsverzeichnis für Bilderverwaltung**<br>
  Gib einen Pfad relativ zum Shopverzeichnis ein. Ohne Angabe sind die Unterverzeichnisse in der Bildauswahl zugänglich. Beschränke den Pfad bei Bedarf auf Kampagnenbilder.
- **Ausgangsverzeichnis für Bild-Cache**<br>
  Gib das Cache-Verzeichnis relativ zum Shopverzeichnis an. Der Bildgenerator kann den Cache neu erzeugen und verschiebt ihn bei einer Pfadänderung. Erhalte den alten Ordner samt `.htaccess`, damit Bilder in bereits versandten E-Mails erreichbar bleiben.
- **Mobil-Editor Breitenangaben**<br>
  Lege drei Vorschaubreiten fest, etwa 320, 480 und 600 Pixel. Wähle Breiten, die deine Vorlage unterstützt.
