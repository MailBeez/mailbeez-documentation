---
title: "First order"
module_subtitle: "Invite registered customers who haven’t ordered yet to make their first purchase"
slug: nopurchase_advanced
date: 07-10-2011
published: true
publish_date: 07-10-2011
template: docs
visible: true
routes:
    aliases:
        - /dokumentation/mailbeez/nopurchace_advanced
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
        - "Encourage a first order"
module:
    plans_position: after_guide
    mc_ready: true
    code: nopurchase_advanced
    category:
        - mailbeez
    compatiblity:
        - comp_cre
        - comp_zencart
        - comp_xtc
        - comp_xtcm2        
        - comp_gambio
        - comp_saas
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/10/icon_321.png'
    pro: pro
    cert: 'true'
    price: '179 EUR'
    title_en: 'Nopurchase Advanced'
    teaser_en: 'Contact customers who haven''t placed an order'
    title_de: 'Kunden ohne Kauf - Profi'
    teaser_de: 'Kontaktiere Kunden, welche noch keine Bestellung getätigt haben.'
    author: MailBeez.com
author:
    name: admin
metadata:
    author: admin
---

Someone opens an account in your wine shop but leaves before choosing a bottle. A few days later, a short guide to your tasting cases could help them place their first order. You could follow up with a first-order coupon if they still haven’t bought anything.

This flow starts from the registration date and checks whether the customer has placed an order. A shopper who bought a case and hasn’t returned belongs in [Win back inactive customers](/mailbeez/winback_advanced).

## Set up the flow

Open **Campaigns → Automations → MailBeez Flows → Encourage a first order**, then choose **Options → Configure**.

[doc-steps]
[doc-step]
**Choose when to welcome a first order**

Set **First email: waiting period** to three days for the tasting guide. Use **Maximum age for starting the sequence** to decide how far back the first run should look for registrations. For example, with 14 days it can also find accounts opened last week.
[/doc-step]
[doc-step]
**Decide how much help to offer**

Under **Number of emails**, choose one email for the guide alone or two for the guide and coupon. Set **Wait before email 2** to seven days for the second email. That week starts when the first email goes out. Choose **Coupon Template - Second Nopurchase Email** if you want that email to include an offer.
[/doc-step]
[doc-step]
**Keep cart reminders separate**

If you already send [cart reminders](/mailbeez/abandoned_cart_advanced), enable **Require an empty cart** here. A shopper with wine in their cart can then receive a message about that selection.
[/doc-step]
[/doc-steps]

[Check the first run](/quickstart/step-3-set-forget#check-the-first-run)
