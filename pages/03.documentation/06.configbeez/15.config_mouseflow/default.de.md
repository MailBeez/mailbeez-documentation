---
# http://learn.getgrav.org/content/headers
title: "Mouseflow"
module_subtitle: "Shopbesuche aus E-Mails in Mouseflow ansehen"
slug: config_mouseflow
# menu: Mouseflow Integration
date: 20-10-2011
published: true
publish_date: 20-10-2011
# unpublish_date: 20-10-2011
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
    tag: [core, "Shopbesuche aus E-Mails in Mouseflow ansehen"]
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

Ein Angebot für Ersatzfilter wird angeklickt, doch im Support häuft sich die Frage, welcher Filter passt. Öffne den Produktfinder über eine Testmail. Kannst du diesen Besuch in Mouseflow wiederfinden, lässt sich später leichter nachvollziehen, an welcher Stelle Käufer hängen bleiben.

<span id="diese-einstellungen-sind-"></span>

## Aufzuzeichnende Besuche auswählen

Öffne **System → Erweiterungen → Externe Dienste → Feedback und Auswertung** und wähle **Shopbesuche aus E-Mails in Mouseflow ansehen**.

[doc-steps]

[doc-step]
**Die gewünschten Besuche festlegen**

Trage unter **Kanäle für die Aufzeichnung** für Besuche aus E-Mails `MailBeez` ein, für andere Besuche `Other` oder für beide `MailBeez, Other`. Über **Ausgeschlossene IP-Adressen** kannst du Büro oder Agentur ausnehmen. Das gilt auch für eigene Tests von dort.
[/doc-step]

[doc-step]
**Einen neuen Besuch prüfen**

Füge unter **Mouseflow-Trackingcode** das vollständige Skript aus deinem Mouseflow-Konto ein. Öffne den Produktlink aus der Testmail in einer neuen Browsersitzung und suche den Besuch in Mouseflow. Eine bereits laufende Aufzeichnung kann nach einer Änderung der Kanäle weiterlaufen.
[/doc-step]

[/doc-steps]
