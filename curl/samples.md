# Sample curl commands

## Retrieve a list of contacts:

```
curl -X GET \
    --url 'https://ap-southeast-2.api.vaultre.com.au/api/v1.2/contacts' \
    -H 'Accept: application/json' \
    -H 'X-Api-Key: <API Key>' \
    -H 'Authorization: Bearer <Access Token>'
```

## Retrieve a list of contact categories:

```
curl -X GET \
    --url 'https://ap-southeast-2.api.vaultre.com.au/api/v1.2/categories/contact' \
    -H 'Accept: application/json' \
    -H 'X-Api-Key: <API Key>' \
    -H 'Authorization: Bearer <Access Token>'
```

## Add a contact to VaultRE

```
curl -X POST \
    --url 'https://ap-southeast-2.api.vaultre.com.au/api/v1.2/contacts' \
    -H 'Accept: application/json' \
    -H 'X-Api-Key: <API Key> \
    -H 'Authorization: Bearer <Access Token> \
    -H 'Content-Type: application/json' \
    -d '{"firstName": "Matt", "lastName": "Healy", "emails": ["matt@vaultrealestate.com.au"]}'
```

## Update the assigned categories for a contact:
```
curl -X PUT \
    --url 'https://ap-southeast-2.api.vaultre.com.au/api/v1.2/contacts/1442853/categories' \
    -H 'Accept: application/json' \
    -H 'X-Api-Key: <API Key> \
    -H 'Authorization: Bearer <Access Token> \
    -H 'Content-Type: application/json' \
    -d '{"items": [{"id": 1076}]}'
```

## Capture on online website enquiry in to VaultRE

```
curl -X POST \
    --url 'https://ap-southeast-2.api.vaultre.com.au/api/v1.2/enquiries' \
    -H 'Accept: application/json' \
    -H 'X-Api-Key: <API Key> \
    -H 'Authorization: Bearer <Access Token> \
    -H 'Content-Type: application/json' \
    -d '{"enquiryDate": "2018-12-13T11:11:36+08:00", "subject": "demorealestate.com.au enquiry for 1 Smith St, SUBIACO", "body": "Can you please provide a price guide and advise when the next open home is scheduled?", "originalId": "01e32301-1cf3-4130-92d6-e4da1ef57835", "propertyReference": "L1234", "source": "OFFICEWEBSITE", "email": "matt@vaultrealestate.com.au", "fullName": "Matt Healy", "mobile": "0400 000 000"}'
```

## Get a list of currently available and published residential sale properties

```
curl -X GET \
    --url 'https://ap-southeast-2.api.vaultre.com.au/api/v1.2/properties/residential/sale?published=true&status=listingOrConditional' \
    -H 'Accept: application/json' \
    -H 'X-Api-Key: <API Key> \
    -H 'Authorization: Bearer <Access Token>'
```
