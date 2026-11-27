---
# http://learn.getgrav.org/content/headers
title: Shopper Approved Profi
module_subtitle: "Die Umfrage für Käufer und den Versandzeitpunkt festlegen"
slug: shopperapproved_advanced
# menu: Shopper Approved Profi
date: 08-05-2015
published: true
publish_date: 08-05-2015
# unpublish_date: 08-05-2015
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
# added collection selector
module:
    code: 'shopperapproved_advanced'
    category: [mailbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2013/06/top_64.png'
    pro: 'pro'
    cert: 'true'
    price: '99 EUR'
    title_en: 'Shopper Approved Advanced'
    teaser_en: 'Advanced Features: Delay for international orders, multiple Order status, recognition of regular customers'
    title_de: 'Idealo Profi'
    teaser_de: 'Profi-Features: Verzögerung für internationale Bestellungen, Stammkunden-Erkennung und mehr'
    author: 'MailBeez.com'    
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

[doc-callout type="note" title="Früheres Kampagnenmodul"]
Für einen aktuellen Shop wählst du den Flow unter [Automatisierung](/mailbeez). [Zur Referenz für ältere Versionen](/legacy).
[/doc-callout]

Lege fest, welche Umfrage von Shopper Approved Käufer erhalten sollen und wann. Halte die Kontodaten deines Shops bereit und berücksichtige längere Lieferzeiten ins Ausland.

Folge einem Testlink bis zur Umfrage. So siehst du, welche Fragen Käufer erhalten und ob der Einladungstext den Ablauf zutreffend beschreibt.

## Empfänger der Einladung auswählen

1. Wähle die Bestellstatus, bei denen die Wartezeit beginnt. Lege bei Bedarf eine zusätzliche Wartezeit für Lieferungen außerhalb des im Shop hinterlegten Heimatlandes fest.
2. Lege die Mindestanzahl der Bestellungen fest. Wähle für wiederkehrende Käufer einen Mindestabstand zwischen Einladungen, zum Beispiel 120 Tage. Das Modul prüft den Zeitpunkt der letzten Einladung.
3. Wähle die erste Befragung oder verlinke die vollständige Befragung mit vorausgefüllter Bestellnummer.

## Bewertungsseite anpassen

Füge den folgenden Code in eine eigene Bewertungsseite ein. Dort gibt das Modul seine Bewertungsvorlage aus.

```
if (isset($_GET['SA'])) {
    require_once(DIR_FS_CATALOG . 'mailhive/mailbeez/shopperapproved_advanced.php');
    $sa = new shopperapproved_advanced();
    $code = $sa->generate_page($_GET['SA'], 'core.tpl.html');
    echo $code;
}
```

Verlinke die Seite in deiner E-Mail-Vorlage mit dem Einladungsparameter, zum Beispiel `https://example.com/my-custom-page.php?SA={$sa_invite_parameter_value}`.

Kopiere für die vollständige Befragung den Link aus deinem Shopper-Approved-Konto und ersetze `<order-id>` durch `{$order_id}`. Mit der [Integration](/configbeez/integrations/config_shopperapproved_integration) kannst du Bewertungen auch im Shop und in MailBeez-E-Mails anzeigen.
