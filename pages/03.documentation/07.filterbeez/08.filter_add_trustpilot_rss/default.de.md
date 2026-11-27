---
# http://learn.getgrav.org/content/headers
title: "Trustpilot-Bewertungen in E-Mails"
module_subtitle: "Importierte Trustpilot-Bewertungen in Kampagnen-E-Mails einfügen"
menu: "Trustpilot-Bewertungen in E-Mails"
slug: filter_add_trustpilot_rss
date: 03-05-2011
published: true
publish_date: 03-05-2011
# unpublish_date: 03-05-2011
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
    tag: [pro, "Trustpilot Bewertungen in Emails einfügen"]
module:
    code: 'config_trustpilot_rss_importer'
    category: [filterbeez]
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

[doc-callout type="note" title="Frühere MailBeez-Versionen"]
In V5 kannst du unter [Externe Dienste](/extensions/integrationen) eine Bewertungsintegration auswählen. [Zur Referenz für ältere Versionen](/legacy).
[/doc-callout]

Zeige Bewertungen aus der Integration [Bewertungen von Trustpilot importieren](/configbeez/integrations/config_trustpilot_rss_importer) in E-Mails mit dem früheren Vorlagensystem. Prüfe zuerst, ob Bewertungen vorliegen. Installiere und aktiviere anschließend das Anzeigemodul.

Prüfe, ob die gespeicherten Trustpilot-Bewertungen zum Shopnamen in der E-Mail gehören. Gerade bei zwei Shops mit demselben Layout übersieht man diese Zuordnung leicht.

## Bewertung in die Vorlage einfügen

<span id="installation"></span>Für eine Kampagne bearbeitest du die Inhaltsvorlage, für alle E-Mails mit demselben Design die Hauptvorlage. Setze diesen Platzhalter in die HTML-Fassung.

```smarty
{$content.rss.trustpilot.html}
```

Verwende in der Textfassung den entsprechenden Textplatzhalter.

```smarty
{$content.rss.trustpilot.txt}
```

Die Ausgabevorlagen liegen in `mailhive/configbeez/config_trustpilot_rss_importer/templates`.

```text
rss_email_html.tpl  
rss_email_txt.tpl
```

Für eine eigene Darstellung kannst du in der Vorlagenschleife auf die Bewertungsfelder zugreifen.

```smarty
{assign var=feed_feed value=$data.feed.trustpilot}
{section name=item loop=$feed_feed}
  {$feed_feed[item].rating_stars}
  {$feed_feed[item].text}<br>
  {$feed_feed[item].user_deeplink}<br>
  {$feed_feed[item].date|date_format}
{/section}
```

<span id="anzeigeoptionen"></span>Lege die Anzahl und die Mindestbewertung (3–5 Sterne) fest. Wähle, ob die neuesten passenden Bewertungen erscheinen oder die Reihenfolge zufällig sein soll.

![Drei Trustpilot-Bewertungen im Fußbereich der E-Mail, jeweils mit Sternen und einem Link zur vollständigen Bewertung.](Screen_default_email_template.png)
