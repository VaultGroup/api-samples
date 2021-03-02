Changelog
==================
## v1.3


### 2021-03-02
- The /account/users endpoint now allows filtering by email address


### 2021-02-25
- A new endpoint is available to find all contact records merged in to a given contact (GET /contacts/{contactid}/merged)


### 2021-02-15
- The bulk contact notes endpoint can now be filtered by insertedSince and insertedBefore


### 2021-02-12
- /types/holdingArea Retrieve a list of holding area types
- /enquiries now accepts a "source" parameter. Pass in a holding area type API code to filter enquiries by type.


### 2021-02-08
- Sold properties can now be filtered by suburb
- Contact objects now display a smsUnsubscribeUrl field


### 2021-01-27
- It is now possible to add or update contact category groupings


### 2021-01-18
- Tasks can now be filtered by date inserted


### 2020-12-10
- The bulk current owner/purchaser/landlord/tenant endpoints now allow filtering by modify date
- The account postal address is now included in the Account model


### 2020-12-09
- It is now possible to get a list of portal sites to which each property is published


### 2020-12-07
- Sold properties can now be sorted by sale price or search price


### 2020-11-23
- The "portalStatus" field is now included in property responses. This represents the status that should be displayed on online portals, as opposed to the actual status of the property.


### 2020-11-18
- Property list endpoints can now be filtered by a set of property IDs


### 2020-11-15
- Contact distribution lists can now be fetched on GET /distributionLists/contact
- Contacts can be filtered by distribution list


### 2020-11-10
- Released /search/contacts endpoint to search on multiple parameters at once


### 2020-10-10
- Contact Date Types for the given account can now be retrieved
- Contact Dates can now be retrieved


### 2020-10-08
- Contact bank accounts can now be viewed, edited and removed

### 2020-10-06
- v1.3 released
- Released /keys endpoints
- "keyID", "keyOut" on the Property model have been removed. The /keys endpoints should now be used instead.
- "keys", a list of Propery Key objects, is now exposed on the single property endpoints.
- "tenureOrTitleType" can now be viewed and set on properties (UK and NZ accounts only)
- New endpoint to retrieve a list of tenure/title types (GET /types/tenureOrTitleTypes)


## v1.2


### 2020-10-05
- "highlights" is now exposed on the single property endpoints


### 2020-09-22
- "websiteUrl" is now exposed on the User model


### 2020-09-21
- /calendar/event endpoints are now available for third party integrators (at at office-level integration)


### 2020-09-20
- "Land Value", "Improvement Value" and "Rateable Value" fields are now available on property endpoints for NZ accounts


### 2020-09-16
- "tenderDetails" and "setSaleDateDetails" fields are now exposed on property endpoints.


### 2020-09-15
- The branch field is now exposed on property API calls if the account uses "branches".


### 2020-09-10
- The "Price Qualifier" field (for UK and NZ accounts) is now included in the SaleProperty model


### 2020-08-17
- Properties can now be filtered by listing authority date, web live date (the date the listing was first published to the web), and leased date


### 2020-08-03
- Initial release of the /eventStream API endpoint


### 2020-07-27
- Added ensuites and toilets fields to Residential Property object
- Added receptionRooms field to Residential Property object (UK only)


### 2020-07-19
- Adverting suppliers can now be fetched, updated and created


### 2020-07-11
- A new property status of "withdrawnAppraisal" is now available for filtering


### 2020-07-09
- A new endpoint to retrieve upcoming and recent tenancy inspections


### 2020-06-17
- New endpoints to retrieve "available" properties. These endpoints are shortcuts for applying certain filters to the property endpoints.


### 2020-06-03
- The energy rating field is now exposed on property endpoints


### 2020-06-02
- Enquiries can now be filtered by sale/lease life ID


### 2020-06-01
- Properties can now be filtered by price reductions in a date range
- New endpoint for retrieving enquiries from the holding area


### 2020-05-24
- "frontage" field is now exposed on all property classifications
- New endpoint to retrieve property/category mappings in bulk


### 2020-05-12
- "externalLinks" attribute is now available on property list endpoints
- New endpoint to retrieve a list of leased commercial properties


### 2020-05-11
- New endpoint to retrieve the activity log for a contact


### 2020-04-29
- New endpoints to remove owner/purchaser/landlord/tenant from property
- New endpoint to create a Scheduled Viewing for a property


### 2020-04-19

- When creating or updating Buy/Lease Requirements for contacts,
  the Suburb object (name, postcode, state etc) can now be passed
  in as opposed to a suburb ID.
- "Leased" rental properties can now be filtered in the API.


### 2020-04-16

- Added a new "addressVisibility" enum field on property objects


### 2020-03-25

- New endpoint to list all suburbs in the user's country


### 2020-03-18

- New endpoints for integrators to submit property campaign statistics


### 2020-03-12

- New endpoint to search for contact categories by name
- Contacts can now be filtered by multiple "marketingUser" values at once
- Fixed an issue filtering contacts by entityType


### 2020-03-08

- "rates" attribute added for all sale properties, returning "water", "council" and "strata" rates


### 2020-03-05

- Endpoint to retrieve full sale history for a given property, including commission splits


### 2020-03-02

- Endpoints to retrieve sale and lease deals for a commercial property


### 2020-02-28

- Add "pinned" boolean to Contact Note Type object


### 2020-02-23

- Add "accessSales" and "accessPropertyManagement" permissions booleans for users


### 2020-02-20

- Add "tenantedInvestment" field for buyer requirements
- Add area breakdowns for commercial properties (e.g. mezzanine, warehouse, office)


### 2020-02-13

- Add "zoning" field for commercial properties


### 2020-02-05

- Endpoint for retrieving categories to which a supplier belongs


### 2020-01-30

- Bulk endpoint for fetching feedback items


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
