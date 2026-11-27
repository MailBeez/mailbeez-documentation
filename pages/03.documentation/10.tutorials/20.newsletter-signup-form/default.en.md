---
title: "Connect a newsletter signup form"
slug: newsletter-signup-form
template: tutorial
visible: true
published: true
taxonomy:
    migration_status: done
    category: [docs]
    tag: [pro]
---

Your coffee shop has a page for its monthly newsletter. Visitors can sign up for new coffees and brewing tips without creating a shop account. Build the form into that page and let MailBeez send the confirmation email. If you prefer the built-in form, follow [Embed a signup form](/contacts/signup-confirmation#signup-form).

You’ll need Newsletter Advanced 3.72 or later with the public [Newsletter API](/configbeez/config_api/mb_newsletter_api), plus access to the HTML and JavaScript on the signup page.

## Choose the topics and confirmation email

1. Open **Contacts → Topics**. Find or create the two topics you offer on the form and note their IDs. The example uses `1,3` for new coffees and brewing tips. Replace these with your own IDs. If you send one newsletter without topics, leave out the `topic_ids` input.
2. Open **Contacts → Signup Confirmation** and check the confirmation email for prospects and customers. MailBeez uses the email address to choose the path. The form only needs to ask for the address and consent. After confirmation, the standard page can invite prospects to add their name. Customers keep the details in their shop account.

## Add the form to your page

Paste this HTML where the form should appear. The example assumes your shop’s `mailhive.php` is at the site root. If your shop is in a subdirectory or the form is on another website, set `action` to the full HTTPS address of **your shop’s** endpoint, including its subdirectory.

[codesh lang="html" title="Signup form" wrap="true"]
<form id="newsletter-signup" method="post"
      action="/mailhive.php/api/public/v1.0/newsletter/add/">
  <label for="signup-email">Email address</label>
  <input id="signup-email" name="email" type="email"
         autocomplete="email" required>

  <label>
    <input type="checkbox" name="consent" value="1" required>
    I want the monthly newsletter on new coffees and brewing tips.
  </label>
  <input type="hidden" name="topic_ids" value="1,3">

  <button type="submit">Subscribe</button>
  <p role="status"></p>
</form>
<script src="newsletter-signup.js" defer></script>
[/codesh]

For a multilingual shop, you can add a hidden input named `lng_id`. Set its value to the shop’s numeric language ID for the signup page.

## Send the signup request

Save the following as `newsletter-signup.js` at the location used in the script tag. It sends the fields as form data and reads the JSON reply from MailBeez. The submit button stays disabled while the request is in progress.

[codesh lang="javascript" title="newsletter-signup.js" wrap="true"]
const form = document.getElementById("newsletter-signup");
const button = form.querySelector("button");
const message = form.querySelector('[role="status"]');
const errors = {
  invalid_email: "Check your email address.",
  consent: "Please tick the box to subscribe.",
  duplicate: "This address is already subscribed."
};
const retry = "We couldn’t process your request. Please try again later.";

form.addEventListener("submit", async (event) => {
  event.preventDefault();
  if (button.disabled) return;
  button.disabled = true;
  message.textContent = "Sending your request…";

  try {
    const fields = new URLSearchParams(new FormData(form));
    fields.set("consent", form.elements.consent.checked ? "1" : "0");
    const response = await fetch(form.action, {
      method: "POST",
      body: fields
    });
    if (!response.ok) throw new Error(String(response.status));
    const result = await response.json();
    if (result.error === false) {
      form.reset();
      message.textContent = "Check your inbox and click the confirmation link.";
    } else {
      message.textContent = errors[result.error] || retry;
    }
  } catch {
    message.textContent = retry;
  } finally {
    button.disabled = false;
  }
});
[/codesh]

## Test the signup

1. Sign up with a test inbox that has no shop account. Open the confirmation email and follow the link. Check the confirmed subscription and topics in **Contacts → Prospects**.
2. Repeat with a shop customer who hasn’t subscribed yet. Check the customer confirmation email and the subscription under **Contacts → Customers**.
3. Submit a confirmed address again. The form should show that it’s already subscribed. Leave the consent box unchecked or enter an incomplete email address and the browser should prompt you to correct the form.

If the form shows the retry message, open **Network** in your browser’s developer tools and submit it again. Look for the POST to `newsletter/add/`. A shop page or a 404 response usually means the form points to the wrong URL. HTTP 429 means you’ve reached a request limit. Wait before retrying.
