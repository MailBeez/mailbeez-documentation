---
# http://learn.getgrav.org/content/headers
title: "E-Mail-Archiv"
module_subtitle: "E-Mails im Browser anzeigen"
slug: config_email_archive
routes:
    aliases:
        - /dokumentation/installation/config/config_email_archive
        
# menu: Email Web-Ansicht und Archiv
date: 28-04-2014
published: true
publish_date: 28-04-2014
# unpublish_date: 28-04-2014
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
    tag: [pro, "E-Mails im Browser anzeigen"]
module:
    code: 'config_email_archive'
    category: [configbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio,comp_saas]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2014/04/icon_32.png'
    pro: 'pro'
    cert: 'true'
    price: '79 EUR'
    title_en: 'Web-View and Email Archive'
    teaser_en: 'Enrich you MailBeez Emails with a web-view and archive them'
    title_de: 'Email Archiv und Web-Ansicht'
    teaser_de: 'Erweitern Sie Ihre MailBeez-Emails mit einer Web-Ansicht und archivieren Sie diese.'
    author: 'MailBeez.com'
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

Eine Kundin öffnet deine Brühanleitung in einem E-Mail-Programm, das Bilder ausblendet. Über den Browserlink kann sie die versendete Nachricht lesen, einschließlich ihres persönlichen Gutscheins und ihrer Bestelldaten. Nutze eine an dich selbst adressierte E-Mail, wenn du jemandem die Browseransicht zeigst.

## Festlegen, wie lange ein Browserlink funktioniert

Öffne **System → Erweiterungen → Zusatzmodule → Versand und Zeitplanung** und wähle **E-Mails im Browser anzeigen**.

[doc-steps]

[doc-step]
**Genug Zeit zum Nachlesen geben**

Ist der Gutschein einen Monat gültig, sollte die Kundin auch später noch auf die Anleitung zugreifen können. **Nie geöffnet: Aufbewahrung (Tage)** zählt ab der Archivierung. **Zuletzt geöffnet: Aufbewahrung (Tage)** zählt ab dem letzten Aufruf der Archivkopie.
[/doc-step]

[doc-step]
**Den Link vor dem Aufräumen prüfen**

Öffne eine neu archivierte Testmail im Browser und prüfe Text und Bilder. Mit **Abgelaufene Archiveinträge automatisch löschen** entfernt die Bereinigung Einträge nach Ablauf ihrer Frist. Bei null Tagen ist das schon bei der nächsten Bereinigung möglich. Danach lässt sich die E-Mail über den Link nicht mehr öffnen.
[/doc-step]

[/doc-steps]
