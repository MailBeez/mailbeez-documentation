---
# http://learn.getgrav.org/content/headers
title: "Shopauskunft"
module_subtitle: "Um Bewertungen auf Shopauskunft bitten"
slug: shopauskunft_advanced
# menu: Shopauskunft.de Profi
date:  02-11-2015
published: true
publish_date:  02-11-2015
# unpublish_date: 15-04-2015
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
    tag: [pro, "Um Bewertungen auf Shopauskunft bitten"]
    
module:
    plans_position: after_guide
    code: 'shopauskunft_advanced'
    category: [mailbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2013/06/top_64.png'
    pro: 'pro'
    cert: 'true'
    price: '99 EUR'
    title_en: 'Shopauskunft.de Advanced'
    teaser_en: 'Advanced Features: Delay for international orders, multiple Order status, recognition of regular customers'
    title_de: 'Shopauskunft.de Profi'
    teaser_de: 'Profi-Features: Verzögerung für internationale Bestellungen, Stammkunden-Erkennung und mehr'
    author: 'MailBeez.com'    
# added collection selector

author:
    name: admin
metadata:
    author: admin
#      description: Your page description goes here

---

Ein Möbelshop verschickt einen zerlegten Eichentisch per Spedition. Erst wenn die Kartons angekommen sind, kann der Käufer Lieferung und Verpackung beurteilen. Eine Einladung zu Shopauskunft zehn Tage nach Versand passt hier besser als eine E-Mail beim Verlassen des Lagers.

MailBeez erstellt den Link für deinen Shopauskunft-Zugang. Bei hinterlegter Shop-ID enthält er Bestellnummer, Kundennummer und E-Mail-Adresse aus der Bestellung. Verwende zum Prüfen einen Testkunden.

## Flow einrichten

Öffne **Kampagnen → Automatisierung → MailBeez Flows → Um Bewertungen auf Shopauskunft bitten** und wähle **Optionen → Konfigurieren**.

[doc-steps]
[doc-step]
**Die Einladung dem richtigen Shop zuordnen**

Trage unter **Ihre Shopauskunft ID** die ID des richtigen Shops ein. Bei einer älteren Einrichtung über eine feste URL prüfst du **Ihre Shopauskunft URL**. Öffne den Bewertungslink einer Testeinladung und kontrolliere den Shopnamen.
[/doc-step]
[doc-step]
**Die Lieferzeit berücksichtigen**

Wähle unter **Bestell-Status für Bewertungen** deinen Versandstatus und trage für den Tisch unter **Wartezeit nach dem Statuswechsel** zehn Tage ein. Wähle für **Höchstalter des Statuswechsels** einen längeren Zeitraum. Dauert die Lieferung ins Ausland länger, gib unter **Zusätzliche Wartezeit bei Auslandslieferungen** zusätzliche Tage an.
[/doc-step]
[doc-step]
**Den Abstand zwischen Einladungen wählen**

Lege mit **Mindestabstand zwischen Einladungen** fest, wie viel Zeit zwischen Einladungen an denselben Käufer liegen soll. Lies Betreff und Einstieg zusammen mit der Liefernachricht. Frag etwa, wie die Terminabsprache geklappt hat oder ob alle Kartons angekommen sind.
[/doc-step]
[/doc-steps]

Im Rezept [Bewertungseinladung planen](/kochbuch/optimierter-ablauf-bitte-um-bewertung) kannst du den Zeitpunkt an einer Testbestellung prüfen.
