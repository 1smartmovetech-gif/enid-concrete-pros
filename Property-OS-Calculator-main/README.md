# Property OS

Private property deal tracker and underwriting workspace built with plain HTML, CSS, JavaScript, and Supabase.

## What it does

- Tracks deals across pipeline stages
- Stores underwriting assumptions in Supabase per signed-in user
- Calculates core acquisition metrics like NOI, cap rate, cash-on-cash, DSCR, and break-even occupancy
- Shows next actions, activity timeline, and comparable sales
- Supports intake records for listing URLs, PDFs, and raw text imports
- Includes scenario sliders for rent growth and exit cap sensitivity
- Can auto-process queued imports through a Netlify function when `OPENAI_API_KEY` is configured

## Run it

Open [index.html](C:\Users\Admin\Desktop\Codex Projects\index.html) directly in a browser, or serve the folder locally:

```powershell
python -m http.server 8000
```

Then visit `http://localhost:8000`.

## Netlify extractor setup

Add these environment variables in Netlify for OpenAI:

- `OPENAI_API_KEY`
- `OPENAI_MODEL` optional, defaults to `gpt-4o-mini`

Optional fallback provider:

- `EXTRACTION_PROVIDER=ollama`
- `OLLAMA_BASE_URL` pointing to a reachable Ollama API server
- `OLLAMA_MODEL` optional, defaults to `gemma3`
- `OLLAMA_API_KEY` optional if your Ollama endpoint is protected

The extractor runs at `/.netlify/functions/extract-import` and turns queued listing URLs, raw text, and PDFs into draft deals in Supabase.

For blocked listing sites, the extractor now attempts a reader-style proxy fallback before failing.

The Ollama fallback is best for URL and pasted-text extraction. PDF extraction still uses the OpenAI path.
