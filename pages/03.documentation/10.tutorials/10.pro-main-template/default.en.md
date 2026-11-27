---
# http://learn.getgrav.org/content/headers
title: "Edit a main template"
slug: setting-up-main-template
original_v4: true
published: true
template: tutorial
visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: done
    category: [docs]
    tag: [pro]
---

<span id="template-structure"></span>Change the shared design when a new logo or footer should appear in several campaigns. The main template surrounds the content supplied by each campaign, so choose a representative message for the preview.

Choose an example with both a logo and a longer body. It will show whether the shared header leaves enough room for the actual campaign message.

1. Open **Content → Main Templates** and choose the template used by the campaign. The visual editor requires the relevant Pro features.
2. Update your logo, header links and company information in the footer. Check each language you send.
3. Preview a campaign email with real-length content. Check its plain-text version as well as its HTML layout.

If you maintain a custom Smarty template, keep the `{$body}` placeholder. It inserts the campaign content into the shared layout.

## The shared template in the V4 editor

<span id="open-common-template-for-editing"></span><span id="import-a-template"></span><span id="configure-the-header-images"></span><span id="edit-the-company-information-in-the-footer"></span><span id="edit-the-menu"></span>Open **MailBeez → configuration → Template Manager → Edit common main template**. Use **select Layout-Template** to load **responsive Email**. The `@480` settings control the narrow-screen header. Click the menu or the company details in the footer to edit them.

<span id="test-your-template"></span><span id="text-version"></span>Try the **320px** and **480px** previews. If the email overflows, look for a fixed-width image or long link text. Use **TXTMODE** to check the plain-text version.

<span id="saving-a-template"></span><span id="heads-up-nerd-mode"></span>Save a named copy with **save as Layout Template**. You can reload it under **select Layout-Template → User**. Keep that copy before editing the source in **Nerd-Mode**.
