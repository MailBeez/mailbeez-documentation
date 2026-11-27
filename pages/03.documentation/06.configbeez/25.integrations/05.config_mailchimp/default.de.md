---
# http://learn.getgrav.org/content/headers
title: MailChimp Integration
module_subtitle: "Prüfen, wie die frühere Anbindung Newsletter-Anmeldungen abgleicht"
slug: config_mailchimp
routes:
    default: /dokumentation/configbeez/config_mailchimp
    aliases:
        - /download/the-mailchimp-connector
        - /download/the-mailchimp-connector/oscommerce
        - /download/the-mailchimp-connector/zencart
# menu: MailChimp Integration
date: 02-03-2012
published: true
publish_date: 02-03-2012
# unpublish_date: 02-03-2012
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
    tag: [pro]
module:
    code: 'config_mailchimp'
    category: [configbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2012/11/icon_64.png'
    pro: 'pro'
    cert: 'true'
    price: '300 EUR'
    title_en: 'MailChimp Integration'
    teaser_en: 'MailBeez unlocks, MailChimp delivers'
    title_de: 'MailChimp Integration'
    teaser_de: 'MailBeez verfasst, MailChimp liefert'
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

[doc-callout type="note" title="Frühere Moduleinstellungen"]
Einstellungen in der aktuellen App findest du unter [System](/app-system). [Zur Referenz für ältere Versionen](/legacy).
[/doc-callout]

<span id="die-mailbeez-fuer-mailchi"></span>Diese Referenz gilt für einen Shop mit dem früheren MailChimp-Connector. Er setzt die damalige MailChimp-API voraus. Prüfe die vorhandene Verbindung, bevor du eine Liste abgleichst.

Vergleiche bei einer historischen Liste zunächst einen bekannten Abonnenten auf beiden Seiten in der Simulation. So hast du vor einem größeren Abgleich einen konkreten Vergleichsfall.

<span id="vorteile"></span>MailBeez bereitete die personalisierten Inhalte unterstützter Module vor. MailChimp versandte die Aussendung. Der Connector glich Änderungen an Listen in beide Richtungen ab. Bei großen Listen, auch mit mehr als 15.000 Abonnenten, übertrug er die Änderungen seit dem letzten Abgleich.

Prüfe die Zuordnung zuerst in der Simulation des Assistenten. Der Anbieter begrenzte die Anzahl der Personalisierungsfelder. Die Versandmöglichkeiten in V5 findest du unter [Versandmethode](/configbeez/config_email_engine).

## Module für diesen Connector

- <span id="mailchimp-faehige-module"></span>[Um Produktbewertungen bitten](/mailbeez/review_advanced)
- [Inaktive Kunden zurückgewinnen](/mailbeez/winback_advanced)
- [An offene Warenkörbe erinnern](/mailbeez/abandoned_cart_advanced)
- [Zum ersten Kauf einladen](/mailbeez/nopurchase_advanced)
- [Zum Kundenjubiläum gratulieren](/mailbeez/coupon_anniversary)
- [Zum Geburtstag gratulieren](/mailbeez/coupon_birthday)
- [Neukunden-Gewinnungssystem "ReferralHoney"](/mailbeez/coupon_referral_honey)
