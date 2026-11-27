---
# http://learn.getgrav.org/content/headers
title: "Review distribution"
module_subtitle: "Split invitations across review services"
slug: filter_check_routing
routes:
    aliases:
    - /documentation/filterbeez/filter_check_routing
# menu: Rating Routing
date: 19-12-2025
published: true
publish_date: 19-12-2025
# unpublish_date: 26-09-2011
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
    tag: [pro, "Split invitations across review services"]
module:
   code: 'filter_check_routing'
   category: [filterbeez]
   compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio,comp_saas]
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

A cookware shop asks some buyers to review its service on Google and others on AUSGEZEICHNET.org. If both invitation flows qualify for the same order, the customer could hear from you twice. Routing rules let the two flows share those orders in proportions you choose.

## Decide what gets the same destination

Open **System → Extensions → Add-ons → Filters** and select **Split invitations across review services**.

If an active filter already contains invalid saved rules, it blocks sending until they are corrected. Check the rules first if unrelated flows stop after a change.

Choose **Edit rules**. Use the order number when each purchase should have a stable destination. Use the customer number when repeat orders from the same customer should stay with the same service. Rules apply to the invitation modules you name. Each module still checks its own order status and delay.

For a complete rule pair that sends about two thirds of eligible orders to Google, see [Split invitations between two review services](/cookbook/optimized-review-invite-flow#split-review-invitations).
