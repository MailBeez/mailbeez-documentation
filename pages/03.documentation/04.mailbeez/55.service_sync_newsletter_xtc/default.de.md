---
# http://learn.getgrav.org/content/headers
title: "Newsletter-Abos abgleichen"
module_subtitle: "Die Newsletter-Abodaten des Shops mit MailBeez abgleichen"
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
    tag: [core, "Service: Interner Abgleich der Newsletter-Abo Informationen"]
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
In V5 kannst du unter [Anmeldung](/contacts/signup-confirmation) die Newsletter-Bestätigung prüfen. [Zur Referenz für ältere Versionen](/legacy).
[/doc-callout]

<span id="warum"></span>Diese Anleitung gilt für ältere modified-shop- und Gambio-Installationen, die Newsletter-Anmeldungen in `newsletter_recipients` verwalteten. Das Feld `customers.customers_newsletter` konnte weiterhin vorhanden sein, obwohl der Shop es nicht mehr aktualisierte.

Kundenkonto und Eintrag in der Newsletter-Empfängertabelle können zur selben Person gehören. Vergleiche beide Datensätze anhand einer Testadresse, wenn die Angaben voneinander abweichen.

> [!WARNING]
> <span id="was-kann-verloren-gehen"></span>Prüfe vor dem Abgleich, ob `newsletter_recipients` alle aktuellen Abonnenten enthält. Ohne passenden Eintrag erhält das Kundenkonto den Abostatus `0`. An einem fehlenden Datensatz allein lässt sich nicht erkennen, ob die Person sich abgemeldet hatte oder nie angemeldet war.

<span id="was-passiert"></span>Die frühere Aboprüfung von MailBeez las das Kundenfeld. Newsletter Profi konnte die Empfängertabelle außerdem für Interessentenlisten verwenden. Der Abgleich überträgt den aktuellen Status aus der Empfängertabelle in die Kundenkonten. Prüfe ein bekanntes Abo und ein abgemeldetes Konto, bevor du anhand dieses Felds Empfänger auswählst.
