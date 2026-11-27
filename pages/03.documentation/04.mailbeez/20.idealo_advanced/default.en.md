---
title: "idealo reviews"
module_subtitle: "Ask for reviews on idealo"
slug: idealo_advanced
date: 15-04-2015
published: true
publish_date: 15-04-2015
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
        - "Ask for reviews on idealo"
module:
    plans_position: after_guide
    code: idealo_advanced
    category:
        - mailbeez
    compatiblity:
        - comp_osc
        - comp_cre
        - comp_digi
        - comp_zencart
        - comp_xtc
        - comp_xtcm2        
        - comp_gambio
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2013/06/top_64.png'
    pro: pro
    cert: 'true'
    price: '99 EUR'
    title_en: 'Idealo Advanced'
    teaser_en: 'Advanced Features: Delay for international orders, multiple Order status, recognition of regular customers'
    title_de: 'Idealo Profi'
    teaser_de: 'Profi-Features: Verzögerung für internationale Bestellungen, Stammkunden-Erkennung und mehr'
    author: MailBeez.com
author:
    name: admin
metadata:
    author: admin
---

A shopper finds a replacement vacuum filter on idealo and orders it from your store. Once the filter arrives, you can ask about their experience with you as a retailer. The invitation leads to the review form for your dealer ID. You decide whether the link carries information from the order.

## Set up the flow

Open **Campaigns → Automations → MailBeez Flows → Ask for reviews on idealo**, then choose **Options → Configure**.

<span id="choose-the-order-and-wait"></span>
<span id="settings-to-check"></span>

[doc-steps]
[doc-step]
**Choose the retailer and the data in the link**

Enter your **Idealo Dealer ID**. With **Pre-fill Data** enabled, MailBeez adds the order number and order email address to the idealo link. With it off, the link still selects the retailer. Use a test order when checking which details are passed.
[/doc-step]
[doc-step]
**Give the buyer time to receive the filter**

Choose your shipped status under **Target Order Status**. For an invitation a week after dispatch, set **Wait after the order status changes** to seven days. Keep **Maximum age of the status change** above seven so a later run can still pick up eligible orders.
[/doc-step]
[doc-step]
**Open the invitation as a buyer**

Follow the link from a test email. Check the retailer on the form and compare the prefilled details, if enabled, with your test order. Ask about the shopping experience, such as whether the parcel arrived as promised.
[/doc-step]
[/doc-steps]

To compare this invitation with one that asks about the product itself, see [Schedule a review invitation](/cookbook/optimized-review-invite-flow).
