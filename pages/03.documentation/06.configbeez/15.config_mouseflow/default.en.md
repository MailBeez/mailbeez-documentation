---
title: "Mouseflow"
module_subtitle: "View visits from emails in Mouseflow"
slug: config_mouseflow
date: 20-10-2011
published: true
publish_date: 20-10-2011
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
        - core
        - "View visits from emails in Mouseflow"
author:
    name: admin
metadata:
    author: admin
---

A refill offer gets clicks, yet buyers keep asking which filter fits their machine. Follow the link in a test email and visit the product selector. A recognizable session in Mouseflow can help you find the point where visitors get stuck.

<span id="settings-to-check"></span>

## Choose which visits to record

Open **System → Extensions → External services → Feedback and analytics** and select **View visits from emails in Mouseflow**.

[doc-steps]

[doc-step]
**Choose the traffic you want to see**

Under **Recording channels**, enter `MailBeez` for visits from your emails, `Other` for other visits, or `MailBeez, Other` for both. Use **Excluded IP addresses** to keep an office or agency out of the recordings. An excluded address also affects your own test.
[/doc-step]

[doc-step]
**Check a fresh visit**

Paste the full snippet supplied by your Mouseflow account into **Mouseflow tracking code**. Use a new browser session and follow the product link from the test email. Look for that visit in Mouseflow. A session already marked for recording can continue after you change the channels.
[/doc-step]

[/doc-steps]
