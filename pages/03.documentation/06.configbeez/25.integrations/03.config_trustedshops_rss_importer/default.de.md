---
# http://learn.getgrav.org/content/headers
title: "Trusted Shops"
module_subtitle: "Bewertungen von Trusted Shops importieren"
slug: config_trustedshops_rss_importer
routes:
    default: /dokumentation/configbeez/config_trustedshops_rss_importer
# menu: Trustedshops Integration Suite
date: 26-10-2011
published: true
publish_date: 26-10-2011
# unpublish_date: 26-10-2011
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
    tag: [pro, "Bewertungen von Trusted Shops importieren"]
module:
    code: 'config_trustedshops_rss_importer'
    category: [configbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/10/icon_328.png'
    pro: 'pro'
    cert: 'true'
    price: '159 EUR'
    title_en: 'Trustedshops Integration Suite'
    teaser_en: 'Integrate your valuable Trustpilot Ratings in MailBeez Campaigs and your Storefront (SEO)'
    title_de: 'Trustedshops Integration Suite'
    teaser_de: 'Integrieren Sie Ihre wertvollen Bewertungen in MailBeez Kampagnen und den Shop (SEO)'
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

Du verkaufst gusseiserne Pfannen an Privatkunden und Küchenausstattung über einen zweiten Shop an die Gastronomie. Beide sammeln Bewertungen bei Trusted Shops. Sollen Privatkunden die Erfahrungen aus ihrem Shop sehen, brauchst du dessen Trusted-Shops-ID und am besten einen bekannten Kommentar aus genau diesem Profil.

## Das passende Trusted-Shops-Profil anbinden

Öffne **System → Erweiterungen → Externe Dienste** und wähle **Bewertungen von Trusted Shops importieren**.

[doc-steps]

[doc-step]
**Den Shop auswählen**

Gib dessen Kennung unter **Trusted-Shops-ID** ein. Speichere und wähle **Feed testen**. Vergleiche den Shop und eine aktuelle Bewertung mit dem Privatkundenprofil, bevor du die Bewertungen in E-Mails verwendest.
[/doc-step]

[doc-step]
**Die Aktualisierung einstellen**

Die **Cache-Dauer für Bewertungen (Minuten)** legt fest, wie lange MailBeez einen Abruf weiterverwendet. Nach Ablauf der Frist lädt die nächste Anfrage den Feed neu. Wie viele Bewertungen erscheinen, hängt auch vom Feed und von der Anzeige ab. **Maximal importierte Bewertungen** ist eine ältere Einstellung. Die tatsächlich angezeigte Anzahl kann abweichen.
[/doc-step]

[/doc-steps]

Für Einladungen an Käufer öffne den [Trusted-Shops-Flow](/mailbeez/trustedshops_advanced).
