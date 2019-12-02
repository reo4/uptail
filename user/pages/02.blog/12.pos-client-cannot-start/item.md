---
title: 'POS client: Cannot start debugging of the application'
date: '17:34 06/27/2017'
taxonomy:
    category:
        - blog
    tag: [AX2012 Retail , CPOS , D365 Retail , MPOS , POS development , Visual studio]
hero_classes: 'text-dark title-h1h2 overlay-light hero-large parallax'
hero_image: unsplash-luca-bravo.jpg
blog_url: /blog
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
---

### Description

When trying to start MPOS client project in Debug mode, error **“Unable to start debugging…”** is thrown by Visual Studio. My Visual Studio is 2015, full version number is 14.0.25420.01 Update 3.


===

### Steps worked for me

1. Go to **Debug** > Options
2. Select **Projects and Solutions** tab
3. Uncheck flag **‘Show output window when build starts’**
4. Restart Visual Studio

### Error details

> Unable to start debugging. The startup project cannot be launched. Ensure that the correct project is set as the startup project. The startup project can be changed by selecting the ‘Set as Startup Project’ command from the right click menu in Solution Explorer. Additionally make sure its debug settings are correctly configured in project properties. 

&nbsp;

![Alt](001_error_message_on_debug-600x0.png)