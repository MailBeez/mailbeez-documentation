---
title: "Custom Flows"
module_subtitle: "Build an automation from your own entry rules and email steps"
slug: custom-flows
template: docs
visible: true
published: true
taxonomy:
    category: [docs]
---

A customer orders beans every month. Six months after buying an espresso machine, they may also need a water filter. A general winback reminder would miss this regular customer. With a Custom Flow you can look for people who bought that machine and still need the filter. Someone who bought beans yesterday can qualify.

## Choose the audience

Start in [Contacts → Lists and Segments](/contacts/lists-segments). Choose **New List** and build an audience of subscribed customers that you can use for an automation. For the filter reminder, select the machine as the purchased product and exclude buyers of its matching filter. Include the current order statuses that count as a purchase in your shop. Set the age of the last matching machine purchase to around six months.

Before you write the email, check two customers. A machine owner who recently ordered beans should still appear. Another who already bought the filter in a qualifying order should drop out.

## Prepare the email

Open **Campaigns → Automations → Custom Flows → New Automation** and select your saved audience. If your audience offers **Set up with MAIA**, you can start there and follow the prompts to a draft. Write a subject the buyer will recognise, such as “Which water filter fits your espresso machine?” Link directly to the compatible filter.

Review the audience, email and timing before activation. Check whether the same buyers already get a maintenance email about that filter. If they do, add the link to that email so one message covers both needs.

## Examples to try

For a refill or a spare part, start with what the customer bought. For a reminder about an unfinished order, use **Abandoned Carts** and select the product still in the cart.

[doc-grid columns="2"]
[doc-link-card href="/tutorials-and-recipes/repeat-purchase-recipes#coffee-refills" title="Coffee refills" description="Remind buyers when their usual bag might be running low." new-tab="false" /]
[doc-link-card href="/tutorials-and-recipes/repeat-purchase-recipes#replacement-filters" title="Replacement filters" description="Reach owners of one machine model around its filter change date." new-tab="false" /]
[doc-link-card href="/tutorials-and-recipes/repeat-purchase-recipes#compatible-accessories" title="Compatible accessories" description="Offer a scale to pour-over buyers who haven’t bought one." new-tab="false" /]
[doc-link-card href="/tutorials-and-recipes/post-purchase-emails#first-brew-course" title="First-brew email course" description="Help new owners brew their first cup, then adjust the grind." new-tab="false" /]
[doc-link-card href="/tutorials-and-recipes/post-purchase-emails#grinder-care" title="Grinder care" description="Send cleaning instructions when the owner is likely to need them." new-tab="false" /]
[doc-link-card href="/tutorials-and-recipes/cart-reminders-by-product" title="Cart reminders by product" description="Send a filter compatibility guide or coffee tasting notes based on what is still in the cart." new-tab="false" /]
[/doc-grid]

For an email everyone should get on the same date, such as the launch of a seasonal roast, [plan a newsletter](/tutorials-and-recipes/plan-a-newsletter).
