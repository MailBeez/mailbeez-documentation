---
# http://learn.getgrav.org/content/headers
title: "Sending rate"
module_subtitle: "Space out emails during sending"
slug: filter_do_throttling_simple
routes:
    - aliases: /documentation/filterbeez/simple-throttling
# menu: Simple Throttling
date: 08-04-2011
published: true
publish_date: 08-04-2011
# unpublish_date: 08-04-2011
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
    tag: [pro, "Space out emails during sending"]
module:
   code: 'filter_do_throttling_simple'
   category: [filterbeez]
   compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
   pro: 'pro'
   cert: 'true'  
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

Your delivery provider allows 600 emails per hour. You have 300 backorder updates to send after a shipment arrives. With one run and a target of 600 an hour, allow roughly half an hour for those messages. If two runs send at the same time, their rates add up.

## Pace one processing run

Open **System → Extensions → Add-ons → Sending and scheduling** and select **Space out emails during sending**.

[doc-steps]

[doc-step]
**Set the hourly rate**

Enter a positive whole number under **Target emails per hour**. At 600 an hour, MailBeez spaces messages about six seconds apart within that run.
[/doc-step]

[doc-step]
**Choose a batch your server can finish**

Use **Emails per processing run** to limit the size of a run. A lower rate or a larger batch keeps the run open longer. If you also need a ceiling on the total number of flow emails for the day, use the [daily send limit](/filterbeez/filter_do_limit).
[/doc-step]

[/doc-steps]
