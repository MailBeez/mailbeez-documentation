---
# http://learn.getgrav.org/content/headers
title: Responsive Emails mit MailBeez
slug: responsive-emails
menu: Responsive Emails
date: 25-10-2013
published: true
publish_date: 25-10-2013
# unpublish_date: 25-10-2013
template: docs
# theme: false
visible: true
routes:
  default: /dokumentation/responsive-emails
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: done
    category: [docs]
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

<span id="was-sind-responsive-email"></span><span id="wussten-sie"></span>Teste eine Kampagnen-E-Mail mit langem Produktnamen, Bild und einem Link, den Kunden tatsächlich nutzen. Auf einem schmalen Bildschirm siehst du, ob sich die Nachricht ohne seitliches Scrollen lesen und bedienen lässt.

Öffne dieselbe Nachricht auch mit abgeschalteten Bildern. Erkennst du dann noch das Angebot und den Link, der zurück in den Shop führt?

{{ page.find('/images').media['responsive.png'].html }}

1. <span id="mailbeez-kann-responsive-"></span>Prüfe die Vorschau in Desktop- und Mobilbreite. Achte darauf, wie Spalten umbrechen, ob das Bild mitskaliert und ob sich der wichtigste Link gut antippen lässt.
2. <span id="mobile-endgeraete-welche-"></span>Schicke dir eine Test-E-Mail und öffne sie in einem E-Mail-Programm deiner Kunden. Manche Programme zeigen auch auf dem Smartphone das Desktop-Layout.
3. Ragt ein Bild über den Rand hinaus, prüfe seine Breitenangabe in der Vorlage. Ersetze lange sichtbare URLs durch kurze, aussagekräftige Linktexte. Kontrolliere Vorschau und Test-E-Mail erneut.

Die [Referenz für ältere Versionen](/legacy) beschreibt Unterschiede zwischen damaligen E-Mail-Programmen. Die frühere Vorlage passte sich etwa in der mitgelieferten E-Mail-App von Android 4.x an den Bildschirm an. Auf dem Galaxy S4 konnte die App dagegen das Desktop-Layout anzeigen.

Testergebnisse zu älteren Vorlagen findest du unter [E-Mail-Designelemente](/grundlagen/email-design-elements). Den früheren Editor beschreibt [Responsive Template Manager](/configbeez/config_tmplmngr).
