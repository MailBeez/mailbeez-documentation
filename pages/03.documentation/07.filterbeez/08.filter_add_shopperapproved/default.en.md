---
# http://learn.getgrav.org/content/headers
title: "Reviews in emails"
module_subtitle: "Show Shopper Approved reviews in emails"
menu: "Reviews in emails"
slug: filter_add_shopperapproved
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
    tag: [pro, "Show Shopper Approved reviews in emails"]
module:
    code: 'config_shopperapproved_integration'
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

A customer buying fragile ceramics might appreciate hearing how well another order was packed. You can include a short selection of Shopper Approved reviews in the email. First [import reviews for your shop](/configbeez/integrations/config_shopperapproved_integration) so the template has comments to choose from.

## Choose which reviews the email can show

Open **System → Extensions → Add-ons → Customer data and content** and select **Show Shopper Approved reviews in emails**.

[doc-steps]

[doc-step]
**Select enough detail for the reader**

Set **Reviews per email** and **Minimum rating**. With **Minimum comment length (characters)** you can leave out one-word ratings when the email needs a comment buyers can actually read.
[/doc-step]

[doc-step]
**Check the selection in the message**

Enable **Randomize reviews** for a varying selection, or leave it off to show the latest qualifying reviews. Preview a template that includes the review block. If it is empty, check whether any imported comment satisfies both minimums.
[/doc-step]

[/doc-steps]
