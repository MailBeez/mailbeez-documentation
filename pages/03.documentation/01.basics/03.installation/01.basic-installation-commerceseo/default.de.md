---
title: "Commerce:SEO 2.0"
slug: basic-installation-commerceseo
template: docs
visible: true
published: true
taxonomy:
    migration_status: done
    category: [docs]
    tag: [ftp]
---

[doc-callout type="note" title="Installation für frühere Shopversionen"]
Prüfe die Versionsnummer in deiner Shopverwaltung. Für andere Versionen findest du die passende Anleitung unter [Installation](/grundlagen/installation) oder in der [Referenz für ältere Versionen](/legacy).
[/doc-callout]

Verwende das Installationspaket für Commerce:SEO 2.0.x CE. MailBeez legt eigene Tabellen an.

[plugin:content-inject](/content_blocks/download_installer)

## Shopdateien übertragen

<span id="schritt-1-die-neuen-datei"></span>Kopiere `catalog/admin/mailbeez.php` ins Adminverzeichnis des Shops. Kopiere `catalog/mailhive/` und `catalog/mailhive.php` ins Shopverzeichnis neben die `index.php`.

## Eintrag im Adminmenü anlegen

<span id="schritt-2-menue-eintrag-a"></span>Öffne `admin/includes/column_left.php` im Shopverzeichnis. Ein Shopupdate kann eine manuelle Menüänderung überschreiben.

Suche in der vorhandenen Datei nach diesem Ausschnitt.

```text
'" class="menuBoxContentLink">Newsletter';
```

Füge unmittelbar nach dieser Zeile den folgenden Eintrag ein.

```php
if (($cs == '0') && ($aa['mailbeez'] == '1')) echo '<a href="' . xtc_href_link('mailbeez.php') . '">MailBeez</a>';
```

## Zugriff vergeben

<span id="schritt-3-zugriffsrechte-"></span>Rufe auf der Shopdomain einmal `/mailhive.php` auf. Dadurch erhält der Hauptadministrator Zugriff. Weitere Berechtigungen vergibst du einzeln in der Shopverwaltung.

[plugin:content-inject](/content_blocks/run_installer)
