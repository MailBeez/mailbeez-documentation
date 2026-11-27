---
# http://learn.getgrav.org/content/headers
title: "Sendetempo"
module_subtitle: "E-Mails mit Abstand versenden"
slug: filter_do_throttling_simple
routes:
    - aliases: /dokumentation/filterbeez/einfache-drosselung
# menu: Einfache Drosselung
date: 08-04-2011
published: true
publish_date: 08-04-2011
# unpublish_date: 08-04-2011
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
    tag: [pro, "E-Mails mit Abstand versenden"]
module:
    code: 'filter_do_throttling_simple'
    category: [filterbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    pro: 'pro'
    cert: 'true' 
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

Dein Versanddienst erlaubt 600 E-Mails pro Stunde. Eine Lieferung ist eingetroffen, und 300 Kunden warten auf eine Rückstandsmeldung. Bei einem einzelnen Lauf mit 600 E-Mails pro Stunde dauert der Versand ungefähr eine halbe Stunde. Laufen zwei Versandprozesse gleichzeitig, addieren sich ihre Raten.

## Das Tempo eines Verarbeitungslaufs einstellen

Öffne **System → Erweiterungen → Zusatzmodule → Versand und Zeitplanung** und wähle **E-Mails mit Abstand versenden**.

[doc-steps]

[doc-step]
**Die stündliche Rate wählen**

Trage unter **Angestrebte E-Mails pro Stunde** eine positive ganze Zahl ein. Bei 600 pro Stunde hält MailBeez innerhalb dieses Laufs grob sechs Sekunden Abstand zwischen den Nachrichten.
[/doc-step]

[doc-step]
**Eine passende Größe für den Lauf wählen**

Mit **E-Mails pro Verarbeitungslauf** begrenzt du die Anzahl je Lauf. Bei niedrigerem Tempo oder mehr Nachrichten bleibt der Lauf länger offen. Für eine Obergrenze aller Flow-E-Mails eines Tages gibt es das [Tageslimit](/filterbeez/filter_do_limit).
[/doc-step]

[/doc-steps]
