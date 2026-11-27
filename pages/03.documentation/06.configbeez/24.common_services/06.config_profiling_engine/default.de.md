---
title: Profilierungs-System
module_subtitle: "Regeln für Kunden- oder Bestell-Tags im früheren Entwicklungsstand festlegen"
slug: config_profiling_engine
routes:
    default: /dokumentation/configbeez/config_profiling_engine
    aliases:
        -   /documentation/configbeez/config_profiling_engine

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
    tag: [pro]
module:
    code: 'pro'
    category: [pro]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]   
    pro: 'pro'

# added collection selector

author:
    name: admin
metadata:
    author: admin

---

[doc-callout type="note" title="Frühere MailBeez-Versionen"]
In V5 kannst du unter [Listen und Segmente](/contacts/lists-segments) eine Empfängerauswahl zusammenstellen. [Zur Referenz für ältere Versionen](/legacy).
[/doc-callout]

Der dokumentierte Entwicklungsstand sah Regeln für Tags an Bestellungen und Kundenkonten vor. So konnte etwa die Bedingung „Produkt B noch nie gekauft“ das Kunden-Tag `upsell-B` vergeben. Prüfe vor der Nutzung die installierte Ausgabe.

Ein Tag hilft einem anderen Modul nur, wenn seine Bedeutung feststeht. Halte fest, welche Regel es vergeben hat, bevor du damit eine Kundengruppe einordnest.

- [Module nach Profil-Tags auswählen](/filterbeez/filter_check_profile) nutzte Tags, um Kunden oder Bestellungen für ein Modul ein- oder auszuschließen.
- [Inhalte anhand von Profilen auswählen](/filterbeez/filter_add_profiling_content) fügte anhand derselben Tags einen passenden Inhaltsbaustein ein.
- [Profildaten in Vorlagen verwenden](/filterbeez/filter_add_profiling) stellte die vergebenen Tags für eigene Vorlagenlogik bereit.
