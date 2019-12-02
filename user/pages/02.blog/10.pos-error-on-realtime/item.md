---
title: 'POS: Error on Real-Time service access – a business connector session already exists'
date: '17:34 06/27/2017'
taxonomy:
    category:
        - blog
    tag: [AX2012 Retail , Modern POS , Real-time service , Retail POS , troubleshooting]
hero_classes: 'text-dark title-h1h2 overlay-light hero-large parallax'
hero_image: unsplash-luca-bravo.jpg
blog_url: /blog
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
---

### Description

POS (MPOS) fails to access Retail Transaction Service with error "A Business Connector session already exists."

===

### Steps worked for me

1. Restart Retail Server web application in IIS

### Error details

> CommerceRuntimeException was thrown.Microsoft.Dynamics.Commerce.Runtime.CommunicationException: Exception while calling invoke method RetailServerStaffLogOn. System.ServiceModel.Security.MessageSecurityException: System.ServiceModel.FaultException: A Business Connector session already exists. Server stack trace: in System.ServiceModel.Channels.SecurityChannelFactory`1.SecurityRequestChannel.ProcessReply(Message reply, SecurityProtocolCorrelationState correlationState, TimeSpan timeout) in System.ServiceModel.Channels.SecurityChannelFactory SecurityRequestChannel.Request(Message message, TimeSpan timeout) .. in System.ServiceModel.Channels.ServiceChannelProxy.Invoke(IMessage message) Exception rethrown at [0]: .. in Microsoft.Dynamics.Commerce.Runtime.TransactionService.TransactionServiceClient.GetResponseFromMethod(String methodName, Object[] parameterList, Boolean useExtensionMethod) in Microsoft.Dynamics.Commerce.Runtime.TransactionService.TransactionServiceClient.CreateMessageSecurityException(String methodName, MessageSecurityException exception) .. in Microsoft.Dynamics.Commerce.Runtime.Services.UserAuthenticationTransactionService.LogOnUser(UserLogOnServiceRequest request) Microsoft.Dynamics.Commerce.Runtime.Services.UserAuthenticationService.EmployeeLogOnRealTimeService(UserLogOnServiceRequest request) in Microsoft.Dynamics.Commerce.Runtime.Services.UserAuthenticationService.LogOnUser(UserLogOnServiceRequest request) in Microsoft.Dynamics.Commerce.Runtime.Services.UserAuthenticationService.Execute(Request request)
