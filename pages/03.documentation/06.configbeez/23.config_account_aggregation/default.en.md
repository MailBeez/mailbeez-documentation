---
title: "Merge accounts"
module_subtitle: "Merge matching guest and customer accounts"
slug: config_account_aggregation
routes:
    aliases:
        - /documentation/installation/config/config_account_aggregation
        
published: true
template: docs
# theme: false
visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: review
    category: [docs]
    tag: [pro, "Merge matching guest and customer accounts"]
module:
    code: 'config_account_aggregation'
    category: [configbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/09/certificate_32.png'
    pro: 'pro'
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

A café buys filters as a guest, then opens a trade account using the same email address. Its orders may now sit under several customer records. MailBeez can find accounts that share an address and bring their records together. If several people use the café’s mailbox, inspect the proposed matches especially carefully.

## Review matches before allowing a merge

Open **System → Extensions → Add-ons → Customer data and content** and select **Merge matching guest and customer accounts**.

[doc-steps]

[doc-step]
**Inspect the shop tables and a sample match**

Choose **Check tables** to see whether the add-on recognizes the tables in your shop. Enable **Simulate account aggregation**. Compare a proposed match with the café’s guest purchases and customer account before allowing changes.
[/doc-step]

[doc-step]
**Decide what the buyer should be able to do afterwards**

Check the customer group and login settings, especially when only guest records match. **Accounts per batch** limits the work in one run. Turning simulation off allows subsequent runs to change real customer records.
[/doc-step]

[/doc-steps]
