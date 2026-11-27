---
# http://learn.getgrav.org/content/headers
title: "ReferralHoney-Gutscheine"
module_subtitle: "Kunden für erfolgreiche Weiterempfehlungen mit Gutscheinen belohnen"
slug: coupon_referral_honey
# menu: Neukunden-Gewinnungssystem "ReferralHoney"
date: 10-01-2012
published: true
publish_date: 10-01-2012
# unpublish_date: 10-01-2012
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
    tag: [pro,coupon, "Neukunden-Gewinnungssystem \"ReferralHoney\""]
module:
    mc_ready: true
    code: 'coupon_referral_honey'
    category: [mailbeez]
    compatiblity: [comp_cre,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2012/01/icon_32.png'
    pro: 'pro'
    cert: 'true'
    price: '299 EUR'
    title_en: 'MailBeez ReferralHoney'
    teaser_en: 'make every customer a markeeter'
    title_de: 'Neu-Kundenspiel "ReferralHoney"'
    teaser_de: 'Viraler Effekt durch Social Sharing bringt Neu-Kunden'
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

Gib einem Käufer einen Gutschein zum Weitergeben. Bestellen Freunde damit und erfüllen die Bedingungen, erhält der Käufer eine Prämie. Verwende für den geteilten Rabatt und die Prämie getrennte Vorlagen.

Erkläre beiden Seiten, was sie bekommen. Geworbene Freunde brauchen den einlösbaren Vorteil. Der ursprüngliche Käufer muss wissen, welcher Einkauf für seine Prämie zählt.

1. Wähle den Bestellstatus für die erste Einladung und den Status, ab dem die Bestellung eines Freundes zählt. Das Zeitfenster für die Verarbeitung muss länger sein als die Wartezeit vor der Einladung.
2. Wähle die Gutscheinvorlage zum Teilen. Lass das Nutzungslimit offen oder erlaube ausreichend Einlösungen. Eine Nutzung wird dem werbenden Kunden zugerechnet, damit nur Freunde das Angebot einlösen können.
3. Lege Gültigkeit des geteilten Codes, Wartezeit nach Ablauf und Anzahl der nötigen Bestellungen je Prämienstufe fest. Jede der drei Stufen erhält eine eigene Gutscheinvorlage. Die Prämiengutscheine haben eine eigene Gültigkeit.
4. Prüfe Einladung und Empfehlungsseite. Kopiere für eine eigene Seite die Vorlage aus `mailhive/mailbeez/coupon_referral_honey/templates/` und entferne in der Kopie den Präfix `default_`. Das Modul sucht zuerst die sprachspezifische, dann die allgemeine eigene Vorlage und danach die entsprechenden Standardvorlagen.
