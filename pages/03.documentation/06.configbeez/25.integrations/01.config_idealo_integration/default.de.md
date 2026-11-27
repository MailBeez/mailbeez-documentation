---
# http://learn.getgrav.org/content/headers
title: "idealo"
module_subtitle: "Bewertungen von idealo importieren"
slug: config_idealo_integration
routes:
    default: /dokumentation/configbeez/config_idealo_integration
    
# menu: Idealo Integration Suite
date: 15-04-2015
published: true
publish_date: 15-04-2015
# unpublish_date: 15-04-2015
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
    tag: [pro, "Bewertungen von idealo importieren"]
module:
    code: 'config_idealo_integration'
    category: [configbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]    
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

Eine Ersatzpumpe kommt noch vor dem Wochenende an. Der Kunde lobt die schnelle Lieferung auf idealo und dein Shop erhält die Bewertung per E-Mail. MailBeez liest solche Benachrichtigungen aus einem IMAP-Postfach und verschiebt verarbeitete Nachrichten in den vorgesehenen Ordner.

## Eine Bewertungsnachricht aus dem Postfach einlesen

Öffne **System → Erweiterungen → Externe Dienste** und wähle **Bewertungen von idealo importieren**.

[doc-steps]

[doc-step]
**Das richtige Postfach verbinden**

Trage **IMAP-Server**, **IMAP-Benutzername** und **IMAP-Passwort** für das Postfach ein, in dem die idealo-Nachrichten ankommen. Wähle **IMAP-Port** und **IMAP-Verbindungsoptionen** nach den Vorgaben deines Mailanbieters. Speichere und wähle **Postfach testen**.
[/doc-step]

[doc-step]
**Die Verarbeitung festlegen**

Wähle einen beschreibbaren **Ordner für verarbeitete Nachrichten** und lege **Nachrichten pro Importlauf** fest. Lass **Bei normaler MailBeez-Verarbeitung ausführen** aktiv, sofern kein eigener Cronjob den Import übernimmt. **Import starten** verarbeitet Nachrichten. Vergleiche das Datum einer bekannten Bewertung mit der Benachrichtigung im Zielordner.
[/doc-step]

[/doc-steps]

Um Käufer um eine neue idealo-Bewertung zu bitten, nutze den [idealo-Einladungsflow](/mailbeez/idealo_advanced).
