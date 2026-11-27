---
title: "Birthday greetings"
module_subtitle: "Send an annual greeting on the customer’s birthday"
published: true
date: '22-05-2010 00:00'
publish_date: '22-05-2010 00:00'
metadata:
    author: admin
slug: birthday
visible: true
template: docs
taxonomy:
    tag:
        - core
    category:
        - docs
summary:
    enabled: true
    format: short
    size: 128
module:
    code: birthday
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
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2010/06/birthday_cake_112.png'
    pro: ''
    cert: ''
    price: ''
    title_en: 'Birthday Greetings'
    teaser_en: ''
    title_de: 'Geburtstags Glückwünsche'
    teaser_de: 'Erinnere den Geburtstag deiner Kunden und sende Glückwünsche'
    author: MailBeez.com
author:
    name: admin
---

[doc-callout type="note" title="Earlier campaign module"]
Choose a flow for a current shop under [Automations](/mailbeez). [Browse the legacy reference](/legacy).
[/doc-callout]

To send the annual greeting on the birthday itself, use a customer record with a birth date and set the send window accordingly. A wider window can also include greetings shortly before or after the birthday.

If your team processes birthday greetings on weekdays, decide first whether a late Monday greeting still makes sense for a Saturday birthday.

To send only on the birthday, set both day limits to `0`. Preview the greeting with a customer profile that includes a birth date.

<span id="settings-to-check"></span>

## Choose the birthday window

- **Target Days Before**<br>
  Days before the birthday. Use `0` for the birthday itself.
- **Target Days After**<br>
  Last day to send a belated greeting. Use `0` to end the window on the birthday.
- **Google Analytics Integration**<br>
  Enable campaign parameters on links for this module.
- **Google Analytics Integration URL rewrite mode**<br>
  Choose which links receive these parameters.
