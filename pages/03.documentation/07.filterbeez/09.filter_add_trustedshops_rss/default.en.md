---
# http://learn.getgrav.org/content/headers
title: "Trusted Shops ratings in emails"
module_subtitle: "Insert imported Trusted Shops ratings in campaign emails"
slug: filter_add_trustedshops_rss
# menu: Add Trustedshops Ratings
date: 03-05-2011
published: true
publish_date: 03-05-2011
# unpublish_date: 03-05-2011
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
    tag: [pro, "Add Trustedshops Ratings"]
module:
    code: 'config_trustedshops_rss_importer'
    category: [filterbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    pro: 'pro'
    cert: 'true'      
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
To choose a review integration in V5, open [Integrations](/extensions/integrations). [Browse the legacy reference](/legacy).
[/doc-callout]

Display Trusted Shops reviews in emails that use the earlier template system. Check that reviews from [Import reviews from Trusted Shops](/configbeez/integrations/config_trustedshops_rss_importer) are available first, then install and activate the display module.

Compare one displayed review with the Trusted Shops profile connected to this installation. That separates a feed or shop assignment issue from a template display issue.

## Insert the review into a template

<span id="usage"></span>For one campaign, edit its content template. For all emails with the same design, edit the main template. Put this placeholder in the HTML version.

```smarty
{$content.rss.trustedshops.html}
```

Use its text counterpart in the plain-text version.

```smarty
{$content.rss.trustedshops.txt}
```

The display templates are in `mailhive/configbeez/config_trustedshops_rss_importer/templates`.

```text
rss_email_html.tpl  
rss_email_txt.tpl
```

For a custom display, read the review fields in the template loop.

```smarty
{assign var=feed_feed value=$data.feed.trustedshops}
{section name=item loop=$feed_feed}
  {$feed_feed[item].rating_stars}
  {$feed_feed[item].text}<br>
  {$feed_feed[item].user_deeplink}<br>
  {$feed_feed[item].date|date_format}
{/section}
```

<span id="display-options"></span>Set the number of ratings and the minimum rating (3–5 stars). Choose whether to show the latest matching reviews or shuffle them.
