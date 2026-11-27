---
# http://learn.getgrav.org/content/headers
title: "Ereignisprotokoll"
module_subtitle: "Gespeicherte Ereignisse eines früheren MailBeez-Laufs prüfen"
slug: report_event_log
# menu: MailBeez Event Log Viewer
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
    tag: [core, "Ereignis Protokoll"]
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
In V5 kannst du unter [Versand & Status](/sending-status) eine einzelne Zustellung prüfen. [Zur Referenz für ältere Versionen](/legacy).
[/doc-callout]

Suche nach Start und Ende desselben Laufs, bevor du eine fehlende E-Mail untersuchst. Ein regulärer Lauf beginnt mit `MAILHIVE_RUN_INIT` und endet mit `MAILHIVE_RUN_COMPLETE`. Bei einer Test-E-Mail heißen die Ereignisse `MAILHIVE_TEST_INIT` und `MAILHIVE_TEST_COMPLETE`. Fehlt der Abschluss, prüfe das Protokoll für diesen Zeitpunkt.

Lies die Ereignisse unmittelbar vor und nach der auffälligen Stelle. So lässt sich ein abgebrochener Lauf von einem abgeschlossenen Lauf ohne passende Empfänger unterscheiden.

Bei aktiver Modulprotokollierung kennzeichnet `MAILBEEZ_MODULE_INIT` den Modulstart. `PROD` steht für Produktivbetrieb, `[SIM]` für Simulation.
