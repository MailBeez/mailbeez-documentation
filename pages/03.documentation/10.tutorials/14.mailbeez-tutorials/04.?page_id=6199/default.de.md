---
# http://learn.getgrav.org/content/headers
title: Numinix Store Credit: Review Rewards
slug: ID-6199
# menu: Numinix Store Credit: Review Rewards
date: 20-09-2012
published: false
publish_date: 20-09-2012
# unpublish_date: 20-09-2012
template: docs
# theme: false
visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: review
    category: [docs]
    tag: []
# added collection selector

author:
    name: kelly
metadata:
    author: kelly
#      description: Your page description goes here
#      keywords: HTML, CSS, XML, JavaScript
#      robots: noindex, nofollow
#      og:
#          title: The Rock
#          type: video.movie
#          url: http://www.imdb.com/title/tt0117500/
#          image: http://ia.media-imdb.com/images/rock.jpg
#  cache_enable: false
#  last_modified: true
---

(English)

The screenshots used in this tutorial were made using Zen Cart. If you use a different e-commerce platform, your admin interface and MailBeez interface may appear slightly different, however the concepts and configuration instructions are the same across all platforms.

Requirements:

- The Numinix Store Credit & Reward Points addon for Zen Cart
- Zen Cart e-commerce platform

The Numinix Store Credit Review Rewards module will automatically assign and email notification of rewards points to your customers after they write one or more approved product reviews.

Installation and configuration are fast and easy! Installation instructions are included in the download package. Configuration instructions are below.

 

## Getting Started

