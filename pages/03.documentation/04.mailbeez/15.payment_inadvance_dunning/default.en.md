---
title: "Prepayment reminder"
module_subtitle: "Remind buyers to pay in advance"
slug: payment_inadvance_dunning
date: 13-05-2011
published: true
publish_date: 13-05-2011
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
        - "Remind buyers to pay in advance"
module:
    plans_position: after_guide
    code: payment_inadvance_dunning
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
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/2011/06/payment_inadvance_dunning.png'
    pro: pro
    cert: 'true'
    price: '139 EUR'
    title_en: 'Payment in advance Dunning'
    teaser_en: 'Waiting for Payments? Automatize payment reminders.'
    title_de: 'Zahlungserinnerung Vorkasse'
    teaser_de: 'Automatisierter Ablauf mit Stornierung'
    author: MailBeez.com
author:
    name: admin
metadata:
    author: admin
---

Your parts shop is holding a replacement pump while a customer arranges a bank transfer. Three days later the order is still awaiting payment. An email with the amount, account details and payment reference lets the customer finish the transfer without searching for their order confirmation.

MailBeez relies on the outstanding payment status in the shop. Allow enough time to reconcile bank receipts. Once the order leaves the reminder statuses, the customer should no longer receive payment requests for it.

## Set up the flow

Open **Campaigns → Automations → MailBeez Flows → Remind buyers to pay in advance**, then choose **Options → Configure**.

[doc-steps]
[doc-step]
**Identify orders awaiting a transfer**

Choose the status that specifically means advance payment is outstanding under **Order Status for Advance Payment Due**. Check what happens to that status when your team records a transfer. A general “Processing” status shared by paid orders is too broad.
[/doc-step]
[doc-step]
**Time the first request and any follow-up**

For the pump, set **First reminder: waiting period** to three days from the order reaching that status. If you send another request, **Wait before email 2** counts from the first email. Check the amount, payment reference and bank details against a test order.
[/doc-step]
[doc-step]
**Review the cancellation stage**

If your process reaches cancellation, check **Cancellation: waiting period** and **Order Status for Cancellation**. That stage can change the order status and send a cancellation message. Follow a disposable order through your test shop before you rely on the sequence for stock you’ve reserved.
[/doc-step]
[/doc-steps]

For goods already supplied on invoice, use [Follow up on unpaid invoices](/mailbeez/payment_invoice_dunning).
