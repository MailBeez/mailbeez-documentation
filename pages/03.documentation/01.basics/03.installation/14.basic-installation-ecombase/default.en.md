---
# http://learn.getgrav.org/content/headers
title: Basic Installation ecombase
slug: ID-1821
# menu: Basic Installation ecombase
date: 18-08-2011
published: true
publish_date: 18-08-2011
# unpublish_date: 18-08-2011
template: docs
# theme: false
visible: false
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

Use the installer for ECB 1.08 (MailBeez 2.5). The historical package specified PHP 5.3 or later. MailBeez creates its own tables.

Keep the original header from this shop. Comparing it with the example lets you add the MailBeez entry while retaining existing admin links.

[plugin:content-inject](/content_blocks/download_installer)

## Copy the shop files

<span id="step-1-copy-new-files"></span>Copy `catalog/admin/mailbeez.php` into the shop’s admin directory. Copy `catalog/mailhive/` and `catalog/mailhive.php` into the shop root alongside `index.php`.

## Add the admin menu entry

<span id="step-2-modify-existing-fi"></span><span id="1-add-a-menu-entry"></span>Open `admin/includes/header.php` in the shop installation.

Locate this fragment in the existing file.

```text
BOX_RSS => array('acl' => true,
                 'link' => array(FILENAME_CONFIGURATION, 'gID=27'),
                 'icon' => 'icon_rss.png'),
```

Insert the following immediately after that line.

```php
'MailBeez' => array('acl' => true,
                    'link' => 'mailbeez.php',
                    'icon' => '../../../mailhive/common/images/minibeez.png'),
```

## Grant access

<span id="step-3-add-permission"></span>Open `/mailhive.php` once on the shop domain to grant the primary administrator access. Grant additional administrators access separately in the shop administration.

[plugin:content-inject](/content_blocks/run_installer)
