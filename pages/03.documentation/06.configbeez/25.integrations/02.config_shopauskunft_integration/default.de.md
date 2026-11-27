---
# http://learn.getgrav.org/content/headers
title: "Shopauskunft"
module_subtitle: "Bewertungen von Shopauskunft importieren"
slug: config_shopauskunft_integration
routes:
    default: /dokumentation/configbeez/config_shopauskunft_integration
# menu: Shopauskunft Integration Suite
date: 08-02-2012
published: true
publish_date: 08-02-2012
# unpublish_date: 08-02-2012
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
    tag: [pro, "Bewertungen von Shopauskunft importieren"]
module:
    code: 'config_shopauskunft_integration'
    category: [configbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2012/02/icon_64.png'
    pro: 'pro'
    cert: 'true'
    price: '159 EUR'
    title_en: 'Shopauskunft Integration Suite'
    teaser_en: 'Integrate your valuable Ratings in MailBeez Campaigs and your Storefront (SEO)'
    title_de: 'Shopauskunft Integration Suite'
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

Eine Kundin lobt auf Shopauskunft die Verpackung eines gerahmten Drucks. Du möchtest den Kommentar im Shop zeigen, siehst dort aber nur die Bewertungen von gestern. MailBeez kann einen bereits geladenen Feed eine Zeit lang weiterverwenden. Prüfe deshalb zuerst, wie alt der Abruf ist und wie viele Bewertungen angefordert werden.

## Anzahl und Aktualisierung der Bewertungen festlegen

Öffne **System → Erweiterungen → Externe Dienste** und wähle **Bewertungen von Shopauskunft importieren**.

[doc-steps]

[doc-step]
**Den Shop zuordnen**

Trage unter **Shopauskunft-Partnertoken** den Token von Shopauskunft ein. Trägst du unter **Bei Shopauskunft angeforderte Bewertungen** eine Null ein, fragt MailBeez bis zu 100 Bewertungen ab. Der Dienst kann weniger liefern.
[/doc-step]

[doc-step]
**Den nächsten Abruf prüfen**

Lege die **Cache-Dauer für Bewertungen (Minuten)** fest und speichere. Ist die Zeit abgelaufen, lädt MailBeez den Feed bei der nächsten Anfrage neu. Wähle **Feed testen** und suche den Kommentar zum Druck. Stimmen Datum und Shop mit dem Original überein?
[/doc-step]

[/doc-steps]

Für eine neue Bewertungseinladung nutze den [Shopauskunft-Flow](/mailbeez/shopauskunft_advanced).
