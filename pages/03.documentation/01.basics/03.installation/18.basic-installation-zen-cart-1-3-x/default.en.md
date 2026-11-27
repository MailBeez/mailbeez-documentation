---
# http://learn.getgrav.org/content/headers
title: Zen Cart 1.3.x
slug: basic-installation-zen-cart-1-3-x
# menu: Zen Cart 1.3.x
date: 21-05-2010
published: true
publish_date: 21-05-2010
# unpublish_date: 21-05-2010
template: docs
# theme: false
visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: done
    category: [docs]
    tag: [ftp]
# added collection selector

author:
    name: admin
metadata:
    author: admin
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

[doc-callout type="note" title="Installation for earlier shop releases"]
Check the version in your shop admin. For a different release, look under [Installation](/basics/installation) or in the [legacy reference](/legacy).
[/doc-callout]

For Zen Cart 1.3.8 / 1.3.9x, use the v4.xx integration package. It creates MailBeez’s own tables. The historical package for this shop release specified PHP 5.3+.

Check the name of the actual admin directory before uploading the package. The destination in a customized Zen Cart shop can differ from the folder name in the archive.

[plugin:content-inject](/content_blocks/download_installer)

1. Copy `catalog/admin/mailbeez.php` from the package into your shop’s admin directory.
2. Copy the `mailhive` folder and `mailhive.php` from `catalog` to the shop root, alongside `index.php`.
3. Merge the contents of `extras_zencart/zencart_1.3.x/admin` into the shop’s admin directory.
4. Sign in to the Zen Cart admin, open **Tools → MailBeez** and choose **Install**.

## Rewrite rules and email layout

In the shop’s `.htaccess`, add this condition immediately before the rule that sends all remaining requests to Zen Cart’s `index.php`.

```apache
RewriteCond %{REQUEST_URI} !^/mailhive [NC]
```

If Zen Cart wraps the message in a second email template, the historical installation offered two options. Configure SMTP in the MailBeez email system to bypass the Zen Cart mail function, or keep that function and apply the version-specific layout adjustment. For the latter, locate `$email_html = zen_build_html_email_from_template($module, $block);` in `includes/functions/functions_email.php`. [Zen Cart adjustment for this release](http://www.zen-cart.com/showthread.php?158085-Mailbeez-After-Sales-Modules&p=1170912#post1170912) · [Zen Cart FAQ](/frequently-asked-questions#zen-cart).

[plugin:content-inject](/content_blocks/run_installer)
