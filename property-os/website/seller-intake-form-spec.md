# Seller Intake Form Spec

## Goal
Capture enough information to qualify a seller lead without making the form too long.

## Fields

### Required
- Full Name
- Phone
- Email
- Property Address
- City
- State
- Tell us about the property

### Recommended optional
- Asking Price
- Property Condition
- Occupancy Status
- Timeline to Sell
- Best Time to Contact
- How did you hear about us?

### Consent
- checkbox to confirm consent to be contacted

## Hidden/system fields
- Lead Source = Website
- Lead Type = Seller
- Submission Timestamp
- Page URL

## Airtable destination
Table: `Leads`

## Form behavior
- show simple confirmation page
- trigger follow-up task after submit
- optionally send email alert later
