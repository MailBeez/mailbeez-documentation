---
# http://learn.getgrav.org/content/headers
title: "Bestellstatus"
module_subtitle: "Über den Bestellstatus informieren"
slug: notification_order_status
date: 01-03-2013
published: true
publish_date: 01-03-2013
# unpublish_date: 01-03-2013
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
    tag: [pro, "Über den Bestellstatus informieren"]
module:
    plans_position: after_guide
    code: 'notification_order_status'
    category: [mailbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio,comp_saas]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2013/03/icon_32.png'
    pro: 'pro'
    cert: 'true'
    price: '49 EUR'
    title_en: 'Notification: Order Status Update'
    teaser_en: 'Notify your customers about an specific order status update, e.g. to send a delivery tracking link'
    title_de: 'Benachrichtigung: Bestell-Status Änderung'
    teaser_de: 'Benachrichtigen Sie Ihre Kunden bei speziellen Bestell-Status Änderungen, z.B. um einen Link zur Paket-Verfolgung zu schicken'
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

Eine Werkstatt hat die Espressomaschine eines Kunden repariert. Jetzt möchte er wissen, wann er sie abholen kann und ob er den Abholschein braucht. Sobald dein Team die Bestellung als abholbereit markiert, kann MailBeez diese Angaben per E-Mail verschicken.

Wähle einen Status, den alle im Shop gleich verwenden. Eine Abholbenachrichtigung passt, wenn die Maschine wirklich zur Abholung bereitsteht.

## Flow einrichten

Öffne **Kampagnen → Automatisierung → MailBeez Flows → Über den Bestellstatus informieren** und wähle **Optionen → Konfigurieren**.

[doc-steps]
[doc-step]
**Den auslösenden Status wählen**

Wähle unter **Bestellungen mit diesem Status bearbeiten** deinen Status für abholbereite Bestellungen. Lege unter **Wartezeit nach dem Statuswechsel** fest, wie lange MailBeez ab dem Wechsel wartet. Setze **Höchstalter des Statuswechsels** höher, damit auch der nächste geplante Lauf die Bestellung noch finden kann.
[/doc-step]
[doc-step]
**Den Status nach dem Versand bestimmen**

Unter **Bestellstatus nach dem Versand** entscheidest du, ob der bisherige Status bestehen bleibt. Führt dein Team einen Status wie „Abholung angekündigt“, wähle die Statusänderung und trage ihn unter **Neuer Bestellstatus** ein. Prüfe, ob dein Shop beim selben Wechsel schon eine Abholmail verschickt.
[/doc-step]
[doc-step]
**Die Übergabe prüfen**

Nenne in der E-Mail Abholadresse, Öffnungszeiten und Bestellnummer. Probiere den Ablauf im Testshop mit einer eigens dafür angelegten Bestellung aus. Lies die E-Mail und öffne danach die Bestellung. So siehst du auch den Status, mit dem dein Team weiterarbeitet.
[/doc-step]
[/doc-steps]

Für Änderungen eines voraussichtlichen Liefertermins nutze [Bei Lieferrückstand informieren](/mailbeez/notification_backorder).
