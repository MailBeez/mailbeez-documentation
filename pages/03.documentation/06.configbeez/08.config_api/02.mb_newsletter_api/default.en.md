---
title: 'Newsletter API'
module_subtitle: "Submit newsletter signups through the API"
template: docs
taxonomy:
    category: [docs]
    tag: [pro]
    
---

[doc-callout type="note" title="Earlier module settings"]
For the signup form in a current shop, see [Embed a signup form](/sitebeez/site_signup). [Browse the legacy reference](/legacy).
[/doc-callout]

Use the older newsletter API when your own shop form should start a confirmed signup. The form submits the email address and consent. [Newsletter](/mailbeez/newsletter) supplies the confirmation link for that subscriber.

Use an address you can access for the first submission. This lets you distinguish a form that accepts an address from a signup that the person has actually confirmed.

## Connect the signup form

1. Ask for the email address and newsletter consent. Send the form to `/mailhive.php/api/public/v1.0/newsletter/add/` on your shop over HTTPS using POST. Pass the address in `email` and the subscriber’s choice in `consent`. The older API assumes consent if you omit this field, so pass it explicitly.
2. To offer a choice of topics, send one topic ID or a comma-separated list in `topic_ids`. You can also pass the shop’s `language_id`. The optional `firstname`, `lastname` and `gender` fields apply to prospects. Existing customers keep their account details.
3. Read the JSON response before showing a message to the subscriber.

| Response | What to show |
| --- | --- |
| `{"error":false}` | Ask the subscriber to open their email and follow the confirmation link. |
| `invalid_email` | Ask them to check their email address. |
| `consent` | Explain that signing up requires their consent. |
| `duplicate` | The address already has a confirmed subscription. |

The installed module includes example signup forms in `mailhive/mailbeez/mb_newsletter/includes/templates`.

## Confirm the subscription

Customers and prospects receive different confirmation links. Use the link generated for that recipient in the matching email template. When the recipient follows it, the shop displays a confirmation. The follow-up email can include a coupon if the module is configured to offer one.

## Update an existing prospect or change topics

The prospect update accepts `firstname`, `lastname`, `gender` and `language_id`. A successful update returns `{"error":false}`. If your integration specifies a redirect, the result appears in the `result` query parameter (`OK` on success). The update changes the prospect’s details and preserves their subscription status.

An `invalid_prospect` result means the address has no prospect record. An `is_customer` result means the address belongs to a customer account. To let a subscriber change topics themselves, use the preferences link supplied by the module. It opens the topic selection form.
