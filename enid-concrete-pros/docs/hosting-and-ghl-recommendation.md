# Hosting and GHL Recommendation

## Best practical setup for this project
Use a simple hosted frontend site and use GoHighLevel only for lead handling.

## Recommended split
### Frontend hosting
Use one of these:
- Cloudflare Pages
- Netlify
- lightweight WordPress hosting

### GHL handles
- tracking phone number
- embedded forms if desired
- lead notifications
- pipeline
- workflows
- missed-call text back if available

## Do you need GHL to host the site?
No.

For a site style like autoglassnola.com, GHL does not need to be the host. The site itself can stay simple and lightweight somewhere else, while GHL runs the lead capture and phone workflow.

## Best recommendation for Nathan
### Fastest path
- host the simple static site separately
- keep the GHL number on it
- optionally embed a GHL form later

### Why this is best
- faster to launch
- easier to clone
- lower complexity
- easier to keep the site lightweight and simple

## Current preview problem
The local preview server is not externally reachable on port 8765 right now, so the best next deployment move is to push the site to a public static host or put it behind an existing accessible web port.

## Recommendation order
1. publish the static version so you can view it publicly
2. keep GHL as the backend
3. embed form later if needed
4. only move to full WordPress if you decide you really need WordPress
