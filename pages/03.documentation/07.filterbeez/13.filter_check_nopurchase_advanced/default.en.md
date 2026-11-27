---
# http://learn.getgrav.org/content/headers
title: "First-order cross-check"
module_subtitle: "Avoid repeating a first-order reminder after switching from the simple module"
slug: filter_check_nopurchase_advanced
# menu: Nopurchase Advanced Cross Check
date: 16-10-2012
published: true
publish_date: 16-10-2012
# unpublish_date: 16-10-2012
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
    tag: [pro, "Nopurchase Advanced Cross Check"]
module:
    code: 'nopurchase_advanced'
    category: [filterbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    pro: 'pro'
    cert: 'true' 
author:
    name: kelly
metadata:
    author: kelly
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
To follow up after registration without a purchase in V5, open [Encourage a first order](/mailbeez/nopurchase_advanced). [Browse the legacy reference](/legacy).
[/doc-callout]

<span id="don-t-duplicate-your-emai"></span>If you moved from the simple module to the advanced edition, use this historical filter to check the earlier sending history and opt-outs. It prevents a buyer who already received or blocked the simple module’s message from receiving it again through the advanced module.

Check an account that already received a first-purchase invitation before the switch. Its earlier contact history is the reason to use the cross-check during migration.

A shop that started with the advanced edition has no simple-module history to check.
