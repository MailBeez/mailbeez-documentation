---
title: "Inhalte nach Profil"
module_subtitle: "Vorbereitete E-Mail-Inhalte anhand von Kunden- oder Bestell-Tags auswählen"
slug: filter_add_profiling_content
template: docs
visible: true
published: true
module:
    code: 'filterbeez_add_content_suite'
    category: [filterbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    pro: 'pro'
    cert: 'true'
taxonomy:
    migration_status: done
    category: [docs]
    tag: [pro, "Inhalte anhand von Profilen auswählen"]
---

[doc-callout type="note" title="Früheres Filtermodul"]
Die Filter für deinen V5-Shop findest du unter [Zusatzmodule](/extensions/zusatzmodule). [Zur Referenz für ältere Versionen](/legacy).
[/doc-callout]

Der frühere Entwicklungsstand sah vor, vorbereitete Inhalte anhand von Kunden- oder Bestell-Tags einzufügen. Prüfe, ob [Profilierungs-System](/configbeez/common_services/config_profiling_engine) und mehrsprachige Vorlagen mit Inhaltsbausteinen ([Erweiterung für Mehrsprachigkeit](/configbeez/config_tmplmngr_lng)) vorhanden sind.

Verfolge den früheren Ablauf an einem bekannten Tag. Prüfe, welcher Text dafür vorgesehen war und was Leser ohne dieses Tag sehen sollten.

1. Lege die Tag-Regel und den zugehörigen Inhaltsbaustein an.
2. Gib an, welche Tags vorhanden sein müssen oder fehlen sollen. Treffen mehrere Bausteine zu, erscheinen sie in der eingestellten Sortierreihenfolge.
3. Füge im visuellen Editor über das Pluszeichen das Profiling-Inhaltselement in die Haupt- oder Modulvorlage ein. Prüfe je einen Datensatz mit und ohne die passenden Tags.
