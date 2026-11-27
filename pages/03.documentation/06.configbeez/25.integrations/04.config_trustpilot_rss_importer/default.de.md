---
# http://learn.getgrav.org/content/headers
title: "Trustpilot"
module_subtitle: "Bewertungen von Trustpilot importieren"
slug: config_trustpilot_rss_importer
routes:
    default: /dokumentation/configbeez/config_trustpilot_rss_importer
# menu: Trustpilot Integration Suite
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
    tag: [pro, "Bewertungen von Trustpilot importieren"]
module:
    code: 'config_trustpilot_rss_importer'
    category: [configbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/03/top_64.png'
    pro: 'pro'
    cert: 'true'
    price: '159 EUR'
    title_en: 'Trustpilot Integration Suite'
    teaser_en: 'Integrate your valuable Trustpilot Ratings in MailBeez Campaigs and your Storefront (SEO)'
    title_de: 'Trustpilot Integration Suite'
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

Ein Kaffeeabo und der zugehörige Zubehörshop haben ähnliche Namen auf Trustpilot. Ein Kommentar zur Verschiebung eines Liefertermins gehört zum Abo. An ihm kannst du erkennen, ob du den richtigen öffentlichen Bewertungsfeed angebunden hast, bevor du deinen Abonnenten die Bewertungen zeigst.

## Den Feed des richtigen Shops verwenden

Öffne **System → Erweiterungen → Externe Dienste** und wähle **Bewertungen von Trustpilot importieren**.

[doc-steps]

[doc-step]
**Die öffentliche Feed-Adresse eingeben**

Füge unter **URL des Trustpilot-RSS-Feeds** die vollständige öffentliche Adresse des RSS-Feeds ein. Verwende die Feed-Adresse. Die Profilseite und der Link zum Schreiben einer Bewertung haben andere Aufgaben.
[/doc-step]

[doc-step]
**Die Bewertungen nach dem Speichern prüfen**

Wähle **Feed testen** und suche den Kommentar zum Liefertermin. Mit **Cache-Dauer für Bewertungen (Minuten)** legst du fest, wie lange MailBeez den geladenen Feed weiterverwendet. Die erste Anfrage nach Ablauf der Frist aktualisiert ihn. Wie viele Bewertungen erscheinen, hängt vom Feed und den Anzeigeeinstellungen ab.
[/doc-step]

[/doc-steps]

Möchtest du einen Kunden um eine neue Bewertung bitten, nutze den [Trustpilot-Einladungsflow](/mailbeez/trustpilot_advanced).
