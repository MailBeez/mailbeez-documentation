---
# http://learn.getgrav.org/content/headers
title: BounceHive Rückläufer-Verarbeitung
slug: bouncehive-rucklaufer-verarbeitung
# menu: BounceHive Rückläufer-Verarbeitung
date: 26-03-2012
published: true
publish_date: 26-03-2012
# unpublish_date: 26-03-2012
# template: false
# theme: false
visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration-status: review
    category: []
    tag: []
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

Erfordert MailBeez V2.6

Genervt von Bounce-Emails, auch bekannt als Rückläufer? Neben der Extra-Arbeit besteht das Risiko, als Spam-Versender eingestuft zu werden, wenn viele der Kunden-Adressen ungültig geworden sind. Mit diesem Modul werden die Bounce-Emails automatisch verarbeitet und sichergestellt, dass keine weiteren Emails an ungültige Email-Adressen verschickt werden.

Die nahtlos in MailBeez Integrierte BounceHive Rückläufer-Verarbeitung verarbeitet folgende Arten von Bounces:

**Hard Bounces: **Diese Bounces werden durch unbekannte oder falsche Email Adressen ausgelöst. MailBeez blockiert sofort alle Email-Adressen, welche einen Hard Bounce auslösen.

**Soft Bounces: **Die häufigste Ursache für Soft Bounces ist eine voll Mailbox. MailBeez wartet die konfigurierte Anzahl an Tagen, bevor weitere Emails an diese Email Adresse verschickt werden. Nach einer konfigurierbaren Anzahl an Soft Bounces werden diese als Hard Bounce interpretiert.

**Transient Bounces:** Diese Nachrichten sagen aus, dass eine Email nicht ausgeliefert werden konnte, der Email Server aber weiter probiert. MailBeez ignoriert diese Art von Bounce Emails.

Die eingelesenen Bounces werden zusammen mit der Email Adresse und Kundennummer des Kunden gespeichert. Nur wenn beide übereinstimmen, wird der Versand blockiert. Falls der Kunde also auf eine gültige Email Adresse wechselt, werden weiterhin Emails verschickt werden können.

**So funktioniert es:**  
 Bitte ein separates Email-Konto für die BounceHive Rückläufer-Verarbeitung einrichten, da die Emails in der Inbox dieses Accounts automatisch verarbeitet und in Unter-Ordner einsortiert werden.

Durch die Angabe eines gesonderten “Senders” beim Email-Versand werden die Bounce-Emails an die eigens eingerichtete Bounce-Adresse gehen und nicht an die “Von”-Email Adresse. Wenn Kunden also auf Emails antworten, werden die Antworten wie gewohnt an die “Von”-Email Adresse gehen, während Bounce Emails an die “Sender” Email Adresse geschickt werden.

Die BounceHive Rückläufer-Verarbeitung verbindet sich mit dem Bounce-Email Konto und liest alle Emails aus der Inbox. Nach Analyse des Inhaltes werden die Emails in die konfigurierten Order (hardbounces, softbounces, no-bounces) verschoben.

Die Bounce Verarbeitung kann manuell MailBeez über das Modul MailBeez Module > “Service Steuerung für die Verarbeitung von Bounce Emails” ausgeführt werden. Wenn nicht anders konfiguriert, wird die Bounce Verarbeitung bei jedem Durchlauf von Mailhive ausgeführt. Bei langsamen Email Server kann dies einen PHP Timeout verursachen, in diesem Fall bitte die automatische Ausführung deaktivieren und einen gesonderten Cronjob anlegen. Die spezifischen Cronjob URL findet sich in der Konfiguration des Modules.

Falls Sie historischen Bounce Emails gesammelt haben, können Sie diese von der BounceHive Rückläufer-Verarbeitung nachträglich analysieren lassen. Dazu bitte mit Hilfe eines Email Programmes (dort den Bounce Email-Account anlegen) die gesammelten Bounce Emails in die Inbox des Bounce Email-Accounts verschieben. Bei der nächsten Ausführung werden diese Emails dann verarbeitet.

**Anforderungen:**  
 Die BounceHive Rückläufer-Verarbeitung erfordert, dass MailBeez die MailBeez-eignen PHPMailer Email Engine verwendet – dies kann unter MailBeez > Konfiguration > Email System konfiguriert werden. Auch muss der Server zulassen, dass PHP Verbindung zu einem IMAP Server aufnehmen kann, bitte fragen Sie bei Ihrem Hoster nach, ob es Einschränkungen gibt, besonders wenn Sie planen, GMail einzusetzen – einige Hoster blockieren den GMail spezifischen Port.

Die Verwendung eines GMail Email Accounts kann sich schwierig gestalten, folgend die wichtigen Einstellung:

**Einstellungen GMail Accounts:**  
 active IMAP usage in the Gmail account  
 server: imap.gmail.com  
 port: 993  
 Mailserver Service Option: SSL (if you test local, your local environment must support SSL!)
