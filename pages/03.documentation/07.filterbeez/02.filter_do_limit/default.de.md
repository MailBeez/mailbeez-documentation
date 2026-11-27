---
# http://learn.getgrav.org/content/headers
title: "Tageslimit"
module_subtitle: "Täglichen Versand von Flow-E-Mails begrenzen"
slug: filter_do_limit
# menu: Einfache Drosselung
published: true
template: docs
# theme: false
visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: review
    category: [docs]
    tag: [pro, "Täglichen Versand von Flow-E-Mails begrenzen"]
module:
    code: 'filter_do_limit'
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

Nach einem gut besuchten Ausverkauf schaltest du Bewertungseinladungen ein. Solange dein Team die Rückfragen bearbeitet, möchtest du höchstens 100 Flow-E-Mails am Tag verschicken. Hat MailBeez heute bereits 80 solcher Nachrichten versendet, bleiben für alle weiteren Flows zusammen noch 20.

## Ein Tageslimit für Flows festlegen

Öffne **System → Erweiterungen → Zusatzmodule → Versand und Zeitplanung** und wähle **Täglichen Versand von Flow-E-Mails begrenzen**.

Trage unter **Trigger-E-Mails pro Tag** die Gesamtzahl für den Shop ein. Alle betroffenen Trigger-Module teilen sich dieses Limit. Der Kalendertag richtet sich nach dem Datenbankserver. Newsletter und Testsendungen zählen nicht mit.

Bei null stoppt der Versand dieser Flow-E-Mails. Deaktiviere das Zusatzmodul, wenn du das Tageslimit aufheben möchtest. Begrenzt dein Versanddienst auch die Geschwindigkeit, sieh dir das [Sendetempo](/filterbeez/filter_do_throttling_simple) an.
