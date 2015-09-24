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

MailBeez works with osCMax v2.0.25, running on PHP 5.2+

The installation is straight forward and can be done in a couple of minutes by following these three steps:

- copy new files
- modify existing files
- add admin access

## Step 1 – copy new files

copy following file to your admin-directory

```bash
mailbeez.php
```


copy following file and folder to your catalog-directory (where your index.php is located)

```bash
mailhive (folder)
mailhive.php
```

## Step 2 – modify existing files

### 1. Add the filename definition

located and open the file

```bash
admin/includes/filenames.php

```


add e.g. at the end

```bash
define('FILENAME_MAILBEEZ', 'mailbeez.php');
define('FILENAME_HIVE', 'mailhive.php');

```


do almost the same for your catalog:

```bash
includes/filenames.php

```


add

```bash
define('FILENAME_HIVE', 'mailhive.php');

```


### 2. Add a menu entry

located and open the file

```bash
admin/includes/boxes/tools.php

```


find

```
tep_admin_files_boxes(FILENAME_WHOS_ONLINE, BOX_TOOLS_WHOS_ONLINE, TOP));
```

replace with

```
tep_admin_files_boxes(FILENAME_WHOS_ONLINE, BOX_TOOLS_WHOS_ONLINE, TOP) . tep_admin_files_boxes(FILENAME_MAILBEEZ, 'MailBeez', TOP));
```


this will add the menu-entry “MailBeez” to your Tools-Box. Feel free to place this link whereever you want.

### Step 3: add admin access

Administrator > File Access

1. Click Folder “Tools”
2. Click Button “store files”
3. Select “mailbeez.php” in dropdown list
4. Click Button “save”

Administrator > Member Groups

1. Click Button “Groups”
2. Select the Group you would like to give access to MailBeez
3. Click Button “new permission”
4. Check mailbeez.php in section “Tools”

repeat for any group you would like to give access to MailBeez


[plugin:content-inject](/content_blocks/run_installer)