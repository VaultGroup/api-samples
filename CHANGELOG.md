Changelog
==================

## v1.2


### 2020-01-20

- Lease life history now includes tenancy history
- New endpoint to trigger resending a property to portal sites


### 2020-01-09

- Endpoint to unlink contact from property


### 2020-01-08

- Return address components in property search endpoint and contact context endpoint


### 2019-12-17

- Include payment type and payment reference on tenancy


### 2019-12-12

- Endpoint for removing contact from category


### 2019-12-10

- Bulk endpoint for fetching owners
- Bulk endpoint for fetching purchasers
- Bulk endpoint for fetching inspections


### 2019-12-07

- Bulk endpoint for fetching contact notes


### 2019-11-25

- Added tenancy details to sale properties
- Allow setting of contacts as archived


### 2019-11-21

- Endpoint to retrieve tenancies in bulk
- Added user to task object


### 2019-11-15

- Include arrears amount on tenancy model


### 2019-11-13

- Allow sort of properties by price


### 2019-11-10

- Fetch branches for account
- Filter property endpoints by branches


### 2019-11-05

- Allow sort of properties by suburb


### 2019-11-04

- Endpoint to add user to contact access


### 2019-10-31

- Add endpoint to retrieve all mainenance jobs in bulk


### 2019-10-30

- Allow filter by multiple property statuses


### 2019-10-17

- Added "Statement of Information" url


### 2019-10-16

- Added supplier labels to supplier endpoints


### 2019-10-03

- Added "access by" to contact note list


### 2019-09-26

- Endpoint for "bulk contract sent"


### 2019-09-21

- Add "comments" field to contact phone numbers


### 2019-09-17

- Added life object to search property
- Added /property/<salelease> endpoint


### 2019-09-15

- Endpoint to retrieve all trust accounts for office


### 2019-09-12

- Include support for property tags on buy/rent requirements


### 2019-09-06

- Include marketing user in contact search model


### 2019-09-04

- Include marketing user in contact model


### 2019-08-29

- Allow filter of contacts by marketing user


### 2019-08-28

- Endpoints for submitting property portal stats to owner report


### 2019-08-12

- Endpoints for owner summary templates


### 2019-08-01

- Allow filter of contacts by "archived" status


### 2019-07-23

- Endpoint to send bulk email to contacts


### 2019-07-01

- Endpoint to retrieve all current landlords


### 2019-06-26

- Add supplier search endpoints


### 2019-06-20

- Add inspections endpoints


### 2019-06-19

- Add "date available" field to lease properties


### 2019-06-17

- New endpoint to allow large contact file uploads
- Added maintentance endpoints
- Added supplier endpoints


### 2019-06-16

- New endpoint to allow large photo uploads


### 2019-06-12

- Endpoint to retrieve portals an office is publishing to
- Allow filter of properties by portal ticked


### 2019-06-10

- New endpoint to allow large file uploads
- Allow setting of appraisal details when adding/updating property


### 2019-06-09

- Endpoints to retrieve a list of sold properties (with sale details)


### 2019-05-28

- Endpoint for sending email to contact from user


### 2019-05-27

- Endpoint to see number of interactions each contact had with property feedback
- Added open home to calendar events models


### 2019-05-25

- Endpoint for changing rental status to management


### 2019-05-23

- Endpoint for uploading attached files to contacts


### 2019-05-21

- Endpoint for retrieving filing cabinet folders


### 2019-05-20

- Endpoint for retrieving all contact marketing users in bulk
- "Filing Cabinet" files now have folder(s) assigned


### 2019-05-19

- Add office opening hours to Account model


### 2019-05-14

- Endpoint for retrieving all current tenants in bulk
- Endpoint for retrieving all contact category mappings in bulk


### 2019-05-13

- Endpoint for retrieving buy/rent requirements in bulk
- Allow filter of active/inactive buy/rent requirements


### 2019-05-02

- Get upcoming open homes for office


### 2019-04-30

- Allow get/set of property features (e.g. pool, study, aircon)


### 2019-04-27

- Added endpoint for external link types
- Allow setting external links when adding/updating property


### 2019-04-18

- Add endpoint for property source of enquiry


### 2019-04-17

- Added property life interest endpoints
- Added property life interest tests
- Added contact interest types endpoint


### 2019-04-11

- Added internal property class name to PropertyClass object
- Enforce suburb selection when creating property
- Endpoint to convert appraisal or not currently listed to listing status


### 2019-04-10

- Added websiteurl to account model


### 2019-04-08

- Added endpoint to lookup property by portal reference


### 2019-04-07

- Added eTable url to property life objects


### 2019-03-27

- Property offer conditions endpoints - complete and uncomplete


### 2019-03-25

- Property offer conditions endpoints


### 2019-03-23

- Major changes to property feedback endpoints. "propertyFeedback" is now contained within the "contactNote" object.


## v1.1

### 2018-10-10

- "carSpaces" field on residential properties has been removed and replaced with "garages", "carports" and "openSpaces" fields


## v1.0

### 2017-10-23

- Initial release
