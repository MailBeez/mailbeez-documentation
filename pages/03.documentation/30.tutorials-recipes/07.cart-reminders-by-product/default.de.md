---
title: "Warenkorberinnerungen nach Produkt gestalten"
slug: warenkorberinnerungen-nach-produkt
template: docs
visible: true
published: true
taxonomy:
    category: [docs]
---

Wer einen Wasserfilter im Warenkorb liegen lässt, fragt sich vielleicht, ob er in die eigene Espressomaschine passt. Bei einem Beutel Bohnen interessiert eher der Röstgrad. Mit zwei eigenen Flows kannst du für jede dieser Zielgruppen eine passende Erinnerung schreiben.

Das Rezept setzt einen selbst gehosteten Shop voraus, in dem die Zielgruppenquelle **Verlassene Warenkörbe** und die Produktregeln für den Warenkorb verfügbar sind. In der gehosteten Version ist diese Quelle derzeit ausgeblendet. Für einen gemeinsamen Erinnerungstext mit den Artikeln aus dem jeweiligen Warenkorb gibt es die [Warenkorberinnerung](/mailbeez/abandoned_cart_advanced).

## Zwei Zielgruppen anlegen

[doc-steps]
[doc-step]
**Warenkörbe mit dem Wasserfilter auswählen**

Öffne [Kontakte → Listen und Segmente](/contacts/lists-segments), wähle **Neue Zielgruppe** und dann **Verlassene Warenkörbe**. Gib der Zielgruppe einen Namen wie „Warenkorb mit Wasserfilter“ und speichere sie. Öffne **Segmentierung konfigurieren** und wähle unter **Produkte - im Warenkorb** den passenden Ersatzfilter aus. Speichere die Regel.
[/doc-step]
[doc-step]
**Warenkörbe mit den Espressobohnen auswählen**

Lege eine zweite Zielgruppe mit der Quelle **Verlassene Warenkörbe** an. Wähle unter **Produkte - im Warenkorb** deinen Hausespresso aus. Trage unter **Produkte - darf nicht im Warenkorb sein** den Wasserfilter ein. Wer beides im Warenkorb hat, kommt damit nur für die E-Mail zum Wasserfilter infrage.
[/doc-step]
[doc-step]
**Für jede Zielgruppe eine E-Mail schreiben**

Öffne **Kampagnen → Automatisierung → Eigene Flows → Neue Automation** und wähle die Filter-Zielgruppe. Erkläre in der E-Mail, wo man die Modellnummer der Maschine findet, und verlinke die Liste der passenden Modelle. Lege eine zweite Automation für die Espresso-Zielgruppe an. Hier passt etwa die Frage „Wie dunkel ist unser Hausespresso geröstet?“ mit einem Link zum Geschmacksprofil.
[/doc-step]
[/doc-steps]

## Die Empfängerauswahl prüfen

Prüfe die gespeicherten Warenkörbe von Testkonten. Ein Warenkorb nur mit Filter sollte in der ersten Zielgruppe erscheinen, einer nur mit Bohnen in der zweiten. Bei beiden Produkten sollte nur die erste Zielgruppe greifen, bei anderen Artikeln keine der beiden. Prüfe vor der Aktivierung auch, ob die [vorgefertigte Warenkorberinnerung](/mailbeez/abandoned_cart_advanced) dieselben Kunden anschreiben würde.

Prüfe in einem modified-Shop genau die Produkte, die du ausgewählt hast. Speichert der Shop eine mehrstellige Produktnummer ohne Zusätze im Warenkorb, kann die aktuelle Produktregel den Artikel übersehen. Fehlt ein erwarteter Warenkorb in der Zielgruppe, lass den Flow inaktiv, bis du die Auswahl geprüft hast.
