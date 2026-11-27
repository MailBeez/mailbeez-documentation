---
title: "Matomo (Piwik) Tracking"
module_subtitle: "Identify visits from campaign emails in Matomo or Piwik"
slug: config_analytics_piwik_
published: true
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
    tag: [core]
# added collection selector

author:
    name: admin
metadata:
    author: admin
---

A cart reminder and a winback email can both lead a tea buyer back to the same tasting box. In Matomo, look up the campaign name configured in MailBeez. The keyword identifies the flow that sent the link. You can find both values in the address opened by a test email.

1. Open **System → Configuration → Tracking Codes** and check the installed provider settings.
2. Send yourself a test email and open a shop link. Look for `pk_campaign` and `pk_kwd` in the destination URL. The first carries the campaign name, the second the keyword. Use those values when looking up the visit in Matomo.
3. Follow the link and check the campaign in Matomo (Piwik). To inspect events recorded by MailBeez itself, see [Open & Click Tracking](/configbeez/config_analytics).
