---
title: "Shopauskunft rewards"
module_subtitle: "Reward a Shopauskunft review with a personal coupon"
published: true
date: '08-02-2012 00:00'
publish_date: '08-02-2012 00:00'
metadata:
    author: admin
slug: coupon_review_shopauskunft
visible: true
template: blog
taxonomy:
    tag:
        - pro
        - coupon
        - "Shopauskunft Review Reward Coupon"
    category:
        - docs
summary:
    enabled: true
    format: short
    size: 128
module:
    code: coupon_review_shopauskunft
    category:
        - mailbeez
    compatiblity:
        - comp_cre
        - comp_zencart
        - comp_xtc
        - comp_xtcm2 
        - comp_gambio
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2012/02/icon_641.png'
    pro: pro
    cert: 'true'
    price: '99 EUR'
    title_en: 'Shopauskunft Review Reward'
    teaser_en: 'Reward customers Shopauskunft Reviews with a discount voucher'
    title_de: 'Shopauskunft: Gutschein f&uuml;r Bewertungen'
    teaser_de: 'Bedanken Sie sich f&uuml;r Bewertungen auf Shopauskunft - mit einem Gutschein'
    author: MailBeez.com
author:
    name: admin
---

[doc-callout type="note" title="Earlier MailBeez versions"]
To look up a generated coupon code in V5, open [Coupons](/content/coupons). [Browse the legacy reference](/legacy).
[/doc-callout]

Reward a Shopauskunft review with a personal coupon once the review has reached your shop. Check the import before setting up the reward.

If a buyer can see their review on Shopauskunft but has no reward yet, check when the shop last received that review from the provider.

1. Set up [Import reviews from Shopauskunft](/configbeez/integrations/config_shopauskunft_integration) so the review can be recorded.
2. Choose how many reviews a customer must submit to qualify. Select the coupon offer and check its value.
3. Preview the reward email and check that the personal code appears with the offer.

[plugin:content-inject](/content_blocks/pro_coupon)

[plugin:content-inject](/content_blocks/pro_responsive_template)
