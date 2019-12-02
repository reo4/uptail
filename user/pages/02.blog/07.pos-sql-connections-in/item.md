---
title: 'POS: SQL connections in case of multi-threading'
date: '17:34 06/27/2017'
taxonomy:
    category:
        - blog
    tag: [AX2012 Retail , POS development , Retail POS , SQL]
hero_classes: 'text-dark title-h1h2 overlay-light hero-large parallax'
hero_image: unsplash-luca-bravo.jpg
blog_url: /blog
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
---

Usually, when we execute any custom SQL statements in POS, we use **SQLConnection** object from **ApplicationSettings.Database.LocalConnection.**

===

    var itemData = new ItemData(ApplicationSettings.Database.LocalConnection,                                 
                            ApplicationSettings.Database.DATAAREAID, 
                            ApplicationSettings.Terminal.StorePrimaryId); 
    using (DataTable dt = itemData GetLinkedItems(“0012”))
    {
        foreach (DataRow component in dt.Rows)
        {
            //do something
        }
    }

This code works without issues when it runs in main POS thread, but if it runs in the background (different thread), sometimes code executing can throw error

> System.InvalidOperationException: ExecuteReader requires an open and available Connection. The connection’s current state is closed.

The simplest workaround is to create new **SQLConnection** object for all background threads (in below sample we create new **localConnection**).

    var LocalConnectionString = ApplicationSettings.Database.LocalConnectionString;
    var localConnection = new SqlConnection(LocalConnectionString);  
    var itemData = new ItemData(localConnection, 
                                ApplicationSettings.Database.DATAAREAID, 
                                ApplicationSettings.Terminal.StorePrimaryId);

In view of the fact that creating a connection is time-consuming operation, code can be optimized to create SQLConnection object once per thread and reuse it across all code executed by the thread.