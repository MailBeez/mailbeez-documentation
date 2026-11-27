---
# http://learn.getgrav.org/content/headers
title: osCommerce 2.2
slug: basic-installation-oscommerce
# menu: osCommerce 2.2
date: 21-05-2010
published: true
publish_date: 21-05-2010
# unpublish_date: 21-05-2010
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

Use the installer for osCommerce MS2.2 / rca2. The historical package specified PHP 5.3 or later.

[plugin:content-inject](/content_blocks/download_installer)

## Copy the shop files

<span id="step-1-copy-new-files"></span>Copy `catalog/admin/mailbeez.php` into the shop’s admin directory. Copy `catalog/mailhive/` and `catalog/mailhive.php` into the shop root alongside `index.php`.

## Add the admin menu entry

<span id="step-2-modify-existing-fi"></span>Open `admin/includes/boxes/tools.php` in the shop installation.

Locate this fragment in the existing file.

```text
BOX_TOOLS_WHOS_ONLINE . '</a>'
```

Insert the following immediately after that line.

```php
. '<br><a href="' . tep_href_link(FILENAME_MAILBEEZ, '', 'NONSSL') . '">MailBeez</a><br>'
```

[plugin:content-inject](/content_blocks/run_installer)
