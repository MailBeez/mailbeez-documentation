---
# http://learn.getgrav.org/content/headers
title: ShopBewertungen in Emails einfügen
slug: filter_add_shoprating
menu: ShopBewertungen einfügen
published: true
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
module:
    code: 'shoprating_advanced'
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

Fügen Sie Ihre wertvollen ShopBewertungen automatisch in Ihre MailBeez Email Kampagnen ein – hervorragend geeignet, um z.B. die Emails zur [Kundenrückgewinnung](/dokumentation/mailbeez/winback_advanced) und [Kunden ohne Kauf](/dokumentation/mailbeez/nopurchase_advanced) aufzuwerten.


### Installation

Modul installieren und aktivieren – vorher das [ShopBewertungs-Modul](/dokumentation/configbeez/config_shopvoting "Shopbewertungen") konfigurieren und testen.

Mit folgenden Platzhaltern können Sie die konfigurierte Anzahl an Bewertungen in von MailBeez generierten Emails einfügen. Die Platzhalter können an jeder beliebigen Stellen in den MailBeez Vorlagen eingefügt werden. Sollen die Bewertungen in allen Emails sichtbar sein, am besten die Platzhalter direkt in die Hauptvorlage einfügen

Platzhalter für die HTML-Version der Vorlage:

```
{$content.shoprating.html}
```

Platzhalter für die TXT-Version der Vorlage:

```
{$content.shoprating.txt}
```


 