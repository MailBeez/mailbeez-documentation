---
# http://learn.getgrav.org/content/headers
title: osCommerce 2.2
slug: basic-installation-oscommerce
# menu: osCommerce 2.2
date: 21-05-2010
published: true
publish_date: 21-05-2010
# unpublish_date: 21-05-2010
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

Verwende das Installationspaket für osCommerce MS2.2 / rca2. Für dieses frühere Paket war PHP ab 5.3 angegeben.

[plugin:content-inject](/content_blocks/download_installer)

## Shopdateien übertragen

<span id="schritt-1-neue-dateien"></span>Kopiere `catalog/admin/mailbeez.php` ins Adminverzeichnis des Shops. Kopiere `catalog/mailhive/` und `catalog/mailhive.php` ins Shopverzeichnis neben die `index.php`.

## Eintrag im Adminmenü anlegen

<span id="schritt-2-menue-eintrag-a"></span>Öffne `admin/includes/boxes/tools.php` im Shopverzeichnis.

Suche in der vorhandenen Datei nach diesem Ausschnitt.

```text
BOX_TOOLS_WHOS_ONLINE . '</a>'
```

Füge unmittelbar nach dieser Zeile den folgenden Eintrag ein.

```php
. '<br><a href="' . tep_href_link(FILENAME_MAILBEEZ, '', 'NONSSL') . '">MailBeez</a><br>'
```

[plugin:content-inject](/content_blocks/run_installer)
