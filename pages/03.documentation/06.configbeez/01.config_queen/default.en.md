---
# http://learn.getgrav.org/content/headers
title: "Core Settings"
module_subtitle: "Choose which order statuses count towards reported revenue"
slug: config_queen
routes:
    aliases:
        - /dokumentation/installation/config_queen
        
# menu: Update MailBeez Framework
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
    tag: [core]
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

Choose which order statuses count towards reported revenue. If a cancelled order should drop out of the total, leave the cancelled status out of the selection. Two shops can report different revenue for the same orders if they count different statuses.

Open **System → Configuration** and select **Core Settings**.

Check the options for manual runs here as well.

<span id="settings-to-check"></span>

## Which orders count as revenue?

- **Valid revenue order statuses**<br>
  Choose at least one status for valid revenue orders. Include cancelled or refunded orders only if they should count. Partial refunds are not automatically deducted.
