---
title: "Send on shop visits"
module_subtitle: "Start sending when someone visits the store"
slug: config_cron_simple
date: 05-07-2011
published: true
publish_date: 05-07-2011
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
    tag: [pro, "Start sending when someone visits the store"]
module:
    code: config_cron_simple
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
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/08/icon_cron_32.png'
    pro: pro
    cert: 'true'
    price: '19 EUR'
    title_en: 'Run MailBeez Automatically'
    teaser_en: 'do some magic'
    title_de: 'MailBeez automatisch ausf&uuml;hren'
    teaser_de: 'Die einfache L&ouml;sung, um MailBeez zu automatisieren'
    author: MailBeez.com
author:
    name: admin
metadata:
    author: admin
---

Your yarn shop has a few visitors overnight. A knitting-kit review invitation becomes due at 7 a.m., but the first customer opens the shop at noon. If visits start processing, the invitation can wait until noon. This option suits a shop that can tolerate that variation.

## Decide how long a run can wait

Open **System → Extensions → Add-ons → Sending and scheduling** and select **Start sending when someone visits the store**.

[doc-steps]

[doc-step]
**Set the minimum interval**

The storefront integration must be active. Set **Minimum interval between visit-triggered runs (hours)**. With a two-hour interval, another visit ten minutes after a run cannot start the next one.
[/doc-step]

[doc-step]
**Compare the run time with the next visit**

Once the interval has passed, an eligible visit can start processing. If a reminder needs to go out early even when the shop is quiet, set up a server cron job under [Automatic processing](/configbeez/automatic-processing).
[/doc-step]

[/doc-steps]
