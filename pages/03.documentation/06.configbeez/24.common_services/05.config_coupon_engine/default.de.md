---
# http://learn.getgrav.org/content/headers
title: "Gutschein-Engine"
module_subtitle: "Persönliche Gutscheincodes aus einer gemeinsamen Gutscheinvorlage erzeugen"
slug: config_coupon_engine
routes:
    default: /dokumentation/configbeez/config_coupon_engine
    aliases:
        - /dokumentation/configbeez/gutschein-generator
        
# menu: Gutschein Generator
date: 10-04-2012
published: true
publish_date: 10-04-2012
# unpublish_date: 10-04-2012
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
    tag: [pro,coupon]
module:
    code: 'pro'
    category: [pro]
    compatiblity: [comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio,comp_saas]   
    pro: 'pro'

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

Wenn jeder Empfänger einen eigenen Code erhalten soll, lege Rabatt und Einschränkungen in einer Gutscheinvorlage fest. Im Kampagnenschritt bestimmst du die Gültigkeit des erzeugten Codes.

Lege für ein Geburtstagsangebot den Rabatt in der Vorlage und die Einlösefrist im Geburtstagsflow fest. Prüfe an einem erzeugten Code, ob beide Vorgaben stimmen.

Öffne **System → Konfiguration** und wähle **Gutschein-Engine**.

Wähle eine Vorlage, die dein Gutscheinsystem unterstützt, und prüfe Rabatt, Einschränkungen und Gültigkeit. Erzeugte Codes findest du unter **Inhalte → Gutscheine → Generierte**.

## Gutscheinbedingungen beschreiben

Öffne die Vorlage unter **Inhalte → Gutscheine → Vorlagen**. Gilt dein Geburtstagsangebot nur für Kaffeebohnen, wähle die passenden Artikel aus und trage unter **Beschreibung** „Nur für Kaffeebohnen gültig“ ein. Hat deine Vorlage für jede Sprache ein eigenes Beschreibungsfeld, fülle es für alle Sprachen aus, in denen du E-Mails verschickst.

Jeder aus der Vorlage erzeugte Gutschein übernimmt die Beschreibung. Damit die Bedingungen auch in der [Ablauferinnerung](/mailbeez/coupon_expire) stehen, füge `[[$coupon_description]]` neben dem Gutscheincode in die E-Mail ein.

## Persönlichen Gutschein testen

Nutze eine Vorlage wie `template_birthday` für Rabatt und Einschränkungen. Lege die Gültigkeit im Kampagnenschritt fest, zum Beispiel 14 Tage ab Versand. Bei einer Simulation kann ein echter, einlösbarer Gutscheincode entstehen. Prüfe mit deiner Testadresse den Wert und das Ablaufdatum. Sind bereits viele Codes vergeben, erleichtern längere Codes die Erzeugung eines eindeutigen Gutscheins.

## Früheres osCommerce-Gutscheinsystem erkennen

Prüfe vor der Auswahl eines Gutscheinsystems die Tabellenkonstanten der installierten Erweiterung.

| Erweiterung | Typische Tabellenkonstanten |
| --- | --- |
| CCGV | `TABLE_COUPONS`, `TABLE_COUPON_REDEEM_TRACK` |
| Discount Coupon Codes | `TABLE_DISCOUNT_COUPONS`, `TABLE_DISCOUNT_COUPONS_TO_ORDERS` |
| Discount Codes | `TABLE_DISCOUNT_CODES`, `TABLE_CUSTOMERS_TO_DISCOUNT_CODES` |

In der früheren Variante **Discount Codes BS** fehlten die Konstanten. Nutzt dein Shop diese Variante und fehlen die Definitionen, füge den folgenden Code in `/mailhive/common/local/dc.php` ein. Gleiche die Namen mit den tatsächlichen Tabellen deines Shops ab.

```php
<?php
define('TABLE_DISCOUNT_CODES', 'discount_codes');
define('TABLE_CUSTOMERS_TO_DISCOUNT_CODES', 'customers_to_discount_codes');
define('FILENAME_DISCOUNT_CODES', 'discount_codes.php');
```
