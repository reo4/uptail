---
title: 'Retail statement posting: Field ZIP/postal code, primary contact, country, city, street, etc. must be filled in'
date: '17:34 06/27/2017'
taxonomy:
    category:
        - blog
    tag: [D365 Retail , Statement posting , troubleshooting]
hero_classes: 'text-dark title-h1h2 overlay-light hero-large parallax'
hero_image: unsplash-luca-bravo.jpg
blog_url: /blog
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
---

### Description

When retail statement is posted, created sales order cannot be invoiced. The following error appears: 

> Field ZIP/postal code, primary contact, country, city, street, etc. must be filled in. Posting of order canceled.

===

### Reason

Customer of the sales order has ‘eInvoice‘ flag enabled.
When eInvoice is active, primary contact, country, city, street and ZIP/postal code of the sales order delivery address become mandatory.

![Alt](customer-eInvoice.jpg)