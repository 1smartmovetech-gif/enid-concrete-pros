# WordPress Implementation Guide

## Recommended setup
- Theme: Twenty Twenty-Five or GeneratePress
- Editor: Gutenberg blocks only
- Forms: WPForms Lite or Fluent Forms
- SEO: Rank Math or Yoast

## Build order
1. Create global header and footer
2. Create homepage
3. Create primary service page
4. Create six supporting service pages
5. Create cost guide and how-to-choose page
6. Create About, Contact, Service Area, FAQ, Privacy Policy, Terms, Editorial Policy
7. Add menus and footer links
8. Add forms and CTA buttons
9. Enter SEO titles and meta descriptions
10. Validate mobile layout and links

## Reusable blocks to create
- top CTA bar with `[PHONE NUMBER]`
- service card grid
- quote-request form block
- disclaimer block
- FAQ block
- resource link block
- footer CTA block

## Menu structure
- Home
- Services
  - Concrete Contractors in Enid, OK
  - Concrete Driveway Installation
  - Concrete Driveway Replacement
  - Concrete Patio Installation
  - Stamped Concrete
  - Concrete Slab Installation
  - Concrete Repair
- Cost Guide
- How to Choose a Contractor
- Service Area
- FAQ
- Contact

## Footer links
- About This Guide
- Contact
- Privacy Policy
- Terms of Use
- Editorial Policy

## Important implementation notes
- keep one H1 per page
- add FAQ schema only on pages with visible FAQs
- do not add LocalBusiness schema with an invented address
- keep the independent-guide disclaimer visible on homepage and form-heavy pages
