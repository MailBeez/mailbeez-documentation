---
# http://learn.getgrav.org/content/headers
title: "Versandmethode"
module_subtitle: "Einen Versanddienst verbinden und den Absender per Testnachricht prüfen"
slug: config_email_engine
routes:
    aliases:
        - /dokumentation/installation/config_queen/email-engine-configuration
        - /dokumentation/installation/config/config_email_engine

# menu: Email Engine Konfiguration
date: 26-03-2012
published: true
publish_date: 26-03-2012
# unpublish_date: 26-03-2012
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

Halte die Verbindungsdaten deines Versanddienstes und ein eigenes Testpostfach bereit. Schicke nach der Einrichtung eine Testnachricht dorthin. Prüfe den sichtbaren Absender und antworte auf die Nachricht, um zu sehen, in welchem Postfach die Antwort ankommt.

Öffne **System → Konfiguration** und wähle **Versandmethode**.

Wähle den Versanddienst für deinen Shop und trage dessen Verbindungsdaten ein. Prüfe die Verbindung und teste den Empfang mit deiner eigenen Adresse, bevor du den Dienst für Kampagnen nutzt.

<span id="diese-einstellungen-sind-"></span>

## Schwellenwerte für Versandfehler festlegen

- **Fehlerquote in 1 Stunde**<br>
  Der Standardwert liegt bei 5 %. Die Prüfung setzt mindestens drei Fehler in dieser Stunde voraus.
- **Fehlerquote in 24 Stunden**<br>
  Der Standardwert liegt bei 2 %. Die Prüfung setzt mindestens drei Fehler innerhalb von 24 Stunden voraus.
