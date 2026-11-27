---
# http://learn.getgrav.org/content/headers
title: xtCommerce 3.04
slug: basic-installation-xtcommerce
# menu: xtCommerce 3.04
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

Use the installer for xt:Commerce 3.04. The historical package specified PHP 5.3 or later. MailBeez creates its own tables.

Two shops on this release may use different menu files. Identify the file used by your admin area before applying either historical example.

[plugin:content-inject](/content_blocks/download_installer)

## Copy the shop files

<span id="step-1-copy-new-files"></span>Copy `catalog/admin/mailbeez.php` into the shop’s admin directory. Copy `catalog/mailhive/` and `catalog/mailhive.php` into the shop root alongside `index.php`.

## Choose the matching admin menu

<span id="step-2-modify-existing-fi"></span><span id="1-add-a-menu-entry"></span>The historical packages document two menu layouts. Check which file builds the menu in your shop before making an edit.

Open `admin/includes/column_left.php` in the shop installation.

Locate this fragment in the existing file.

```text
' . BOX_IMPORT . '</a><br>';
```

Insert the following immediately after that line.

```php
if (($_SESSION['customers_status']['customers_status_id'] == '0') && ($admin_access['module_newsletter'] == '1')) echo '<li><a href="' . xtc_href_link('mailbeez.php') . '"> -MailBeez</a></li>';
```

For a shop using `admin/includes/column_top.php`, place the following entry with the other menu entries in that file.

```php
if (($_SESSION['customers_status']['customers_status_id'] == '0') && ($admin_access['module_newsletter'] == '1')) echo '<li><a href="' . xtc_href_link('mailbeez.php') . '"> -MailBeez</a></li>';
```

## Grant access

<span id="step-3-add-permission"></span>Open `/mailhive.php` once on the shop domain to grant the primary administrator access. Grant additional administrators access separately in the shop administration.

[plugin:content-inject](/content_blocks/run_installer)
