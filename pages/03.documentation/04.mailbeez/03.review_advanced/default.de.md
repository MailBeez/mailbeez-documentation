---
# http://learn.getgrav.org/content/headers
title: "Produktbewertungen"
module_subtitle: "Um Produktbewertungen bitten"
slug: review_advanced
# menu: Produktbewertungen Profi - mit Autologin
date: 21-06-2011
published: true
publish_date: 21-06-2011
# unpublish_date: 21-06-2011
template: docs
# theme: false
visible: true
routes:
    aliases:
        - /dokumentation/mailbeez/review_reminder
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: done
    category: [docs]
    tag: [pro, "Um Produktbewertungen bitten"]
module:
    plans_position: after_guide
    mc_ready: true
    code: 'review_advanced'
    category: [mailbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio,comp_saas]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/08/star_plus.png'
    pro: 'pro'
    cert: 'true'
    price: '109 EUR'
    title_en: 'Review Advanced - with Autologin'
    teaser_en: 'boost you reviews - with autologin and multiple reminders'
    title_de: 'Produktbewertungen Profi'
    teaser_de: 'Optimiere die Bitte um Produktbewertung - mehrstufig mit Autologin'
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

Ein Kunde bestellt in deinem Kaffeeshop eine Handmühle. Bei der Lieferung kann er schon sagen, ob das Paket heil angekommen ist. Nach einer Woche weiß er auch, wie gut sich der Mahlgrad für Espresso einstellen lässt. Mit diesem Flow bittest du ihn um eine Bewertung der Mühle auf der Produktseite.

Pro E-Mail-Stufe gilt derselbe Text für alle Produkte. MailBeez ergänzt die Bewertungslinks zu den Artikeln aus der jeweiligen Bestellung. Hat der Kunde eine Mühle und Kaffeebohnen bestellt und die Bohnen schon bewertet, erscheint nur die Mühle in seiner Einladung.

## Flow einrichten

Öffne **Kampagnen → Automatisierung → MailBeez Flows → Um Produktbewertungen bitten** und wähle **Optionen → Konfigurieren**.

<span id="zeitpunkt-fuer-einladung-"></span>
<span id="diese-einstellungen-sind-"></span>

[doc-steps]
[doc-step]
**Zeit zum Ausprobieren einplanen**

Wähle unter **Bestell-Status** deinen Versandstatus. Plane unter **Wartezeit nach dem Statuswechsel** Zeit für die Lieferung und das Ausprobieren ein, zum Beispiel zehn Tage. Diese Frist gilt für alle passenden Bestellungen. Setze **Höchstalter des Statuswechsels** über diese Wartezeit, um die Auswahl älterer Bestellungen zu begrenzen.
[/doc-step]
[doc-step]
**Einladung und Erinnerungen festlegen**

Formuliere die Einladung so, dass sie zu jedem Artikel passt, etwa „Hilf anderen bei der Auswahl. Bewerte einen Artikel aus deiner Bestellung.“

Wähle unter **Anzahl der E-Mails** eine E-Mail, wenn du nur einmal einladen möchtest. Für eine Erinnerung zählt **Wartezeit vor E-Mail 2** ab der ersten Nachricht und **Wartezeit vor E-Mail 3** ab der zweiten.
[/doc-step]
[doc-step]
**Das Bewertungsformular öffnen**

Öffne den Produktlink in einer Testeinladung und prüfe Artikel und Formular. Mit **Bewertungsformular ohne erneute Anmeldung öffnen** bestimmst du, ob sich der Käufer noch einmal anmelden muss. An einer Bestellung mit zwei Artikeln siehst du, welche davon in der E-Mail erscheinen.
[/doc-step]
[/doc-steps]

Das Rezept [Bewertungseinladung planen](/kochbuch/optimierter-ablauf-bitte-um-bewertung) führt dich vom Versandstatus bis zum Formular. Wartet ein Käufer auf die E-Mail, prüfe den [geplanten Lauf](/quickstart/step-3-set-forget) und den [Versandeintrag](/sending-status).
