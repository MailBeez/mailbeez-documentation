---
title: "Numinix balance reminder"
module_subtitle: "Remind Zen Cart customers to use their remaining store credit"
slug: numinix-store-credit-balance-reminder
routes:
    aliases:
        - /documentation/mailbeez/numinix_sc_balance_reminder
        - /dokumentation/mailbeez/numinix_sc_balance_reminder
date: 14-10-2011
published: true
publish_date: 14-10-2011
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
        - "Numinix Store Credit: Balance Reminder"
module:
    code: numinix_sc_balance_reminder
    category:
        - mailbeez
    compatiblity:
        - comp_zencart
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/10/icon_32.png'
    pro: pro
    cert: 'true'
    price: '99 EUR'
    title_en: 'Numinix Store Credit: Balance Reminder'
    teaser_en: 'This module will periodically send a store credit balance reminder to your customers.'
    title_de: 'Numinix Store Credit: Balance Reminder'
    teaser_de: 'This module will periodically send a store credit balance reminder to your customers.'
    author: MailBeez.com
author:
    name: admin
metadata:
    author: admin
---

[doc-callout type="note" title="Earlier campaign module"]
Choose a flow for a current shop under [Automations](/mailbeez). [Browse the legacy reference](/legacy).
[/doc-callout]

Remind Zen Cart customers of unused credit. The shop needs the [Numinix Store Credit & Reward Points add-on](https://www.numinix.com/plugins/zen-cart-plugins/taxes-order-totals/store-credit-and-reward-dollars).

A reminder is useful when someone has earned credit and may have forgotten it. Show the balance clearly so the buyer can decide whether to use it on their next order.

1. Set the minimum credit balance a customer needs to receive a reminder.
2. Set the number of reminders per run and the interval between statements. If you use [Numinix Store Credit: Review Rewards](/mailbeez/numinix_sc_review_reward), the module also checks that notification when spacing out balance emails.
3. Preview the balance with an eligible customer. The included [Numinix Store Credit: Display Balance](/filterbeez/filter_add_numinix_sc_balance) filter makes the current balance available in other templates.

[plugin:content-inject](/content_blocks/pro_responsive_template)
