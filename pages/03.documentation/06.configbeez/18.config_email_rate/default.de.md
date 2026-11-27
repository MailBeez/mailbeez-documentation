---
# http://learn.getgrav.org/content/headers
title: "E-Mail-Feedback"
module_subtitle: "Feedback zu E-Mails einholen"
slug: config_email_rate
routes:
    aliases:
        - /dokumentation/installation/config/config_email_rate
published: true
template: docs
# theme: false
visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: review
    category: [docs]
    tag: [pro, "Feedback zu E-Mails einholen"]
module:
    code: 'config_email_rate'
    category: [configbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    pro: 'pro'

author:
    name: admin
metadata:
    author: admin
---

Du erinnerst einen Kunden an den Wasserfilterwechsel. Er hat noch zwei ungeöffnete Filter. Mit der Frage „Kam diese Erinnerung zur richtigen Zeit?“ kann er dir sagen, dass die E-Mail zu früh kam. Häufen sich solche Rückmeldungen, lohnt sich ein Blick auf die Wartezeit des Flows.

## Nach der E-Mail fragen

Öffne **System → Erweiterungen → Zusatzmodule → Feedback und Auswertung**. Ist das Einstellungsmodul aufgeführt, wähle **Feedback zu E-Mails einholen**.

Das Hilfsmodul **Link für E-Mail-Feedback** liefert die Links für positive und negative Rückmeldungen an die Vorlage. Je nach Installation und Sichtbarkeit der Module siehst du möglicherweise nur das Hilfsmodul.

[doc-steps]

[doc-step]
**Die Frage in die Erinnerung aufnehmen**

Setze beide Links direkt unter die Frage zur E-Mail. Gib der Produktbewertung für den Filter einen eigenen Link. So bleibt klar, was der Kunde bewertet.
[/doc-step]

[doc-step]
**Beide Antworten ausprobieren**

Sende zwei Testnachrichten an deine eigene Adresse. Öffne in der einen den positiven, in der anderen den negativen Link und prüfe das Ziel. Verwendest du **Eigene Feedback-URL (optional)**, braucht diese Adresse eine passende Weiterleitungsregel auf dem Server. Prüfe das Ziel aus der Nachricht heraus.
[/doc-step]

[/doc-steps]
