---
# http://learn.getgrav.org/content/headers
title: "Rückläufer einer früheren Aussendung prüfen"
#menu: Beez-O-Graph
slug: daten-grundlagen
date: 17-02-2016
original_v4: true
published: true
publish_date: 17-02-2016
template: tutorial
# theme: false
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
[Zur Referenz für ältere Versionen](/legacy).
[/doc-callout]

<span id="email-adressen-eines-alten-kundenstammes-prfen"></span><span id="email-adressen-eines-alte"></span><span id="problem"></span>Nutze Rückläufer einer Aussendung, um nicht erreichbare Adressen zu erkennen. Das frühere Beispiel verwendete Newsletter Profi und eine bestehende Newsletter2Go-Anbindung. Prüfe zuerst, zu welcher Aussendung, Zielgruppe und Versandzeit die Rückmeldungen gehören.

Ein Zustellfehler betrifft einen konkreten Versandversuch. Ob sich die Person für den Newsletter angemeldet oder später abgemeldet hat, ist eine eigene Frage.

1. <span id="lsung"></span><span id="loesung"></span>Prüfe unter [Newsletter](/mailbeez/newsletter) die Zielgruppe und ihre Aboregeln. Ein Rückläufer belegt ein Zustellproblem. Eine Einwilligung in weitere Aussendungen lässt sich daraus nicht ableiten.
2. Prüfe unter [Versandmethode](/configbeez/config_email_engine) den Versanddienst der Aussendung. Warte, bis die Rückläufer eingegangen sind. Bei der damaligen Anbindung konnte das mehrere Tage dauern.
3. Öffne die Rückläufer im früheren Beez-O-Graph. Unterscheide dauerhafte Ablehnungen und vorübergehende Fehler, bevor du eine Adresse bearbeitest. Für SMTP mit eigenem Rückläuferpostfach siehe [BounceHive Rückläufer-Verarbeitung](/configbeez/config_bouncehive_advanced).

Im damaligen Beispiel gab es die Liste „Alle Kunden auch ohne Abo“ mit länderspezifischen Ausnahmen von der Aboprüfung. Prüfe solche Ausnahmen, bevor du eine vorhandene Liste wiederverwendest.

Meldet der Dienst ein volles Postfach, war der Empfang bei diesem Versuch nicht möglich. Meldet er eine unbekannte Empfängeradresse, prüfe die Schreibweise mit dem Kunden, bevor du die Adresse erneut verwendest. Behalte in beiden Fällen die Rückmeldung zusammen mit der Aussendung, zu der sie gehört.
