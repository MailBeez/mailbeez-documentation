---
title: "Zen Cart 1.3.x"
slug: basic-installation-zen-cart-1-3-x
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

Verwende für Zen Cart 1.3.8 / 1.3.9x das Integrationspaket v4.xx. Es legt eigene MailBeez-Tabellen an. Für das damalige Paket dieser Shopversion war PHP 5.3+ angegeben.

Prüfe vor dem Hochladen den Namen deines Adminverzeichnisses. In einem angepassten Zen-Cart-Shop kann das Ziel anders heißen als der Ordner im Archiv.

[plugin:content-inject](/content_blocks/download_installer)

1. Kopiere `catalog/admin/mailbeez.php` aus dem Paket in das Adminverzeichnis deines Shops.
2. Kopiere aus `catalog` den Ordner `mailhive` und die Datei `mailhive.php` ins Shop-Hauptverzeichnis neben die `index.php`.
3. Übernimm den Inhalt von `extras_zencart/zencart_1.3.x/admin` in das Adminverzeichnis.
4. Melde dich in der Zen-Cart-Administration an. Öffne **Tools → MailBeez** und wähle **Install**.

## Weiterleitungen und E-Mail-Layout

Füge in der `.htaccess` des Shops diese Bedingung unmittelbar vor der Regel ein, die alle übrigen Anfragen an die Zen-Cart-`index.php` weiterleitet.

```apache
RewriteCond %{REQUEST_URI} !^/mailhive [NC]
```

Erscheint die Nachricht in einer zusätzlichen Zen-Cart-Vorlage, sah diese Installation zwei Wege vor. Richte SMTP im MailBeez-E-Mail-System ein, um die Zen-Cart-Mailfunktion zu umgehen. Möchtest du diese weiterverwenden, suche in `includes/functions/functions_email.php` die Zeile `$email_html = zen_build_html_email_from_template($module, $block);` und prüfe die versionsspezifische Anpassung. [Anpassung für diese Version](http://www.zen-cart.com/showthread.php?158085-Mailbeez-After-Sales-Modules&p=1170912#post1170912) · [Zen-Cart-FAQ](/antworten-auf-haeufig-gestellte-fragen#zen-cart).

[plugin:content-inject](/content_blocks/run_installer)
