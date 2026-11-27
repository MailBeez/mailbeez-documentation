---
title: "Store reviews"
module_subtitle: "Ask for reviews on your store"
slug: shoprating_advanced
routes:
    aliases:
        - /documentation/mailbeez/shopbewertung-profi
date: 13-05-2014
published: true
publish_date: 13-05-2014
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
        - "Ask for reviews on your store"
module:
    plans_position: after_guide
    code: shoprating_advanced
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
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/10/icon_322.png'
    pro: pro
    cert: 'true'
    price: '99 EUR'
    title_en: 'Shoprating Advanced'
    teaser_en: 'The advanced module for the professional application of the "shopvoting" addon'
    title_de: 'Shopbewertung Profi'
    teaser_de: 'Das Profi-Modul für den ernsthaften Einsatz des Modules "Shopbewertung"'
    author: MailBeez.com
author:
    name: admin
metadata:
    author: admin
---

A buyer unpacks a set of wine glasses. All six survived the journey, and support answered their delivery question the same afternoon. That’s useful feedback for someone deciding whether to buy from your shop. This flow invites the buyer to leave a store review on your own site.

Set up [store reviews](/configbeez/config_shopvoting) first so there is a form to receive the feedback. For comments on the glasses themselves, use [Ask for product reviews](/mailbeez/review_advanced).

## Set up the flow

Open **Campaigns → Automations → MailBeez Flows → Ask for reviews on your store**, then choose **Options → Configure**.

[doc-steps]
[doc-step]
**Wait until the order has arrived**

Choose your shipped status under **Target Order Status**. Set **Wait after the order status changes** to allow for delivery. For example, if parcels usually arrive within three days, waiting a week gives the buyer time to unpack them.
[/doc-step]
[doc-step]
**Ask about the shopping experience**

Choose **Number of emails** and the delay for each reminder you use. One question such as “How did your glasses arrive?” gives the buyer a place to start. If you also ask for a product review, check how the two invitations will read in the same inbox.
[/doc-step]
[doc-step]
**Try the form as a buyer**

Open a test invitation and follow the review link on a phone. **Open the rating form without another login** determines whether the buyer has to sign in again. Check that the form belongs to your store and asks about the order experience.
[/doc-step]
[/doc-steps]

[Schedule a review invitation](/cookbook/optimized-review-invite-flow) shows how to follow an order from its status change to the review page.
