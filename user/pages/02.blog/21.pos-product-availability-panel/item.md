---
title: 'POS: Product availability panel stopped working (error)'
date: 13:34 07/23/2017
hero_image: unsplash-luca-bravo.jpg
taxonomy:
    category: blog
    tag: [D365 Retail , Extensions , POS deve , Real-time inventory , troubleshooting]
---

### Description

There are multiple extension samples provided by Microsoft together with POS solution. One of them is ‘Product availability’ panel that displays real-time stock level of the product.

===

After retail update to 7.3.11971.64069 version ‘Product availability’ panel stopped working – started to display error.

Let’s find out what is wrong and how we can fix the panel.

### Why issue happens

‘Product availability’ sample was not changed to become compatible with a new version of ‘Product availability’ functionality on Retail server. As the result, Retail server throws the following exception:

> An error occurred while trying to send all bufferred output to the client. Exception:                 System.Collections.Generic.KeyNotFoundException: The given key was not present in the dictionary.
at System.ThrowHelper.ThrowKeyNotFoundException()
at System.Collections.Generic.Dictionary2.get_Item(TKey key)
at Microsoft.Dynamics.Retail.RetailServerLibrary.ODataControllers.OrgUnitsController.SearchProductAvailability(ODataActionParameters parameters, ODataQueryOptions`1 queryOptions)
at lambda_method(Closure , Object , Object[] )


Error from Fiddler:

> “TypeName”: “CommerceException”,
“Exception”: “{\r\n \”ErrorResourceId\”: \”Microsoft_Dynamics_Internal_Server_Error\”,\r\n \”LocalizedMessage\”: \”Beim Verarbeiten dieser Anforderung ist ein Fehler auf dem Server aufgetreten.\”\r\n}

### What parameters are required by Retail server

Look through retail server metadata: **searchProductAvailability** function requires 2 parameters: **productId** and **orgUnitAvailabilitySearchCriteria**

    <Action Name="SearchProductAvailability" IsBound="true">
        <Parameter Name="bindingParameter" Type="Collection(Microsoft.Dynamics.Commerce.Runtime.DataModel.OrgUnit)"/>
        <Parameter Name="productId" Nullable="false" Type="Edm.Int64"/>
        <Parameter Name="orgUnitAvailabilitySearchCriteria" Type="Microsoft.Dynamics.Commerce.Runtime.DataModel.OrgUnitAvailabilitySearchCriteria"/>
        <ReturnType Type="Collection(Microsoft.Dynamics.Commerce.Runtime.DataModel.OrgUnitAvailability)"/>
    </Action><strong> </strong>

### How CPOS request to Retail server looks now

CPOS request to retail server contains only one parameter – **productId**, that causes the issue.

    let request: InventoryLookupOperationRequest<InventoryLookupOperationResponse> =
                    new InventoryLookupOperationRequest<InventoryLookupOperationResponse>
                        (this._state.product.RecordId, correlationId);


### How CPOS request should look like

Add the parameter **orgUnitSearchCriteria** to CPOS request – and the issue will be fixed, ‘Product availability’ panel will work well.

    var orgUnitSearchCriteria = new ProxyEntities.OrgUnitAvailabilitySearchCriteriaClass

    let request: InventoryLookupOperationRequest<InventoryLookupOperationResponse> =
            new InventoryLookupOperationRequest<InventoryLookupOperationResponse>
            (this._state.product.RecordId, correlationId, orgUnitSearchCriteria);
