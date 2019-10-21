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

MailBeez arbeitet problemlos mit *osCommerce CE Phoenix*.


Die Installation ist in wenigen Schritten erledigt:

- Die neuen Dateien übertragen
- Die extra Dateien infügen



## Schritt 1: Neue Dateien

[plugin:content-inject](/content_blocks/download_installer)


folgende Dateien und Ordner aus dem entpackten Zip-Archiv auf den Shop-Server übertragen:


```bash
admin/mailbeez.php
mailhive/
mailhive.php


```


## Schritt 2: Integration mit der Administration

Durch einfaches kopieren von 2 Plugins können Sie schnell und einfach MailBeez in die Administration integrieren:

Bitte die Dateien aus

```bash
extra files/extras_osc_233x/admin/includes/boxes/customers_mailbeez.php
extra files/extras_osc_phoenix_V1/includes/hooks/admin/siteWide/beezdesk.php
```

in das osCommerce CE Phoenix System in die entsprechenden Ordner kopieren:

```bash
admin/includes/boxes/customers_mailbeez.php
includes/hooks/admin/siteWide/beezdesk.php
```

fertig.

[plugin:content-inject](/content_blocks/run_installer)

