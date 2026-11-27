---
# http://learn.getgrav.org/content/headers
title: "Eine Haupt-Vorlage bearbeiten"
slug: anpassung-der-hauptvorlage
original_v4: true
published: true
template: tutorial

visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: done
    category: [docs]
    tag: [pro]
---

<span id="aufbau-der-vorlagen"></span>Bearbeite das gemeinsame Design, wenn ein neues Logo oder eine neue Fußzeile in mehreren Kampagnen erscheinen soll. Die Hauptvorlage umschließt den Inhalt der einzelnen Kampagnen. Wähle für die Vorschau eine typische Nachricht.

Nutze eine Vorschau mit Logo und längerem Text. Daran siehst du, ob der gemeinsame Kopfbereich der eigentlichen Kampagnennachricht genügend Platz lässt.

1. Öffne **Inhalte → Haupt-Vorlagen** und wähle die Vorlage deiner Kampagne. Für den visuellen Editor brauchst du die entsprechenden Pro-Funktionen.
2. Aktualisiere Logo, Links im Kopfbereich und Unternehmensangaben in der Fußzeile. Prüfe jede Versandsprache.
3. Sieh dir eine Kampagnen-E-Mail mit realistisch langen Texten an. Prüfe neben der HTML- auch die Textversion.

Pflegst du eine eigene Smarty-Vorlage, behalte den Platzhalter `{$body}` bei. Er fügt den Kampagneninhalt in das gemeinsame Layout ein.

## Die gemeinsame Vorlage im V4-Editor

<span id="gemeinsame-hauptvorlage-zum-bearbeiten-ffnen"></span><span id="laden-einer-vorlage"></span><span id="anpassung-der-kopf-bilder"></span><span id="anpassung-der-firmen-angaben-im-fussbereich"></span><span id="anpassung-der-men-eintrge"></span>Öffne **MailBeez → Konfiguration → Template Verwaltung → Gemeinsame Hauptvorlage bearbeiten**. Unter **Layout-Vorlage wählen** kannst du das Layout **responsive Email** laden. Einträge mit `@480` steuern das Kopfbild für schmale Bildschirme. Klicke direkt auf die Navigation oder die Firmenangaben in der Fußzeile, um sie zu bearbeiten.

<span id="testen-der-vorlage"></span><span id="text-version"></span>Prüfe die Vorschau bei **320px** und **480px**. Ragt der Inhalt über den Rand, suche nach einem Bild mit fester Breite oder einem langen Linktext. Mit **TXTMODE** kontrollierst du auch die Textfassung.

<span id="speichern-einer-vorlage"></span><span id="aufpasst-nerd-mode"></span>Speichere einen benannten Stand mit **als Layout-Vorlage speichern**. Unter **Layout-Vorlage wählen → User** kannst du ihn erneut laden. Das ist besonders hilfreich, bevor du im **Nerd-Mode** den Quelltext bearbeitest.
