---
# http://learn.getgrav.org/content/headers
title: "Trustpilot-Einzellinks"
module_subtitle: "Die Trustpilot-Links einer früheren Anbindung in E-Mail-Vorlagen erkennen"
slug: trustpilot_advanced_ul
# menu: Trustpilot Profi - Unique Links Version
date: 05-12-2014
published: true
publish_date: 05-12-2014
# unpublish_date: 05-12-2014
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
    tag: [pro, "Trustpilot Profi - Unique Links Version"]
module:
    code: 'trustpilot_advanced_ul'
    category: [mailbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2013/06/top_64.png'
    pro: 'pro'
    cert: 'true'
    price: '99 EUR'
    title_en: 'Trustpilot Advanced Unique Links'
    teaser_en: 'Unique Links and Advanced Features: Delay for international orders, multiple Order status, recognition of regular customers'
    title_de: 'Trustpilot Profi Unique Links Version'
    teaser_de: 'Unique Links und Profi-Features: Verzögerung für internationale Bestellungen, Stammkunden-Erkennung und mehr'
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

<span id="warum-trustpilot-unique-l"></span>Diese frühere Ausgabe setzt ein Trustpilot-Konto mit Freigabe für Unique Links voraus. Für Einladungen über den Automatischen Feedback-Service siehe [Um Bewertungen auf Trustpilot bitten](/mailbeez/trustpilot_advanced).

Kläre bei einer älteren Vorlage, welche Anbindung ihre Links erzeugt. Auch beim Übertragen der Vorlage auf einen anderen Shop gelten die Kontovoraussetzungen dieser Edition.

1. <span id="mehrere-bestell-status"></span><span id="beruecksichtigung-von-aus"></span>Wähle die Bestellstatus für den Start der Einladung und plane Zeit für die Lieferung ein. Für Sendungen außerhalb des im Shop hinterlegten Landes kannst du eine zusätzliche Wartezeit einstellen.
2. <span id="stammkunden-erkennung"></span>Lege einen Mindestabstand zwischen Einladungen für denselben Käufer fest. Bei 120 Tagen erhält auch ein monatlicher Stammkunde frühestens nach rund vier Monaten die nächste Anfrage.
3. <span id="individuelle-emails"></span><span id="mehrere-sprachen"></span>Bearbeite die Einladung in der MailBeez-Vorlage. Bei Verwendung von [Erweiterung für Mehrsprachigkeit](/configbeez/config_tmplmngr_lng) sollten Nachricht und verlinkte Trustpilot-Seite dieselbe Sprache haben. Prüfe den Link in einer Test-E-Mail.

<span id="wollen-sie-ihre-wertvolle"></span>Um Bewertungen wieder in den Shop zu übernehmen, nutze [Bewertungen von Trustpilot importieren](/configbeez/integrations/config_trustpilot_rss_importer).

[plugin:content-inject](/content_blocks/pro_responsive_template)
