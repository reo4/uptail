---
title: 'POS error: The payment connector is not correctly configured'
date: '17:34 06/27/2017'
taxonomy:
    category:
        - blog
    tag: [AX2012 Retail , D365 Retail , hardware station , payment connector , troubleshooting]
hero_classes: 'text-dark title-h1h2 overlay-light hero-large parallax'
hero_image: unsplash-luca-bravo.jpg
blog_url: /blog
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
routes: 
    default: '/pos-error-the-payment-connector-is-not-correctly-configured'
---

### Description

When you click **‘Pay card‘** button to execute card payment, POS shows the error 

> The payment connector is not correctly configured.    

===

### Solution

If you have custom card payment integration (developed by Partner or provided by the 3rd Party), this integration often works only when Hardware station and POS are paired (by design).
If POS is not paired with Hardware station, card payments will be impossible and you receive the error.

Solution is to pair POS with Hardware station, mark it as active and to repeat a card payment after that.

### Error details

The same error translated to other languages:

1. Der Zahlungs-Connector ist nicht richtig konfiguriert. Wenden Sie sich an den Systemadministrator.
2. Le connecteur de paiement n’est pas configuré correctement. Contactez votre administrateur système.
3. Il connettere pagamenti non è configurato correttamente. Contattare l’amministratore di sistema.
