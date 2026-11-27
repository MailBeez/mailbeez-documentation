---
# http://learn.getgrav.org/content/headers
title: MailChimp Integration
module_subtitle: "Check how the earlier integration synchronizes newsletter subscriptions"
slug: config_mailchimp
routes:
    default: /documentation/configbeez/config_mailchimp
    aliases:
        - /download/the-mailchimp-connector
        - /download/the-mailchimp-connector/oscommerce
        - /download/the-mailchimp-connector/zencart
S# menu: MailChimp Integration
date: 02-03-2012
published: true
publish_date: 02-03-2012
# unpublish_date: 02-03-2012
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
    tag: [pro]
module:
    code: 'config_mailchimp'
    category: [configbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2012/11/icon_64.png'
    pro: 'pro'
    cert: 'true'
    price: '300 EUR'
    title_en: 'MailChimp Integration'
    teaser_en: 'MailBeez unlocks, MailChimp delivers'
    title_de: 'MailChimp Integration'
    teaser_de: 'MailBeez verfasst, MailChimp liefert'
    author: 'MailBeez.com'
author:
    name: admin
metadata:
    author: admin
---

[doc-callout type="note" title="Earlier module settings"]
For settings in the current app, start with [System](/app-system). [Browse the legacy reference](/legacy).
[/doc-callout]

<span id="the-mailbeez-for-mailchim"></span>Use this reference for a shop already running the historical MailChimp connector. It depends on the legacy MailChimp API. Check the available connection in that installation before trying to synchronize a list.

When maintaining a historical list, compare one known subscriber on both sides during simulation. That gives you a concrete record to check before synchronizing a larger list.

<span id="advantages"></span>MailBeez prepared personalized content for supported modules. MailChimp delivered the mailing. The connector synchronized list changes in both directions and used an incremental sync for large lists, including those over 15,000 subscribers.

Use the setup wizard’s simulation to check the mapping first. The provider limited the number of personalization fields. For the delivery options in V5, see [Sending method](/configbeez/config_email_engine).

## Modules supported by this connector

- <span id="mailchimp-ready-modules"></span>[Ask for product reviews](/mailbeez/review_advanced)
- [Win back inactive customers](/mailbeez/winback_advanced)
- [Remind shoppers about their cart](/mailbeez/abandoned_cart_advanced)
- [Encourage a first order](/mailbeez/nopurchase_advanced)
- [Celebrate customer anniversaries](/mailbeez/coupon_anniversary)
- [Send birthday wishes](/mailbeez/coupon_birthday)
- [Coupon Referral Honey](/mailbeez/coupon_referral_honey)
