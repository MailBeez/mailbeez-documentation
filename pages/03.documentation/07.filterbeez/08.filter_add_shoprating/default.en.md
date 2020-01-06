---
# http://learn.getgrav.org/content/headers
title: Add ShopRatings to Emails
menu: Add ShopRatings
slug: filter_add_shoprating
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
    tag: [pro]
module:
    code: 'shoprating_advanced'
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

Automatically add your store’s ShopRatings reviews into any MailBeez email campaign with this filter; perfect for spicing up the [Winback](/documentation/mailbeez/winback_advanced/ "Winback Advanced Module") and [No Purchase](/documentation/mailbeez/nopurchase_advanced/ "Mailbeez No Purchase Modules") Mailbeez modules.

### Usage

Install and activate this Module – you need to have the [MailBeez ShopRating](/documentation/configbeez/config_shopvoting "ShopRating") configured.

By adding the following tags into your MailBeez templates you will be able to show a configured number of ShopRatings in your MailBeez generated emails. You can place the tags wherever you want, so for example if you place them within your main template the ratings will be shown in all emails, but if you place them only in your content template, you are able control exactly in which emails the ratings will be visible:

Place this into the HTML-Version of your MailBeez template:

```
{$content.shoprating.html}
```

Place his into the TXT-Version of your MailBeez template:

```
{$content.shoprating.txt}
```
