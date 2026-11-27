---
# http://learn.getgrav.org/content/headers
title: "Daily send limit"
module_subtitle: "Limit flow emails per day"
slug: filter_do_limit
# menu: Simple Throttling
date: 08-04-2011
published: true
template: docs
visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: review
    category: [docs]
    tag: [pro, "Limit flow emails per day"]
module:
   code: 'filter_do_limit'
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

You’ve just enabled review invitations after a busy sale. You want to send at most 100 flow emails a day while your support team handles the replies. If MailBeez has already sent 80 qualifying flow emails today, 20 remain for the other flows that day.

## Set a daily allowance for flows

Open **System → Extensions → Add-ons → Sending and scheduling** and select **Limit flow emails per day**.

Set **Trigger emails per day** to the total for the shop. All eligible trigger modules draw on that allowance. The count uses the database server’s calendar day and excludes newsletters and test sends.

A value of zero stops eligible flow emails. To lift the daily limit, disable this add-on. If your delivery provider also limits how quickly you can send, check [Sending rate](/filterbeez/filter_do_throttling_simple).
