---
# http://learn.getgrav.org/content/headers
title: "Anmeldeformular einbinden"
module_subtitle: "Das Formular für die Newsletter-Anmeldung in eine Shopseite einbauen"
slug: site_signup
date: 28-06-2018
published: true
publish_date: 28-06-2018
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
    tag: [pro]
module:
    code: 'site_signup'
    category: [sitebeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio,comp_saas]
    pro: 'pro'

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

Binde das Newsletter-Formular dort ein, wo sich Besucher anmelden möchten, etwa im Fußbereich oder auf einer eigenen Newsletter-Seite. Dein Shop braucht die Formularintegration und muss Newsletter-Abonnenten verwalten können.

Nenne am Formular, was die Abonnenten erwartet, etwa eine monatliche Übersicht neuer Produkte. Das gibt Besuchern einen Grund zur Anmeldung und dir eine klare Vorgabe für den Newsletter.

1. Öffne **Kontakte → Anmeldung** und suche das Anmeldeformular im Ablauf.
2. Wähle im Menü des Anmeldeauslösers **Integrationscode**. Kopiere unter **Site Signup Integration** das JavaScript für deinen Shop in die Seite, auf der das Formular erscheinen soll.
3. Teste die Anmeldung mit einem neuen Interessenten und einem bestehenden Kunden. Folge in beiden Fällen dem Bestätigungslink.

In einer älteren SiteBeez-Installation öffnet `mailhive.php?m=mb_newsletter&ma=signup` das Formular direkt. Der optionale Parameter `topics` akzeptiert mehrere durch Kommas getrennte Themen-IDs. Für eine eigene Schaltfläche nutzt das Widget `data-sitebeez-trigger="custom_code"` mit der passenden Widget-Einstellung.
