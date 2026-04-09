# Ingestion Process

Use this process for any book, PDF, article, video transcript, or reference guide shared with Ginger.

## Step 1: Capture

For each source, capture:

- title
- date received
- source type
- original filename or URL
- topic
- any notes about why it matters

## Step 2: Store

- Put local files in `reference-library/raw/`
- Put link records in `reference-library/links/`
- If the source cannot be downloaded, create a link record anyway

## Step 3: Index

Add a row to `index/master-index.md`.

## Step 4: Summarize

Create a summary in `summaries/` with:

- what it is
- core ideas
- best practices
- tactics worth reusing
- cautions / limitations

## Step 5: Distill

If the source is high value, convert it into:

- a playbook in `playbooks/`
- or a cross-source synthesis in `topics/`

## Step 6: Connect

Link useful outputs into the second brain when relevant, especially project notes and durable topic notes.
