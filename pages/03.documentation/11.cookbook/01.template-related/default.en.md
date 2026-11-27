---
# http://learn.getgrav.org/content/headers
title: "Format a coupon expiry date in Smarty"
#menu: Beez-O-Graph
date: 17-02-2016
original_v4: true
published: true
publish_date: 17-02-2016
template: tutorial
# theme: false
visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: done
    category: [docs]
    tag: []
---

[doc-callout type="note" title="Earlier MailBeez versions"]
[Browse the legacy reference](/legacy).
[/doc-callout]

<span id="date-format"></span><span id="issue"></span>To show a coupon expiry date consistently in an older Smarty template, format the supplied date field where the voucher appears. A numeric format works even when the server locale changes.

Pick a test date with a day above twelve. It makes a swapped month and day obvious when you compare the English and German previews.

<span id="solution"></span><span id="option-2"></span>Put this expression in the campaign template.

```smarty
{$coupon_expire|date_format:"%Y-%m-%d"}
```

<span id="option-1"></span>For a coupon expiring on 18 December 2026, the output is `2026-12-18`. To display month or weekday names, check the locale of the PHP process rendering the email and preview the result in the intended language.

For the same voucher to show `18.12.2026` in German and `2026-12-18` in English, use `%d.%m.%Y` in the German template and `%Y-%m-%d` in the English one. Compare both previews with the expiry stored on the coupon.
