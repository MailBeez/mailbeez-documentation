---
# http://learn.getgrav.org/content/headers
title: "Troubleshoot an older installation"
slug: frequently-asked-questions
published: true
template: tutorial

visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: done
    category: [docs]
    tag: []
# added collection selector

author:
    name: admin
metadata:
    author: admin
    
toc:
    baselevel: 2
    headinglevel: 3
    
---

[doc-callout type="note" title="Earlier MailBeez versions"]
[Browse the legacy reference](/legacy).
[/doc-callout]

Before changing an older installation, record the exact symptom, module, time, sending mode and error message. Use the corresponding section below to narrow the cause.

If possible, trace one affected order or address from the event to the expected result. That makes it easier to see where the actual sequence first differs from the guide.

## Sending and simulation

- If a run stops after one email or a test never arrives, check the addresses configured for simulation and copies. Check the delivery service and whether any recipients qualified.
- If the campaign window stops at the mode indicator, review the PHP error log and the number of recipients selected. A smaller processing window can help isolate a memory limit.
- If HTML appears as text, compare a shop order email with the MailBeez email. Check the mail transport, line endings and recipient format preference.
- A scheduled job can run several times a day. Modules use the recorded sending history, eligibility rules and processing windows to decide who qualifies on each run.

## Administration and templates

A blank popup or one showing the storefront can have several causes. Compare the configured shop URL and admin URL, including HTTPS and hostname. Check whether a URL-rewriting extension redirects MailBeez requests. A 404, a 403 and a PHP 500 lead to different log entries. Use the matching entry before changing the shop configuration.

If an older Smarty template fails after adding CSS, check the braces in the stylesheet. Those templates can use `{literal}` and `{/literal}` around literal CSS. After an interrupted installation, identify the failed installer step and preserve a database backup before repairing installation state.

## Certificates

The historical module certificates were tied to the shop hostname. Compare the domain used by the browser and scheduler with the licensed domain. A test installation needs a certificate matching its own hostname. In modified admins, an input length restriction could truncate a certificate.

## osCommerce

On shops using STS or older security extensions, check whether popup routes arrive at the intended admin page. If they show the storefront, inspect the rewrite or template integration for that version.

## Zen Cart

- In some early MailBeez 2.7 packages, an obsolete `includes/extra_configures/mailbeez_tracking.php` could cause a missing `email` class when a tracked link was opened. Check the integration instructions for the exact package.
- The shop mailer may wrap MailBeez HTML in `email/email_template_default.htm`. Check that template if the subject appears twice. When testing plain text versus HTML, use an account whose email preference is known.
- If both Zen Cart and MailBeez send a welcome email, identify the owner of each message before changing the signup flow. For a blank campaign window, check the shop’s `myDebug` log for the corresponding request.

## Checks for earlier self-hosted shops

- For an embedded admin window that keeps loading, compare the scheme and hostname in `HTTP_SERVER` and `HTTP_CATALOG_SERVER`. The admin and catalog needed matching origins when the server enforced same-origin frames.
- For a 500 response from the shop’s `mailhive.php`, check the filesystem path in `includes/configure.php`. Older integrations required `DIR_FS_CATALOG` to end with a slash.
- For an invalid certificate, use **MailBeez → About** to look up the exact server domain. Check that the scheduled job calls that same domain.
- If email displays HTML markup, check the shop mailer’s line-ending setting. Some older transports needed **LF**. Test both a shop order confirmation and a MailBeez message with the same address.
