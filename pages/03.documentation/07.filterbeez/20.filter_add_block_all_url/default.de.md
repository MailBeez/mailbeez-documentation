---
# http://learn.getgrav.org/content/headers
title: "Abmeldelink"
module_subtitle: "Link zur vollständigen Abmeldung einfügen"
slug: filter_add_block_all_url
# menu: Add Block All Link
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
    tag: [pro, "Link zur vollständigen Abmeldung einfügen"]
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

Ein Kunde erhält deinen Geburtstagsgruß und möchte künftig gar keine MailBeez-E-Mails aus deinem Shop bekommen. Schon am Link im Footer sollte er erkennen, dass seine Entscheidung auch für spätere Erinnerungen gilt. Ein möglicher Wortlaut ist „Alle MailBeez-E-Mails dieses Shops abbestellen“.

## Den Link zur vollständigen Abmeldung einfügen

Öffne **System → Erweiterungen → Zusatzmodule → Einwilligungen und Sperren** und wähle **Link zur vollständigen Abmeldung einfügen**.

In den Sperreinstellungen kann dein Shop einzelne Module von der vollständigen Abmeldung ausnehmen. Prüfe die Ausnahmen, bevor du im Footer beschreibst, welche E-Mails abbestellt werden.

Das Hilfsmodul stellt der Vorlage den persönlichen Abmeldelink bereit. Verwende den für die jeweilige Nachricht erzeugten Link. Kopierst du ihn aus einer fremden E-Mail, gehört er weiterhin zu deren Empfänger.

Prüfe den Footer in einer Nachricht an dein eigenes Testkonto. Bietest du zusätzlich die Abmeldung von einer einzelnen Kampagne an, lies beide Linktexte nebeneinander. Wie du eine vorhandene Sperre nachsiehst, erfährst du unter [E-Mail-Sperren](/filterbeez/filter_check_block_all).
