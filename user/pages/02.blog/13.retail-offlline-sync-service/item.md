---
title: 'Retail offline sync service: string or binary data would be truncated error'
date: '17:34 06/27/2017'
taxonomy:
    category:
        - blog
    tag: [AX2012 Retail , Data synchronization , Database Utility , offline sync service , SQL , troubleshooting]
hero_classes: 'text-dark title-h1h2 overlay-light hero-large parallax'
hero_image: unsplash-luca-bravo.jpg
blog_url: /blog
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
---

### Description

Offline Sync service fails to synchronize data with error 

> Bulk command BulkInsertCommand failed with the following exception. Rows will be retried during single apply. System.Data.SqlClient.SqlException (0x80131904): String or binary data would be truncated.

===

### Reason

1. Schemas of store and offline databases were different. This can happen, when store database was upgraded but offline database – not (or vise versa).

### Steps worked for me

1. If AX version is earlier than R3 – run Database Utility for offline database to upgrade it.
2. Otherwise modify Offline database schema manually (by running SQL scripts), make sure all offline transactions came to store database. After – recreate offline database (to have schema fully equal to store database)
