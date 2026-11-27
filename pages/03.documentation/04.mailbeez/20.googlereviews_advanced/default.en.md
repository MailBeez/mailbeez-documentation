---
title: "Google reviews"
module_subtitle: "Ask for Google reviews"
slug: googlereviews_advanced
date:  18-03-2021
published: true
publish_date: 18-03-2021
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
        - "Ask for Google reviews"
module:
    plans_position: after_guide
    code: googlereviews_advanced
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
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2013/06/top_64.png'
    pro: pro
    cert: 'true'
    price: '99 EUR'
    title_en: 'Google Reviews Advanced'
    teaser_en: 'Advanced Features: Delay for international orders, multiple Order status, recognition of regular customers'
    title_de: 'Google Bewertungen Profi'
    teaser_de: 'Profi-Features: Verzögerung für internationale Bestellungen, Stammkunden-Erkennung und mehr'
    author: MailBeez.com
author:
    name: admin
metadata:
    author: admin
---

A florist delivers a bouquet on Friday. By Monday the customer can say whether the flowers arrived on time and in good condition. A short email linking to the florist’s Google review page gives them a place to share that experience. If you operate several branches, check which business profile your link opens.

## Set up the flow

Open **Campaigns → Automations → MailBeez Flows → Ask for Google reviews**, then choose **Options → Configure**.

<span id="schedule-the-google-revie"></span>
<span id="settings-to-check"></span>

[doc-steps]
[doc-step]
**Choose the Google destination**

Copy the review link for the correct Google Business Profile into **Your Google Reviews URL**. Open the link on a phone and check the business name and address. A map search for the town can lead a buyer to a different florist.
[/doc-step]
[doc-step]
**Schedule the invitation**

Under **Set Order Status**, choose the status your shop uses for completed deliveries. With **Wait after the order status changes** set to three, a Friday status change makes the invitation eligible on Monday. The next scheduled run determines when it goes out. Set **Maximum age of the status change** above the wait.
[/doc-step]
[doc-step]
**Allow for repeat orders**

Set **Minimum interval between invitations** for buyers who order flowers regularly. **Additional delay for international deliveries** adds time for orders delivered abroad. If the trigger already means the flowers were delivered, decide whether those orders need any extra wait.
[/doc-step]
[/doc-steps]

For a check from the order through to the review page, follow [Schedule a review invitation](/cookbook/optimized-review-invite-flow).
