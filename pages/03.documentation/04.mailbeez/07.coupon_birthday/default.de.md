---
# http://learn.getgrav.org/content/headers
title: "Geburtstagsgruß"
module_subtitle: "Zum Geburtstag gratulieren"
slug: coupon_birthday
# menu: Geburtstags-Email mit Gutschein
date: 26-10-2010
published: true
publish_date: 26-10-2010
# unpublish_date: 26-10-2010
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
    tag: [pro,coupon, "Zum Geburtstag gratulieren"]
module:
    plans_position: after_guide
    mc_ready: true
    code: 'coupon_birthday'
    category: [mailbeez]
    compatiblity: [comp_cre,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio,comp_saas]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/10/coupon_32.png'
    pro: 'pro'
    cert: 'true'
    price: '99 EUR'
    title_en: 'Birthday Coupon'
    teaser_en: ''
    title_de: 'Gutschein zum Geburtstag'
    teaser_de: ''
    author: 'MailBeez.com'
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

Stell dir vor, du betreibst eine Confiserie. Zum Geburtstag schenkst du einem Stammkunden einen Gutschein für eine Schachtel Pralinen. Du kannst am Geburtstag gratulieren oder ein paar Tage vorher schreiben, damit die Pralinen rechtzeitig bestellt werden können.

MailBeez verwendet das Geburtsdatum aus dem Kundenprofil. Fehlt dort ein gültiger Geburtstag, kommt der Kontakt für diesen Flow nicht infrage. MailBeez merkt sich den Gruß für das jeweilige Jahr.

## Flow einrichten

Öffne **Kampagnen → Automatisierung → MailBeez Flows → Zum Geburtstag gratulieren** und wähle **Optionen → Konfigurieren**.

[doc-steps]
[doc-step]
**Den Versandtag festlegen**

Wähle unter **Versand vor dem Geburtstag** eine 0 für den Geburtstag selbst oder eine 3, wenn der Gruß bis zu drei Tage vorher ankommen darf. Unter **Nachträgliche Glückwünsche zulassen** legst du fest, ob der nächste Lauf einen verpassten Geburtstag nachholen darf.
[/doc-step]
[doc-step]
**Das Geschenk einrichten**

Dein Shop muss Gutscheine unterstützen. Wähle unter **Gutschein Vorlage** das Angebot für die Pralinen und lege unter **Gültigkeit des Gutscheins** die Laufzeit fest. Vierzehn Tage zählen ab Versand, auch bei einem vorgezogenen Gruß. Nenne das Ablaufdatum, damit der Kunde weiß, bis wann er bestellen kann.
[/doc-step]
[doc-step]
**Den Text mit einem Testprofil lesen**

Nutze für die Vorschau ein Profil mit passendem Geburtstag. „Heute ist dein Geburtstag“ passt zum Versand am Geburtstag selbst. Bei einem früheren Gruß funktioniert „Eine Kleinigkeit zu deinem Geburtstag“ besser. Prüfe Code und Bedingungen unter [Gutscheine](/content/coupons).
[/doc-step]
[/doc-steps]

Möchtest du stattdessen an die Registrierung in deinem Shop anknüpfen, nutze [Zum Kundenjubiläum gratulieren](/mailbeez/coupon_anniversary).
