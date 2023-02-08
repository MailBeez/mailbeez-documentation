---
title: Gastkonten zusammenfassen
slug: config_account_aggregation
routes:
    aliases:
        - /dokumentation/installation/config/config_account_aggregation

# menu: MailBeez Copyright entfernen
published: true
# unpublish_date: 09-09-2011
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
    code: 'config_account_aggregation'
    category: [configbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/09/certificate_32.png'
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

#### Problem: Redundante Gast-Konten

Wenn ein Kunde mehrmals per Gast-Konto mit gleicher Email-Adresse bestellt hat, liegen im System mehrere Kunden-Konten mit gleicher Email-Adresse. Die jeweiligen Bestellungen gehören somit zu verschiedene Kunden-Konten. Dies macht es sehr schwer z.B. das Datum des letzten Kaufes zu ermitteln.


## Automatisiertes Aufräumen

Mit dem Modul "Gastkonten zusammenfassen" werden automatisiert die redundanten Daten zusammengeführt:

- Je Email-Adresse nur 1 Kunden-Konto, egal ob die Email-Adresse für Gast- und/oder Bestands-Konten genutzt wurde
- Alle Bestellungen gehören zum zusammengeführten Kunden-Konto
- der Konto-Type der zusammengeführten Konten kann in der Konfiguration gewählt werden, um z.B. ursprünglichen Gast-Bestellern das Anfordern eines Passwortes zu ermöglichen.



Einmal konfiguriert wird das Modul "Gastkonten zusammenfassen" also laufend die wertvolle Datengrundlage optimieren und automatisiertes Email-Retargeting mit MailBeez verbessern.

Alle Änderungen werden protokolliert und machen die Zusammenführung der Daten nachvollziehbar.


### Installation

Unter MailBeez > Konfiguration das Modul "Konten zusammenfassen" aktivieren.

Unter MailBeez > MailBeez Module erscheint dann "Service Konten zusammenfassen" - hier kann das Modul ausgeführt werden. Zur Automatisierung bitte den beschriebenen Cronjob konfigurieren.


### Testen

Dieses Modul hat einen eigenen Simulations-Modus, welcher standardmässig gewählt ist. Zu testen bitte das Service-Modul ausführen.

Dann unter CRM Pad > BeezDesk CRM Dashboard > Konto Konsolidierung die durchgeführten Vorgänge einsehen. Wenn alles richtig aussieht, kann der Simulations-Modus unter MailBeez > Konfiguration > "Konten zusammenfassen" deaktiviert werden.


