---
# http://learn.getgrav.org/content/headers
title: List Tracking Data
slug: report_track
# menu: List Tracking Data
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
    migration-status: review
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

(English)

## The Email Tracking Report

MailBeez tracks every email it sends out. This tracking data is used to cross-check a module’s email against the customers, thereby preventing the same customer from receiving the same email more than once.

Delivered with the MailBeez framework software, this report helps you to understand which emails have been sent to which customers by displaying the data broken down by module.

The report will even tell you which mode you were in when the email was sent:

- PROD - MailBeez was executed in Production Mode
- [SIM] – MailBeez was executed in Simulation Mode

**Note:**Email tracking & reporting only works in simulation mode when configured properly. Please go to **Configuration tab > Simulation > ”Edit” > Enable Tracking in Simulation Mode** and set it to “True”.

To delete the opt-out data collected while in simulation mode, click the Simulation “Restart” button.
