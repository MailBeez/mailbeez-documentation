---
# http://learn.getgrav.org/content/headers
title: "Fehler in älteren Installationen beheben"
slug: antworten-auf-haeufig-gestellte-fragen
published: true
template: tutorial
visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: done
    category: [docs]
    tag: []
# added collection selector

author:
    name: admin
metadata:
    author: admin
toc:
    baselevel: 2
    headinglevel: 3
---

[doc-callout type="note" title="Frühere MailBeez-Versionen"]
[Zur Referenz für ältere Versionen](/legacy).
[/doc-callout]

Halte bei einem Fehler zunächst Symptom, Modul, Uhrzeit, Versandmodus und genaue Fehlermeldung fest. Wähle dann den passenden Abschnitt für deine Shopversion.

Verfolge möglichst eine betroffene Bestellung oder Adresse vom Auslöser bis zum erwarteten Ergebnis. So erkennst du, an welcher Stelle der tatsächliche Ablauf erstmals von der Anleitung abweicht.

## Versand und Simulation

- Stoppt ein Lauf nach einer E-Mail oder kommt die Testnachricht nicht an, prüfe Simulations- und Kopieadresse. Prüfe auch den Versanddienst und ob Empfänger die Bedingungen erfüllt haben.
- Bleibt das Kampagnenfenster bei der Modusanzeige stehen, prüfe PHP-Fehlerprotokoll und Empfängermenge. Mit einem kleineren Verarbeitungszeitraum lässt sich ein Speicherlimit eingrenzen.
- Erscheint HTML als Text, vergleiche eine Shop-Bestellmail mit der MailBeez-Mail. Prüfe Versandweg, Zeilenumbrüche und das im Kundenkonto hinterlegte E-Mail-Format.
- Ein geplanter Lauf kann mehrmals täglich stattfinden. Versandhistorie, Auswahlregeln und Zeitfenster bestimmen, wer beim jeweiligen Lauf berücksichtigt wird.

## Administration und Vorlagen

Bleibt ein Popup leer oder zeigt es die Shopseite, vergleiche Shop- und Admin-URL einschließlich HTTPS und Hostname. Prüfe, ob eine Erweiterung die MailBeez-Anfrage umleitet. Bei 404, 403 und PHP-Fehler 500 helfen unterschiedliche Protokolleinträge. Suche zuerst den Eintrag zum betreffenden Aufruf.

Bricht eine ältere Smarty-Vorlage nach dem Einfügen von CSS ab, prüfe die geschweiften Klammern im Stylesheet. In diesen Vorlagen kannst du reines CSS mit `{literal}` und `{/literal}` umschließen. Ermittle nach einer abgebrochenen Installation den fehlerhaften Schritt und sichere die Datenbank, bevor du den Installationsstand reparierst.

## Zertifikate

Die früheren Modulzertifikate waren an die Shopdomain gebunden. Vergleiche die Domain im Browser und im geplanten Aufruf mit der lizenzierten Domain. Eine Testinstallation benötigt ein Zertifikat für ihren eigenen Hostnamen. In angepassten Adminbereichen konnte eine Längenbegrenzung im Eingabefeld das Zertifikat abschneiden.

## osCommerce

Prüfe bei STS oder älteren Sicherheitserweiterungen, ob Popup-Aufrufe die vorgesehene Adminseite erreichen. Erscheint die Shopseite, kontrolliere die URL- oder Vorlagenintegration für diese Version.

## Zen Cart

- Bei frühen MailBeez-2.7-Paketen konnte eine veraltete Datei `includes/extra_configures/mailbeez_tracking.php` beim Klick auf einen verfolgten Link zu einer fehlenden Klasse `email` führen. Prüfe die Integrationsanleitung für die genaue Paketversion.
- Der Shop-Mailer kann MailBeez-HTML in `email/email_template_default.htm` einbetten. Prüfe diese Vorlage bei doppeltem Betreff. Teste Text- und HTML-Versand mit einem Kundenkonto, dessen Formatpräferenz du kennst.
- Senden Zen Cart und MailBeez beide eine Begrüßung, ermittle die Herkunft jeder Nachricht, bevor du den Anmeldeablauf änderst. Bei einem leeren Kampagnenfenster suche im `myDebug`-Protokoll des Shops nach dem passenden Aufruf.

## Prüfungen bei früheren selbst betriebenen Shops

- Lädt ein eingebettetes Adminfenster dauerhaft, vergleiche Protokoll und Hostnamen in `HTTP_SERVER` und `HTTP_CATALOG_SERVER`. Wenn der Server Frames nur aus derselben Herkunft zuließ, mussten die Adressen von Admin und Katalog übereinstimmen.
- Meldet die `mailhive.php` des Shops einen Fehler 500, prüfe den Dateisystempfad in `includes/configure.php`. Bei früheren Integrationen musste `DIR_FS_CATALOG` mit einem Schrägstrich enden.
- Bei einem ungültigen Zertifikat vergleiche die im damaligen Info-Reiter von MailBeez angezeigte Serverdomain mit der Domain des geplanten Aufrufs.
- Erscheint HTML-Code in der Nachricht, prüfe den Zeilenumbruch im Mailsystem des Shops. Manche älteren Versandwege benötigten **LF**. Teste eine Bestellbestätigung des Shops und eine MailBeez-Nachricht mit derselben Adresse.
