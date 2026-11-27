---
title: "Versand & Status"
slug: sending-status
template: docs
visible: true
published: true
taxonomy:
    category: [docs]
    tag:
        - "Bewertungsanfrage nicht versendet"
        - "Bewertungsanfrage nicht angekommen"
        - "Bewertungsanfrage fehlt"
        - "wie kann ich prüfen ob eine E-Mail zugestellt wurde"
        - "wie prüfe ich ob eine E-Mail zugestellt wurde"
        - "wurde meine E-Mail zugestellt"
        - "ist meine E-Mail angekommen"
        - "E-Mail-Zustellung prüfen"
---

Ein Kunde wartet auf eine E-Mail. Frage nach der Adresse und dem Tag, an dem er die Nachricht erwartet hat. Bei einer Bewertungsanfrage zählt die Adresse aus der Bestellung. Öffne **System → Versand & Status → E-Mail-Zustellung → Versand**, wähle den passenden Zeitraum und suche nach der Adresse. Du kannst auch nach Modul oder Versand-ID suchen.

- **Du findest einen Versandeintrag**<br>
  Öffne die **Versanddetails**. Unter **Meldungen** siehst du die letzte Rückmeldung des Zustelldienstes. Unter **Rückläufer** findest du abgewiesene Nachrichten und den Grund, sofern der Dienst ihn meldet. Siehst du nur die Versandzeit, kannst du dem Kunden sagen, wann MailBeez die Einladung verschickt hat. Ob sie zugestellt wurde, bleibt offen.
- **Du findest keinen Versandeintrag**<br>
  Prüfe, wann die E-Mail fällig war. Bei einer Bewertungsanfrage zählt, wann die Bestellung den [auslösenden Status](/mailbeez/review_advanced) erreicht hat und ob nach Ablauf der Wartezeit ein [geplanter Lauf](/quickstart/step-3-set-forget) stattgefunden hat. War die E-Mail fällig, prüfe die Empfängerauswahl der Kampagne. Unter [**Auswertung → MailBeez → Kontakte**](/mailbeez-results/contacts) → **Abmeldungen & Sperren** kannst du nachsehen, ob die Adresse gesperrt ist.
- **Du suchst eine Testnachricht**<br>
  Prüfe den Versandmodus des Laufs. Im [Simulationsmodus](/configbeez/config_simulation) gehen die E-Mails an das eingestellte Simulationspostfach.

Geht die Aktivität bei vielen Empfängern zurück, nutze [E-Mail-Performance](/mailbeez-results/email-performance).
