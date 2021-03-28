import json
import requests
import jwt
import time
from uuid import uuid4
from datetime import datetime

SECRET = 'YOUR_SECRET_KEY'
CRMKEY = 'YOUR_CRM_KEY'

BASE_URL = 'https://aggregator.api.vaultre.com.au/api/v1.0'


def main():

    token = generate_jwt()

    headers = {
        'X-Api-Key': SECRET,
        'Content-Type': 'application/json',
        'Authorization': 'Bearer ' + token,
    }

    call_staff(headers)
    call_appraisal(headers)
    call_listing(headers)
    call_unconditional(headers)
    call_settlement(headers)
    call_withdrawn(headers)


def call_api(path, headers, data):

    r = requests.post(BASE_URL + path, headers=headers, data=data)
    print(path + ' - ' + r.text)


def call_staff(headers):

    now = datetime.utcnow().replace(microsecond=0).isoformat()

    payload = {
        "transactionId": str(uuid4()),
        "transactionDate": now,
        "staffId": "900",
        "officeId": "272",
        "active": True,
        "firstName": "Matt",
        "lastName": "Healy",
        "position": "Salesperson",
        "mobile": "0400 000 000",
        "email": 'test@example.com',
    }

    data = json.dumps(payload)
    call_api('/staff', headers, data)


def call_appraisal(headers):

    now = datetime.utcnow().replace(microsecond=0).isoformat()

    payload = {
        "transactionId": str(uuid4()),
        "transactionDate": now,
        "appraisalId": "1",
        "propertyId": "1",
        "officeId": "272",
        "staff": [
            {"staffId": "900"},
        ],
        "appraisalDate": "2021-03-27",
        "appraisalPrice": 480000,
        "classification": "residential",
        "active": True,
        "address": {
            "unitNumber": "3",
            "streetNumber": "20",
            "street": "Fake Street",
            "suburb": "West Perth",
            "postcode": "6005",
            "state": "WA",
        },
    }

    data = json.dumps(payload)
    call_api('/appraisal', headers, data)


def call_listing(headers):

    now = datetime.utcnow().replace(microsecond=0).isoformat()

    payload = {
        "transactionId": str(uuid4()),
        "transactionDate": now,
        "appraisalId": "1",
        "propertyId": "1",
        "listingId": "1",
        "officeId": "272",
        "staff": [
            {"staffId": "900"},
        ],
        "auctionDate": "2021-03-27",
        "listingAuthorityDate": "2021-03-27",
        "auctionVenue": "On Site",
        "listingPrice": 450000,
        "classification": "residential",
        "active": True,
        "address": {
            "unitNumber": "3",
            "streetNumber": "20",
            "street": "Fake Street",
            "suburb": "West Perth",
            "postcode": "6005",
            "state": "WA",
        },
        "listingAuthorityType": "exclusive",
        "methodOfSale": "privateTreaty",
    }

    data = json.dumps(payload)
    call_api('/listing', headers, data)


def call_unconditional(headers):

    now = datetime.utcnow().replace(microsecond=0).isoformat()

    payload = {
        "transactionId": str(uuid4()),
        "transactionDate": now,
        "unconditionalId": "1",
        "propertyId": "1",
        "listingId": "1",
        "officeId": "272",
        "commissionSplits": [
            {
                "staffId": "900",
                "type": "lister",
                "amountExGST": "5000",
            },
            {
                "staffId": "901",
                "type": "seller",
                "amountExGST": "7000",
            },
        ],
        "unconditionalDate": "2021-03-27",
        "proposedSettlementDate": "2021-03-27",
        "salePrice": 465000,
        "grossCommissinExGST": 12000,
        "classification": "residential",
        "active": True,
        "address": {
            "unitNumber": "3",
            "streetNumber": "20",
            "street": "Fake Street",
            "suburb": "West Perth",
            "postcode": "6005",
            "state": "WA",
        },
        "soldType": "privateTreaty",
    }

    data = json.dumps(payload)
    call_api('/unconditional', headers, data)


def call_settlement(headers):

    now = datetime.utcnow().replace(microsecond=0).isoformat()

    payload = {
        "transactionId": str(uuid4()),
        "transactionDate": now,
        "unconditionalId": "1",
        "settlementId": "1",
        "propertyId": "1",
        "listingId": "1",
        "officeId": "272",
        "commissionSplits": [
            {
                "staffId": "900",
                "type": "lister",
                "amountExGST": "5000",
            },
            {
                "staffId": "901",
                "type": "seller",
                "amountExGST": "7000",
            },
        ],
        "unconditionalDate": "2021-03-27",
        "settlementDate": "2021-03-27",
        "salePrice": 465000,
        "grossCommissinExGST": 12000,
        "classification": "residential",
        "active": True,
        "address": {
            "unitNumber": "3",
            "streetNumber": "20",
            "street": "Fake Street",
            "suburb": "West Perth",
            "postcode": "6005",
            "state": "WA",
        },
        "soldType": "privateTreaty",
        "vendorPaidAdvertising": 1500,
        "agentPaidAdvertising": 100,
    }

    data = json.dumps(payload)
    call_api('/settlement', headers, data)


def call_withdrawn(headers):

    now = datetime.utcnow().replace(microsecond=0).isoformat()

    payload = {
        "transactionId": str(uuid4()),
        "transactionDate": now,
        "appraisalId": "1",
        "propertyId": "1",
        "listingId": "1",
        "withdrawnId": "1",
        "officeId": "272",
        "staff": [
            {"staffId": "900"},
        ],
        "withdrawnDate": "2021-03-27",
        "classification": "residential",
        "active": True,
        "address": {
            "unitNumber": "3",
            "streetNumber": "20",
            "street": "Fake Street",
            "suburb": "West Perth",
            "postcode": "6005",
            "state": "WA",
        },
        "vendorPaidAdvertising": 1500,
        "agentPaidAdvertising": 100,
    }

    data = json.dumps(payload)
    call_api('/withdrawn', headers, data)


def generate_jwt():

    token_payload = {
        'timestamp': int(time.time()),
        'crmKey': CRMKEY,
    }

    token = jwt.encode(token_payload, SECRET, algorithm="HS512")

    return token


if __name__ == "__main__":
    main()
