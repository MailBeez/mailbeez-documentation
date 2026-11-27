---
title: "Matomo-(Piwik-)Tracking"
module_subtitle: "Besuche aus Kampagnen-E-Mails in Matomo oder Piwik wiederfinden"
slug: config_analytics_piwik
published: true
template: docs
visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: done
    category: [docs]
    tag: [core]
# added collection selector

author:
    name: admin
metadata:
    author: admin
---

Eine Warenkorberinnerung und eine E-Mail zur Rückgewinnung können einen Teekäufer zum selben Probierpaket führen. Suche in Matomo nach dem Kampagnennamen, den du in MailBeez hinterlegt hast. Am Stichwort erkennst du, welcher Flow den Link verschickt hat. Beide Werte findest du in der Zieladresse eines Links aus deiner Testmail.

1. Öffne **System → Konfiguration → Tracking-Codes** und prüfe die Einstellungen des installierten Anbieters.
2. Schicke dir eine Testmail und öffne einen Link zum Shop. Suche in der Zieladresse nach `pk_campaign` und `pk_kwd`. Der erste Parameter enthält den Kampagnennamen, der zweite das Stichwort. Mit diesen Werten kannst du den Besuch in Matomo nachschlagen.
3. Folge dem Link und kontrolliere die Kampagne in Matomo (Piwik). Die von MailBeez selbst erfassten Reaktionen beschreibt [Öffnungs- & Klick-Tracking](/configbeez/config_analytics).
