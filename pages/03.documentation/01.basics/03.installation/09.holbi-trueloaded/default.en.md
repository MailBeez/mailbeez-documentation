---
# http://learn.getgrav.org/content/headers
title: Holbi Trueloaded
slug: holbi-trueloaded
# menu: Holbi Trueloaded
date: 04-12-2012
published: true
publish_date: 04-12-2012
# unpublish_date: 04-12-2012
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

<span id="requirements"></span>Use the installer for Holbi TrueLoaded. The historical package specified PHP 5.3 or later.

This installation also requires access for the admin group. If the file is present but another administrator cannot open it, check that group’s permissions.

[plugin:content-inject](/content_blocks/download_installer)

## Copy the shop files

<span id="step-1-copy-new-files"></span>Copy `catalog/admin/mailbeez.php` into the shop’s admin directory. Copy `catalog/mailhive/` and `catalog/mailhive.php` into the shop root alongside `index.php`.

## Add the admin menu entry

<span id="step-2-modify-existing-fi"></span><span id="add-a-menu-entry"></span>Open `admin/includes/boxes/tools.php` in the shop installation.

Locate this fragment in the existing file.

```text
tep_admin_files_boxes(FILENAME_WHOS_ONLINE, BOX_TOOLS_WHOS_ONLINE) .
```

Insert the following immediately after that line.

```php
// mailbeez
 tep_admin_files_boxes('mailbeez.php', 'MailBeez') .
 // - mailbeez
```

## Grant group access

1. <span id="step-3-add-admin-access"></span><span id="add-file-access"></span><span id="assign-access-rights"></span>Under **Administrator → File Access**, open **Tools → store files**, choose `mailbeez.php` and save.
2. Under **Administrator → Member Groups → Groups**, choose the group and open **new permission**. Select `mailbeez.php` under **Tools**. Repeat for each group that needs access.

[plugin:content-inject](/content_blocks/run_installer)
