---
# http://learn.getgrav.org/content/headers
title: MailBeez Analytics Configuration
slug: config_analytics
routes:
    aliases:
        - /dokumentation/installation/config_queen/config_analytics
        
# menu: MailBeez Analytics Configuration
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

MailBeez Analytics ermöglicht es folgende Ereignisse aufzuzeichnen:

- Öffnen von E-Mails (anhand Tracking-Image)  
- Welche Links innerhalb der E-Mail geklickt wurden
- Shop-Umsätze die aufgrund von E-Mail Links erzeugt wurden.

Ob E-Mails geöffnet / gelesen wurden wird anhand folgender Methoden festgestellt:  
- Das Tracking-Image (pix) ist geladen worden  
- Es wurde auf einen Link innerhalb der E-Mail geklickt

Das Tracking-Image nutz eine sehr performate Aufrufmethode um die Server Last zu reduzieren: Jeder Aufruf wird innerhalb einer Log-Datei gespeichert. Mit jedem Aufruf von MailHive wird diese Log-Datei in die Mailbeez Tracking-Datenbank importiert. Danach wird die Log-Datei vom Server gelöscht.

--- old start - Einbau Anleitung (evtl. veraltet) ? ---
In  
 ‘includes/application\_top.php’  
 add following code at the end for the closing ?>

// MailBeez Click and Order tracker  
 require(DIR\_FS\_CATALOG . ‘mailhive/includes/clicktracker.php’);
--- old end ---

Hinweis: 
Das Öffnen von E-Mail und Klicken von Links bei weitergeleiteten E-Mails oder weiteren Empfängern (CC, BCC) wird nicht aufgezeichnet, da diese E-Mails eine andere Message-ID haben. Nur E-Mails an den echten Empfänger werden ausgewertet.
