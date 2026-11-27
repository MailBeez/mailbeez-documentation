---
# http://learn.getgrav.org/content/headers
title: "Lieferrückstand"
module_subtitle: "Bei Lieferrückstand informieren"
slug: notification_backorder
date: 17-12-2013
published: true
publish_date: 17-12-2013
# unpublish_date: 17-12-2013
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
    tag: [pro, "Bei Lieferrückstand informieren"]
module:
    plans_position: after_guide
    code: 'notification_backorder'
    category: [mailbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2013/03/icon_32.png'
    pro: 'pro'
    cert: 'true'
    price: '139 Eur'
    title_en: 'Notification: Backorder'
    teaser_en: 'notify your customers about products in backorder'
    title_de: 'Benachrichtigung Bestell-Rückstand'
    teaser_de: 'Informieren Sie Ihre Kunden laufend über Produkte im Rückstand'
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

Ein Kunde bestellt ein Ersatzventil für seine Kaffeemaschine. Dein Lieferant erwartet das Teil erst in zwei Wochen. Eine kurze Nachricht mit Artikel, voraussichtlichem Termin und Kontaktmöglichkeit erspart dem Kunden eine Nachfrage.

Der Flow kann den Rückstand melden, über einen geänderten Verfügbarkeitstermin informieren und regelmäßig schreiben, solange die Bestellung im Rückstand ist. Für den Termin in der E-Mail zählt das beim Artikel hinterlegte Datum.

## Flow einrichten

Öffne **Kampagnen → Automatisierung → MailBeez Flows → Bei Lieferrückstand informieren** und wähle **Optionen → Konfigurieren**.

[doc-steps]
[doc-step]
**Festlegen, wer den Rückstand kennzeichnet**

Wähle unter **Benachrichtigen bei** den Rückstandsstatus für Benachrichtigungen. Vergibt dein Team ihn von Hand, lass **Automatisch prüfen** leer. Für die automatische Prüfung wählst du die zu prüfenden Bestellstatus und unter **Bei Rückstand setzen** den Rückstandsstatus aus. Dieser muss auch unter **Benachrichtigen bei** ausgewählt sein.
[/doc-step]
[doc-step]
**Zeitpunkte für Nachrichten wählen**

Für das Ventil könntest du unter **Erste Nachricht nach** einen Tag ab dem Statuswechsel eintragen und unter **Weitere Nachrichten alle** sieben Tage. Erkläre in der ersten Nachricht den Rückstand. Verschiebt sich der Verfügbarkeitstermin, kann der Kunde ein Update mit dem neuen Datum erhalten.
[/doc-step]
[doc-step]
**Artikel und Liefertermin prüfen**

Nutze im Testshop eine Bestellung mit bekanntem Verfügbarkeitstermin. Vergleiche Artikel und Datum in der Nachricht mit den Produktdaten. Lies den Text auch für den Fall, dass noch kein Termin feststeht. Gib dem Kunden eine Möglichkeit, bei dir nachzufragen.
[/doc-step]
[/doc-steps]

Für eine einzelne Nachricht zu einem Bestellstatus wie „Abholbereit“ nutze [Über den Bestellstatus informieren](/mailbeez/notification_order_status).
