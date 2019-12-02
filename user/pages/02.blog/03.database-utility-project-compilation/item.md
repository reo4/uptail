---
title: 'Database Utility: project compilation exception'
date: '17:34 06/27/2017'
taxonomy:
    category:
        - blog
    tag: [ax2012 , Create Database , Database Utility , Retail development , Retail upgrades]
hero_classes: 'text-dark title-h1h2 overlay-light hero-large parallax'
hero_image: unsplash-luca-bravo.jpg
blog_url: /blog
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
---

After CreateDatabase project upgrade (from Retail SDK), project fails to compile with error:

> ‘LSRetailPosis.Resources’ does not contain a definition for ‘DatabaseAccessUserGroupDescription’ (CreateDatabase\EmbeddedInstall.cs)

===

### Steps worked for me

1. Find Resources.Designer.cs class in CreateDatabase project
2. Change its namespace to be equal to EmbeddedInstall class namespace.

As you can see on below picture, Resources class had CreateDatabase namespace, when correct namespace was Microsoft.Dynamics.Retail.Pos.CreateDatabaseService .

![Minion](create-db-compile-error-600x0.jpg)

