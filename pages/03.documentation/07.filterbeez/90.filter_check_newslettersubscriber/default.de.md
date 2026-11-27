---
# http://learn.getgrav.org/content/headers
title: "Newsletter-Abo-Filter"
module_subtitle: "Den Versand auf Newsletter-Abonnenten beschränken"
slug: filter_check_newslettersubscriber
# menu: Newsletter Abo Check
date: 08-04-2011
published: true
publish_date: 08-04-2011
# unpublish_date: 08-04-2011
template: docs
# theme: false
visible: false
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: done
    category: [docs]
    tag: [pro, "Newsletter Abo Check"]
module:
    code: 'filter_check_newslettersubscriber'
    category: [depreciated]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/04/icon_322.png'
    pro: 'pro'
    cert: 'true'
    price: '29 EUR'
    title_en: 'Check Newsletter Subscription'
    teaser_en: 'Only Newsletter subscriber will get MailBeez campaigns'
    title_de: 'Newsletter Abo check'
    teaser_de: 'MailBeez nur an Newsletter Abonnenten versenden'
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

[doc-callout type="note" title="Frühere MailBeez-Versionen"]
In V5 kannst du unter [Anmeldung](/contacts/signup-confirmation) die Newsletter-Bestätigung prüfen. [Zur Referenz für ältere Versionen](/legacy).
[/doc-callout]

Prüfe ab MailBeez 2.6 die Aboregeln des Grundsystems, wenn ein Empfänger ausgeschlossen wird. Frühere Installationen nutzten für die Prüfung einen eigenen Filter. In V5 findest du die Einstellungen unter [Anti-Spam & Einwilligung](/configbeez/config_spamcompliance_advanced).

Verwende beim Versionsvergleich einen Empfänger mit bekanntem Abostatus. So lässt sich leichter feststellen, welche Aboprüfung die Adresse ausgeschlossen hat.
