---
# http://learn.getgrav.org/content/headers
title: "Kunden zurückgewinnen"
module_subtitle: "Inaktive Kunden zurückgewinnen"
slug: winback_advanced
routes:
    aliases:
        - /dokumentation/mailbeez/coupon_winback
        - /dokumentation/mailbeez/coupon_powerpack
        - /dokumentation/mailbeez/gutschein-kampagne-verschicken
# menu: Kundenrückgewinnung Profi
date: 09-08-2011
published: true
publish_date: 09-08-2011
# unpublish_date: 09-08-2011
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
    tag: [pro, coupon, "Kundenrückgewinnung", "Inaktive Kunden", "Inaktive Kunden zurückgewinnen"]
module:
    plans_position: after_guide
    code: 'winback_advanced'
    category: [mailbeez]
    compatiblity: [comp_cre,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio,comp_saas]
    mc_ready: true
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/09/icon_32.png'
    pro: 'pro'
    cert: 'true'
    price: '179 EUR'
    title_en: 'Winback Advanced'
    teaser_en: 'the ultimate winback machine'
    title_de: 'Kundenrückgewinnung Profi'
    teaser_de: 'Das Profi-Modul zur aktiven Kundenrückgewinnung - mehrstufig mit Gutscheinen'
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

<span id="beispiel-kaffee-nachbeste"></span>

Stell dir vor, du betreibst einen Onlineshop für Kaffee. Eine Stammkundin bestellt etwa alle zwei Monate ihre Lieblingsbohnen. Diesmal sind schon drei Monate vergangen. Mit einer kurzen E-Mail fragst du „Geht dein Kaffee zur Neige?“ und verlinkst direkt zu den Bohnen. Bestellt sie wieder, hat die Erinnerung ihren Zweck erfüllt. Andernfalls kannst du dich zwei Wochen später noch einmal melden, vielleicht mit einem Gutschein.

Für solche Kaufpausen gibt es den fertigen MailBeez Flow **Inaktive Kunden zurückgewinnen**. Du kannst eine, zwei oder drei E-Mails verschicken oder danach regelmäßig erinnern. Wie viel Zeit zwischen den E-Mails vergeht, legst du selbst fest. Wer denselben Schritt erreicht, bekommt die dafür vorbereitete Nachricht.

<span id="wer-kommt-fuer-die-erste-"></span>

## Wie weit soll der erste Lauf zurückblicken?

Angenommen, du möchtest 90 Tage warten. Die Frist beginnt, sobald die letzte Bestellung den von dir gewählten Versandstatus erreicht. Wenn du den Flow einschaltest, warten manche Kunden schon länger. Mit einem Rückblick von 120 Tagen erfasst der erste Lauf auch Erinnerungen, die seit bis zu einem Monat fällig sind. Möchtest du mit weniger älteren Bestellungen starten, wähle zum Beispiel 100 Tage. Dann holst du nur die Erinnerungen der letzten zehn Tage nach.

Danach wandert das Zeitfenster bei jedem Lauf mit. Weitere Kunden kommen für die erste E-Mail infrage, sobald die 90 Tage verstrichen sind. MailBeez merkt sich, wer die erste Erinnerung zu einer Bestellung schon bekommen hat. Wer morgen noch ins Zeitfenster fällt, erhält sie also kein zweites Mal.

## Flow einrichten

Öffne **Kampagnen → Automatisierung → MailBeez Flows → Inaktive Kunden zurückgewinnen** und wähle **Optionen → Konfigurieren**.

[doc-steps]
[doc-step]
**Bestellungen und Zeitraum auswählen**

Wähle unter **Bestell-Status** den Status, den dein Shop beim Versand vergibt. Du kannst auch mehrere auswählen. Trage für das Kaffeebeispiel unter **Alter der letzten Bestellung (Status)** 90 Tage und unter **Höchst-Alter der Bestellung** 120 Tage ein.
[/doc-step]
[doc-step]
**Anzahl und Abstand der E-Mails festlegen**

Unter **Prozess-Ablauf - Anzahl an Aktivierungsversuchen (1-Loop)** stehen **1 Schritt**, **2 Schritten**, **3 Schritten** und **Loop** zur Wahl. Wähle für den Kaffeeshop die Option **2 Schritten** und trage unter **Verzögerung der Zweiten Aktivierung** 14 Tage ein. Die zwei Wochen beginnen mit dem Versand der ersten E-Mail. Bestellt der Kunde wieder, entfallen die weiteren Erinnerungen zur früheren Bestellung.

Bei **3 Schritten** oder **Loop** legst du unter **Verzögerung der Dritten Aktivierung** fest, wie viele Tage nach der zweiten E-Mail die dritte folgt. Mit **Loop** kommt nach den ersten drei E-Mails eine wiederkehrende Erinnerung hinzu. **Verzögerung vor Start und Periode der Schleife** bestimmt sowohl die Wartezeit nach der dritten E-Mail als auch den Abstand zwischen den Wiederholungen.
[/doc-step]
[doc-step]
**E-Mails schreiben und Gutschein auswählen**

Verlinke in der ersten E-Mail direkt zu deinen Kaffeebohnen. Möchtest du in der zweiten einen Gutschein anbieten, wähle unter **Gutschein Vorlage - Zweite Aktivierung** eine Vorlage und lege die Gültigkeit fest.

Mit **Live Content** im E-Mail-Editor kannst du im selben Text unterschiedliche Produkte zeigen. Bietet dein Shop eine Produktquelle auf Basis früherer Käufe, kannst du darüber passende Bohnen empfehlen. MailBeez stellt die Auswahl beim Versand für jeden Empfänger zusammen.
[/doc-step]
[/doc-steps]

<span id="den-ersten-lauf-pruefen"></span>

Prüfe vor dem Einschalten den [ersten Lauf](/quickstart/step-3-set-forget#den-ersten-lauf-pruefen) oder [teste die Rückgewinnung mit zwei Bestellungen](/tutorials-und-rezepte/rueckgewinnung-testen). Verschickst du auch Warenkorberinnerungen, kannst du die Rückgewinnung mit **Auf leeren Warenkorb prüfen?** auf Kunden mit leerem Warenkorb beschränken. Prüfe bei Gastbestellungen die Folge-E-Mail separat. Für sie braucht MailBeez ein passendes Kundenkonto.

## Wann sich ein eigener Flow lohnt

Eine Kundin hat letzte Woche Bohnen bestellt. Trotzdem braucht sie vielleicht einen neuen Wasserfilter für die Maschine, die sie vor sechs Monaten gekauft hat. Für diese Erinnerung zählt der **Kauf der Maschine**. Unter [Eigene Flows](/mailbeez/eigene-flows) findest du Rezepte für Ersatzteile, Nachbestellungen und E-Mails, die Kunden den Einstieg mit ihrem neuen Produkt erleichtern.
