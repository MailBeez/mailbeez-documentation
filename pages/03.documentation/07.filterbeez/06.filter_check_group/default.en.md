---
# http://learn.getgrav.org/content/headers
title: "Customer groups"
module_subtitle: "Choose which customer groups receive emails"
slug: filter_check_group
# menu: Customer Group Filter
date: 27-05-2011
published: true
publish_date: 27-05-2011
# unpublish_date: 27-05-2011
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
    tag: [pro, "Choose which customer groups receive emails"]
module:
    code: 'filter_check_group'
    category: [filterbeez]
    compatiblity: [comp_zencart,comp_xtc,comp_xtcm2,comp_gambio,comp_cre,comp_saas]
    pro: 'pro'
    cert: 'true'
    price: '99 EUR'
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

A roaster sells beans to households and to cafés on wholesale terms. A refill coupon for a 500 g bag makes sense for households. Use your shop’s customer groups to keep wholesale accounts out of this particular flow while leaving their other emails alone.

## Choose the groups for each flow

Open **System → Extensions → Add-ons → Filters** and select **Choose which customer groups receive emails**.

[doc-steps]

[doc-step]
**Assign groups to the module**

Open **Assign groups**, find the refill flow and select the retail group. Review the selection when you install another flow. With no allowed groups for a module, customers with a matching account are excluded from that module.
[/doc-step]

[doc-step]
**Check both sides of the rule**

Choose a retail and a wholesale account with otherwise similar orders. Only the retail account should pass this filter for the refill flow. Recipients without a matching customer account pass this filter, so use a separate audience rule if your offer also needs to exclude them.
[/doc-step]

[/doc-steps]

The shop must provide customer groups. Earlier versions list Zen Cart, CRE Loaded B2B, xt:Commerce, xtc-Modified and Gambio GX.
