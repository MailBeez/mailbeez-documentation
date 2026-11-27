---
# http://learn.getgrav.org/content/headers
title: "E-Mail-Sperren"
module_subtitle: "E-Mail-Versand für einzelne Kunden sperren"
slug: filter_check_block_all
# menu: Block Customer Administration Check
date: 16-10-2012
published: true
publish_date: 16-10-2012
# unpublish_date: 16-10-2012
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
    tag: [pro, "E-Mail-Versand für einzelne Kunden sperren"]
module:
    code: 'config_block_admin'
    category: [filterbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    pro: 'pro'
    cert: 'true'      
# added collection selector

author:
    name: kelly
metadata:
    author: kelly
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

Eine Kundin fragt, warum ihre Nachbestell-Erinnerung ausgeblieben ist. Die letzte Bestellung passt zum Flow, doch die Kundin hatte über einen Abmeldelink zuvor alle MailBeez-E-Mails abbestellt. Eine solche Sperre kann erklären, warum gleich mehrere Kampagnen ausbleiben.

## Den Umfang einer Sperre prüfen

Öffne **System → Erweiterungen → Zusatzmodule → Einwilligungen und Sperren** und wähle **E-Mail-Versand für einzelne Kunden sperren**.

Suche unter [Auswertung → MailBeez → Kontakte](/mailbeez-results/contacts) in **Abmeldungen & Sperren** nach der E-Mail-Adresse der Bestellung. Gilt der Eintrag für alle Module oder für eine einzelne Kampagne? Module, die dein Shop ausdrücklich von der globalen Sperre ausnimmt, können weiterhin senden. Betrifft der Eintrag nur Bewertungseinladungen, prüfe die Nachbestell-Erinnerung gesondert.

Findest du keine passende Sperre, kontrolliere den Bestellstatus und die Wartezeit des Flows. Suche die Adresse anschließend unter [Versand & Status](/sending-status). Eine Lücke im Versandverlauf allein belegt noch keine Abmeldung.
