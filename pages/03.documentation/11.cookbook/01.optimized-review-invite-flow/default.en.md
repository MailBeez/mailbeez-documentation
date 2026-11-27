---
title: "Schedule a review invitation"
slug: optimized-review-invite-flow
template: tutorial
visible: true
published: true
taxonomy:
    migration_status: done
    category: [docs]
    tag: [pro]
---

To invite a buyer after delivery, choose the destination first. A product review concerns the item. A store review concerns the shopping experience, such as delivery or service.

Ask one clear question in the invitation. A buyer can judge the speed of delivery as soon as a parcel arrives, while judging the product itself may take longer.

1. Check the [consent](/configbeez/config_gdpr_consent) recorded for this invitation.
2. Open **Campaigns → Automations → MailBeez Flows** and choose the invitation for the review destination.
3. Select the qualifying order status and a delay that gives the buyer time to receive the order. For example, five days after dispatch may suit a shop with shorter delivery times.
4. Test the destination link in the invitation. If the platform sends the invitation itself, check the content there.

## Follow a test order

If the order reached the shipped status on Monday, a five-day wait takes you to Saturday. Check when the next [processing run](/configbeez/automatic-processing) will pick up eligible orders. Open the test email on a phone. Does the review link lead to the correct shop or product? If you also offer customer support, give it a separate, clearly labelled link.

If an invitation sent by MailBeez is missing, look up the order email address under [Sending & status](/sending-status). If a review service sends the invitation itself, check the invitation there.

<span id="split-review-invitations"></span>
## Split invitations between two review services

Suppose both your Google and AUSGEZEICHNET.org flows invite buyers after dispatch. You want each order to go to just one service, with roughly two thirds going to Google. First check that both flows use the intended order status and timing. A routing rule can let a flow through only when the order already qualifies for it.

[doc-steps]
[doc-step]
**Choose the two invitation flows**

Open [Review distribution](/filterbeez/filter_check_routing) and choose **Edit rules**. With both flows installed, use **Add module** to select **Ask for reviews on AUSGEZEICHNET.org** first and **Ask for Google reviews** second. Under **Distribution**, give Google twice the share of AUSGEZEICHNET.org.
[/doc-step]
[doc-step]
**Keep the assignment with the order**

Open **More options** and choose **Order** under **Keep the assignment per…**. In **Rule text (advanced)** you can see how MailBeez represents that split.

```text
order_id|mod:3|0|ausgezeichnet_advanced
order_id|mod:3|1,2|googlereviews_advanced
```
[/doc-step]
[doc-step]
**Check two orders before going live**

Under **Try a customer/order ID**, enter each number in turn. The preview calculates a destination without looking up an order or sending an email. With these rules, order `1000` goes to AUSGEZEICHNET.org and order `1001` to Google. The groups are calculated from the order number, so consecutive orders can also go to the same service. Use [Simulation Mode](/configbeez/config_simulation) and check that each qualifying test order gets only its assigned invitation.
[/doc-step]
[/doc-steps]
