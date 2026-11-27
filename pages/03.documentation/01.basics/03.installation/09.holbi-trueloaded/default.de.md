---
title: "Holbi Trueloaded"
slug: holbi-trueloaded
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

Verwende das Installationspaket für Holbi TrueLoaded. Für dieses frühere Paket war PHP ab 5.3 angegeben.

Für diese Installation braucht auch die Admingruppe Zugriff. Ist die Datei vorhanden, aber für einen anderen Administrator gesperrt, prüfe die Rechte seiner Gruppe.

[plugin:content-inject](/content_blocks/download_installer)

## Shopdateien übertragen

Kopiere `catalog/admin/mailbeez.php` ins Adminverzeichnis des Shops. Kopiere `catalog/mailhive/` und `catalog/mailhive.php` ins Shopverzeichnis neben die `index.php`.

## Eintrag im Adminmenü anlegen

Öffne `admin/includes/boxes/tools.php` im Shopverzeichnis.

Suche in der vorhandenen Datei nach diesem Ausschnitt.

```text
tep_admin_files_boxes(FILENAME_WHOS_ONLINE, BOX_TOOLS_WHOS_ONLINE) .
```

Füge unmittelbar nach dieser Zeile den folgenden Eintrag ein.

```php
// mailbeez
 tep_admin_files_boxes('mailbeez.php', 'MailBeez') .
 // - mailbeez
```

## Gruppenzugriff vergeben

1. Öffne **Administrator → File Access → Tools → store files**, wähle `mailbeez.php` und speichere.
2. Wähle unter **Administrator → Member Groups → Groups** die Gruppe und öffne **new permission**. Markiere `mailbeez.php` unter **Tools**. Wiederhole dies für jede Gruppe, die Zugriff braucht.

[plugin:content-inject](/content_blocks/run_installer)
