---
title: "Sending windows"
module_subtitle: "Schedule sending by module"
published: true
date: '02-12-2013 00:00'
publish_date: '02-12-2013 00:00'
metadata:
    author: admin
slug: config_cron_advanced
visible: true
template: docs
taxonomy:
    category:
        - docs
    tag: [pro, "Schedule sending by module"]
summary:
    enabled: true
    format: short
    size: 128
module:
    code: config_cron_advanced
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
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2013/12/icon_cron_64.png'
    pro: pro
    cert: 'true'
    price: '99 EUR'
    title_en: 'Run MailBeez Automatically Advanced'
    teaser_en: 'Add automation and powerful time control - also great in combination with traditional cronjobs'
    title_de: 'MailBeez automatisch ausführen - Profi'
    teaser_de: 'Automatisierung und volle Zeitkontrolle - auch gerade in Kombination mit traditionellen Cronjobs'
    author: MailBeez.com
author:
    name: admin
---

A parts supplier sends payment reminders on Tuesday mornings while its accounts team is available to answer replies. Give that module a Tuesday window from 8 to 9 a.m. A processing run at 8:30 can pick it up. A run at 9:30 is already outside the window.

## Give a module a sending window

Open **System → Extensions → Add-ons → Sending and scheduling** and select **Schedule sending by module**.

[doc-steps]

[doc-step]
**Choose the window**

Open **Edit schedule**, find the payment reminder and select the weekday and hours you want it to run. Other flows can keep their own schedules.
[/doc-step]

[doc-step]
**Make sure a run falls inside it**

Check what starts [automatic processing](/configbeez/automatic-processing). A time window permits a run. A server cron job or an eligible shop visit still has to start it. **Minimum interval between visit-triggered runs (minutes)** applies when shop visits start processing.
[/doc-step]

[/doc-steps]
