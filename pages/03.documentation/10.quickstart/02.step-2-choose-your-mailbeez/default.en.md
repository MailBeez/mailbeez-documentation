---
# http://learn.getgrav.org/content/headers
title: "Choose an automation"
slug: step-2-choose-your-mailbeez
# menu: Step 2: Choose your MailBeez
date: 27-05-2010
published: true
publish_date: 27-05-2010
# unpublish_date: 27-05-2010
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

Choose an event you can reproduce, such as a new registration or a test order reaching the shipped status. A test email lets you check the message itself. To check whether the flow selects the right recipient, you’ll also need a matching event in the shop.

1. Open **Campaigns → Automations → MailBeez Flows**. Choose the matching flow. If it is missing, **Add Automation** shows modules available for your shop.
2. Check who qualifies and when the first email can go out. For a review request, allow time for the order to reach the buyer.
3. Preview the email, send a test to your own inbox and try its main link.
4. Before triggering the event, check the mode and inbox for the scheduled run in [Simulation Mode](/configbeez/config_simulation). Trigger the event in your shop and note the time. Once the wait ends, [check the next scheduled run](/quickstart/step-3-set-forget).
