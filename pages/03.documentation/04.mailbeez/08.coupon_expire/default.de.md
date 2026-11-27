---
# http://learn.getgrav.org/content/headers
title: "Gutschein läuft ab"
module_subtitle: "An auslaufende Gutscheine erinnern"
slug: coupon_expire
routes:
    aliases:
        - /dokumentation/mailbeez/gutschein-ablauf-erinnerung
# menu: Gutschein: Ablauf Erinnerung
date: 03-09-2010
published: true
publish_date: 03-09-2010
# unpublish_date: 03-09-2010
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
    tag: [pro,coupon, "An auslaufende Gutscheine erinnern"]
module:
    plans_position: after_guide
    code: 'coupon_expire'
    category: [mailbeez]
    compatiblity: [comp_cre,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio,comp_saas]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/10/coupon_32.png'
    pro: 'pro'
    cert: 'true'
    price: '79 EUR'
    title_en: 'Coupon Expiry Reminder'
    teaser_en: ''
    title_de: 'Gutschein-Ablauf Erinnerung'
    teaser_de: ''
    author: 'MailBeez.com'
author:
    name: admin
metadata:
    author: admin

---

Eine Kundin hat für ihre nächste Bestellung Kaffeebohnen einen Gutschein bekommen. Er läuft nächste Woche ab, doch die E-Mail mit dem Code liegt weit unten im Postfach. Eine Erinnerung mit Code, Ablaufdatum und Link zu den Bohnen macht das Einlösen einfacher.

MailBeez sucht nach ausgestellten Gutscheinen, die bald ablaufen. Dabei berücksichtigt es, wie oft der Code insgesamt und pro Empfänger eingelöst werden darf. Rabatt und Ablaufdatum des ursprünglichen Gutscheins gelten weiter.

## Flow einrichten

Öffne **Kampagnen → Automatisierung → MailBeez Flows → An auslaufende Gutscheine erinnern** und wähle **Optionen → Konfigurieren**.

[doc-steps]
[doc-step]
**Den Zeitraum vor Ablauf wählen**

Für eine Erinnerung rund eine Woche vorher trägst du unter **Verbleibende Gültigkeit: mindestens** 5 und unter **Verbleibende Gültigkeit: höchstens** 8 ein. Die Untergrenze zählt mit, die Obergrenze ist ausgeschlossen. Der geplante Lauf kann also Gutscheine mit fünf, sechs oder sieben verbleibenden Tagen finden.
[/doc-step]
[doc-step]
**Gutscheinbedingungen in die Erinnerung einfügen**

Gilt der Gutschein nur für Kaffeebohnen, trage „Nur für Kaffeebohnen gültig“ in die **Beschreibung** der [Gutscheinvorlage](/configbeez/common_services/config_coupon_engine) ein. Jeder aus der Vorlage erzeugte Gutschein übernimmt diesen Text.

Füge `[[$coupon_description]]` neben dem Code und dem Ablaufdatum in die Erinnerungs-E-Mail ein. Dort liest die Kundin die Bedingungen ihres Gutscheins.
[/doc-step]
[doc-step]
**Die Erinnerung in der Vorschau prüfen**

Wähle unter **Gutschein-Vorlage für Vorschau** die Vorlage für Kaffeebohnen. Prüfe, ob die Bedingungen neben dem Code stehen. Beim Versand verwendet MailBeez den auslaufenden Gutschein der Kundin.
[/doc-step]
[/doc-steps]
