---
title: "Newsletter-API"
module_subtitle: "Newsletter-Anmeldungen über die API übertragen"
slug: mb_newsletter_api
template: docs
visible: true
published: true
taxonomy:
    category: [docs]
    tag: [pro, "Newsletter-Anmeldung per API"]
---

Die Anleitung [Newsletter-Anmeldeformular anbinden](/tutorials/erstellen-eines-newsletter-anmeldeformulars) enthält ein vollständiges Beispiel mit HTML und JavaScript. Für das fertige Formular folge [Anmeldeformular einbinden](/contacts/signup-confirmation#anmeldeformular).

Nutze die öffentliche Newsletter-API, wenn dein eigenes Shopformular eine Anmeldung mit Bestätigung starten soll. Das Formular übermittelt E-Mail-Adresse und Einwilligung. [Newsletter](/mailbeez/newsletter) stellt den persönlichen Bestätigungslink bereit.

Nutze für die erste Anmeldung ein erreichbares Testpostfach. So kannst du zwischen einer vom Formular angenommenen Adresse und einer tatsächlich bestätigten Anmeldung unterscheiden.

## Anmeldeformular anbinden

1. Frage nach der E-Mail-Adresse und der Einwilligung zum Newsletter. Sende das Formular per HTTPS und POST an `/mailhive.php/api/public/v1.0/newsletter/add/` in deinem Shop. Übergib die Adresse in `email` und die Auswahl zur Einwilligung in `consent`. Fehlt das Feld, nimmt die API eine Einwilligung an. Übergib den Wert deshalb ausdrücklich.
2. Bietest du mehrere Themen an, übergib in `topic_ids` eine einzelne Themen-ID oder mehrere durch Kommas getrennte IDs. Die numerische ID der Shopsprache kannst du mit `lng_id` angeben. Die optionalen Felder `firstname`, `lastname` und `gender` gelten für Interessenten. Bei bestehenden Kunden bleiben die Angaben im Kundenkonto erhalten.
3. Werte die JSON-Antwort aus, bevor du im Formular eine Meldung anzeigst.

| Antwort | Meldung im Formular |
| --- | --- |
| `{"error":false}` | Bitte darum, die E-Mail zu öffnen und dem Bestätigungslink zu folgen. |
| `invalid_email` | Bitte darum, die E-Mail-Adresse zu prüfen. |
| `consent` | Erkläre, dass die Anmeldung eine Einwilligung voraussetzt. |
| `duplicate` | Für diese Adresse besteht bereits ein bestätigtes Abonnement. |

Beispielformulare findest du im installierten Modul unter `mailhive/mailbeez/mb_newsletter/includes/templates`.

## Anmeldung bestätigen

Kunden und Interessenten erhalten unterschiedliche Bestätigungslinks. Verwende in der jeweiligen E-Mail-Vorlage den Link, den das Modul für diesen Empfänger erzeugt. Nach dem Klick zeigt der Shop eine Bestätigung an. Die anschließende E-Mail kann einen Gutschein enthalten, wenn du diese Funktion im Modul eingerichtet hast.

## Interessentendaten oder Themen ändern

Für bestehende Interessenten kannst du `prospect_firstname` und `prospect_lastname` aktualisieren. Bei Erfolg antwortet die API mit `{"error":false}`. Hast du eine Weiterleitung angegeben, steht das Ergebnis im URL-Parameter `result` (bei Erfolg `OK`). Die Aktualisierung ändert die Kontaktdaten. Der Anmeldestatus bleibt erhalten.

Bei `invalid_prospect` gibt es keinen Interessenteneintrag zu dieser Adresse. Bei `is_customer` gehört die Adresse zu einem Kundenkonto. Sollen Abonnenten ihre Themen selbst ändern, verwende den vom Modul bereitgestellten Link zur Themenauswahl. Er öffnet das entsprechende Formular.
