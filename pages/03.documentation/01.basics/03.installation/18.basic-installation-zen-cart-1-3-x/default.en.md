---
# http://learn.getgrav.org/content/headers
title: Zen Cart 1.3.x
slug: basic-installation-zen-cart-1-3-x
# menu: Zen Cart 1.3.x
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

MailBeez works with Zen Cart v1.3.8 and v1.3.9f-h, running on PHP 5.2.11 and higher


The installation is straight forward and can be done in a couple of minutes by following these steps:

- copy new files
- Install MailBeez

MailBeez is maintaining it’s own tables – the shops existing table stay as they are.


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

In the MailBeez fileset, navigate to **extras\_zencart > zencart\_1.3.x > admin** and copy its content into your stores admin directory.

Log in to your store admin and navigate to Tools > MailBeez. Click the “Install” button:


## Adoption of Zen-Cart

**Quick Solution:** configure a SMTP Email Server in MailBeez > Configuration > Email Engine. This will bypass the zencart email function and give MailBeez full control for sending emails

If would like MailBeez to use its own template system to generate MailBeez email (recommended), rather than integrating with and using Zen Cart’s email template system to generate MailBeez email (default), please do the following:

1. Using your FTP program, download includes/functions/functions\_email.php from your server to your local drive (i.e. your computer)
2. Using a text editing program such as Notepad or Notepad++, find this line of code:


`$email_html = zen_build_html_email_from_template($module, $block);`

1. And change it as described on:  
<http://www.zen-cart.com/showthread.php?158085-Mailbeez-After-Sales-Modules&p=1170912#post1170912>

This code change tells Zen Cart to check if the content contains a valid html tag, and if not, applies the Zen Cart template system.
