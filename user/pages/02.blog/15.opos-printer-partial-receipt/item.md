---
title: 'OPOS printer: partial receipt cut'
date: '17:34 06/27/2017'
taxonomy:
    category:
        - blog
    tag: [ AX2012 Retail , D365 Retail , Hardware , OPOS , Retail development]
hero_classes: 'text-dark title-h1h2 overlay-light hero-large parallax'
hero_image: unsplash-luca-bravo.jpg
blog_url: /blog
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
---

When OPOS printers print receipts, they can cut them automatically. If receipt is long, it can fall down on the ground.
Some printers support ‘partial cut’ functionality, that allows printer to cut only a part of the receipt. In OPOS interface **CutPaper** command is responsible for the cut.

===

Let’s have a look at method definition:

    int CutPaper(int Percentage)

Method has input parameter Percentage that defines the type of the cut:

1. 1-99  – partial cut
2. 100 – full cut

If to have a look at AX2012 or Dynamics 365 for Retail: command CutPaper(100) is used – that means printer always makes a full cut.

In AX2012 you can change the code to do a partial cut, in Dynamics 365 for Retail code is closed and you should request a fix from Microsoft to support partial cut.