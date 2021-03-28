Integrator Endpoints
==================

Special API endpoints are available for integrators to access data at the integrator level rather than individual account level. For example, you may wish to retrieve a full list of all accounts with an Access Token generated for your product.

These endpoints require extra authentication steps which are detailed below.

Authentication
==================

At a high level, your request would look something like this

```
curl -X GET \
    --url 'https://ap-southeast-2.api.vaultre.com.au/api/v1.3/integrator/accounts' \
    -H 'Accept: application/json' \
    -H 'X-Api-Key: <API Key>' \
    -H 'Authorization: Bearer <Token>'
```

While for normal requests the bearer token is obtained from the user, for these integrator endpoints you need to generate a JWT token.

JWT algorithm: `HS512`

Payload: `{"apiKey": "<your API key>", "timestamp": <current epoch timestamp in seconds>}`

Secret (used for signing): `<secret key provided by VaultRE>`

Use the generated token as the bearer token for these requests. The generated tokens are valid for 300 seconds.

Sample code for generating a JWT token is available [here](python/create_jwt.py)
