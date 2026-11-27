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

<span id="vorab-berlegungen"></span><span id="erstellen-eines-anmeldeformulares"></span>Für eine reguläre Newsletter-Anmeldung kannst du das eingebaute Formular verwenden. Öffne **Kontakte → Anmeldung** und prüfe Formular und Bestätigungsnachricht für Interessenten und bestehende Kunden.

Teste das Formular auf der Shopseite, auf der sich Besucher anmelden. Die Erfolgsmeldung sollte erklären, was als Nächstes zu tun ist, während die Bestätigungs-E-Mail unterwegs ist.

<span id="java-script-code-zur-ajax-anbindung-an-die-mail-beez-newsletter-..."></span>Für ein eigenes Formular nutze die Newsletter-API der installierten Modulversion. Frage zunächst die E-Mail-Adresse ab. Wenn das Formular Interessen zuweist, lege sie zuerst unter **Kontakte → Themen** an und übergib ihre IDs in `topic_ids`. Mache im Formular erkennbar, welche Themen ausgewählt werden.

<span id="problembehebung"></span>Teste eine ungültige Adresse, eine doppelte Anmeldung und eine neue Adresse. Bitte nach erfolgreicher Anfrage um einen Klick auf den Bestätigungslink in der E-Mail. Prüfe den Ablauf einmal mit einem Kunden und einmal mit einem Interessenten.
