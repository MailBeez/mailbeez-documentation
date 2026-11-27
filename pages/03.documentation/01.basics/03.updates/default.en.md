---
# http://learn.getgrav.org/content/headers
title: Updating the MailBeez Core System
slug: updates
routes:
  default: /documentation/updates
  aliases:
    - /documentation/installation/config
  
menu: Updates
published: true
template: docs
# theme: false
visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    category: docs
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

[doc-callout type="note" title="Earlier MailBeez versions"]
[Browse the legacy reference](/legacy).
[/doc-callout]

The update tool introduced in MailBeez 3.0 replaces the Core files in an older shop. Before starting, record the installed version and save a separate copy of any local changes. You can then compare them with the updated files.

## Update from a notification

1. <span id="update-after-receiving-no"></span>Open the version notification in MailBeez and start the update tool.
2. The tool checks the server, downloads the package and checks that it can write every required file. Resolve any permission errors before continuing.
3. Let it back up `/mailhive` and write the new files. Return to the administration and check the update notification.

If the backup stalls on a release before 3.3.4, remove only files beginning with `appcache_` from `/mailhive/common/templates_c` and retry. From 3.3.4 the updater clears these cache files itself.

## Start the updater manually

<span id="update-manually"></span>On the shop’s MailBeez admin URL, set the query parameter `cloudloader_mode=update_core`. For example, open `https://shop.example/admin/mailbeez.php?cloudloader_mode=update_core` and follow the same checks.

<span id="update-using-ftp"></span>If the updater cannot finish, download the [Core package](https://apps.mailbeez.com/api/public/v1/core/get), unpack it locally and upload the files to the corresponding locations on the shop server using FTP.
