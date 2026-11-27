---
title: "Kundenrückgewinnung vor dem Versand testen"
slug: rueckgewinnung-testen
template: docs
visible: true
published: true
taxonomy:
    category: [docs]
    tag:
        - "Winback Testkunde"
        - "Rückgewinnung testen"
        - "Kundenrückgewinnung testen"
        - "Winback testen"
---

Eine Kaffeerösterei möchte 90 Tage nach dem Versand an die nächste Bestellung erinnern. Probiere den Flow **Inaktive Kunden zurückgewinnen** zuerst in einem Testshop aus. Am aussagekräftigsten sind zwei Käufer. Bei einem ist die Erinnerung schon fällig, beim anderen noch nicht.

[doc-steps]
[doc-step]
**Zwei Testbestellungen aussuchen**

Suche zwei Kunden, deren letzte Bestellung noch den Versandstatus hat. Bei einem liegt der Wechsel in diesen Status 95 Tage zurück, beim anderen 80. Beide erfüllen die übrigen Bedingungen und haben die erste Erinnerung noch nicht erhalten. Notiere, welche E-Mail-Adresse zu welcher Bestellung gehört.
[/doc-step]
[doc-step]
**Zeitraum und Postfach festlegen**

Öffne unter **Kampagnen → Automatisierung → MailBeez Flows** den Flow [Inaktive Kunden zurückgewinnen](/mailbeez/winback_advanced). Wähle unter **Bestell-Status** deinen Versandstatus. Setze **Alter der letzten Bestellung (Status)** auf 90 und **Höchst-Alter der Bestellung** auf 120 Tage. Für den Test genügt eine E-Mail ohne Gutschein.

Wähle für den Lauf den [Simulationsmodus](/configbeez/config_simulation). Möchtest du eine Kopie im Postfach prüfen, aktiviere den Versand von Simulationskopien und kontrolliere die Zieladresse.
[/doc-step]
[doc-step]
**Empfängerauswahl prüfen**

Starte den Flow in der Simulation. Vergleiche das Ergebnis mit dem Tag, an dem die letzte Bestellung den Versandstatus erreicht hat.

- **Vor 80 Tagen** — Für die erste Erinnerung ist es zu früh. Sie wird nach 90 Tagen fällig.
- **Vor 95 Tagen** — Das ist dein Testkunde. Die Erinnerung ist fällig und die Bestellung liegt innerhalb des Rückblicks von 120 Tagen.
- **Vor 125 Tagen** — Diese Bestellung liegt außerhalb des Rückblicks. Hast du einen solchen Fall im Testshop, sollte dieser Käufer im Ergebnis fehlen.

Fehlt der Käufer mit der 95 Tage alten Bestellung, prüfe das Datum des Statuswechsels, die letzte Bestellung und frühere Aussendungen an diese Adresse. Kontrolliere Betreff und Link zur Nachbestellung in der E-Mail-Kopie.
[/doc-step]
[doc-step]
**Den geplanten Lauf prüfen**

Mit der manuellen Simulation hast du die Auswahl getestet. Wie du Zeitplan, Versandmodus und die erste Aussendung prüfst, liest du unter [Den ersten Lauf prüfen](/quickstart/step-3-set-forget#den-ersten-lauf-pruefen).
[/doc-step]
[/doc-steps]
