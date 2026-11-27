---
# http://learn.getgrav.org/content/headers
title: "Schedule processing in an older shop"
slug: automating-mailbeez
# menu: Automating MailBeez
date: 28-04-2016
published: true
template: docs
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
    name: Stanley
metadata:
    author: Stanley

---

Use this guide if your older, self-hosted shop runs MailBeez Auto-run or MailBeez Auto-run Advanced. A review invitation may be due at 8 a.m., but something still has to start processing. Choose how that happens before narrowing the hours for an individual module.

## Choose what starts a run

- **MailBeez Auto-run**<br>
  A visit to the shop can start a run after the minimum interval. With a 12-hour interval and no visitors overnight, the morning run can wait until the first visit. Check that your shop has the required storefront integration.
- **Server cron job**<br>
  Use your hosting scheduler when a run needs to start even while the shop is quiet. Copy the private cron URL supplied by your installation into the scheduler. Requesting it starts processing in the configured mode. Check the mode before the first run.
- **MailBeez Auto-run Advanced**<br>
  Use the advanced module when different campaigns need different sending times. It can also use shop visits to start processing.

## Match a module to the schedule

In the older advanced module, **Default** includes the module in ordinary runs. **Direct** requires a request to its dedicated module URL. **Timed** restricts the module to the selected days and hours.

Suppose a review module is allowed to run on Tuesday between 8 and 9 a.m. A server run at 8:15 can process it. If the first visit is at 10, a visit-triggered run has missed the window. If the module runs only once a week, make its order-age window wide enough to include orders that became eligible between runs.

In V5, open [Automatic processing](/configbeez/automatic-processing) for the shop schedule and [Schedule sending by module](/configbeez/config_cron_advanced) for individual windows. MailBeez Services manages the schedule for hosted connections.
