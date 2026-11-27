---
title: "Multilingual Templates"
module_subtitle: "Prepare language-specific email variants in Template Manager"
published: true
date: '03-03-2011 00:00'
publish_date: '03-03-2011 00:00'
metadata:
    author: admin
slug: config_tmplmngr_lng
visible: true
template: docs
taxonomy:
    category:
        - docs
    tag: [pro, "Multilanguage Extension with Template Manager"]
summary:
    enabled: true
    format: short
    size: 128
module:
    code: config_tmplmngr_lng
    category:
        - configbeez
    compatiblity:
        - comp_osc
        - comp_cre
        - comp_digi
        - comp_zencart
        - comp_xtc
        - comp_xtcm2        
        - comp_gambio
        - comp_saas
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/08/icon_32.png'
    pro: pro
    cert: 'true'
    price: '799 EUR'
    title_en: 'Responsive Template Manager with Multilanguage Extension'
    teaser_en: ''
    title_de: 'Responsive Vorlagen-Verwaltung mit Mehrsprachigkeit'
    teaser_de: 'Versenden Sie MailBeez Emails in der Kundensprache - mit responsive Vorlagen Verwaltung'
    author: MailBeez.com
author:
    name: admin
---

[doc-callout type="note" title="Earlier MailBeez versions"]
To review email language assignments in V5, open [Language & assignment](/configbeez/language-assignment). [Browse the legacy reference](/legacy).
[/doc-callout]

<span id="do-you-run-a-store-with-m"></span><span id="become-a-global-seller-wi"></span><span id="plugin-development"></span>Use the multilingual edition of [Responsive Template Manager](/configbeez/config_tmplmngr) to prepare a separate email for each shop language. It discovers configured languages. You supply the translations for each module that uses the MailBeez template system.

Prepare a real test profile for each language you use. You can then check whether the shop selects the intended translation as well as whether that translation reads correctly.

1. <span id="easy-to-use"></span>Set up customer language detection. For shops that did not save a language on the customer record, the extension could use historical and address data. A custom detector could read a shop-specific field.
2. Translate the HTML and plain-text templates for the same campaign.
3. Select the language when previewing or sending a test. Check both the message and the destination of its links with a matching customer record.
