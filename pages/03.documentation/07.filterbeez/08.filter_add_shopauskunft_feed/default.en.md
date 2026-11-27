---
# http://learn.getgrav.org/content/headers
title: "Shopauskunft ratings in emails"
module_subtitle: "Insert Shopauskunft ratings in emails based on the earlier template system"
menu: "Shopauskunft ratings in emails"
slug: filter_add_shopauskunft_feed
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
    tag: [pro, "Add Shopauskunft Ratings to Emails"]
module:
    code: 'config_shopauskunft_rss_importer'
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
To choose a review integration in V5, open [External services](/extensions/integrations). [Browse the legacy reference](/legacy).
[/doc-callout]

Display Shopauskunft reviews in emails that use the earlier template system. Check that reviews from [Import reviews from Shopauskunft](/configbeez/integrations/config_shopauskunft_integration) are available first, then install and activate the display module.

Preview a recent Shopauskunft review in the email where it will appear. Check that a reader can tell the review concerns your store and identify its source.

## Insert the review into a template

<span id="usage"></span>For one campaign, edit its content template. For all emails with the same design, edit the main template. Put this placeholder in the HTML version.

```smarty
{$content.rss.shopauskunft.html}
```

Use its text counterpart in the plain-text version.

```smarty
{$content.rss.shopauskunft.txt}
```

The display templates are in `mailhive/configbeez/config_shopauskunft_rss_importer/templates`.

```text
rss_email_html.tpl  
rss_email_txt.tpl
```

For a custom display, read the review fields in the template loop.

```smarty
{assign var=feed_feed value=$data.feed.shopauskunft}
{section name=item loop=$feed_feed}
  {$feed_feed[item].rating_stars}
  {$feed_feed[item].text}<br>
  {$feed_feed[item].user_deeplink}<br>
  {$feed_feed[item].date|date_format}
{/section}
```

<span id="display-options"></span>Set the number of ratings and the minimum rating (3–5 stars). Choose whether to show the latest matching reviews or shuffle them.
