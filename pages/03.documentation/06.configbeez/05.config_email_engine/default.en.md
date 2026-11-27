---
# http://learn.getgrav.org/content/headers
title: "Sending method"
module_subtitle: "Connect a delivery service and verify the sender with a test email"
slug: config_email_engine
routes:
    aliases:
        - /documentation/installation/config_queen/email-engine-configuration
        - /documentation/installation/config/config_email_engine

# menu: Email Engine Configuration
date: 26-03-2012
published: true
publish_date: 26-03-2012
# unpublish_date: 26-03-2012
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

Have your delivery service’s connection details and a mailbox you can open. After connecting the service, send a test there. Check the sender customers will see and reply to the message to see where replies arrive.

Open **System → Configuration** and select **Sending method**.

Select the delivery service configured for your shop and enter the connection details supplied by that service. Check the connection and send a test to your own address before using it for campaigns.

<span id="settings-to-check"></span>

## Set thresholds for failed sends

- **Failure rate in 1 hour**<br>
  The default threshold is 5%. The check requires at least three failures in the hour.
- **Failure rate in 24 hours**<br>
  The default threshold is 2%. The check requires at least three failures in the 24-hour period.
