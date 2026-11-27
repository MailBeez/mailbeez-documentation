---
title: "Trusted Shops"
module_subtitle: "Ask for reviews on Trusted Shops"
slug: trustedshops_advanced
date: 04-06-2013
published: true
publish_date: 04-06-2013
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
        - "Ask for reviews on Trusted Shops"
module:
    plans_position: after_guide
    code: trustedshops_advanced
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
    title_en: 'Trustedshops Advanced'
    teaser_en: 'Advanced Features: Delay for international orders, multiple Order status, recognition of regular customers'
    title_de: 'Trustedshops Profi'
    teaser_de: 'Profi-Features: Verzögerung für internationale Bestellungen, Stammkunden-Erkennung und mehr'
    author: MailBeez.com
author:
    name: admin
metadata:
    author: admin
---

Imagine you operate a cookware shop and a separate trade storefront. A buyer orders a cast-iron pan from the cookware shop. When they open your Trusted Shops invitation, they should recognise the same store name they saw at checkout. The configured Trusted Shops ID determines which store they review.

## Set up the flow

Open **Campaigns → Automations → MailBeez Flows → Ask for reviews on Trusted Shops**, then choose **Options → Configure**.

<span id="schedule-trusted-shops-in"></span>
<span id="settings-to-check"></span>

[doc-steps]
[doc-step]
**Match the ID to the storefront**

Enter the cookware store’s ID under **Your Trustedshops Dealer ID**. Follow the review link in a sample email. Compare the name on the destination page with the order confirmation before using the invitation for real orders.
[/doc-step]
[doc-step]
**Start the wait from dispatch**

Select your shipped status under **Set Order Status**. If the pan usually arrives within the week, try seven days under **Wait after the order status changes**. Set **Maximum age of the status change** above that wait and use **Additional delay for international deliveries** if cross-border delivery needs more time.
[/doc-step]
[doc-step]
**Choose how soon to invite the buyer again**

Set **Minimum interval between invitations** with your repeat customers in mind. Someone who orders a lid the following week may already have received an invitation for the pan. A gap between invitations lets them review their experience without a second request straight away.
[/doc-step]
[/doc-steps]

Use [Schedule a review invitation](/cookbook/optimized-review-invite-flow) to check one order from dispatch to the review form.
