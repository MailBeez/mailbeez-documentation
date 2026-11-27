---
# http://learn.getgrav.org/content/headers
title: "Prozesskonfiguration"
module_subtitle: "Nach einem abgebrochenen Lauf aktive Versandprozesse prüfen"
slug: config_process_control
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
    tag: [core, "Prozess Konfiguration"]
# added collection selector

author:
    name: admin
metadata:
    author: admin
---

Prüfe nach einem abgebrochenen Lauf, ob noch ein Versandprozess arbeitet. Diese Einstellungen verhindern, dass zwei Läufe gleichzeitig E-Mails verarbeiten.

Ein Lauf kann ohne Nachricht enden, wenn niemand die Bedingungen erfüllt. Ein unterbrochener Lauf hat ein anderes Fehlerbild. Kläre vor einem neuen Start, welcher Fall bei dir vorliegt.

Öffne **System → Konfiguration** und wähle **Prozess Konfiguration**.

Vergleiche den letzten Start- und Abschlusszeitpunkt. Fehlt eine Kampagnen-E-Mail, suche unter [Versand & Status](/sending-status) nach einem Versandprotokolleintrag, bevor du einen weiteren Lauf startest.
