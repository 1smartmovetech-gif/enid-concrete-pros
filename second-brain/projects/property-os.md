# property-os

## Summary
Property operations, listing workflow, sales process, CRM automation, and systems around Nathan's property efforts.

## Status
Active / ongoing - Major expansion in progress.

## Key Facts
- Evansville property was listed for $875/month on owner financing
- Selling help was needed
- Florida property inquiry existed via teammate Julia, but prior details were still missing
- Colten Vargas (Facebook) sent the Stillwater deal at 217 S Lowry St, Stillwater, OK 74074
- HubSpot project `property-lead-automation` was created as part of property workflow automation work

## Recent Developments (April 14, 2026)
- **Property OS skeleton created**: Complete system with templates, pipeline stages, buy-box analysis, daily review
- **Hybrid architecture established**:
  - **Supabase**: Existing calculator.ruralhaven.co as underwriting engine (static HTML/JS + Supabase backend)
  - **Google Sheets**: For leads/contacts management (shared edit link created)
  - **Google Drive**: For document storage and website hosting
- **Lead intake system**:
  - Initial attempt: Google Apps Script web app (encountered deployment/auth issues)
  - Fallback solution: Google Form created by Nathan for simplicity
  - Lead intake form (lead-intake.html) ready for Google Form embedding
- **Supabase integration**: Credentials received and configured (anon key and secret)
- **Existing codebase**: Calculator app has deal pipeline, underwriting, property analysis features

## OKC Flip Budget Monitoring System (April 19-24, 2026)
- **Automated budget tracking**: System monitors OKC property flip budget with daily checks
- **Budget parameters**:
  - Total Budget: $75,000
  - Alert Threshold: $60,000 (80% of budget)
  - **Actual Spent**: $68,209.64 (90.9% of budget, $6,790.36 remaining)
- **Excel Reconciliation Complete** (April 22, 15:20 UTC): ✅ **Purchase price confirmed at $210,000** (not $160k), rehab budget verified at $75,000
- **Project Financials**:
  - Target ARV: $360,000
  - Total Basis: $285,000
  - Gross Margin: $75,000 (26.3%)
  - Net Profit (est): ~$53,400 after 6% sell costs
  - ROI on cash: ~71%
- **Excel Data Extracted** (April 24, 00:29 UTC): ✅ **Actual expenses confirmed from Excel tracker**
  - **Rehab total**: $68,209.64 (91% of $75k budget)
  - **Rehab breakdown**:
    - Labor: $20,160
    - Materials: $8,622
    - Roof: $9,945
    - Cabinets: $5,370
    - HVAC: $5,485
    - Floors: $3,780
    - Paint: $2,000
    - Appliances: $658
    - Landscaping: $600
    - Utilities/Insurance: $423
    - Water/Trash: $850
  - **Holding costs**: $11,590 (loan interest $10,317)
- **DB Sync Complete** (April 24, 23:02 UTC): ✅ **DB and Excel in perfect sync**
  - Both show $68,209.64 across 65 entries, net of 5 refunds ($1,373.11)
  - Budget threshold $60k TRIGGERED — exceeded by $8,209.64
  - Alert sent via cron
