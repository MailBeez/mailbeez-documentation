---
# http://learn.getgrav.org/content/headers
title: "Event log"
module_subtitle: "Review events recorded during an earlier MailBeez run"
slug: report_event_log
# menu: Event Log Viewer
date: 03-03-2011
published: true
publish_date: 03-03-2011
# unpublish_date: 03-03-2011
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
    tag: [core, "Event Log Viewer"]
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

[doc-callout type="note" title="Earlier MailBeez versions"]
To investigate an individual delivery in V5, open [Sending & status](/sending-status). [Browse the legacy reference](/legacy).
[/doc-callout]

Match the start and end of a run before investigating a missing email. A normal run starts with `MAILHIVE_RUN_INIT` and finishes with `MAILHIVE_RUN_COMPLETE`. For a test email, look for `MAILHIVE_TEST_INIT` and `MAILHIVE_TEST_COMPLETE`. If the start has no corresponding end, check the log at that time.

Read the events immediately before and after the gap you are investigating. That context helps distinguish an unfinished run from a completed run with no eligible recipients.

With module logging enabled, `MAILBEEZ_MODULE_INIT` identifies the module start. `PROD` marks a production run and `[SIM]` a simulation.
