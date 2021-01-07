---
# http://learn.getgrav.org/content/headers
title: "Service: Sync internal newsletter subscription information"
slug: service_sync_newsletter_xtc
# menu: Service: Sync internal newsletter subscription information
date: 05-03-2014
published: true
publish_date: 05-03-2014
# unpublish_date: 05-03-2014
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


applies to: xtcommerce forks

**IMPORTANT: read this documentation before activating the module**

## Why

The latest release of modified-shop and Gambio contain some basic changes how newsletter subscription information is handled.

**before:**

Table "customers" contains a field "customers\_newsletter" (0 or 1) holding the newsletter subscription status. This status can be edited in the customer admin interface.

MailBeez utilises this status for: 
- basic check for newsletter subscription (you can configure MailBeez for doing this) 
- Newsletter Advanced Module: only customer with newsletter subscription will receive an email

**after:**

The field "customers\_newsletter" still exists, but is not updated any longer. In the modified-shop customer administration you can no longer edit this information.

The table "newsletter\_recipients" contains all Newsletter subscriber information, both for customers and prospects.

The MailBeez Framework does not check for this table.

The MailBeez Newsletter Advanced module provides an adapter to use this table as a source for "prospect" lists. That allows you to both contact separately customers and prospects.

## What happens?

When running this module the customer status from table "newsletter\_recipients" newsletter will be synchronised into the "customers" table. If there is not entry the status will be set to 0.

## What data can be lost?

When a customer is performing an "unsubscribe" the matching entry in table "newsletters\_recipients" will be deleted. So you can not tell, if a customer has unsubscribed.

For this reason after running the module only those customers with a matching entry in table "newsletter\_recipients" will still have a newsletter subscription.

Please check whether table "newsletter\_recipients" contains all current subscriber information.
