---
# http://learn.getgrav.org/content/headers
title: osCommerce CE Phoenix
slug: oscommerce-CE-Phoenix
# menu: osCommerce CE Phoenix
date: 21-10-2019
published: true
publish_date: 21-10-2019
# unpublish_date: 26-01-2011
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
    tag: [ftp]
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

[doc-callout type="note" title="Installation for earlier shop releases"]
Check the version in your shop admin. For a different release, look under [Installation](/basics/installation) or in the [legacy reference](/legacy).
[/doc-callout]

Use the installer for osCommerce CE Phoenix.

[plugin:content-inject](/content_blocks/download_installer)

## Copy the shop files

<span id="step-1-copy-new-files"></span>Copy `catalog/admin/mailbeez.php` into the shop’s admin directory. Copy `catalog/mailhive/` and `catalog/mailhive.php` into the shop root alongside `index.php`.

## Connect the admin menu and hook

<span id="step-2-add-extra-files"></span>Copy each package file to the shop path on the same row.

```text
extra files/extras_osc_233x/admin/includes/boxes/customers_mailbeez.php → admin/includes/boxes/customers_mailbeez.php
extra files/extras_osc_phoenix_V1/includes/hooks/admin/siteWide/beezdesk.php → includes/hooks/admin/siteWide/beezdesk.php
```

[plugin:content-inject](/content_blocks/run_installer)
