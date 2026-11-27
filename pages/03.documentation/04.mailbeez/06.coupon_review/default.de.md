---
# http://learn.getgrav.org/content/headers
title: Gutschein für Bewertungen
module_subtitle: "Eine erfasste Produktbewertung mit einem persönlichen Gutschein belohnen"
slug: coupon_review
routes:
    aliases:
        - /dokumentation/mailbeez/gutschein-fur-bewertungen
date: 21-10-2011
published: true
publish_date: 21-10-2011
# unpublish_date: 21-10-2011
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
    tag: [pro,coupon]
module:
    code: 'coupon_review'
    category: [mailbeez]
    compatiblity: [comp_cre,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/10/coupon_32.png'
    pro: 'pro'
    cert: 'true'
    price: '99 EUR'
    title_en: 'Review Reward Coupon'
    teaser_en: 'Say thanks to your customers for giving a review, and send them an automated email with a personalized coupon'
    title_de: 'Gutschein für Bewertungen'
    teaser_de: 'Bedanken Sie sich beim Kunden für das Abgeben von Produktbewertungen'
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

Bedanke dich für eine erfasste Produktbewertung mit einem persönlichen Gutschein. Die Bewertung muss zuerst im Shop vorliegen, damit sie für die Prämie zählt.

1. Richte [Um Produktbewertungen bitten](/mailbeez/review_advanced) ein, damit die Bewertung erfasst wird.
2. Lege fest, nach wie vielen Bewertungen ein Kunde einen Gutschein erhalten soll. Wähle das Angebot und prüfe den Gutscheinwert.
3. Prüfe in der Vorschau, ob Angebot und persönlicher Code gemeinsam in der E-Mail erscheinen.

[plugin:content-inject](/content_blocks/pro_coupon)

[plugin:content-inject](/content_blocks/pro_responsive_template)
