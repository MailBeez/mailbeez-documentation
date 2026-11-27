---
# http://learn.getgrav.org/content/headers
title: "API-Zugang"
module_subtitle: "API-Schlüssel, Anfragelimits und IP-Ausnahmen einrichten"
slug: config_api
date: 26-03-2012
published: true
publish_date: 26-03-2012
# unpublish_date: 26-03-2012
template: chapter
# theme: false
visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: done
    category: [docs]
    tag: [core]
# added collection selector

author:
    name: admin
metadata:
    author: admin
---

Kläre vor der Anbindung, welchen Endpunkt die Integration aufruft. Für einen geschützten Aufruf braucht sie den API-Schlüssel des Shops. Für öffentliche Aufrufe gelten die eingestellten Limits, sofern die IP-Adresse nicht ausgenommen ist.

Nutzen mehrere Werkzeuge die Shop-API, kläre, welche denselben Schlüssel verwenden. Bei einem Schlüsselwechsel musst du den neuen Wert in jedem dieser Werkzeuge hinterlegen.

Öffne **System → Konfiguration** und wähle **API-Zugang**.

Prüfe das benötigte API-Modul und dessen Zugangsdaten. Bewahre private Zugangsdaten auf dem Server auf und teste die Verbindung mit der benötigten Funktion.

<span id="diese-einstellungen-sind-"></span>

## API-Zugriff und Anfragelimits festlegen

- **API-Schlüssel**<br>
  Authentifiziert geschützte API-Aufrufe. Passen Sie verbundene Integrationen an, wenn Sie diesen Schlüssel ändern.
- **Öffentliche Anfragen pro Zeitfenster**<br>
  Maximale Anzahl von Anfragen an öffentliche Endpunkte im eingestellten Zeitfenster.
- **Öffentliches Zeitfenster (Sekunden)**<br>
  Zeitraum, in dem Anfragen an öffentliche Endpunkte gezählt werden.
- **IP-Adressen ohne Begrenzung**<br>
  Kommagetrennte IP-Adressen, für die keine Anfragebegrenzung gilt.
