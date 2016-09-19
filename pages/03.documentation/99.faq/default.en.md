---
# http://learn.getgrav.org/content/headers
title: F.A.Q.
slug: frequently-asked-questions
published: true
template: tutorial

visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: done
    category: []
    tag: []
# added collection selector

author:
    name: admin
metadata:
    author: admin
    
toc:
    baselevel: 2
    headinglevel: 3
    
---

Answers to frequently asked questions

<div class="faq-toc">[TOC]</div>

## General

General issues


### How often can I run MailBeez?
The quick answer is as often as you want. In practice, a typical installation would run at least once daily through a cronjob activation. If you do want to trigger Mailbeez more regularly, there is no risk of sending the same email twice due to the MailBeez tracking feature.

### Will customers receive the same email several times?
No, each email will be sent exactly once to each customer matching the criteria. Email campaigns are tracked in the table ‘mailbeez_tracking’, controlled within the MailBeez framework, not in an individual module’s code.



### Popups do not load (loading indicator showing)

Issue: All popups only show the loading indicator – they seem never to finish.

**Solution 1: store configuration**

make sure you admin configuration (located in `/includes/configuration.php`) value for `HTTP_CATALOG_SERVER` is using the same URL (incl. http:// and https://) as `HTTP_SERVER`

**Solution 2: Server configuration**

Check with your Server Admin if the configuration value `X-Frame-Options` is set to e.g. `SAMEORIGIN`, this tells browsers not to show the loaded content in an iframe. read more on
<https://developer.mozilla.org/en-US/docs/HTTP/X-Frame-Options>

**Background:**

Technically the popup is an iframe. The webserver can be configured to tell browsers to show a page only in iframes, when the origins (first part of the URL, incl. http or https) are the same. In the the admin site is using https but the catalog site is configured without https the origin is not the same.

From the apache documentation:

"*The X-Frame-Options HTTP response header can be used to indicate whether or not a browser should be allowed to render a page in a frame or iframe. Sites can use this to avoid clickjacking attacks, by ensuring that their content is not embedded into other sites.*"

 



### Could my store’s server get black listed by emailing with MailBeez?

With sending high volume of Emails the risk of getting black-listes is increasing due to numerous reasons. We recommend to configure certified email sending service in the [Email Engine Configuration](/documentation/configbeez/config_email_engine).
 

### Is MailBeez compliant with data protection policies?
MailBeez is installed on your server, and operated from within your store’s admin area, and as such, does not export any data to us, or indeed any 3rd party. In short, you keep your customer’s data in your system so there are no data protection issues.

  

### My installation failed – what can I do?
Have a cup of tea and relax. Ahh, that’s better. Now, if for any reason your automatic installation fails, please remove the MailBeez configuration with this SQL statement:

```sql
DELETE FROM configuration WHERE configuration_key LIKE ‘MAILBEEZ_%’;
```

(in Zen Cart you might need to add your DBPREFIX to the tablename `configuration`.)

Now you should see the initial install-button and can start from new.


 

### Stylesheet definition breaks my template

When you insert a Stylesheet section in your templates these will break: 
Since the curly brakets  `{…}` are also used by the template system, you need to surround these with `literal`-tags like this:

```
{literal}
  <stylesheet>
     {  CSS... }
  </stylesheet>
{/literal}
```

That tells the template system to ignore the lines in between



### All popups are blank!

Your security token must only contain characters and numbers.

On Servers with **Suhosin** following settings can cause blank popups when previewing the templates:  

```
suhosin.executor.disable_eval
suhosin.executor.eval.blacklist
```

MailBeez requires to use eval and gzinflate.

Also check your **apache configuration**: A configuration entry like `Header set X-Frame-Options: 'sameorigin'` can cause the browser not to show iframe contents from different domains (e.g. if your admin page is using a different domain name then your store)
 

### I get a 404 – what can I do?

You have a SEO add-on installed which is attempting to rewrite the URLs of the MailBeez system.

**Solution:** 

You need to add:

```
mailhive.php
admin/mailbeez.php

```

as exclusions to avoid rewriting these URLs.


 

### I get a 403 – what can I do?

You have a Security solution installed (e.g. osc_sec) which does not allow certain URL parameters, for example: `../`.

**Solution:** 

You need to configure / adopt this solution to allow these parameters for `/mailbeez.php` page requests.

 

### I get a 500 in every pop-up – what can I do?

Almost all pop-ups call mailhive.php located in the store-root.

**Solution:** 

Please check your configuration located in `includes/configure.php`. The value for the constant `DIR_FS_CATALOG` must end with `/`, e.g. like `define(‘DIR_FS_CATALOG’, ‘/home/yourshop/public_html/’);`

### I can’t send test emails

Check if you have entered VALID email addresses for the “Copy To” and “Send Simulation to” fields.

### MailBeez sends only one email

Please check your “send copy to” and “send simulation to” email address. An invalid email address can stop the sending process.
 

### Some recipients receive html code instead of html emails

This will very likely also happen with your order confirmation emails as well, and the reason that it does happen is not related to MailBeez. 
We would recommend to check the linefeed settings of your email system (usually found in your general store admin area – not MailBeez). 
See if a change to “LF” helps.

 

### No Emails are sent
When your MailBeez is not sending any Emails at all, please check the email addresses you entered for “sent copy to” and “send simulation to”, you find both in MailBeez > Configuration.

Both email addresses must be valid – invalid email address can stop the sending of more emails

 

### Can’t send a campaign – the window shows only “MailBeez – Mode: …”
When campaigns just won’t start sending, the number of emails to generate might exhaust you servers memory.
Please try to reduce the number of recipients by choosing a shorter time-frame in the module’s configuration.


----- 

## Certificates

Issues related to certificates


### The certificate I got does not activate the module!
The domain you entered during the ordering process does not match with your server domain. Please to go Mailbeez > tab “about” and find the exact server domain in the red box and contact us to request a valid certificate


### I get a “invalid certificate” error when mailhive is called by a cronjob
Make sure the cronjob calls mailhive using http, e.g.

`wget http://your-server.com/mailhive.php?[token]=run > /dev/null`

or

`lynx -dump http://your-server.com/mailhive.php?[token]=run`

 

### I have a test-system, but the certificate is not valid
Please request a free test certificate, making sure to provide us with the exact URL of the test server. Please to go Mailbeez > tab “about” and find the exact server domain in the red box.

### I can’t enter a certificate for a premium module – the certificate is too long and the field does not allow that many characters
You have a modification in your admin system which limits characters for configuration settings.

**Solution:** Remove the “maxlength=”110″ modification from function_draw_input_field() defined in “/includes/functions/html_output.php”


----- 

## osCommerce

Issues related to osCommerce

### I use OsCommerce and all popups for advanced modules are blank!

It is very likely that you are using FWR Security, and if this is the case, please add catalog/mailhive.php as an exception and allow “/” in the URL.

Find the addon at <http://addons.oscommerce.com/info/5752>, and in the documentation find the section called “Excluding Certain Files from Cleansing”. Follow the instructions and add `mailhive.php` like this:

```
// If you need to exclude a file from cleansing then you can add it like below  
$security_pro->addExclusion(‘mailhive.php’);
```



Background: the Advanced modules use “/” in their URL, which is a valid character, but cleansed by FWR Security.


 

### I use OsCommerce with STS and all popups show my storefront
Please take a look at this thread for more information:
<http://forums.oscommerce.com/topic/359282-automatic-trigger-email-campaigns-with-mailbeez-modules/page__st__140__p__1531162#entry1531162>


----- 

## Zen Cart

Issues related to Zen Cart

### Zen Cart: PHP Fatal error: Class 'email' not found … when clicking on a link
When clicking on a link in an email sent by MailBeez (clicktracker active) following error appears:

`PHP Fatal error: Class 'email' not found in (…)/mailhive/common/classes/oscommerce/emailMB.php on line 14`

 **Solution:**

Remove the file

`/includes/extra_configures/mailbeez_tracking.php`

This file was included in one of the first 2.7 packages and is actually a bug so it **MUST** not be there.

Instead add the clicktracker code to /includes/application_top.php as described in MailBeez

 

### Zen Cart: After MailBeez release v2.7, MailBeez emails are inserted into the Zen Cart Email Template

Since MailBeez v2.7 the option “Override Zencart Email Template System” seems not to work anymore: The Email content generated by MailBeez is shown inside the Zencart Email Template.

There are several ways to solve this:


**1. Create your own template**

create a template file

`emails/email_template_mailbeez.html`

which you only fill with the variable:

`$EMAIL_HTML_CONTENT`

**2. Configure an SMTP Server**

Alternatively, you can configure MailBeez to send email through an SMTP server rather then using Zen Carts email function.

go to `mailbeez > configuration > email system`, switch to “SMTP” and configure a SMTP server – this will bypass the Zen Cart email function.

**3. Adapt the Zen Cart code:**

To make Zen Cart compatible with MailBeez v2.7, you can perform a minor code change as described here:

<http://www.zen-cart.com/showthread.php?158085-Mailbeez-After-Sales-Modules&p=1170912#post1170912>

**Background:**  
Zen Cart checks if the mailcontent starts with a valid html tag. With MailBeez v2.7 the htmlemailboilerplate template is introduced, which improves the visual presentation of the emails in different email clients. NOTE: This template does not start with a html tag.

The code change checks if the template does CONTAIN a valid html tag, which is a much more flexible approach.

In `MailBeez > configuration > email engine` you need to switch to SMTP and configure an SMTP server of your choice. Then MailBeez is having 100% control on the email content sent out.

### Zen Cart: I'm getting rogue HTML code in my sent emails. How can I fix this?

**Quick Solution:** configure an SMTP Email Server in `MailBeez > Configuration > Email Engine`. This will bypass the Zen Cart email function and give MailBeez full control for sending emails.

**2. Adapt the Zen Cart code:**

To make Zen Cart compatible with MailBeez, you can perform a minor code change as described here:

<http://www.zen-cart.com/showthread.php?158085-Mailbeez-After-Sales-Modules&p=1170912#post1170912>

**Background:**  
Zen Cart ignores part of the starting html tag in custom templates causing this error. This code change tells ZenCart to check if the template does CONTAIN a valid html tag.

### Zen Cart: All emails are sent in TXT, not HTML format. How can I change this?

**Quick Solution:** configure a SMTP Email Server in `MailBeez > Configuration > Email Engine`. This will bypass the zencart email function and give MailBeez full control for sending emails.

Mailbeez on Zen Cart relies on the Zen Cart mail engine which queries each email address to find out which format the recipient prefers (reverse look-up). If you think all emails are sent in TXT you probably have been testing MailBeez with an email address w/o an account in your Zen Cart installation.

If your Zen Cart is configured to send HTML emails, you need to set up a customer account with your CC-email / send-copy-to email and configure this account to receive emails in HTML format.

When using this email address for testing / CC you should now receive the HTML version.

Here’s a handy tutorial on how to configure Zen Cart to be able to send emails as HTML:

<http://tutorials.zen-cart.com/index.php?article=113>

If you want to force Zen Cart to always send emails in HTML format, you can override the format detection with following changes:  
 open:

`includes/functions_email.php`

find

```
if ($customers_email_format == '' && ADMIN_EXTRA_EMAIL_FORMAT == 'HTML' && in_array($module, array('newsletters', 'product_notification')) && isset($_SESSION['admin_id'])) {
       $customers_email_format = 'HTML';
}
```

insert afterwards

```
$customers_email_format = 'HTML';
```


that overrides the format to “always HTML”

 

### Zen Cart: The Subject Line is repeated in the body. How can I remove this?

When you choose not to override Zen Cart’s email template system, the body content of the MailBeez modules will be merged into Zen Cart’s default email template, located in:

`/email/email_template_default.htm`

and there you can remove the subject line.

 

 

### Can’t send a campaign – get an empty window
Something goes wrong, but Zen Cart doesn’t show the PHP errors.

Have a look in your “/cache” directory for files starting with “myDebug…”, these files contain the PHP error Messages.

A typical reason is you inserted a Stylesheet section in your templates, since the curly brakets  {…} are also used by the template system, you need to surround these with “literal”-tags like this:


```
{literal}
  <stylesheet>
     {  CSS... }
  </stylesheet>
{/literal}
```
