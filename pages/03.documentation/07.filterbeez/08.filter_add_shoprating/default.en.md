---
# http://learn.getgrav.org/content/headers
title: "Store ratings in emails"
module_subtitle: "Insert store ratings in emails based on the earlier template system"
menu: "Store ratings in emails"
slug: filter_add_shoprating
published: true
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
    tag: [pro, "Add ShopRatings to Emails"]
module:
    code: 'shoprating_advanced'
    category: [filterbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    pro: 'pro'
    cert: 'true'       
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
To choose a review integration in V5, open [Integrations](/extensions/integrations). [Browse the legacy reference](/legacy).
[/doc-callout]

Display store reviews in emails that use the earlier template system. Check that reviews from [Collect reviews in your store](/configbeez/config_shopvoting) are available first, then install and activate the display module.

A short customer comment about shipping or support can reassure someone considering another order. Keep the store review recognizable as feedback about the shopping experience.

## Insert the review into a template

<span id="usage"></span>For one campaign, edit its content template. For all emails with the same design, edit the main template. Put this placeholder in the HTML version.

```smarty
{$content.shoprating.html}
```

Use its text counterpart in the plain-text version.

```smarty
{$content.shoprating.txt}
```
