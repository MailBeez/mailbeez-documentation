---
# http://learn.getgrav.org/content/headers
title: "Nachbestellung"
module_subtitle: "Zur Nachbestellung einladen"
slug: reorder_advanced
routes:
    aliases:
        - /dokumentation/mailbeez/coupon_reorder
        - /dokumentation/mailbeez/gutschein-wiederbestellen
# menu: Gutschein: Wiederbestellen
date: 15-08-2011
published: true
publish_date: 15-08-2011
# unpublish_date: 15-08-2011
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
    tag: [pro,coupon, "Zur Nachbestellung einladen"]
module:
    plans_position: after_guide
    code: 'reorder_advanced'
    category: [mailbeez]
    compatiblity: [comp_cre,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio,comp_saas]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/10/coupon_32.png'
    pro: 'pro'
    cert: 'true'
    price: '99 EUR'
    title_en: 'Reorder Advanced'
    teaser_en: 'Say thanks to your customers, and send them a reorder coupon towards their next purchase'
    title_de: 'Gutschein für die nächste Bestellung'
    teaser_de: 'Bedanken Sie sich beim Kunden für den Einkauf mit einem Gutschein für die nächste Bestellung'
    author: 'MailBeez.com'
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

Stell dir vor, du verkaufst Hundefutter. Wer einen Vier-Kilo-Sack bestellt, braucht oft nach etwa einem Monat Nachschub. Eine E-Mail 25 Tage nach dem Versand lässt genug Zeit zum Nachbestellen. Du kannst einen Gutschein beilegen und das Angebot auf Kunden beschränken, die schon mehrfach bei dir gekauft haben.

Der fertige Flow prüft die letzte Bestellung des Kunden und ihren Status. Möchtest du gezielt an eine bestimmte Packungsgröße erinnern, nutze einen [eigenen Flow auf Basis des Produktkaufs](/tutorials-und-rezepte/wiederkaeufe#bohnen-nachbestellen).

## Flow einrichten

Öffne **Kampagnen → Automatisierung → MailBeez Flows → Zur Nachbestellung einladen** und wähle **Optionen → Konfigurieren**.

<span id="passende-bestellungen-fue"></span>
<span id="diese-einstellungen-sind-"></span>

[doc-steps]
[doc-step]
**Die Erinnerung zeitlich einordnen**

Wähle unter **Bestell-Status** deinen Versandstatus und trage unter **Wartezeit nach dem Statuswechsel** 25 Tage ein. Setze **Höchstalter des Statuswechsels** höher als die Wartezeit. Hat der Kunde inzwischen wieder bestellt, zählt die ältere Bestellung nicht mehr als seine letzte.
[/doc-step]
[doc-step]
**Den Gutschein für Stammkunden einrichten**

Mit **Bestell-Status für Mindest-Anzahl an Bestellungen** legst du fest, welche Bestellungen für **Mindest-Anzahl Bestellung** zählen. Wähle beispielsweise abgeschlossene Bestellungen und als Mindestanzahl zwei. Unter **Anzahl an Wiederbestell Gutscheinen** bestimmst du, wie oft derselbe Kunde das Angebot bekommen kann.
[/doc-step]
[doc-step]
**Angebot und Warenkorb prüfen**

Wähle das Angebot unter **Gutschein Vorlage** und kontrolliere Code und Gültigkeit in einer Testmail. Aktiviere **Leeren Warenkorb voraussetzen**, wenn du Kunden mit Futter im Warenkorb bereits separat erinnerst.
[/doc-step]
[/doc-steps]

Vergleiche für das Beispiel einen Kunden mit zwei abgeschlossenen Bestellungen und einen mit nur einer. Auch wenn beide letzten Bestellungen alt genug sind, erfüllt nur der erste Kunde die Mindestanzahl.
