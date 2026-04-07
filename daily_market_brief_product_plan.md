# Daily Market Brief — Prep Plan

## Goal
Prepare a trader-focused daily market brief product that can eventually deliver by Discord and email.

## Immediate Deliverables
- Final master spec for the daily brief
- Production prompt for future automation
- Initial workflow notes for sources and operations
- Product plan for eventual email signup

## Delivery Targets
### Personal Use
- Post to Discord channel each weekday at 7:00 AM Central
- Include event alerts at:
  - T-2 days
  - T-1 day
  - T-15 minutes

### Product Version
Potential future distribution channels:
- email newsletter
- Discord channel(s)
- web archive / dashboard

## Source Categories
### Market / Macro
- futures market data
- economic calendar
- Fed / rates / dollar context
- overnight global markets

### Options / Volatility
- SpotGamma or similar options-structure input
- unusual options flow when available
- VIX / VIX futures context

### Commodities / Softs
- coffee and sugar fundamentals
- weather
- crop outlook
- export / import policy
- currency effects
- supply disruptions

### Equity Setups
- bearish equity put candidates
- low-float catalyst names
- OTC catalyst names
- InvestorHub / X chatter only as secondary confirmation

### Custom Inputs
- forwarded daily emails
- user-supplied documents or books

## Product Differentiation
This is not a generic market newsletter. It is positioned around:
- futures and options traders
- options positioning / gamma context
- event-risk awareness
- commodity premium-selling strategy
- equity puts watchlist
- low-float / OTC catalyst watchlist

## Email Signup Product Concept
### MVP
- simple landing page
- email signup form
- daily send list
- one morning edition

### Future Segmentation
Possible editions:
- futures + options trader edition
- commodity premium-seller edition
- momentum / low-float edition
- premium version with deeper setups

## Ops Notes
- Scheduling is currently blocked by gateway pairing / cron access issue.
- Until fixed, the report can still be generated manually.
- Once gateway works, set up:
  - weekday 7:00 AM Central brief
  - economic event reminders at T-2d / T-1d / T-15m

## Recommended Next Steps
1. Fix gateway pairing / cron
2. Convert master spec into compact production prompt
3. Generate first live brief
4. Refine sections based on usefulness
5. Build email signup MVP
