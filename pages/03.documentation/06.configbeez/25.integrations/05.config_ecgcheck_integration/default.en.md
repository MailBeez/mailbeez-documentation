---
title: "ECG-CHECK"
module_subtitle: "Check recipients against the ECG list"
slug: config_ecgcheck_integration
routes:
    default: /documentation/configbeez/config_ecgcheck_integration
date: 20-03-2016
published: true

template: docs
visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: done
    category: [docs]
    tag: [pro, "Check recipients against the ECG list"]
module:
    code: 'config_ecgcheck_integration'
    category: [configbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    pro: 'pro'
    cert: 'true'

author:
    name: admin
metadata:
    author: admin
---

Your outdoor shop is preparing a seasonal mailing and wants to screen its addresses against the ECG list. First establish that MailBeez can reach the service with your saved credentials. Checking customer addresses is a separate decision because matching recipients can be blocked across all MailBeez mailings.

<span id="settings-to-check"></span>

## Connect your ECG-CHECK account

Open **System → Extensions → External services** and select **Check recipients against the ECG list**.

[doc-steps]

[doc-step]
**Test the saved connection**

Save the **ECG-CHECK API key**, then choose **Test connection**. The test checks the certificate and service connection without screening recipients. Change the **MailBeez license certificate** only if MailBeez support asks you to.
[/doc-step]

[doc-step]
**Choose when addresses are checked**

Review **Check during regular MailBeez runs** before using **Check addresses**. The address check can apply global blocks immediately. It screens customer addresses and, if Newsletter is active, eligible prospects. Already globally blocked recipients are skipped. A match count refers to addresses, so it can differ from the number of recipient records reported for blocking.
[/doc-step]

[/doc-steps]
