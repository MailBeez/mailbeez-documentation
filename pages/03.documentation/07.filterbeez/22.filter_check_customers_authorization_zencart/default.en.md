---
# http://learn.getgrav.org/content/headers
title: "Zen Cart account authorization"
module_subtitle: "Check the authorization state of Zen Cart accounts before sending"
slug: filter_check_customers_authorization_zencart
date: 15-12-2016
published: true
publish_date: 15-12-2016
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
    tag: [pro, "[Zen Cart] Check Customer Authorization"]
module:
    code: 'filter_check_customers_authorization_zencart'
    category: [filterbeez]
    compatiblity: [comp_zencart]
    pro: 'pro'
    cert: 'true'      


---

[doc-callout type="note" title="Earlier filter"]
For the filters you can configure in V5, open [Add-ons](/extensions/addons). [Browse the legacy reference](/legacy).
[/doc-callout]

<span id="ensure-non-approved-custo"></span>In the earlier Zen Cart integration, enable this filter when MailBeez messages should go only to customers whose authorization status is `approved`. Check a customer with that status and a second customer awaiting approval before enabling the campaign.

Use an account whose authorization state you know. It gives you a reference for checking how the historical Zen Cart filter treats an otherwise eligible recipient.
