---
title: "Shopauskunft (Community)"
module_subtitle: "Invite buyers to rate your store on Shopauskunft"
slug: shopauskunft
template: docs
visible: true
published: true
module:
    code: shopauskunft
    category:
        - mailbeez
    compatiblity:
        - comp_osc
        - comp_cre
        - comp_digi
        - comp_zencart
        - comp_xtc
        - comp_xtcm2        
        - comp_gambio
    thumbnail: 'http://www.mailbeez.com/wp-content/uploads/downloads/thumbnails/2011/03/sa.png'
    pro: ''
    cert: ''
    price: ''
    title_en: Shopauskunft
    teaser_en: ''
    title_de: Shopauskunft
    teaser_de: 'Kunden automatisch um Bewertungen auf Shopauskunft.de bitten'
    author: MailBeez.com
taxonomy:
    migration_status: done
    category:
        - docs
    tag:
        - ce
        - "Shopauskunft"
---

[doc-callout type="note" title="Earlier campaign module"]
Choose a flow for a current shop under [Automations](/mailbeez). [Browse the legacy reference](/legacy).
[/doc-callout]

The earlier Community module invites a buyer to rate your shop on Shopauskunft. Use the review destination for your own shop. Open it from a test invitation before enabling automated requests.

For a shop with more than one review profile, check the shop name on the landing page against the one the buyer saw at checkout.

1. Select the order status that starts the waiting period. Set the delay so buyers have time to receive their order.
2. Set a processing window longer than that delay. A daily run with a five-day delay and a ten-day cutoff checks orders that reached the selected status five to ten days ago.
3. Check the sender name, address and text and HTML templates. The module uses the highest qualifying order number for each customer and expects order numbers to increase over time.

For the V5 flow, see [Ask for reviews on Shopauskunft](/mailbeez/shopauskunft_advanced).
