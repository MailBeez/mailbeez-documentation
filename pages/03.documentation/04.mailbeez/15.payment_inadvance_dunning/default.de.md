---
# http://learn.getgrav.org/content/headers
title: "Vorkasse-Erinnerung"
module_subtitle: "An offene Vorkassezahlungen erinnern"
slug: payment_inadvance_dunning
# menu: Zahlungserinnerung Vorkasse
date: 13-05-2011
published: true
publish_date: 13-05-2011
# unpublish_date: 13-05-2011
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
    tag: [pro, "An offene Vorkassezahlungen erinnern"]
module:
    plans_position: after_guide
    code: 'payment_inadvance_dunning'
    category: [mailbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/2011/06/payment_inadvance_dunning.png'
    pro: 'pro'
    cert: 'true'
    price: '139 EUR'
    title_en: 'Payment in advance Dunning'
    teaser_en: 'Waiting for Payments? Automatize payment reminders.'
    title_de: 'Zahlungserinnerung Vorkasse'
    teaser_de: 'Automatisierter Ablauf mit Stornierung'
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

Dein Ersatzteilshop reserviert eine Pumpe, während ein Kunde die Vorkasse überweist. Drei Tage später wartet die Bestellung noch auf Zahlung. Eine E-Mail mit Betrag, Bankverbindung und Verwendungszweck hilft dem Kunden, die Überweisung zu erledigen, ohne die Bestellbestätigung suchen zu müssen.

MailBeez orientiert sich am Status der offenen Vorkassebestellung. Plane Zeit für die Zuordnung der Zahlungseingänge ein. Sobald die Bestellung keinen der Erinnerungsstatus mehr hat, sollte der Kunde dazu keine Zahlungsaufforderung mehr erhalten.

## Flow einrichten

Öffne **Kampagnen → Automatisierung → MailBeez Flows → An offene Vorkassezahlungen erinnern** und wähle **Optionen → Konfigurieren**.

[doc-steps]
[doc-step]
**Bestellungen mit offener Vorkasse erkennen**

Wähle unter **Bestellstatus von offenen Vorkasse Bestellungen** den Status, der bei euch ausdrücklich für ausstehende Vorkasse steht. Prüfe, wohin die Bestellung wechselt, wenn die Zahlung eingeht. Ein allgemeines „In Bearbeitung“, das auch bezahlte Aufträge tragen, wäre zu weit gefasst.
[/doc-step]
[doc-step]
**Erste Erinnerung und Folge-E-Mail planen**

Trage für die Pumpe unter **Erste Erinnerung: Wartezeit** drei Tage ab dem Statuswechsel ein. Verschickst du eine weitere Erinnerung, zählt **Wartezeit vor E-Mail 2** ab der ersten E-Mail. Vergleiche Betrag, Verwendungszweck und Bankverbindung mit einer Testbestellung.
[/doc-step]
[doc-step]
**Die Stornierung prüfen**

Sieht euer Ablauf eine Stornierung vor, kontrolliere **Stornierung: Wartezeit** und **Bestellstatus für Stornierung**. In dieser Stufe kann MailBeez den Bestellstatus ändern und eine Stornierungsnachricht versenden. Spiele den Ablauf mit einer eigens angelegten Bestellung im Testshop durch, bevor du ihn für reservierte Ware einsetzt.
[/doc-step]
[/doc-steps]

Für bereits auf Rechnung gelieferte Ware nutze [An offene Rechnungen erinnern](/mailbeez/payment_invoice_dunning).
