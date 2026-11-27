---
# http://learn.getgrav.org/content/headers
title: Newsletter2Go Integration
slug: newsletter2go-integration-mailbeez
original_v4: true
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
    tag: [ce]
---

[doc-callout type="note" title="Frühere Integration"]
Für Aussendungen aus V5 nutze die [Newsletter-Anleitung](/mailbeez/newsletter). [Zur Referenz für ältere Versionen](/legacy).
[/doc-callout]

<span id="funktionsumfang"></span><span id="mgliche-szenarien"></span>Prüfe vor einer Änderung an Empfängern oder Inhalt, wo die frühere Aussendung erstellt wurde. Die bestehende Newsletter2Go-Anbindung konnte eine MailBeez-Aussendung zustellen oder Shopdaten für einen in Newsletter2Go erstellten Newsletter liefern.

- <span id="aus-sicht-von-mail-beez"></span>**Aussendung in MailBeez vorbereitet**<br>
  MailBeez erzeugte die E-Mail und übergab sie zum Versand an Newsletter2Go. Die Anbindung verarbeitete Rückläufermeldungen.
- <span id="aus-sicht-von-newsletter2go"></span>**Aussendung in Newsletter2Go vorbereitet**<br>
  Die Anbindung stellte Empfänger- und Produktdaten aus dem Shop bereit und übergab Abmeldungen an MailBeez. Beide Arbeitsweisen ließen sich kombinieren.

## Shop verbinden

1. <span id="einrichtung-der-integration"></span><span id="1-mail-beez-installieren"></span>Öffne die [Installationsanleitung für deine Shopversion](/grundlagen/installation). Bei einigen Gambio-Versionen war die Integration bereits enthalten.
2. Öffne in der älteren MailBeez-Oberfläche **MailBeez → Konfiguration → Email System** und verbinde das Newsletter2Go-Konto. Die hier beschriebene Integration setzte mindestens den damaligen Standard-Tarif voraus.
3. Erlaube die Verbindung im Anbieterkonto und kontrolliere dort den Integrationsstatus. Lade die MailBeez-Konfiguration erneut und prüfe auch den Status auf Shopseite.

[doc-accordion independent=true open=none]
[doc-accordion-item title="Gambio GX 3.x"]
Die Aktivierung für diese Shopversion beschreibt [Gambio GX 3.x](/grundlagen/installation/basic-installation-gambio-gx-3).
[/doc-accordion-item]
[doc-accordion-item title="Gambio GX 2.5+"]
Die Aktivierung für diese Shopversion beschreibt [Gambio GX 2.5+](/grundlagen/installation/basic-installation-gambio-gx-25).
[/doc-accordion-item]
[doc-accordion-item title="Gambio GX 2.3+"]
Die Aktivierung für diese Shopversion beschreibt [Gambio GX 2.3+](/grundlagen/installation/basic-installation-gambio-gx-23).
[/doc-accordion-item]
[doc-accordion-item title="Gambiocloud.de"]
Die Aktivierung für diese Shopversion beschreibt [Gambiocloud.de](/grundlagen/installation/basic-installation-gambiocloud).
[/doc-accordion-item]
[doc-accordion-item title="Gambio GX 2.x"]
Die Aktivierung für diese Shopversion beschreibt [Gambio GX 2.x](/grundlagen/installation/basic-installation-gambio-gx-2).
[/doc-accordion-item]
[doc-accordion-item title="Gambio GX 1.x"]
Die Aktivierung für diese Shopversion beschreibt [Gambio GX 1.x](/grundlagen/installation/basic-installation-gambio).
[/doc-accordion-item]
[doc-accordion-item title="modified-shop 2.x/3.x"]
Die Aktivierung für diese Shopversion beschreibt [modified-shop 2.x/3.x](/grundlagen/installation/basic-installation-modified-shop-2).
[/doc-accordion-item]
[doc-accordion-item title="modified-shop 1.0x"]
Die Aktivierung für diese Shopversion beschreibt [modified-shop 1.0x](/grundlagen/installation/basic-installation-modified-shop).
[/doc-accordion-item]
[doc-accordion-item title="Zen-Cart-pro.at"]
Die Aktivierung für diese Shopversion beschreibt [Zen-Cart-pro.at](/grundlagen/installation/basic-installation-zen-cart-pro-at).
[/doc-accordion-item]
[doc-accordion-item title="Zen Cart 1.5.x"]
Die Aktivierung für diese Shopversion beschreibt [Zen Cart 1.5.x](/grundlagen/installation/basic-installation-zen-cart-1-5-x).
[/doc-accordion-item]
[doc-accordion-item title="osCommerce 2.3.x"]
Die Aktivierung für diese Shopversion beschreibt [osCommerce 2.3.x](/grundlagen/installation/oscommerce-2-3-x).
[/doc-accordion-item]
[doc-accordion-item title="osCommerce 2.2"]
Die Aktivierung für diese Shopversion beschreibt [osCommerce 2.2](/grundlagen/installation/basic-installation-oscommerce).
[/doc-accordion-item]
[/doc-accordion]
