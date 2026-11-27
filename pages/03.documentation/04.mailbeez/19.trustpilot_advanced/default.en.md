---
title: "Trustpilot"
module_subtitle: "Ask for reviews on Trustpilot"
slug: trustpilot_advanced
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
        - "Ask for reviews on Trustpilot"
module:
    plans_position: after_guide
    code: trustpilot_advanced
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
    title_en: 'Trustpilot Advanced'
    teaser_en: 'Advanced Features: Delay for international orders, multiple Order status, recognition of regular customers'
    title_de: 'Trustpilot Profi'
    teaser_de: 'Profi-Features: Verzögerung für internationale Bestellungen, Stammkunden-Erkennung und mehr'
    author: MailBeez.com
author:
    name: admin
metadata:
    author: admin
---

Your coffee subscription shop wants to ask how the first delivery went. With Trustpilot’s Automatic Feedback Service, two emails are involved. MailBeez sends the trigger to Trustpilot. Trustpilot then sends the invitation the buyer sees. That distinction matters when choosing the send date or looking for a missing invitation.

## Set up the flow

Open **Campaigns → Automations → MailBeez Flows → Ask for reviews on Trustpilot**, then choose **Options → Configure**.

<span id="choose-when-mailbeez-noti"></span>
<span id="settings-to-check"></span>

[doc-steps]
[doc-step]
**Connect the invitation service**

Copy the Automatic Feedback Service address from your Trustpilot account into **Your Trustpilot Email Address**. Use the address assigned to the store you want reviewed. The service uses the customer and order details in the trigger to prepare the invitation.
[/doc-step]
[doc-step]
**Add up both waits**

Choose the dispatch status under **Set Order Status**. If **Wait after the order status changes** is three days and your Trustpilot account waits two more, the invitation is due about five days after dispatch. Allow for the next scheduled run. Keep **Maximum age of the status change** above the MailBeez wait and add extra days for international delivery where needed.
[/doc-step]
[doc-step]
**Give frequent buyers a break**

Set **Minimum interval between invitations** for the subscription deliveries. A fresh shipment every month needn’t mean another invitation every month. Check the invitation text and schedule in the Trustpilot account that receives the trigger.
[/doc-step]
[/doc-steps]

If the buyer asks about a missing invitation, [look up the trigger in MailBeez](/sending-status) first. Once it has gone to the service address, check the invitation’s status in Trustpilot.
