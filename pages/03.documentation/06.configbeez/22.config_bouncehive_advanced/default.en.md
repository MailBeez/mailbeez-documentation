---
title: "BounceHive"
module_subtitle: "Process returned messages in shops sending via SMTP with PHPMailer"
published: true
date: '26-03-2012 00:00'
publish_date: '26-03-2012 00:00'
metadata:
    author: admin
slug: config_bouncehive_advanced
routes:
    aliases:
        - /dokumentation/installation/config/config_bouncehive_advanced

visible: true
template: docs
taxonomy:
    category:
        - docs
    tag: ["pro", "BounceHive Bounce Handling"]
summary:
    enabled: true
    format: short
    size: 128
module:
    code: config_bouncehive_advanced
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
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2012/05/icon_321.png'
    pro: pro
    cert: 'true'
    price: '99 EUR'
    title_en: 'BounceHive Bounce Handling'
    teaser_en: 'Process Bounce Emails automatically'
    title_de: 'BounceHive R&uuml;ckl&auml;ufer-Verarbeitung'
    teaser_de: 'Bounce Emails automatisch verarbeiten'
    author: MailBeez.com
author:
    name: admin
---

[doc-callout type="note" title="Earlier MailBeez versions"]
To investigate an individual delivery in V5, open [Sending & status](/sending-status). [Browse the legacy reference](/legacy).
[/doc-callout]

When the shop sends through SMTP with PHPMailer, BounceHive can read returned messages from a dedicated IMAP mailbox. Use this guide to distinguish a permanent rejection from a temporary delay. MailBeez.Email has its own delivery-event handling.

Look at the type of failure before deciding what to do about an address. A full mailbox and a permanently unknown address call for different handling.

## Connect the bounce mailbox

1. Use the MailBeez **SMTP (PHPMailer)** sending method and a dedicated mailbox that your shop server can reach over IMAP. The historical Gmail example used IMAP over SSL at `imap.gmail.com`, port `993`. Check the connection settings with your provider.
2. Set the envelope sender for outgoing messages to the bounce mailbox. Customer replies still use the visible From or reply address. Give BounceHive access to the inbox and the configured folders for hard bounces, soft bounces and other messages.
3. Run the bounce service and check where it filed the messages. To process historical bounce messages, move them into the dedicated inbox. If a slow mail server causes processing timeouts, switch from the regular MailHive run to the module’s dedicated cron URL.

## How the recorded result affects sending

- **Hard bounce**<br>
  An unknown or invalid address is blocked immediately.
- **Soft bounce**<br>
  A temporary failure, such as a full inbox, delays the next attempt for the configured number of days. Repeated soft bounces can reach the configured threshold for a hard bounce.
- **Transient bounce**<br>
  The receiving server is still trying to deliver the message. BounceHive records no block for this notice.

A block matches both the customer ID and the email address. When a customer replaces an invalid address, the block on the old address does not apply to the new one.
