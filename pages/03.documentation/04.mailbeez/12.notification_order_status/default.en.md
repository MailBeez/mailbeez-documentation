---
title: "Order status"
module_subtitle: "Send order status updates"
slug: notification_order_status
date: 01-03-2013
published: true
publish_date: 01-03-2013
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
        - "Send order status updates"
module:
    plans_position: after_guide
    code: notification_order_status
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
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2013/03/icon_32.png'
    pro: pro
    cert: 'true'
    price: '49 EUR'
    title_en: 'Notification: Order Status Update'
    teaser_en: 'Notify your customers about an specific order status update, e.g. to send a delivery tracking link'
    title_de: 'Benachrichtigung: Bestell-Status Änderung'
    teaser_de: 'Benachrichtigen Sie Ihre Kunden bei speziellen Bestell-Status Änderungen, z.B. um einen Link zur Paket-Verfolgung zu schicken'
    author: MailBeez.com
author:
    name: admin
metadata:
    author: admin
---

A repair shop has finished servicing a customer’s espresso machine. The customer needs to know when the workshop is open and whether to bring their collection receipt. When your team marks the order ready for pickup, MailBeez can send those details using the same message each time.

Use a status that has a clear meaning in your shop. A message promising collection today only works if the machine is actually on the pickup shelf.

## Set up the flow

Open **Campaigns → Automations → MailBeez Flows → Send order status updates**, then choose **Options → Configure**.

[doc-steps]
[doc-step]
**Select the status that triggers the email**

Under **Process Order Status**, select your ready-for-pickup status. Set **Wait after the order status changes** to the wait you need after the change. Choose a longer **Maximum age of the status change** so the order can still qualify on a later processing run.
[/doc-step]
[doc-step]
**Decide what happens to the order**

Under **Order status after sending**, choose whether the order keeps its current status after sending. If your team tracks “Pickup notice sent”, select the change option and choose it under **New order status**. Check whether your shop already sends a pickup email for the same status.
[/doc-step]
[doc-step]
**Check the handoff to the customer**

Put the collection address, opening hours and order reference in the message. Use a disposable order in a test shop. Read the email and reopen the order to see which status your colleagues will see.
[/doc-step]
[/doc-steps]

To send updates about a supplier’s changing delivery date, use [Keep buyers informed about backorders](/mailbeez/notification_backorder).
