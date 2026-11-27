---
# http://learn.getgrav.org/content/headers
title: "Trustpilot"
module_subtitle: "Um Bewertungen auf Trustpilot bitten"
slug: trustpilot_advanced
# menu: Trustpilot Profi
date: 04-06-2013
published: true
publish_date: 04-06-2013
# unpublish_date: 04-06-2013
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
    tag: [pro, "Um Bewertungen auf Trustpilot bitten"]
module:
    plans_position: after_guide
    code: 'trustpilot_advanced'
    category: [mailbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2013/06/top_64.png'
    pro: 'pro'
    cert: 'true'
    price: '99 EUR'
    title_en: 'Trustpilot Advanced'
    teaser_en: 'Advanced Features: Delay for international orders, multiple Order status, recognition of regular customers'
    title_de: 'Trustpilot Profi'
    teaser_de: 'Profi-Features: Verzögerung für internationale Bestellungen, Stammkunden-Erkennung und mehr'
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

Dein Shop für Kaffee-Abos möchte nach der ersten Lieferung fragen, wie sie angekommen ist. Beim automatischen Einladungsservice von Trustpilot sind zwei E-Mails beteiligt. MailBeez sendet den Auslöser an Trustpilot. Trustpilot verschickt anschließend die Einladung an den Käufer. Das ist wichtig für den Versandtermin und für die Suche nach einer fehlenden Einladung.

## Flow einrichten

Öffne **Kampagnen → Automatisierung → MailBeez Flows → Um Bewertungen auf Trustpilot bitten** und wähle **Optionen → Konfigurieren**.

<span id="zeitpunkt-fuer-die-meldun"></span>
<span id="diese-einstellungen-sind-"></span>

[doc-steps]
[doc-step]
**Den Einladungsservice anbinden**

Übernimm die Adresse des automatischen Einladungsservices aus deinem Trustpilot-Konto in **Deine Trustpilot Email Adresse**. Verwende die Adresse des Shops, der bewertet werden soll. Der Dienst erhält die Kunden- und Bestelldaten für die Einladung mit der auslösenden Nachricht.
[/doc-step]
[doc-step]
**Beide Wartezeiten zusammenrechnen**

Wähle unter **Bestell-Status für Bewertungen** deinen Versandstatus. Stehen unter **Wartezeit nach dem Statuswechsel** drei Tage und wartet Trustpilot zwei weitere Tage, ist die Einladung ungefähr fünf Tage nach Versand fällig. Berücksichtige den nächsten geplanten Lauf. Wähle für **Höchstalter des Statuswechsels** einen längeren Zeitraum als die Wartezeit in MailBeez. Plane für Auslandssendungen bei Bedarf zusätzliche Tage ein.
[/doc-step]
[doc-step]
**Stammkunden seltener einladen**

Lege für die Abo-Lieferungen unter **Mindestabstand zwischen Einladungen** einen passenden Abstand fest. So muss auf ein monatliches Paket nicht jeden Monat eine Einladung folgen. Text und Zeitplan der Kundeneinladung prüfst du im zugehörigen Trustpilot-Konto.
[/doc-step]
[/doc-steps]

Fehlt die Einladung, prüfe zuerst den [Versand des Auslösers in MailBeez](/sending-status). Ging er an die Serviceadresse, schau im nächsten Schritt im Trustpilot-Konto nach der Einladung.
