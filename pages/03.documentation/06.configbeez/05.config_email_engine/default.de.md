---
# http://learn.getgrav.org/content/headers
title: Email System
slug: config_email_engine
routes:
    aliases:
        - /dokumentation/installation/config_queen/email-engine-configuration
        - /dokumentation/installation/config/config_email_engine

# menu: Email Engine Konfiguration
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
#      description: Your page description goes here
#      keywords: HTML, CSS, XML, JavaScript
#      robots: noindex, nofollow
#      og:
#          title: The Rock
#          type: video.movie
#          url: http://www.imdb.com/title/tt0117500/
#          image: http://ia.media-imdb.com/images/rock.jpg
#  cache_enable: false
#  last_modified: true
---

>>>> **Warum kommen Emails beim Empfänger an und warum nicht?**
>>>>Viele Email-Empfängerserver - besonders zu erwähnen sind Gmail, Yahoo, Web.de, GMX, AOL, Outlook.com - erwarten bei einem höheren Volumen an Emails wie z.B. beim Versand von Newslettern einen expliziten Whitelisting Eintrag.
>>>>Diesen Eintrag können ausschließlich ausgewiesene Email-Versand-Anbieter beziehen und dann dem Versender entsprechende Authentifizierungsmaßnahmen wie DKIM, SPF Verfügung stellen. Nur hierdurch wird es den Mailservern der Empfängers möglich, herauszufinden, ob es sich um "legale" Emails handelt.
>>>>**Beim Versand über die Mailserver des Hosters werden somit häufig Emails abgelehnt, da die verwendeten Mailserver keine ausgewiesenen massenmail-fähigen Versand-Server sind.**


MailBeez gibt Ihnen volle Freiheit zu wählen, wie Sie die Emails versenden wollen:

##Mögliche E-Mail Versand Methoden für MailBeez

1. **Shop (Standard)**: Email-Funktion des Shop-Systems
1. **MailBeez.Email**: Versand mit höchsten Zustellraten über MailBeez Email Server
1. **SMTP**: Ein beliebiger SMTP Server




###Shop (Standard)

Als Standard-Einstellung nutzt MailBeez die Email Funktion des Shop Systems. Somit wird die ggf. im Shop System konfigurierbare Methode zum Email Versand genutzt.

| Vorteile                         | Nachteile
|----------------------------------|----------------------------------------------
| keine Konfiguration erforderlich | ggf. Versende-Limit des Mail-Servers
| keine zusätzlichen Kosten        | Risiko eines Spam-Ratings auf dem Mail-Server
|                                  | Zustellraten sind vom Mail-Server abhängig, häufig unter 50%
|                 | Nicht Gmail-konform: Abhängig von der Mail-Funktion im Shopsystem. Zum aktuellen Stand (01/24) unterstüzt kein Shopssytem die Anforderungen vom Gmail




###MailBeez.Email (empfohlen)
Mit MailBeez.Email können wir allen MailBeez Usern den zuverlässigen Versand von MailBeez Emails anbieten


| Vorteile                                                           | Nachteile
|--------------------------------------------------------------------|----------------------------------------------
| Versand mit höchsten Zustellraten                                  | SPF und DKIM DNS-Konfiguration erforderlich - wir helfen natürlich!
| Whitelisting bei allen gängigen Empfängern                         | zusätzliche Kosten, welche aber typisch **durch verbesserte Zustell-Raten gedeckt werden**
| Aktives Monitoring und Management zur Optimierung der Zustellraten |  |
| Automatische Verarbeitung von Bounces                              |  |
| Keine Drosselung erforderlich                                      |  |
| Kein Problem mit Spam-Listen, Blacklist etc.                       |  |
| Gmail-konforme DMARC Authentication via SPF und DKIM Eintrag       |  |
| Gmail-konforme Header                                              |  |



### SMTP

Mit dieser Option können Sie MailBeez für den Versand über einen beliebigen SMTP Server konfigurieren.

| Vorteile                                    | Nachteile
|---------------------------------------------|----------------------------------------------
| jeder SMTP Server kann konfiguriert werden  | Konfigurations-Aufwand
| Unterstützung für DKIM                      | Risiko eines Spam-Ratings auf dem Mail-Server
| keine zusätzlichen Kosten                   | Zustellraten sind vom Mail-Server abhängig, typisch unter 50%  |
| Gmail-konforme Header                   |   |



### Fehler beim Email-Versand <a id="error"></a>

Falls der Versand einer Email über SMTP aus verschiedensten Gründen im Email-Server fehl schlägt, wird diese Email im System mit der `message_id=-1` protokolliert.

In der System-Status Übersicht wird Ihnen angezeigt, wie viele Fehler beim Email-Versand aufgetreten sind.

Mit Klick auf das Werkzeug-Symbol können Sie zwischen folgenden Aktionen zur Problembehebung wählen:

####Neu Starten
Die betroffenen Einträge werden im System gelöscht, so dass diese Emails - je nach Zeitpunkt und Modul-Konfiguration - erneut versendet werden können.

####Ignorieren
Die betroffenen Einträge werden im System markiert, so dass diese Emails nicht erneut versendet werden.


>>>>>>Sollten häufig Fehler beim Versand auftreten, so prüfen Sie bitte die Konfiguration des verwendeten SMTP-Servers. Einige SMTP-Server können z.B. so konfiguriert sein, dass nur bestimmte Absender-Domains zugelassen werden. Bei abweichenden Absender-Domains verweigert der SMTP-Server dann den Versand mit einer Fehlersituation.



Einstellungen für die Verwendung eines Gmail Email-Servers:
```bash
 smtp.gmail.com
 Auth: true
 security: ssl
 Port: 465
```
