---
title: Social Sharing
module_subtitle: "Prüfen, welche Ziele die früheren Teilen-Links für Produkte öffnen"
slug: config_social
routes:
    default: /dokumentation/configbeez/config_social
    aliases:
        - /dokumentation/configbeez/social-sharing

date: 31-08-2011
published: true
publish_date: 31-08-2011
template: docs
visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: done
    category:
        - docs
    tag: [pro]
module:
    code: 'pro'
    category: [pro]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]   
    pro: 'pro'          
author:
    name: admin
metadata:
    author: admin
---

[doc-callout type="note" title="Frühere Moduleinstellungen"]
Einstellungen in der aktuellen App findest du unter [System](/app-system). [Zur Referenz für ältere Versionen](/legacy).
[/doc-callout]

<span id="social-sharing-in-emails"></span>Ergänze bei jedem Produkt einer früheren E-Mail-Vorlage einen Link zum Teilen. Das Modul erzeugte Links für die damals eingerichteten Dienste, darunter Facebook, Twitter und Google+. Prüfe das heute noch verwendete Ziel.

Öffne den Teilen-Link zu einem gut erkennbaren Produkt. Auf der Zielseite oder im Dialog sollte sichtbar sein, welchen Artikel der Empfänger gerade teilen möchte.

In responsiven Vorlagen fehlte der Teilen-Baustein standardmäßig. Füge die kleine Variante in die vorhandene Produktschleife ein. Der Link braucht die Daten des jeweiligen Produkts.

```smarty
{section name=product loop=$products max=$max_products}
   {$products[product].social_tiny}
{/section}
```

![Links zum Teilen unter einem Produkt](Screen_social_email.de.jpg?resize=582)
