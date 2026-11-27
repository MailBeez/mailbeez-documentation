---
title: 'Responsive Template Manager'
module_subtitle: "Manage responsive templates in the earlier Template Manager"
published: true
date: '30-06-2011 00:00'
publish_date: '30-06-2011 00:00'
metadata:
    author: admin
slug: config_tmplmngr
visible: true
template: docs
taxonomy:
    category:
        - docs
    tag: [pro]
routes:
    aliases:
        - /documentation/configbeez/config_tmplmngr
summary:
    enabled: true
    format: short
    size: 128
module:
    code: config_tmplmngr
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
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/08/icon_321.png'
    pro: pro
    cert: 'true'
    price: '159 EUR'
    title_en: 'Responsive Template Manager'
    teaser_en: 'edit your campaign templates from you MailBeez admin and send responsive Emails'
    title_de: 'Responsive Vorlagen-Verwaltung'
    teaser_de: 'Bearbeite die MailBeez Vorlagen direkt in der Admin und versende responsive Emails'
    author: MailBeez.com
author:
    name: admin
---

[doc-callout type="note" title="Earlier MailBeez versions"]
To change the shared email layout in V5, open [Main Templates](/content/main-templates). [Browse the legacy reference](/legacy).
[/doc-callout]

Use the older visual editor to change an email layout shared by several campaigns. Save a named copy first so you can restore it if a change affects another message.

Preview two campaigns that use the same layout, ideally one with a short message and one with a long product name. A layout change must accommodate both.

1. <span id="features"></span>Open the template and edit its blocks. The manager imports module `.tpl` files and stores the editable templates in the shop database. Use **Nerd-Mode** if you need to edit the source.
2. Check the mobile previews, the HTML version and the plain-text version. MailBeez normally builds the text from the HTML. For custom module text, the main template also needs its own text version.
3. Send a test email. If needed, restore your saved template or the supplied default. For language-specific copies, see [Multilanguage Extension with Template Manager](/configbeez/config_tmplmngr_lng).
