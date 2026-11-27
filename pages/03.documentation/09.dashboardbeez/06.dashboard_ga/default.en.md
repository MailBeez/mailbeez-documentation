---
# http://learn.getgrav.org/content/headers
title: "Google Analytics O’Pie"
module_subtitle: "Read the earlier Google Analytics dashboard chart"
slug: dashboard_ga
# menu: The Google Analytics O'Pie
date: 07-05-2012
published: true
publish_date: 07-05-2012
# unpublish_date: 07-05-2012
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
    tag: [core, "The Google Analytics O'Pie"]
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

Read visits attributed to a campaign in the historical Google Analytics profile linked to this widget. It needs the earlier Analytics integration and its storefront tracking. The following steps describe that generation of the Google API Console.

Use the date and campaign name from an actual email when reading the chart. Several messages may point to the same shop landing page.

## Connect an existing Analytics profile

1. In the historical Google API Console, select the project and enable the Analytics API. Under **Credentials**, create an OAuth client for a **Web Application**.
2. Copy the JavaScript origin and redirect URL from the MailBeez widget into the matching OAuth fields. Copy the resulting client ID and secret into the widget.
3. Choose **Confirm**, then **Connect**. Authorize access with the Google account that owns the reporting profile. Select the profile in the widget.

The widget needed storefront tracking to record campaign visits. An order placed later on another device with an emailed coupon could appear in MailBeez coupon reporting even if Analytics did not associate it with the original click.
