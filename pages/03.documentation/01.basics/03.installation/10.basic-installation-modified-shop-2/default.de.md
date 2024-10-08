---
# http://learn.getgrav.org/content/headers
title: modified-shop 2.x/3.x
slug: basic-installation-modified-shop-2
date: 12-09-2010
published: true
publish_date: 12-09-2010
# unpublish_date: 12-09-2010
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
    tag: [ftp]
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


##Integrations-Pakete

Mit dem passenden Integrations-Paket fügt sich das MailBeez System unter Nutzung des Autoinclude Modulsystems nahtlos in Ihr Modified-Shop 2.0/3.0 ein.

### Modified-Shop V3
####Modified-Shop V3.0.2 PHP8.2
<https://mailbeez-support.com/cloudfiles/modified-shop_3.0.2-r15701_delta.zip>

####Modified-Shop V3.1.0 PHP8.3
<https://mailbeez-support.com/cloudfiles/modified-shop_3.1.0-r16069_delta.zip>


### Modified-Shop V2
####Modified-Shop V2.0.0
<https://mailbeez-support.com/cloudfiles/modified-shop-2.00r6510-delta.zip>

####Modified-Shop V2.0.1
<https://mailbeez-support.com/cloudfiles/modified-shop_2.0.1.0-r10403-delta.zip>

####Modified-Shop V2.0.2.1
<https://mailbeez-support.com/cloudfiles/modified-shop_2.0.2.1-r10607-delta.zip>

####Modified-Shop V2.0.2.2
<https://mailbeez-support.com/cloudfiles/modified-shop_2.0.2.2-r10690-delta.zip>

####Modified-Shop V2.0.3.0
<https://mailbeez-support.com/cloudfiles/modified-shop_2.0.3.0-r10907-delta.zip>

#### Modified-Shop V2.0.4.2
<https://mailbeez-support.com/cloudfiles/modified-shop_2.0.4.2-r11374-delta.zip>

#### Modified-Shop V2.0.5.x
<https://mailbeez-support.com/cloudfiles/modified-shop_2.0.5.0-r12487-delta.zip>

#### Modified-Shop V2.0.6.x
<https://mailbeez-support.com/cloudfiles/modified-shop_2.0.6.0-r13500-delta.zip>

#### Modified-Shop V2.0.7.x
<https://mailbeez-support.com/cloudfiles/modified-shop_2.0.7.0-r14473-delta.zip>

#### Modified-Shop V2.0.7.2+ PHP8.1
<https://mailbeez-support.com/cloudfiles/modified-shop_2.0.7.2-r14622-delta.zip>

##Installation
>>>>> Falls das `/admin` Verzeichnis umbenannt worden ist, die Dateien aus `admin/` in das umbenannte Verzeichnis verschieben

Zur Installation von MailBeez bitte zunächst das passende Integrations-Paket downloaden und mit der Datei-Struktur von Modified-Shop zusammenführen.

Folgende Dateien von Modified-Shop wurden geringfügig angepasst:

    /products_reviews_write.php             // Auto-login für Produktbewertungen
    /inc/csrf_token.inc.php                 // Integration mit CSFR-Schutz
    /inc/xtc_update_whos_online.inc.php     // Ausschluss von mailhive.php Aufrufen

Die Integrations-Pakete vor V2.0.3.0 erfordern eine kleine Anpassung an:

    /admin/includes/column_left.php         // Menue-Punkt - nur vor V2.0.3.0


Dann in der Modified-Shop `Administration > Partner Module > MailBeez` die Integration aktivieren und die Installation vom MailBeez System durchführen.


[plugin:content-inject](/content_blocks/run_installer)
