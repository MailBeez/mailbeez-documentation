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

MailBeez works with osCommerce CE Phoenix

The installation is straight forward and can be done in a couple of minutes by following these two steps:

- copy new files
- add extra files



## Step 1 - copy new files

[plugin:content-inject](/content_blocks/download_installer)


copy following file to your admin-directory

```bash
mailbeez.php
```


copy following file and folder to your catalog-directory (where your index.php is located)

```bash
mailhive (folder)
mailhive.php
```


## Step 2 - add extra files

With copying 2 files you can easily integrate MailBeez into your Store Administration


Please copy

```bash
extra files/extras_osc_233x/admin/includes/boxes/customers_mailbeez.php
extra files/extras_osc_phoenix_V1/includes/hooks/admin/siteWide/beezdesk.php
```

into the matching locations in your osCommerce CE Phoenix System:

```bash
admin/includes/boxes/customers_mailbeez.php
includes/hooks/admin/siteWide/beezdesk.php
```

Open the MailBeez System and start exploring!

[plugin:content-inject](/content_blocks/run_installer)