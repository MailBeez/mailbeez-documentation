---
# http://learn.getgrav.org/content/headers
title: Auflistung Opt-Out Abmeldungen
slug: report_block
menu: Opt-Out Abmeldung
date: 03-03-2011
published: true
publish_date: 03-03-2011
# unpublish_date: 03-03-2011
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

>>>>>>Dieser Bericht kann schnell und kompfortabel vom MailBeez Dashboard über den "Beez-O-Graph" mit Klick auf die Legende **Abmeldungen** geöffnet werden.

Als Bestand-Teil vom MailBeez Grundsystem gibt dieses Modul Einblick, welche Kunden sich mit Klick auf den Abmelde-Links in den MailBeez Emails von weiteren Emails abgemeldet haben.

Die Liste zeigt, zu welcher Zeit und welches Modul der Kunden abgemeldet hat. 

- **PROD**:  Abmeldung im Produktions-Modus
- **[SIM]**:  Abmeldung im Simulations-Modus

Die Opt-Out Links in den Emails enthalten eine Kennzeichnung des Betriebs-Modus, d.h. "Produktions-Abmeldungen" werden auch als solche verarbeitet wenn sich MailBeez im Simulations-Modus befindet.

>>>>>Das Abmelden im Simulations-Modus wird nur dann richtig erfasst, wenn unter MailBeez > Konfiguration > Simulation die "Simulations-Protokollierung" aktiviert (True) ist.

Die Simulations-Daten können mit Klick auf "Simulation neu starten" gelöscht werden.