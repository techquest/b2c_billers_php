# B2C-Billers-PHP

[Support chat](https://interswitch.slack.com/messages/C4ULTK04T/)

This repository contains Java SDK and samples for Business to Consumer bill payments.

## Prerequisites
* PHP 5+ or PHP 7
* Interswitch PHP Base Library [Click here](https://github.com/techquest/interswitch_php)

Mini-Wiki
================================

*Biller::
A biller is any Organization/Institution/Business that is able to exchange services 
for a fee. e.g Telecoms provider, School, Government Body etc.

*Category::
Billers are grouped under categories. For instance, all schools can e grouped under a `University`
Category.

*Customer:
An individual that pays for any of the services offered by a Biller.

*PaymentItem:
A biller can offer different services and hence different prices for them.
Each of those services, falls under a payment-item and has a unique paymentitemcode.
We say that a user has intent to pay for a payment-item offered by a Biller.






What this SDK provides for you
================================

* Get All Billers::
	Get a list of all billers supported on our platform.

* Get All Categorys::
  	Get a list of all categorys and associated billers supported on our platform.

* Get All Billers under a Category::
	Get a list of all biilers under a particular category.
	
* Get Biller Payment Items::
	Get a list of all payment-items under aparticular Biller.

* Validate Customer::
	Validates a customer-id under a particular biller.

* Make payment for a customer::
	Makes a payment for a payment-item for a particular customer.




Quick start
===============================

#### Composer
    "interswitch/interswitch": "dev-master"

    ```
    composer require interswitch/interswitch:dev-master
    ```

#### Samples

Check out the samples folder for sample code on all the features above.

#### Support Team

Still experiencing issues, quickly talk to our Engineers at
[Support chat](https://interswitch.slack.com/messages/C4ULTK04T/) or [Support chat](https://gitter.im/techquest) and get your issues fixed in a giffy.

