---
# http://learn.getgrav.org/content/headers
title: "Shopper Approved"
module_subtitle: "Bewertungen von Shopper Approved importieren"
slug: config_shopperapproved_integration
routes:
    default: /dokumentation/configbeez/config_shopperapproved_integration
# menu: ShopperApproved Integration Suite
date: 03-05-2011
published: true
publish_date: 03-05-2011
# unpublish_date: 03-05-2011
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
    tag: [pro, "Bewertungen von Shopper Approved importieren"]
module:
    code: 'config_shopperapproved_integration'
    category: [configbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/03/top_64.png'
    pro: 'pro'
    cert: 'true'
    price: '159 EUR'
    title_en: 'ShopperApproved Integration Suite'
    teaser_en: 'Integrate your valuable ShopperApproved Ratings in MailBeez Campaigs and your Storefront (SEO)'
    title_de: 'ShopperApproved Integration Suite'
    teaser_de: 'Integrieren Sie Ihre wertvollen Bewertungen in MailBeez Kampagnen und den Shop (SEO)'
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

Ein Tierbedarfsshop möchte in der Willkommensmail einen Kunden zitieren, der seine erste Futterlieferung für den Welpen bewertet hat. Prüfe zuerst, ob die Bewertung in MailBeez ankommt und zum richtigen Shop gehört. Gerade bei zwei Shops unter derselben Marke ist das leicht zu übersehen.

## Bewertungen für einen Shop importieren

Öffne **System → Erweiterungen → Externe Dienste** und wähle **Bewertungen von Shopper Approved importieren**.

[doc-steps]

[doc-step]
**Zugangsdaten desselben Shops verwenden**

Trage die **Shopper-Approved-Site-ID** und den **Shopper-Approved-API-Token** für den Shop ein, dessen Bewertungen du verwenden möchtest. Vergleiche die Site-ID mit dem Eintrag in dessen Shopper-Approved-Konto.
[/doc-step]

[doc-step]
**Einen bekannten Kommentar prüfen**

Speichere und wähle **Bewertungen importieren**, oder warte auf den nächsten geplanten Import. Lass **Bei normaler MailBeez-Verarbeitung ausführen** aktiv, sofern kein eigener Cronjob den Import übernimmt. Ist der Kommentar zur Welpenfutter-Lieferung da, legst du unter [Bewertungen in E-Mails](/filterbeez/filter_add_shopperapproved) die Auswahl für die Willkommensmail fest.
[/doc-step]

[/doc-steps]
