---
title: "Coupon engine"
module_subtitle: "Create individual coupon codes from a shared coupon template"
slug: config_coupon_engine
routes:
    default: /documentation/configbeez/config_coupon_engine
    aliases:
        - /documentation/configbeez/coupon-engine
date: 10-04-2012
published: true
publish_date: 10-04-2012
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
    tag: [pro,coupon]
module:
    code: 'pro'
    category: [pro]
    compatiblity: [comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio,comp_saas]   
    pro: 'pro'     
author:
    name: admin
metadata:
    author: admin
---

To give each recipient a separate code, start with a coupon template for the discount and restrictions. The campaign step controls how long its code can be used.

For a birthday offer, decide the discount in the template and the redemption period in the birthday flow. Then check one generated code against both choices.

Open **System → Configuration** and select **Coupon engine**.

Select a template supported by your shop’s coupon system and check the discount, restrictions and validity. Use **Content → Coupons → Generated** to look up an issued code.

## Describe coupon restrictions

Open the template under **Content → Coupons → Templates**. If your birthday offer applies only to coffee beans, select the eligible products and enter “Valid on coffee beans only” in **Description**. If your template has a description for each language, fill it in for every language you send in.

Each coupon generated from the template carries its description. To show those terms in a [coupon expiry reminder](/mailbeez/coupon_expire), add `[[$coupon_description]]` next to the coupon code in the email.

## Test a personalized coupon

Use a template such as `template_birthday` for the discount and restrictions. Set the validity for the campaign step, for example 14 days from sending. A simulation can create a real, redeemable code. Check its value and expiry with your test address. A shop with many existing codes may need a longer code length to avoid repeated attempts to generate a unique code.

## Identify an older osCommerce coupon system

Check the table constants defined by the installed add-on before selecting a coupon system.

| Addon | Characteristic table constants |
| --- | --- |
| CCGV | `TABLE_COUPONS`, `TABLE_COUPON_REDEEM_TRACK` |
| Discount Coupon Codes | `TABLE_DISCOUNT_COUPONS`, `TABLE_DISCOUNT_COUPONS_TO_ORDERS` |
| Discount Codes | `TABLE_DISCOUNT_CODES`, `TABLE_CUSTOMERS_TO_DISCOUNT_CODES` |

The historical **Discount Codes BS** fork omitted the constants. If your installation uses that fork and these definitions are missing, put the following in `/mailhive/common/local/dc.php`. Match the names to the actual tables in your shop.

```php
<?php
define('TABLE_DISCOUNT_CODES', 'discount_codes');
define('TABLE_CUSTOMERS_TO_DISCOUNT_CODES', 'customers_to_discount_codes');
define('FILENAME_DISCOUNT_CODES', 'discount_codes.php');
```
