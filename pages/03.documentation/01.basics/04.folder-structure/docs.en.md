---
title: Folder Structure
visible: false
taxonomy:
    category: docs
---

[doc-callout type="note" title="Earlier MailBeez versions"]
[Browse the legacy reference](/legacy).
[/doc-callout]

Look under `mailhive/` in an older shop installation. Use the directory for the task you are maintaining.

When tracking down a change, start with what it affects. A change to one campaign points to its module folder, while shared behavior can involve several modules.

| Directory | What it contains |
| --- | --- |
| <span id="common"></span>`common/` | Shared files used by several modules. |
| <span id="common-template-c"></span>`common/templates_c/` | Generated Smarty and application cache files. Edit the source template when changing a layout. |
| <span id="configbeez"></span>`configbeez/` | Configuration modules. Visible modules appear in the configuration tab. |
| <span id="dashboardbeez"></span>`dashboardbeez/` | Widgets available to the older dashboard after installation. |
| <span id="filterbeez"></span>`filterbeez/` | Filters and helpers for selecting recipients and changing email content. |
| <span id="gui-deprecated"></span>`gui/` | Retired interface files for links to the opt-out dialog. |
| <span id="images"></span>`images/` | Shared images, such as a logo in an email header. |
| <span id="includes"></span>`includes/` | Integration files loaded by the shop or its administration. |
| <span id="install"></span>`install/` | Installation files used by shops based on xt:Commerce. |
| <span id="mailbeez"></span>`mailbeez/` | Campaign modules listed in the older module administration. |
| <span id="reportbeez"></span>`reportbeez/` | Modules that supply the older reports. |
