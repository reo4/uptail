---
title: 'POS: Execute stored procedure'
date: '17:34 06/27/2017'
taxonomy:
    category:
        - blog
    tag: [AX2012 Retail , POS development , SQL , Stored procedure]
hero_classes: 'text-dark title-h1h2 overlay-light hero-large parallax'
hero_image: unsplash-luca-bravo.jpg
blog_url: /blog
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
---

This blog post will show you some ways to execute stored procedures from POS using standard API: **SqlStoredProcedure** and **DBUtil** from **DataAccess** DLL.

Let’s imagine we need to execute stored procedure [dbo].[TESTPROCEDURENAME] with 2 input parameters: param1 and param2.

===

### A. Execute Stored procedure that returns data rows

In this case stored procedure returns the set of records.

    sing LSRetailPosis.DataAccess;
    using LSRetailPosis.Settings;

    SqlStoredProcedure sqlStoredProcedure = new SqlStoredProcedure("[dbo].[TESTPROCEDURENAME]");
    sqlStoredProcedure.Add("@param1", param1Value);
    sqlStoredProcedure.Add("@param2", param2Value);

    var dbUtil = new DBUtil(ApplicationSettings.Database.LocalConnection);

    using (DataTable dataTable = this.DBUtil.ExecuteStoredProcedureWithData(sqlStoredProcedure))
    {
        foreach (DataRow dataRow in dataTable.Rows)
        {
            //process data returned by procedure
        }
    }

### B. Execute Stored procedure that returns scalar value

In this case stored procedure returns single (scalar) value: number, string, date, etc.

    using LSRetailPosis.DataAccess;
    using LSRetailPosis.Settings;
    SqlStoredProcedure sqlStoredProcedure = new SqlStoredProcedure("[dbo].[TESTPROCEDURENAME]");
    sqlStoredProcedure.Add("@param1", param1Value);
    sqlStoredProcedure.Add("@param2", param2Value);

    var dbUtil = new DBUtil(ApplicationSettings.Database.LocalConnection);
    var result = this.DBUtil.ExecuteStoredProcedureWithDataScalar(sqlStoredProcedure));

    //now you need to convert result to appropriate type (bool, string, int, etc.)
