---
# http://learn.getgrav.org/content/headers
title: "Winback cross-check"
module_subtitle: "Avoid contacting customers again after an earlier winback reminder"
slug: filter_check_winback_advanced
# menu: Winback Advanced Cross Check
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
    tag: [pro, "Winback Advanced Cross Check"]
module:
    code: 'winback_advanced'
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
To set up winback reminders in V5, open [Win back inactive customers](/mailbeez/winback_advanced). [Browse the legacy reference](/legacy).
[/doc-callout]

<span id="don-t-duplicate-your-emai"></span>If you moved from the simple module to the advanced edition, use this historical filter to check the earlier sending history and opt-outs. It prevents a buyer who already received or blocked the simple module’s message from receiving it again through the advanced module.

A customer may still be inactive after receiving an earlier winback email. Their past send record matters when deciding whether the newer module should contact them again.

A shop that started with the advanced edition has no simple-module history to check.
