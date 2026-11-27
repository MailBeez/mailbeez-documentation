---
# http://learn.getgrav.org/content/headers
title: Responsive Template Manager
module_subtitle: "Responsive E-Mail-Vorlagen im früheren Template Manager verwalten"
slug: config_tmplmngr
routes:
    aliases:
        - /dokumentation/configbeez/config_tmplmngr
# menu: Responsive Vorlagen Verwaltung
date: 30-06-2011
published: true
publish_date: 30-06-2011
# unpublish_date: 30-06-2011
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
    code: 'config_tmplmngr'
    category: [configbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio,comp_saas]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/08/icon_321.png'
    pro: 'pro'
    cert: 'true'
    price: '159 EUR'
    title_en: 'Responsive Template Manager'
    teaser_en: 'edit your campaign templates from you MailBeez admin and send responsive Emails'
    title_de: 'Responsive Vorlagen-Verwaltung'
    teaser_de: 'Bearbeite die MailBeez Vorlagen direkt in der Admin und versende responsive Emails'
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
In V5 kannst du unter [Haupt-Vorlagen](/content/main-templates) den gemeinsamen E-Mail-Rahmen ändern. [Zur Referenz für ältere Versionen](/legacy).
[/doc-callout]

Ändere mit dem früheren visuellen Editor ein gemeinsames E-Mail-Layout. Speichere zuerst eine benannte Kopie, damit du bei unerwünschten Auswirkungen auf andere E-Mails zurückkehren kannst.

Prüfe zwei Kampagnen mit demselben Layout, am besten eine kurze Nachricht und eine mit langem Produktnamen. Die Layoutänderung sollte für beide funktionieren.

1. <span id="funktionen"></span>Öffne die Vorlage und bearbeite ihre Elemente. Die Verwaltung importiert `.tpl`-Dateien der Module und speichert die bearbeitbaren Vorlagen in der Shopdatenbank. Im **Nerd-Mode** kannst du den Quelltext anpassen.
2. Prüfe die mobile Vorschau sowie HTML- und Textfassung. MailBeez erzeugt den Text normalerweise aus dem HTML. Für einen eigenen Modultext braucht auch die Hauptvorlage eine eigene Textfassung.
3. Sende eine Test-E-Mail. Bei Bedarf lade die gespeicherte Kopie oder die Standardvorlage. Für sprachabhängige Fassungen siehe [Erweiterung für Mehrsprachigkeit](/configbeez/config_tmplmngr_lng).
