---
title: "Digistore 4.1"
slug: digistore-2
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

Verwende das Installationspaket für DigiStore 4.1. Für dieses frühere Paket war PHP ab 5.3 angegeben. Prüfe vor dem Kopieren, ob deine Version MailBeez bereits enthält.

Gibt es in der Verwaltung bereits einen MailBeez-Eintrag, öffne ihn vor dem Kopieren. Dort erkennst du, wie weit die vorhandene Einrichtung fortgeschritten ist.

[plugin:content-inject](/content_blocks/download_installer)

## Shopdateien übertragen

Kopiere `catalog/admin/mailbeez.php` ins Adminverzeichnis des Shops. Kopiere `catalog/mailhive/` und `catalog/mailhive.php` ins Shopverzeichnis neben die `index.php`.

## MailBeez im E-Mail-Menü eintragen

Öffne `admin/includes/boxes/email.php` im Shopverzeichnis.

Suche in der vorhandenen Datei nach diesem Ausschnitt.

```text
'<a href="' . tep_href_link(FILENAME_CONFIGURATION, 'gID=12', 'NONSSL') . '" class="menuBoxContentLink">' . BOX_CONFIGURATION_EMAIL_OPTIONS . '</a>');
```

Ersetze den gefundenen Eintrag durch den folgenden Code.

```php
'<a href="' . tep_href_link(FILENAME_CONFIGURATION, 'gID=12', 'NONSSL') . '" class="menuBoxContentLink">' . BOX_CONFIGURATION_EMAIL_OPTIONS . '</a>'.
 '<a href="' . tep_href_link('mailbeez.php', '', 'NONSSL') . '" class="menuBoxContentLink">Mail Beez</a>');
```

[plugin:content-inject](/content_blocks/run_installer)
