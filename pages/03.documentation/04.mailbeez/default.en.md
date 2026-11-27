---
# http://learn.getgrav.org/content/headers
title: "Automations"
slug: mailbeez
# menu: MailBeez
date: 21-05-2010
published: true
publish_date: 21-05-2010
# unpublish_date: 21-05-2010
template: docs
# theme: false
visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: done
    category: [docs]
    tag: []
# added collection selector

author:
    name: admin
metadata:
    author: admin
#      description: Your page description goes here
#      keywords: HTML, CSS, XML, JavaScript
#      robots: noindex, nofollow
#      og:
#          title: The Rock
#          type: video.movie
#          url: http://www.imdb.com/title/tt0117500/
#          image: http://ia.media-imdb.com/images/rock.jpg
#  cache_enable: false
#  last_modified: true
---

## Guides

Under **Campaigns → Automations**, choose a flow based on what prompts the email. A coffee shop might send two different kinds of reminders.

- Use [MailBeez Flows](#mailbeez-flows) to invite customers back when some time has passed since their last order. In **Win back inactive customers**, you choose how long to wait and what the email says.
- Use [Custom Flows](/mailbeez/custom-flows) to reach buyers of a particular coffee machine when its water filter is due for replacement six months later. Choose an audience for that machine.

To announce a new roast on a particular date, use a [newsletter](/mailbeez/newsletter).

## Custom Flows

You can also use **Custom Flows** to tailor a cart reminder to the products in the cart. The [cart reminder tutorial](/tutorials-and-recipes/cart-reminders-by-product) walks you through choosing the audience.

[doc-grid columns="2"]
[doc-link-card href="/mailbeez/custom-flows" title="Custom Flows" new-tab="false" /]
[/doc-grid]

## MailBeez Flows

The flows you see in your shop depend on the modules you have installed.

### Conversion

Help customers place their first order, return to a cart or redeem a coupon before it expires.

[doc-grid columns="2"]
[doc-link-card href="/mailbeez/nopurchase_advanced" title="First order" new-tab="false" /]
[doc-link-card href="/mailbeez/abandoned_cart_advanced" title="Cart reminder" new-tab="false" /]
[doc-link-card href="/mailbeez/coupon_expire" title="Coupon expiry" new-tab="false" /]
[/doc-grid]

### Lifecycle

Celebrate a birthday or the anniversary of a customer’s registration with your shop.

[doc-grid columns="2"]
[doc-link-card href="/mailbeez/coupon_birthday" title="Birthday wishes" new-tab="false" /]
[doc-link-card href="/mailbeez/coupon_anniversary" title="Customer anniversary" new-tab="false" /]
[/doc-grid]

### Notification

Keep buyers up to date on an order or remind them about a payment.

[doc-grid columns="2"]
[doc-link-card href="/mailbeez/payment_inadvance_dunning" title="Prepayment reminder" new-tab="false" /]
[doc-link-card href="/mailbeez/notification_order_status" title="Order status" new-tab="false" /]
[doc-link-card href="/mailbeez/notification_backorder" title="Backorder updates" new-tab="false" /]
[doc-link-card href="/mailbeez/payment_invoice_dunning" title="Unpaid invoices" new-tab="false" /]
[/doc-grid]

### Onboarding

Welcome customers when they create an account.

[doc-grid columns="2"]
[doc-link-card href="/mailbeez/create_account" title="Welcome email" new-tab="false" /]
[/doc-grid]

### Retention

Prompt a repeat order or invite customers back after a break.

[doc-grid columns="2"]
[doc-link-card href="/mailbeez/winback_advanced" title="Win back customers" new-tab="false" /]
[doc-link-card href="/mailbeez/reorder_advanced" title="Reorder reminder" new-tab="false" /]
[/doc-grid]

### Review Feedback

Invite buyers to review a product or their shopping experience in your store.

[doc-grid columns="2"]
[doc-link-card href="/mailbeez/review_advanced" title="Product reviews" new-tab="false" /]
[doc-link-card href="/mailbeez/shoprating_advanced" title="Store reviews" new-tab="false" /]
[/doc-grid]

#### Review services

[doc-grid columns="2"]
[doc-link-card href="/mailbeez/ausgezeichnet_advanced" title="AUSGEZEICHNET.org" new-tab="false" /]
[doc-link-card href="/mailbeez/googlereviews_advanced" title="Google reviews" new-tab="false" /]
[doc-link-card href="/mailbeez/idealo_advanced" title="idealo reviews" new-tab="false" /]
[doc-link-card href="/mailbeez/shopauskunft_advanced" title="Shopauskunft" new-tab="false" /]
[doc-link-card href="/mailbeez/shopvote_advanced" title="SHOPVOTE" new-tab="false" /]
[doc-link-card href="/mailbeez/trustedshops_advanced" title="Trusted Shops" new-tab="false" /]
[doc-link-card href="/mailbeez/trustpilot_advanced" title="Trustpilot" new-tab="false" /]
[/doc-grid]

## Set up an automation

1. Open **Campaigns → Automations → MailBeez Flows** and choose the installed flow for the event. If you need another flow, use **Add Automation** to see the available modules.
2. Check who qualifies, which event starts the flow and how long it waits before each email. For a multi-step flow, check each step.
3. Review the email content and test it before enabling the flow for customers.

## Related guide

[doc-grid columns="2"]
[doc-link-card href="/cookbook/optimized-review-invite-flow" title="Schedule a review invitation" new-tab="false" /]
[/doc-grid]
