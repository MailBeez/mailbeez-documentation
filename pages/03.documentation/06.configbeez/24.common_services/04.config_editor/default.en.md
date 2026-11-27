---
title: 'Editor and Image Engine'
module_subtitle: "Configure image sources and cache settings for the earlier visual editor"
slug: config_editor
routes:
    default: /documentation/configbeez/config_editor
date: 06-04-2017
published: true
publish_date: 24-03-2014
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
    tag: [pro]
module:
    code: 'pro'
    category: [pro]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio,comp_saas]   
    pro: 'pro'       
author:
    name: admin
metadata:
    author: admin
---

[doc-callout type="note" title="Earlier MailBeez versions"]
To change the shared email layout in V5, open [Main Templates](/content/main-templates). [Browse the legacy reference](/legacy).
[/doc-callout]

Configure where the older visual editor finds images, writes cached files and previews mobile layouts. These settings apply to the modules that share the editor.

An original image and a generated preview serve different purposes. Identify the source folder before cleaning up or changing any directory used for cached images.

- **Root for image browser**<br>
  Enter a path relative to the shop root. An empty path exposes the shop’s image folders to the picker. Set a narrower path if editors only need campaign images.
- **Root for image cache**<br>
  Enter the cache path relative to the shop root. The engine can rebuild the cache and moves it when the setting changes. Keep the former directory and its `.htaccess` so image URLs in emails already sent still work.
- **Mobile Editor width settings**<br>
  Choose three preview widths, for example 320, 480 and 600 pixels. Use widths supported by the template.
