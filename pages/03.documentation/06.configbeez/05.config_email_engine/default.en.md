---
# http://learn.getgrav.org/content/headers
title: Email Engine Configuration
slug: config_email_engine
routes:
    aliases:
        - /documentation/installation/config_queen/email-engine-configuration
        - /documentation/installation/config/config_email_engine

# menu: Email Engine Configuration
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


You can choose, which delivery engine MailBeez should use to send out the generated Emails:


1. **Shop (default)**: Email-Function of your Shop-System
1. **Mailbeez.Email (recommended)**: Email delivery through MailBeez.Email Servers
1. **SMTP**: any SMTP Server

###Shop (default)

With the default setting MailBeez is utilizing the email function of your shop system to send out emails.

| Advantage                              | Disadvantage
|----------------------------------------|----------------------------------------------
| no configuration necessary             | check for email limit of your mail server
| no additional costs                    | risk of spam rating on your mail server
|                                        | delivery rates are depending on your mail server, typically less than 50%



###MailBeez.Email (recommended)
All MailBeez User are eligible to sent their Emails through [MailBeez.Email](https://mailbeez.email) servers (at addtional costs)

Read more on [MailBeez.Email](https://mailbeez.email).

| Advantage                                                   | Disadvantage
|-------------------------------------------------------------|----------------------------------------------
| bypass spam filters thanks to server certificates           | SPF and DKIM configuration required - we are happy to assist!
| Whitelisting all relevante recipients                       | additional costs, **typically covered by increased delivery rates**
| No throttling required                                      |  |
| You don't have to worry about blacklists, spam ratings etc. |  |
| Gmail compliant DMAR authentication                         |  |
| Gmail compliant header                                      |  |



### SMTP

This option allows you to configure any SMTP server.

| Advantage                                    | Disadvantage
|---------------------------------------------|----------------------------------------------
| any STMP server can be configured           | configuration efforts
| support for  DKIM                      | risk of spam rating on your mail server
| no additional costs                   | delivery rates are depending on your mail server, typically less than 50%  |
| Gmail compliant header                                      |  |


Settings for using Gmail Email-Servers:
```bash
 smtp.gmail.com
 Auth: true
 security: ssl
 Port: 465
```




### Error Sending Emails <a id="error"></a>

In case the SMTP server throws an error when trying to send an email, this email will be marked with `message_id=-1`.

The system status overview will tell you, how many errors have occurred.

With click on the tool symbol, you can choose between following actions to resolve the situation:


####Restart
The faulty entries will be deleted from your system. Depending on the timing and module configuration the system will try to send them again.

####Ignore
The faulty entries will be marked, and the system will not try to send them again.

>>>>>>Please check the configuration of your SMTP server in case you get many errors. Some SMTP-Server might be configured to send only emails with a specific sender domain. So for a different sender-domain the SMTP-Server will quit with an error.
