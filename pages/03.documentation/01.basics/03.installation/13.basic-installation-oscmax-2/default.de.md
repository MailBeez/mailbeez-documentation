---
title: "osCMax 2.5"
slug: basic-installation-oscmax-2
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

Verwende das Installationspaket für osCMax 2.5 RC1. Für dieses frühere Paket war PHP ab 5.3 angegeben.

Teste die Installation mit der Admingruppe, die später MailBeez nutzt. Ihre Dateirechte können von denen des Kontos abweichen, mit dem du installiert hast.

[plugin:content-inject](/content_blocks/download_installer)

## Shopdateien übertragen

Kopiere `catalog/admin/mailbeez.php` ins Adminverzeichnis des Shops. Kopiere `catalog/mailhive/` und `catalog/mailhive.php` ins Shopverzeichnis neben die `index.php`.

## Dateinamen registrieren

Öffne `admin/includes/filenames.php` im Shopverzeichnis.

Ergänze die Definition für den Adminbereich.

```php
define('FILENAME_MAILBEEZ', 'mailbeez.php');
define('FILENAME_HIVE', 'mailhive.php');
```

Öffne `includes/filenames.php` im Shopverzeichnis.

Ergänze die Definition für den Shopbereich.

```php
define('FILENAME_HIVE', 'mailhive.php');
```

## Eintrag im Adminmenü anlegen

Öffne `admin/includes/boxes/tools.php` im Shopverzeichnis.

Suche in der vorhandenen Datei nach diesem Ausschnitt.

```text
tep_admin_jqmenu(FILENAME_WHOS_ONLINE, BOX_TOOLS_WHOS_ONLINE, 'TOP'));
```

Ersetze den gefundenen Eintrag durch den folgenden Code.

```php
tep_admin_jqmenu(FILENAME_WHOS_ONLINE, BOX_TOOLS_WHOS_ONLINE, 'TOP') . tep_admin_jqmenu(FILENAME_MAILBEEZ, 'MailBeez', TOP));
```

## Gruppenzugriff vergeben

1. Öffne **Administrator → File Access → Tools → store files**, wähle `mailbeez.php` und speichere.
2. Wähle unter **Administrator → Member Groups → Groups** die Gruppe und öffne **new permission**. Markiere `mailbeez.php` unter **Tools**. Wiederhole dies für jede Gruppe, die Zugriff braucht.

[plugin:content-inject](/content_blocks/run_installer)
