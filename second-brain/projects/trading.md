# trading

## Summary
Trading systems, rules, indicators, prop-firm constraints, and related tooling.

## Status
Active / ongoing.

## Key Facts
- Prop-firm trading context exists
- Daily profit cap remembered as roughly 40-50% of cumulative profit to date
- Loss limit likely around $2k daily drawdown plus 1% per trade
- VPA 3C's indicator was drafted in Pine Script
- Discord/topic organization was proposed in part to keep trading work separated from other projects
- Nathan specified a daily 7:00 AM Central market brief for Discord covering futures indexes, key highs/lows, overnight range, support/resistance, trend bias, cross-asset context, economic calendar alerts, options positioning, bearish equity put setups, low-float/OTC catalyst names, and soft-commodities premium-selling ideas
- Nathan prefers commodities premium selling using far OTM options, roughly 30-90 DTE, often exiting around 80%-90% premium decay
- Supporting planning files exist: `daily_market_brief_master_spec.md` and `daily_market_brief_product_plan.md`

## Open Questions
- Current strategy ruleset
- Preferred indicators and dashboard structure
- What is live vs experimental
- Whether the VPA 3C's indicator is still a priority versus other trading workflows
- When automation for the daily market brief can be unblocked once gateway pairing/cron is fixed

## Related
- [[MEMORY]]
- [[second-brain/people/nathan-laughlin]]
- [[second-brain/projects/discord-ops]]
