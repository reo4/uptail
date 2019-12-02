---
title: 'POS: Change color of DevExpress button'
date: '17:34 06/27/2017'
taxonomy:
    category:
        - blog
    tag: [AX2012 Retail , DevExpress , POS development , Retail development]
hero_classes: 'text-dark title-h1h2 overlay-light hero-large parallax'
hero_image: unsplash-luca-bravo.jpg
blog_url: /blog
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
---

This blog post will show you the way to change color of DevExpress button of class **SimpleButton.**

According to DevExpress support, to apply color to SimpleButton, button should have “Flat”, “UltraFlat”, or “Style3D” style.

===


    var simpleButton = new DevExpress.XtraEditors.SimpleButton();
    var buttonColor = System.Drawing.Color.Yellow;
    simpleButton.ButtonStyle = DevExpress.XtraEditors.Controls.BorderStyles.Flat; 
    simpleButton.Properties.Appearance.BackColor = color;

![Alt](pos_button_with_changed_color-600x0.png)

