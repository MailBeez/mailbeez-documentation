---
# http://learn.getgrav.org/content/headers
title: "Check automatic processing"
slug: step-3-set-forget
# menu: "Step 3: Set & Forget"
date: 27-05-2010
published: true
publish_date: 27-05-2010
# unpublish_date: 27-05-2010
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
    tag: []
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

A scheduled run checks which emails are due. If you mark a test order as shipped today and your review invitation has a seven-day wait, today’s run can finish with no invitation. Look for the first run inside the sending window after those seven days have passed.

## Check the first run

1. **Choose a contact who should qualify.** Check the flow’s trigger and timing. For a [review invitation](/mailbeez/review_advanced), count from the day the order reached the selected status. Pick a second contact who is still too early. Write down which address you expect to see.
2. **Test the selection.** In a test shop, run the flow in [Simulation Mode](/configbeez/config_simulation). Look for the first address in the results. The second should be absent. To check the subject, links and any offer in your inbox, enable simulation copies and check their destination. A coupon created in simulation can still be redeemable.
3. **Check the schedule.** In a self-hosted shop, open [Automatic processing](/configbeez/automatic-processing) and check what starts each run. In a hosted shop, check your account’s schedule. Confirm which mode the scheduled run uses. A successful manual simulation tells you who matched at that moment.
4. **Look up the first live send.** After the expected run, search for the address in [Sending & status](/sending-status). Open the send record to see which delivery events have arrived. If there’s no record, check when the run took place and whether the contact still met the flow’s conditions.
