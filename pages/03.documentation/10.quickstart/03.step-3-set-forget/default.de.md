---
# http://learn.getgrav.org/content/headers
title: "Automatische Verarbeitung prüfen"
slug: step-3-set-forget
# menu: "Schritt 3: Einstellen & Zurücklehnen"
date: 27-05-2010
published: true
publish_date: 27-05-2010
# unpublish_date: 27-05-2010
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
    tag: []
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

Bei jedem geplanten Lauf prüft MailBeez, welche E-Mails fällig sind. Markierst du heute eine Testbestellung als versendet und hast für die Bewertungsanfrage sieben Tage Wartezeit eingestellt, kann der heutige Lauf ohne Einladung enden. Interessant ist der erste Lauf, der nach diesen sieben Tagen ins Versandfenster fällt.

## Den ersten Lauf prüfen

1. **Einen passenden Kontakt auswählen.** Prüfe, was den Flow auslöst und wann die E-Mail fällig ist. Bei einer [Bewertungsanfrage](/mailbeez/review_advanced) zählst du ab dem Wechsel in den gewählten Bestellstatus. Suche einen zweiten Kontakt, für den es noch zu früh ist. Notiere, welche Adresse du im Ergebnis erwartest.
2. **Die Auswahl testen.** Starte den Flow in einem Testshop im [Simulationsmodus](/configbeez/config_simulation). Die erste Adresse sollte im Ergebnis stehen, die zweite sollte fehlen. Möchtest du Betreff, Links und Angebot im Postfach prüfen, aktiviere die Simulationskopien und kontrolliere die Zieladresse. Ein in der Simulation erzeugter Gutschein kann im Shop einlösbar sein.
3. **Den Zeitplan prüfen.** Öffne im selbst gehosteten Shop die [automatische Verarbeitung](/configbeez/automatische-verarbeitung) und schau nach, was den Lauf auslöst. Bei einem gehosteten Shop prüfst du den Zeitplan deines Kontos. Kontrolliere auch den Versandmodus für geplante Läufe. Eine manuelle Simulation zeigt dir die Empfängerauswahl zum Zeitpunkt des Tests.
4. **Die erste Aussendung nachschlagen.** Suche nach dem erwarteten Produktivlauf unter [Versand & Status](/sending-status) nach der Adresse. Öffne den Versandeintrag, um die Rückmeldungen zur Zustellung zu sehen. Fehlt der Eintrag, prüfe, wann der Lauf stattgefunden hat und ob der Kontakt die Bedingungen noch erfüllt hat.
