---
# http://learn.getgrav.org/content/headers
title: Email Design Elements
slug: email-design-elements
menu: Design Elements
date: 16-11-2016
published: true
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

[doc-callout type="note" title="Earlier MailBeez versions"]
[Browse the legacy reference](/legacy).
[/doc-callout]

<span id="perfect-rendering-of-all-"></span><span id="email-clients"></span><span id="web-based-clients"></span>If an older template looks different in two inboxes, reproduce the issue with the same message in both programs. The historical Litmus tests covered Apple Mail 8–10, Outlook 2010–2016, Windows 10 Mail, Thunderbird, iOS 7 and later, and webmail from AOL, Gmail, GMX, Mail.ru, Outlook.com and Web.de.

Keep the original message for comparison. If only one email program shows the issue, you can narrow your next test to the element that program renders differently.

- <span id="limitations"></span><span id="mobiles-showing-desktop-v"></span><span id="very-limited-rendering-br"></span>**Desktop layout on a phone**<br>
  Gmail for Android could display the desktop layout. Lotus Notes 7 and 8.5 had limited layout support.
- <span id="desktop-only-elements-sho"></span><span id="mobile-only-elements-show"></span><span id="unwanted-vertical-padding"></span>**Visibility and spacing**<br>
  Mobile-only elements could appear in Outlook 2000–2003, Lotus Notes and Comcast in Internet Explorer. Yahoo Mail could add vertical padding.
- <span id="background-image-not-show"></span>**Missing backgrounds**<br>
  Set a fallback background color so text remains readable. Earlier tests found missing images in Lotus Notes, Outlook 2007 mobile-only elements, Android 4.4, Gmail for Android and Comcast webmail.

Use [Responsive Emails with MailBeez](/basics/responsive-emails) to check the email in the clients your recipients use today.
