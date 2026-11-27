---
# http://learn.getgrav.org/content/headers
title: osCommerce CE Phoenix
slug: oscommerce-CE-Phoenix
# menu: osCommerce CE Phoenix
date: 21-10-2019
published: true
publish_date: 21-10-2019
# unpublish_date: 26-01-2011
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

[doc-callout type="note" title="Installation für frühere Shopversionen"]
Prüfe die Versionsnummer in deiner Shopverwaltung. Für andere Versionen findest du die passende Anleitung unter [Installation](/grundlagen/installation) oder in der [Referenz für ältere Versionen](/legacy).
[/doc-callout]

Verwende das Installationspaket für osCommerce CE Phoenix.

[plugin:content-inject](/content_blocks/download_installer)

## Shopdateien übertragen

<span id="schritt-1-neue-dateien"></span>Kopiere `catalog/admin/mailbeez.php` ins Adminverzeichnis des Shops. Kopiere `catalog/mailhive/` und `catalog/mailhive.php` ins Shopverzeichnis neben die `index.php`.

## Adminmenü und Hook anbinden

<span id="schritt-2-integration-mit"></span>Kopiere jede Paketdatei an den Shop-Pfad in derselben Zeile.

```text
extra files/extras_osc_233x/admin/includes/boxes/customers_mailbeez.php → admin/includes/boxes/customers_mailbeez.php
extra files/extras_osc_phoenix_V1/includes/hooks/admin/siteWide/beezdesk.php → includes/hooks/admin/siteWide/beezdesk.php
```

[plugin:content-inject](/content_blocks/run_installer)
