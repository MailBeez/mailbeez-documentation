---
# http://learn.getgrav.org/content/headers
title: Anpassung der Modul-Vorlagen
slug: anpassung-der-modul-vorlagen
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

[doc-callout type="note" title="Frühere MailBeez-Versionen"]
In V5 kannst du unter [Haupt-Vorlagen](/content/main-templates) den gemeinsamen E-Mail-Rahmen ändern. [Zur Referenz für ältere Versionen](/legacy).
[/doc-callout]

<span id="aufbau-der-vorlagen"></span>Bearbeite die Modulvorlage, wenn sich der Inhalt einer einzelnen Kampagne ändern soll. Im früheren Editor fügt die gemeinsame Hauptvorlage diese Nachricht bei `{$body}` ein. Die Modulvorlage kann eine Produktliste einbinden, etwa mit `{$list_engine.productlist}`. Den heutigen [Geburtstagsflow](/mailbeez/coupon_birthday) beschreibt die V5-Anleitung. Für Änderungen am gemeinsamen Kopfbereich siehe [Eine Haupt-Vorlage bearbeiten](/tutorials/anpassung-der-hauptvorlage).

Verwende in der Vorschau Text in realistischer Länge. Eine Zeile mit kurzem Beispielnamen kann bei einem langen Kundennamen ganz anders umbrechen.

## Kampagnenlayout bearbeiten

1. <span id="modul-vorlage-zum-bearbeiten-ffnen"></span><span id="modul-vorlage-zum-bearbei"></span>Öffne die Vorlagenverwaltung des Moduls. Beim Geburtstagsmodul findest du sie unter **MailBeez → MailBeez Module → Gutschein: Geburtstags Glückwünsche**. Wähle dort **bearbeiten**. Der visuelle Editor gehörte zu den Profi-Modulen.
2. <span id="element-lschen"></span><span id="element-einfgen"></span><span id="laden-einer-vorlage"></span><span id="anpassung-des-inhaltes"></span><span id="inhalt-bearbeiten"></span><span id="element-verschieben"></span><span id="element-loeschen"></span><span id="element-einfuegen"></span>Um ein Layout zu laden, öffne **Layout-Vorlage wählen** und wähle die zum Modul passende responsive Vorlage. Mit dem Bleistift bearbeitest du ein Element, mit den Pfeilen verschiebst du es. Der Papierkorb entfernt es, das Pluszeichen fügt danach ein neues Element ein.
3. <span id="testen-der-vorlage"></span>Prüfe die Vorschau bei 320 und 480 Pixeln. Ragt ein Bild über den Rand, teste `100%` als Breite. Kürze lange sichtbare Linktexte. Prüfe dann die Vorschau **Mobil** und sende dir eine Test-E-Mail.
4. <span id="text-version"></span>Öffne **TXTMODE**, um die Textfassung zu erzeugen oder zu bearbeiten. Prüfe, ob der wichtigste Link enthalten ist.
5. <span id="speichern-einer-vorlage"></span><span id="aufpasst-nerd-mode"></span>Wähle **als Layout-Vorlage speichern** und gib deiner Kopie einen Namen. Unter **Layout-Vorlage wählen → User** kannst du sie wieder laden. Teste Änderungen im **Nerd-Mode** erneut in den E-Mail-Programmen deiner Kunden.
