---
# http://learn.getgrav.org/content/headers
title: "Create a coupon template"
slug: creating-template-coupons
original_v4: true
published: true
template: tutorial

visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: done
    category: [docs]
    tag: [pro]
---

<span id="personalized-coupons"></span>Define the discount once and let the campaign issue a separate code to each recipient. Your shop needs a supported coupon system. Some older osCommerce installations need an additional coupon module.

Decide what a recipient can buy with the coupon before choosing its discount. A fixed amount off selected products and a percentage off an entire order are different offers.

1. Open **Content → Coupons → Templates** and choose **New Template Coupon**.
2. Set the discount, validity and restrictions for the offer.
3. <span id="assigning-the-template-coupon"></span>In the campaign, select the template for the email step that should offer the discount. Check the generated message in simulation before sending to customers.
4. Open **Content → Coupons → Generated** to look up the issued codes. The template is the rule used to create them.

## Template codes in the earlier coupon system

<span id="creating-a-template-coupon"></span>Create a coupon in the shop’s own coupon administration. Enter `template_birthday` in the coupon code field. The earlier selector recognises the `template_` prefix in the code itself. A coupon name with that prefix is insufficient. Save the discount and select the template in the birthday module.

<span id="how-it-works"></span><span id="find-out-more"></span><span id="testing-coupon-generation"></span>When the module runs, it copies the template into a personal code with its own expiry date. The earlier module marks simulated codes with `[SIM]`. Those codes can still be redeemed, so check one in a test shop.

<span id="deleting-simulation-coupons"></span><span id="deleting-old-coupons"></span><span id="find-coupons"></span>The earlier coupon tools distinguish simulated codes from expired coupons. Check which set you have selected before cleaning it up. In the earlier dashboard coupon search, look for `template_` to find your templates again.
