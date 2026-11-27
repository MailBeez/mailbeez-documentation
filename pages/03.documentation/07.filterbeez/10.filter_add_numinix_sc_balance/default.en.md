---
# http://learn.getgrav.org/content/headers
title: "Numinix balance in emails"
module_subtitle: "Display a customer’s available store credit in a Zen Cart email"
slug: filter_add_numinix_sc_balance
# menu: Numinix Store Credit: Display Balance
date: 14-10-2011
published: true
publish_date: 14-10-2011
# unpublish_date: 14-10-2011
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
    tag: [pro, "Numinix Store Credit: Display Balance"]
# added collection selector
module:
    code: 'numinix_sc_balance_reminder'
    category: [filterbeez]
    compatiblity: [comp_zencart]
    pro: 'pro'
    cert: 'true' 
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

[doc-callout type="note" title="Earlier filter"]
For the filters you can configure in V5, open [Add-ons](/extensions/addons). [Browse the legacy reference](/legacy).
[/doc-callout]

Display the customer’s current credit balance in a Zen Cart email. The filter comes with [Numinix Store Credit: Balance Reminder](/mailbeez/numinix-store-credit-balance-reminder) and requires Numinix Store Credit & Reward Points. Add the balance field to the appropriate email template, then preview it with a customer who has credit. See [Numinix Store Credit: Review Rewards](/mailbeez/numinix_sc_review_reward) if a review should also earn credit.

Preview an email for a customer with a known balance. Compare the displayed amount with the credit in that customer’s shop account before using the template.
