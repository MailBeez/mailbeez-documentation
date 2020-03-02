---
# http://learn.getgrav.org/content/headers
title: modified-shop 2.x
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

##Integration Packs

Using the matching integration pack MailBeez will integrate itself seamlessly into your Modified-Shop 2.0.

####Modified-Shop V2.0.0
<http://mailbeez-support.com/cloudfiles/modified-shop-2.00r6510-delta.zip> 

####Modified-Shop V2.0.1
<http://mailbeez-support.com/cloudfiles/modified-shop_2.0.1.0-r10403-delta.zip> 

####Modified-Shop V2.0.2.1
<http://mailbeez-support.com/cloudfiles/modified-shop_2.0.2.1-r10607-delta.zip> 

####Modified-Shop V2.0.2.2
<http://mailbeez-support.com/cloudfiles/modified-shop_2.0.2.2-r10690-delta.zip> 

####Modified-Shop V2.0.3.0
<http://mailbeez-support.com/cloudfiles/modified-shop_2.0.3.0-r10907-delta.zip> 

#### Modified-Shop V2.0.4.2 + V2.0.5
<http://mailbeez-support.com/cloudfiles/modified-shop_2.0.4.2-r11374-delta.zip>


##Installation
>>>>> In case you renamed the `/admin` directory, please move the files from `admin/` into the renamed directory

Please start with downloading the matching integration pack. Then unzip the pack and merge the files into the file/folder structure of your Modified-Shop.

Following core files have been adopted:

    /admin/includes/column_left.php         // Menue-Item only before V2.0.3.0
    /products_reviews_write.php             // Auto-login for product reviews
    /inc/csrf_token.inc.php                 // Integration with CSFR protection
    /inc/xtc_update_whos_online.inc.php     // exclude of mailhive.php calls

In you Modified-Shop `Administration > Partner Modules > MailBeez` you will be able to activate the integration and finalize the intstallation of MailBeez.


[plugin:content-inject](/content_blocks/run_installer)