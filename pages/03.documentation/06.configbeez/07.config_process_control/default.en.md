---
# http://learn.getgrav.org/content/headers
title: Process Controll
slug: config_process_control
date: 26-03-2012
published: true
publish_date: 26-03-2012
# unpublish_date: 26-03-2012
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
    tag: [core]
# added collection selector

author:
    name: admin
metadata:
    author: admin
---

This process controll subsystem makes sure that only one sending process can be active - otherwise there could be overlapping processes causing sending the same email multiple times!


>>>> Never change the default settings unless you know what you are doing!