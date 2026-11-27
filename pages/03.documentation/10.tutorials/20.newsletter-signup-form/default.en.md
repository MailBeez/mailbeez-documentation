---
title: "Connect a newsletter signup form"
slug: newsletter-signup-form
template: tutorial
visible: true
published: true
taxonomy:
    migration_status: done
    category: [docs]
    tag: [pro]
---

Choose the built-in form if your shop needs a standard newsletter signup. Open **Contacts → Signup Confirmation** and check the form and confirmation message for both prospects and existing customers.

Try the form from the same page a shopper will use. Its success message should explain the next action while the confirmation email is on its way.

For a custom form, use the newsletter API for the installed module version. Start with an email address. If you assign interests at signup, create them in **Contacts → Topics** first and pass their IDs in `topic_ids`. The user must be able to see which interests they are selecting.

Test an invalid address, a duplicate signup and a new address. After a successful request, tell the subscriber to open the confirmation link in their email. Test the customer and prospect paths separately.
