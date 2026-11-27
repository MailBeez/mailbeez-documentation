---
# http://learn.getgrav.org/content/headers
title: "Google Analytics report"
module_subtitle: "Review visits and orders attributed to email campaigns in the earlier report"
slug: report_ga
menu: "Google Analytics report"
date: 08-05-2012
published: true
publish_date: 08-05-2012
# unpublish_date: 08-05-2012
template: docs
# theme: false
visible: false
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: done
    category: [docs]
    tag: [core, "The Google Analytics Data Report"]
# added collection selector

author:
    name: admin
metadata:
    author: admin
#      description: Your page description goes here
#      keywords: HTML, CSS, XML, JavaScript
#      robots: noindex, nofollow
#      og:
#          title: The Rock
#          type: video.movie
#          url: http://www.imdb.com/title/tt0117500/
#          image: http://ia.media-imdb.com/images/rock.jpg
#  cache_enable: false
#  last_modified: true
---

[doc-callout type="note" title="Earlier MailBeez versions"]
To configure campaign link parameters in V5, open [Tracking Codes](/configbeez/tracking-codes). [Browse the legacy reference](/legacy).
[/doc-callout]

The legacy report read campaign visits from a connected Google Analytics reporting profile. It used the authorization token obtained through the dashboard widget.

Start with a date when the connected profile was receiving shop traffic. An empty period can otherwise look like a campaign that attracted no visits.

For an installation that already has the integration, enable the widget in the dashboard configuration, open it and choose the connected profile. Compare a known campaign and date there. See [The Google Analytics O'Pie](/dashboardbeez/dashboard_ga) for the original connection procedure or [Email performance](/mailbeez-results/email-performance) for MailBeez’s own email figures.
