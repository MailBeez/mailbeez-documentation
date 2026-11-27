---
# http://learn.getgrav.org/content/headers
title: "Versand bei Besuch"
module_subtitle: "Versand durch Shopbesuche starten"
slug: config_cron_simple
# menu: MailBeez automatisch ausführen
date: 05-07-2011
published: true
publish_date: 05-07-2011
# unpublish_date: 05-07-2011
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
    tag: [pro, "Versand durch Shopbesuche starten"]
module:
    code: 'config_cron_simple'
    category: [configbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/08/icon_cron_32.png'
    pro: 'pro'
    cert: 'true'
    price: '19 EUR'
    title_en: 'Run MailBeez Automatically'
    teaser_en: 'do some magic'
    title_de: 'MailBeez automatisch ausf&uuml;hren'
    teaser_de: 'Die einfache L&ouml;sung, um MailBeez zu automatisieren'
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

In deinem Wollshop ist nachts wenig los. Um 7 Uhr wäre eine Bewertungsanfrage zu einem Strickset fällig. Der erste Kunde öffnet den Shop aber erst mittags. Starten Shopbesuche die Verarbeitung, kann die Anfrage bis dahin warten. Das passt, wenn es beim Versand auf einige Stunden Unterschied nicht ankommt.

## Festlegen, wie lange ein Lauf warten darf

Öffne **System → Erweiterungen → Zusatzmodule → Versand und Zeitplanung** und wähle **Versand durch Shopbesuche starten**.

[doc-steps]

[doc-step]
**Den Mindestabstand einstellen**

Die Anbindung im Shop muss aktiv sein. Lege den **Mindestabstand bei Shopbesuchen (Stunden)** fest. Bei zwei Stunden Abstand startet ein Besuch zehn Minuten nach dem letzten Lauf noch keinen neuen.
[/doc-step]

[doc-step]
**Besuche und Laufzeit vergleichen**

Nach Ablauf des Abstands kann der nächste geeignete Besuch die Verarbeitung starten. Soll eine Erinnerung auch an ruhigen Tagen früh hinausgehen, richte einen Server-Cronjob für die [automatische Verarbeitung](/configbeez/automatische-verarbeitung) ein.
[/doc-step]

[/doc-steps]
