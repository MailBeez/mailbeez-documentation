---
# http://learn.getgrav.org/content/headers
title: Digistore up to 4.0
slug: digistore
# menu: Digistore up to 4.0
date: 24-08-2010
published: true
publish_date: 24-08-2010
# unpublish_date: 24-08-2010
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

Use the installer for DigiStore 4.0. The historical package specified PHP 5.3 or later.

[plugin:content-inject](/content_blocks/download_installer)

## Copy the shop files

<span id="step-1-copy-new-files"></span>Copy `catalog/admin/mailbeez.php` into the shop’s admin directory. Copy `catalog/mailhive/` and `catalog/mailhive.php` into the shop root alongside `index.php`.

## Add MailBeez to the email menu

<span id="step-2-modify-existing-fi"></span><span id="1-add-a-menu-entry"></span>Open `admin/advanced_menu.php` in the shop installation.

Locate this fragment in the existing file.

```text
stm_aix("p7i3","p0i0",[0,"    <?php echo   BOX_CONFIGURATION_EMAIL_OPTIONS?>  ","","",-1,-1,0,"configuration.php?gID=12"]);
```

Insert the following immediately after that line.

```javascript
stm_aix("p7i3","p0i0",[0,"    MailBeez   ","","",-1,-1,0,"mailbeez.php"]);
```

[plugin:content-inject](/content_blocks/run_installer)
