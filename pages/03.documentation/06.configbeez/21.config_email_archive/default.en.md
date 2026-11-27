---
title: "Email archive"
module_subtitle: "Offer a browser version of each email"
slug: config_email_archive
routes:
    aliases:
        - /documentation/installation/config/config_email_archive

published: true
date: '28-04-2014 00:00'
publish_date: '28-04-2014 00:00'
metadata:
    author: admin
visible: true
template: docs
taxonomy:
    category:
        - docs
    tag: ["pro", "Offer a browser version of each email"]
summary:
    enabled: true
    format: short
    size: 128
module:
    code: config_email_archive
    category:
        - configbeez
    compatiblity:
        - comp_osc
        - comp_cre
        - comp_digi
        - comp_zencart
        - comp_xtc
        - comp_xtcm2        
        - comp_gambio
        - comp_saas
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2014/04/icon_32.png'
    pro: pro
    cert: 'true'
    price: '79 EUR'
    title_en: 'Email Web-view and Archive'
    teaser_en: 'Enrich you MailBeez Emails with a web-view and archive them'
    title_de: 'Email Web-Ansicht und Archiv' 
    teaser_de: 'Erweitern Sie Ihre MailBeez-Emails mit einer Web-Ansicht und archivieren Sie diese.'
    author: MailBeez.com
author:
    name: admin
---

A buyer opens your brewing guide in an email app that hides images. A browser link lets them read a copy of the message you sent, including their own coupon and order details. Use a message addressed to yourself whenever you show someone how the link works.

## Decide how long a browser link should work

Open **System → Extensions → Add-ons → Sending and scheduling** and select **Offer a browser version of each email**.

[doc-steps]

[doc-step]
**Allow time to use the email**

If a coupon is valid for a month, consider how long its owner may need the browser copy. **Never viewed: retention (days)** counts from archiving. **Last viewed: retention (days)** counts from the most recent archive view.
[/doc-step]

[doc-step]
**Check the link before enabling cleanup**

Open a newly archived test email in the browser and check the guide and its images. With **Delete expired archive entries automatically** enabled, cleanup removes entries that have reached the retention period. Zero days makes an entry eligible at the next cleanup. Once removed, its browser link can no longer show the email.
[/doc-step]

[/doc-steps]
