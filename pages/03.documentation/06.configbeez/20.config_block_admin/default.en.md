---
title: 'Advanced Opt-Out with Admin'
module_subtitle: "Set the scope of an opt-out and review blocks from the shop admin"
slug: config_block_admin
date: 18-10-2011
published: true
publish_date: 18-10-2011
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
    code: config_block_admin
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
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/10/icon_325.png'
    pro: pro
    cert: 'true'
    price: '99 EUR'
    title_en: 'Advanced Opt-Out with Admin'
    teaser_en: 'Block all modules and administer customers opt-out settings'
    title_de: 'Erweitertes Opt-out mit Admin'
    teaser_de: 'Alle Module blockieren und Opt-Out der Kunden administrieren'
    author: MailBeez.com
author:
    name: admin
metadata:
    author: admin
---

[doc-callout type="note" title="Earlier MailBeez versions"]
To review opt-outs and blocks in V5, open [Contacts](/mailbeez-results/contacts). [Browse the legacy reference](/legacy).
[/doc-callout]

<span id="about-this-module"></span>Check an address in the former opt-out administration before changing a preference. A recipient can have a block for one module or for all MailBeez mail. Confirm the intended scope with the recipient before unblocking it.

Start with what the recipient asked to stop. A customer who only wants fewer review requests may still want other messages they signed up for.

## Add the links to a template

<span id="features"></span>First check whether the responsive main template already contains both links. The first placeholder blocks the current module. The second applies across modules.

```smarty
<a href="{$block_url}">no more emails like this</a> | 
<a href="{$block_all_url}">no ore emails at all</a>
```

For a module configured without opt-out, the template can check `$noblock` before showing the links.

```smarty
{if $noblock}
   You can not block this notification
{else}
   <a href="{$block_url}">no more emails like this</a> | 
   <a href="{$block_all_url}">no ore emails at all</a>
{/if}
```

## Manage an existing block

<span id="opt-out-administration"></span><span id="import-of-blacklist"></span>Look up the customer by ID, email or name. Select the module or the global block. To import existing blocks, paste one address per line and select the modules they apply to. Only matching customer records are blocked.

[doc-video url="https://www.youtube.com/watch?v=3yYfw8--94s" /]
