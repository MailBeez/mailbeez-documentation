---
# http://learn.getgrav.org/content/headers
title: "Bewertungen in E-Mails"
module_subtitle: "Shopper Approved-Bewertungen in E-Mails anzeigen"
slug: filter_add_shopperapproved
menu: "Bewertungen in E-Mails"
published: true
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
    tag: [pro, "Shopper Approved-Bewertungen in E-Mails anzeigen"]
module:
    code: 'config_shopperapproved_integration'
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

Wer empfindliches Keramikgeschirr bestellt, möchte vielleicht wissen, wie gut frühere Lieferungen verpackt waren. In der E-Mail kannst du dazu einige Erfahrungsberichte von Shopper Approved zeigen. [Importiere zuerst die Bewertungen deines Shops](/configbeez/integrations/config_shopperapproved_integration), damit die Vorlage Kommentare zur Auswahl hat.

## Passende Bewertungen für die E-Mail auswählen

Öffne **System → Erweiterungen → Zusatzmodule → Kundendaten und Inhalte** und wähle **Shopper Approved-Bewertungen in E-Mails anzeigen**.

[doc-steps]

[doc-step]
**Die Auswahl eingrenzen**

Lege **Bewertungen pro E-Mail** und **Mindestbewertung** fest. Über **Mindestlänge des Kommentars (Zeichen)** kannst du knappe Einwortbewertungen auslassen, wenn du einen lesbaren Erfahrungsbericht zeigen möchtest.
[/doc-step]

[doc-step]
**Die Auswahl in der Nachricht prüfen**

Aktiviere **Bewertungen zufällig auswählen** für eine wechselnde Auswahl. Bleibt die Option aus, erscheinen die neuesten passenden Bewertungen. Öffne die Vorschau einer Vorlage mit Bewertungsblock. Ist der Block leer, prüfe, ob ein importierter Kommentar beide Mindestwerte erfüllt.
[/doc-step]

[/doc-steps]
