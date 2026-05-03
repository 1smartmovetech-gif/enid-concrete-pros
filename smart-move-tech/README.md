# Smart Move Tech - Contractor Offer Setup

This folder contains the minimum viable assets to launch the contractor missed-call text-back offer.

## Files
- `ghl_setup_guide.md` - copy/paste build guide for GoHighLevel
- `.env.example` - environment variables template for safe local secret storage
- `test_ghl_api.sh` - simple API connectivity test script
- `contractor_offer.md` - offer, pricing, and outreach assets

## Next Steps
1. Rotate the exposed GoHighLevel token.
2. Save the new token in a local `.env` file based on `.env.example`.
3. Run `test_ghl_api.sh` to confirm API access.
4. Build the demo location/sub-account in GoHighLevel using `ghl_setup_guide.md`.

## Important
Do not paste live secrets into Discord or commit them to git.
