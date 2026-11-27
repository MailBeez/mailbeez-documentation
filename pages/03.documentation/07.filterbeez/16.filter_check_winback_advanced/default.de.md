---
# http://learn.getgrav.org/content/headers
title: "Rückgewinnungs-Abgleich"
module_subtitle: "Kunden nach einer früheren Rückgewinnungs-E-Mail nicht erneut anschreiben"
slug: filter_check_winback_advanced
# menu: Kundenrückgewinnung Profi Cross Check
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
    tag: [pro, "Kundenrückgewinnung Profi Cross Check"]
module:
    code: 'winback_advanced'
    category: [filterbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    pro: 'pro'
    cert: 'true' 

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
In V5 kannst du unter [Inaktive Kunden zurückgewinnen](/mailbeez/winback_advanced) Erinnerungen zur Kundenrückgewinnung einrichten. [Zur Referenz für ältere Versionen](/legacy).
[/doc-callout]

Beim Wechsel vom einfachen Modul zur Profi-Ausgabe berücksichtigte dieser frühere Filter die bisherige Versandhistorie und Abmeldungen. Wer die Nachricht über das einfache Modul bereits erhalten oder gesperrt hatte, sollte sie über das Profi-Modul nicht erneut bekommen.

Ein Kunde kann auch nach einer früheren Rückgewinnungs-E-Mail inaktiv sein. Der damalige Versand zählt, wenn das neue Modul über eine erneute Ansprache entscheidet.

Bei einem Shop, der direkt mit der Profi-Ausgabe begann, gibt es keine Versandhistorie des einfachen Moduls zu prüfen.
