---
# http://learn.getgrav.org/content/headers
title: Gambio GX 1.x
slug: basic-installation-gambio
# menu: Gambio GX 1.x
date: 08-09-2010
published: true
publish_date: 08-09-2010
# unpublish_date: 08-09-2010
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

Verwende das Installationspaket für Gambio GX 1.x. MailBeez legt eigene Tabellen an.

Bei GX 1.x ergänzt du den Menüeintrag von Hand. Bewahre die geänderte Datei auf, damit du den Eintrag nach einem Shopupdate wiederherstellen kannst.

[plugin:content-inject](/content_blocks/download_installer)

## Shopdateien übertragen

<span id="schritt-1-neue-dateien"></span>Kopiere `catalog/admin/mailbeez.php` ins Adminverzeichnis des Shops. Kopiere `catalog/mailhive/` und `catalog/mailhive.php` ins Shopverzeichnis neben die `index.php`.

## Eintrag im Adminmenü anlegen

<span id="schritt-2-menue-eintrag-a"></span>Öffne `admin/includes/column_left.php` im Shopverzeichnis. Ein Shopupdate kann eine manuelle Menüänderung überschreiben.

Suche in der vorhandenen Datei nach diesem Ausschnitt.

```text
' . BOX_IMPORT . '</a><br>';
```

Füge unmittelbar nach dieser Zeile den folgenden Eintrag ein.

```php
if (($_SESSION['customers_status']['customers_status_id'] == '0') && ($admin_access['mailbeez'] == '1')) 
    echo '<li class="leftmenu_body_item"><a class="fav_drag_item" href="' . xtc_href_link('mailbeez.php') . '"> MailBeez</a></li>';
```

## Zugriff vergeben

<span id="schritt-3-zugriffsrechte-"></span>Rufe auf der Shopdomain einmal `/mailhive.php` auf. Dadurch erhält der Hauptadministrator Zugriff. Weitere Berechtigungen vergibst du einzeln in der Shopverwaltung.

Melde dich erneut an und leere den Seitencache, bevor du den Menüeintrag prüfst.

[plugin:content-inject](/content_blocks/run_installer)
