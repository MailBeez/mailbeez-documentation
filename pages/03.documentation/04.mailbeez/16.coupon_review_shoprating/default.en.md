---
title: "Store review rewards"
module_subtitle: "Give customers a personal coupon after they review your store"
published: true
date: '08-02-2012 00:00'
publish_date: '08-02-2012 00:00'
metadata:
    author: admin
slug: coupon_review_shoprating
visible: true
template: docs
taxonomy:
    tag:
        - pro
        - coupon
        - "Shoprating Review Reward Coupon"
    category:
        - docs
summary:
    enabled: true
    format: short
    size: 128
module:
    code: coupon_review_shoprating
    category:
        - mailbeez
    compatiblity:
        - comp_cre
        - comp_zencart
        - comp_xtc
        - comp_xtcm2        
        - comp_gambio
    pro: pro
    author: MailBeez.com
author:
    name: admin
---

[doc-callout type="note" title="Earlier MailBeez versions"]
To look up a generated coupon code in V5, open [Coupons](/content/coupons). [Browse the legacy reference](/legacy).
[/doc-callout]

Thank a customer for reviewing your shop with a personal coupon. Use the recorded shop review to qualify the customer for the reward.

Look up the store review before investigating a missing reward. A product rating from the same buyer describes a different action and may belong to a different reward module.

1. Set up [Collect reviews in your store](/configbeez/config_shopvoting) so the review can be recorded.
2. Choose how many reviews a customer must submit to qualify. Select the coupon offer and check its value.
3. Preview the reward email and check that the personal code appears with the offer.

[plugin:content-inject](/content_blocks/pro_coupon)

[plugin:content-inject](/content_blocks/pro_responsive_template)
