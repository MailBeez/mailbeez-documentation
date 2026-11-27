---
title: "Test a winback flow before sending"
slug: test-winback
template: docs
visible: true
published: true
taxonomy:
    category: [docs]
    tag:
        - "winback test customer"
        - "test customer for winback"
        - "winback eligibility"
        - "test winback"
---

A coffee shop wants to remind customers about a refill 90 days after their last order shipped. Before turning on the flow, use a test shop with **Win back inactive customers** installed. A useful test has two buyers. Only one should receive the first reminder.

[doc-steps]
[doc-step]
**Choose two test orders**

Find two customers whose latest order is still in your shipped status. One reached that status 95 days ago, the other 80 days ago. Both should meet the other campaign conditions and neither should already have received the first reminder. Write down which address belongs to which order.
[/doc-step]
[doc-step]
**Set the window and the inbox**

Under **Campaigns → Automations → MailBeez Flows**, open [Win back inactive customers](/mailbeez/winback_advanced). Select your shipped status in **Target Order Status**. Set **Target Days Since Last Purchase** to 90 and **Target Days to Look Back** to 120. For this test, use a single email without a coupon.

Open [Simulation Mode](/configbeez/config_simulation). Select simulation for the run. If you want a copy in your inbox, enable simulation copies and check the destination address.
[/doc-step]
[doc-step]
**Compare the run with your prediction**

Run the flow in simulation and compare the results with the dates of the latest orders.

- **80 days ago** — Too early. The first reminder is due after 90 days.
- **95 days ago** — This is your test customer. The reminder is due and the order is within the 120-day lookback.
- **125 days ago** — An order this old falls outside the lookback. If you have one in your test shop, its buyer should be absent.

If the 95-day buyer is missing, check the date of the status change, the latest order and any previous send for that buyer. Check the copy separately for its subject and reorder link.
[/doc-step]
[doc-step]
**Check the scheduled run**

A manual simulation tests the selection. If the flow will run automatically, follow the shared guide to [check the first scheduled run](/quickstart/step-3-set-forget#check-the-first-run).
[/doc-step]
[/doc-steps]
