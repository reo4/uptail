---
title: 'POS error on start: More than one export was found that matches the constraint'
date: 17:34 07/04/2017 

hero_classes: text-light title-h1h2 overlay-dark-gradient hero-large parallax
hero_image: unsplash-luca-bravo.jpg
show_sidebar: true

taxonomy:
    category: blog
    tag: [AX2012 Retail, POS development, Retail POS , troubleshooting]
---

### Description

POS cannot start and shows the error 

> ‘Error number: 1300 could not load all external service modules’

===

### Reason and Solution

Some standard DLLs have been deployed to multiple folders. For example, Transaction.dll exists in POS root folder and was deployed to ‘Extensions’ folder by mistake.
In this case deletion of Transaction.dll from ‘Extensions’ folder will solve the issue.

### Error details

    LSRetailPosis.POS.Program: LSRetailPosis.PosisException ---> System.ComponentModel.Composition.ChangeRejectedException: The composition remains unchanged. The changes were rejected because of the following error(s): The composition produced multiple composition errors, with 3 root causes. The root causes are provided below. Review the CompositionException.Errors property for more detailed information.
    1) More than one export was found that matches the constraint '((exportDefinition.ContractName == "Microsoft.Dynamics.Retail.Pos.Contracts.Triggers.ITriggers") AndAlso (exportDefinition.Metadata.ContainsKey("ExportTypeIdentity") AndAlso "Microsoft.Dynamics.Retail.Pos.Contracts.Triggers.ITriggers".Equals(exportDefinition.Metadata.get_Item("ExportTypeIdentity"))))'.
    Resulting in: Cannot set import 'Microsoft.Dynamics.Retail.Pos.SystemCore.PosApplication.Triggers (ContractName="Microsoft.Dynamics.Retail.Pos.Contracts.Triggers.ITriggers")' on part 'Microsoft.Dynamics.Retail.Pos.SystemCore.PosApplication'.
    Element: Microsoft.Dynamics.Retail.Pos.SystemCore.PosApplication.Triggers (ContractName="Microsoft.Dynamics.Retail.Pos.Contracts.Triggers.ITriggers") -->  Microsoft.Dynamics.Retail.Pos.SystemCore.PosApplication
    2) No valid exports were found that match the constraint '((exportDefinition.ContractName == "Microsoft.Dynamics.Retail.Pos.Contracts.Settings.ISettings") AndAlso (exportDefinition.Metadata.ContainsKey("ExportTypeIdentity") AndAlso "Microsoft.Dynamics.Retail.Pos.Contracts.Settings.ISettings".Equals(exportDefinition.Metadata.get_Item("ExportTypeIdentity"))))', invalid exports may have been rejected.
    Resulting in: Cannot set import 'Microsoft.Dynamics.Retail.Pos.SystemCore.PosApplication.Settings (ContractName="Microsoft.Dynamics.Retail.Pos.Contracts.Settings.ISettings")' on part 'Microsoft.Dynamics.Retail.Pos.SystemCore.PosApplication'.
    Element: Microsoft.Dynamics.Retail.Pos.SystemCore.PosApplication.Settings (ContractName="Microsoft.Dynamics.Retail.Pos.Contracts.Settings.ISettings") -->  Microsoft.Dynamics.Retail.Pos.SystemCore.PosApplication