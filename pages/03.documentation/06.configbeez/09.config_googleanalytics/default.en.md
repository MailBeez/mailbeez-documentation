---
# http://learn.getgrav.org/content/headers
title: "Google Analytics"
module_subtitle: "Identify visits from tagged campaign emails in Google Analytics"
slug: config_googleanalytics
date: 26-03-2012
published: true
publish_date: 26-03-2012
# unpublish_date: 26-03-2012
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
    tag: [core]
# added collection selector

author:
    name: admin
metadata:
    author: admin
---

A refill reminder and a winback email both link to the same bag of espresso beans. In Google Analytics you can tell which flow brought the buyer to that page. MailBeez puts the sending module’s identifier in `utm_campaign` and adds the source and medium configured for your shop.

1. Open **System → Configuration → Tracking Codes** and check the installed provider settings.
2. Send yourself a test email and open a shop link. Look for `utm_source`, `utm_medium` and `utm_campaign` in the destination URL. Compare their values with the source, medium and campaign you expect to see in Google Analytics.
3. Follow the link and check the campaign in Google Analytics. To inspect events recorded by MailBeez itself, see [Open & Click Tracking](/configbeez/config_analytics).
