---
# http://learn.getgrav.org/content/headers
title: Erweiterte Kundendaten
slug: erweiterte-kundendaten
# menu: Erweiterte Kundendaten
date: 26-09-2011
published: true
publish_date: 26-09-2011
# unpublish_date: 26-09-2011
template: docs
# theme: false
visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration-status: review
    category: [docs]
    tag: []
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

Dieses Modul stellt erweiterte Kundendaten zur Verfügung.

Nach der Installation und Aktivierung stehen mit diesem Hilfsmodul erweiterte Kundendetails in jeder Vorlage zur Verfügung, welche beliebig direkt ausgegeben oder mit etwas Smarty Logik eingesetzt werden können:

 
    {$data.customer.firstname} // firstname
    {$data.customer.lastname} // lastname
    {$data.customer.dob} // date of birth
    {$data.customer.age} // age
    {$data.customer.telephone} // phone
    {$data.customer.fax} // fax
    {$data.customer.newsletter} // newsletter 0/1
    {$data.customer.company} // company
    {$data.customer.postcode} // postcode
    {$data.customer.city} // city
    {$data.customer.state} // state
    {$data.customer.country_id} // country id
    {$data.customer.zone_id} // zone id
    {$data.customer.raw} // array with all data


**Beispiel:** Alters-Abhängige Ansprache

mehr Beispiele für if else Ausdrücke finden Sie auf [smarty documentation](http://www.smarty.net/docsv2/en/language.function.if.tpl).

smarty syntax

 
    {if $data.customer.age gt 30}
        über 30: Sehr geehrter Kunde, Sie sind {$data.customer.age} Jahre alt - dob: {$data.customer.dob}
    {else}
        unter 31: Hallo, du bist {$data.customer.age} Jahre alt - dob {$data.customer.dob}
    {/if}


or

visual editor tags protected from editing:

 
    [[if $data.customer.age gt 30]]
        über 30: Sehr geehrter Kunde, Sie sind [[$data.customer.age]] Jahre alt - dob: [[$data.customer.dob]]
    [[else]]
        unter 31: Hallo, du bist [[$data.customer.age]] Jahre alt - dob [[$data.customer.dob]]
    [[/if]]
