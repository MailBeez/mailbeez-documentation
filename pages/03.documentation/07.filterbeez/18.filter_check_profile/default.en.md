---
# http://learn.getgrav.org/content/headers
title: "Module profile filter"
module_subtitle: "Select which modules run using tags from Profiling Engine"
slug: filterbeez_check_profile
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
    tag: [pro, "Controll modules by Profile-Tags"]
module:
    code: 'filterbeez_check_profile'
    category: [filterbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    pro: 'pro'
    cert: 'true'      

author:
    name: admin
metadata:
    author: admin
---

[doc-callout type="note" title="Earlier MailBeez versions"]
To build an audience for a mailing in V5, open [Lists and Segments](/contacts/lists-segments). [Browse the legacy reference](/legacy).
[/doc-callout]

The earlier profile filter used tags from [Profiling Engine](/configbeez/common_services/config_profiling_engine) to determine whether a module could run for a customer or order. For example, a rule could exclude orders tagged for a particular product from a reminder. Check which development version is installed before depending on it.

Write out the audience in ordinary words before interpreting a tag rule, for example customers who bought one range of products but have never bought another.
