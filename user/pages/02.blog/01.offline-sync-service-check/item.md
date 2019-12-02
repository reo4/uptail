---
title: 'Offline sync service: check if data sync is in process'
date: '17:34 06/27/2017'
taxonomy:
    category:
        - blog
    tag: [ax2012 , offline sync service , Retail POS , SQL , troubleshooting]
hero_classes: 'text-dark title-h1h2 overlay-light hero-large parallax'
hero_image: unsplash-luca-bravo.jpg
blog_url: /blog
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
---

Sometimes when Offline Sync Service is syncing a large table (with a lot of data), it’s interesting to check the status of sync – to validate how many records have been already inserted. For this we can execute Uncommitted read in SQL Management Studio

===


    set transaction isolation level read uncommitted
    go

    begin transaction;
    go

    SELECT COUNT(*) FROM [AxRetailPOS_OfflineDB].[ax].[MY_TABLE_NAME]
    SELECT COUNT(*) FROM [AxRetailPOS_OfflineDB].[ax].[INVENTTABLE]
    SELECT COUNT(*) FROM [AxRetailPOS_OfflineDB].[ax].[CUSTTABLE]
    SELECT COUNT(*) FROM [AxRetailPOS_OfflineDB].[ax].[ECORESPRODUCT]
    SELECT COUNT(*) FROM [AxRetailPOS_OfflineDB].[ax].[PRICEDISCTABLE]

    commit transaction;


