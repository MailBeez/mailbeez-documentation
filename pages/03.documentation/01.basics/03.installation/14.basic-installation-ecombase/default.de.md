---
title: "Basic Installation ecombase"
slug: basic-installation-ecombase
template: docs
visible: false
published: true
taxonomy:
    migration_status: done
    category: [docs]
    tag: [ftp]
---

[doc-callout type="note" title="Installation für frühere Shopversionen"]
Prüfe die Versionsnummer in deiner Shopverwaltung. Für andere Versionen findest du die passende Anleitung unter [Installation](/grundlagen/installation) oder in der [Referenz für ältere Versionen](/legacy).
[/doc-callout]

Verwende das Installationspaket für ECB 1.08 (MailBeez 2.5). Für dieses frühere Paket war PHP ab 5.3 angegeben. MailBeez legt eigene Tabellen an.

Bewahre die ursprüngliche Header-Datei dieses Shops auf. Im Vergleich mit dem Beispiel kannst du MailBeez ergänzen und die vorhandenen Adminlinks erhalten.

[plugin:content-inject](/content_blocks/download_installer)

## Shopdateien übertragen

Kopiere `catalog/admin/mailbeez.php` ins Adminverzeichnis des Shops. Kopiere `catalog/mailhive/` und `catalog/mailhive.php` ins Shopverzeichnis neben die `index.php`.

## Eintrag im Adminmenü anlegen

Öffne `admin/includes/header.php` im Shopverzeichnis.

Suche in der vorhandenen Datei nach diesem Ausschnitt.

```text
BOX_RSS => array('acl' => true,
                 'link' => array(FILENAME_CONFIGURATION, 'gID=27'),
                 'icon' => 'icon_rss.png'),
```

Füge unmittelbar nach dieser Zeile den folgenden Eintrag ein.

```php
'MailBeez' => array('acl' => true,
                    'link' => 'mailbeez.php',
                    'icon' => '../../../mailhive/common/images/minibeez.png'),
```

## Zugriff vergeben

Rufe auf der Shopdomain einmal `/mailhive.php` auf. Dadurch erhält der Hauptadministrator Zugriff. Weitere Berechtigungen vergibst du einzeln in der Shopverwaltung.

[plugin:content-inject](/content_blocks/run_installer)
