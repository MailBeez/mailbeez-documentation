---
# http://learn.getgrav.org/content/headers
title: "Bewertungseinladung planen"
menu: Bewertungs-Ablauf
slug: optimierter-ablauf-bitte-um-bewertung


original_v4: true
published: true
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

Lege für eine Einladung nach der Lieferung zuerst das Ziel fest. Eine Produktbewertung betrifft den Artikel. Eine Shopbewertung betrifft den Einkauf, etwa Lieferung oder Service.

Stelle in der Einladung eine klare Frage. Die Liefergeschwindigkeit kann ein Käufer schon bei Ankunft beurteilen. Für eine Bewertung des Produkts braucht er unter Umständen länger.

1. <span id="1-bitte-um-einwilligung"></span>Prüfe die für diese Einladung erfasste [Einwilligung](/configbeez/config_gdpr_consent).
2. Öffne **Kampagnen → Automatisierung → MailBeez Flows** und wähle die Einladung für das gewünschte Bewertungsziel.
3. <span id="2-automatisierte-mail-mit"></span>Wähle den Bestellstatus und eine Wartezeit, die zur Lieferung passt. Bei kurzen Lieferzeiten können beispielsweise fünf Tage nach Versand sinnvoll sein.
4. <span id="3-anpassung-der-einladung"></span>Teste den Bewertungslink. Versendet das Bewertungsportal die Einladung selbst, prüfe den Inhalt dort.

## Eine Testbestellung verfolgen

Erreicht die Bestellung am Montag den Versandstatus, fällt das Ende der fünftägigen Wartezeit auf Samstag. Prüfe, welcher [Versandlauf](/configbeez/automatische-verarbeitung) die dann fälligen Bestellungen erfasst. Öffne die Testmail auf dem Handy. Führt der Bewertungslink zum richtigen Produkt oder Shop? Wenn du zusätzlich einen Kontakt zum Kundenservice anbietest, gib ihm einen eigenen, verständlichen Link.

Fehlt eine von MailBeez verschickte Einladung, suche unter [Versand & Status](/sending-status) nach der Bestelladresse. Versendet ein Bewertungsdienst die E-Mail selbst, prüfe die Einladung dort.

<span id="bewertungseinladungen-verteilen"></span>
## Einladungen auf zwei Bewertungsdienste verteilen

Dein Shop lädt Käufer nach dem Versand zu Google oder AUSGEZEICHNET.org ein. Pro Bestellung soll nur eine Einladung hinausgehen, ungefähr zwei Drittel davon für Google. Prüfe zuerst Bestellstatus und Wartezeit beider Flows. Die Verteilungsregel kann nur Einladungen durchlassen, für die eine Bestellung bereits infrage kommt.

[doc-steps]
[doc-step]
**Die beiden Einladungsflows auswählen**

Öffne [Einladungen verteilen](/filterbeez/filter_check_routing) und wähle **Regeln bearbeiten**. Sind beide Flows installiert, wähle über **Modul hinzufügen** zuerst **Um Bewertungen auf AUSGEZEICHNET.org bitten**, dann **Um Google-Bewertungen bitten**. Stelle die **Verteilung** so ein, dass Google den doppelten Anteil erhält.
[/doc-step]
[doc-step]
**Die Zuordnung an die Bestellung binden**

Öffne **Weitere Optionen** und wähle unter **Zuordnung beibehalten je …** die Option **Bestellung**. Unter **Regeltext (erweitert)** siehst du, wie MailBeez die Aufteilung abbildet.

```text
order_id|mod:3|0|ausgezeichnet_advanced
order_id|mod:3|1,2|googlereviews_advanced
```
[/doc-step]
[doc-step]
**Zwei Bestellungen vor dem Versand prüfen**

Gib unter **Kunden-/Bestell-ID ausprobieren** beide Nummern nacheinander ein. Die Vorschau berechnet das Ziel, ohne eine Bestellung abzurufen oder eine E-Mail zu versenden. Mit diesen Regeln geht Bestellung `1000` an AUSGEZEICHNET.org und Bestellung `1001` an Google. Die Gruppe wird aus der Bestellnummer berechnet. Aufeinanderfolgende Bestellungen können also auch beim selben Dienst landen. Prüfe im [Simulationsmodus](/configbeez/config_simulation), ob jede geeignete Testbestellung nur die ihr zugeordnete Einladung erhält.
[/doc-step]
[/doc-steps]
