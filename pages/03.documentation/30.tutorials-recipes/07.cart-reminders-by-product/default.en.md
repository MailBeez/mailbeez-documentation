---
title: "Write cart reminders for specific products"
slug: cart-reminders-by-product
template: docs
visible: true
published: true
taxonomy:
    category: [docs]
---

Someone who leaves a water filter in their cart may still be wondering whether it fits their espresso machine. A shopper choosing beans might want to know how dark the roast is. With two Custom Flows, you can write a different reminder for each audience.

Use this recipe in a self-hosted shop with the **Abandoned Carts** audience source and cart product rules available. The hosted version currently hides this source. For one reminder that shows each shopper their saved items, see [Cart reminder](/mailbeez/abandoned_cart_advanced).

## Build the two audiences

[doc-steps]
[doc-step]
**Select carts with the water filter**

Open [Contacts → Lists and Segments](/contacts/lists-segments), choose **New List** and select **Abandoned Carts**. Name the audience “Cart with water filter” and save it. Open **Configure segmentation** and choose the exact replacement filter under **Products in basket**. Save the rule.
[/doc-step]
[doc-step]
**Select carts with espresso beans**

Create another audience from **Abandoned Carts**. Under **Products in basket**, choose your house espresso. Under **Products NOT in basket**, choose the water filter. A cart containing both now qualifies only for the filter email.
[/doc-step]
[doc-step]
**Write one email for each audience**

Open **Campaigns → Automations → Custom Flows → New Automation** and choose the filter audience. In its email, show where to find the machine’s model number and link to the list of compatible models. Create a second automation for the espresso audience. Its email might ask “Wondering how dark our house espresso is?” and link to the tasting notes.
[/doc-step]
[/doc-steps]

## Check who would receive each email

Use saved carts belonging to test accounts. A filter-only cart should match the first audience, a beans-only cart the second, and a mixed cart only the first. A cart containing neither product should match neither audience. Also check whether the [prebuilt cart reminder](/mailbeez/abandoned_cart_advanced) would contact the same shoppers before activating these flows.

On modified shops, test the actual products you selected. The current cart rule can miss a product when the shop stores its ID as a plain multi-digit number. If an expected cart is missing from the audience, leave the flow inactive until you have checked the selection.
