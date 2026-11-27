---
title: 'Shopper Approved Advanced'
module_subtitle: "Choose which survey buyers receive and when to send it"
slug: shopperapproved_advanced
date: 08-05-2015
published: true
publish_date: 08-05-2015
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
module:
    code: shopperapproved_advanced
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
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2013/06/top_64.png'
    pro: pro
    cert: 'true'
    price: '99 EUR'
    title_en: 'Shopper Approved Advanced'
    teaser_en: 'Advanced Features: Delay for international orders, multiple Order status, recognition of regular customers'
    title_de: 'Idealo Profi'
    teaser_de: 'Profi-Features: Verzögerung für internationale Bestellungen, Stammkunden-Erkennung und mehr'
    author: MailBeez.com
author:
    name: admin
metadata:
    author: admin
---

[doc-callout type="note" title="Earlier campaign module"]
Choose a flow for a current shop under [Automations](/mailbeez). [Browse the legacy reference](/legacy).
[/doc-callout]

Choose which Shopper Approved survey buyers should receive and when it should arrive. Have your shop’s account details ready and allow enough time for international delivery.

Follow a test link as far as the survey itself. That shows you which questions buyers will see and whether your email describes the experience accurately.

## Choose who receives an invitation

1. Select the order statuses that start the waiting period. Set an extra delay for deliveries outside the home country configured in your shop.
2. Set the minimum number of orders. To limit reminders for repeat buyers, set the interval between invitations, for example 120 days. The module checks when the last invitation was sent.
3. Choose whether to send the initial survey or link to the full survey with the order ID already filled in.

## Customize the review page

To use a custom review page, add the following code to that page. The module renders its review template there.

```
if (isset($_GET['SA'])) {
    require_once(DIR_FS_CATALOG . 'mailhive/mailbeez/shopperapproved_advanced.php');
    $sa = new shopperapproved_advanced();
    $code = $sa->generate_page($_GET['SA'], 'core.tpl.html');
    echo $code;
}
```

In the email template, link to your page using the invitation parameter, for example `https://example.com/my-custom-page.php?SA={$sa_invite_parameter_value}`.

For the full survey, copy its link from your Shopper Approved account and replace `<order-id>` with `{$order_id}`. The [integration suite](/configbeez/integrations/config_shopperapproved_integration) can also display reviews in the shop and in MailBeez emails.
