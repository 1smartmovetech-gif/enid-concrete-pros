# Rural Haven Airtable Schema

This is the recommended internal Property OS schema for Rural Haven.

## Core tables

### Leads
Purpose:
- raw intake from website forms and other channels

Suggested fields:
- Lead ID
- Lead Type
- Full Name
- Phone
- Email
- Address Submitted
- City
- State
- Motivation
- Asking Price
- Timeline
- Condition Notes
- Lead Source
- Source Detail
- Status
- Created Date
- Matched Property
- Follow-Up Owner
- Follow-Up Due
- Notes

### Properties
Purpose:
- canonical record for each deal/property

Suggested fields:
- Property ID
- Property Name
- Address
- City
- State
- Zip
- Strategy Type
- Status
- Exit Strategy
- Lead Source Channel
- Lead Source Contact
- Asking Price
- Negotiated Purchase Price
- ARV
- Rehab Estimate
- Holding Cost Estimate
- Target Sale Price
- Actual Sale Price
- Summary
- Major Issues / Red Flags
- Next Step
- Next Step Owner
- Next Step Due Date
- Go / No-Go Decision
- Contract Date
- Closed Date

### Contacts
Purpose:
- sellers, buyers, lenders, contractors, partners, agents

### Conversations
Purpose:
- call notes, text summaries, negotiation history

### Tasks
Purpose:
- operational follow-up and execution

### Documents_Media
Purpose:
- contracts, photos, inspection docs, links

### Funding
Purpose:
- hard money, private money, seller finance, partner capital

### Transactions
Purpose:
- expenses, deposits, draws, proceeds

### External_Links
Purpose:
- county, MLS, Zillow, Drive folders, Dropbox, listing pages

## Optional near-term tables
- Buyers
- Offers
- Markets
- Vendors

## Operational rules
- One real property = one canonical property record
- Every active property must have a next step and due date
- Raw website submissions land in Leads first
- Qualified leads should convert into or attach to Properties
