---
# http://learn.getgrav.org/content/headers
title: modified-shop 1.0x
slug: basic-installation-modified-shop
# menu: modified-shop 1.0x
date: 12-09-2010
published: true
publish_date: 12-09-2010
# unpublish_date: 12-09-2010
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

Use the installer for modified-shop 1.x. The historical package specified PHP 5.3 or later. MailBeez creates its own tables.

Use the steps for the 1.x shop layout. If you are maintaining a newer modified-shop, first find the package for its release and revision in the installation overview.

[plugin:content-inject](/content_blocks/download_installer)

## Copy the shop files

<span id="step-1-copy-new-files"></span>Copy `catalog/admin/mailbeez.php` into the shop’s admin directory. Copy `catalog/mailhive/` and `catalog/mailhive.php` into the shop root alongside `index.php`.

## Choose the menu edit for your version

<span id="step-2-modify-existing-fi"></span><span id="1-add-a-menu-entry"></span>Open `admin/includes/column_left.php` in the shop installation.

Up to version 1.05, use the following insertion point.

Locate this fragment in the existing file.

```text
' . BOX_IMPORT . '</a><br>';
```

Insert the following immediately after that line.

```php
if (($_SESSION['customers_status']['customers_status_id'] == '0') && ($admin_access['module_newsletter'] == '1')) echo '<li><a href="' . xtc_href_link('mailbeez.php') . '" class="menuBoxContentLink"> -MailBeez</a></li>';
```

From version 1.06, locate `//----HILFSPROGRAMME` in the same file. In that section, use this insertion point.

Locate this fragment in the existing file.

```text
echo ('</ul>');
```

Insert the following immediately before that line.

```php
if (($_SESSION['customers_status']['customers_status_id'] == '0') && ($admin_access['module_newsletter'] == '1')) echo '<li><a href="' . xtc_href_link('mailbeez.php') . '" class="menuBoxContentLink" > -MailBeez</a></li>';
```

## Grant access

<span id="step-3-add-permission"></span>Open `/mailhive.php` once on the shop domain to grant the primary administrator access. Grant additional administrators access separately in the shop administration.

[plugin:content-inject](/content_blocks/run_installer)
