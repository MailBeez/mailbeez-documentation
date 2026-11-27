---
# http://learn.getgrav.org/content/headers
title: "Adress-Sperrliste"
module_subtitle: "E-Mail-Adressen nach Mustern sperren"
slug: filter_check_pattern_blacklist
routes:
    aliases:
    - /dokumentation/filterbeez/musterbasierte-blacklist
# menu: Musterbasierte Blacklist
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
    tag: [pro, "E-Mail-Adressen nach Mustern sperren"]
module:
   code: 'filter_check_pattern_blacklist'
   category: [filterbeez]
   compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio,comp_saas]
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

Dein Team bestellt bei jedem Test des Checkouts Ersatzteile mit eigenen Testadressen. Diese Konten sollen keine Kundenmailings erhalten. Nutzen alle eine eigene Testdomain, kannst du sie mit einer Regel erfassen.

## Einen eindeutigen Adressbestandteil wählen

Öffne **System → Erweiterungen → Zusatzmodule → Filter** und wähle **E-Mail-Adressen nach Mustern sperren**.

Trage unter **Gesperrte E-Mail-Adressbestandteile** pro Zeile eine feste Zeichenfolge ein. Groß- und Kleinschreibung zählen. Die Folge kann an jeder Stelle der Adresse vorkommen. Ein Sternchen gilt als gewöhnliches Zeichen.

So trifft `@test.example` auf `alex@test.example` und auch auf `alex@test.example.org` zu. `alex@shop.example` bleibt unberührt. Vergleiche vor dem Aktivieren gewünschte Treffer mit einer ähnlichen Adresse, die weiter E-Mails erhalten soll. Für die Sperre eines einzelnen Kunden helfen dir die [E-Mail-Sperren](/filterbeez/filter_check_block_all).
