---
# http://learn.getgrav.org/content/headers
title: "Unsubscribe link"
module_subtitle: "Add an unsubscribe link for all emails"
slug: filter_add_block_all_url
# menu: Add Block All Link
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
    tag: [pro, "Add an unsubscribe link for all emails"]
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

A customer who receives your birthday greeting wants to stop all MailBeez mailings from your shop. The footer should make the scope clear before they click. A label such as “Unsubscribe from all MailBeez emails from this shop” tells them what will happen to future reminders, too.

## Add the global opt-out to a template

Open **System → Extensions → Add-ons → Consent and blocking** and select **Add an unsubscribe link for all emails**.

If the sender has excluded a module in the email-blocking settings, the global unsubscribe does not cover it. Check those exclusions before promising which messages will stop.

This helper supplies the recipient’s global opt-out link to the email template. Use the link generated for that message. Copying a link from someone else’s email would carry their recipient details into your test.

Check the footer in a message addressed to your own test account. If you also offer an opt-out for just one campaign, read both labels together. For an existing request to stop mail, see [Customer blocks](/filterbeez/filter_check_block_all).
