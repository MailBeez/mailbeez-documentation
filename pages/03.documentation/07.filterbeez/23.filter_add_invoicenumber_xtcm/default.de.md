---
# http://learn.getgrav.org/content/headers
title: "Rechnungsnummer"
module_subtitle: "Rechnungsnummern in E-Mails einfügen"
slug: filter_add_invoicenumber_xtcm
date: 19-06-2017
published: true
publish_date: 19-06-2017
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
    tag: [pro, "Rechnungsnummern in E-Mails einfügen"]
module:
    code: 'filter_add_invoicenumber_xtcm'
    category: [filterbeez]
    compatiblity: [comp_xtcm2]
    pro: 'pro'
    cert: 'true'      


---

Ein Café fragt, zu welcher Rechnung deine Zahlungserinnerung gehört. Die Buchhaltung sucht nach der Rechnungsnummer auf dem Beleg. Deine Bestellnummer kann ganz anders lauten. Ist das Rechnungsnummernmodul im Shop aktiv, kann MailBeez die vorhandene Nummer und das Datum in die Bestell-E-Mail übernehmen.

## Die E-Mail mit dem Beleg abgleichen

Öffne **System → Erweiterungen → Zusatzmodule → Kundendaten und Inhalte** und wähle **Rechnungsnummern in E-Mails einfügen**.

Verwende in der Vorlage `$data.order.invoice_number` für die Nummer und `$data.order.invoice_date` für das Datum. Die Rechnung erstellt dein Shop. Das Zusatzmodul liest die Angaben zur Bestellung aus.

Vergleiche eine Testnachricht zu einer bereits abgerechneten Bestellung mit dem Beleg. In der Vorlagenvorschau kann eine Beispielnummer stehen. Fehlt der Bestelldatensatz, kann `n/a` erscheinen. Bei einer Bestellung ohne Rechnung kann das Nummernfeld leer sein. Prüfe den Beleg, bevor du den Käufer darauf verweist.
