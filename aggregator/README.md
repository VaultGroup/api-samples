Aggregator API
==================

https://docs.api.vaultre.com.au/aggregator/index.html

The aggregator API allows other CRM systems to feed in property data for a franchise group agency.

When you register for Aggregator access, VaultRE will provide you with a unique *CRM Key* and *Secret Key*.

Authentication
==================

To access these API endpoints, you must supply your *Secret Key* as the `X-Api-Key` header, and generate a JWT token to be used for the `Authorization` header.

At a high level, your request would look something like this

```
curl -X POST \
    --url 'https://aggregator.api.vaultre.com.au/api/v1.0/staff' \
    -H 'Accept: application/json' \
    -H 'Content-Type: application/json' \
    -H 'X-Api-Key: <API Key>' \
    -H 'Authorization: Bearer <Token>' \
    -d '{...}'
```

To generate the JWT token:

JWT algorithm: `HS512`

Payload: `{"crmKey": "<your provided CRM key>", "timestamp": <current epoch timestamp in seconds>}`

Secret (used for signing): `<secret key provided by VaultRE>`

Use the generated token as the bearer token for these requests. The generated tokens are valid for 120 seconds.

Sample Python code for calling the API is available [here](client.py)
