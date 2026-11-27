---
# http://learn.getgrav.org/content/headers
title: "Newsletter subscription filter"
module_subtitle: "Limit campaign recipients to newsletter subscribers"
slug: filter_check_newslettersubscriber
# menu: Newsletter Subscribers Only
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
    tag: [pro, "Newsletter Subscribers Only"]
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

[doc-callout type="note" title="Earlier MailBeez versions"]
To review the newsletter confirmation flow in V5, open [Signup Confirmation](/contacts/signup-confirmation). [Browse the legacy reference](/legacy).
[/doc-callout]

For MailBeez 2.6 and later, check the framework’s subscription settings when investigating a recipient exclusion. Older installations used a separate filter for this check. In V5, see [Anti-Spam & Consent](/configbeez/config_spamcompliance_advanced).

Use a recipient whose subscription status you know when comparing versions. That makes it easier to identify which subscription check excluded the address.
