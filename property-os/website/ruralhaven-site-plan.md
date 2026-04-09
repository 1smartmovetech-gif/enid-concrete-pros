# Rural Haven Site Plan

## Recommendation

Build Rural Haven as a hybrid system:
- **Public website** for sellers, buyers, and credibility
- **Airtable backend** as the internal Property OS
- **No WordPress dependency for the operating system**

WordPress can be added later for SEO/blog content, but it should not be the operational core.

## Why this layout

This gives the best balance of:
- speed to launch
- operational clarity
- easy automation
- clean separation between public marketing and internal deal operations

## Architecture

### Public Layer
Domain: `ruralhaven.co`

Primary pages:
- Home
- Sell Your Property
- Available Properties
- Investors / Buyers
- About
- Contact

### Internal Layer
Airtable base with tables for:
- Leads
- Properties
- Contacts
- Offers
- Tasks
- Conversations
- Documents
- Funding
- Transactions
- External Links

### Automation Layer
- website forms -> Airtable
- Airtable automations -> tasks and follow-up triggers
- optional Discord notifications later

## MVP user flows

### Seller flow
1. Seller lands on Rural Haven
2. Clicks "Sell Your Property"
3. Completes intake form
4. Lead goes into Airtable
5. Property record is created or matched
6. Follow-up task is generated

### Buyer flow
1. Buyer lands on Investors / Buyers
2. Submits buying criteria
3. Contact is stored in Airtable
4. Buyer tagged by market / strategy / budget

### Internal ops flow
1. Nathan reviews new leads in Airtable
2. Moves property through deal stages
3. Logs notes, tasks, files, funding, and decisions
4. Publishes available properties to site when ready

## Recommended stack

### Phase 1
- Airtable for backend
- simple static or lightweight custom site for front-end
- forms wired into Airtable
- Cloudflare DNS for domain routing

### Phase 2
- WordPress only if needed for content marketing and SEO pages
- possible member area or investor portal later

## Pages to build first

### 1. Home
Purpose:
- explain what Rural Haven does
- give immediate CTA for sellers and buyers

Sections:
- hero
- credibility / positioning
- what we buy / how we help
- simple process
- CTA blocks

### 2. Sell Your Property
Purpose:
- capture motivated sellers

Sections:
- short trust-building intro
- benefits of selling direct
- intake form
- FAQ

### 3. Available Properties
Purpose:
- show current inventory or opportunities

Sections:
- listing cards
- property detail pages later

### 4. Investors / Buyers
Purpose:
- collect buyer criteria and investor interest

### 5. About
Purpose:
- humanize the brand

### 6. Contact
Purpose:
- direct outreach and general inquiries

## Branding direction

Recommended vibe:
- trustworthy
- plainspoken
- regional / land-and-home grounded
- not flashy guru real estate energy

Suggested positioning line:
- "Straightforward property solutions for rural and small-market owners."

## What we need from Nathan later
- domain/DNS access for `ruralhaven.co`
- Airtable access or API/base credentials
- logo/brand direction if available
- preferred contact email and phone for the site
- whether live listings should show publicly from day one
