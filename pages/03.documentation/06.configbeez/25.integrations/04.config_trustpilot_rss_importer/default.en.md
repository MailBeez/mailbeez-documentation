---
title: "Trustpilot"
module_subtitle: "Import reviews from Trustpilot"
slug: config_trustpilot_rss_importer
routes:
    default: /documentation/configbeez/config_trustpilot_rss_importer
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
    tag: ["pro", "Import reviews from Trustpilot"]
module:
    code: config_trustpilot_rss_importer
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
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/03/top_64.png'
    pro: pro
    cert: 'true'
    price: '159 EUR'
    title_en: 'Trustpilot Integration Suite'
    teaser_en: 'Integrate your valuable Trustpilot Ratings in MailBeez Campaigs and your Storefront (SEO)'
    title_de: 'Trustpilot Integration Suite'
    teaser_de: 'Integrieren Sie Ihre wertvollen Bewertungen in MailBeez Kampagnen und den Shop (SEO)'
    author: MailBeez.com
author:
    name: admin
metadata:
    author: admin
---

A coffee subscription shop and its equipment shop have similar names on Trustpilot. A comment about changing a delivery date belongs to the subscription shop. Use that comment to check you have connected the right public review feed before showing its ratings to subscribers.

## Use the feed for the right shop

Open **System → Extensions → External services** and select **Import reviews from Trustpilot**.

[doc-steps]

[doc-step]
**Enter the public feed address**

Paste the complete public RSS feed URL into **Trustpilot RSS feed URL**. Use the address of the feed itself. A profile page and the link customers follow to write a review serve different purposes.
[/doc-step]

[doc-step]
**Check the reviews after saving**

Choose **Test feed** and look for the comment about the delivery date. Set **Review cache duration (minutes)** to control how long MailBeez reuses a downloaded feed. The first request after expiry refreshes it. The feed and display settings determine how many reviews appear.
[/doc-step]

[/doc-steps]

If the customer has yet to write a review, the [Trustpilot invitation flow](/mailbeez/trustpilot_advanced) can start that process.
