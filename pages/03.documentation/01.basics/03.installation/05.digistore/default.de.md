---
title: "Digistore bis 4.0"
slug: digistore
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

Verwende das Installationspaket für DigiStore 4.0. Für dieses frühere Paket war PHP ab 5.3 angegeben.

[plugin:content-inject](/content_blocks/download_installer)

## Shopdateien übertragen

Kopiere `catalog/admin/mailbeez.php` ins Adminverzeichnis des Shops. Kopiere `catalog/mailhive/` und `catalog/mailhive.php` ins Shopverzeichnis neben die `index.php`.

## MailBeez im E-Mail-Menü eintragen

Öffne `admin/advanced_menu.php` im Shopverzeichnis.

Suche in der vorhandenen Datei nach diesem Ausschnitt.

```text
stm_aix("p7i3","p0i0",[0,"    <?php echo   BOX_CONFIGURATION_EMAIL_OPTIONS?>  ","","",-1,-1,0,"configuration.php?gID=12"]);
```

Füge unmittelbar nach dieser Zeile den folgenden Eintrag ein.

```javascript
stm_aix("p7i3","p0i0",[0,"    MailBeez   ","","",-1,-1,0,"mailbeez.php"]);
```

[plugin:content-inject](/content_blocks/run_installer)
