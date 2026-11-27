---
# http://learn.getgrav.org/content/headers
title: "Erstkauf fördern"
module_subtitle: "Registrierte Kunden ohne Bestellung zum ersten Kauf einladen"
slug: nopurchase_advanced
routes:
    aliases:
        - /dokumentation/mailbeez/nopurchace_advanced
# menu: Kunden ohne Kauf Profi
date: 07-10-2011
published: true
publish_date: 07-10-2011
# unpublish_date: 07-10-2011
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
    tag: [pro,coupon, "Zum ersten Kauf einladen"]
module:
    plans_position: after_guide
    mc_ready: true
    code: 'nopurchase_advanced'
    category: [mailbeez]
    compatiblity: [comp_cre,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio,comp_saas]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/10/icon_321.png'
    pro: 'pro'
    cert: 'true'
    price: '179 EUR'
    title_de: 'Kunden ohne Kauf - Profi'
    teaser_de: 'Kontaktiere Kunden, welche noch keine Bestellung getätigt haben.'
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

Jemand legt in deinem Weinshop ein Konto an, entscheidet sich aber noch für keine Flasche. Ein paar Tage später kann eine kurze Vorstellung deiner Probierpakete bei der ersten Bestellung helfen. Bleibt der Kauf aus, kannst du in einer zweiten E-Mail einen Gutschein anbieten.

Für diesen Flow zählen das Datum der Registrierung und die Frage, ob der Kunde bereits bestellt hat. Wer schon ein Paket gekauft und danach länger nichts bestellt hat, passt zu [Inaktive Kunden zurückgewinnen](/mailbeez/winback_advanced).

## Flow einrichten

Öffne **Kampagnen → Automatisierung → MailBeez Flows → Zum ersten Kauf einladen** und wähle **Optionen → Konfigurieren**.

[doc-steps]
[doc-step]
**Den Zeitpunkt für die erste Einladung wählen**

Trage für die Vorstellung der Probierpakete unter **Erste E-Mail: Wartezeit** drei Tage ein. Mit **Höchstalter für den Einstieg** legst du fest, wie weit der erste Lauf bei den Registrierungen zurückblickt. Bei 14 Tagen kommen zum Beispiel auch Konten aus der Vorwoche infrage.
[/doc-step]
[doc-step]
**Anzahl der E-Mails und Angebot festlegen**

Wähle unter **Anzahl der E-Mails** eine E-Mail für die Probierpakete oder zwei für die Kombination mit einem Gutschein. Setze **Wartezeit vor E-Mail 2** für die zweite E-Mail auf sieben Tage. Die Woche zählt ab dem Versand der ersten Nachricht. Für das Angebot wählst du **Gutschein Vorlage - Zweite Aktivierung**.
[/doc-step]
[doc-step]
**Den Warenkorb berücksichtigen**

Nutzt du bereits [Warenkorberinnerungen](/mailbeez/abandoned_cart_advanced), aktiviere hier **Leeren Warenkorb voraussetzen**. Wer schon Wein im Warenkorb hat, kann dann eine Erinnerung zur eigenen Auswahl erhalten.
[/doc-step]
[/doc-steps]

[Den ersten Lauf prüfen](/quickstart/step-3-set-forget#den-ersten-lauf-pruefen)
