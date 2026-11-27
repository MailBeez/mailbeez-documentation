---
# http://learn.getgrav.org/content/headers
title: "Einladungen verteilen"
module_subtitle: "Einladungen auf Bewertungsdienste verteilen"
slug: filter_check_routing
routes:
    aliases:
    - /dokumentation/filterbeez/filter_check_routing
# menu: Bewertungs‑Routing
date: 19-12-2025
published: true
publish_date: 19-12-2025
# unpublish_date: 26-09-2011
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
    tag: [pro, "Einladungen auf Bewertungsdienste verteilen"]
module:
   code: 'filter_check_routing'
   category: [filterbeez]
   compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio,comp_saas]
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

Ein Kochgeschirrshop bittet einen Teil seiner Käufer um eine Bewertung bei Google, den anderen bei AUSGEZEICHNET.org. Erfüllt eine Bestellung die Bedingungen beider Einladungsflows, könnte der Käufer zwei E-Mails bekommen. Verteilungsregeln teilen die Bestellungen im gewünschten Verhältnis auf die Dienste auf.

## Festlegen, was beim selben Dienst bleiben soll

Öffne **System → Erweiterungen → Zusatzmodule → Filter** und wähle **Einladungen auf Bewertungsdienste verteilen**.

Enthält der aktive Filter bereits ungültige gespeicherte Regeln, blockiert er den Versand, bis sie korrigiert sind. Prüfe die Regeln zuerst, wenn nach einer Änderung auch andere Flows ausbleiben.

Wähle **Regeln bearbeiten**. Nutze die Bestellnummer, wenn jede Bestellung ein festes Ziel erhalten soll. Mit der Kundennummer landen auch spätere Bestellungen desselben Kunden beim gleichen Dienst. Die Regeln gelten für die genannten Einladungsmodule. Bestellstatus und Wartezeit prüft jeder Flow weiterhin selbst.

Ein vollständiges Regelpaar für etwa zwei Drittel Google-Einladungen findest du unter [Einladungen auf zwei Bewertungsdienste verteilen](/kochbuch/optimierter-ablauf-bitte-um-bewertung#bewertungseinladungen-verteilen).
