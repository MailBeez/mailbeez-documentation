---
title: "Signup Confirmation"
slug: signup-confirmation
template: docs
visible: true
published: true
taxonomy:
    category: [docs]
---

A shopper submits the signup form, receives an email and clicks the confirmation link. Walk through those steps with a test address. MailBeez can show different messages to a prospect and to someone who already has a shop account.

1. Open **Contacts → Signup Confirmation** and start at **Signup Form**.
2. Under **DOI Email**, open **Prospects** or **Customers** and check the message containing the confirmation link. DOI stands for double opt-in.
3. Follow the link from a test email to **DOI Confirm Page**. If you also send a confirmation email or offer a coupon, check the final step for the same type of subscriber.
4. Repeat with the other signup path if your shop accepts both. The **DOI Quick Guide** on the page explains how the steps fit together.

## Signup form

Add a newsletter form where shoppers are likely to subscribe, such as your footer or a dedicated newsletter page.
Your shop needs the signup form integration (Advanced Module) and support for newsletter subscribers.

Tell visitors what they’ll receive. A coffee shop might promise a monthly email introducing its newest roasts.

1. In **Contacts → Signup Confirmation**, find **Signup Form**.
2. Open the signup trigger menu and choose **Integration code**.
3. Under **Site signup integration**, copy the JavaScript for your shop. Paste it into the storefront page where you want the form to appear.
4. Submit the form with a test address and follow the confirmation link. Try both the prospect and customer paths if your shop uses both.

### Older SiteBeez widgets

To link directly to the form, append this path to your shop’s base URL.

[codesh lang="text" title="Form URL" wrap="true"]
mailhive.php?m=mb_newsletter&ma=signup
[/codesh]

To preselect newsletter topics, append `&topics=3,9` and replace the example IDs with your own.

If your widget uses the `custom_code` option, this HTML button opens the signup form.

[codesh lang="html" title="Signup button" wrap="true"]
<button type="button"
  data-sitebeez-trigger="custom_code">
  Subscribe to the newsletter
</button>
[/codesh]

## Tutorial

[Connect a newsletter signup form](/tutorials/newsletter-signup-form)
