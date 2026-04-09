# Property OS

A simple operating system for sourcing, underwriting, managing, and closing real estate deals.

## Purpose

This is the command center for your property pipeline.

Use it to:
- capture new leads fast
- standardize deal review
- track follow-ups
- keep one canonical record per property
- make cleaner buy / pass decisions

## Structure

- `inbox/` - raw incoming leads and quick captures
- `properties/` - one folder or file per property/deal
- `templates/` - reusable templates
- `pipeline.md` - stage-based view of active deals
- `buy-box.md` - your acquisition criteria
- `daily-review.md` - operating checklist

## Recommended Workflow

1. Drop every new lead into `inbox/`
2. If it looks real, create a property file from `templates/property-template.md`
3. Score it against `buy-box.md`
4. Move it through `pipeline.md`
5. Record the next action before you stop

## Rule

Every property should have:
- a current stage
- a clear next action
- an owner
- a last updated date

If one of those is missing, the deal is slipping.
