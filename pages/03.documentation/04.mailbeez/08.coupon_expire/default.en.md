---
title: "Coupon expiry"
module_subtitle: "Remind shoppers to use their coupon"
slug: coupon_expire
routes:
    aliases:
        - /documentation/mailbeez/coupon-expiry-reminder
date: 03-09-2010
published: true
publish_date: 03-09-2010
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
    tag:
        - pro
        - coupon
        - "Remind shoppers to use their coupon"
module:
    plans_position: after_guide
    code: coupon_expire
    category:
        - mailbeez
    compatiblity:
        - comp_cre
        - comp_zencart
        - comp_xtc
        - comp_xtcm2        
        - comp_gambio
        - comp_saas
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/10/coupon_32.png'
    pro: pro
    cert: 'true'
    price: '79 EUR'
    title_en: 'Coupon Expiry Reminder'
    teaser_en: ''
    title_de: 'Gutschein-Ablauf Erinnerung'
    teaser_de: ''
    author: MailBeez.com
author:
    name: admin
metadata:
    author: admin
---

A buyer received a voucher for their next order of coffee beans. It expires next week, and the code is buried in an old email. A reminder can put the original code, expiry date and reorder link together so they can use the offer in time.

MailBeez looks for issued coupons with time left to redeem them. It checks the permitted uses for the code and recipient. Sending a reminder leaves the original discount and expiry in place.

## Set up the flow

Open **Campaigns → Automations → MailBeez Flows → Remind shoppers to use their coupon**, then choose **Options → Configure**.

[doc-steps]
[doc-step]
**Choose how close to expiry to write**

For a reminder about a week ahead, enter 5 under **Minimum remaining validity** and 8 under **Maximum remaining validity**. The lower limit is included and the upper limit is excluded. This gives the scheduled run days five, six and seven before expiry to pick up eligible coupons.
[/doc-step]
[doc-step]
**Include the coupon terms in the reminder**

If the coupon is valid only on coffee beans, enter “Valid on coffee beans only” in the **Description** field of the [coupon template](/configbeez/common_services/config_coupon_engine). Each coupon generated from that template carries this text.

Add `[[$coupon_description]]` next to the code and expiry date in the reminder email. The shopper will see the terms for their own coupon there.
[/doc-step]
[doc-step]
**Preview the reminder**

Under **Coupon Template for preview**, select the coffee bean template. Check that the terms appear next to the code. When MailBeez sends the reminder, it uses the shopper’s expiring coupon.
[/doc-step]
[/doc-steps]
