# GoHighLevel Setup Guide

## Core setup

### A. Create or organize account structure
Decide between:

#### Option 1: one sub-account per local site
Best if each property may become its own rentable asset.

#### Option 2: one master sub-account for all rank-and-rent sites
Best if you want less overhead at the beginning.

My recommendation: start with one master sub-account, separate by tags and pipelines.

## Required custom fields
Create custom fields for contacts:
- lead_source_site
- lead_city
- lead_service
- landing_page_url
- call_recording_url if using call flows
- lead_status_notes

## Tags
Use a clean naming standard:
- niche:junk-removal
- city:austin
- model:rank-rent
- source:organic
- source:form
- source:call

## Pipeline
Suggested pipeline:
1. New Lead
2. Contacted
3. Estimate Booked
4. Won
5. Lost
6. Unresponsive

## Workflows

### 1. New form lead workflow
Trigger:
- form submitted

Actions:
- create/update contact
- apply city and niche tags
- send internal notification
- send auto-reply SMS
- create opportunity in pipeline

### 2. Missed call text-back
Trigger:
- incoming call missed

Actions:
- send text: "Thanks for calling. Tell us what you need help with and your ZIP code."
- notify you or operator
- create/update contact

### 3. Speed-to-lead alert
Trigger:
- new lead created

Actions:
- SMS/email notification to operator
- optional task if no response in 10 minutes

## Form fields
Recommended frontend form fields:
- full name
- phone
- email optional
- service needed
- address or ZIP
- details

## Reporting views
Create smart lists by:
- site
- city
- niche
- month
- won/lost

## Snapshot items to save later
Once your first setup works, save a reusable snapshot with:
- pipeline
- workflows
- forms
- tags
- notifications
- opportunity settings
