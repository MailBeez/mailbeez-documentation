---
# http://learn.getgrav.org/content/headers
title: "Grundeinstellungen"
module_subtitle: "Festlegen, welche Bestellstatus bei der Umsatzberechnung zählen"
slug: config_queen

routes:
    aliases:
        - /dokumentation/installation/config_queen

# menu: Grund-Konfigurations Modul
date: 21-05-2010
published: true
publish_date: 21-05-2010
# unpublish_date: 21-05-2010
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
    tag: [core]
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

Lege fest, welche Bestellstatus beim Umsatz zählen. Soll eine stornierte Bestellung aus der Summe fallen, lass den Stornostatus aus der Auswahl. Bei unterschiedlichen Statusregeln können zwei Berichte für dieselben Bestellungen verschiedene Umsätze ausweisen.

Öffne **System → Konfiguration** und wähle **Grundeinstellungen**.

Prüfe hier auch die Optionen für manuelle Läufe.

<span id="diese-einstellungen-sind-"></span>

## Welche Bestellungen zählen zum Umsatz?

- **Gültige Umsatz-Bestellstatus**<br>
  Wähle mindestens einen Status für gültige Umsatz-Bestellungen. Stornos und Erstattungen nur einbeziehen, wenn sie mitzählen sollen. Teilrückerstattungen werden nicht automatisch abgezogen.
