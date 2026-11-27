---
# http://learn.getgrav.org/content/headers
title: "Google Analytics O’Pie"
module_subtitle: "Das frühere Google-Analytics-Diagramm im Dashboard auswerten"
slug: dashboard_ga
# menu: Der Google Analytics O'Pie
date: 07-05-2012
published: true
publish_date: 07-05-2012
# unpublish_date: 07-05-2012
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
    tag: [core, "Der Google Analytics O'Pie"]
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

[doc-callout type="note" title="Frühere MailBeez-Versionen"]
In V5 kannst du unter [Tracking-Codes](/configbeez/tracking-codes) Kampagnenparameter für Links einrichten. [Zur Referenz für ältere Versionen](/legacy).
[/doc-callout]

Lies die Kampagnenbesuche im früheren Google-Analytics-Profil ab, das mit diesem Widget verbunden ist. Dafür waren die damalige Analytics-Anbindung und das Tracking im Shop erforderlich. Die folgenden Schritte beziehen sich auf die damalige Google API Console.

Lies das Diagramm mit Datum und Kampagnenname einer konkreten E-Mail. Mehrere Nachrichten können auf dieselbe Zielseite im Shop führen.

## Vorhandenes Analytics-Profil verbinden

1. Wähle das Projekt in der damaligen Google API Console und aktiviere die Analytics API. Erstelle für eine Webanwendung eine OAuth-Client-ID.
2. Übernimm den JavaScript-Ursprung und die Weiterleitungs-URL aus dem MailBeez-Widget in die entsprechenden OAuth-Felder. Kopiere danach Client-ID und Clientschlüssel in das Widget.
3. Bestätige die Eingabe und wähle **Connect**. Erlaube den Zugriff mit dem Google-Konto, dem das Berichtsprofil gehört. Wähle das Profil im Widget aus.

Das Widget brauchte das Tracking auf den Shopseiten. Löste jemand den per E-Mail erhaltenen Gutschein später auf einem anderen Gerät ein, konnte MailBeez den Gutschein zuordnen, auch wenn Analytics den Kauf nicht dem ursprünglichen Klick zuordnete.
