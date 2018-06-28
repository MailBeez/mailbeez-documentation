---
# http://learn.getgrav.org/content/headers
title: Newsletter Anmeldung
slug: site_signup
date: 28-06-2018
published: true
publish_date: 28-06-2018
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
    code: 'site_signup'
    category: [sitebeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    pro: 'pro'

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

>>>>> BETA: Die vorliegende Version ist eine erste BETA Ausgabe, wurde aber mit grosser Sorgfalt entwickelt und getestet. Es fehlen noch wichtige Funktionen wie z.B. die Design-Anpassung und Bearbeitung der Texte.


Mit dem Newsletter Widget können Sie Email-Adressen von Interessenten, aber auch Einwilligungen von bereits bestehenden Kunden erfassen.

Das Widget ist nahtlos mit dem [MailBeez Newsletter Modul](/dokumentation/mailbeez/newsletter) integriert, so dass Sie dort die Emails zum Doppel-Optin und Willkommens-Email - ggf. mit Gutschein - bearbeiten können. Falls die entsprechenden Untermodule nicht angezeigt werden, bitte in der Konfiguration des MailBeez Newsletter Modules die Option `Optin / Bestätigungs-Module aktivieren` auf `True` setzen.

Nach Integration (wird weiter unten beschrieben) bettet sich der Button in die Webseite ein und zieht dezent Aufmerksamkeit auf sich:

![Vor Klick](_widget.png)

Mit Klick auf den Button öffnet sich das responsive Anmelde-Formular und führt den Besucher durch den Registrierungs-Ablauf:

![Registrierungs-Dialog](Screen_signup.de.png)

Nach einmaligen Öffnen des Dialoges bleibt der Button weiterhin - aber weniger interessant - sichtbar:

![Nach Klick](_widget_displayed.png)



## Integration

Die Integration erfolgt über asynchronen, leichtgewichtigen JavaScript-Code und kann somit auf jeder Webseite (im Shop, Shopgate, Wordpress Blog, Google Tag Manager) eingebunden werden.

Den Integrations-Code finden Sie unter `MailBeez > Konfiguration > SiteBeez` - dort den Code kopieren und im Zielsystem einfügen.

In Gambio kann der Code unter `Shopeinstellungen > SEO > Trackingcode` eingefügt werden - es folgt eine Plugin-basierte Integration.



## Eigener Button

In der vorliegenden Beta-Version steht der gezeigte Button im Gambio-Design zur Verfügung:

     var w = "button_float";

Um einen eigenen Button zu verwenden, bitte den JavaScript Code wie folgt abändern:

     var w = "custom_code";

und im html Code der Seite ein Element mit `data-sitebeez-trigger="custom_code"` einfügen, wie das folgende Beispiel zeigt:

    <div data-sitebeez-trigger="custom_code">my custom button</div>

Mit Klick auf dieses Element öffnet sich dann der Registrierungs-Dialog. Der Html-Code kann nach eigenem Ermessen angepasst werden.

