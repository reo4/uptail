---
title: 'POS: default customer type for customer creation (Person/Organization)'
date: 13:34 06/21/2017 
hero_classes: text-light title-h1h2 overlay-dark-gradient hero-large parallax
hero_image: unsplash-luca-bravo.jpg
taxonomy:
    category: blog
    tag: [AX2012 Retail , Customers , D365 Retail , POS , Retail functional]
---

When you create a new customer in POS, you should select customer type: Organization or Person.
Usually Retailers ask to select ‘Person’ by default, when POS shows ‘Organization’ type.

===

### What is a logic behind this? 

POS uses **default store customer** to populate default type for a new customer. If ‘Person’ should be selected by default, default store customer (used for walk-in sales) should have ‘Person’ type too.