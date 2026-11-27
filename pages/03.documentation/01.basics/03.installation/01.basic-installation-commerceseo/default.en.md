---
# http://learn.getgrav.org/content/headers
title: "Commerce:SEO 2.0"
slug: basic-installation-commerceseo
# menu: Commerce:SEO 2.0
date: 30-08-2011
published: true
publish_date: 30-08-2011
# unpublish_date: 30-08-2011
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

Use the installer for Commerce:SEO 2.0.x CE. MailBeez creates its own tables.

[plugin:content-inject](/content_blocks/download_installer)

## Copy the shop files

Copy `catalog/admin/mailbeez.php` into the shop’s admin directory. Copy `catalog/mailhive/` and `catalog/mailhive.php` into the shop root alongside `index.php`.

## Add the admin menu entry

Open `admin/includes/column_left.php` in the shop installation. A shop update can overwrite a manual menu edit.

Locate this fragment in the existing file.

```text
'" class="menuBoxContentLink">Newsletter';
```

Insert the following immediately after that line.

```php
if (($cs == '0') && ($aa['mailbeez'] == '1')) echo '<a href="' . xtc_href_link('mailbeez.php') . '">MailBeez</a>';
```

## Grant access

Open `/mailhive.php` once on the shop domain to grant the primary administrator access. Grant additional administrators access separately in the shop administration.

[plugin:content-inject](/content_blocks/run_installer)
