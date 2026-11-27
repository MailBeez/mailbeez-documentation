---
title: "ReferralHoney coupons"
module_subtitle: "Reward customers who refer friends that place qualifying orders"
slug: coupon_referral_honey
date: 10-01-2012
published: true
publish_date: 10-01-2012
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
        - "Coupon Referral Honey"
module:
    mc_ready: true
    code: coupon_referral_honey
    category:
        - mailbeez
    compatiblity:
        - comp_cre
        - comp_zencart
        - comp_xtc
        - comp_xtcm2        
        - comp_gambio
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2012/01/icon_32.png'
    pro: pro
    cert: 'true'
    price: '299 EUR'
    title_en: 'MailBeez ReferralHoney'
    teaser_en: 'make every customer a markeeter'
    title_de: 'Neu-Kundenspiel "ReferralHoney"'
    teaser_de: 'Viraler Effekt durch Social Sharing bringt Neu-Kunden'
    author: MailBeez.com
author:
    name: admin
metadata:
    author: admin
---

[doc-callout type="note" title="Earlier MailBeez versions"]
To look up a generated coupon code in V5, open [Coupons](/content/coupons). [Browse the legacy reference](/legacy).
[/doc-callout]

Give a buyer a coupon to share, then reward the buyer when friends use it for qualifying orders. Use separate templates for the shared discount and the referrer’s reward.

Think of the offer as two promises. Tell the friend what they can redeem now and tell the original buyer which purchase will qualify them for their reward.

1. Set the order status that starts the invitation and the status that recognises a friend’s order. Set the processing cutoff later than the invitation delay.
2. Select a share-coupon template. Leave its usage limit open or allow enough uses for the group. The original customer consumes one use so only friends can redeem the shared offer.
3. Set the share-coupon expiry, the wait after expiry, the referral thresholds for each of the three reward levels, and a reward template for each level. Reward coupons have a separate expiry.
4. Preview the invitation and share page. For a custom page, copy the files in `mailhive/mailbeez/coupon_referral_honey/templates/` and remove the `default_` prefix on your copy. The module tries a language-specific custom template, then the generic custom template, then the language-specific and generic defaults.
