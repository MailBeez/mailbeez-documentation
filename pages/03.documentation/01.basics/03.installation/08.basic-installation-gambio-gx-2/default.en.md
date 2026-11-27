---
title: "Gambio GX 2.x"
slug: basic-installation-gambio-gx-2
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

Use the installer for Gambio GX 2.x before 2.3. MailBeez creates its own tables. From 2.3 onwards, use the bundled integration described in [Gambio](/basics/installation/common-gambio).

[plugin:content-inject](/content_blocks/download_installer)

## Copy the shop files

Copy `catalog/admin/mailbeez.php` into the shop’s admin directory. Copy `catalog/mailhive/` and `catalog/mailhive.php` into the shop root alongside `index.php`.

Copy the integration files from `/extra files/extras_gambio2.x` into the matching shop directories.

```text
/system/conf/admin_menu/menu_mailbeez.xml
/admin/includes/mailbeez/images/mailbeez_gambio_icon.png
/system/overloads/AdminApplicationBottomExtenderComponent/BeezDesk.inc.php
/system/overloads/AdminApplicationTopExtenderComponent/MailBeezAdminApplicationTopExtender.inc.php
/system/overloads/ApplicationTopExtenderComponent/MailBeezAnalyticsClicktracker.inc.php
/system/overloads/ApplicationTopExtenderComponent/MailBeezShopvotingDefault.inc
/system/overloads/ApplicationBottomExtenderComponent/MailBeezExtender.inc.php
```

## Check the admin menu

For an early GX 2 release, locate the menu entry containing `BOX_CUSTOMERS_STATUS` in `admin/includes/column_left.php`. Add this entry on the following line. It appears under **Kunden**.

```php
if (($_SESSION['customers_status']['customers_status_id'] == '0') && ($admin_access['mailbeez'] == '1')) 
    echo '<ul>
            <li><a id="BOX_MAILBEEZ" href="' . xtc_href_link('mailbeez.php') . '"> MailBeez</a></li>
          </ul>';
```

With Service Pack 1.1, grant access first. Only if the entry is still missing, add the following immediately above `# SAMPLE ITEM:` in the same file.

```php
if (($_SESSION['customers_status']['customers_status_id'] == '0') && ($admin_access['module_newsletter'] == '1')) 
    echo '<ul>
            <li><a id="BOX_MAILBEEZ" href="' . xtc_href_link('mailbeez.php') . '">MailBeez</a></li>
          </ul>';
```

## Grant access

Open `/mailhive.php` once on the shop domain to grant the primary administrator access. Grant additional administrators access separately in the shop administration.

Sign in again, clear the page cache and check **Zusatzmodule**.

[plugin:content-inject](/content_blocks/run_installer)
