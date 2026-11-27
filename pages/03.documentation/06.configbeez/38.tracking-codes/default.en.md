---
title: "Tracking Codes"
module_subtitle: "Add analytics parameters to campaign email links"
slug: tracking-codes
template: docs
visible: true
published: true
taxonomy:
    category: [docs]
---

To find visits from a campaign in your analytics service, add the provider’s tracking parameters to email links. Open **System → Configuration → Tracking Codes**.

Plan a consistent name for each campaign before applying tracking codes. That lets your analytics team compare traffic from multiple emails that link to the same shop page.

1. Choose **Shop links only** if only links to your shop should carry the parameters. Choose **All links** if other destinations should carry them too.
2. Review **Tracking query parameters** and **Tag plain-text links**. If a provider integration is installed, check its settings below.
3. Check a link in both the HTML and plain-text versions of a test email. Follow the link and confirm that the provider recognizes the campaign.

For MailBeez’s own engagement metrics, open [Open & Click Tracking](/configbeez/config_analytics).

## Provider guides

[doc-grid columns="2"]
[doc-link-card href="/configbeez/config_analytics_econda_" title="Econda Tracking" new-tab="false" /]
[doc-link-card href="/configbeez/config_googleanalytics" title="Google Analytics" new-tab="false" /]
[doc-link-card href="/configbeez/config_analytics_piwik_" title="Matomo (Piwik) Tracking" new-tab="false" /]
[/doc-grid]
