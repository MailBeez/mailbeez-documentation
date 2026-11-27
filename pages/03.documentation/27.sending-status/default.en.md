---
title: "Sending & status"
slug: sending-status
template: docs
visible: true
published: true
taxonomy:
    category: [docs]
    tag:
        - "review invitation not sent"
        - "review invitation not received"
        - "missing review invitation"
        - "how to check if an email was delivered"
        - "was my email delivered"
        - "did my email arrive"
        - "check email delivery"
---

To trace a missing email, start with the address and the day the customer expected it. For a review invitation, use the address on the order. Open **System → Sending & status → Email delivery → Sends**, select that period and search by recipient. You can also search by module or send ID.

- **You find a send**<br>
  Open **Send details**. Under **Updates**, read the latest event from the delivery service. Under **Bounces**, look for a rejection and its reason, if supplied. If you see only a send time, you can tell the customer when MailBeez sent the invitation. Delivery is still unknown.
- **You find no send**<br>
  Check when the email was due. For a review invitation, look up the [order status that starts the wait](/mailbeez/review_advanced) and the first [scheduled run](/quickstart/step-3-set-forget) after the wait ended. If the email was due, check who qualifies for the campaign. You can look up a blocked address under [**Reports → MailBeez → Contacts**](/mailbeez-results/contacts) → **Opt-outs & blocks**.
- **You’re tracing a test**<br>
  Check which sending mode the run used. If it ran in [Simulation Mode](/configbeez/config_simulation), look in the configured simulation inbox.

For a drop in activity across many recipients, use [Email performance](/mailbeez-results/email-performance).
