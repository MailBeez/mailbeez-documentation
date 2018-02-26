---
title: Content Engine
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
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]   
    pro: 'pro'

# added collection selector

author:
    name: admin
metadata:
    author: admin

---

Adds rulebased **personalised product recommendations** to any MailBeez Email.

When editing an email template just add the content element `Live Content` and configure the settings to add product recommendations.

![](Screen_config.en.png)

#### Catalog-based product recommendations 

**Featured Products**  
 Shows the products marked as "featured"

**New Products**  
 Shows the configured number of new product items, sorted by date

**Specials Products**  
 Shows the configured number of special product items, sorted by date


#### Product recommendations by purchased products
**XSell-Product by purchased products**  
 Shows xsell products based on previously purchased products

**Also purchased products by purchased products**  
 Shows also purchased products based on previously purchased products


#### Product recommendations by products in cart
**Products in Cart**  
 Shows the products in cart

**XSell-Products by products in cart**  
 Shows xsell products based on products in cart

**Also purchased products by products in cart**  
 Shows also purchased products based on products in cart

Depending on the select source you will find a number of configurations.


#### Unique products only
You can add multiple content elements of type `Live Content` - just active the option "**Exclude already shown products**" to make sure only unique products are shown, e.g. in case a product is both new and a specials products and you have added both `Live Content` of type "New Products" and "Specials Products"

#### FSK18- and Group-Check
The store systems **Modified-Shop** and **Gambio** allow to tag products with "FSK18" and "group" permissions. By default the content engine will respect these settings to make sure only appropriate products are recommended. If you like you can deactivate this setting.
On other store systems this configuration option is hidden.