1. Log in to your store’s admin interface
2. Navigate to your MailBeez interface and click on the MailBeez Modules tab:
[![](http://localhost/wordpress_mailbeez_EOL/wp-content/themes/awake/lib/scripts/timthumb/thumb.php?src=http://www.mailbeez.com/images/doc/common_images/mailbeez_tab2.png&w=270&h=160&zc=1&q=100 "MailBeez Module Tab")](http://www.mailbeez.com/images/doc/common_images/mailbeez_tab2.png "MailBeez Module Tab")![](http://localhost/wordpress_mailbeez_EOL/wp-content/themes/awake/images/shortcodes/image_shadow.png)

4. Locate the Numinix Store Credit Review Rewards module and click on it.
5. Click on the Install button to install the configuration settings into your database:  
[![](http://localhost/wordpress_mailbeez_EOL/wp-content/themes/awake/lib/scripts/timthumb/thumb.php?src=http://www.mailbeez.com/images/doc/mailbeez/numinix_sc_review_reward/install.png&w=175&h=77&zc=1&q=100 "Install Configuration Settings into your Database")](http://www.mailbeez.com/images/doc/mailbeez/numinix_sc_review_reward/install.png "Install Configuration Settings into your Database")![](http://localhost/wordpress_mailbeez_EOL/wp-content/themes/awake/images/shortcodes/image_shadow.png)

The configuration panel is now visible:

[![](http://localhost/wordpress_mailbeez_EOL/wp-content/themes/awake/lib/scripts/timthumb/thumb.php?src=http://www.mailbeez.com/images/doc/mailbeez/numinix_sc_review_reward/numinix_review_reward_config.png&w=175&h=677&zc=1&q=100 "Numinix Store Credit Review Rewards Configuration Panel")](http://www.mailbeez.com/images/doc/mailbeez/numinix_sc_review_reward/numinix_review_reward_config.png "Numinix Store Credit Review Rewards Configuration Panel")![](http://localhost/wordpress_mailbeez_EOL/wp-content/themes/awake/images/shortcodes/image_shadow.png)

 

## Configure the Review Rewards Module

### Unlock the Module

1. Click on the Certificate “Edit” button
2. Enter your personal certificate key that came with the module delivery email from Avangate & click the “Update” button

Your module is now unlocked and ready to be configured.

### Configure General Settings

Click the “Edit” button to access the configurable settings:

[![](http://localhost/wordpress_mailbeez_EOL/wp-content/themes/awake/lib/scripts/timthumb/thumb.php?src=http://www.mailbeez.com/images/doc/mailbeez/numinix_sc_review_reward/general_settings.png&w=175&h=436&zc=1&q=100 "Numinix Store Credit Review Rewards General Settings")](http://www.mailbeez.com/images/doc/mailbeez/numinix_sc_review_reward/general_settings.png "Numinix Store Credit Review Rewards General Settings")![](http://localhost/wordpress_mailbeez_EOL/wp-content/themes/awake/images/shortcodes/image_shadow.png)

**Activate Module**  
 This setting turns the module on and off. It is set to “False” by default, meaning the module is off and will not send emails to customers. Change this setting to “True” to activate the module and enable it to send emails when the module is run.

**Assign Real Store Credits in Simulation Mode**  
 This setting lets you define whether or not you want to assign real store credits when you run simulations. By default, it is set to “False”, meaning the module will not assign real store credits in simulation mode.

We recommend changing this to “True” only in test environments and keeping it set to “False” in live store environments.

**Reward Amount**  
 With the Numinix Store Credit & Reward Points addon, customers do not receive a reward for every review they write; rather they receive one reward per order. So if an order contains 10 items and a customer writes 10 reviews, they receive the same reward as they would for writing 1 review.

With that in mind, this setting allows you to define what that reward amount should be.

**Days to Delay Sending & Days to Look Back**  
 These settings work together to create a window of time in which MailBeez will look for opportunities to send the Review Rewards email by targeting customers who meet the criteria you define with these settings.

**Number of Days to Delay Sending**  
 How many days after a review is written should MailBeez send the Review Reward email? By default, it is set to “1″, but you may wish to increase it slightly in order to leave your customers enough time to write a review for every item in their order.

**Number of Days to Look Back**  
 How far back in time should MailBeez look to find customers meeting the “Days to Delay Sending” criteria? By default, it is set to “3″, meaning that when the module is run, MailBeez will search the database for the previous 3 days looking for customers who meet the “Days to Delay Sending” criteria.

These two default settings tell MailBeez, “Search my database for the last 3 days and find all customers who have written a review at least 1 day ago and send them a Review Rewards email”.

**Sender Email**  
 This setting lets you control the email address that is displayed as the sender in your outgoing MailBeez emails. By default, it uses the email address setting that you configured in your store, but you can change it if you prefer.

**Sender Name**  
 This setting lets you control the sender name that is displayed as the sender in your outgoing MailBeez emails. By default, it uses the sender name setting that you configured in your store, but you can change it if you prefer.

**Layout**  
 This setting allows you to choose which layout style template set you want to assign & use for this module.

Since the Numinix Store Credit Review Rewards module does not include additional templates, the only option displayed here is “Default” until such a time as you create your own custom templates. For help creating your own custom templates, check out our [Customizing Premium Email Templates tutorial](http://www.mailbeez.com/documentation/tutorials/customizing-mailbeez-premium-email-templates/)

**Sort Order of Display**  
 This setting allows you to change the sort order of this module to move it higher or lower on the list of modules in the MailBeez Modules tab.

When you have completed your configurations, click the “Update button”. Configuration of the module is now complete!

 

## Test & Run the Module

Navigate back to the Numinix Store Credit Review Rewards module in the MailBeez module tab and click on it to display the function buttons on its configuration panel.

The 5 function buttons are the controls that allow you to preview your email template customizations, test the module, and then manually run it in both simulation & production mode when you’re ready:

[![](http://localhost/wordpress_mailbeez_EOL/wp-content/themes/awake/lib/scripts/timthumb/thumb.php?src=http://mailbeez.com/images/doc/common_images/function_buttons.png&w=175&h=184&zc=1&q=100 "Function Buttons")](http://mailbeez.com/images/doc/common_images/function_buttons.png "Function Buttons")![](http://localhost/wordpress_mailbeez_EOL/wp-content/themes/awake/images/shortcodes/image_shadow.png)

**Email Templates – “HTML” Button**  
 This button allows you to preview the various module templates in a nice popup window in HTML format. This way, you can easily see what the email template looks like and quickly determine which aspects of the template you’ll want to customize for your use.

As you modify your template files, you can come back and use this button to view your changes to ensure that they are appearing as you intend.

**When you’re ready to customize your email templates, have a look at our [Customizing Premium Email Templates tutorial](http://www.mailbeez.com/documentation/tutorials/customizing-mailbeez-premium-email-templates/)**

To view a different set of template files, go to the module’s configuration panel, click “Edit”, change your Layout Style selection, click “Update”, and return here to view them.

**Email Templates – “TXT” Button**  
 This button allows you to preview the module templates in a nice popup window in text format. Everyone has customers who prefer to receive email in text format. This tool allows you to see what they see, and preview changes you make to the template before they go out to your customers.

**Recipients – “Show” Button**  
 Clicking this button will result in a nice popup window in your admin which is populated with a list of everyone who is getting this email in the next run.

**Send Test Email – “Send” Button**  
 This button does just what it says – it lets you send a test email with test data. A really nice feature of MailBeez premium modules is that test emails include a display of the product list (if used by the module) using random products from your store. This allows you to see exactly what your customers will see – and if you enjoy experimenting with your List Engine settings, then this goes from being a nice feature to a necessary one!

**Run this module – “Run” Button**  
 This is the button you use to actually run the module. This button respects your run mode as it is set in your Simulation Configuration, so if you’re in Simulation Mode, clicking this button results in a simulation run. If you are in Production Mode, clicking this button results in a production run.

It even tells you in the text above the button which mode you’re in. This prevents you from accidentally sending emails out to customers when you’re testing.

**If you need further assistance understanding how to run simulations and send test emails, have a look at our [Testing MailBeez tutorial](http://www.mailbeez.com/documentation/tutorials/testing-mailbeez)**



## Run MailBeez Automatically

If you want MailBeez to run automatically, you have two options:

**1. [Set up a cronjob](http://www.mailbeez.com/documentation/installation/config/advanced-configuration/)
2. [Install the simple and affordable Run MailBeez Automatically module](http://www.mailbeez.com/documentation/configbeez/config_cron_simple/)
**
Without one of the above options in place, it will be up to you to manually send out your MailBeez emails by clicking the “Run” button in each module you want to run, as often as you want to run it. The Run MailBeez Automatically module is recommended because it is for most users the easiest option.

## Template Manager

Mailbeez has developed a handy module that easily allows you to both edit and view your text changes right from the MailBeez interface within your store’s admin. Fully functional with all official MailBeez Modules (free, premium, and custom built), the MailBeez Template Manager makes editing a template a breeze, so much so that you may wonder how you ever lived without it! **[ Learn more!](http://www.mailbeez.com/documentation/configbeez/config_tmplmngr/)**
