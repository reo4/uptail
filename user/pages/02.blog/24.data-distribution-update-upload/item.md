---
title: 'Data distribution: update upload tables after adding new fields'
date: 14:55 08/11/2017
hero_classes: text-light title-h1h2 overlay-dark-gradient hero-large parallax
hero_image: unsplash-luca-bravo.jpg
taxonomy:
    category: blog
    tag: [AX2012 Retail , POS development , Upload jobs]
---

### Description

When new fields are added to some existing upload retail tables (from P-jobs), if you run upload job, you can notice that new fields remained empty. How to solve this?

===

### Solution

Every upload table has related temporary table, for example: RetailTransactionTable  => RetailTransactionTableT, RetailTransactionSalesTrans  => RetailTransactionSalesTransT (or RetailTransactionSalesTransX). Data upload in AX happens like: data package => temporary table => final table.

This makes needed to refresh temporary table when you add new fields to a final upload table – button **‘Create staging table‘** on **‘Scheduler subjobs’** form will do this for you.

![Alt](Upload-job-AX2012-retail-generate-staging-table.jpg)