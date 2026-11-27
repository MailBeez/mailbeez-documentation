---
# http://learn.getgrav.org/content/headers
title: "Gutscheine für Shopbewertungen"
module_subtitle: "Nach einer Bewertung im eigenen Shop einen persönlichen Gutschein vergeben"
slug: coupon_review_shoprating
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
    tag: [pro,coupon, "Shopbewertung Gutschein für Bewertungen"]
module:
    code: 'coupon_review_shoprating'
    category: [mailbeez]
    compatiblity: [comp_cre,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    pro: 'pro'
    cert: 'true'
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

Bedanke dich für eine Shopbewertung mit einem persönlichen Gutschein. Grundlage für die Prämie ist die im Shop erfasste Bewertung.

Suche bei einer fehlenden Prämie zuerst die Shopbewertung. Eine Produktbewertung derselben Person betrifft einen anderen Anlass und kann zu einem anderen Prämienmodul gehören.

1. Richte [Shopbewertungen im eigenen Shop erfassen](/configbeez/config_shopvoting) ein, damit die Bewertung erfasst wird.
2. Lege fest, nach wie vielen Bewertungen ein Kunde einen Gutschein erhalten soll. Wähle das Angebot und prüfe den Gutscheinwert.
3. Prüfe in der Vorschau, ob Angebot und persönlicher Code gemeinsam in der E-Mail erscheinen.

[plugin:content-inject](/content_blocks/pro_coupon)

[plugin:content-inject](/content_blocks/pro_responsive_template)
