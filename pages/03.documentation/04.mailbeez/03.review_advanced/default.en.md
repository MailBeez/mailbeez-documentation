---
title: "Product reviews"
module_subtitle: "Ask for product reviews"
slug: review_advanced
date: 21-06-2011
published: true
publish_date: 21-06-2011
template: docs
visible: true
routes:
    aliases:
        - /documentation/mailbeez/review_reminder
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
        - "Ask for product reviews"
module:
    plans_position: after_guide
    mc_ready: true
    code: review_advanced
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
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/08/star_plus.png'
    pro: pro
    cert: 'true'
    price: '109 EUR'
    title_en: 'Review Advanced - with Auto-login'
    teaser_en: 'boost you reviews - with autologin and multiple reminders'
    title_de: 'Produktbewertungen Profi'
    teaser_de: 'Optimiere die Bitte um Produktbewertung - mehrstufig mit Autologin'
    author: MailBeez.com
author:
    name: admin
metadata:
    author: admin
---

A customer buys a hand grinder from your coffee shop. On delivery day they can tell you whether the box arrived safely. After a week of making espresso, they can tell the next buyer how easy it is to adjust the grind. Use this flow to invite them to review the grinder on its product page.

Each email step uses the same wording for every product. MailBeez adds review links for eligible items from the buyer’s order. If someone ordered a grinder and beans and has already reviewed the beans, their invitation lists just the grinder.

## Set up the flow

Open **Campaigns → Automations → MailBeez Flows → Ask for product reviews**, then choose **Options → Configure**.

<span id="time-the-invitation-and-r"></span>
<span id="settings-to-check"></span>

[doc-steps]
[doc-step]
**Give buyers time to try the product**

Choose your shipped status under **Order Status Trigger**. Set **Wait after the order status changes** to a delay that allows for delivery and time to try the products, for example 10 days. The delay applies to all qualifying orders. Set **Maximum age of the status change** above that wait to limit how far back MailBeez looks for eligible orders.
[/doc-step]
[doc-step]
**Choose the invitation and reminders**

Use a request that works for anything in the order, such as “Help other shoppers choose. Review an item from your order.”

Set **Number of emails** to one for a single invitation. If you want to remind buyers, **Wait before email 2** counts from the first email and **Wait before email 3** from the second.
[/doc-step]
[doc-step]
**Check where the buyer lands**

Open a product link in a test invitation and check the item and review form. **Open the rating form without another login** controls whether the buyer has to sign in again. Use an order with two products to see how the email handles the selection.
[/doc-step]
[/doc-steps]

To follow the invitation from a shipped order to its review form, use [Schedule a review invitation](/cookbook/optimized-review-invite-flow). If a buyer is waiting for an email, [check the scheduled run](/quickstart/step-3-set-forget) and [look up the send](/sending-status).
