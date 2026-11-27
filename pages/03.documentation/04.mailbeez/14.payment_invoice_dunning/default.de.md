---
# http://learn.getgrav.org/content/headers
title: "Offene Rechnungen"
module_subtitle: "An offene Rechnungen erinnern"
slug: payment_invoice_dunning
# menu: Mahnungsablauf Rechnungskauf
date: 28-06-2011
published: true
publish_date: 28-06-2011
# unpublish_date: 28-06-2011
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
    tag: [pro, "An offene Rechnungen erinnern"]
module:
    plans_position: after_guide
    code: 'payment_invoice_dunning'
    category: [mailbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/2011/06/payment_inadvance_dunning.png'
    pro: 'pro'
    cert: 'true'
    price: '139 EUR'
    title_en: 'Payment Invoice Dunning'
    teaser_en: 'Waiting for Invoice Payments? Automatize payment dunning.'
    title_de: 'Mahnwesen Rechnungen'
    teaser_de: 'Mahnablauf für unbezahlte Rechnungen'
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

Ein Café bestellt zwei Kartons Kaffeefilter auf Rechnung. Die Ware ist angekommen, doch die Rechnung steht im Shop noch als offen. Mit Rechnungsnummer, Betrag und Zahlungsdaten in der ersten Erinnerung kann das Café bezahlen oder dir mitteilen, dass es schon überwiesen hat.

MailBeez richtet sich nach den Bestellstatus, die ihr für offene Rechnungen verwendet. Verbucht eingegangene Zahlungen vor dem nächsten Lauf im Shop. Sonst kann eine bereits bezahlte Bestellung weiterhin für eine Erinnerung infrage kommen.

## Flow einrichten

Öffne **Kampagnen → Automatisierung → MailBeez Flows → An offene Rechnungen erinnern** und wähle **Optionen → Konfigurieren**.

[doc-steps]
[doc-step]
**Offene Rechnungen auswählen**

Wähle unter **Bestellstatus für offene Rechnungen** den Status für offene Rechnungen. Vergleiche eine unbezahlte mit einer ausgeglichenen Rechnung. Sobald die Zahlung verbucht ist, sollte die Bestellung keinen der für Erinnerungen ausgewählten Status mehr haben.
[/doc-step]
[doc-step]
**Fristen für die Erinnerungen festlegen**

Trage unter **Erste Erinnerung: Wartezeit** die Wartezeit ab dem Wechsel in den auslösenden Status ein. Richte sie nach eurem Rechnungsablauf. **Wartezeit vor E-Mail 2** zählt ab der ersten E-Mail. Möchtest du dem Café danach eine weitere Woche geben, trage sieben Tage ein. Prüfe auch den Bestellstatus nach jeder Mahnstufe.
[/doc-step]
[doc-step]
**Empfänger der letzten Benachrichtigung prüfen**

Nutzt ihr die Inkassostufe, stimme **Inkassoankündigung: Wartezeit**, **Bestellstatus für Inkasso** und **Benachrichtigung per Email (Inkasso)** mit der Person ab, die offene Rechnungen bearbeitet. Nach dem Versand der vierten E-Mail setzt MailBeez die Bestellung auf den gewählten Inkassostatus. Die letzte Benachrichtigung geht an die hinterlegte E-Mail-Adresse. Prüfe Empfänger und Inhalt vor der Aktivierung im Testshop.
[/doc-step]
[/doc-steps]

Soll der Käufer vor dem Versand bezahlen, passt [An offene Vorkassezahlungen erinnern](/mailbeez/payment_inadvance_dunning) zu diesem Ablauf.
