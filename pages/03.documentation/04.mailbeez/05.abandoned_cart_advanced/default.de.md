---
# http://learn.getgrav.org/content/headers
title: "Warenkorberinnerung"
module_subtitle: "An offene Warenkörbe erinnern"
slug: abandoned_cart_advanced
date: 20-02-2018
published: true
publish_date: 20-02-2018
template: docs
visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: done
    category: [docs]
    tag: [pro,coupon, "An offene Warenkörbe erinnern"]
module:
    plans_position: after_guide
    mc_ready: true
    code: abandoned_cart_advanced
    category: [mailbeez]
    compatiblity: [comp_cre,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    thumbnail: ''
    pro: 'pro'
    cert: 'true'
    price: '179 EUR'
    title_de: 'Verlassene Warenkoerbe - Profi'
    teaser_de: ''
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

Eine Kundin meldet sich in deinem Kaffeeshop an, legt Espressobohnen und einen Wasserfilter in den Warenkorb und verlässt den Shop vor dem Kauf. Zwei Tage später erinnert sie die E-Mail „Dein Warenkorb ist noch da“ an ihren Einkauf. Darunter sieht sie die Bohnen, den Filter und den Link zurück in den Shop. Wer eine Kaffeemühle im Warenkorb hat, bekommt denselben Text und sieht die Mühle.

Für jede Erinnerungsstufe gibt es eine gemeinsame Vorlage. Du legst Text und Wartezeit fest und kannst einen Gutschein ergänzen. MailBeez fügt die Produkte aus dem jeweiligen Warenkorb ein. Dafür braucht der Flow ein Kundenkonto mit E-Mail-Adresse und gespeichertem Warenkorb.

## Flow einrichten

Öffne **Kampagnen → Automatisierung → MailBeez Flows → An offene Warenkörbe erinnern** und wähle **Optionen → Konfigurieren**.

[doc-steps]
[doc-step]
**Passende Warenkörbe auswählen**

Unter **Erste E-Mail: Wartezeit** legst du für alle passenden Warenkörbe dieselbe Frist fest, zum Beispiel zwei Tage. **Höchstalter für den Einstieg** legt fest, wie alt der Warenkorb beim Einstieg sein darf. Möchtest du nur bisherige Käufer anschreiben, aktiviere **Auf vorherige Bestellungen prüfen?**.
[/doc-step]
[doc-step]
**Abstand zwischen den Nachrichten festlegen**

Wähle unter **Anzahl der E-Mails** eine E-Mail oder ergänze eine weitere. Unter **Wartezeit vor E-Mail 2** kannst du etwa drei Tage eintragen. In der ersten E-Mail genügt eine kurze Erinnerung an den offenen Warenkorb. Möchtest du erst in der zweiten einen Rabatt anbieten, wähle dort **Gutschein Vorlage - Zweite Erinnerung**. Bei einer wiederkehrenden Erinnerung lassen sich die Wartezeit vor dem ersten Durchlauf und der Abstand zwischen den Wiederholungen getrennt einstellen.
[/doc-step]
[doc-step]
**Den Weg zurück in den Shop prüfen**

Nutze ein angemeldetes Testkonto mit einem ausreichend alten Warenkorb. Vergleiche die Produkte in der Testmail mit dem gespeicherten Warenkorb und folge dann dem Link zurück in den Shop. Nutzt du auch [Zum ersten Kauf einladen](/mailbeez/nopurchase_advanced), kannst du diesen zweiten Flow auf Konten mit leerem Warenkorb beschränken.
[/doc-step]
[/doc-steps]

Soll der Text zum Produkt passen? Im Rezept [Warenkorberinnerungen nach Produkt gestalten](/tutorials-und-rezepte/warenkorberinnerungen-nach-produkt) siehst du, wie das mit eigenen Flows gelingt.

Wie du Empfängerauswahl und Zeitplan prüfst, liest du unter [Den ersten Lauf prüfen](/quickstart/step-3-set-forget#den-ersten-lauf-pruefen).
