---
# http://learn.getgrav.org/content/headers
title: CRE Loaded
slug: basic-installation-cre-loaded
# menu: CRE Loaded
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

Use the installer for CRE Loaded PCI CE 6.4.1a. The historical package specified PHP 5.3 or later.

[plugin:content-inject](/content_blocks/download_installer)

## Copy the shop files

<span id="step-1-copy-new-files"></span>Copy `catalog/admin/mailbeez.php` into the shop’s admin directory. Copy `catalog/mailhive/` and `catalog/mailhive.php` into the shop root alongside `index.php`.

From `extras_creloaded`, copy the integration files to these locations in the shop.

```text
admin/includes/runtime/applicationtop/MAILBEEZ_applicationtop_bottom.php  
admin/includes/runtime/marketing/MAILBEE_marketing_boxesbottom.php  
includes/runtime/applicationtop/MAILBEEZ_applicationtop_bottom.php
```

## Grant access in CRE Loaded B2B

<span id="step-2-cre-loaded-b2b-add"></span>Under **Administrator → Menu File Access**, select **Marketing → Insert File**. Choose `mailbeez.php` and save. Open **Marketing → MailBeez** to check the entry.

[plugin:content-inject](/content_blocks/run_installer)
