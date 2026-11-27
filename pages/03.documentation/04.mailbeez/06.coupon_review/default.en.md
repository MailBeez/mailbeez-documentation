---
title: 'Review Reward Coupon'
module_subtitle: "Reward a recorded product review with a personal coupon"
slug: coupon_review
routes:
    aliases:
        - /documentation/mailbeez/review-reward-coupon
date: 21-10-2011
published: true
publish_date: 21-10-2011
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
module:
    code: coupon_review
    category:
        - mailbeez
    compatiblity:
        - comp_cre
        - comp_zencart
        - comp_xtc
        - comp_xtcm2        
        - comp_gambio
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/10/coupon_32.png'
    pro: pro
    cert: 'true'
    price: '99 EUR'
    title_en: 'Review Reward Coupon'
    teaser_en: 'Say thanks to your customers for giving a review, and send them an automated email with a personalized coupon'
    title_de: 'Gutschein für Bewertungen'
    teaser_de: 'Bedanken Sie sich beim Kunden für das Abgeben von Produktbewertungen'
    author: MailBeez.com
author:
    name: admin
metadata:
    author: admin
---

[doc-callout type="note" title="Earlier MailBeez versions"]
To look up a generated coupon code in V5, open [Coupons](/content/coupons). [Browse the legacy reference](/legacy).
[/doc-callout]

Reward a recorded product review with a personal coupon. The review must first reach the shop so the module can count it towards the customer’s reward.

1. Set up [Ask for product reviews](/mailbeez/review_advanced) so the review can be recorded.
2. Choose how many reviews a customer must submit to qualify. Select the coupon offer and check its value.
3. Preview the reward email and check that the personal code appears with the offer.

[plugin:content-inject](/content_blocks/pro_coupon)

[plugin:content-inject](/content_blocks/pro_responsive_template)
