---
title: 'Distribution jobs issue: Failed to convert parameter value from a String to a DateTime'
date: '17:34 06/27/2017'
taxonomy:
    category:
        - blog
    tag: [AX2012 Retail , CDX , Data synchronization , troubleshooting]
hero_classes: 'text-dark title-h1h2 overlay-light hero-large parallax'
hero_image: unsplash-luca-bravo.jpg
blog_url: /blog
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
---

### Description

Distribution job was not able to copy data from a channel (store) database to AX2012 because of the error: 

> Failed to convert parameter value from a String to a DateTime.

===

### Solution

Error tells us that something is wrong with data in a table we are trying to transfer. When checking the data, we found out some DateTime SQL fields that had NULL values – and Async client was not able to transfer these NULL fields.

What helped:

1. Update existing datetime NULL values with default value – this was enough to fix the issue with the job
2. Alter SQL column definition to set a default value for NULL cells in future like this

### Error details

> Failed to convert parameter value from a String to a DateTime. —> System.FormatException: String was not recognized as a valid DateTime.