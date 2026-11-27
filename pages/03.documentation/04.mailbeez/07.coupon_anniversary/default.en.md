---
title: "Customer anniversary"
module_subtitle: "Celebrate customer anniversaries"
slug: coupon_anniversary
date: 26-05-2021
published: true
publish_date: 26-05-2021
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
        - "Celebrate customer anniversaries"
module:
    plans_position: after_guide
    mc_ready: true
    code: coupon_anniversary
    category:
        - mailbeez
    compatiblity:
        - comp_cre
        - comp_zencart
        - comp_xtc
        - comp_xtcm2        
        - comp_gambio
        - comp_saas
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/10/coupon_32.png'
    pro: pro
    cert: 'true'
    price: '99 EUR'
    title_en: 'anniversary Coupon'
    teaser_en: ''
    title_de: 'Gutschein zum Jahrestag'
    teaser_de: ''
    author: MailBeez.com
author:
    name: admin
metadata:
    author: admin
---

A customer opened an account at your tea shop on 12 June last year. On 12 June this year you could thank them for a year with the shop and offer a discount on their next tin. Their registration date gives you an occasion to write even if their orders are months apart.

The anniversary comes from the customer account. MailBeez checks each year’s greeting separately. An account created this June won’t receive a first-anniversary email this June.

## Set up the flow

Open **Campaigns → Automations → MailBeez Flows → Celebrate customer anniversaries**, then choose **Options → Configure**.

[doc-steps]
[doc-step]
**Choose the day for the greeting**

Use 0 under **Send before the registration anniversary** for the anniversary itself. Use 3 if the greeting can arrive up to three days early. **Allow belated greetings** lets a later scheduled run pick up a missed anniversary. Choose a window that still makes sense for your wording.
[/doc-step]
[doc-step]
**Prepare a gift the customer can use**

You need coupon support in the shop. Under **Coupon Template**, choose the template for the offer. Set **Coupon validity** to 14 for a two-week gift. The two weeks start when the email goes out. Mention any minimum spend or other restriction from the template.
[/doc-step]
[doc-step]
**Check the year, code and expiry**

Use an account whose registration anniversary falls inside your sending window. Compare the anniversary in the greeting with the registration date, then check the issued code under [Coupons](/content/coupons).
[/doc-step]
[/doc-steps]

If you allow a late greeting, “Thank you for a year with us” works even when the sending day falls just after the anniversary.
