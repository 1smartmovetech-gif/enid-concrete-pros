# Namecheap to Cloudflare Steps

## Goal
Point `enidconcretepros.com` from Namecheap to Cloudflare so Cloudflare Pages can serve the site.

## Recommended method
Change the domain nameservers at Namecheap to Cloudflare nameservers.

## Step-by-step
1. In Cloudflare, add the site `enidconcretepros.com`.
2. Cloudflare will assign two nameservers.
3. Copy those nameservers.
4. Log in to Namecheap.
5. Go to **Domain List**.
6. Click **Manage** next to `enidconcretepros.com`.
7. Under **Nameservers**, choose **Custom DNS**.
8. Paste the two Cloudflare nameservers.
9. Save.

## Then
- wait for Cloudflare to verify the domain
- go back to the Cloudflare Pages project
- add the custom domain

## Important
DNS propagation can be quick or it can take a few hours.

## If you want root + www
Use both:
- `enidconcretepros.com`
- `www.enidconcretepros.com`

The included `_redirects` file is already set to push `www` to the root domain.
