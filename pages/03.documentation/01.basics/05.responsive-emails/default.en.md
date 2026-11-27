---
# http://learn.getgrav.org/content/headers
title: Responsive Emails with MailBeez
slug: responsive-emails
menu: Responsive Emails
date: 25-10-2013
published: true
publish_date: 25-10-2013
# unpublish_date: 25-10-2013
template: docs
# theme: false
visible: true
routes:
  default: /documentation/responsive-emails
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

<span id="what-are-responsive-email"></span><span id="did-you-know"></span>Test a campaign email with a long product name, an image and a link customers will use. A narrow screen shows whether someone can read the message and follow the link without scrolling sideways.

Try the same message with images turned off. A buyer should still be able to tell what the offer is and which link takes them back to the shop.

{{ page.find('/images').media['responsive.png'].html }}

1. <span id="you-can-make-your-mailbee"></span>Preview the email at desktop and mobile widths. Check where columns stack, whether the image scales and whether the main link is easy to tap.
2. <span id="devices-supporting-respon"></span>Send yourself a test email and open it in a mail program your customers use. Some programs display the desktop layout on a phone.
3. If an image forces the email wider than the screen, check its width in the template. Replace long visible URLs with short, descriptive link text. Preview and test again.

The [legacy reference](/legacy) records differences between email clients of the time. For example, the older template adapted to the screen in Android 4.x’s built-in email app, while the Galaxy S4 email app could display its desktop layout.

For client-specific results from older templates, see [Email Design Elements](/basics/email-design-elements). For the earlier editor, see [Responsive Template Manager](/configbeez/config_tmplmngr).
