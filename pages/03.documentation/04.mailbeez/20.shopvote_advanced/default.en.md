---
title: "SHOPVOTE"
module_subtitle: "Ask for reviews on SHOPVOTE"
slug: shopvote_advanced
date:  02-11-2015
published: true
publish_date: 02-11-2015
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
        - "Ask for reviews on SHOPVOTE"
module:
    plans_position: after_guide
    code: shopvote_advanced
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
        - comp_saas
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2013/06/top_64.png'
    pro: pro
    cert: 'true'
    price: '99 EUR'
    title_en: 'ShopVote.de Advanced'
    teaser_en: 'Advanced Features: Delay for international orders, multiple Order status, recognition of regular customers'
    title_de: 'ShopVote.de Profi'
    teaser_de: 'Profi-Features: Verzögerung für internationale Bestellungen, Stammkunden-Erkennung und mehr'
    author: MailBeez.com
author:
    name: admin
metadata:
    author: admin
---

A customer orders cat food from your shop every month. You’d like a SHOPVOTE review about delivery and service, but asking after every bag would soon wear out the invitation. This flow lets you wait for delivery and leave a gap before asking the same buyer again.

## Set up the flow

Open **Campaigns → Automations → MailBeez Flows → Ask for reviews on SHOPVOTE**, then choose **Options → Configure**.

<span id="space-out-shopvote-invita"></span>
<span id="settings-to-check"></span>

[doc-steps]
[doc-step]
**Use the shop’s review link**

Paste the SHOPVOTE review link for your store into **Your ShopVote URL**. Open a preview and follow the link. Check that a buyer can recognise your store on the page that opens.
[/doc-step]
[doc-step]
**Choose the first eligible day**

Under **Set Order Status**, choose the status that means the parcel has shipped. Set **Wait after the order status changes** to allow for delivery and **Maximum age of the status change** above that wait. If parcels take longer abroad, add those days under **Additional delay for international deliveries**.
[/doc-step]
[doc-step]
**Set a gap for regular customers**

Set **Minimum interval between invitations** to 90 days for the monthly cat-food order. Compare two otherwise eligible buyers. One received a SHOPVOTE invitation last month, the other has never received one. The second can qualify now. The first is still inside the 90-day interval.
[/doc-step]
[/doc-steps]

Check the planned run against a test order using [Schedule a review invitation](/cookbook/optimized-review-invite-flow).
