---
# http://learn.getgrav.org/content/headers
title: "Address blocklist"
module_subtitle: "Block email addresses by pattern"
slug: filter_check_pattern_blacklist
routes:
    aliases:
    - /documentation/filterbeez/pattern-blacklist
# menu: Pattern Blacklist
date: 26-09-2011
published: true
publish_date: 26-09-2011
# unpublish_date: 26-09-2011
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
    tag: [pro, "Block email addresses by pattern"]
module:
   code: 'filter_check_pattern_blacklist'
   category: [filterbeez]
   compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio,comp_saas]
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

Your team orders spare parts with test addresses every time it checks the checkout. Those accounts should stay out of customer emails. If they all use a dedicated domain, one address rule can cover them without adding each tester individually.

## Match a distinctive piece of the address

Open **System → Extensions → Add-ons → Filters** and select **Block email addresses by pattern**.

Enter one literal string per line under **Email address text to block**. The match is case-sensitive and can occur anywhere in the address. Asterisks are treated as text.

For example, `@test.example` matches `alex@test.example` and also `alex@test.example.org`. It leaves `alex@shop.example` alone. Compare the intended matches with a similar address you want to keep before enabling the rule. To block a particular customer across campaigns, see [Customer blocks](/filterbeez/filter_check_block_all).
