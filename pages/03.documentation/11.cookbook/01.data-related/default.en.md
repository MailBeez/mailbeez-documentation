---
# http://learn.getgrav.org/content/headers
title: "Check bounces from an earlier mailing"
#menu: Beez-O-Graph
slug: data-related
date: 17-02-2016
original_v4: true
published: true
publish_date: 17-02-2016
template: tutorial
# theme: false
visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: done
    category: [docs]
    tag: [pro]
---

[doc-callout type="note" title="Earlier MailBeez versions"]
[Browse the legacy reference](/legacy).
[/doc-callout]

<span id="check-email-addresses-of-customer-base"></span><span id="check-email-addresses-of-"></span><span id="issue"></span>Use bounce records from a mailing to identify addresses that could not be reached. The historical example used Newsletter Advanced and an existing Newsletter2Go delivery connection. Before interpreting the results, check which mailing, audience and sending period they belong to.

A delivery failure answers a question about one sending attempt. Keep it separate from whether the person signed up for the newsletter or later withdrew their consent.

1. <span id="solution"></span>Check the selected audience and its subscription rules in [Newsletter](/mailbeez/newsletter). A bounce can identify a delivery problem. It cannot establish consent to future mailings.
2. Confirm which delivery service handled the mailing in [Sending method](/configbeez/config_email_engine). Allow time for bounce reports to return. In the historical integration they could arrive over several days.
3. Open the bounces in the earlier Beez-O-Graph. Distinguish permanent rejections from temporary failures before acting on the address. For an SMTP installation with a separate bounce mailbox, see [BounceHive Bounce Handling](/configbeez/config_bouncehive_advanced).

The old example used a list called “all customer - no abo check” with country-specific subscription overrides. If you find it in an existing shop, review those overrides before reusing the list.

If the service reports a full mailbox, the inbox could not accept that attempt. If it reports an unknown recipient, confirm the spelling with the customer before using the address again. In each case, keep the reason with the mailing that produced it.
