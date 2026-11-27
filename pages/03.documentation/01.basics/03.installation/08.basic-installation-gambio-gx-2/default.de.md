---
# http://learn.getgrav.org/content/headers
title: Gambio GX 2.x
slug: basic-installation-gambio-gx-2
# menu: Gambio GX 2
date: 15-06-2011
published: true
publish_date: 15-06-2011
# unpublish_date: 15-06-2011
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

Verwende das Installationspaket für Gambio GX 2.x vor 2.3. MailBeez legt eigene Tabellen an. Nutze ab 2.3 die integrierte Anbindung wie beschrieben unter [Gambio](/grundlagen/installation/gemeinsam-gambio).

[plugin:content-inject](/content_blocks/download_installer)

## Shopdateien übertragen

<span id="schritt-1-neue-dateien"></span><span id="mailbeez-installer"></span>Kopiere `catalog/admin/mailbeez.php` ins Adminverzeichnis des Shops. Kopiere `catalog/mailhive/` und `catalog/mailhive.php` ins Shopverzeichnis neben die `index.php`.

<span id="integration"></span>Kopiere die Integrationsdateien aus `/extra files/extras_gambio2.x` in die entsprechenden Shopverzeichnisse.

```text
/system/conf/admin_menu/menu_mailbeez.xml
/admin/includes/mailbeez/images/mailbeez_gambio_icon.png
/system/overloads/AdminApplicationBottomExtenderComponent/BeezDesk.inc.php
/system/overloads/AdminApplicationTopExtenderComponent/MailBeezAdminApplicationTopExtender.inc.php
/system/overloads/ApplicationTopExtenderComponent/MailBeezAnalyticsClicktracker.inc.php
/system/overloads/ApplicationTopExtenderComponent/MailBeezShopvotingDefault.inc
/system/overloads/ApplicationBottomExtenderComponent/MailBeezExtender.inc.php
```

## Adminmenü prüfen

<span id="schritt-2-menue-eintrag-a"></span><span id="gambio-gx2-fruehe-version"></span>Suche bei einer frühen GX-2-Version in `admin/includes/column_left.php` den Menüeintrag mit `BOX_CUSTOMERS_STATUS`. Füge in der nächsten Zeile den folgenden Eintrag ein. Er erscheint unter **Kunden**.

```php
if (($_SESSION['customers_status']['customers_status_id'] == '0') && ($admin_access['mailbeez'] == '1')) 
    echo '<ul>
            <li><a id="BOX_MAILBEEZ" href="' . xtc_href_link('mailbeez.php') . '"> MailBeez</a></li>
          </ul>';
```

<span id="gambio-gx2-mit-service-pa"></span>Vergib bei Service Pack 1.1 zuerst die Zugriffsrechte. Fehlt der Eintrag weiterhin, füge in derselben Datei unmittelbar über `# SAMPLE ITEM:` den folgenden Code ein.

```php
if (($_SESSION['customers_status']['customers_status_id'] == '0') && ($admin_access['module_newsletter'] == '1')) 
    echo '<ul>
            <li><a id="BOX_MAILBEEZ" href="' . xtc_href_link('mailbeez.php') . '">MailBeez</a></li>
          </ul>';
```

## Zugriff vergeben

<span id="schritt-3-zugriffsrechte-"></span>Rufe auf der Shopdomain einmal `/mailhive.php` auf. Dadurch erhält der Hauptadministrator Zugriff. Weitere Berechtigungen vergibst du einzeln in der Shopverwaltung.

Melde dich erneut an, leere den Seitencache und prüfe **Zusatzmodule**.

[plugin:content-inject](/content_blocks/run_installer)
