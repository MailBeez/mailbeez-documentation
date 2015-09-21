---
# http://learn.getgrav.org/content/headers
title: Commerce:SEO 2.0
slug: basic-installation-commerceseo
# menu: Commerce:SEO 2.0
date: 30-08-2011
published: true
publish_date: 30-08-2011
# unpublish_date: 30-08-2011
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
    tag: []
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

Die Installation ist erfolgreich mit *Commerce:SEO v2.0.11.2 CE* getestet

Die Installation ist in wenigen Schritten erledigt:

- Die neuen Dateien übertragen
- Menü-Eintrag anlegen
- Zugriffs-Rechte für den Admin vergeben (halb automatisch)
- MailBeez per Button-Klick installieren

MailBeez verwaltet eigene Tabellen - die vorhandenen Shop-Tabellen werden nicht verändert.


## Schritt 1 - Die neuen Dateien übertragen

folgende Datei in das admin-Verzeichnis kopieren

```
catalog/admin/mailbeez.php

```

folgende Dateien und Ordner in den Shop-Root kopieren

```
catalog/mailhive (Ordner)  
catalog/mailhive.php

```

## Schritt 2 - Menü-Eintrag anlegen

-- nicht update-sicher --

folgende Datei öffnen:

```bash
admin/includes/column\_left.php

```


finde

```
 '" class="menuBoxContentLink">Newsletter';

```


und danach folgendes einfügen:
 
```html 
if (($cs == '0') && ($aa['mailbeez'] == '1')) echo '<a href="' . xtc_href_link('mailbeez.php') . '">MailBeez</a>';
 
```


## Schritt 3 - Zugriffsrechte vergeben

einmalig im Browser

```bash

 (shop-url)/mailhive.php

```

aufrufen.

Hierdurch werden die erforderlichen Admin-Rechten für den HAUPT-Admin vergeben.
Falls erforderlich dann Zugriffs-Rechte im Admin System für weitere Admin-user vergeben

