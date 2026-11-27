---
title: "Trusted Shops"
module_subtitle: "Import reviews from Trusted Shops"
slug: config_trustedshops_rss_importer
routes:
    default: /documentation/configbeez/config_trustedshops_rss_importer
date: 26-10-2011
published: true
publish_date: 26-10-2011
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
    tag: ["pro", "Import reviews from Trusted Shops"]
module:
    code: config_trustedshops_rss_importer
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
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/10/icon_328.png'
    pro: pro
    cert: 'true'
    price: '159 EUR'
    title_en: 'Trustedshops Integration Suite'
    teaser_en: 'Integrate your valuable Trustpilot Ratings in MailBeez Campaigs and your Storefront (SEO)'
    title_de: 'Trustedshops Integration Suite'
    teaser_de: 'Integrieren Sie Ihre wertvollen Bewertungen in MailBeez Kampagnen und den Shop (SEO)'
    author: MailBeez.com
author:
    name: admin
metadata:
    author: admin
---

You sell cast-iron pans in a retail shop and kitchen equipment through a trade storefront. Both collect Trusted Shops reviews. To show consumers the reviews for the retail shop, start with its Trusted Shops ID and a comment you can recognize from that profile.

## Connect the matching Trusted Shops profile

Open **System → Extensions → External services** and select **Import reviews from Trusted Shops**.

[doc-steps]

[doc-step]
**Select the storefront**

Enter its identifier under **Trusted Shops ID**. Save and choose **Test feed**. Compare the returned shop and a recent review with the retail profile before using the reviews in emails.
[/doc-step]

[doc-step]
**Set a useful refresh interval**

**Review cache duration (minutes)** controls how long MailBeez reuses a download. The next request after expiry fetches the feed again. The number shown also depends on the feed and the display settings. **Maximum imported reviews** is a legacy setting and does not guarantee a particular count.
[/doc-step]

[/doc-steps]

To send invitations to buyers, open the [Trusted Shops flow](/mailbeez/trustedshops_advanced).
