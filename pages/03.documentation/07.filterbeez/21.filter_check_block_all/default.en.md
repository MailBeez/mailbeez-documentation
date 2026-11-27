---
# http://learn.getgrav.org/content/headers
title: "Customer blocks"
module_subtitle: "Block emails to individual customers"
slug: filter_check_block_all
# menu: Block Customer Administration Check
date: 16-10-2012
published: true
publish_date: 16-10-2012
# unpublish_date: 16-10-2012
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
    tag: [pro, "Block emails to individual customers"]
module:
    code: 'config_block_admin'
    category: [filterbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    pro: 'pro'
    cert: 'true'      
# added collection selector

author:
    name: kelly
metadata:
    author: kelly
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

A customer asks why their reorder reminder never came. Their last order qualifies, but they previously used the link to stop all MailBeez emails. A global block can account for several missing campaigns at once.

## Find the scope of a block

Open **System → Extensions → Add-ons → Consent and blocking** and select **Block emails to individual customers**.

Look up the email address used on the order under [Reports → MailBeez → Contacts](/mailbeez-results/contacts) in **Opt-outs & blocks**. Check whether the entry applies to all modules or names a particular campaign. A module explicitly excluded from global blocking can still send. A block on review invitations alone would leave the reorder reminder to investigate separately.

If you find no applicable block, check the flow’s order status and delay, then look up the address under [Sending & status](/sending-status). A gap in the sending history on its own cannot tell you whether the customer opted out.
