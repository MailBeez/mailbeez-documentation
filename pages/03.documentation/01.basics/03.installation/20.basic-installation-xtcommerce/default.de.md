---
# http://learn.getgrav.org/content/headers
title: xtCommerce 3.04
slug: basic-installation-xtcommerce
# menu: xtCommerce 3.04
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

Verwende das Installationspaket für xt:Commerce 3.04. Für dieses frühere Paket war PHP ab 5.3 angegeben. MailBeez legt eigene Tabellen an.

Auch auf demselben Versionsstand können zwei Shops unterschiedliche Menüdateien verwenden. Ermittle zuerst, welche Datei deine Verwaltung lädt, und wähle dann das passende Beispiel.

[plugin:content-inject](/content_blocks/download_installer)

## Shopdateien übertragen

<span id="schritt-1-die-neuen-datei"></span>Kopiere `catalog/admin/mailbeez.php` ins Adminverzeichnis des Shops. Kopiere `catalog/mailhive/` und `catalog/mailhive.php` ins Shopverzeichnis neben die `index.php`.

## Passendes Adminmenü wählen

<span id="schritt-2-menue-eintrag-a"></span><span id="1-add-a-menu-entry"></span>Die früheren Pakete beschreiben zwei Menüvarianten. Prüfe vor der Änderung, welche Datei das Menü in deinem Shop aufbaut.

Öffne `admin/includes/column_left.php` im Shopverzeichnis.

Suche in der vorhandenen Datei nach diesem Ausschnitt.

```text
' . BOX_IMPORT . '</a><br>';
```

Füge unmittelbar nach dieser Zeile den folgenden Eintrag ein.

```php
if (($_SESSION['customers_status']['customers_status_id'] == '0') && ($admin_access['module_newsletter'] == '1')) echo '<li><a href="' . xtc_href_link('mailbeez.php') . '"> -MailBeez</a></li>';
```

Verwendet der Shop `admin/includes/column_top.php`, füge in dieser Datei bei den übrigen Menüeinträgen den folgenden Code ein.

```php
if (($_SESSION['customers_status']['customers_status_id'] == '0') && ($admin_access['module_newsletter'] == '1')) echo '<li><a href="' . xtc_href_link('mailbeez.php') . '"> -MailBeez</a></li>';
```

## Zugriff vergeben

<span id="schritt-3-zugriffsrechte-"></span>Rufe auf der Shopdomain einmal `/mailhive.php` auf. Dadurch erhält der Hauptadministrator Zugriff. Weitere Berechtigungen vergibst du einzeln in der Shopverwaltung.

[plugin:content-inject](/content_blocks/run_installer)
