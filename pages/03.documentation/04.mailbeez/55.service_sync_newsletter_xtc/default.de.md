---
# http://learn.getgrav.org/content/headers
title: "Service: Interner Abgleich der Newsletter-Abo Informationen"
slug: service_sync_newsletter_xtc
# menu: Service: Interner Abgleich der Newsletter-Abo Informationen
date: 05-03-2014
published: true
publish_date: 05-03-2014
# unpublish_date: 05-03-2014
template: docs
# theme: false
visible: false
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: done
    category: [docs]
    tag: [core]
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


relevant für: xtcommerce basierende Shopsysteme

**WICHTIG: Diese Dokumentation lesen, bevor das Modul ausgeführt wird!**

## Warum?

Die aktuellen Versionen von modified-shop und Gambio haben die Verwaltung der Newsletter-Abo Informationen umstrukturiert.

**Bisher:**

In der Tabelle "customers" enthält das Feld "customers\_newsletter" den Abo-Status (0 oder 1). Dieser Status kann in der Kunden-Administration bearbeitet werden.

MailBeez nutzt diesen Status für: 
- allgemeiner Check, ob ein Newsletter-Abo vorliegt (falls MailBeez so konfiguriert ist)
- Newsletter Profi-Modul: Nur Kunden mit Newsletter-Abo werden angeschrieben

**Jetzt:**

Das Feld "customers\_newsletter" besteht weiterhin, wird aber nicht mehr aktualisiert. Auch kann dies in der modified-shop Kunden-Administration nicht mehr bearbeitet werden.

Die Tabelle "newsletter\_recipients" enthält alle Newsletter-Abo Informationen, sowohl von Kunden als auch von Interessenten.

Das MailBeez Grundsystem berücksichtigt nicht die Informationen in dieser Tabelle.

Das MailBeez Newsletter Profi System nutzt diese Tabelle als Quelle vom Typ "Interessenten". Somit können gezielt nur Kunden oder nur Interessenten angeschrieben werden.

## Was passiert?

Das Modul gleicht für alle Kunden den Status aus der Tabelle "newsletter\_recipients" ab, d.h. wenn dort ein aktiver Eintrag "1" vorliegt, wird dieser in die Tabelle "customers" übernommen.

Wenn kein Eintrag vorliegt, wird der Newsletter Status auf 0 gesetzt.

## Was kann verloren gehen?

Da bei einem "Unsubscribe" über den Shop der Eintrag aus der Tabelle "newsletters\_recipients" gelöscht wird, ist nicht nachvollziehbar, ob ein Kunden sich ausgetragen hat.

Daher sind nach dem Abgleich nur noch die Kunden für den Newsletter angemeldet, welche in der Tabelle "newsletter\_recipients" vorhanden sind.

Somit vorher prüfen, ob die Tabelle "newsletter\_recipients" alle aktuellen Newsletter Empfänger enthält.
