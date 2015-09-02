---
# http://learn.getgrav.org/content/headers
title: BounceHive Bounce Handling
slug: config_bouncehive_advanced
# menu: BounceHive Bounce Handling
date: 26-03-2012
published: true
publish_date: 26-03-2012
# unpublish_date: 26-03-2012
# template: false
# theme: false
visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration-status: review
    category: []
    tag: []
download:
    category: [configbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_gambio]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2012/05/icon_321.png'
    pro: 'pro'
    cert: 'true'
    price: '99 EUR'
    title_en: 'BounceHive Bounce Handling'
    teaser_en: 'Process Bounce Emails automatically'
    title_de: 'BounceHive R&uuml;ckl&auml;ufer-Verarbeitung'
    teaser_de: 'Bounce Emails automatisch verarbeiten'
    author: 'MailBeez.com'
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

 

## Requirements

- MailBeez V2.6
- A separate email account set up specifically for bounce handling & configured as an IMAP mailbox in your email client
- Use of MailBeez own built in Email Engine – PHPMailer
- Your server must allow you to connect to IMAP servers – Check with your hosting company, especially if you plan to use GMail, as some have blocked the GMail-specific port

## Get Your Bounced Emails Under Control

Bounced emails from outdated customer email addresses is a huge problem, especially for those shop owners using purchased email lists. Even if you send email only to those customers who have signed up to receive them, you can expect some bounced emails when inboxes are full, email addresses are changed, or servers are temporarily down.

Bounced emails that are not properly handled might result in an increased spam rating, so it is important to handle the inevitable email bounces that will come your way, and there’s no better way to do it than with the MailBeez BounceHive Bounce Handling module!

## Handle All Types of Bounces

The fully integrated BounceHive Bounce Handling from MailBeez allows you to automatically handle hard bounces, soft bounces and transient bounces:

**Hard Bounces:** Hard bounces result when email addresses are completely unknown, obsolete, or incorrect and will never be delivered to the recipient. Hard-Bounced email addresses are immediately blocked by MailBeez so that no further emails will be sent to these addresses.

**Soft Bounces:** Soft bounces result when email addresses have full mailboxes, their domain is temporarily down, or they’re currently not able to receive email for whatever reason. Soft-Bounces will cause MailBeez to wait the configured number of days before trying the send again.

After a configured number of soft-bounces, the next soft-bounce will be converted into a hard bounce and no further emails will be sent to that address.

**Transient Bounces:** A transient bounce occurs when a particular message can not yet be delivered, but the server is still trying. MailBeez will not do anything with these Bounces as they are informative in nature.

The bounces are stored using the customers’ email and the customers’ id. Both must match to block a sending, so when a customer has changed the email address to a valid email, the bounce-block for the old email will not affect the new sendings. Very cool!

## Set It & Forget It

Installation and configuration are fast and easy! Installation instructions are included in the download package. [Bounce Handling Configuration Tutorial](http://www.mailbeez.com/documentation/tutorials/configbeez-tutorials/bouncehive-bounce-handling-configuration-tutorial/)  
    
 [license\_2\_en]  
  
