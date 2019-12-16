---
title: 'POS cannot connect to Dynamics 365 (Real-time service)'
date: '17:34 06/27/2017'
taxonomy:
    category:
        - blog
    tag: [D365 Retail , POS , Real-time service , troubleshooting]
hero_classes: 'text-dark title-h1h2 overlay-light hero-large parallax'
hero_image: unsplash-luca-bravo.jpg
blog_url: /blog
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
routes: 
    default: '/pos-cannot-connect-to-dynamics-365-real-time-service'
---

### Description

Accidentally my POS became unable to connect to D365 – real-time service functionality started to throw communication exception (notifications, create/upadte customer order, product availabilities).
I restarted DevBox machine in LCS, but this did not help.

===

### Solution

1. Try to browse failing URL in browser https://**aosdevaossoap**.cloudax.dynamics.com/Services/RetailCDXRealTimeService – my browser was not able to display any information, it was reloading page again and again
2. Clear cache in browser (Internet Explorer in my case) – and POS was able to communicate with D365 again.

### Error details
> An exception of type: ‘Microsoft.Dynamics.Commerce.Runtime.CommunicationException’
occurred while executing Microsoft.Dynamics.Commerce.Runtime.RealtimeServices.Messages.SearchOrdersRealtimeRequest request
by Microsoft.Dynamics.Commerce.Runtime.TransactionService.SalesOrderTransactionService.
Error resource id: ‘Microsoft_Dynamics_Commerce_Runtime_HeadquarterCommunicationFailure’,
Exception: Microsoft.Dynamics.Commerce.Runtime.CommunicationException: Exception while calling invoke method GetOrderListSearch:
An error occurred while receiving the HTTP response to https://aosdevaossoap.cloudax.dynamics.com/Services/RetailCDXRealTimeService.
This could be due to the service endpoint binding not using the HTTP protocol. This could also be due to an HTTP request context being aborted by the server
(possibly due to the service shutting down). See server logs for more details. —> System.ServiceModel.CommunicationException: An error occurred while receiving the HTTP response
to https://aosdevaossoap.cloudax.dynamics.com/Services/RetailCDXRealTimeService. This could be due to the service endpoint binding not using the HTTP protocol.
This could also be due to an HTTP request context being aborted by the server (possibly due to the service shutting down). See server logs for more details.
—> System.Net.WebException: The underlying connection was closed: An unexpected error occurred on a receive. —>
System.IO.IOException: Unable to read data from the transport connection: An existing connection was forcibly closed by the remote host. —>
System.Net.Sockets.SocketException:
An existing connection was forcibly closed by the remote host
at System.Net.Sockets.NetworkStream.Read(Byte[] buffer, Int32 offset, Int32 size)
— End of inner exception stack trace —
at System.Net.Sockets.NetworkStream.Read(Byte[] buffer, Int32 offset, Int32 size)
at System.Net.FixedSizeReader.ReadPacket(Byte[] buffer, Int32 offset, Int32 count)
at System.Net.Security._SslStream.StartFrameHeader(Byte[] buffer, Int32 offset, Int32 count, AsyncProtocolRequest asyncRequest)
at System.Net.Security._SslStream.StartReading(Byte[] buffer, Int32 offset, Int32 count, AsyncProtocolRequest asyncRequest)
at System.Net.Security._SslStream.ProcessRead(Byte[] buffer, Int32 offset, Int32 count, AsyncProtocolRequest asyncRequest)
at System.Net.TlsStream.Read(Byte[] buffer, Int32 offset, Int32 size)
at System.Net.PooledStream.Read(Byte[] buffer, Int32 offset, Int32 size)
at System.Net.Connection.SyncRead(HttpWebRequest request, Boolean userRetrievedStream, Boolean probeRead)
— End of inner exception stack trace —
at System.Net.HttpWebRequest.GetResponse()
at System.ServiceModel.Channels.HttpChannelFactor.HttpRequestChannel.HttpChannelRequest.WaitForReply(TimeSpan timeout)
— End of inner exception stack trace —

> Server stack trace:
at System.ServiceModel.Channels.HttpChannelUtilities.ProcessGetResponseWebException(WebException webException, HttpWebRequest request, HttpAbortReason abortReason)
at System.ServiceModel.Channels.HttpChannelFactory1.HttpRequestChannel.HttpChannelRequest.WaitForReply(TimeSpan timeout)
at System.ServiceModel.Channels.RequestChannel.Request(Message message, TimeSpan timeout)
at System.ServiceModel.Channels.SecurityChannelFactory1.SecurityRequestChannel.Request(Message message, TimeSpan timeout)
at System.ServiceModel.Dispatcher.RequestChannelBinder.Request(Message message, TimeSpan timeout)
at System.ServiceModel.Channels.ServiceChannel.Call(String action, Boolean oneway, ProxyOperationRuntime operation, Object[] ins, Object[] outs, TimeSpan timeout)
at System.ServiceModel.Channels.ServiceChannelProxy.InvokeService(IMethodCallMessage methodCall, ProxyOperationRuntime operation)
at System.ServiceModel.Channels.ServiceChannelProxy.Invoke(IMessage message)

> Exception rethrown at [0]:
at Microsoft.Dynamics.Retail.Cdx.RealtimeServiceClientLibrary.RealtimeServiceClient.GetResponseFromMethod(TransactionServiceInvoker transactionServiceInvoker, String methodName, String apiName, Int32 parameterCount)
at Microsoft.Dynamics.Retail.Cdx.RealtimeServiceClientLibrary.RealtimeServiceClient.InvokeMethod(String methodName, Object[] parameters)
at Microsoft.Dynamics.Commerce.Runtime.TransactionService.TransactionServiceClient.GetResponseFromMethod(TransactionServiceInvoker transactionServiceInvoker, String methodName, Int32 parameterCount)
— End of inner exception stack trace —
at Microsoft.Dynamics.Commerce.Runtime.TransactionService.TransactionServiceClient.GetResponseFromMethod(TransactionServiceInvoker transactionServiceInvoker, String methodName, Int32 parameterCount)
at Microsoft.Dynamics.Commerce.Runtime.TransactionService.TransactionServiceClient.InvokeMethod(String methodName, Object[] parameters)
at Microsoft.Dynamics.Commerce.Runtime.TransactionService.TransactionServiceClient.SearchOrders(OrderSearchCriteria criteria, QueryResultSettings settings)
at Microsoft.Dynamics.Commerce.Runtime.TransactionService.SalesOrderTransactionService.SearchOrders(SearchOrdersRealtimeRequest request)
at Microsoft.Dynamics.Commerce.Runtime.TransactionService.SalesOrderTransactionService.Execute(Request request)
at Microsoft.Dynamics.Commerce.Runtime.CommerceRuntime.Execute[TResponse](Request request, RequestContext context, IRequestHandler handler, Boolean skipRequestTriggers).
