---
title: "Econda Tracking"
module_subtitle: "Tag links in campaign emails to identify store visits in Econda"
slug: config_analytics_econda_
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

You’re announcing a new water filter. People already visit its shop page from search, and you’d like to find the visits from your email in Econda. Use a campaign name your team will recognize, then follow the link in a test email and look up that visit.

1. Open **System → Configuration → Tracking Codes** and check the installed provider settings.
2. Send yourself a test email and open a shop link. Look for `newsletter` in the destination URL. MailBeez combines the campaign and keyword in that parameter, so one value can identify the mailing in Econda.
3. Follow the link and check the campaign in Econda. To inspect events recorded by MailBeez itself, see [Open & Click Tracking](/configbeez/config_analytics).
