---
title: "Automatische Verarbeitung"
module_subtitle: "Regelmäßige Verarbeitung für MailBeez auf dem eigenen Server einrichten"
slug: automatische-verarbeitung
template: docs
visible: true
published: true
taxonomy:
    category: [docs]
---

Bei einem gehosteten Konto übernimmt MailBeez Services die automatische Verarbeitung. Läuft MailBeez auf deinem Shopserver, richte unter **System → Konfiguration → Automatische Verarbeitung** regelmäßige Läufe ein. So können auch nachts E-Mails verschickt werden. Wird eine E-Mail kurz nach einem Lauf fällig, wartet sie auf den nächsten Lauf im Versandfenster.

1. Öffne **Cronjobs beim Hoster** und suche **Cronjob-URL**. Die Adresse gilt für diesen Shop und enthält den Token, mit dem der Zeitplaner die Verarbeitung starten kann.
2. Plane im Hosting-Kontrollpanel einen wiederkehrenden HTTP-GET-Aufruf dieser URL. Wähle einen vom Hoster unterstützten Abstand, der zu den Versandfenstern deiner Module passt.
3. Sieh nach dem ersten geplanten Lauf unter [Versand & Status](/sending-status) nach den erwarteten Nachrichten. Erfüllt kein Empfänger die Bedingungen, kann ein Lauf ohne Versand enden.

Wochentage und Uhrzeiten für einzelne Flows legst du unter [Versandzeiten je Modul festlegen](/configbeez/config_cron_advanced) fest.