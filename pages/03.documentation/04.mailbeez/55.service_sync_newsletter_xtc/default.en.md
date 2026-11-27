---
# http://learn.getgrav.org/content/headers
title: "Newsletter subscription sync"
module_subtitle: "Compare the store’s newsletter subscription records with MailBeez"
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
    tag: [core, "Service: Sync internal newsletter subscription information"]
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
To review the newsletter confirmation flow in V5, open [Signup Confirmation](/contacts/signup-confirmation). [Browse the legacy reference](/legacy).
[/doc-callout]

<span id="why"></span>Use this reference when maintaining an older modified-shop or Gambio installation that moved newsletter subscriptions to `newsletter_recipients`. The shop could still have a `customers.customers_newsletter` field even after it stopped updating that field.

A customer account and an entry in the newsletter recipient table can describe the same person. Compare both records for a test address before interpreting a mismatch.

<span id="what-happens"></span>

> [!WARNING]
> <span id="what-data-can-be-lost"></span>Before running the service, check that `newsletter_recipients` contains all current subscribers. A customer with no matching entry gets a subscription status of `0`. A deleted entry alone cannot tell you whether the person unsubscribed or was never subscribed.

The legacy MailBeez subscription check read the customer field. Newsletter Advanced could also read the recipient table for prospect lists. The synchronization service copies the current status from the recipient table into each customer record. Check a known subscriber and an unsubscribed account before using the synchronized field to select an audience.
