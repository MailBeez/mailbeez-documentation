---
title: "Gambio GX 1.x"
slug: basic-installation-gambio
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

Use the installer for Gambio GX 1.x. MailBeez creates its own tables.

The GX 1.x procedure adds the menu entry by hand. Save a copy of the edited file so you can recover that entry after a shop update.

[plugin:content-inject](/content_blocks/download_installer)

## Copy the shop files

Copy `catalog/admin/mailbeez.php` into the shop’s admin directory. Copy `catalog/mailhive/` and `catalog/mailhive.php` into the shop root alongside `index.php`.

## Add the admin menu entry

Open `admin/includes/column_left.php` in the shop installation. A shop update can overwrite a manual menu edit.

Locate this fragment in the existing file.

```text
' . BOX_IMPORT . '</a><br>';
```

Insert the following immediately after that line.

```php
if (($_SESSION['customers_status']['customers_status_id'] == '0') && ($admin_access['mailbeez'] == '1')) 
    echo '<li class="leftmenu_body_item"><a class="fav_drag_item" href="' . xtc_href_link('mailbeez.php') . '"> MailBeez</a></li>';
```

## Grant access

Open `/mailhive.php` once on the shop domain to grant the primary administrator access. Grant additional administrators access separately in the shop administration.

Sign in again and clear the page cache before checking the menu.

[plugin:content-inject](/content_blocks/run_installer)
