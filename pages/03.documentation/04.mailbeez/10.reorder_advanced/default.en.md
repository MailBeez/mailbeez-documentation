---
title: "Reorder reminder"
module_subtitle: "Remind customers to reorder"
slug: reorder_advanced
routes:
    aliases:
        - /documentation/mailbeez/coupon_reorder
        - /documentation/mailbeez/reorder-advanced-with-coupons
date: 15-08-2011
published: true
publish_date: 15-08-2011
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
        - "Remind customers to reorder"
module:
    plans_position: after_guide
    code: reorder_advanced
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
    price: '99 EUR'
    title_en: 'Reorder Advanced'
    teaser_en: 'Say thanks to your customers, and send them a reorder coupon towards their next purchase'
    title_de: 'Gutschein für die nächste Bestellung'
    teaser_de: 'Bedanken Sie sich beim Kunden für den Einkauf mit einem Gutschein für die nächste Bestellung'
    author: MailBeez.com
author:
    name: admin
metadata:
    author: admin
---

Imagine you sell dog food. Customers who buy a four-kilo bag often need another in about a month. An email 25 days after dispatch gives them time to order before the bag is empty. You can include a coupon and reserve it for customers who have already ordered from you several times.

This ready-made flow checks the customer’s latest order and its status. To remind only buyers of one particular bag size, use a [product-based Custom Flow](/tutorials-and-recipes/repeat-purchase-recipes#coffee-refills).

## Set up the flow

Open **Campaigns → Automations → MailBeez Flows → Remind customers to reorder**, then choose **Options → Configure**.

<span id="choose-when-an-order-qual"></span>
<span id="settings-to-check"></span>

[doc-steps]
[doc-step]
**Time the reminder**

Choose your shipped status under **Order Status Trigger** and enter 25 in **Wait after the order status changes**. Set **Maximum age of the status change** higher than the wait. If the customer has placed a newer order, the older one no longer qualifies as their latest order.
[/doc-step]
[doc-step]
**Choose who gets the offer**

Use **Order Status to Count** to specify which orders count towards **Number of Orders Before Sending a Reorder Coupon**. For example, choose completed orders and set the minimum to two if the coupon is a thank-you for repeat buyers. Under **Number of Times to Send a Reorder Coupon**, decide how often one customer can receive the offer.
[/doc-step]
[doc-step]
**Check the message against an order**

Choose the offer under **Coupon Template** and check the code and validity in a test email. Enable **Require an empty cart** if customers with food already in their cart receive a separate reminder.
[/doc-step]
[/doc-steps]

For the two-order offer, compare a customer with two completed orders and another with only one. If both latest orders are old enough, the minimum order count explains why only the first qualifies.
