---
# http://learn.getgrav.org/content/headers
title: Routing
slug: filter_check_routing
routes:
    aliases:
    - /dokumentation/filterbeez/filter_check_routing
# menu: Bewertungs‑Routing
date: 19-12-2025
published: true
publish_date: 19-12-2025
# unpublish_date: 26-09-2011
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
    tag: [pro]
module:
   code: 'filter_check_routing'
   category: [filterbeez]
   compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio,comp_saas]
   pro: 'pro'
   cert: 'true'
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

Mit dem Modul **Routing** steuern Sie, zu welchem Bewertungsportal Ihre Kunden eingeladen werden. So können Sie Ihre Bewertungen gezielt auf unterschiedliche Portale verteilen – z.B. zwei Drittel zu Google Reviews und ein Drittel zu Ausgezeichnet.org.

## Funktionsweise

Das Modul arbeitet auf Basis einer stabilen, pseudozufälligen Verteilung:

1. Aus der Bestellnummer wird eine Zufallszahl generiert.
2. Auf diesen Wert wird ein Modulo‑Operator angewendet, z.B. `mod 3`.
3. Abhängig vom Ergebnis (`0`, `1`, `2`, ...) wird die Einladung über ein bestimmtes Bewertungsmodul verschickt.

Dadurch erhalten alle Bestellungen eine reproduzierbare, statistisch gleichmäßige Zuordnung zu den von Ihnen definierten Bewertungsportalen.

## Konfigurationsbeispiel

Ein typisches Setup könnte so aussehen:

```text
order_id|mod:3|0|ausgezeichnet_advanced
order_id|mod:3|1,2|googlereviews_advanced
```

* Für jede Bestellung wird `mod 3` des Zufallswertes berechnet.
* Ergibt das Ergebnis `0`, wird die Einladung über das Modul `ausgezeichnet_advanced` an Ausgezeichnet.org gesendet.
* Ergibt das Ergebnis `1` oder `2`, wird die Einladung über das Modul `googlereviews_advanced` zu Google Reviews gesendet.

Das bedeutet konkret:

* **1/3** der Bestellungen werden zu **Ausgezeichnet.org** geroutet.
* **2/3** der Bestellungen werden zu **Google Reviews** geroutet.

Durch Anpassen des Modulo‑Werts und der Ergebnis‑Zuordnungen können Sie sehr flexibel festlegen, welches Bewertungsportal welchen Anteil Ihrer Einladungen erhalten soll.

## Vorteile

* Gleichmäßige, statistisch saubere Verteilung Ihrer Bewertungen auf mehrere Portale
* Reproduzierbares Verhalten: dieselbe Bestellung wird immer demselben Portal zugeordnet
* Einfache Steuerung komplexer Routing‑Szenarien über wenige Konfigurationszeilen

## Konfiguration in MailBeez v5

Mit **MailBeez v5** wird für das Bewertungs‑Routing eine **benutzerfreundliche Konfigurations‑Oberfläche** bereitgestellt. Statt manuell mit Konfigurationszeilen zu arbeiten, können Sie dann z. B.:

* Bewertungsportale auswählen und hinzufügen
* den gewünschten Verteilungs‑Prozentsatz per UI festlegen
* die daraus resultierenden Routing‑Regeln komfortabel testen

Bis dahin können Sie das Modul bereits produktiv nutzen, indem Sie die Routing‑Regeln wie oben beschrieben direkt in der Modulkonfiguration hinterlegen.
