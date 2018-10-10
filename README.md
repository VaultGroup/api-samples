VaultRE API Samples
==================

This repository contains sample cURL commands and PHP code for interacting with the VaultRE API.

Full API documentation (Swagger) is available at https://docs.api.vaultre.com.au/

The current version of the API is **1.1**.

Authentication Flow
==================

When you're ready to integrate with VaultRE, we will supply you with a unique *API Key*. Every request must include a request header `X-Api-Key` with your API Key. This is how we identify you as the partner accessing the API.

To access data for a VaultRE client, the client must generate and provide you with a unique *Access Token*. This should be provided with every request in the header `Authorization: Bearer <token>`.

Data Format
==================

The API transfers data in the JSON format.

All requests must be made over HTTPS.

Please ensure all API requests use HTTP/1.1.

Please note that when submitting data to the API, the `Content-Type` header is case sensitive.

Date/Time Format
==================

Generally, the API returns the following format for Date objects:

`YYYY-MM-DD`

e.g. `2016-04-28`

and the following format for DateTime objects:

`YYYY-MM-DDThh:mm:ss+z`

e.g. `2018-05-22T01:12:59+00:00`

Please note that all times are 24-hour and usually in the UTC timezone. You can submit DateTime objects in whatever timezone you prefer.

Rate Limiting
==================

All API Keys are rate limited to 10 requests per second and 10,000 requests per day. Therefore, you should cache data appropriately to avoid using up your allocated quota.

If you are retrieving property listings from the API to power a website, our recommendation is that you do not call the API "live" on each page load as this introduces the API as a direct dependency on your website performance and puts you at risk of exhausting your allocated quota. Rather, you should synchronise data periodically and cache it locally. 

Webhooks
==================

VaultRE offers outbound webhooks to interested integrators. In essence, VaultRE can send a small notification payload to your nominated endpoint when an event occurs in a client's VaultRE account. This can be a very efficient way of keeping two systems in sync without resorting to polling the API periodically for changes.

Versioning
==================

The JSON payload from various endpoints is subject to change at any time. Within a minor version (e.g. 1.0, 1.1) fields can be added to a JSON payload but we will endeavour to never make breaking changes (e.g. removing a field). Between versions, breaking changes may be made. Your application should be able to handle new fields being added to the JSON payload arbitrarily.
