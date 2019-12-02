---
title: 'Modern POS (MPOS) iframe issue'
date: 13:34 06/07/2017 
hero_classes: text-light title-h1h2 overlay-dark hero-large parallax
hero_image: unsplash-luca-bravo.jpg
show_sidebar: true

taxonomy:
    category: blog
    tag: [Dynamics365, Modern POS, Retail development , troubleshooting]
---

### Description

Often customer requirement is to display some external web page inside POS. If you try to embed iframe control inside Modern POS (MPOS), the following error will appear:

===

> Unable to navigate to: ‘https://website.net’. An iframe attempted to navigate to a URI that is not included in the ApplicationContentUriRules for this app. Use a x-ms-webview element to view the URI instead, or add the URI to the ApplicationContentUriRules section of the package manifest so that the iframe can navigate to it. (In Visual Studio, add this URI to the Content URIs tab of the Manifest Designer.)

### Solution

As error says, **iframe** tag should be replaced with **x-ms-webview** tag in HTML.


### What if we use both CPOS and MPOS?

Add both **iframe** and **x-ms-webview** elements to HTML and enable/disable them depending on application type using **Knockout IF** condition.
