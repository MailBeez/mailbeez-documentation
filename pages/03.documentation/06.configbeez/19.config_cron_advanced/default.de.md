---
# http://learn.getgrav.org/content/headers
title: "Versandzeiten"
module_subtitle: "Versandzeiten je Modul festlegen"
slug: config_cron_advanced
# menu: MailBeez automatisch ausführen - Profi
date: 02-12-2013
published: true
publish_date: 02-12-2013
# unpublish_date: 02-12-2013
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
    tag: [pro, "Versandzeiten je Modul festlegen"]
module:
    code: 'config_cron_advanced'
    category: [configbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio,comp_saas]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2013/12/icon_cron_64.png'
    pro: 'pro'
    cert: 'true'
    price: '99 EUR'
    title_en: 'Run MailBeez Automatically Advanced'
    teaser_en: 'Add automation and powerful time control - also great in combination with traditional cronjobs'
    title_de: 'MailBeez automatisch ausführen - Profi'
    teaser_de: 'Automatisierung und volle Zeitkontrolle - auch gerade in Kombination mit traditionellen Cronjobs'
    author: 'MailBeez.com'
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

Ein Ersatzteilhändler verschickt Zahlungserinnerungen am Dienstagmorgen, wenn die Buchhaltung Rückfragen beantworten kann. Ein Zeitfenster von 8 bis 9 Uhr passt dazu. Ein Verarbeitungslauf um 8:30 Uhr kann die Erinnerung versenden. Um 9:30 Uhr ist das Zeitfenster bereits geschlossen.

## Ein Versandfenster für ein Modul festlegen

Öffne **System → Erweiterungen → Zusatzmodule → Versand und Zeitplanung** und wähle **Versandzeiten je Modul festlegen**.

[doc-steps]

[doc-step]
**Tag und Uhrzeit wählen**

Öffne **Zeiten festlegen**, suche die Zahlungserinnerung und wähle den Wochentag und die gewünschten Stunden. Andere Flows können ihren eigenen Zeitplan behalten.
[/doc-step]

[doc-step]
**Einen Lauf im Zeitfenster einplanen**

Prüfe, was die [automatische Verarbeitung](/configbeez/automatische-verarbeitung) startet. Das Zeitfenster erlaubt den Versand. Zum Start braucht es weiterhin einen Server-Cronjob oder einen geeigneten Shopbesuch. **Mindestabstand bei Shopbesuchen (Minuten)** gilt für Läufe, die durch Besuche ausgelöst werden.
[/doc-step]

[/doc-steps]
