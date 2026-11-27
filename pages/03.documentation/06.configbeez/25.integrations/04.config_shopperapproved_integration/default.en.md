---
title: "Shopper Approved"
module_subtitle: "Import reviews from Shopper Approved"
slug: config_shopperapproved_integration
routes:
    default: /documentation/configbeez/config_shopperapproved_integration
date: 03-05-2011
published: true
publish_date: 03-05-2011
template: docs
visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: done
    category:
        - docs
    tag: ["pro", "Import reviews from Shopper Approved"]
module:
    code: config_shopperapproved_integration
    category:
        - configbeez
    compatiblity:
        - comp_osc
        - comp_cre
        - comp_digi
        - comp_zencart
        - comp_xtc
        - comp_xtcm2        
        - comp_gambio
    pro: pro
    cert: 'true'
    price: '159 EUR'
    title_en: 'ShopperApproved Integration Suite'
    teaser_en: 'Integrate your valuable ShopperApproved Ratings in MailBeez Campaigs and your Storefront (SEO)'
    title_de: 'ShopperApproved Integration Suite'
    teaser_de: 'Integrieren Sie Ihre wertvollen Bewertungen in MailBeez Kampagnen und den Shop (SEO)'
    author: MailBeez.com
author:
    name: admin
metadata:
    author: admin
---

A pet shop wants to put a customer’s comment about its first puppy-food delivery in a welcome email. First make sure the review reaches MailBeez. If it belongs to the shop’s second storefront, even a perfectly configured email template will show the wrong customer experience.

## Import reviews for one storefront

Open **System → Extensions → External services** and select **Import reviews from Shopper Approved**.

[doc-steps]

[doc-step]
**Use credentials from the same site**

Enter **Shopper Approved site ID** and **Shopper Approved API token** for the storefront whose reviews you want. Compare the site ID with the one in that storefront’s Shopper Approved account.
[/doc-step]

[doc-step]
**Check a known review**

Save and choose **Import reviews**, or wait for the next scheduled import. Leave **Run during normal MailBeez processing** on unless a dedicated cron job handles the import. Once the puppy-food comment is available, use [Reviews in emails](/filterbeez/filter_add_shopperapproved) to choose how many comments the welcome email should show.
[/doc-step]

[/doc-steps]
