---
title: "Shopauskunft"
module_subtitle: "Ask for reviews on Shopauskunft"
slug: shopauskunft_advanced
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
        - "Ask for reviews on Shopauskunft"
module:
    plans_position: after_guide
    code: shopauskunft_advanced
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
    title_en: 'Shopauskunft.de Advanced'
    teaser_en: 'Advanced Features: Delay for international orders, multiple Order status, recognition of regular customers'
    title_de: 'Shopauskunft.de Profi'
    teaser_de: 'Profi-Features: Verzögerung für internationale Bestellungen, Stammkunden-Erkennung und mehr'
    author: MailBeez.com
author:
    name: admin
metadata:
    author: admin
---

A furniture shop sends a flat-packed oak table by freight. The buyer can review the delivery and packaging once the boxes have arrived. A Shopauskunft invitation ten days after dispatch may suit that order better than an email on the day it leaves the warehouse.

MailBeez builds the link for your Shopauskunft account. With a configured shop ID, it includes the order number, customer number and order email in the link. Use a test customer when checking the destination.

## Set up the flow

Open **Campaigns → Automations → MailBeez Flows → Ask for reviews on Shopauskunft**, then choose **Options → Configure**.

[doc-steps]
[doc-step]
**Point the invitation to your shop**

Enter the ID for the correct storefront under **Your Shopauskunft ID**. Check **Your Shopauskunft URL** if you use the older URL-based configuration. Open the review link from a sample invitation to confirm that it identifies your shop.
[/doc-step]
[doc-step]
**Allow for delivery**

Select your dispatch status under **Set Order Status** and set **Wait after the order status changes** to 10 for the table example. Keep **Maximum age of the status change** longer than the wait. If freight takes longer abroad, use **Additional delay for international deliveries** to add days for those orders.
[/doc-step]
[doc-step]
**Choose how often to ask**

Set **Minimum interval between invitations** so repeat buyers have time between invitations. Read the subject and opening line alongside the delivery notice. Ask about the experience the buyer has just had, such as arranging delivery or receiving all the boxes.
[/doc-step]
[/doc-steps]

Use [Schedule a review invitation](/cookbook/optimized-review-invite-flow) to check the timing against a test order.
