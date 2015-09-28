---
# http://learn.getgrav.org/content/headers
title: Email Engine Konfiguration
slug: config_email_engine
routes:
    aliases:
        - /dokumentation/installation/config_queen/email-engine-configuration
        
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
    migration_status: review
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

Ab MailBeez V2.6

Ab MailBeez V2.6 können Sie wählen wie Mailbeez E-Mails versenden soll. Über die E-Mail funktionen des Shopsystems oder über das Mailbeez eigene E-Mail System.

Vorteile:  
 - ermöglicht Rückläufer E-Mails automatisch zu verarbeiten (benötigt weitere Konfigurationen)  
 - Volle Kontrolle über E-mail Inhalte und Design  
 - DKIM Support (PHP5)  
 - Möglichkeit E-Mail nur im TXT Format zu schicken

Nachteile:  
 - Einige weitere Einstelllungen sind nötig

Wenn Sie Gmail nutzen verwenden Sie bitte:  
 SMTP Server: smtp.gmail.com  
 Auth: true  
 security: ssl  
 Port: 465
