# GoHighLevel Setup Guide - Smart Move Tech Contractor Demo

## 1. Agency vs Location
- Agency account industry: Marketing Agency
- Demo location industry: Home Services or Plumbing

## 2. Demo Location Identity
Use:
- Name: Smart Move Tech Plumbing Demo
- Timezone: America/Chicago
- Phone: dedicated demo number
- Email: demo inbox you control

## 3. Build Order
1. Create location/sub-account
2. Connect phone number with SMS enabled
3. Create pipeline: Contractor Leads
4. Add tags
5. Add custom fields
6. Create workflow: Missed Call Text Back - Contractor
7. Add owner notifications
8. Test missed call flow

## 4. Pipeline Stages
- New Lead
- Attempted Contact
- Qualified
- Estimate Requested
- Estimate Scheduled
- Won
- Lost
- Invalid / Out of Area

## 5. Tags
- source_missed_call
- source_web_form
- source_text_inbound
- status_new
- status_qualified
- status_unresponsive
- status_out_of_area
- status_urgent
- service_plumbing
- service_hvac
- service_roofing
- service_electrical
- service_general

## 6. Custom Fields
Create fields for:
- Service Needed
- Urgency Level
- Property Address
- Zip Code
- Best Callback Time
- Job Description
- Photo Received
- Service Area Match
- Lead Source
- Missed Call Time
- Estimate Status

## 7. Initial SMS Script
Hey, sorry we missed your call. This is {{business_name}}. What kind of project do you need help with?

Follow-up prompts:
- Is this urgent, or can it wait a day or two?
- What’s the property address or zip code for the job?
- What name should we put on the estimate?
- What’s the best time for a callback from the team?
- Anything else we should know about the job?
- Perfect, thanks. I’m sending this to the team now. If you want, you can also send a photo here.

## 8. No Reply Follow-up
10 minutes later:
Just making sure we got you. Reply with the type of job and your zip code, and we’ll get this in front of the team.

Next morning:
Following up from {{business_name}}. If you still need help, reply here with a few details and we’ll get your request routed quickly.

## 9. Owner Notification
New missed-call lead captured.
Name: {{contact.name}}
Phone: {{contact.phone}}
Service: {{custom.service_needed}}
Urgency: {{custom.urgency_level}}
Zip/Address: {{custom.property_address}}
Callback Time: {{custom.best_callback_time}}

## 10. Sales Demo Script
Imagine you’re on a ladder, under a sink, or driving between jobs. A homeowner calls, no one answers, and usually that lead is gone.

With this system, they get a text in under a minute, answer a few questions, and you get a lead summary without chasing voicemail.
