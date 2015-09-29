---
title: 'MailBeez Analytics Configuration'
slug: config_analytics
routes:
    aliases:
        - /documentation/installation/config_queen/config_analytics
date: 26-03-2012
published: true
publish_date: 26-03-2012
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
author:
    name: admin
metadata:
    author: admin
---

MailBeez Analytics the Analytics System of the MailBeez platform and allows you to measure the success of your MailBeez Emails.

The Measurement utilizes following techniques:


>>>>>  open / clicks on copy-to emails are not counted as these emails are separate emails with a different message-id. so only open / click actions of the real recipients are counted.


### Openrates

an email counts as opened when one of the following events occurred:

- loading of the tracking pixel (requires the customers email client is loading images of the HTML-version)
- click on a link towards the shopsystem in the email
- placing an order using the unique personalized coupon from the email


The tracking images uses a high-performance call to minimize server load: each opening is logged into a log-file. With every run of MailHive the server handler is importing the log file into the MailBeez Tracking Database. Afterwards the log file is deleted.


### Clickrates

an email counts as clicked when the following events occurred:
- click on a link towards the shopsystem in the email


### Orderrates

An order counts as referred by email, when one of the following conditions are met:

- order folling a klick on a link
- placing an order using the unique personalized coupon from the email
