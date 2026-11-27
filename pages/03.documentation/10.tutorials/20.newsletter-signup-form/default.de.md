---
# http://learn.getgrav.org/content/headers
title: "Newsletter-Anmeldeformular anbinden"
slug: erstellen-eines-newsletter-anmeldeformulars
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

Deine Rösterei hat eine eigene Seite für den monatlichen Newsletter. Hier können Besucher neue Kaffees und Brühtipps abonnieren, auch ohne Kundenkonto. Du gestaltest das Formular passend zum Shop. MailBeez verschickt die E-Mail mit dem Bestätigungslink. Möchtest du das fertige Formular verwenden, folge der Anleitung [Anmeldeformular einbinden](/contacts/signup-confirmation#anmeldeformular).

Du brauchst Newsletter Profi ab Version 3.72 mit der öffentlichen [Newsletter-API](/configbeez/config_api/mb_newsletter_api) und Zugriff auf HTML und JavaScript der Anmeldeseite.

<span id="vorab-berlegungen"></span>

## Themen und Bestätigungsmail vorbereiten

1. Öffne **Kontakte → Themen**. Suche die beiden Themen, die du im Formular anbietest, oder lege sie an. Notiere ihre IDs. Im Beispiel steht `1,3` für neue Kaffees und Brühtipps. Ersetze die Zahlen durch deine IDs. Verschickst du einen Newsletter ohne Themenauswahl, lass das Feld `topic_ids` weg.
2. Öffne **Kontakte → Anmeldung** und prüfe die Bestätigungsmail für Interessenten und Kunden. An der E-Mail-Adresse erkennt MailBeez, welcher Ablauf passt. Frage im Formular nur nach der Adresse und der Einwilligung. Nach der Bestätigung können Interessenten auf der Standardseite ihren Namen ergänzen. Bei Kunden gelten die Angaben im Shopkonto.

<span id="erstellen-eines-anmeldeformulares"></span>

## Formular in die Seite einbauen

Füge dieses HTML dort ein, wo das Formular erscheinen soll. Im Beispiel liegt `mailhive.php` im Hauptverzeichnis des Shops. Liegt dein Shop in einem Unterverzeichnis oder steht das Formular auf einer anderen Website, trage bei `action` die vollständige HTTPS-Adresse des Endpunkts **deines Shops** ein, einschließlich Unterverzeichnis.

[codesh lang="html" title="Anmeldeformular" wrap="true"]
<form id="newsletter-signup" method="post"
      action="/mailhive.php/api/public/v1.0/newsletter/add/">
  <label for="signup-email">E-Mail-Adresse</label>
  <input id="signup-email" name="email" type="email"
         autocomplete="email" required>

  <label>
    <input type="checkbox" name="consent" value="1" required>
    Ich möchte den monatlichen Newsletter mit neuen Kaffees und Brühtipps erhalten.
  </label>
  <input type="hidden" name="topic_ids" value="1,3">

  <button type="submit">Newsletter abonnieren</button>
  <p role="status"></p>
</form>
<script src="newsletter-signup.js" defer></script>
[/codesh]

In einem mehrsprachigen Shop kannst du ein verstecktes Feld mit dem Namen `lng_id` ergänzen. Als Wert trägst du die numerische ID ein, die dein Shop für die Sprache der Anmeldeseite verwendet.

<span id="java-script-code-zur-ajax-anbindung-an-die-mail-beez-newsletter-..."></span>

## Anmeldung an MailBeez senden

Speichere den folgenden Code als `newsletter-signup.js` am Pfad aus dem Script-Tag. Er überträgt die Formularfelder und liest die JSON-Antwort von MailBeez. Während die Anfrage läuft, bleibt die Schaltfläche gesperrt.

[codesh lang="javascript" title="newsletter-signup.js" wrap="true"]
const form = document.getElementById("newsletter-signup");
const button = form.querySelector("button");
const message = form.querySelector('[role="status"]');
const errors = {
  invalid_email: "Prüfe deine E-Mail-Adresse.",
  consent: "Setze das Häkchen, um den Newsletter zu abonnieren.",
  duplicate: "Diese Adresse ist bereits angemeldet."
};
const retry = "Die Anfrage ist fehlgeschlagen. Bitte versuche es später noch einmal.";

form.addEventListener("submit", async (event) => {
  event.preventDefault();
  if (button.disabled) return;
  button.disabled = true;
  message.textContent = "Anfrage wird gesendet …";

  try {
    const fields = new URLSearchParams(new FormData(form));
    fields.set("consent", form.elements.consent.checked ? "1" : "0");
    const response = await fetch(form.action, {
      method: "POST",
      body: fields
    });
    if (!response.ok) throw new Error(String(response.status));
    const result = await response.json();
    if (result.error === false) {
      form.reset();
      message.textContent = "Öffne die E-Mail und klicke auf den Bestätigungslink.";
    } else {
      message.textContent = errors[result.error] || retry;
    }
  } catch {
    message.textContent = retry;
  } finally {
    button.disabled = false;
  }
});
[/codesh]

<span id="problembehebung"></span>

## Anmeldung testen

1. Melde dich mit einer Testadresse ohne Kundenkonto an. Öffne die Bestätigungsmail und folge dem Link. Prüfe unter **Kontakte → Interessenten** die bestätigte Anmeldung und die Themen.
2. Wiederhole den Test mit einem Kundenkonto ohne Newsletter-Abo. Prüfe die Bestätigungsmail für Kunden und die Anmeldung unter **Kontakte → Kunden**.
3. Gib die bereits bestätigte Adresse erneut ein. Das Formular sollte das bestehende Abo melden. Lässt du das Häkchen für die Einwilligung weg oder gibst du eine unvollständige E-Mail-Adresse ein, sollte der Browser dich zur Korrektur auffordern.

Meldet das Formular einen Fehler beim Senden, öffne in den Entwicklerwerkzeugen des Browsers **Netzwerk** und schicke das Formular erneut ab. Suche die POST-Anfrage an `newsletter/add/`. Erhältst du eine Shopseite oder den Status 404, prüfe die Adresse in `action`. Bei HTTP 429 hast du ein Anfragelimit erreicht. Warte, bevor du es erneut versuchst.
