---
title: "Cart reminder"
module_subtitle: "Remind shoppers about their cart"
slug: abandoned_cart_advanced
date: 20-02-2018
published: true
publish_date: 20-02-2018
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
        - coupon
        - "Remind shoppers about their cart"
module:
    plans_position: after_guide
    mc_ready: true
    code: abandoned_cart_advanced
    category:
        - mailbeez
    compatiblity:
        - comp_cre
        - comp_zencart
        - comp_xtc
        - comp_xtcm2
        - comp_gambio
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/10/icon_321.png'
    pro: pro
    cert: 'true'
    price: '179 EUR'
    title_en: 'Nopurchase Advanced'
    teaser_en: 'Contact customers who haven''t placed an order'
    title_de: ''
    teaser_de: ''
    author: MailBeez.com
author:
    name: admin
metadata:
    author: admin
---

A customer signs in to your coffee shop, adds espresso beans and a water filter to the cart, then leaves before checkout. Two days later, your reminder says “You still have items in your cart.” Below the message, the shopper sees the beans, the filter and a link back to your shop. Someone who left a grinder sees the same wording with the grinder in their email.

Each reminder step has one template for all eligible customers. You choose the wording, delay and optional coupon for that step. MailBeez fills in the products from each customer’s saved cart. The flow needs a customer account with a saved cart and an email address.

## Set up the flow

Open **Campaigns → Automations → MailBeez Flows → Remind shoppers about their cart**, then choose **Options → Configure**.

[doc-steps]
[doc-step]
**Choose which carts to contact**

Set **First email: waiting period** to two days, for example. That delay applies to every eligible cart. **Maximum age for starting the sequence** sets how old a cart can be when it first enters the sequence. If you want to reach only people who have bought from you before, enable **Check for previous Orders**.
[/doc-step]
[doc-step]
**Space the messages**

Choose one email under **Number of emails**, or add a follow-up. For example, set **Wait before email 2** to three days. The first email can simply remind the customer what they left behind. If you want to offer a discount in the second, choose **Coupon Template - Second Abandoned Cart Email** there. With a repeating sequence you can set the wait before the repeating step and the interval between repeats separately.
[/doc-step]
[doc-step]
**Try the route back to the shop**

Use a signed-in test account with a saved cart old enough to qualify. Compare the products in the email with the saved cart, then follow the link back to the shop. If you also run [Encourage a first order](/mailbeez/nopurchase_advanced), you can reserve that flow for accounts with an empty cart.
[/doc-step]
[/doc-steps]

Want the wording to depend on the product? See [Write different reminders for different cart contents](/tutorials-and-recipes/cart-reminders-by-product) for a Custom Flow example.

The [first-run guide](/quickstart/step-3-set-forget#check-the-first-run) explains how to check the recipient selection and the scheduled run.
