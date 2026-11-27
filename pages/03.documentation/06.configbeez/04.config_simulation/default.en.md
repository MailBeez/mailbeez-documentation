---
title: "Simulation Mode"
module_subtitle: "Preview campaign recipients and messages in a test inbox"
slug: config_simulation
date: 28-09-2015
published: true
template: docs
visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: done
    category: [docs]
    tag: [core]
author:
    name: admin
metadata:
    author: admin
---

Suppose you want to test a birthday greeting before customers receive it. Pick a test profile with a birthday inside the flow’s sending window. A simulation lets you check whether that profile qualifies and which greeting and coupon MailBeez prepares.

Open **System → Configuration → Simulation Mode**.

1. Check the mode for the run you’re about to test. Scheduled runs use their own configured mode.
2. To receive a copy, enable **Send copies during simulation** and check **Simulation recipient**. With copies off, an empty inbox is expected. Inspect the selected recipients in the simulation results.
3. If you receive a copy, check the greeting, links and coupon against the test profile. Simulation emails and coupons carry a simulation marker. A simulated coupon can still be redeemable in the shop.
4. Finish inspecting the results before restarting the simulation. Restarting clears its recorded data.

For a complete check using known orders, follow [Test a winback flow](/tutorials-and-recipes/test-winback).
