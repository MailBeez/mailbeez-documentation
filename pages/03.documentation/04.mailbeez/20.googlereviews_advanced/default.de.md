---
# http://learn.getgrav.org/content/headers
title: "Google-Bewertungen"
module_subtitle: "Um Google-Bewertungen bitten"
slug: googlereviews_advanced
# menu: Googlereviews Profi
date:  18-03-2021
published: true
publish_date:  18-03-2021
# unpublish_date: 15-04-2015
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
    tag: [pro, "Um Google-Bewertungen bitten"]
    
module:
    plans_position: after_guide
    code: 'googlereviews_advanced'
    category: [mailbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio,comp_saas]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2013/06/top_64.png'
    pro: 'pro'
    cert: 'true'
    price: '99 EUR'
    title_en: 'Google Reviews Advanced'
    teaser_en: 'Advanced Features: Delay for international orders, multiple Order status, recognition of regular customers'
    title_de: 'Google Bewertungen Profi'
    teaser_de: 'Profi-Features: Verzögerung für internationale Bestellungen, Stammkunden-Erkennung und mehr'
    author: 'MailBeez.com'    
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

Eine Floristin liefert am Freitag einen Strauß aus. Am Montag kann die Kundin beurteilen, ob die Blumen pünktlich und frisch angekommen sind. Eine kurze Einladung verlinkt zur Google-Bewertungsseite des Geschäfts. Bei mehreren Filialen lohnt sich ein Blick darauf, welches Unternehmensprofil der Link öffnet.

## Flow einrichten

Öffne **Kampagnen → Automatisierung → MailBeez Flows → Um Google-Bewertungen bitten** und wähle **Optionen → Konfigurieren**.

<span id="zeitpunkt-fuer-die-google"></span>
<span id="diese-einstellungen-sind-"></span>

[doc-steps]
[doc-step]
**Das Google-Profil auswählen**

Kopiere den Bewertungslink des richtigen Google-Unternehmensprofils in **Ihre Google Reviews URL**. Öffne ihn auf dem Smartphone und kontrolliere Geschäftsname und Anschrift. Eine allgemeine Kartensuche nach dem Ort kann bei einem anderen Blumenladen landen.
[/doc-step]
[doc-step]
**Die Einladung planen**

Wähle unter **Bestell-Status für Bewertungen** den Status für abgeschlossene Zustellungen. Stehen unter **Wartezeit nach dem Statuswechsel** drei Tage, ist die Einladung bei einem Wechsel am Freitag ab Montag fällig. Wann sie verschickt wird, hängt vom nächsten geplanten Lauf ab. Setze **Höchstalter des Statuswechsels** höher als die Wartezeit.
[/doc-step]
[doc-step]
**Regelmäßige Bestellungen berücksichtigen**

Lege unter **Mindestabstand zwischen Einladungen** einen Abstand für Kunden fest, die oft Blumen bestellen. **Zusätzliche Wartezeit bei Auslandslieferungen** ergänzt Tage bei Lieferungen ins Ausland. Bedeutet dein auslösender Status bereits „Zugestellt“, prüfe, ob diese zusätzliche Wartezeit nötig ist.
[/doc-step]
[/doc-steps]

Das Rezept [Bewertungseinladung planen](/kochbuch/optimierter-ablauf-bitte-um-bewertung) führt dich von der Testbestellung bis zur Bewertungsseite.
