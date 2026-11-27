---
title: "Birthday wishes"
module_subtitle: "Send birthday wishes"
slug: coupon_birthday
date: 26-10-2010
published: true
publish_date: 26-10-2010
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
        - "Send birthday wishes"
module:
    plans_position: after_guide
    mc_ready: true
    code: coupon_birthday
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
    title_en: 'Birthday Coupon'
    teaser_en: ''
    title_de: 'Gutschein zum Geburtstag'
    teaser_de: ''
    author: MailBeez.com
author:
    name: admin
metadata:
    author: admin
---

Imagine you run a chocolate shop. A birthday greeting with a gift towards a box of truffles lets a regular customer choose their own treat. You can send it on the birthday or give them a few days to order in advance.

MailBeez uses the date of birth saved in the customer profile. A profile without a usable birthday can’t qualify by this rule. MailBeez records the greeting for the year so the next day’s run won’t send another one.

## Set up the flow

Open **Campaigns → Automations → MailBeez Flows → Send birthday wishes**, then choose **Options → Configure**.

[doc-steps]
[doc-step]
**Decide when the gift should arrive**

Set **Send before the birthday** to 0 for a greeting on the day or 3 for an early greeting. With **Allow belated greetings**, choose whether a missed run may still send birthday wishes afterwards.
[/doc-step]
[doc-step]
**Set the terms of the gift**

Your shop needs coupon support. Choose the chocolate offer under **Coupon Template** and set **Coupon validity**. Fourteen days means fourteen days from sending, even for an early greeting. Include the actual expiry date so the customer knows when to order.
[/doc-step]
[doc-step]
**Read the greeting with a birthday in mind**

Preview the email with a suitable test profile. If the wording says “Today is your birthday”, use a same-day window. For an early email, try “A little something for your birthday”. Check the code and its terms under [Coupons](/content/coupons).
[/doc-step]
[/doc-steps]

To celebrate the date a customer joined your shop, use [Celebrate customer anniversaries](/mailbeez/coupon_anniversary).