- **Expense tracking**: SQLite database (`/root/.openclaw/workspace/flip_expenses.db`) for logging project expenses
- **Excel Reconciliation Status**: ✅ Complete — data synced to DB
- **Reconciliation schedule**: Weekly Excel reconciliation every Wednesday at 10 AM CT
- **Alert system**: Cron-based alerts when expenses exceed $60,000 threshold
- **Current status**: ✅ DB and Excel are in sync at $68,209.64 across 65 entries
- **Warning**: Project 90% complete with only $6,790 remaining — tight cost control needed for any remaining scope
- **Discord alert delivery**: ❌ Bot lacks Send Messages permission — Nathan needs to enable it
- **Weekly check-in** (April 27): Rehab 90% complete, no new expenses, holding costs $11,589.91+, purchase price discrepancy ($160k vs $210k) unresolved
- **Excel reconciliation** (April 29): Purchase price ($160k vs $210k) and rehab budget ($55k vs $75k) both still unresolved. Actuals confirmed at $68,209.64 total. Holding costs $3,549.79/mo. Next reconciliation: May 6.
- **Weekly flip check-in** (May 4): No new expenses since May 2 reconciliation. Total remains $68,209.64, final rehab phase still ongoing, budget alert triggered by combined rehab + holding while rehab alone remains under the $75k line.
- **Excel reconciliation** (May 6): Excel read successfully, DB ↔ Excel match reconfirmed at $68,209.64 with 65 entries and no new expenses since March 20. Purchase price discrepancy ($160k in Excel vs $210k in prior notes) and rehab budget discrepancy ($55k calculator vs $75k tracking DB, $70,900 summary planned rehab) remain unresolved. Next reconciliation: May 13.
- **Weekly flip check-in** (May 11): Rehab still appears around 90% complete with no phase change, no new expenses, and project activity still looks dormant since March 20. Weekly check-in estimated holding costs around $11,995.96 and all-in total around $68,615.69, while keeping May 13 as the next Excel reconciliation and flagging listing-prep vs stalled-work ambiguity as the main operational blocker.
- **Excel reconciliation** (May 13): DB ↔ Excel match reconfirmed at $68,209.64, with DB at 66 entries only because of a $0 TestAlert row while Excel remains at 65. No new expenses since March 20. Purchase price discrepancy ($160k Excel vs $210k earlier notes) and rehab budget discrepancy ($55k calculator vs $75k DB, $70,900 summary planned rehab) both remain unresolved. Reconciliation estimated current holding near $16,300 and estimated all-in total near $72,920. Next scheduled check: May 20.
- **Weekly flip check-in** (May 18): Project still appears in final rehab at about 90% complete, with no new expenses and no phase change after 9 weeks dormant since March 20. DB still shows $68,209.64 across 66 rows, estimated current holding near $16,953, and estimated all-in total near $73,573. Operational focus remains whether the rehab is functionally complete and should move to listing prep, versus stalled with an unresolved punch list. Purchase price ($160k Excel vs $210k notes) and rehab budget ($55k calculator vs $75k DB) discrepancies remain open ahead of the May 20 reconciliation.
- **Excel reconciliation** (May 20): DB and Excel remained matched at $68,209.64 across 65 entries, with no new expenses since March 20. Estimated current holding was about $16,868 and estimated all-in total about $73,488. Purchase price remains unresolved because Excel still shows $160k in FLIP CALCULATOR O6 and Summary M8, while prior notes had treated $210k as confirmed. Rehab budget also remains unresolved with DB at $75k, Excel FLIP CALCULATOR C10 at $55k, and Summary planned rehab at $70,900.
- **Weekly flip check-in** (May 25): Project still appears in final rehab at about 90% complete, with no phase change after 10 straight weeks and no new expenses since March 20. DB and Excel remain synced at $68,209.64. Estimated current holding rose to about $17,521 and estimated all-in total to about $74,141. Main operational risk remains unresolved listing-prep versus unfinished-punch-list ambiguity while holding costs continue at about $81/day. Purchase price ($160k Excel vs $210k notes) and rehab budget ($55k calculator vs $75k DB vs $70.9k Summary) discrepancies remain unresolved ahead of the May 27 reconciliation.
- **Budget server built**: Port 8099 with full UI, integrated into TradingMaster journal tab

## Weekly Flip Check-in System (April 20, 2026)
- **Automated weekly reporting**: System generates detailed weekly check-ins for active property projects
- **Current Project**: 2015 NW 20th St, Oklahoma City, OK 73106
- **Project Status**: 90% complete (final rehab phase), target list date ASAP
- **Weekly Report Components**:
  - Phase progress tracking
  - Budget status and expense analysis
  - Immediate action items
  - System status and recommendations
- **Automation Features**:
  - Scheduled Monday morning check-ins (9:00 AM CT)
  - Detailed status reporting with emoji indicators
  - Action planning with clear next steps
  - Blockers identification and resolution tracking
- **Integration**: Works with existing budget monitoring system for comprehensive project management

## Current Focus
- Embed Google Form into lead-intake.html
- Build contact management UI
- Create dashboard view for leads/deals
- Expand pipeline stages in existing calculator
- Integrate Google Sheets with Supabase for unified view

## Technical Stack
- **Frontend**: HTML/JavaScript (existing calculator)
- **Backend**: Supabase (PostgreSQL + realtime)
- **Data**: Google Sheets (leads/contacts), Google Drive (documents)
- **Forms**: Google Forms (lead intake)
- **Hosting**: Netlify (existing calculator)

## Open Questions
- Current inventory and listing status
- Best workflow for inquiries, follow-up, and disposition
- Whether to maintain hybrid approach or migrate fully to Supabase
- Integration strategy between Google Sheets and Supabase

## Related
- [[MEMORY]]
- [[second-brain/people/nathan-laughlin]]
- [[second-brain/projects/openclaw]]
- [[calculator.ruralhaven.co]]
- [[Google Sheets - Leads/Contacts]]
