---
# http://learn.getgrav.org/content/headers
title: "Gutscheinvorlage erstellen"
slug: erstellen-von-vorlagen-gutscheinen
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

<span id="personalisierte-gutscheine"></span>Lege den Rabatt einmal fest und lass die Kampagne für jeden Empfänger einen eigenen Code erzeugen. Dein Shop braucht ein unterstütztes Gutscheinsystem. Bei älteren osCommerce-Installationen kann dafür eine zusätzliche Erweiterung nötig sein.

Überlege vor dem Festlegen des Rabatts, wofür der Gutschein gelten soll. Ein fester Betrag für ausgewählte Artikel ist ein anderes Angebot als ein prozentualer Nachlass auf die Bestellung.

1. Öffne **Inhalte → Gutscheine → Vorlagen** und wähle **Neue Vorlage**.
2. Lege Rabatt, Gültigkeitsdauer und Einschränkungen des Angebots fest.
3. <span id="zuordnen-des-vorlagen-gutscheines"></span>Wähle in der Kampagne die Gutscheinvorlage für den gewünschten E-Mail-Schritt. Prüfe die erzeugte E-Mail in der Simulation, bevor du an Kunden versendest.
4. Bereits erzeugte Codes findest du unter **Inhalte → Gutscheine → Generierte**. Die Vorlage gibt die Regeln für diese Codes vor.

## Vorlagencodes im früheren Gutscheinsystem

<span id="anlegen-eines-vorlagen-gutscheines"></span>Lege im Gutscheinbereich der Shopverwaltung einen Gutschein an. Gib `template_birthday` in das Feld für den Gutscheincode ein. Die frühere Auswahl erkennt Vorlagen am Präfix `template_` im Code. Ein Name mit diesem Präfix genügt nicht. Speichere den Rabatt und weise die Vorlage im Geburtstagsmodul zu.

<span id="funktionsweise"></span><span id="wissenswertes"></span><span id="testen-des-gutschein-generators"></span>Beim Lauf erzeugt MailBeez aus der Vorlage einen persönlichen Code mit eigenem Ablaufdatum. Das frühere Modul kennzeichnet simulierte Codes mit `[SIM]`. Auch solche Codes können einlösbar sein. Prüfe sie in einem Testshop.

<span id="lschen-von-simulations-gutscheinen"></span><span id="lschen-alter-gutscheine"></span><span id="finden-von-gutscheinen"></span>Die frühere Gutscheinverwaltung unterscheidet zwischen Simulationscodes und abgelaufenen Gutscheinen. Prüfe vor dem Aufräumen, welche Gruppe ausgewählt ist. Mit der Gutscheinsuche im früheren Dashboard findest du unter `template_` die Vorlagen wieder.
