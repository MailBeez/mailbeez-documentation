---
# http://learn.getgrav.org/content/headers
title: "Google Analytics"
module_subtitle: "Besuche aus gekennzeichneten Kampagnen-E-Mails in Google Analytics wiederfinden"
slug: config_googleanalytics
date: 26-03-2012
published: true
publish_date: 26-03-2012
# unpublish_date: 26-03-2012
template: docs
# theme: false
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

Eine Nachbestell-Erinnerung und eine E-Mail zur Rückgewinnung verlinken auf dieselben Espressobohnen. In Google Analytics kannst du nachsehen, welcher Flow den Käufer auf die Produktseite gebracht hat. MailBeez trägt die Kennung des sendenden Moduls in `utm_campaign` ein und ergänzt die für deinen Shop eingestellte Quelle und das Medium.

1. Öffne **System → Konfiguration → Tracking-Codes** und prüfe die Einstellungen des installierten Anbieters.
2. Schicke dir eine Testmail und öffne einen Link zum Shop. Suche in der Zieladresse nach `utm_source`, `utm_medium` und `utm_campaign`. Vergleiche die Werte mit der Quelle, dem Medium und der Kampagne, die du in Google Analytics erwartest.
3. Folge dem Link und kontrolliere die Kampagne in Google Analytics. Die von MailBeez selbst erfassten Reaktionen beschreibt [Öffnungs- & Klick-Tracking](/configbeez/config_analytics).
