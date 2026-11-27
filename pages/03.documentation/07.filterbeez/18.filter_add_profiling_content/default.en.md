---
# http://learn.getgrav.org/content/headers
title: "Profile-based content"
module_subtitle: "Select prepared email content using customer or order tags"
slug: filterbeez_add_content_suite
# menu: Content Integration Suite
date: 11-08-2011
published: true
publish_date: 11-08-2011
# unpublish_date: 11-08-2011
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
    tag: [pro, "Content Integration Suite"]
module:
    code: 'filterbeez_add_content_suite'
    category: [filterbeez]
    compatiblity: [comp_osc,comp_cre,comp_digi,comp_zencart,comp_xtc,comp_xtcm2,comp_gambio]
    pro: 'pro'
    cert: 'true'      
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

[doc-callout type="note" title="Earlier filter"]
For the filters you can configure in V5, open [Add-ons](/extensions/addons). [Browse the legacy reference](/legacy).
[/doc-callout]

The development version used order or customer tags to insert prepared content into emails. Check that the shop has both [Profiling Engine](/configbeez/common_services/config_profiling_engine) and the multilingual template manager with reusable content blocks ([Multilanguage Extension with Template Manager](/configbeez/config_tmplmngr_lng)).

Use an example with a known tag to trace the old design. Check which text should appear for that tag and what a reader would see without it.

1. Define a tagging rule and create the content block.
2. Specify which tags must be present or absent for the block to appear. If several blocks match, their configured sort order controls their order in the email.
3. In the visual editor, use the plus button to insert the profiling content element in the main or module template. Preview one record that matches the tags and another that does not.
