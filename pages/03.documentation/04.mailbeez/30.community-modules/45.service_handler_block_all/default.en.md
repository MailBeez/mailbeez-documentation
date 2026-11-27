---
# http://learn.getgrav.org/content/headers
title: "Global unsubscribe handler"
module_subtitle: "Process requests to unsubscribe from all MailBeez emails"
slug: service_handler_block_all
# menu: Service: Block-All Handler
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
    tag: [pro, "Service: Block-All Handler"]
module:
    code: 'config_block_admin'
    category: [configbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    pro: 'pro'
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

[doc-callout type="note" title="Earlier MailBeez versions"]
To investigate an individual delivery in V5, open [Sending & status](/sending-status). [Browse the legacy reference](/legacy).
[/doc-callout]

When a customer blocks all MailBeez emails, this older internal service processes the request for the opt-out add-on. Check or manage the recorded preference in [Advanced Opt-Out with Admin](/configbeez/config_block_admin).

A recipient who blocks all mail expects future campaigns to respect that choice. When tracing a complaint, check the address and the scope of its saved preference.
