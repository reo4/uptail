---
title: 'Real-time service: cached X++ code'
date: '17:34 06/27/2017'
taxonomy:
    category:
        - blog
    tag: [AX2012 Retail , Real-time service , Retail development , troubleshooting ]
hero_classes: 'text-dark title-h1h2 overlay-light hero-large parallax'
hero_image: unsplash-luca-bravo.jpg
blog_url: /blog
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
---

### Description

Code changes done in X++ standard methods of RetailTransactionService* classes or added new methods in RetailTransactionServiceEx class are not visible by Real-Time Service – it stills executes an old code.

===

### Possible solutions

1. Generate incremental CIL (sometimes full CIL) – this is ‘must do’ step, because all Real-time service calls are executed in CIL;
2. Restart Real-time service web site and application pool in IIS;
3. Restart Windows Process Activation service on the machine where Real-time service web site is installed.

