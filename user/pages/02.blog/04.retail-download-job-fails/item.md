---
title: 'Retail download job fails with Timeout exception'
date: '17:34 06/27/2017'
taxonomy:
    category:
        - blog
    tag: [Async client , ax2012 , Data synchronization , SQL , troubleshooting]
hero_classes: 'text-dark title-h1h2 overlay-light hero-large parallax'
hero_image: unsplash-luca-bravo.jpg
blog_url: /blog
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
---

### Description

Async Client fails to merge records to [ax].[RETAILCHANNELTABLE] table with error 

> Timeout expired. The timeout period elapsed prior to completion of the operation or the server is not responding  

===

### Steps that did not help

1. Increase timeouts for Async Client

### Steps worked for me

1. Cancel running **1070** job
2. Manually delete all records from **[AX].[RETAILCHANNELTABLE]**
3. Run **1070** (Stores) job in **‘Full sync‘ mode** – it will insert all records to **[AX].[RETAILCHANNELTABLE]** table.

Similar error often happens during **[ax].[INVENTTABLE]** table merge (1040 job).

### Error details

> StoreConnect.Request.SQLHandler.ProcessTargetRequestHeaderException:
ProcessTargetRequestHeader failed to execute all write requests.
StoreConnect.Request.SQLHandler.ProcessWriteRequestException: Write request on table:
[ax].[RETAILCHANNELTABLE] failed to execute. StoreConnect.Request.SQLHandler.RunException: Run()
failed while performing write operation on table. StoreConnect.Request.SQLHandler.PerformWriteOperationException:
Query: MERGE [ax].[RETAILCHANNELTABLE] AS dst USING (SELECT [CHANNELTIMEZONE],[CHANNELTIMEZONEINFOID],[CHANNELTYPE],
[CURRENCY],[PRICEINCLUDESSALESTAX],[RECID],[RELATIONTYPE],[TRANSACTIONSERVICEPROFILE]
FROM [#ax_RETAILCHANNELTABLE_8a33dd10-efe0-4116-8bc0-60ff05669aa0]) AS src ON (dst.[RECID]=src.[RECID])
WHEN MATCHED THEN UPDATE SET …. WHEN NOT MATCHED THEN INSERT … DROP
TABLE [#ax_RETAILCHANNELTABLE_8a33dd10-efe0-4116-8bc0-60ff05669aa0]; System.Data.SqlClient.SqlException:
Timeout expired. The timeout period elapsed prior to completion of the operation or the server is not responding.
The statement has been terminated. —> System.ComponentModel.Win32Exception:
The wait operation timed out … at System.Data.SqlClient.SqlCommand.ExecuteNonQuery() …
at Microsoft.Dynamics.Retail.StoreConnect.Request.SQLHandler.SCSqlTargetRequestHandler.
ProcessWriteRequest(SqlConnection connection, SqlTransaction transaction) at
Microsoft.Dynamics.Retail.StoreConnect.Request.SQLHandler.
SCSqlTargetRequestHandler.ProcessTargetRequestHeader(ISCTargetRequestHeader targetRequestHeader) …
at Microsoft.Dynamics.Retail.SynchClient.Core.DownloadAgent.ApplySessionFileToClientDatabase(SessionManager sessionMgr, String fileName