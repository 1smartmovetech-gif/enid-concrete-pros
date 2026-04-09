# Reference Library

This is the ingestion and retrieval system for books, PDFs, articles, guides, and other reference material Nathan shares.

## Purpose

Turn raw reference material into durable, reusable knowledge.

## Structure

- `raw/` — original uploaded files when available locally
- `links/` — markdown records for link-based sources
- `summaries/` — concise source summaries
- `playbooks/` — actionable distilled workflows and best practices
- `topics/` — topic-level synthesis across multiple sources
- `index/` — master catalog and lookup tables
- `ingestion/` — intake queue, processing notes, and templates

## Workflow

1. Capture the source file or link.
2. Add an entry to the master index.
3. Create a summary with key takeaways.
4. Extract actionable methods into a playbook when useful.
5. Update topic notes when the source adds durable insight.

## Naming

Use lowercase kebab-case filenames when possible.

Suggested pattern:

`yyyy-mm-dd-short-title.ext`

Examples:

- `2026-04-09-auction-strategies.pdf`
- `2026-04-09-spotgamma-primer.md`

## Reliability rule

A source is not considered reusable long-term until it has:

- an index entry
- a stored file or durable link record
- a summary

That keeps the library useful instead of becoming a pile of uploads.
