---
# http://learn.getgrav.org/content/headers
title: modified-shop 2.x/3.x
slug: basic-installation-modified-shop-2
date: 12-09-2010
published: true
publish_date: 12-09-2010
# unpublish_date: 12-09-2010
template: docs
installation_platform: comp_xtcm2
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

<span id="integration-packs"></span>Choose the package for your installed modified-shop release and revision. For example, the 3.0.2 package below is for revision r15701 with PHP 8.2. Compare the revision in your shop before merging files.

A revision number identifies a particular build within a release. Check it before merging files, especially if the shop already contains changes to reviews or the administration menu.

| Shop release | Integration package |
| --- | --- |
| <span id="modified-shop-v3"></span><span id="modified-shop-v3-0-2-php8"></span>3.0.2  · PHP 8.2 | [Download r15701](https://mailbeez-support.com/cloudfiles/modified-shop_3.0.2-r15701_delta.zip) |
| <span id="modified-shop-v3-1-0-php8"></span>3.1.0  · PHP 8.3 | [Download r16069](https://mailbeez-support.com/cloudfiles/modified-shop_3.1.0-r16069_delta.zip) |
| <span id="modified-shop-v2"></span><span id="modified-shop-v2-0-0"></span>2.0.0 | [Download r6510](https://mailbeez-support.com/cloudfiles/modified-shop-2.00r6510-delta.zip) |
| <span id="modified-shop-v2-0-1"></span>2.0.1 | [Download r10403](https://mailbeez-support.com/cloudfiles/modified-shop_2.0.1.0-r10403-delta.zip) |
| <span id="modified-shop-v2-0-2-1"></span>2.0.2.1 | [Download r10607](https://mailbeez-support.com/cloudfiles/modified-shop_2.0.2.1-r10607-delta.zip) |
| <span id="modified-shop-v2-0-2-2"></span>2.0.2.2 | [Download r10690](https://mailbeez-support.com/cloudfiles/modified-shop_2.0.2.2-r10690-delta.zip) |
| <span id="modified-shop-v2-0-3-0"></span>2.0.3.0 | [Download r10907](https://mailbeez-support.com/cloudfiles/modified-shop_2.0.3.0-r10907-delta.zip) |
| <span id="modified-shop-v2-0-4-2"></span>2.0.4.2 | [Download r11374](https://mailbeez-support.com/cloudfiles/modified-shop_2.0.4.2-r11374-delta.zip) |
| <span id="modified-shop-v2-0-5-x"></span>2.0.5.x | [Download r12487](https://mailbeez-support.com/cloudfiles/modified-shop_2.0.5.0-r12487-delta.zip) |
| <span id="modified-shop-v2-0-6-x"></span>2.0.6.x | [Download r13500](https://mailbeez-support.com/cloudfiles/modified-shop_2.0.6.0-r13500-delta.zip) |
| <span id="modified-shop-v2-0-7-x"></span>2.0.7.x | [Download r14473](https://mailbeez-support.com/cloudfiles/modified-shop_2.0.7.0-r14473-delta.zip) |
| <span id="modified-shop-v2-0-7-2-ph"></span>2.0.7.2+  · PHP 8.1 | [Download r14622](https://mailbeez-support.com/cloudfiles/modified-shop_2.0.7.2-r14622-delta.zip) |

## Install the package

1. <span id="installation"></span>Extract the archive. If your admin directory has been renamed, send the files from `admin/` to that directory.
2. Merge the package into the matching shop directories. Check `products_reviews_write.php` for review autologin, `inc/csrf_token.inc.php` for CSRF handling and `inc/xtc_update_whos_online.inc.php` for the exclusion of MailBeez requests. Packages before 2.0.3.0 also change `admin/includes/column_left.php` for the menu entry.
3. In **Administration → Partner Modules → MailBeez**, activate the integration and complete the MailBeez installation.

[plugin:content-inject](/content_blocks/run_installer)

[Earlier versions and shop modules](/legacy)
