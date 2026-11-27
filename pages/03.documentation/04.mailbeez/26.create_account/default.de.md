---
# http://learn.getgrav.org/content/headers
title: "Willkommensmail"
module_subtitle: "Neue Kunden begrüßen"
slug: create_account
# menu: Willkommens Email
date: 10-05-2011
published: true
publish_date: 10-05-2011
# unpublish_date: 10-05-2011
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
    tag: [pro, "Neue Kunden begrüßen"]
module:
    plans_position: after_guide
    code: 'create_account'
    category: [mailbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio,comp_saas]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/05/icon_32.png'
    pro: 'pro'
    cert: 'true'
    price: '29 EUR'
    title_en: 'Welcome Email'
    teaser_en: 'Send a welcome email to new customers'
    title_de: 'Willkommens Email'
    teaser_de: 'Sende eine Begr&uuml;ssung an neue Kunden'
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

Ein Kunde legt in deinem Fahrradteile-Shop ein Konto an und sucht passende Bremsbeläge. Die Bestätigung der Registrierung verschickt dein Shop bereits. Eine Willkommensmail am nächsten Tag kann ihm bei seiner eigentlichen Frage helfen. Zeige, wo die Modellnummer der Bremse steht, und verlinke deinen Teilefinder.

Den Flow löst die Registrierung aus. Auch wer schon bestellt hat, kann die Willkommensmail bekommen. Für ein Angebot ausschließlich an Kunden ohne Bestellung nutze [Zum ersten Kauf einladen](/mailbeez/nopurchase_advanced).

## Flow einrichten

Öffne **Kampagnen → Automatisierung → MailBeez Flows → Neue Kunden begrüßen** und wähle **Optionen → Konfigurieren**.

[doc-steps]
[doc-step]
**Den Zeitpunkt wählen**

Trage für den Teilefinder unter **Wartezeit nach der Registrierung** einen Tag ein. Wähle unter **Höchstalter des Kundenkontos** einen längeren Zeitraum. Mit sieben Tagen erreichst du beim Start kürzlich angelegte Konten. Langjährige Kunden bekommen dann keinen Willkommensgruß.
[/doc-step]
[doc-step]
**Dem Leser einen nächsten Schritt anbieten**

Öffne die Willkommensmail. Setze den Link zum Teilefinder direkt zum Hinweis auf die Modellnummer. Lies die E-Mail zusammen mit der Registrierungsbestätigung deines Shops. So erhält der Kunde die Kontodaten in einer Nachricht und die Hilfe zum Einkauf in der anderen.
[/doc-step]
[/doc-steps]

Vergleiche ein zwei Tage altes Testkonto mit einem, das vor einem Monat eröffnet wurde. Von beiden liegt nur das jüngere im Beispielfenster. Unter [Den ersten Lauf prüfen](/quickstart/step-3-set-forget#den-ersten-lauf-pruefen) siehst du, wie du die Auswahl vor dem Versand kontrollierst.
