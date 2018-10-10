# Sample curl commands

## Retrieve a list of contacts:

```
curl -X GET --http1.1 \
    --url 'https://ap-southeast-2.api.vaultre.com.au/api/v1.1/contacts' \
    -h 'Accept: application/json' \
    -h 'X-Api-Key: <API Key>' \
    -h 'Authorization: Bearer <Access Token>'
```

## Retrieve a list of contact categories:

```
curl -X GET --http1.1 \
    --url 'https://ap-southeast-2.api.vaultre.com.au/api/v1.1/categories/contact' \
    -h 'Accept: application/json' \
    -h 'X-Api-Key: <API Key>' \
    -h 'Authorization: Bearer <Access Token>'
```

## Add a contact to VaultRE

```
curl -X POST --http1.1 \
    --url 'https://ap-southeast-2.api.vaultre.com.au/api/v1.1/contacts' \
    -h 'Accept: application/json' \
    -H 'X-Api-Key: <API Key> \
    -H 'Authorization: Bearer <Access Token> \
    -H 'Content-Type: application/json' \
    -d '{"firstName": "Matt", "lastName": "Healy", "emails": ["matt@vaultrealestate.com.au"]}'
```

## Update the assigned categories for a contact:
```
curl -X PUT --http1.1 \
    --url 'https://ap-southeast-2.api.vaultre.com.au/api/v1.1/contacts/1442853/categories' \
    -h 'Accept: application/json' \
    -H 'X-Api-Key: <API Key> \
    -H 'Authorization: Bearer <Access Token> \
    -H 'Content-Type: application/json' \
    -d '{"items": [{"id": 1076}]}'
```
