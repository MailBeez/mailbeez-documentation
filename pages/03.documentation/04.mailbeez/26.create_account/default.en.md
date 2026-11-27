---
title: "Welcome email"
module_subtitle: "Welcome new customers"
slug: create_account
date: 10-05-2011
published: true
publish_date: 10-05-2011
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
        - "Welcome new customers"
module:
    plans_position: after_guide
    code: create_account
    category:
        - mailbeez
    compatiblity:
        - comp_osc
        - comp_cre
        - comp_digi
        - comp_zencart
        - comp_xtc
        - comp_xtcm2        
        - comp_gambio
        - comp_saas
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/05/icon_32.png'
    pro: pro
    cert: 'true'
    price: '29 EUR'
    title_en: 'Welcome Email'
    teaser_en: 'Send a welcome email to new customers'
    title_de: 'Willkommens Email'
    teaser_de: 'Sende eine Begr&uuml;ssung an neue Kunden'
    author: MailBeez.com
author:
    name: admin
metadata:
    author: admin
---

A customer registers at your bike-parts shop to see which brake pads fit their bike. Your shop already confirms the registration. A welcome email the next day can do something more useful for this customer, such as showing where to find the brake model number and linking to the parts finder.

The trigger is the creation of the customer account. Someone can qualify even if they’ve already ordered. For an offer meant only for people who have never bought, use [Encourage a first order](/mailbeez/nopurchase_advanced).

## Set up the flow

Open **Campaigns → Automations → MailBeez Flows → Welcome new customers**, then choose **Options → Configure**.

[doc-steps]
[doc-step]
**Choose how soon to write**

Set **Wait after registration** to one day for the parts guide. Choose a longer **Maximum account age**. For example, seven days limits the first run to recently created accounts and keeps older customers out of a welcome campaign.
[/doc-step]
[doc-step]
**Give the reader one next step**

Open the welcome email and put the parts-finder link next to the instructions for finding the model number. Read it alongside the shop’s registration confirmation so the customer gets the account details once and the buying advice separately.
[/doc-step]
[/doc-steps]

Compare an eligible two-day-old account with one opened a month ago. With the settings above, only the newer account falls inside the window. The [first-run guide](/quickstart/step-3-set-forget#check-the-first-run) explains how to check the result before sending.
