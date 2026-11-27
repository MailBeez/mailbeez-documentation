---
title: "Anmeldung"
slug: signup-confirmation
template: docs
visible: true
published: true
taxonomy:
    category: [docs]
---

Vom Anmeldeformular geht es ins Postfach und von dort über den Bestätigungslink zurück zum Shop. Probiere diesen Weg mit einer Testadresse aus. Interessenten und Personen mit Kundenkonto können dabei unterschiedliche Nachrichten erhalten.

1. Öffne **Kontakte → Anmeldung** und beginne beim **Anmeldeformular**.
2. Wähle unter **DOI-E-Mail** den Pfad **Interessenten** oder **Kunden**. Prüfe die Nachricht mit dem Bestätigungslink. DOI steht für Double-Opt-in.
3. Folge dem Link aus einer Test-E-Mail zur **DOI-Bestätigungsseite**. Versendest du zusätzlich eine Bestätigung oder einen Gutschein, prüfe den letzten Schritt für denselben Anmeldetyp.
4. Teste den zweiten Pfad, wenn dein Shop beide Anmeldetypen unterstützt. Der **DOI Quick Guide** auf der Seite erklärt den Ablauf.

## Anmeldeformular

Binde das Newsletter-Formular dort ein, wo sich Besucher anmelden möchten, etwa im Fußbereich oder auf einer eigenen Newsletter-Seite.
Dein Shop braucht dafür die Formularintegration (Profi-Modul) und muss Newsletter-Abonnenten verwalten können.

Sag am Formular, was die Abonnenten erwartet. Eine Kaffeerösterei könnte zum Beispiel einmal im Monat ihre neuen Röstungen vorstellen.

1. Öffne **Kontakte → Anmeldung** und suche im Ablauf das **Anmeldeformular**.
2. Wähle im Menü des Anmeldeauslösers **Integrationscode**.
3. Kopiere unter **Site Signup Integration** das JavaScript für deinen Shop. Füge es auf der Shopseite ein, auf der das Formular erscheinen soll.
4. Melde dich mit einer Testadresse an und folge dem Bestätigungslink. Probiere das für Interessenten und für Kunden aus, wenn dein Shop beide Anmeldewege nutzt.

### Ältere SiteBeez-Widgets

Für einen direkten Link zum Formular hängst du diesen Pfad an die Basis-URL deines Shops an.

[codesh lang="text" title="Formular-URL" wrap="true"]
mailhive.php?m=mb_newsletter&ma=signup
[/codesh]

Um Newsletter-Themen vorzubelegen, hänge `&topics=3,9` an. Ersetze die Beispielwerte durch die IDs deiner Themen.

Wenn dein Widget die Einstellung `custom_code` verwendet, öffnet diese HTML-Schaltfläche das Anmeldeformular.

[codesh lang="html" title="Schaltfläche zur Anmeldung" wrap="true"]
<button type="button"
  data-sitebeez-trigger="custom_code">
  Newsletter abonnieren
</button>
[/codesh]

## Anleitung

[Newsletter-Anmeldeformular anbinden](/tutorials/erstellen-eines-newsletter-anmeldeformulars)
