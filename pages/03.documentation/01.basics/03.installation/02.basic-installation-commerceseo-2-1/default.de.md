---
# http://learn.getgrav.org/content/headers
title: Commerce:SEO 2.1
slug: basic-installation-commerceseo-2-1
# menu: Commerce:SEO 2.1
date: 30-08-2012
published: true
publish_date: 30-08-2012
# unpublish_date: 30-08-2012
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

Verwende das Installationspaket für Commerce:SEO 2.1.x CE. MailBeez legt eigene Tabellen an.

Sichere das vorhandene Adminmenü, bevor du den Eintrag ergänzt. Fehlt er nach einem Shopupdate, kannst du die beiden Dateistände vergleichen.

[plugin:content-inject](/content_blocks/download_installer)

## Shopdateien übertragen

<span id="schritt-1-die-neuen-datei"></span>Kopiere `catalog/admin/mailbeez.php` ins Adminverzeichnis des Shops. Kopiere `catalog/mailhive/` und `catalog/mailhive.php` ins Shopverzeichnis neben die `index.php`.

## Eintrag im Adminmenü anlegen

<span id="schritt-2-menue-eintrag-a"></span>Öffne `admin/includes/column_left.php` im Shopverzeichnis. Ein Shopupdate kann eine manuelle Menüänderung überschreiben.

Suche in der vorhandenen Datei nach diesem Ausschnitt.

```text
class="menuBoxContentLink">' . BOX_MODULE_NEWSLETTER . '';
```

Füge unmittelbar nach dieser Zeile den folgenden Eintrag ein.

```php
if (($cs == '0') && ($aa['mailbeez'] == '1')) echo '<a '.($p == 'mailbeez'?'class="menu_link_aktiv"':'') . ' class="menuBoxContentLink" href="' . xtc_href_link('mailbeez.php') . '">MailBeez</a>';
```

## Zugriff vergeben

<span id="schritt-3-zugriffsrechte-"></span>Rufe auf der Shopdomain einmal `/mailhive.php` auf. Dadurch erhält der Hauptadministrator Zugriff. Weitere Berechtigungen vergibst du einzeln in der Shopverwaltung.

[plugin:content-inject](/content_blocks/run_installer)
