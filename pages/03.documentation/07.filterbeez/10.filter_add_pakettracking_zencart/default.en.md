---
# http://learn.getgrav.org/content/headers
title: "Zen Cart parcel tracking"
module_subtitle: "Include a parcel number and tracking link in a Zen Cart order email"
slug: filter_add_pakettracking_zencart
published: true
template: docs
# theme: false
visible: false
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: done
    category: [docs]
    tag: [pro, "ZenCart Package Tracing support"]
# added collection selector
module:
    code: 'filter_add_pakettracking_zencart'
    category: [filterbeez]
    compatiblity: [comp_zencart]
    pro: 'pro'
    cert: 'true' 
author:
    name: admin
metadata:
    author: admin

---

[doc-callout type="note" title="Earlier filter"]
For the filters you can configure in V5, open [Add-ons](/extensions/addons). [Browse the legacy reference](/legacy).
[/doc-callout]

Include a parcel number and a working carrier link in an order email. The earlier filter reads the tracking fields from the [Zen Cart package tracking extension](https://www.zen-cart-pro.at/forum/vbdownloads.php?do=download&downloadid=181), so start with an order that already has a tracking number.

Choose a dispatched order with a real parcel number when testing. Open the carrier link and check that it points to that parcel and shows the shipment status.

## Add tracking fields to the template

Use the tracking numbers and date fields populated by the extension.

```
[[$data.order.paket_tracking.track_id1]] // track_id1
[[$data.order.paket_tracking.track_id2]] // track_id2
[[$data.order.paket_tracking.track_id3]] // track_id3
[[$data.order.paket_tracking.track_id4]] // track_id4
[[$data.order.paket_tracking.track_id5]] // track_id5
[[$data.order.paket_tracking.track_id6]] // track_id6
[[$data.order.paket_tracking.track_day]] // track_day
[[$data.order.paket_tracking.track_month]] // track_month
[[$data.order.paket_tracking.track_year]] // track_year
```

Build the carrier link in the email template. Replace the example addresses with your carriers’ tracking URLs and test with a matching order.

```
[[if $data.order.paket_tracking.track_id1 ]]
    <a href="http://carrier1.com?track=[[$data.order.paket_tracking.track_id1]]"> Tracking Link Carrier 1 </a>
[[elseif $data.order.paket_tracking.track_day]]
    <a href="http://carrier2.com?track=[[$data.order.paket_tracking.track_id2]]&day=[[$data.order.paket_tracking.track_day]]"> Tracking Link Carrier 2 </a>
[[/if]]
```
