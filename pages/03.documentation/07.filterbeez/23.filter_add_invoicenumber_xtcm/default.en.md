---
# http://learn.getgrav.org/content/headers
title: "Invoice numbers"
module_subtitle: "Include invoice numbers in emails"
slug: filter_add_invoicenumber_xtcm
date: 19-06-2017
published: true
publish_date: 19-06-2017
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
    tag: [pro, "Include invoice numbers in emails"]
module:
    code: 'filter_add_invoicenumber_xtcm'
    category: [filterbeez]
    compatiblity: [comp_xtcm2]
    pro: 'pro'
    cert: 'true'      


---

A café asks which invoice your payment reminder refers to. Its bookkeeper searches by the number on the invoice. Your order number can be quite different. If the shop’s invoice-number module is enabled, MailBeez can include the existing invoice number and date in an order email.

## Match the email to the issued invoice

Open **System → Extensions → Add-ons → Customer data and content** and select **Include invoice numbers in emails**.

Use `$data.order.invoice_number` for the number and `$data.order.invoice_date` for the date in the template. The shop creates the invoice. This add-on reads its details for the order.

Compare a test message for an invoiced order with the actual document. A template preview can show a sample number. A missing order record can yield `n/a`, and an order that has yet to be invoiced can have an empty number. Check the record before referring the buyer to that invoice.
