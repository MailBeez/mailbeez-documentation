---
title: "CRE Loaded"
slug: basic-installation-cre-loaded
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

Verwende das Installationspaket für CRE Loaded PCI CE 6.4.1a. Für dieses frühere Paket war PHP ab 5.3 angegeben.

[plugin:content-inject](/content_blocks/download_installer)

## Shopdateien übertragen

Kopiere `catalog/admin/mailbeez.php` ins Adminverzeichnis des Shops. Kopiere `catalog/mailhive/` und `catalog/mailhive.php` ins Shopverzeichnis neben die `index.php`.

Übertrage die Integrationsdateien aus `extras_creloaded` an diese Stellen im Shop.

```text
admin/includes/runtime/applicationtop/MAILBEEZ_applicationtop_bottom.php  
admin/includes/runtime/marketing/MAILBEE_marketing_boxesbottom.php  
includes/runtime/applicationtop/MAILBEEZ_applicationtop_bottom.php
```

## Zugriff in CRE Loaded B2B vergeben

Öffne **Administrator → Menu File Access → Marketing → Insert File**. Wähle `mailbeez.php` und speichere. Prüfe den Eintrag unter **Marketing → MailBeez**.

[plugin:content-inject](/content_blocks/run_installer)
