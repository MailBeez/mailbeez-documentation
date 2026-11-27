---
# http://learn.getgrav.org/content/headers
title: "BounceHive"
module_subtitle: "Rückläufer in Shops mit SMTP-Versand über PHPMailer verarbeiten"
slug: config_bouncehive_advanced

routes:
    aliases:
        - /dokumentation/installation/config/config_bouncehive_advanced


# menu: BounceHive Rückläufer-Verarbeitung
date: 26-03-2012
published: true
publish_date: 26-03-2012
# unpublish_date: 26-03-2012
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
    tag: [pro, "BounceHive Rückläufer-Verarbeitung"]
module:
    code: 'config_bouncehive_advanced'
    category: [configbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2012/05/icon_321.png'
    pro: 'pro'
    cert: 'true'
    price: '99 EUR'
    title_en: 'BounceHive Bounce Handling'
    teaser_en: 'Process Bounce Emails automatically'
    title_de: 'BounceHive R&uuml;ckl&auml;ufer-Verarbeitung'
    teaser_de: 'Bounce Emails automatisch verarbeiten'
    author: 'MailBeez.com'
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

[doc-callout type="note" title="Frühere MailBeez-Versionen"]
In V5 kannst du unter [Versand & Status](/sending-status) eine einzelne Zustellung prüfen. [Zur Referenz für ältere Versionen](/legacy).
[/doc-callout]

Verschickt der Shop E-Mails per SMTP mit PHPMailer, kann BounceHive Rückläufer aus einem eigenen IMAP-Postfach lesen. Die Verarbeitung unterscheidet dauerhafte Ablehnungen und vorübergehende Verzögerungen. MailBeez.Email verarbeitet Zustellereignisse separat.

Prüfe die Art des Fehlers, bevor du über eine Adresse entscheidest. Ein volles Postfach und eine dauerhaft unbekannte Adresse müssen unterschiedlich behandelt werden.

## Rückläuferpostfach verbinden

1. Nutze die MailBeez-Versandmethode **SMTP (PHPMailer)** und ein separates Postfach, das dein Shopserver per IMAP erreichen kann. Das historische Gmail-Beispiel verwendete IMAP über SSL mit `imap.gmail.com`, Port `993`. Prüfe die Zugangsvorgaben deines Anbieters.
2. Setze den technischen Absender für den Versand auf das Rückläuferpostfach. Kundenantworten gehen weiterhin an die sichtbare Absender- oder Antwortadresse. BounceHive benötigt Zugriff auf den Posteingang und die konfigurierten Ordner für dauerhafte, vorübergehende und sonstige Rückmeldungen.
3. Starte die Verarbeitung und prüfe, wohin die Nachrichten verschoben wurden. Ältere Rückläufer kannst du nachträglich in den Posteingang dieses Postfachs verschieben. Verursacht ein langsamer Mailserver Zeitüberschreitungen, nutze anstelle des regulären MailHive-Laufs die eigene Cronjob-URL des Moduls.

## Was die Rückmeldung für den Versand bedeutet

- **Hard Bounce**<br>
  Eine unbekannte oder ungültige Adresse wird sofort gesperrt.
- **Soft Bounce**<br>
  Bei einem vorübergehenden Fehler, etwa einem vollen Postfach, wartet MailBeez die eingestellte Anzahl Tage bis zum nächsten Versuch. Wiederholte Soft Bounces können den eingestellten Schwellenwert für einen Hard Bounce erreichen.
- **Transient Bounce**<br>
  Der empfangende Server versucht die Zustellung weiterhin. BounceHive setzt für diese Nachricht keine Sperre.

Für eine Sperre müssen Kundennummer und E-Mail-Adresse übereinstimmen. Ersetzt der Kunde die ungültige Adresse, gilt die Sperre der alten Adresse nicht für die neue.
