---
# http://learn.getgrav.org/content/headers
title: "Gutschein-Beispiele"
#menu: Beez-O-Graph
slug: gutschein-rezepte

routes:
    aliases:
        - /dokumentation/kochbuch/newsletter-rezepte


original_v4: true
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

<span id="problem"></span>Mit dem Willkommensgutschein bedankst du dich für eine bestätigte Anmeldung. Beim Geschenkgutschein lieferst du einen Wert, den jemand bereits bezahlt hat. Wähle den Ablauf passend zu diesem Unterschied. Für beide Beispiele braucht dein Shop ein unterstütztes Gutscheinsystem.

<span id="gutschein-fr-registrierung-zum-newsletter"></span>

## Gutschein nach der Anmeldung verschicken

1. <span id="lsung"></span>Öffne unter [Inhalte → Gutscheine](/content/coupons) die **Vorlagen**. Lege zum Beispiel einen festen Rabatt von 5 € an und bestimme Gültigkeit und Einlösebedingungen.
2. Öffne [Kontakte → Anmeldung](/contacts/signup-confirmation). Wähle die Bestätigungs-E-Mail für Interessenten oder Kunden und weise die Vorlage zu, sofern die Option verfügbar ist. Melde dich mit einer erreichbaren Testadresse an und folge dem Bestätigungslink.
3. Öffne die E-Mail, die nach der Bestätigung ankommt. Prüfe den Code, das Ablaufdatum und den Abzug im Warenkorb deines Testshops. Können sich auch Personen mit bestehendem Shopkonto anmelden, teste diesen Weg ebenfalls.

### Willkommensgutschein im Newsletter-Profi-Modul

<span id="erstellen-einer-dynamischen-empfngerliste"></span>Im früheren Newsletter-Editor gehörte die Willkommensmail zu einer Kampagne mit dynamischer Liste. Das ursprüngliche Beispiel verwendete die Newsletter-Abos im Shop und beschränkte das Alter des Kundenkontos auf null bis einen Tag. Ein langjähriger Kunde, der sich heute zum Newsletter anmeldet, kann dadurch fehlen. Teste die Liste deshalb mit einem neuen und einem älteren Konto.

[doc-image src="Screen_welcome_list.de.png" alt="Frühere Listenverwaltung mit dem eingestellten Kontoalter für den Willkommensgutschein" /]

<span id="erstellen-eines-willkommens-newsletters"></span>Ordne der Kampagne die Liste und dem Willkommensnewsletter die Gutscheinvorlage zu. Prüfe den Aktivitätszeitraum und die Vorschau in jeder Shopsprache. Schicke dir eine Testmail, bevor du den Newsletter für den Versand freigibst.

[doc-image src="Screen_welcome_email.de.png" alt="Früherer Newsletter-Editor mit der Willkommensmail und ihrem Gutschein" /]

<span id="gutschein-als-produkt"></span>

## Gekauften Geschenkgutschein versenden

<span id="problem-1"></span><span id="lsung-1"></span><span id="anlegen-eines-produktes-geschenk-gutschein"></span><span id="erstellen-einer-dynamischen-empfngerliste-1"></span>Lege im älteren Shop mit Newsletter-Profi-Modul einen Geschenkgutschein über 25 € als eigenen Artikel an. Wähle in der Liste die Käufer dieses Artikels aus und ordne der Gutscheinmail die Vorlage über 25 € zu. Prüfe, welche Bestellstatus deine Einrichtung berücksichtigt, bevor du eine Bestellung als bezahlt behandelst.

<span id="erstellen-der-geschenk-gutschein-email"></span>Teste eine bezahlte Gutscheinbestellung und eine Bestellung mit gewöhnlichen Artikeln. Nur der Käufer des Gutscheins soll einen einlösbaren Code über 25 € erhalten. Das ursprüngliche Rezept unterstützt einen Gutschein je Kunde und Kauf. Prüfe eine Bestellmenge von zwei Stück, bevor du mehrere Gutscheine in einer Bestellung anbietest. Für einen anderen Nennwert verwendest du einen eigenen Artikel mit passender Vorlage.
