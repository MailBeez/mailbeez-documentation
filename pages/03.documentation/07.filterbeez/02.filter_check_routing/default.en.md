---
# http://learn.getgrav.org/content/headers
title: Routing
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
    tag: [pro]
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

With the ** Routing** module you control which review portal your customers are invited to. This allows you to distribute your reviews across multiple portals – for example, two thirds to Google Reviews and one third to Ausgezeichnet.org.

## How it works

The module uses a stable, pseudo‑random distribution:

1. A random number is calculated from the order number.
2. A modulo operator is applied to this value, e.g. `mod 3`.
3. Depending on the result (`0`, `1`, `2`, ...), the invitation is sent via a specific review module.

This way every order gets a reproducible, statistically even assignment to the review portals you define.

## Configuration example

A typical setup might look like this:

```text
order_id|mod:3|0|ausgezeichnet_advanced
order_id|mod:3|1,2|googlereviews_advanced
```

* For each random number `mod 3` is calculated.
* If the result is `0`, the invitation is sent via the `ausgezeichnet_advanced` module to Ausgezeichnet.org.
* If the result is `1` or `2`, the invitation is sent via the `googlereviews_advanced` module to Google Reviews.

In practice this means:

* **1/3** of your orders are routed to **Ausgezeichnet.org**.
* **2/3** of your orders are routed to **Google Reviews**.

By adjusting the modulo value and the result mappings you can precisely control what share of your invitations goes to which review portal.

## Benefits

* Even, statistically solid distribution of reviews across multiple portals
* Reproducible behaviour: the same order is always assigned to the same portal
* Powerful yet simple control of complex routing scenarios using just a few configuration lines

## Configuration in MailBeez v5

With **MailBeez v5** a **user‑friendly configuration UI** will be available for rating routing. Instead of editing configuration lines manually you will be able to:

* select and add review portals
* define the desired distribution percentage via the UI
* easily test the resulting routing rules

Until then you can already use the module productively by configuring the routing rules directly in the module configuration as shown above.
