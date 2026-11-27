---
# http://learn.getgrav.org/content/headers
title: "Shopauskunft-Gutscheine"
module_subtitle: "Eine Shopauskunft-Bewertung mit einem persönlichen Gutschein belohnen"
slug: coupon_review_shopauskunft
# menu: Shopauskunft: Gutschein für Bewertungen
date: 08-02-2012
published: true
publish_date: 08-02-2012
# unpublish_date: 08-02-2012
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
    tag: [pro,coupon, "Shopauskunft: Gutschein für Bewertungen"]
module:
    code: 'coupon_review_shopauskunft'
    category: [mailbeez]
    compatiblity: [comp_cre,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2012/02/icon_641.png'
    pro: 'pro'
    cert: 'true'
    price: '99 EUR'
    title_en: 'Shopauskunft Review Reward'
    teaser_en: 'Reward customers Shopauskunft Reviews with a discount voucher'
    title_de: 'Shopauskunft: Gutschein f&uuml;r Bewertungen'
    teaser_de: 'Bedanken Sie sich f&uuml;r Bewertungen auf Shopauskunft - mit einem Gutschein'
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

[doc-callout type="note" title="Frühere MailBeez-Versionen"]
In V5 kannst du unter [Gutscheine](/content/coupons) einen erzeugten Gutscheincode nachschlagen. [Zur Referenz für ältere Versionen](/legacy).
[/doc-callout]

Vergib einen persönlichen Gutschein für eine Shopauskunft-Bewertung, sobald sie im Shop vorliegt. Prüfe deshalb zuerst den Import.

Sieht ein Käufer seine Bewertung bereits bei Shopauskunft, hat aber noch keine Prämie erhalten, prüfe zuerst, ob die Bewertung im Shop angekommen ist.

1. Richte [Bewertungen von Shopauskunft importieren](/configbeez/integrations/config_shopauskunft_integration) ein, damit die Bewertung erfasst wird.
2. Lege fest, nach wie vielen Bewertungen ein Kunde einen Gutschein erhalten soll. Wähle das Angebot und prüfe den Gutscheinwert.
3. Prüfe in der Vorschau, ob Angebot und persönlicher Code gemeinsam in der E-Mail erscheinen.

[plugin:content-inject](/content_blocks/pro_coupon)

[plugin:content-inject](/content_blocks/pro_responsive_template)
