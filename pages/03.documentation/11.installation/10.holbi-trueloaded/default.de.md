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
    migration_status: review
    category: [docs]
    tag: []
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

The Installation of MailBeez 2.7+ is successfully tested with Holbi TrueLoaded, running on PHP 5.2.11

The installation is straight forward and can be done in a couple of minutes by following these two steps:

- copy new files
- modify existing files
- add admin access rights

### Requirements

You need to be able to upload new files to your TrueLoaded Shop and modify existing ones.

> FTP access to your TrueLoaded Installation

## Step 1 – copy new files

copy following file to your admin-directory

> mailbeez.php

copy following file and folder to your catalog-directory (where your index.php is located)

> mailhive (folder)
> 
> mailhive.php

## Step 2 – modify existing files

### Add a menu entry

located and open the file

> admin/includes/boxes/tools.php

find

> tep_admin_files_boxes(FILENAME_WHOS_ONLINE, BOX_TOOLS_WHOS_ONLINE) .

add in a new line

> // mailbeez
>     tep_admin_files_boxes('mailbeez.php', 'MailBeez') .
>     // - mailbeez

this will add the menu-entry “MailBeez” to your Tools-Box.

## Step 3: add admin access

### Add File Access

Administrator > File Access

1. Click Folder “Tools”
2. Click Button “store files”
3. Select “mailbeez.php” in dropdown list
4. Click Button “save”

### Assign Access Rights

Administrator > Member Groups

1. Click Button “Groups”
2. Select the Group you would like to give access to MailBeez
3. Click Button “new permission”
4. Check mailbeez.php in section “Tools”

repeat for any group you would like to give access to MailBeez

## Next Steps

Now that your MailBeez installation is complete, you are encouraged to visit our [ Guide to Getting Started](http://www.mailbeez.com/documentation/tutorials/guide-to-getting-started/) to familiarize yourself with MailBeez features and functionality, and to learn how to configure and customize your MailBeez installation to suit your needs.

No thanks, just take me to the [Quick Start Configuration tutorial](http://www.mailbeez.com/documentation/tutorials/mailbeez-quick-start-configuration-tutorial/)  
 No thanks, just take me to the [Comprehensive Configuration tutorial](http://www.mailbeez.com/documentation/tutorials/mailbeez-comprehensive-configuration-tutorial/)
