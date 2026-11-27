---
title: Inhalts-Generator
module_subtitle: "Produktempfehlungen mit einem Live-Content-Baustein einfügen"
slug: config_content_engine
routes:
    default: /dokumentation/configbeez/config_content_engine
        
published: true
template: docs
visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: done
    category: [docs]
    tag: [pro]
module:
    code: 'pro'
    category: [pro]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio,comp_saas]   
    pro: 'pro'

# added collection selector

author:
    name: admin
metadata:
    author: admin

---

[doc-callout type="note" title="Frühere Moduleinstellungen"]
Einstellungen in der aktuellen App findest du unter [System](/app-system). [Zur Referenz für ältere Versionen](/legacy).
[/doc-callout]

Füge den Baustein `Live Content` ein, wenn eine Kampagne Produkte empfehlen soll. Wähle eine Quelle passend zur Nachricht. Eine Warenkorberinnerung kann die Artikel im Warenkorb zeigen, eine Nachbestell-E-Mail passende Produkte zu einem früheren Kauf.

Stimme die Empfehlungen auf den Anlass ab. Bei einer Erinnerung an einen offenen Einkauf sollte für den Kunden erkennbar sein, warum die aufgeführten Artikel in dieser E-Mail stehen.

![Einstellungen für die Quelle der Produktempfehlungen](Screen_config.de.png)

- <span id="katalog-basierte-produkt-"></span>**Katalog**<br>
  Wähle Top-Produkte, nach Datum sortierte Neuheiten oder Sonderangebote.
- <span id="produkt-empfehlungen-nach"></span>**Frühere Käufe**<br>
  Zeige Cross-Selling-Artikel oder häufig zusammen gekaufte Produkte passend zum bisherigen Einkauf.
- <span id="produkt-empfehlungen-nach-1"></span>**Warenkorb**<br>
  Zeige den Warenkorbinhalt, Cross-Selling-Artikel oder Produkte, die oft mit diesen Artikeln gekauft wurden.

Bei bestellbasierten Quellen wählst du Bestellstatus und Zeitraum. Ein kürzerer Zeitraum gewichtet das jüngere, saisonale Kaufverhalten stärker. Zen Cart benötigt für Cross-Selling-Quellen [Cross Sell Advanced](https://www.zen-cart.com/downloads.php?do=file&id=400).

<span id="keine-doppelten-produkte"></span><span id="fsk18-und-gruppen-check"></span>Mit **Bereits gezeigte Produkte ausschliessen** vermeidest du doppelte Artikel in mehreren Bausteinen. Modified-Shop und Gambio berücksichtigen standardmäßig FSK18- und Gruppenberechtigungen. Prüfe diese Vorgaben, bevor du die optionale Prüfung änderst. Auf anderen Plattformen ist die Option ausgeblendet.
