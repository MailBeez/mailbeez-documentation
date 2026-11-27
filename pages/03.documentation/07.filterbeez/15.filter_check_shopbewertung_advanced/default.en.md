---
# http://learn.getgrav.org/content/headers
title: "Store review cross-check"
module_subtitle: "Skip store-review invitations sent before switching to the advanced module"
slug: filter_check_shopbewertung_advanced
# menu: Shopbewertung Advanced Cross Check
date: 18-12-2012
published: true
publish_date: 18-12-2012
# unpublish_date: 18-12-2012
template: docs
# theme: false
visible: false
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: review
    category: [docs]
    tag: [pro, "Shopbewertung Advanced Cross Check"]
module:
    code: 'shoprating_advanced'
    category: [filterbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    pro: 'pro'
    cert: 'true' 


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
To set up a shop-review invitation in V5, open [Ask for reviews on your store](/mailbeez/shoprating_advanced). [Browse the legacy reference](/legacy).
[/doc-callout]

If you moved from the simple module to the advanced edition, use this historical filter to check the earlier sending history and opt-outs. It prevents a buyer who already received or blocked the simple module’s message from receiving it again through the advanced module.

Use an earlier store-review invitation when testing the transition. A product-review invitation from the same customer belongs to a different campaign history.

A shop that started with the advanced edition has no simple-module history to check.
