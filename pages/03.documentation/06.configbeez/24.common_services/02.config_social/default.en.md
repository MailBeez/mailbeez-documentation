---
title: Social Sharing
module_subtitle: "Check what the older product sharing links open"
slug: config_social
routes:
    default: /documentation/configbeez/config_social
    aliases:
        - /documentation/configbeez/social-sharing
date: 31-08-2011
published: true
publish_date: 31-08-2011
template: docs
visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: done
    category:
        - docs
    tag: [pro]
module:
    code: 'pro'
    category: [pro]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]   
    pro: 'pro'         
author:
    name: admin
metadata:
    author: admin
---

[doc-callout type="note" title="Earlier module settings"]
For settings in the current app, start with [System](/app-system). [Browse the legacy reference](/legacy).
[/doc-callout]

<span id="social-sharing-links-in-e"></span>Add a sharing link to each product in an older email template. The module built links for the networks configured at the time, including Facebook, Twitter and Google+. Test the destination you still use.

Open a sharing link for one recognizable product. The page or sharing dialog should identify that item so a recipient can tell what they are about to share.

Responsive templates generally omitted the sharing block. To add the small version, place the placeholder inside the existing product loop. It needs the current product to build the link.

```smarty
{section name=product loop=$products max=$max_products}
   {$products[product].social_tiny}
{/section}
```

![Sharing links below a product](Screen_social_email.en.jpg?resize=582)
