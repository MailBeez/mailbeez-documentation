---
title: "Order database repair"
module_subtitle: "Correct inconsistent order status records in the shop database"
slug: service_db_repair_order
date: 07-02-2013
published: true
publish_date: 07-02-2013
template: docs
visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: done
    category:
        - docs
    tag:
        - pro
        - "Service-Module: Repair Orders DB"
module:
    code: service_db_repair_order
    category:
        - mailbeez
    compatiblity:
        - comp_osc
        - comp_cre
        - comp_digi
        - comp_zencart
        - comp_xtc
        - comp_xtcm2        
        - comp_gambio
    thumbnail: ''
    pro: pro
    cert: 'true'
    price: '29 EUR'
    title_en: 'Service-Module: Repair Orders DB '
    teaser_en: 'This module repairs corrupted Order Databases'
    title_de: 'Service-Modul: Repariere Bestell-Datenbank'
    teaser_de: 'Dieses Modul repariert korrupte Bestell-Datenbanken'
    author: MailBeez.com
author:
    name: admin
metadata:
    author: admin
---

[doc-callout type="note" title="Earlier campaign module"]
Choose a flow for a current shop under [Automations](/mailbeez). [Browse the legacy reference](/legacy).
[/doc-callout]

<span id="problem"></span><span id="symptom"></span>Use this historical service when an order shows different statuses in the order list and the order editor, or when a module cannot find an expected order after an external system updated it.

For example, a colleague handling a delivery enquiry might read one status in the order list and another when opening the same order. Note which two records disagree before running the repair.

1. <span id="solution"></span>Run the service in simulation. It lists affected orders without changing them. Compare a listed order with the shop and the external order system.
2. Decide whether repaired orders should retain their existing status or receive a specific replacement. Check which campaigns use that status.
3. Run the repair only after checking the selection. The service runs before the other modules. Reopen an affected order and compare the status in both views.
