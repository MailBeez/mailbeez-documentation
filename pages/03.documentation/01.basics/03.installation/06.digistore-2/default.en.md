---
# http://learn.getgrav.org/content/headers
title: Digistore 4.1
slug: digistore-2
# menu: Digistore 4.1
date: 22-09-2011
published: true
publish_date: 22-09-2011
# unpublish_date: 22-09-2011
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

Use the installer for DigiStore 4.1. The historical package specified PHP 5.3 or later. Check whether your release already includes MailBeez before copying files.

If the admin area already has a MailBeez entry, open it before copying files. Its screen will help you identify where the existing setup stopped.

[plugin:content-inject](/content_blocks/download_installer)

## Copy the shop files

<span id="step-1-copy-new-files"></span>Copy `catalog/admin/mailbeez.php` into the shop’s admin directory. Copy `catalog/mailhive/` and `catalog/mailhive.php` into the shop root alongside `index.php`.

## Add MailBeez to the email menu

<span id="step-2-modify-existing-fi"></span><span id="1-add-a-menu-entry"></span>Open `admin/includes/boxes/email.php` in the shop installation.

Locate this fragment in the existing file.

```text
'<a href="' . tep_href_link(FILENAME_CONFIGURATION, 'gID=12', 'NONSSL') . '" class="menuBoxContentLink">' . BOX_CONFIGURATION_EMAIL_OPTIONS . '</a>');
```

Replace the matching entry with the following.

```php
'<a href="' . tep_href_link(FILENAME_CONFIGURATION, 'gID=12', 'NONSSL') . '" class="menuBoxContentLink">' . BOX_CONFIGURATION_EMAIL_OPTIONS . '</a>'.
 '<a href="' . tep_href_link('mailbeez.php', '', 'NONSSL') . '" class="menuBoxContentLink">Mail Beez</a>');
```

[plugin:content-inject](/content_blocks/run_installer)
