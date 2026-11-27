---
# http://learn.getgrav.org/content/headers
title: "Bestelldatenbank reparieren"
module_subtitle: "Widersprüchliche Bestellstatus in der Shopdatenbank korrigieren"
slug: service_db_repair_order
# menu: Service-Modul: Repariere Bestell-Datenbank
date: 07-02-2013
published: true
publish_date: 07-02-2013
# unpublish_date: 07-02-2013
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
    tag: [pro, "Service-Modul: Repariere Bestell-Datenbank"]
module:
    code: 'service_db_repair_order'
    category: [mailbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    thumbnail: ''
    pro: 'pro'
    cert: 'true'
    price: '29 EUR'
    title_en: 'Service-Module: Repair Orders DB '
    teaser_en: 'This module repairs corrupted Order Databases'
    title_de: 'Service-Modul: Repariere Bestell-Datenbank'
    teaser_de: 'Dieses Modul repariert korrupte Bestell-Datenbanken'
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

[doc-callout type="note" title="Früheres Kampagnenmodul"]
Für einen aktuellen Shop wählst du den Flow unter [Automatisierung](/mailbeez). [Zur Referenz für ältere Versionen](/legacy).
[/doc-callout]

<span id="problem"></span><span id="symptome"></span>Nutze diesen früheren Dienst, wenn Übersicht und Bearbeitung einer Bestellung verschiedene Status zeigen oder ein Modul eine extern bearbeitete Bestellung nicht findet.

Bei einer Lieferanfrage sieht ein Mitarbeiter vielleicht einen Status in der Bestellliste und einen anderen in der geöffneten Bestellung. Halte vor der Reparatur fest, welche beiden Angaben voneinander abweichen.

1. <span id="loesung"></span>Starte den Dienst in der Simulation. Sie listet die betroffenen Bestellungen auf, ohne sie zu ändern. Vergleiche einen Treffer mit den Daten im Shop und in der Warenwirtschaft.
2. Lege fest, ob reparierte Bestellungen ihren bisherigen Status behalten oder einen bestimmten neuen Status erhalten. Prüfe, welche Kampagnen auf diesen Status reagieren.
3. Starte die Reparatur nach der Kontrolle der Auswahl. Der Dienst läuft vor den übrigen Modulen. Öffne anschließend eine betroffene Bestellung und vergleiche den Status in beiden Ansichten.
