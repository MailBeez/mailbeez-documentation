---
title: Simulation
slug: config_simulation
date: 28-09-2015
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
    tag: [core]
author:
    name: admin
metadata:
    author: admin
---

MailBeez distinguishes between the follow modes:

1. **Simulation**
2. **Production**


### Simulation [SIM]

In Simulation-Mode you can run any module - all emails are generated using real customer data, but they are sent only to the configured simulation email address.

That allows you to test every module and check exactly what would be sent to your customers in production mode.

Simulation emails and coupons are marked with [SIM]. 

With restarting a simulation all recorded data will be deleted.

### Production

Once you are happy with the results of your simulation runs you can switch into "production" mode. When running a module in production mode alle emails are generated and sent to your customers.