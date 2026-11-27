---
# http://learn.getgrav.org/content/headers
title: "Zen-Cart-Paketverfolgung"
module_subtitle: "Paketnummer und Trackinglink in eine Zen-Cart-Bestellmail einfügen"
slug: filter_add_pakettracking_zencart
published: true
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
    tag: [pro, "[ZenCart] Paket Tracking"]
# added collection selector
module:
    code: 'filter_add_pakettracking_zencart'
    category: [filterbeez]
    compatiblity: [comp_zencart]
    pro: 'pro'
    cert: 'true' 
author:
    name: admin
metadata:
    author: admin

---

[doc-callout type="note" title="Früheres Filtermodul"]
Die Filter für deinen V5-Shop findest du unter [Zusatzmodule](/extensions/zusatzmodule). [Zur Referenz für ältere Versionen](/legacy).
[/doc-callout]

Ergänze eine Bestell-E-Mail um Paketnummer und Sendungsverfolgung. Der frühere Filter liest die Felder der [Zen-Cart-Erweiterung zur Paketverfolgung](https://www.zen-cart-pro.at/forum/vbdownloads.php?do=download&downloadid=181). Prüfe die Vorlage mit einer Bestellung, die bereits eine Paketnummer hat.

Teste mit einer versendeten Bestellung und einer echten Paketnummer. Öffne den Link und prüfe, ob du die Sendung direkt verfolgen kannst oder erst auf einer allgemeinen Suchseite landest.

## Trackingdaten in die Vorlage einfügen

Verwende die Sendungsnummern und Datumsfelder, die die Erweiterung für die Bestellung befüllt.

```
[[$data.order.paket_tracking.track_id1]] // track_id1
[[$data.order.paket_tracking.track_id2]] // track_id2
[[$data.order.paket_tracking.track_id3]] // track_id3
[[$data.order.paket_tracking.track_id4]] // track_id4
[[$data.order.paket_tracking.track_id5]] // track_id5
[[$data.order.paket_tracking.track_id6]] // track_id6
[[$data.order.paket_tracking.track_day]] // track_day
[[$data.order.paket_tracking.track_month]] // track_month
[[$data.order.paket_tracking.track_year]] // track_year
```

Baue den Link zur Sendungsverfolgung in der E-Mail-Vorlage zusammen. Ersetze die Beispieladressen durch die Tracking-URLs deiner Versanddienstleister und teste sie mit einer passenden Bestellung.

```
[[if $data.order.paket_tracking.track_id1 ]]
    <a href="http://carrier1.com?track=[[$data.order.paket_tracking.track_id1]]"> Tracking Link Carrier 1 </a>
[[elseif $data.order.paket_tracking.track_day]]
    <a href="http://carrier2.com?track=[[$data.order.paket_tracking.track_id2]]&day=[[$data.order.paket_tracking.track_day]]"> Tracking Link Carrier 2 </a>
[[/if]]
```
