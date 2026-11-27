---
title: Profiling Engine
module_subtitle: "Define rules for tagging customers or orders in the earlier development version"
slug: config_profiling_engine
routes:
    default: /documentation/configbeez/config_profiling_engine
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

[doc-callout type="note" title="Earlier MailBeez versions"]
To build an audience for a mailing in V5, open [Lists and Segments](/contacts/lists-segments). [Browse the legacy reference](/legacy).
[/doc-callout]

The development version of the profiling engine described rules for tagging orders and customers. For example, the rule “has never bought product B” could assign the customer tag `upsell-B`. Check the installed edition before relying on these features.

A tag only helps another module if its meaning is clear. Record which rule assigned it before using the old proposal to interpret a customer group.

- [Controll modules by Profile-Tags](/filterbeez/filterbeez_check_profile) used tags to include or exclude a customer or order from a module.
- [Content Integration Suite](/filterbeez/filter_add_profiling_content) used the same tags to insert a matching content block.
- [Add Profiling Data](/filterbeez/filterbeez_add_profiling) exposed the assigned tags to custom template logic.
