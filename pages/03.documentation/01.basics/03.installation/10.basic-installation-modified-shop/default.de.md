---
# http://learn.getgrav.org/content/headers
title: modified-shop 1.0x
slug: basic-installation-modified-shop
# menu: modified-shop 1.0x
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

[doc-callout type="note" title="Installation für frühere Shopversionen"]
Prüfe die Versionsnummer in deiner Shopverwaltung. Für andere Versionen findest du die passende Anleitung unter [Installation](/grundlagen/installation) oder in der [Referenz für ältere Versionen](/legacy).
[/doc-callout]

Verwende das Installationspaket für modified-shop 1.x. Für dieses frühere Paket war PHP ab 5.3 angegeben. MailBeez legt eigene Tabellen an.

Diese Schritte beziehen sich auf die Dateistruktur der 1.x-Reihe. Für neuere modified-shop-Versionen findest du das Paket nach Version und Revision in der Installationsübersicht.

[plugin:content-inject](/content_blocks/download_installer)

## Shopdateien übertragen

<span id="schritt-1-neue-dateien-ko"></span>Kopiere `catalog/admin/mailbeez.php` ins Adminverzeichnis des Shops. Kopiere `catalog/mailhive/` und `catalog/mailhive.php` ins Shopverzeichnis neben die `index.php`.

## Menüeintrag für die passende Version setzen

<span id="schritt-2-datei-anpassen"></span><span id="1-menue-eintrag-hinzufueg"></span>Öffne `admin/includes/column_left.php` im Shopverzeichnis.

Verwende bis Version 1.05 die folgende Einfügestelle.

Suche in der vorhandenen Datei nach diesem Ausschnitt.

```text
' . BOX_IMPORT . '</a><br>';
```

Füge unmittelbar nach dieser Zeile den folgenden Eintrag ein.

```php
if (($_SESSION['customers_status']['customers_status_id'] == '0') && ($admin_access['module_newsletter'] == '1')) echo '<li><a href="' . xtc_href_link('mailbeez.php') . '" class="menuBoxContentLink"> -MailBeez</a></li>';
```

Suche ab Version 1.06 in derselben Datei nach `//----HILFSPROGRAMME`. Verwende innerhalb dieses Abschnitts die folgende Einfügestelle.

Suche in der vorhandenen Datei nach diesem Ausschnitt.

```text
echo ('</ul>');
```

Füge unmittelbar vor dieser Zeile den folgenden Eintrag ein.

```php
if (($_SESSION['customers_status']['customers_status_id'] == '0') && ($admin_access['module_newsletter'] == '1')) echo '<li><a href="' . xtc_href_link('mailbeez.php') . '" class="menuBoxContentLink" > -MailBeez</a></li>';
```

## Zugriff vergeben

<span id="schritt-3-zugriffsrechte-"></span>Rufe auf der Shopdomain einmal `/mailhive.php` auf. Dadurch erhält der Hauptadministrator Zugriff. Weitere Berechtigungen vergibst du einzeln in der Shopverwaltung.

[plugin:content-inject](/content_blocks/run_installer)
