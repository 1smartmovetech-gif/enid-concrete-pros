# GHL Integration Guide for Enid Concrete Pros

## Reality check
This workspace currently does not expose a usable GHL API key or OpenClaw-to-GHL connector credential that I can directly call from this session.

That means the fastest reliable path is to connect the site to GHL using one of these methods inside your GHL account:

1. embedded GHL form
2. GHL form link / form builder
3. webhook action from a WordPress form plugin
4. Call tracking with the GHL phone number already added to the site

## Best immediate setup
### Option A: Embedded GHL form
Use this if you want the lowest-friction path.

Steps:
1. In GHL, go to Sites or Forms.
2. Create a form with these fields:
   - Name
   - Phone
   - Email
   - ZIP code
   - Service needed
   - Project description
   - Preferred contact method
   - Consent checkbox
3. Set the form destination workflow or contact pipeline.
4. Copy the embed code.
5. Paste that embed into the WordPress Contact page and the homepage CTA section.

## Recommended tags / fields in GHL
### Tags
- `enid-concrete`
- `website-lead`
- `concrete-driveway`
- `concrete-patio`
- `concrete-repair`

### Helpful custom fields
- ZIP Code
- Service Needed
- Preferred Contact Method
- Project Description
- Source Site

## Suggested pipeline
Pipeline: `Enid Concrete Leads`

Stages:
1. New Lead
2. Attempted Contact
3. Quote Requested
4. Connected to Provider
5. Won
6. Lost / Unqualified

## Automation ideas
- instant email notification on form submit
- instant SMS notification to you
- missed-call text back using the GHL number if available
- tag by service type for routing

## Where the current number is used
- `816-575-9987`
- added in the prototype header and hero
- added in the WordPress-ready theme header

## If you want this inside WordPress
### Easiest WordPress method
- Use WPForms or Fluent Forms for layout
- Send notifications to your email
- Also send to GHL using webhook if available

### Cleaner GHL-native method
- Use the embedded GHL form directly
- Use the GHL number as the visible tracking number
- Route all leads into one GHL workflow

## Exact implementation recommendation
For now, do this:
1. keep `816-575-9987` on the site
2. create a GHL form named `Enid Concrete Quote Request`
3. add the fields listed above
4. embed it on homepage + contact page
5. create pipeline `Enid Concrete Leads`
6. add automation for notification and tagging

## What I need from you to finish the site-side integration cleanly
Send me either:
- the GHL embed code, or
- the GHL form link, or
- the webhook endpoint / form action details

Once you send one of those, I can wire the site package to match it exactly.
