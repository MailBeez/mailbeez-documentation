---
title: "Unpaid invoices"
module_subtitle: "Follow up on unpaid invoices"
slug: payment_invoice_dunning
date: 28-06-2011
published: true
publish_date: 28-06-2011
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
        - "Follow up on unpaid invoices"
module:
    plans_position: after_guide
    code: payment_invoice_dunning
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
    title_en: 'Payment Invoice Dunning'
    teaser_en: 'Waiting for Invoice Payments? Automatize payment dunning.'
    title_de: 'Mahnwesen Rechnungen'
    teaser_de: 'Mahnablauf für unbezahlte Rechnungen'
    author: MailBeez.com
author:
    name: admin
metadata:
    author: admin
---

A café orders two cases of filters on account. The goods have arrived, but the invoice still shows as unpaid in your shop. A first reminder with the invoice reference, amount and payment details makes it easy for the café to settle it or tell you that it has already paid.

MailBeez follows the order statuses your team uses for unpaid invoices. Record incoming payments in the shop before the next run. A bank transfer that has arrived but hasn’t been recorded can leave an order eligible for a reminder.

## Set up the flow

Open **Campaigns → Automations → MailBeez Flows → Follow up on unpaid invoices**, then choose **Options → Configure**.

[doc-steps]
[doc-step]
**Choose the unpaid orders**

Select your outstanding invoice status under **Order Status for Unpaid Invoices**. Check an unpaid invoice and a settled one side by side. Recording payment should move the settled order out of the statuses used for reminders.
[/doc-step]
[doc-step]
**Set the first and later waits**

Set **First reminder: waiting period** from the change to the trigger status, in line with your invoicing process. Set **Wait before email 2** from the first reminder. For example, if you want to give the café a further week after that email, enter seven days. Review the status assigned at each reminder stage.
[/doc-step]
[doc-step]
**Check who receives an escalation**

If you use the debt collection stage, review **Debt collection notice: waiting period**, **Order Status for Debt Collection** and **Debt Collection Notification Email** with the colleague who handles overdue invoices. When the fourth email goes out, MailBeez changes the order to the status you chose for debt collection. The final notification goes to the configured email address. Check the recipient and contents using a test shop before enabling the sequence.
[/doc-step]
[/doc-steps]

If the buyer must pay before you dispatch the goods, [Remind buyers to pay in advance](/mailbeez/payment_inadvance_dunning) covers that process.
