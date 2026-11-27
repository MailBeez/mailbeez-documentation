---
title: "Shopauskunft"
module_subtitle: "Import reviews from Shopauskunft"
slug: config_shopauskunft_integration
routes:
    default: /documentation/configbeez/config_shopauskunft_integration
date: 08-02-2012
published: true
publish_date: 08-02-2012
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
    tag: [pro, "Import reviews from Shopauskunft"]
module:
    code: config_shopauskunft_integration
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
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2012/02/icon_64.png'
    pro: pro
    cert: 'true'
    price: '159 EUR'
    title_en: 'Shopauskunft Integration Suite'
    teaser_en: 'Integrate your valuable Ratings in MailBeez Campaigs and your Storefront (SEO)'
    title_de: 'Shopauskunft Integration Suite'
    teaser_de: 'Integrieren Sie Ihre wertvollen Bewertungen in MailBeez Kampagnen und den Shop (SEO)'
    author: MailBeez.com
author:
    name: admin
metadata:
    author: admin
---

A customer praises the packaging of a framed print on Shopauskunft. You’d like to show the review in your shop, but yesterday’s reviews are still the newest ones you can see. MailBeez can reuse a downloaded feed for a set time. Check its age and the number requested before changing the connection.

## Choose how many reviews to request and when to refresh them

Open **System → Extensions → External services** and select **Import reviews from Shopauskunft**.

[doc-steps]

[doc-step]
**Identify your shop**

Enter the token supplied by Shopauskunft under **Shopauskunft partner token**. Under **Reviews requested from Shopauskunft**, zero requests up to 100 reviews. The service may return fewer.
[/doc-step]

[doc-step]
**Check the next request**

Set **Review cache duration (minutes)** and save. Once the cache expires, the next request fetches the feed again. Choose **Test feed** and look for the comment about the print. Check that its date and shop match the original review.
[/doc-step]

[/doc-steps]

To invite a buyer to contribute another review, use the [Shopauskunft flow](/mailbeez/shopauskunft_advanced).
