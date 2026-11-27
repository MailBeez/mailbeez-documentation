---
title: "Versandläufe im älteren Shop planen"
slug: versandlaeufe-planen
template: docs
visible: true
published: true
taxonomy:
    category: [docs]
---

Diese Anleitung gilt für ältere, selbst gehostete Shops mit MailBeez Auto-run oder MailBeez Auto-run Advanced. Eine Bewertungseinladung kann morgens um 8 Uhr fällig sein. Wann sie versendet wird, hängt auch davon ab, wann die Verarbeitung startet.

## Was startet einen Lauf?

- **MailBeez Auto-run**<br>
  Nach Ablauf des Mindestabstands kann ein Shopbesuch die Verarbeitung starten. Liegt der Abstand bei zwölf Stunden und kommt nachts niemand in den Shop, beginnt der nächste Lauf unter Umständen erst mit dem ersten Besuch am Morgen. Prüfe, ob die erforderliche Einbindung im Shop vorhanden ist.
- **Server-Cronjob**<br>
  Soll die Verarbeitung auch bei wenig Besuchern pünktlich starten, hinterlege die private Cronjob-URL aus deiner Installation im Zeitplan deines Hosters. Ein Aufruf startet die Verarbeitung im eingestellten Modus. Prüfe den Versandmodus vor dem ersten Lauf.
- **MailBeez Auto-run Advanced**<br>
  Mit der erweiterten Version kannst du für einzelne Kampagnen unterschiedliche Versandzeiten vorgeben. Auch hier können Shopbesuche die Verarbeitung starten.

## Ein Modul zur richtigen Zeit ausführen

Im früheren Zeitsteuerungsmodul nimmt ein Modul mit **Default** an den regulären Läufen teil. **Direct** benötigt einen Aufruf seiner eigenen Modul-URL. Mit **Timed** begrenzt du die Ausführung auf bestimmte Wochentage und Uhrzeiten.

Darf das Bewertungsmodul dienstags zwischen 8 und 9 Uhr laufen, liegt ein Serverlauf um 8:15 Uhr im Fenster. Kommt der erste Shopbesucher um 10 Uhr, ist das Fenster bereits vorbei. Läuft das Modul nur einmal pro Woche, muss auch der eingestellte Zeitraum für das Bestellalter die Tage zwischen zwei Läufen abdecken.

In V5 findest du den Zeitplan des Shops unter [Automatische Verarbeitung](/configbeez/automatische-verarbeitung) und die Modulzeiten unter [Versandzeiten je Modul festlegen](/configbeez/config_cron_advanced). Bei einer gehosteten Anbindung übernimmt MailBeez Services die Zeitplanung.
