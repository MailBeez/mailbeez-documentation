---
title: "Shopauskunft (Community)"
module_subtitle: "Käufer zu einer Shopbewertung auf Shopauskunft einladen"
slug: shopauskunft
routes:
    default: /dokumentation/mailbeez/shopauskunft
date: 10-01-2011
published: true
publish_date: 10-01-2011
template: docs
visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: done
    category:
        - docs
    tag:
        - ce
        - "Shopauskunft"
module:
    code: shopauskunft
    category:
        - mailbeez
    compatiblity:
        - comp_osc
        - comp_cre
        - comp_digi
        - comp_zencart
        - comp_xtc
        - comp_xtcm2        
        - comp_gambio
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/03/sa.png'
    pro: ''
    cert: ''
    price: ''
    title_en: Shopauskunft
    teaser_en: ''
    title_de: Shopauskunft
    teaser_de: 'Kunden automatisch um Bewertungen auf Shopauskunft.de bitten'
    author: MailBeez.com
author:
    name: admin
metadata:
    author: admin
---

[doc-callout type="note" title="Früheres Kampagnenmodul"]
Für einen aktuellen Shop wählst du den Flow unter [Automatisierung](/mailbeez). [Zur Referenz für ältere Versionen](/legacy).
[/doc-callout]

Das frühere Community-Modul lädt Käufer zur Shopbewertung bei Shopauskunft ein. Verwende das Bewertungsziel deines Shops und öffne es aus einer Testeinladung, bevor du den automatischen Versand aktivierst.

Gibt es mehrere Bewertungsprofile, vergleiche den Shopnamen auf der Zielseite mit dem Namen, den der Käufer an der Kasse gesehen hat.

1. Wähle unter **Bestell Status** den Status, der die Wartezeit startet. Lege den Abstand so fest, dass die Bestellung vor der Einladung ankommen kann.
2. Wähle ein Prüfzeitfenster, das länger als die Wartezeit ist. Bei fünf Tagen Wartezeit und zehn Tagen Obergrenze prüft ein täglicher Lauf Bestellungen, die vor fünf bis zehn Tagen den gewählten Status erreicht haben.
3. Prüfe Absendername, Absenderadresse und die Text- und HTML-Vorlagen. Das Modul berücksichtigt je Kunde die höchste passende Bestellnummer und setzt chronologisch aufsteigende Bestellnummern voraus.

Den V5-Flow beschreibt [Um Bewertungen auf Shopauskunft bitten](/mailbeez/shopauskunft_advanced).
