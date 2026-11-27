---
# http://learn.getgrav.org/content/headers
title: osCommerce 2.3.x
slug: oscommerce-2-3-x
# menu: osCommerce 2.3.x
date: 26-01-2011
published: true
publish_date: 26-01-2011
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

Use the installer for osCommerce 2.3.x (original procedure for 2.3.1). The historical package specified PHP 5.3 or later.

Compare the example with your installed 2.3.x files before editing them. A customized admin menu can have extra entries that you will want to keep.

[plugin:content-inject](/content_blocks/download_installer)

## Copy the shop files

<span id="step-1-copy-new-files"></span>Copy `catalog/admin/mailbeez.php` into the shop’s admin directory. Copy `catalog/mailhive/` and `catalog/mailhive.php` into the shop root alongside `index.php`.

## Choose the admin integration

<span id="step-2-add-menu-entry"></span><span id="a-admin-plugin"></span>From 2.3.3, copy the admin plugin from the package to the matching shop path.

```text
extra_files/extras_osc_233x/admin/includes/boxes/customers_mailbeez.php → admin/includes/boxes/customers_mailbeez.php
```

<span id="b-add-a-menu-entry"></span>For the manual 2.3.x menu entry, open `admin/includes/boxes/tools.php`.

Locate this fragment in the existing file.

```text
array(
        'code' => FILENAME_WHOS_ONLINE,
        'title' => BOX_TOOLS_WHOS_ONLINE,
        'link' => tep_href_link(FILENAME_WHOS_ONLINE)
    )
```

Insert the following immediately after that line.

```php
// mailbeez
     ,
     array(
         'code' => 'mailbeez.php',
         'title' => 'MailBeez',
         'link' => tep_href_link('mailbeez.php')
     )
     // - mailbeez
```

[plugin:content-inject](/content_blocks/run_installer)
