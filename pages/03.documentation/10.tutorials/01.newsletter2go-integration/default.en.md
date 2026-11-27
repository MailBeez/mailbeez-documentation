---
title: "Newsletter2Go integration"
slug: newsletter2go-integration
template: tutorial
visible: true
published: true
taxonomy:
    migration_status: done
    category: [docs]
    tag: [ce]
---

[doc-callout type="note" title="Earlier integration"]
For mailings you prepare in V5, use the [Newsletter guide](/mailbeez/newsletter). [Browse the legacy reference](/legacy).
[/doc-callout]

Choose the system where the historical newsletter was prepared before editing its audience or content. An existing Newsletter2Go connection could deliver a MailBeez mailing or supply shop data to a mailing created in Newsletter2Go.

- **Mailing prepared in MailBeez**<br>
  MailBeez generated the email and handed it to Newsletter2Go for delivery. The integration processed bounce information.
- **Mailing prepared in Newsletter2Go**<br>
  The integration supplied recipient and product data from the shop and returned unsubscribe information to MailBeez. A shop could use both workflows.

## Connect the shop

1. Open the [installation guide for your shop version](/basics/installation). Some Gambio releases already included the integration.
2. In the older MailBeez administration, open the email system settings and connect the Newsletter2Go account. The integration documented here required at least the Standard plan.
3. Authorize the connection in the provider account. Check the integration status there, then reload the MailBeez email settings and check the status on the shop side.

[doc-accordion independent=true open=none]
[doc-accordion-item title="Gambio GX 3.x"]
Use the shop-specific activation procedure in [Gambio GX 3.x](/basics/installation/basic-installation-gambio-gx-3).
[/doc-accordion-item]
[doc-accordion-item title="Gambio GX 2.5+"]
Use the shop-specific activation procedure in [Gambio GX 2.5+](/basics/installation/basic-installation-gambio-gx-25).
[/doc-accordion-item]
[doc-accordion-item title="Gambio GX 2.3+"]
Use the shop-specific activation procedure in [Gambio GX 2.3+](/basics/installation/basic-installation-gambio-gx-23).
[/doc-accordion-item]
[doc-accordion-item title="Gambiocloud.com"]
Use the shop-specific activation procedure in [Gambiocloud.com](/basics/installation/basic-installation-gambiocloud).
[/doc-accordion-item]
[doc-accordion-item title="Gambio GX 2.x"]
Use the shop-specific activation procedure in [Gambio GX 2.x](/basics/installation/basic-installation-gambio-gx-2).
[/doc-accordion-item]
[doc-accordion-item title="Gambio GX 1.x"]
Use the shop-specific activation procedure in [Gambio GX 1.x](/basics/installation/basic-installation-gambio).
[/doc-accordion-item]
[doc-accordion-item title="modified-shop 2.x/3.x"]
Use the shop-specific activation procedure in [modified-shop 2.x/3.x](/basics/installation/basic-installation-modified-shop-2).
[/doc-accordion-item]
[doc-accordion-item title="modified-shop 1.0x"]
Use the shop-specific activation procedure in [modified-shop 1.0x](/basics/installation/basic-installation-modified-shop).
[/doc-accordion-item]
[doc-accordion-item title="Zen-Cart-pro.at"]
Use the shop-specific activation procedure in [Zen-Cart-pro.at](/basics/installation/basic-installation-zen-cart-pro-at).
[/doc-accordion-item]
[doc-accordion-item title="Zen Cart 1.5.x"]
Use the shop-specific activation procedure in [Zen Cart 1.5.x](/basics/installation/basic-installation-zen-cart-1-5-x).
[/doc-accordion-item]
[doc-accordion-item title="osCommerce 2.3.x"]
Use the shop-specific activation procedure in [osCommerce 2.3.x](/basics/installation/oscommerce-2-3-x).
[/doc-accordion-item]
[doc-accordion-item title="osCommerce 2.2"]
Use the shop-specific activation procedure in [osCommerce 2.2](/basics/installation/basic-installation-oscommerce).
[/doc-accordion-item]
[/doc-accordion]
