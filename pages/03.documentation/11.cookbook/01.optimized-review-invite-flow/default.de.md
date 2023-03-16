---
# http://learn.getgrav.org/content/headers
title: Optimierter Ablauf zur Bitte um Bewertung
menu: Bewertungs-Ablauf
slug: optimierter-ablauf-bitte-um-bewertung


published: true
template: tutorial
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

---

Angeregt durch eine [Facebook-Diskussion](https://www.facebook.com/groups/gambioshop/posts/6397830620281588/?comment_id=6411061695625147&notif_id=1678870748497288&notif_t=group_comment_reply) hier eine kurze Beschreibung, wie Shopbetreiber die Bitte um Bewertung und damit Bewertungs-Ergebnisse optimieren können.  
 Dieser Ablauf lässt sich auf Shop- und Produkt-Bewertungen übertragen.



#### 1. Bitte um Einwilligung

Mit dem Modul [DSGVO Einwilligung](/dokumentation/configbeez/config_gdpr_consent) kann jede gewünschte Art von Einwilligung erstellt und im Check-out-Ablauf dem Kunden nach Abschluss der Bestellung angeboten werden. Anhand der Einwilligung und entsprechender Konfiguration kann MailBeez dann den Kunden die gewünschte Email senden.


#### 2. Automatisierte Mail mit Bitte um Bewertung

In Abhängigkeit vom Bestell-Status - somit volle Kontrolle, wann die Email versendet wird - und der konfigurierten Einwilligung kann MailBeez automatisiert z.B. 5 Tage nach Status "versendet" eine Mail mit Bitte um Bewertung bitten.
MailBeez hat bereits eine Auswahl an Automatisierungs-Modulen für die gängigsten [Shopbewertungs-Portale](/uber/integrationen). 


#### 3. Anpassung der Einladungs-Email

Die Email zur Einladung kann im visuellen Editor beliebig gestaltet werden (Ausnahme: Trustpilot). Über ein Inhalts-Element "2 Spalten" können 2 Buttons eingefügt werden:
![editor_full.de.png](editor_full.de.png?lightbox=true&resize=600)

(Der untere Hinweis auf ShopVote kann natürlich entfernt werden).

Der "Ja" Button führt in diesem Bespiel zur Bewertungs-Urls bei Shopvote, der "Nein" Button kann mit einer beliebigen URL verlinkt werden, z.B. mit einem einfachen Feedback-Formular im Shop.

Und die Emails sind natürlich auch gleich responsive:

![editor_mobil.de.png](editor_mobil.de.png?lightbox=true&resize=600)


Und wenn man möchte, könnte man diese Email auch gleich noch mit personalisierten Produkt-Empfehlungen anreichern - das Inhalts-Element "Live-Content" bietet hierzu eine Vielzahl an Möglichkeiten.