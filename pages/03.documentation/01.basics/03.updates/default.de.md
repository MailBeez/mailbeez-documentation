---
# http://learn.getgrav.org/content/headers
title: Aktualisieren des MailBeez Grundsystems
slug: updates
routes:
  default: /dokumentation/updates
  aliases:
    - /dokumentation/installation/config
menu: Aktualisieren
published: true
template: docs
# theme: false
visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    category: docs
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
[Zur Referenz für ältere Versionen](/legacy).
[/doc-callout]

Seit MailBeez 3.0 kann das Updatewerkzeug die Core-Dateien eines älteren Shops ersetzen. Notiere vor dem Update die installierte Version und sichere eigene Änderungen separat. So kannst du sie mit den neu installierten Dateien vergleichen.

## Update über eine Benachrichtigung starten

1. <span id="aktualisieren-bei-anzeige"></span>Öffne den Versionshinweis in MailBeez und starte das Updatewerkzeug.
2. Das Werkzeug prüft den Server, lädt das Paket herunter und prüft die Schreibrechte für alle benötigten Dateien. Behebe gemeldete Rechteprobleme, bevor du fortfährst.
3. Warte, bis das Werkzeug `/mailhive` gesichert und die neuen Dateien geschrieben hat. Öffne die Administration wieder und prüfe den Updatehinweis.

Hängt die Sicherung bei einer Version vor 3.3.4, entferne nur Dateien mit dem Präfix `appcache_` aus `/mailhive/common/templates_c` und starte das Update erneut. Ab 3.3.4 bereinigt das Werkzeug diese Cache-Dateien selbst.

## Updatewerkzeug direkt öffnen

<span id="manuelles-aktualisieren"></span>Setze in der URL deiner MailBeez-Administration den Parameter `cloudloader_mode=update_core`, etwa `https://shop.example/admin/mailbeez.php?cloudloader_mode=update_core`. Folge denselben Prüfschritten.

<span id="aktualisierung-per-ftp"></span>Kann das Werkzeug das Update nicht abschließen, lade das [Core-Paket](https://apps.mailbeez.com/api/public/v1/core/get) herunter, entpacke es lokal und übertrage die Dateien per FTP in die entsprechenden Shopverzeichnisse.
