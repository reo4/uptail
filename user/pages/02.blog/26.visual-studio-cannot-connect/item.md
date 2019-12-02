---
title: 'Visual studio cannot connect to source control on DevBox'
date: 13:34 07/19/2017 
hero_classes: text-light title-h1h2 overlay-dark hero-large parallax
hero_image: unsplash-luca-bravo.jpg
taxonomy:
    category: blog
    tag: [D365 Retail , D365 Retail , DevBox , Retail development , Source control , VS tips , VSTS]
---

### Description

When DevBox is just started, Visual studio cannot connect to source control (VSTS) for quite a long time – sometimes 0.5 – 1 hour. How to fix this?

===

### Workaround

Open source control URL in browser (I used Internet Explorer) and logon with your account. After that – click ‘Refresh’ button in Source control explorer – and Visual Studio will be able to establish connection to the source control.