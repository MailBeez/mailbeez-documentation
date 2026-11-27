---
# http://learn.getgrav.org/content/headers
title: "API Access"
module_subtitle: "Configure API keys, request limits and IP exemptions"
slug: config_api
date: 26-03-2012
published: true
publish_date: 26-03-2012
# unpublish_date: 26-03-2012
template: chapter
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

Before connecting an integration, find out which endpoint it calls. A protected request needs the shop’s API key. Public requests are subject to the configured limits unless the IP address is exempt.

When several tools use the shop API, identify which ones use the same key. They will each need the new value if you replace it.

Open **System → Configuration** and select **API Access**.

Check which API module and credentials it requires. Keep private credentials on the server and test the connection with the specific operation your integration uses.

<span id="settings-to-check"></span>

## Control API access and request limits

- **API key**<br>
  Authenticates protected API requests. Update connected integrations if you change this key.
- **Public requests per time window**<br>
  Maximum number of requests to public endpoints within the configured window.
- **Public time window (seconds)**<br>
  Duration used to count requests to public endpoints.
- **IP addresses exempt from limits**<br>
  Comma-separated IP addresses that bypass request limits.
