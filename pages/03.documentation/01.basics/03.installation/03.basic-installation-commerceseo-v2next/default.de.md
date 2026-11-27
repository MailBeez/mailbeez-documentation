---
# http://learn.getgrav.org/content/headers
title: Commerce:SEO V2Next
slug: basic-installation-commerceseo-v2next
# menu: Commerce:SEO V2Next
date: 23-01-2014
published: true
publish_date: 23-01-2014
# unpublish_date: 23-01-2014
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

Verwende das Installationspaket für Commerce:SEO V2Next 2.4.x CE. MailBeez legt eigene Tabellen an.

Entscheide vor der Dateiänderung, wie du das Adminmenü ergänzen möchtest. Das Menü-Add-on ist hilfreich, wenn Shopupdates deine Anpassungen regelmäßig überschreiben.

[plugin:content-inject](/content_blocks/download_installer)

## Shopdateien übertragen

<span id="schritt-1-die-neuen-datei"></span>Kopiere `catalog/admin/mailbeez.php` ins Adminverzeichnis des Shops. Kopiere `catalog/mailhive/` und `catalog/mailhive.php` ins Shopverzeichnis neben die `index.php`.

## Eintrag im Adminmenü anlegen

<span id="schritt-2-menue-eintrag-a"></span><span id="option-1-menue-eintrag-ha"></span><span id="option-2-admin-menue-eint"></span>Alternativ kannst du den Eintrag mit dem Admin-Menü-Addon von Commerce:SEO updatesicher anlegen.

Öffne `admin/includes/column_top.php` im Shopverzeichnis. Ein Shopupdate kann eine manuelle Menüänderung überschreiben.

Suche in der vorhandenen Datei nach diesem Ausschnitt.

```text
<!-- Gutscheine -->
```

Füge unmittelbar vor dieser Zeile den folgenden Eintrag ein.

```html
<li><a href="mailbeez.php">MailBeez</a></li>
```

## Zugriff vergeben

<span id="schritt-3-zugriffsrechte-"></span>Rufe auf der Shopdomain einmal `/mailhive.php` auf. Dadurch erhält der Hauptadministrator Zugriff. Weitere Berechtigungen vergibst du einzeln in der Shopverwaltung.

[plugin:content-inject](/content_blocks/run_installer)
