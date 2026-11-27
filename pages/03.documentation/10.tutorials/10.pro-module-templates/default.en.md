---
# http://learn.getgrav.org/content/headers
title: Setting up the module templates
slug: setting-up-module-templates
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

[doc-callout type="note" title="Earlier MailBeez versions"]
To change the shared email layout in V5, open [Main Templates](/content/main-templates). [Browse the legacy reference](/legacy).
[/doc-callout]

<span id="template-structure"></span>Edit the module template when you want to change one campaign’s message. In the older editor, the shared main template inserts that message at `{$body}`. The module template can also include a product list, such as `{$list_engine.productlist}`. For the current [birthday flow](/mailbeez/coupon_birthday), open its V5 guide. For a change to the shared header, see [Edit a main template](/tutorials/setting-up-main-template).

Use real-length text when previewing a change. A line that looks fine with a short sample name can wrap differently for a buyer with a longer name.

## Edit a campaign layout

1. <span id="open-the-template-for-editing"></span><span id="open-the-template-for-edi"></span>Open the module’s template manager. In the birthday module, for example, open **MailBeez → MailBeez Modules → Coupon: Birthday** and choose **edit** in the template manager. This visual editor was part of the Pro modules.
2. <span id="import-a-template"></span><span id="editing-the-content"></span><span id="edit-text"></span><span id="move-element"></span><span id="delete-element"></span><span id="insert-element"></span>To import a layout, choose **select Layout-Template** and select the responsive layout for that module. Use the pencil to edit a block, the arrows to move it, the bin to remove it and the plus button to insert a block after it.
3. <span id="test-your-template"></span>Check the 320 px and 480 px previews. If a picture overflows, try a width of `100%`. Give long links short visible text. Check the mobile preview and send yourself a test email.
4. <span id="text-version"></span>Open **TXTMODE** to generate or edit the plain-text version. Check that it still includes the main link.
5. <span id="saving-a-template"></span><span id="heads-up-nerd-mode"></span>Choose **save as Layout Template** and name your copy. To restore it, open **select Layout-Template → User**. If you edit template code in **Nerd-Mode**, test it again in the email clients your customers use.
