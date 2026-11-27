---
# http://learn.getgrav.org/content/headers
title: "idealo"
module_subtitle: "Import reviews from idealo"
slug: config_idealo_integration
routes:
    default: /documentation/configbeez/config_idealo_integration
# menu: Idealo Integration Suite
date: 15-04-2015
published: true
publish_date: 15-04-2015
# unpublish_date: 15-04-2015
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
    tag: [pro, "Import reviews from idealo"]
module:
    code: 'config_idealo_integration'
    category: [configbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]    
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

A replacement pump arrives before the weekend and the customer leaves an idealo review about the fast delivery. Your shop receives the review notification by email. MailBeez can read these notifications from an IMAP mailbox and move processed messages to a folder you choose.

## Read one notification from the right mailbox

Open **System → Extensions → External services** and select **Import reviews from idealo**.

[doc-steps]

[doc-step]
**Connect the notification mailbox**

Enter **IMAP server**, **IMAP username** and **IMAP password** for the mailbox that actually receives idealo reviews. Set **IMAP port** and **IMAP connection options** as required by the mail provider. Save, then choose **Test mailbox**.
[/doc-step]

[doc-step]
**Decide how to process incoming mail**

Choose a writable **Folder for processed messages** and set **Messages per import run**. Keep **Run during normal MailBeez processing** enabled unless a separate cron job runs the importer. **Start import** processes messages. Check the date of a known review against the notification in the processed folder.
[/doc-step]

[/doc-steps]

To ask a new buyer for feedback on idealo, use the [idealo invitation flow](/mailbeez/idealo_advanced).
