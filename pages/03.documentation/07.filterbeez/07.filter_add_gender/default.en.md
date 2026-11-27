---
# http://learn.getgrav.org/content/headers
title: "Salutations"
module_subtitle: "Personalize email greetings"
slug: filter_add_gender
# menu: Add Gender
date: 08-04-2011
published: true
publish_date: 08-04-2011
# unpublish_date: 08-04-2011
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
    tag: [pro, "Personalize email greetings"]
module:
    code: 'filter_add_gender'
    category: [filterbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/04/icon_321.png'
    pro: 'pro'
    cert: 'true'
    price: '79 EUR'
    title_en: 'Add Gender'
    teaser_en: 'Different Email Content for men / women'
    title_de: 'Geschlechtsabh&auml;ngige Emails'
    teaser_de: 'Verschiedene Emails f&uuml;r Damen und Herren'
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

A wine merchant writes a formal German invitation to a tasting. One customer has supplied the details for a personal greeting. Another registered with only a name and email address. Both should receive a first line you would be happy to write by hand.

## Give the greeting a neutral fallback

Open **System → Extensions → Add-ons → Customer data and content** and select **Personalize email greetings**.

The add-on makes the gender value saved on the customer profile available to the template. Use a personal form of address when the stored value supports it. For an empty or unfamiliar value, a neutral “Guten Tag” works for this invitation. Keep the punctuation inside the matching greeting so there’s no stray comma or blank space.

Preview the German template with one profile from each case using [Preview & Test Data](/configbeez/preview-test-data). For an English invitation, a greeting such as “Hello” may already suit both readers.
