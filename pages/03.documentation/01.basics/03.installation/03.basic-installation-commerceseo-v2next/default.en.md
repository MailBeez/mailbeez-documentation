---
title: "Commerce:SEO V2Next"
slug: basic-installation-commerceseo-v2next
template: docs
visible: true
published: true
taxonomy:
    migration_status: done
    category: [docs]
    tag: [ftp]
---

[doc-callout type="note" title="Installation for earlier shop releases"]
Check the version in your shop admin. For a different release, look under [Installation](/basics/installation) or in the [legacy reference](/legacy).
[/doc-callout]

Use the installer for Commerce:SEO V2Next 2.4.x CE. MailBeez creates its own tables.

Choose how to add the admin entry before editing the menu file. The menu add-on is useful if shop updates regularly replace your local menu changes.

[plugin:content-inject](/content_blocks/download_installer)

## Copy the shop files

Copy `catalog/admin/mailbeez.php` into the shop’s admin directory. Copy `catalog/mailhive/` and `catalog/mailhive.php` into the shop root alongside `index.php`.

## Add the admin menu entry

You can also use the Commerce:SEO admin menu add-on to keep the entry across updates.

Open `admin/includes/column_top.php` in the shop installation. A shop update can overwrite a manual menu edit.

Locate this fragment in the existing file.

```text
<!-- Gutscheine -->
```

Insert the following immediately before that line.

```html
<li><a href="mailbeez.php">MailBeez</a></li>
```

## Grant access

Open `/mailhive.php` once on the shop domain to grant the primary administrator access. Grant additional administrators access separately in the shop administration.

[plugin:content-inject](/content_blocks/run_installer)
