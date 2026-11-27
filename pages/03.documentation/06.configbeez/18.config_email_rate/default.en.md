---
# http://learn.getgrav.org/content/headers
title: "Email feedback"
module_subtitle: "Ask for feedback on emails"
slug: config_email_rate
routes:
    aliases:
        - /documentation/installation/config/config_email_rate
published: true
template: docs
# theme: false
visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: review
    category: [docs]
    tag: [pro, "Ask for feedback on emails"]
module:
    code: 'config_email_rate'
    category: [configbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    pro: 'pro'

author:
    name: admin
metadata:
    author: admin
---

You remind a buyer to change a water filter. They still have two unopened filters. “Was this reminder useful?” gives them a way to tell you the email came too soon. If several buyers give the same feedback, revisit the delay before changing the offer.

## Ask about the email itself

Open **System → Extensions → Add-ons → Feedback and analytics**. If the configuration module is listed, select **Ask for feedback on emails**.

The helper **Email feedback link** supplies the positive and negative links to the template. Depending on which modules are installed or visible, the helper may be the only row you see.

[doc-steps]

[doc-step]
**Add the question to the reminder**

Place the two feedback links next to a question about this particular email. Keep the link for reviewing the filter itself separate so you know what the buyer rated.
[/doc-step]

[doc-step]
**Check both choices**

Send a copy to your own test address. Open each link from a separate test message and check where it leads. If you use **Custom feedback URL (optional)**, the custom address needs a matching server rewrite rule. Check that the feedback page opens from the message.
[/doc-step]

[/doc-steps]
