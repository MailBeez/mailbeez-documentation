---
# http://learn.getgrav.org/content/headers
title: osCMax 2.0
slug: basic-installation-oscmax
# menu: osCMax 2.0
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

Use the installer for osCMax 2.0.25. The historical package specified PHP 5.3 or later.

Registering the file and granting group access are separate steps. Both matter when a staff member needs to open MailBeez from the shop admin.

[plugin:content-inject](/content_blocks/download_installer)

## Copy the shop files

<span id="step-1-copy-new-files"></span>Copy `catalog/admin/mailbeez.php` into the shop’s admin directory. Copy `catalog/mailhive/` and `catalog/mailhive.php` into the shop root alongside `index.php`.

## Register the filenames

<span id="step-2-modify-existing-fi"></span><span id="1-add-the-filename-defini"></span>Open `admin/includes/filenames.php` in the shop installation.

Add the admin filename definition.

```php
define('FILENAME_MAILBEEZ', 'mailbeez.php');
define('FILENAME_HIVE', 'mailhive.php');
```

Open `includes/filenames.php` in the shop installation.

Add the storefront filename definition.

```php
define('FILENAME_HIVE', 'mailhive.php');
```

## Add the admin menu entry

<span id="2-add-a-menu-entry"></span>Open `admin/includes/boxes/tools.php` in the shop installation.

Locate this fragment in the existing file.

```text
tep_admin_files_boxes(FILENAME_WHOS_ONLINE, BOX_TOOLS_WHOS_ONLINE, TOP));
```

Replace the matching entry with the following.

```php
tep_admin_files_boxes(FILENAME_WHOS_ONLINE, BOX_TOOLS_WHOS_ONLINE, TOP) . tep_admin_files_boxes(FILENAME_MAILBEEZ, 'MailBeez', TOP));
```

## Grant group access

1. <span id="step-3-add-admin-access"></span>Under **Administrator → File Access**, open **Tools → store files**, choose `mailbeez.php` and save.
2. Under **Administrator → Member Groups → Groups**, choose the group and open **new permission**. Select `mailbeez.php` under **Tools**. Repeat for each group that needs access.

[plugin:content-inject](/content_blocks/run_installer)
