---
title: Content Engine
module_subtitle: "Insert product recommendations using a Live Content block"
slug: config_content_engine
routes:
    default: /documentation/configbeez/config_content_engine
        
published: true
template: docs
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
    code: 'pro'
    category: [pro]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio,comp_saas]   
    pro: 'pro'

# added collection selector

author:
    name: admin
metadata:
    author: admin

---

[doc-callout type="note" title="Earlier module settings"]
For settings in the current app, start with [System](/app-system). [Browse the legacy reference](/legacy).
[/doc-callout]

Add a `Live Content` block when a campaign should recommend products. Choose a source that matches the email. A cart reminder can show products in the cart, while a reorder email can suggest items bought with the customer’s previous purchase.

Match the recommendation to the reason for the email. A reminder about an unfinished purchase should still make sense when the customer reads the product list below it.

![Product recommendation source settings](Screen_config.en.png)

- <span id="catalog-based-product-rec"></span>**Catalog**<br>
  Choose featured products, new products sorted by date, or specials.
- <span id="product-recommendations-b"></span>**Past purchases**<br>
  Show cross-sell or frequently bought-together items based on what the customer purchased.
- <span id="product-recommendations-b-1"></span>**Cart**<br>
  Show the cart contents, cross-sell items or products frequently bought with items in the cart.

For order-based sources, choose which order statuses and how much order history to consider. A shorter window gives recent seasonal purchases more influence. On Zen Cart, cross-sell sources require [Cross Sell Advanced](https://www.zen-cart.com/downloads.php?do=file&id=400).

<span id="unique-products-only"></span><span id="fsk18-and-group-check"></span>If you add several blocks, enable **Exclude already shown products** to prevent a product appearing twice. Modified-Shop and Gambio respect FSK18 and customer-group restrictions by default. Check these before changing the optional restriction setting. Other platforms do not show it.
