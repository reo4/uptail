---
title: 'Async server: cannot have multiple records in schedule parameter table'
date: '17:34 06/27/2017'
taxonomy:
    category:
        - blog
    tag: [Async server , ax2012 , troubleshooting]
hero_classes: 'text-dark title-h1h2 overlay-light hero-large parallax'
hero_image: unsplash-luca-bravo.jpg
blog_url: /blog
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
---

### Description

Async server fails to sync metadata with error

> Cannot have multiple records in schedule parameter table.

===

### Solution

1. Manually delete redundant record from Async Server Message database table **[dbo].[SCHEDULEPARAMETER].**
2. Run Sync metadata from AX one more time

Redundant record can appear, for example, if you backup database in one system and after restore it in another system.

### Error details

> System.Data.SqlClient.SqlException: Cannot have multiple records in schedule parameter table. at System.Data.SqlClient.SqlConnection.OnError(SqlException exception, Boolean breakConnection, Action1 wrapCloseInAction)… at System.Data.SqlClient.SqlCommand.RunExecuteReader(CommandBehavior cmdBehavior, RunBehavior runBehavior, Boolean returnStream, String method, TaskCompletionSource`1 completion, Int32 timeout, Task& task, Boolean asyncWrite) … at Microsoft.Dynamics.Retail.SynchLibrary.Metadata.MetadataSyncSession.Update() — End of inner exception stack trace — at System.RuntimeMethodHandle.InvokeMethod(Object target, Object[] arguments, Signature sig, Boolean constructor) at Microsoft.Dynamics.AX.ManagedInterop.ClrBridgeImpl.InvokeClrInstanceMethod(ClrBridgeImpl* , ObjectWrapper* objectWrapper, Char* pszMethodName, Int32 argsLength, ObjectWrapper** arguments, Boolean* argsAreByRef, Boolean* isException)