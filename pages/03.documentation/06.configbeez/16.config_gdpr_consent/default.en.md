---
title: "Consent"
module_subtitle: "Manage customer consent"
slug: config_gdpr_consent
# menu: Antispam Regeln
date: 24-05-2018
published: true
publish_date: 24-05-2018
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
# added collection selector
taxonomy:
    migration_status: done
    category: [docs]
    tag: [pro, "Manage customer consent"]
module:
    code: 'config_gdpr_consent'
    category: [configbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio,comp_saas]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2014/04/icon_32.png'
    pro: 'pro'
    cert: 'true'
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

A tea shop offers news about seasonal blends and, separately, asks buyers to review their orders. A subscriber should be able to recognize which messages they agreed to receive. A consent type gives that choice a name that your forms and MailBeez modules can use.

## Connect a consent type to its use

Open **System → Extensions → Add-ons → Consent and blocking** and select **Manage customer consent**.

[doc-steps]

[doc-step]
**Name the choice**

Choose **Edit types**. Give the consent a name that matches the wording on your form and enter its translations. Creating the type makes it available to your forms. The shopper records their choice through the connected signup or consent process.
[/doc-step]

[doc-step]
**Check which module requires it**

Where available, open **Assign consents** and check which type the review invitation requires. Use a test address to complete the actual form and compare the recorded choice with the wording you accepted. For newsletter signup, see [Signup and confirmation](/contacts/signup-confirmation).
[/doc-step]

[/doc-steps]
