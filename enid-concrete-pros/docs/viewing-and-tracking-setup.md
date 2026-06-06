# Viewing and Tracking Setup

## How to view the current site
A local preview server was started from the `enid-concrete-pros/site/` folder on port `8765`.

If the VPS IP is reachable in browser, the preview URL format is:
- `http://<server-ip>:8765/`

If needed, this can also be proxied later behind a cleaner subdomain.

## Current preview root
- homepage: `/root/.openclaw/workspace/enid-concrete-pros/site/index.html`
- assets folder: `/root/.openclaw/workspace/enid-concrete-pros/site/assets/`

## Photos added
The prototype now includes five real image files:
- `assets/driveway.jpg`
- `assets/patio.jpg`
- `assets/stamped.jpg`
- `assets/slab.jpg`
- `assets/repair.jpg`

## Current tracking number
- `816-575-9987`

## Tracking number placement points
This number should appear in these locations:
- top utility bar
- hero phone display
- click-to-call CTA hrefs once added in WordPress
- contact page
- footer CTA blocks

## Best low-friction tracking options
### If GHL is active
- buy or assign a tracking number inside GHL
- use it on the site
- route to target provider or forwarding number
- enable missed-call text back if available

### If GHL is inactive
- use CallRail for easiest standalone tracking
- or Twilio for cheaper DIY routing

## Fastest path
1. confirm whether GHL is active
2. if yes, get one tracking number
3. replace placeholders with `816-575-9987`
4. convert every visible number to `tel:` links in WordPress
5. test call routing and lead notifications
