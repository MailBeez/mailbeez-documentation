---
# http://learn.getgrav.org/content/headers
title: osCommerce 2.3.x
slug: oscommerce-2-3-x
# menu: osCommerce 2.3.x
date: 26-01-2011
published: true
publish_date: 26-01-2011
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

Verwende das Installationspaket für osCommerce 2.3.x (ursprüngliche Anleitung für 2.3.1). Für dieses frühere Paket war PHP ab 5.3 angegeben.

Vergleiche das Beispiel vor der Änderung mit den installierten 2.3.x-Dateien. Ein angepasstes Adminmenü kann zusätzliche Einträge enthalten, die du beibehalten möchtest.

[plugin:content-inject](/content_blocks/download_installer)

## Shopdateien übertragen

<span id="schritt-1-neue-dateien"></span>Kopiere `catalog/admin/mailbeez.php` ins Adminverzeichnis des Shops. Kopiere `catalog/mailhive/` und `catalog/mailhive.php` ins Shopverzeichnis neben die `index.php`.

## Adminintegration wählen

<span id="schritt-2-menue-eintrag-a"></span><span id="a-admin-plugin"></span>Kopiere ab 2.3.3 das Admin-Plugin aus dem Paket an die entsprechende Stelle im Shop.

```text
extra_files/extras_osc_233x/admin/includes/boxes/customers_mailbeez.php → admin/includes/boxes/customers_mailbeez.php
```

<span id="b-code-aenderung"></span>Für den manuellen Menüeintrag bei 2.3.x öffne `admin/includes/boxes/tools.php`.

Suche in der vorhandenen Datei nach diesem Ausschnitt.

```text
array(
        'code' => FILENAME_WHOS_ONLINE,
        'title' => BOX_TOOLS_WHOS_ONLINE,
        'link' => tep_href_link(FILENAME_WHOS_ONLINE)
    )
```

Füge unmittelbar nach dieser Zeile den folgenden Eintrag ein.

```php
// mailbeez
     ,
     array(
         'code' => 'mailbeez.php',
         'title' => 'MailBeez',
         'link' => tep_href_link('mailbeez.php')
     )
     // - mailbeez
```

[plugin:content-inject](/content_blocks/run_installer)
