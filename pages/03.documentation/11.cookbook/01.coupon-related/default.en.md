---
# http://learn.getgrav.org/content/headers
title: "Coupon recipes"
slug: coupon-recipes

routes:
    aliases:
        - /documentation/cookbook/newsletter-related

date: 17-02-2016
original_v4: true
published: true
publish_date: 17-02-2016
template: tutorial
# theme: false
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

<span id="requirement"></span>A signup coupon rewards a confirmed subscription. A gift voucher delivers value someone has already paid for. Start with the recipe that matches your promise to the customer. Your shop needs a supported coupon system for either one.

<span id="coupon-giveaway-for-registering-to-receive-newsletters"></span>

## Give a subscriber a welcome coupon

1. <span id="solution"></span>In [Content → Coupons](/content/coupons), open **Templates**. For example, enter a fixed €5 discount and choose its validity and redemption restrictions.
2. Open [Contacts → Signup Confirmation](/contacts/signup-confirmation). Select the confirmation email for prospects or customers and assign the template if this option is available. Use an inbox you can access to sign up and follow the confirmation link.
3. Open the email that arrives after confirmation. Check the code, its expiry and the discount on an eligible basket in your test shop. If you also accept signups from people with a shop account, repeat the test with that type of account.

### Welcome coupons in Newsletter Advanced

<span id="create-a-dynamic-list-of-recipients"></span>In the earlier newsletter editor, the welcome email belonged to a campaign with a dynamic list. The original example used shop newsletter subscribers and limited customer account age to zero or one day. An existing customer who subscribes today can already be outside that age window. Test the list with both a new account and an older subscriber before using it.

[doc-image src="Screen_welcome_list.en.png" alt="Earlier list editor with the age criteria for the welcome coupon audience" /]

<span id="create-a-welcome-newsletter"></span>Assign the list to the campaign and the coupon template to the welcome newsletter. Check the newsletter’s active period, preview each shop language and test the email before marking it ready.

[doc-image src="Screen_welcome_email.en.png" alt="Earlier newsletter editor showing the welcome email with its coupon" /]

<span id="voucher-as-a-gift-product"></span>

## Send a purchased gift voucher

<span id="requirement-1"></span><span id="solution-1"></span><span id="create-a-gift-voucher-product"></span><span id="create-a-dynamic-list-of-recipients-1"></span>In an older shop with Newsletter Advanced, create a €25 gift voucher as a shop product. Select buyers of that product in the list, then assign a €25 coupon template to the voucher email. Check which order statuses your setup accepts before treating an order as paid.

<span id="create-the-voucher-email"></span>Try one paid voucher order and one ordinary order in a test shop. Only the voucher buyer should receive a redeemable €25 code. The original recipe supports one voucher per customer and purchase. Test a quantity of two before offering multiple vouchers on one order. For a second denomination, use a separate product and a matching template.
