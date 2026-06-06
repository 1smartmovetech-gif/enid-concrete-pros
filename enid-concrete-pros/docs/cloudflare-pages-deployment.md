# Cloudflare Pages Deployment

## Publish root
Use this folder as the deploy root:
- `enid-concrete-pros/site/`

## Build settings
Because this is a static site, use:
- Framework preset: `None`
- Build command: leave blank
- Build output directory: leave blank if uploading direct, or `/` equivalent for the selected root

## Best deployment method
### Option 1: drag-and-drop deployment
Fastest if you just want it live.

1. Log in to Cloudflare.
2. Go to **Workers & Pages**.
3. Click **Create application**.
4. Choose **Pages**.
5. Choose **Upload assets** if available.
6. Upload the contents of `enid-concrete-pros/site/`.

### Option 2: Git-connected deployment
Better for updates.

1. Push the site to a Git repo.
2. In Cloudflare Pages, connect the repo.
3. Set the root directory to `enid-concrete-pros/site`.
4. Leave build command empty.
5. Deploy.

## Custom domain
After the first deploy succeeds:
1. Open the Pages project.
2. Go to **Custom domains**.
3. Add `enidconcretepros.com`.
4. Add `www.enidconcretepros.com` if you want both.

## Notes
- `_headers` and `_redirects` have already been added to the site folder.
- The site already includes the GHL phone number and the concrete quote form embed.
