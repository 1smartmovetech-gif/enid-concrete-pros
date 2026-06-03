# GHL Workflow Copy

## Auto-reply SMS for form leads
Hi {{contact.first_name}}, thanks for reaching out about {{contact.lead_service}} in {{contact.lead_city}}. We got your request and will follow up shortly. If you want, reply here with photos or a few more details.

## Missed call text back
Thanks for calling. We missed you. Reply with what you need help with and your ZIP code, and we’ll get back to you shortly.

## Internal alert SMS
New lead: {{contact.full_name}} | {{contact.phone}} | {{contact.lead_service}} | {{contact.lead_city}}

## Internal alert email subject
New Website Landlord Lead: {{contact.lead_service}} / {{contact.lead_city}}

## Internal alert email body
New lead received.

Name: {{contact.full_name}}
Phone: {{contact.phone}}
Email: {{contact.email}}
Service: {{contact.lead_service}}
City: {{contact.lead_city}}
Site: {{contact.lead_source_site}}
Page: {{contact.landing_page_url}}
Notes: {{contact.message}}
