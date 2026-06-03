# Stack Blueprint

## Goal
Build local SEO websites that generate phone calls and form leads, then manage and monetize those leads through GoHighLevel.

## Recommended architecture

### 1. Frontend site
Use a simple static site for each city+niche.

Example:
- `austinjunkpickup.com`
- `tulsaepoxypros.com`
- `phoenixpoolremoval.com`

Each site should include:
- homepage
- service sections
- city relevance
- click-to-call CTA
- form CTA
- trust elements
- FAQ
- embedded tracking number

### 2. Domain and hosting
Use:
- Cloudflare for DNS
- Cloudflare Pages, Netlify, or simple VPS/Nginx hosting for static pages

Why:
- fast
- cheap
- easy to clone
- better control than page builders

### 3. Call tracking
Options:
- GoHighLevel phone numbers
- Twilio through GHL if configured that way

Use one tracking number per site.

### 4. Forms and CRM
Embed GHL form or use frontend form posting into GHL.

Required fields:
- name
- phone
- email optional
- city/ZIP
- job details
- source page
- site / niche tag

### 5. GHL backend objects
For each site, create:
- one sub-account or one pipeline namespace depending on how you want to organize
- tags for city and niche
- one pipeline
- one form
- one missed-call text-back workflow
- one new-lead notification workflow
- one reactivation workflow later

### 6. SEO content structure
Per site:
- homepage targeting `service + city`
- 3 to 8 supporting pages targeting subservices
- FAQ block
- local landmarks/neighborhood references
- schema later

### 7. Monetization models
- flat monthly rent
- pay per lead
- pay per call
- hybrid base fee + per lead

## Best first deployment pattern
- static site frontend
- GHL form embed
- GHL tracking number
- GHL workflow for SMS + email alerts
- operator notified instantly
- monthly report from GHL
