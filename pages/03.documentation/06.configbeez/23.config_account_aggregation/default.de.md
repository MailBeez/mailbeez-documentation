---
title: "Konten zusammenführen"
module_subtitle: "Gast- und Kundenkonten zusammenführen"
slug: config_account_aggregation
routes:
    aliases:
        - /dokumentation/installation/config/config_account_aggregation

# menu: MailBeez Copyright entfernen
published: true
# unpublish_date: 09-09-2011
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
    tag: [pro, "Gast- und Kundenkonten zusammenführen"]
module:
    code: 'config_account_aggregation'
    category: [configbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/09/certificate_32.png'
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

Ein Café bestellt Filter zunächst als Gast und eröffnet später mit derselben E-Mail-Adresse ein Geschäftskonto. Die Einkäufe können dadurch auf mehrere Kundendatensätze verteilt sein. MailBeez findet Konten mit derselben Adresse und kann sie zusammenführen. Nutzen mehrere Personen das Postfach des Cafés, lohnt sich ein genauer Blick auf die vorgeschlagenen Treffer.

## Treffer vor der Zusammenführung prüfen

Öffne **System → Erweiterungen → Zusatzmodule → Kundendaten und Inhalte** und wähle **Gast- und Kundenkonten zusammenführen**.

[doc-steps]

[doc-step]
**Shoptabellen und einen Beispielfall prüfen**

Wähle **Tabellen prüfen**, um zu sehen, welche Tabellen das Zusatzmodul kennt. Aktiviere **Zusammenführung simulieren**. Vergleiche einen vorgeschlagenen Treffer mit den Gastbestellungen und dem Kundenkonto des Cafés.
[/doc-step]

[doc-step]
**Kundengruppe und Anmeldung festlegen**

Prüfe, welcher Gruppe das Konto anschließend angehören soll und ob eine Anmeldung möglich sein soll. Das ist besonders wichtig, wenn nur Gastkonten zusammenpassen. **Konten pro Durchlauf** begrenzt den Umfang eines Laufs. Sobald du die Simulation ausschaltest, können nachfolgende Läufe echte Kundendatensätze ändern.
[/doc-step]

[/doc-steps]
