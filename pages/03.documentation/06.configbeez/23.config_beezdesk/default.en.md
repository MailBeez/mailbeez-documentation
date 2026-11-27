---
# http://learn.getgrav.org/content/headers
title: BeezDesk CRM Integration
module_subtitle: "Connect shops to see their customer tickets in BeezDesk CRM"
slug: config_beezdesk
date: 22-03-2013
published: true
publish_date: 22-03-2013
# unpublish_date: 22-03-2013
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
    tag: [pro]
# added collection selector

author:
    name: admin
metadata:
    author: admin
module:
    code: 'config_beezdesk'
    category: [configbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio,comp_saas]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2014/04/icon_32.png'
    pro: 'pro'
    cert: 'true'    
---

[doc-callout type="note" title="Earlier module settings"]
For settings in the current app, start with [System](/app-system). [Browse the legacy reference](/legacy).
[/doc-callout]

To see customer tickets from several shops in BeezDesk CRM, connect each shop first and designate one as the master. The historical integration required a BeezDesk subscription and MailBeez in every participating shop.

Write down which shop owns each connection. In a multi-shop setup, that makes it easier to trace a ticket that reached the wrong department.

## Connect your shops

1. In the BeezDesk subscription, register each shop domain and copy its API key. Enter that key in the MailBeez CloudLoader configuration on the corresponding shop. Use CloudLoader to install the integration.
2. Configure one shop as the **Master**, even for a single-shop installation. Configure any additional shop as a **Slave**. Approve each additional shop in the master shop and assign its BeezDesk departments.
3. Follow the [customer insight setup](/configbeez/config_customer_insight) to make ticket conversations available in the shop administration.

## Schedule service tasks

Use the service URL shown during installation for the first cron job. Install the BeezDesk service modules and set up the message synchronization URL as a second job. The original setup used a five-minute interval. New messages appear in the shop after the synchronization job runs.

Copy the URL from your module. When entering it into a shell command, quote the URL so the ampersand reaches the server.

```sh
wget -O - -q -t 1 'https://your-shop.example/mailhive.php?m=service_beezdesk_sync&ma=sync'
```

## Add the contact widget

For shops without a built-in integration, add this block to `/includes/modules/footer.php` on ZenCart or `/includes/footer.php` on other supported shops.

```
<?php
    if (defined('MAILBEEZ_BEEZDESK_CHAT_WIDGET_ID') && MAILBEEZ_BEEZDESK_CHAT_WIDGET_ID != '') {
        // Beezdesk Chat
        $beezdesk_button_id = MAILBEEZ_BEEZDESK_CHAT_WIDGET_ID;
        if (file_exists('mailhive/configbeez/config_beezdesk/includes/beezdesk_chat.php')) {
            include('mailhive/configbeez/config_beezdesk/includes/beezdesk_chat.php');
        }
        // Beezdesk Chat
    }
?>
```
