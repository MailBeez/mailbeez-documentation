---
title: "Commerce:SEO 2.1"
slug: basic-installation-commerceseo-2-1
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

Use the installer for Commerce:SEO 2.1.x CE. MailBeez creates its own tables.

Keep a copy of your existing admin menu before adding the entry. After a shop update you can compare the files if the entry disappears.

[plugin:content-inject](/content_blocks/download_installer)

## Copy the shop files

Copy `catalog/admin/mailbeez.php` into the shop’s admin directory. Copy `catalog/mailhive/` and `catalog/mailhive.php` into the shop root alongside `index.php`.

## Add the admin menu entry

Open `admin/includes/column_left.php` in the shop installation. A shop update can overwrite a manual menu edit.

Locate this fragment in the existing file.

```text
class="menuBoxContentLink">' . BOX_MODULE_NEWSLETTER . '';
```

Insert the following immediately after that line.

```php
if (($cs == '0') && ($aa['mailbeez'] == '1')) echo '<a '.($p == 'mailbeez'?'class="menu_link_aktiv"':'') . ' class="menuBoxContentLink" href="' . xtc_href_link('mailbeez.php') . '">MailBeez</a>';
```

## Grant access

Open `/mailhive.php` once on the shop domain to grant the primary administrator access. Grant additional administrators access separately in the shop administration.

[plugin:content-inject](/content_blocks/run_installer)
