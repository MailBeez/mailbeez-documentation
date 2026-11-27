---
# http://learn.getgrav.org/content/headers
title: "Embed a signup form"
module_subtitle: "Add a newsletter subscription form to a storefront page"
slug: site_signup
date: 28-06-2018
published: true
publish_date: 28-06-2018
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
    tag: [pro]
module:
    code: 'site_signup'
    category: [sitebeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio,comp_saas]
    pro: 'pro'

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

Add the newsletter form to the page where shoppers decide to subscribe, such as the footer or a newsletter landing page. Your shop needs the signup integration and support for newsletter subscribers.

Give the form a specific promise, such as a monthly overview of new products. That gives visitors a reason to subscribe and sets an expectation your newsletter can meet.

1. Open **Contacts → Signup Confirmation** and find the signup form in the flow.
2. In the signup trigger menu, choose **Integration code**. In **Site signup integration**, copy the JavaScript snippet for your shop into the page where you want the form.
3. Test the form as a new prospect and as an existing customer. Follow the confirmation link in each message.

For an older SiteBeez installation, the direct form uses `mailhive.php?m=mb_newsletter&ma=signup`. The optional `topics` parameter accepts comma-separated topic IDs. A custom button uses `data-sitebeez-trigger="custom_code"` with the matching widget option.
