---
title: "Win back customers"
module_subtitle: "Win back inactive customers"
slug: winback_advanced
routes:
    aliases:
        - /documentation/mailbeez/coupon_winback
        - /documentation/mailbeez/coupon_powerpack
        - /documentation/mailbeez/coupon-send-coupon-campaign
date: 09-08-2011
published: true
publish_date: 09-08-2011
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
        - "winback"
        - "inactive customers"
        - pro
        - coupon
        - "Win back inactive customers"
module:
    plans_position: after_guide
    code: winback_advanced
    category:
        - mailbeez
    compatiblity:
        - comp_cre
        - comp_zencart
        - comp_xtc
        - comp_xtcm2
        - comp_gambio
        - comp_saas
    mc_ready: true        
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/09/icon_32.png'
    pro: pro
    cert: 'true'
    price: '179 EUR'
    title_en: 'Winback Advanced'
    teaser_en: 'the ultimate winback machine'
    title_de: 'Kundenrückgewinnung Profi'
    teaser_de: 'Das Profi-Modul zur aktiven Kundenrückgewinnung - mehrstufig mit Gutscheinen'
    author: MailBeez.com
author:
    name: admin
metadata:
    author: admin
---

<span id="example-coffee-reorders"></span>

Imagine you run an online coffee shop. A regular customer usually orders a bag of beans every two months. This time, three months go by. A short email asking “Running low on coffee?” gives them an easy way back to their favourite beans. If they order again, that’s the end of the reminder. If they don’t, you might send a second email two weeks later, perhaps with a coupon.

**Win back inactive customers** is a ready-made MailBeez Flow for this kind of gap between orders. You can send one, two or three emails, or keep in touch with a repeating reminder. You decide how long to wait between emails. Everyone who reaches a particular step receives the message you prepared for it.

<span id="who-qualifies-for-the-fir"></span>

## How far back should the first run look?

Suppose you want to wait 90 days after a customer’s latest order reached your shipped status. When you switch the flow on, some customers have already been waiting longer. A 120-day lookback picks up about a month of overdue reminders on that first run. To reach fewer customers at launch, use 100 days instead. That picks up about ten days of overdue reminders.

From then on, the window moves forward with each run. As customers reach 90 days, they can receive their first email. MailBeez checks its sending history, so tomorrow’s run won’t send the first email again for the same order.

## Set up the flow

Open **Campaigns → Automations → MailBeez Flows → Win back inactive customers**, then choose **Options → Configure**.

[doc-steps]
[doc-step]
**Choose the orders and timing**

Under **Target Order Status**, choose the status your shop uses when it ships an order. You can select more than one. For the coffee example, set **Target Days Since Last Purchase** to 90 and **Target Days to Look Back** to 120.
[/doc-step]
[doc-step]
**Choose how many emails to send**

Under **Workflow - Number of Winback Emails (1-4+)**, choose **1 Step**, **2 Steps**, **3 Steps** or **Loop**. For the coffee shop, choose **2 Steps** and set **Second Winback Email Delay** to 14 days. The two weeks start when the first email is sent. If the customer orders again, the remaining reminders for the earlier order stop.

For **3 Steps** or **Loop**, set **Third Winback Email Delay** to the number of days to wait after email two. With **Loop**, the customer receives the first three emails and then a recurring reminder. **Winback Email Loop Delay and Period** sets both the wait after email three and the interval between repeats.
[/doc-step]
[doc-step]
**Write the emails and choose an offer**

For the first email, link straight to your beans. If you want to offer a coupon in the second, choose a template under **Coupon Template - Second Winback Email** and set how long the coupon is valid.

To show different products in the same email, add **Live Content** in the editor. If your shop offers a source based on past purchases, you can use it to recommend beans each customer might like. MailBeez selects the products for that recipient at send time.
[/doc-step]
[/doc-steps]

<span id="check-the-first-run"></span>

Before activation, [check the first run](/quickstart/step-3-set-forget#check-the-first-run) or [try Winback with two test orders](/tutorials-and-recipes/test-winback). If you also send cart reminders, **Check For Empty Customer Basket** lets you limit Winback to customers with an empty cart. If you accept guest orders, test the follow-up separately. It needs a matching customer account.

## When a Custom Flow fits better

A customer who bought beans last week might still need a new water filter for a machine they bought six months ago. For that reminder, the date of the **machine purchase** matters. The [Custom Flows guide](/mailbeez/custom-flows) shows how to reach buyers of a particular product, with recipes for replacement parts, refills and emails that teach customers how to use their purchase.
