---
# http://learn.getgrav.org/content/headers
title: "Customer details"
module_subtitle: "Include more customer details in emails"
slug: filter_add_customer_information
routes:
    aliases:
        - /documentation/filterbeez/extended-customer-information
# menu: Extended Customer Information
date: 26-09-2011
published: true
publish_date: 26-09-2011
# unpublish_date: 26-09-2011
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
    tag: [pro, "Include more customer details in emails"]
module:
   code: 'filter_add_customer_information'
   category: [filterbeez]
   compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
   pro: 'pro'
   cert: 'true'       
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

Your coffee wholesaler wants account emails to mention the café’s company name. Retail customers buy the same beans, but their company field is usually empty. The add-on makes stored customer details available to the template so you can write a message that reads naturally in both cases.

## Use a field from the customer’s default address

Open **System → Extensions → Add-ons → Customer data and content** and select **Include more customer details in emails**.

For the company name, the template field is `$data.customer.company`. It comes from the default address on the customer account. A parcel’s delivery address can be different. Use the saved company name only where the message concerns the customer account.

Choose two profiles under [Preview & Test Data](/configbeez/preview-test-data). Preview the template with the café, then with a private customer. Check that the company appears for the café and that a missing name leaves a complete sentence for the private customer.
