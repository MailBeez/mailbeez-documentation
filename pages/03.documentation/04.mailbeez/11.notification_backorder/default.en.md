---
title: "Backorder updates"
module_subtitle: "Keep buyers informed about backorders"
slug: notification_backorder
date: 17-12-2013
published: true
publish_date: 17-12-2013
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
        - "Keep buyers informed about backorders"
module:
    plans_position: after_guide
    code: notification_backorder
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
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2013/03/icon_32.png'
    pro: pro
    cert: 'true'
    price: '139 Eur'
    title_en: 'Notification: Backorder'
    teaser_en: 'notify your customers about products in backorder'
    title_de: 'Benachrichtigung Bestell-Rückstand'
    teaser_de: 'Informieren Sie Ihre Kunden laufend über Produkte im Rückstand'
    author: MailBeez.com
author:
    name: admin
metadata:
    author: admin
---

A buyer orders a replacement valve for a coffee machine. Your supplier now expects the part in two weeks. A short update with the part name, expected date and your contact details can answer the buyer’s question before they have to ask.

This flow can send a first backorder notice, report a change in the expected availability date and send periodic updates while the order remains on backorder. The date in the message is only as reliable as the availability date on the product.

## Set up the flow

Open **Campaigns → Automations → MailBeez Flows → Keep buyers informed about backorders**, then choose **Options → Configure**.

[doc-steps]
[doc-step]
**Decide who marks a backorder**

Under **Notify orders with**, select the backorder status used for notifications. If your team assigns it by hand, leave **Check automatically** empty. For automatic checks, select the order statuses to inspect and choose **Set when backordered**. Include that status under **Notify orders with** too.
[/doc-step]
[doc-step]
**Choose when to send news**

For the valve, you might set **First notification after** to one day after the backorder status change and **Repeat every** to seven days. Use the first message to explain the delay. If the expected date changes, the update can give the buyer the revised date.
[/doc-step]
[doc-step]
**Check the information the buyer needs**

In a test shop, follow an order with a known availability date. Compare the item and date in the email with the product record. Read the message with no firm date as well. Give the buyer a way to reach you while they wait.
[/doc-step]
[/doc-steps]

If you only want to send a message when an order reaches a particular status, such as “Ready for pickup”, use [Send order status updates](/mailbeez/notification_order_status).
