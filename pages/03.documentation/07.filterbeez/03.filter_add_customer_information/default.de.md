---
# http://learn.getgrav.org/content/headers
title: "Kundendaten"
module_subtitle: "Weitere Kundendaten in E-Mails einfügen"
slug: filter_add_customer_information
routes:
    aliases:
        - /dokumentation/filterbeez/erweiterte-kundendaten
# menu: Erweiterte Kundendaten
date: 26-09-2011
published: true
publish_date: 26-09-2011
# unpublish_date: 26-09-2011
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
    tag: [pro, "Weitere Kundendaten in E-Mails einfügen"]
module:
   code: 'filter_add_customer_information'
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

Dein Kaffeehandel möchte Geschäftskunden in einer E-Mail mit dem Namen ihres Cafés ansprechen. Privatkunden bestellen dieselben Bohnen, lassen das Firmenfeld aber meist leer. Das Zusatzmodul stellt der Vorlage die gespeicherten Kundendaten zur Verfügung. So kannst du den Text für beide Fälle passend formulieren.

## Ein Feld aus der Standardadresse verwenden

Öffne **System → Erweiterungen → Zusatzmodule → Kundendaten und Inhalte** und wähle **Weitere Kundendaten in E-Mails einfügen**.

Der Firmenname steht der Vorlage als `$data.customer.company` zur Verfügung. Er stammt aus der Standardadresse des Kundenkontos. Ein Paket kann an eine andere Firma oder Filiale gehen. Verwende dieses Feld deshalb dort, wo es um den Kontoinhaber geht.

Wähle unter [Vorschau & Testdaten](/configbeez/vorschau-testdaten) nacheinander das Café und einen Privatkunden. Prüfe, ob der Firmenname beim Café erscheint und ob der Satz beim Privatkunden auch ohne Namen vollständig ist.
