---
# http://learn.getgrav.org/content/headers
title: "Globale Abmeldungen verarbeiten"
module_subtitle: "Abmeldungen von sämtlichen MailBeez-E-Mails verarbeiten"
slug: service_handler_block_all
# menu: Service: Block-All Handler
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
    tag: [pro, "Service: Block-All Handler"]
module:
    code: 'config_block_admin'
    category: [configbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    pro: 'pro'
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

[doc-callout type="note" title="Frühere MailBeez-Versionen"]
In V5 kannst du unter [Versand & Status](/sending-status) eine einzelne Zustellung prüfen. [Zur Referenz für ältere Versionen](/legacy).
[/doc-callout]

Wenn ein Kunde sämtliche MailBeez-E-Mails abbestellt, verarbeitet dieser frühere interne Dienst die Anfrage für das Opt-out-Modul. In [Erweitertes Opt-out mit Admin](/configbeez/config_block_admin) kannst du die gespeicherte Entscheidung prüfen und verwalten.

Wer alle E-Mails abbestellt, erwartet, dass diese Entscheidung auch für spätere Kampagnen gilt. Prüfe bei einer Rückfrage die Adresse und den Umfang der gespeicherten Sperre.
