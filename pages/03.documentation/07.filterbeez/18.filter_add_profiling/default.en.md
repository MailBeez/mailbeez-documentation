---
# http://learn.getgrav.org/content/headers
title: Add Profiling Data 
module_subtitle: "Make profiling data available in email templates"
slug: filterbeez_add_profiling
date: 11-08-2011
published: true
publish_date: 11-08-2011
# unpublish_date: 11-08-2011
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
    code: 'filterbeez_add_content_suite'
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

[doc-callout type="note" title="Earlier filter"]
For the filters you can configure in V5, open [Add-ons](/extensions/addons). [Browse the legacy reference](/legacy).
[/doc-callout]

Use the development version of [Profiling Engine](/configbeez/common_services/config_profiling_engine) to read assigned customer and order tags in an older Smarty template. Read `$data.profiles.order.profiles` or `$data.profiles.customer.profiles` for the comma-separated IDs. Each matching ID also has an entry in its parent array.

Look at one known order and its customer separately. A tag assigned to the order may explain that purchase without describing the customer’s other orders.

For example, use the following inside the module template to show content for order tag `6`. Use `$data.profiles.customer.42` for customer tag `42`.

```smarty
{if is_array($data.profiles.order.6)}
    See accessories for your order.
{/if}
```
