---
title: "ECG-CHECK"
module_subtitle: "Empfänger mit der ECG-Liste abgleichen"
slug: config_ecgcheck_integration
routes:
    default: /dokumentation/configbeez/config_ecgcheck_integration
date: 20-03-2016
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
    tag: [pro, "Empfänger mit der ECG-Liste abgleichen"]
module:
    code: 'config_ecgcheck_integration'
    category: [configbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
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

Dein Outdoor-Shop bereitet einen Saisonnewsletter vor und möchte Adressen mit der ECG-Liste abgleichen. Prüfe zuerst, ob MailBeez den Dienst mit den gespeicherten Zugangsdaten erreicht. Beim anschließenden Adressabgleich können Treffer für alle MailBeez-Mailings gesperrt werden.

<span id="diese-einstellungen-sind-"></span>

## ECG-CHECK-Konto verbinden

Öffne **System → Erweiterungen → Externe Dienste** und wähle **Empfänger mit der ECG-Liste abgleichen**.

[doc-steps]

[doc-step]
**Die gespeicherte Verbindung testen**

Speichere den **ECG-CHECK API-Schlüssel** und wähle **Verbindung testen**. Dabei prüft MailBeez Zertifikat und Erreichbarkeit, ohne Empfänger abzugleichen. Ändere das **MailBeez-Lizenzzertifikat** nur auf Anweisung des MailBeez-Supports.
[/doc-step]

[doc-step]
**Den Zeitpunkt des Abgleichs festlegen**

Prüfe **Bei regulären MailBeez-Läufen prüfen**, bevor du **Adressen abgleichen** wählst. Der Abgleich kann sofort globale Sperren setzen. Er berücksichtigt Kunden und bei aktivem Newsletter auch geeignete Interessenten. Bereits global gesperrte Empfänger werden übersprungen. Eine Adresse kann zu mehreren Empfängerdatensätzen gehören. Deshalb können die ausgewiesenen Treffer und Sperrvorgänge voneinander abweichen.
[/doc-step]

[/doc-steps]
