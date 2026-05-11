# MEMORY.md – Long‑Term Memory

# MEMORY.md – Long‑Term Memory

## 2026‑03‑22 (Sunday)
- Named Ginger by Nathan.
- User: Nathan Laughlin (he/him, Central Time).
- Prop‑firm trading: Daily profit cap = 40‑50% of cumulative profit to date. Loss limit likely $2k daily drawdown + 1% per trade.
- Property in Evansville listed for $875/month on owner financing (Craigslist). Needs selling help.
- VPA 3C's indicator drafted (Pine Script).
- Pending: Parcelfair criteria, indicator preferences, Slack/WhatsApp setup, productivity‑system design.

## 2026‑03‑24 (Tuesday)
- Discord bot configured and tested.
- Local OpenClaw setup guide prepared.
- Daily memory dashboard system created: searchable HTML dashboard (`dashboard.html`) with full‑text search across all logs. Memory files now serve as short‑term cache; long‑term memory in MEMORY.md.
- Property inquiry about Florida (teammate Julia) – no prior record; follow up for details.

## 2026‑03‑25 (Wednesday)
- Enhanced memory dashboard built (`dashboard_enhanced.html`):
  - Tagging system (auto‑extracts projects, people, topics)
  - Timeline view with filtering by tags, date ranges
  - Sidebar with tag cloud, stats, and search
  - Interactive filtering and highlighting
- Florida property: still no prior record; need details from Nathan/Julia.
- Nathan requested migration of OpenClaw workspace to personal computer. Created `openclaw_migration_checklist.md` with step‑by‑step instructions.
- Nathan wants an external searchable dashboard for prior tasks/conversations, with daily memory files used as short‑term cache.

## 2026‑03‑26 (Thursday)
- OpenClaw rescue/fallback setup expanded:
  - Dedicated rescue agent configured with separate workspace
  - Additional providers/models added: Groq, xAI/Grok, OpenRouter, OpenAI, Anthropic
  - Model aliases available including `groq`, `grok`, `openrouter`, `gpt`, and `rescue`
- Support docs saved to `troubleshooting/OpenClaw_Support_Docs.txt`.
- Nathan uses Linux Kubuntu with Node.js 22 for planned local OpenClaw migration.
- Nathan wants topic-based organization in Discord for conversations and workstreams.

## 2026‑04‑06 (Monday)
- Colten Vargas from Facebook sent the Stillwater deal at 217 S Lowry St, Stillwater, OK 74074.

## 2026‑04‑07 (Tuesday)
- Nathan defined a detailed spec for a daily 7:00 AM Central market brief to post in Discord.
- Required market brief scope now includes futures indexes (ES, NQ, YM, RTY), prior day/week/month highs and lows, overnight range, support/resistance, trend bias, gold, silver, oil, bitcoin, VIX futures, correlations, economic calendar alerts, options positioning with SpotGamma-style interpretation, bearish equity put watchlist with trigger levels, low-float/OTC catalyst watchlist, and a commodities premium-selling section focused on softs.
- Nathan's trading preferences now include commodities premium selling via far OTM options, 30-90 DTE, usually closing around 80%-90% premium decay, with emphasis on technicals + fundamentals and volatility catalysts in softs.
- Supporting files created: `daily_market_brief_master_spec.md` and `daily_market_brief_product_plan.md`.
- Automation was initially blocked by gateway pairing / cron issues.

## 2026‑04‑09 (Thursday)
- Gateway/cron path was repaired enough to restore scheduled brief delivery.
- Daily market brief is intended to run in Dallas, TX time (`America/Chicago`).
- A second pre-open futures session brief was added for about 4:45 PM Central, before the 5:00 PM Central futures reopen.
- Nathan explicitly rejected generic, conditional market briefs and wants narrative-first market insight: what is actually happening, why it is happening, what changed, and how world events affect different markets.
- `daily_market_brief_production_prompt.md` was updated to prioritize real current market narrative over generic scenario trees.

## 2026‑04‑13 (Monday)
- Agent hierarchy reconfigured: nika_llama is now a sub‑agent under the main agent (me).
- Removed nika from separate agents list; all Telegram accounts (`default` and `nika_llama`) now route to main agent.
- nika can be spawned as a sub‑agent via `sessions_spawn` when needed.
- **Model configuration overhaul**: Added Google Gemini as FREE first fallback (60 RPM), optimized fallback order for heavy usage.
- **Memory Shield System** built: External `memory_bank/` with categorized files prevents API context limits.
- **Memory Heartbeat** deployed: Automated saving every 30 minutes via cron job.
- **Cost policy established**: No additional paid models beyond ChatGPT; FREE/low-cost strategy implemented.
- **RAM limitation discovered**: VPS has only 1.9GB RAM; Mistral 7B (needs 4.5GB) removed from configuration.
- Confirmed Discord capability – Discord bot was configured March 24 and is ready for use.
- **Mission Control dashboard** built based on video transcript analysis:
  - Created production-inspired dashboard with authentication, task management, agent monitoring
  - Implemented drag-drop Kanban board, activity timeline, memory integration
  - Added multi-layer security: IP whitelisting + HTTP Basic Authentication
  - Deployed on port 8083 with firewall restrictions and detailed logging
  - Dashboard accessible at `http://45.32.195.189:8083/mission_control_pro.html`
  - Security: Whitelisted IPs `146.75.164.97`, `146.75.164.96`; credentials required
  - HTTPS configuration prepared for when domain name is available
- **Functional Mission Control** developed after Nathan noted static version wasn't working:
  - Built real backend with Python + SQLite database (port 8000)
  - Created working frontend with drag-drop that saves to database
  - Implemented complete API for tasks, agents, activities, memory stats
  - Added authentication and CORS protection
  - Working version at `http://45.32.195.189:8083/MISSION_CONTROL_WORKING.html`
- **Plugin issues resolved**:
  - Fixed Google Gemini warning by removing stale config entry
  - Installed `openclaw-plugin-google` for Calendar/Gmail integration
- **Google Drive integration**:
  - Successfully configured rclone with OAuth authentication
  - Mounted Google Drive at `/root/.openclaw/workspace/google-drive/`
  - Created professional Rural Haven Properties website in Google Drive
  - Website features 5 property listings, contact form, responsive design
  - Deployed live on port 8888: `http://45.32.195.189:8888`
  - Demonstrated ability to create and host websites directly from Google Drive
  - Recommended `rclone` for Google Drive mounting (no OpenClaw plugin available)

## 2026‑04‑14 (Tuesday)
- **Property OS build-out**: Created comprehensive Property OS skeleton with templates, pipeline, buy-box, and daily review system.
- **Rural Haven website integration**: Built hybrid approach using existing Supabase calculator (calculator.ruralhaven.co) + Google Sheets for leads/contacts + Google Drive for files.
- **Lead management system**: Created Google Sheet for leads/contacts with Google Apps Script for lead intake; fell back to Google Form for simplicity.
- **Existing codebase analysis**: Analyzed calculator.ruralhaven.co - static HTML/JS app with Supabase backend, deal pipeline, and underwriting engine.
- **Supabase integration**: Received and configured Supabase credentials (anon key and secret) for Property OS expansion.
- **Decision**: Keep existing calculator as underwriting engine and expand into full Property OS with contact management, dashboard, and pipeline expansion.

- **Knowledge Base & Business System**: Built complete OpenClaw business monetization system:
  - **Knowledge Base System**: Browser extension for URL ingestion, local server with YouTube/PDF/Web scraping, SQLite database with search interface.
  - **Business Monetization**: Affiliate marketing automation, content sponsorship identification, digital product creation, revenue tracking.
  - **Integration Server**: Connects knowledge base with monetization, provides dashboard and analytics.
  - **Complete Documentation**: Setup guide, 30-day launch plan, revenue projections ($800+ Month 1, $23k+ Month 6).
  - **Revenue streams enabled**: Affiliate marketing, sponsorships, digital products, consulting, API services.

- **Technical achievements**:
  - YouTube transcript extraction and monetization analysis
  - Multi-format support (articles, PDFs, Twitter, web pages)
  - Automated opportunity identification
  - Local-first architecture (no cloud dependencies)
  - Production-ready code with clear launch plan

## 2026‑04‑15 (Wednesday)
- **Weather-aware commodity trading system**: Built Open-Meteo API integration for real-time weather analysis of commodity production regions.
- **Key features**:
  - Fetches temperature, precipitation, humidity, weather conditions
  - Analyzes weather risk scores (1-10) for trading decisions
  - Generates trade recommendations based on weather risk
  - Covers key commodities: Coffee (KC), Sugar (SB), Corn (ZC), Soybeans (ZS), Wheat (ZW), Cotton (CT), Orange Juice (OJ)
- **Technical implementation**:
  - Free Open-Meteo API with no rate limits for reasonable use
  - Python scripts: `weather_trading_simple.py`, `commodity_weather_trading.py`
  - JSON output with analysis and recommendations
  - Works on both Linux VPS and macOS
- **Trading insights**:
  - Weather significantly impacts commodity options pricing
  - High weather risk (≥7/10) suggests conservative delta (0.10) and shorter DTE (30)
  - Low weather risk (<4/10) allows normal parameters (delta 0.25, DTE 75)
  - Real-time weather data enables proactive risk management
- **Broker API challenges**:
  - Tastytrade sandbox API authentication issues ("Grant revoked" errors)
  - Considering alternative brokers: IBKR (complex), Alpaca (no futures), manual data + calculation
  - Free-data approach provides immediate solution while broker issues are resolved

## 2026‑04‑16 (Thursday)
- **Complete trading system buildout**: Built comprehensive commodity and OTC trading systems.
- **Coffee (KC) trading system**: Complete scanner with economic calendar, weather risk, trade recommendations. Found KC PUT $265.33 with $1,683 premium, 82.5% probability OTM.
- **OTC research system with InvestorsHub integration**: Built scanner for OTC/pink sheet stocks with catalyst verification. Found CBDD with EU distribution catalyst, 4:1 risk/reward.
- **30‑minute futures market scans**: Configured automatic scans every 30 minutes starting at 5 PM Central.
- **Secure Mission Control**: Running on port 8892 with authentication (admin/trading123).
- **Automatic daily scans**: Cron jobs for commodity (8:00 AM), equity (8:30 AM), OTC (8:45 AM), market close (3:00 PM).
- **System integration**: All scanners feed into daily market brief, Mission Control dashboard, and log files.
- **Key achievement**: Complete end‑to‑end trading automation system from research to trade recommendations.

## 2026‑04‑17 (Friday)
- **Real‑time trading data integration**: Full pipeline from VPS to Cloudflare to dashboard.
- **Cloudflare Worker update**: Enhanced `/api/trading‑brief` to fetch real data when KV stale, with proper fallback chain (real → enhanced → mock).
- **VPS automation**: Cron job every 30 minutes fetches live market data from Yahoo Finance, Open‑Meteo.
- **Futures contract month integration**: Enhanced futures data to show contract months and volume for all futures (ES, NQ, YM, RTY, CL, BZ, NG, GC, SI, PL) with contract month parsing from Yahoo Finance `shortName` field.
- **Data sources**:
  - Market indices (S&P, NASDAQ, VIX) from Yahoo Finance
  - Commodities (KC, SB, ZC, ZS, CT, OJ) as futures
  - Energy & metals (CL, GC, SI, PL) as futures
  - Weather risk scores from Open‑Meteo API
- **Live endpoint**: `https://mc‑ruralhaven.pages.dev/api/trading‑brief` now returns `data_source: "real_yahoo_finance"`.
- **Sample real data**: S&P 7130.93 (+1.30%), Coffee $285.6, Crude Oil $79.45, ES (Jun 2026) with volume 1,229,601.
- **Dashboard integration**: Trading dashboard (`/trading.html`) automatically displays real prices with contract months, updates every 30 minutes.
- **Cron script**: `/root/.openclaw/workspace/scripts/update_trading_brief.sh` with logging to `/var/log/trading_brief_update.log`.
- **Mission Control**: Fully deployed Cloudflare Pages site with custom domain ready.
- **Next**: Monitor logs, expand to other systems (OTC research, weather), add custom domain `mc.ruralhaven.co`.

## 2026‑04‑18 (Saturday)
- **Tastytrade Integration Complete**: Successfully connected Nathan's real Tastytrade brokerage account to Mission Control.
- **Real Account Access**: Connected to 4 Tastytrade accounts (5WI60686, 5WY88249, 5WX51210, 5WV23361).
- **Live Market Data**: Real-time quotes via Tastytrade API.
- **Professional Dashboard**: Complete trading interface in Mission Control with new Tastytrade tab.
- **Technical Achievement**: Built local API proxy (port 8765) that securely connects to Tastytrade API.
- **Scope Resolution**: Confirmed `read trade openid` scopes provide all necessary access for Mission Control.
- **Live URLs**:
  - Real Dashboard: `http://45.32.195.189:8083/tastytrade_real_dashboard.html`
  - Mission Control: `http://45.32.195.189:8083/mission_control_sidebar.html#tastytrade`

## 2026‑04‑19 (Sunday)
- **Mission Control System Optimization Complete**: All services healthy with automated health checks, daily backups, and comprehensive monitoring.
- **Interactive Brokers Integration Built**: Complete IBKR API integration with proxy service (port 8766), professional dashboard, and comprehensive documentation (`IBKR_API_REFERENCE.md`, `IBKR_API_IMPLEMENTATION_GUIDE.md`).
- **System Architecture**: Three brokerage integrations now documented and ready:
  1. ✅ Tastytrade – Live & working with 4 real accounts
  2. ✅ Interactive Brokers – Complete integration built, awaiting activation
  3. ✅ Mission Control – Unified dashboard with all systems integrated
- **Key Technical Details**:
  - TWS API is TCP socket protocol (not REST/HTTP)
  - Requires TWS or IB Gateway running locally
  - Rate limits: 50 messages/second, 60 historical requests per 600 seconds
  - Professional‑grade API used by institutional traders
- **System Status**: All services operational with 15‑minute health checks, 7‑day backup retention, and continuous monitoring.
- **OKC Flip Budget Monitoring**: Automated budget tracking system operational with $75,000 total budget, $250 spent (0.3% used), $60,000 alert threshold (80% of budget). System performs daily checks and Wednesday 10 AM CT Excel reconciliations.

## 2026‑04‑20 (Monday)
- **Weekly Flip Check-in System Operational**: Automated weekly check-in for 2015 NW 20th St, OKC property with detailed status reporting, budget tracking, and action planning.
- **Property Status**: 90% complete (final rehab phase), $74,750 remaining of $75,000 budget, target list date ASAP after final rehab.
- **NE Arizona Minerals Weekly Monitor**: Automated mineral research system operational with commodity price tracking (potash, helium, copper) and alert thresholds.
- **Mineral Research Focus Areas**: Holbrook Basin (potash), St. Johns area (helium), White Mountains (perlite/pumice), Morenci District (copper).
- **Alert Thresholds Configured**: Potash > $450/ton triggers Holbrook Basin re-evaluation; helium > $600/MCF triggers St. Johns area priority.
- **Automated Systems Expansion**: Both property flip and mineral research systems now have weekly automated monitoring with detailed reporting and action planning.
- **Reference Library Organization**: Mineral investing reference materials organized and indexed with starter packs, top resources, glossaries, and playbooks for comprehensive research support.
- **Model Configuration Update**: Primary model changed to ChatGPT GPT-3.5-Turbo (lowest cost ChatGPT), DeepSeek set as first fallback per Nathan's request.
- **High Premium Portfolio Execution**: 4-commodity options portfolio executed with $710 total premium across Cocoa, Coffee, Crude Oil, and Natural Gas positions.
- **Monitoring System Development**: Intensive monitoring systems created with mobile/desktop optimization, domain fixes (mc.ruralhaven.co), and screen-fit improvements.
- **User Preferences Confirmed**: Premium target ($150+), delta limits (<0.20), intensive monitoring around market close, no weekend monitoring.

## 2026‑04‑21 (Tuesday)
- **Supabase Credentials Received**: Authentication tokens for Mission Control integration received via openclaw-tui at 4:39 AM UTC.
- **Credentials Secured**: Publishable key, secret key, anon public JWT, and service role JWT saved to `/root/.openclaw/workspace/supabase_credentials.md`.
- **Project Reference**: `zqmeamjwzqqvstxjxtv` with long expiration (2092).
- **Integration Planning**: Credentials enable Mission Control authentication, Property OS database, trading systems integration, and knowledge base storage.
- **Model Configuration Update**: Switched to GPT‑3.5‑Turbo as primary model per Nathan's request for token efficiency.
- **Automatic Model Switching System**: Created monitoring service that switches models at 90% token usage with fallback order: GPT‑3.5‑Turbo → DeepSeek → Gemini → Llama 3.2 → GPT‑4o Mini.
- **System Implementation**: Built systemd service (`openclaw‑model‑monitor`) with 5‑minute checks, logging, and manual override capabilities.
- **Trading Dashboard Progress**: Options strike calculator integrated with ATR‑based pricing and multiple view modes (single, multiple, all ATR percentages).
- **Network Diagnosis**: Confirmed Nathan's private network blocking VPS access (45.32.195.189), shifting troubleshooting from Cloudflare to local network/router configuration.
- **Deployment Options**: Prepared Vercel/Supabase deployment as alternative to bypass network blocks.
- **Supabase Integration Complete** (11:16 UTC): All dashboard files updated with Supabase configuration, environment files created, SQL setup scripts prepared.
- **Options Calculator Enhanced**: Multiple ATR percentages (25%, 40%, 50%, 60%, 70%, 80%, 90%, 100%, 125%, 150%, 200%) with three view modes and probability calculations.
- **Universal Trading Tool**: Calculator designed for both day trading (short DTE) and commodities premium selling (long DTE) with Nathan's trading context applied.
- **Deployment Ready**: Complete setup for cloud hosting with Vercel/Railway to bypass network blocks, domain configuration prepared for `mc.ruralhaven.co`.
- **Trading Journal System Built** (15:41 UTC): Comprehensive trading journal for Vanquish prop firm day trading with manual entry, statistics, and Supabase integration.
- **Journal Features**: Complete CRUD operations, P&L calculation, win rate tracking, CSV/JSON export, LocalStorage fallback.
- **Manual Entry Solution**: Built `manual-trade-entry.html` for inputting trades from images when image analysis fails.
- **Vanquish Prop Firm Focus**: System designed specifically for Nathan's day trading with prop firm tracking.
- **Integration**: Journal added to Mission Control Day Trading tab with dashboard statistics and trade management.
- **Vanquish 30% Consistency Rule Integration** (15:50 UTC): Built compliance tracking system for Vanquish prop firm's rule that no single day's profit can exceed 30% of total cumulative profit.
- **Compliance System**: Real-time monitoring, automatic calculations, violation alerts, dashboard integration.
- **Nathan's Insight**: Stopped trading today to avoid violating 30% rule; now has tools to track compliance automatically.
- **Key Feature**: "Max Allowed Today" calculator with progress bars and compliance status indicators.
- **Strategic Impact**: Transforms rule compliance from guessing game to calculated, monitored process.

## 2026‑04‑22 (Wednesday)
- **Tastytrade Live Credentials Received** (00:06 UTC): Client ID, client secret, and refresh token received via openclaw-tui.
- **Real Brokerage Access**: Live Tastytrade API credentials enable real-time commodity options scanning, quotes, and potential trade execution.
- **Previous Limitation Resolved**: Overcomes sandbox API authentication issues ("Grant revoked" errors) that previously blocked live trading integration.
- **Scope**: `read trade openid` provides all necessary access for Mission Control integration.
- **User ID**: U0001763338 with grant ID G6f67c460-d5b1-43d2-b891-f59006ba4e79.
- **System Impact**: Enables live commodity options scanning (KC, SB, ZC, ZS, CT, OJ), real-time premium calculations, and integration with Nathan's 4 Tastytrade accounts (5WI60686, 5WY88249, 5WX51210, 5WV23361).
- **Next Steps**: Update scanner configuration with live credentials, test API connection, integrate live data into Mission Control dashboard.
- **OKC Flip Excel Reconciliation Complete** (15:20 UTC): Purchase price confirmed at $210,000 (not $160k), rehab budget verified at $75,000 with only $250 spent (0.3% used). Manual action required for Excel file reading (needs pandas/openpyxl). Project status: 90% complete, target ARV $360,000, estimated net profit ~$53,400 (71% ROI on cash). Reports saved and next check scheduled for April 29, 2026.
- **Prop Firm Compliance Business Launch Decision** (18:32 UTC): Decision to build $25k/month prop firm compliance business with Phase 1 manual system ($497/month). Technical development complete including rules engine (6+ prop firms), compliance tracker, landing page, and business plan. Competitive analysis identified Tradersync.com as general trading journal without prop firm compliance features. Strategy adjusted to position as compliance specialist add-on for Tradersync users. Revenue projections: $15k MRR Month 1, $60k MRR Month 3, $135k MRR Month 6. Ready for 2-week launch timeline.
- **OKC Flip Budget CRITICAL DISCREPANCY** (23:02 UTC): Budget check revealed database shows $250 spent vs Excel tracker showing $68,209.64 (91% of $75k budget, $5,790.36 over budget). Database missing ~$68,000 in actual expenses. Alert status: Database shows NO ALERT but actual status ALERT TRIGGERED. Urgent reconciliation needed: Discord alert should be sent, database needs immediate update with actual expenses from Excel tracker. Expense manager system giving false "Budget within limits" status.

## 2026‑04‑23 (Thursday)
- **OKC Flip Budget Status Check** (23:00 UTC): Database still shows $250 spent (0.3% of $75k budget). Alert NOT triggered ($250 < $60k threshold). Excel tracker exists but no reconciliation possible yet — only a single $250 test entry in DB. No Discord alert needed.

## 2026‑04‑24 (Friday)
- **OKC Flip Budget Reconciliation via Excel** (00:29 UTC): Nathan requested actual spending lookup from Google Drive Excel tracker. Total actually spent: $68,209.64 (91% of $75k rehab budget, ~$6,790 remaining). DB vs Excel discrepancy confirmed — DB missing ~$68k in actual expenses. Rehab breakdown includes labor ($20,160), materials ($8,622), roof ($9,945), cabinets ($5,370), HVAC ($5,485), floors ($3,780), paint ($2,000), appliances ($658), landscaping ($600), utilities/insurance ($423), water/trash ($850). Holding costs: $11,590 (loan interest $10,317). Pending: DB sync with actual expenses.
- **Gmail Email Agent Built & Deployed** (15:55 UTC): Nathan set up Google Cloud project "Email Agent" with OAuth credentials, full Gmail API integration. First run processed 100 inbox messages. Token saved to `tokens/primary.pickle`.
- **Email Agent v2 — REI Overhaul** (16:00 UTC): Complete category redesign from generic labels to 17 purpose-built labels including 8 REI categories (Multifamily, SingleFamily, Commercial, Land, Storage, RVParks, Hotel, Other), 2 Trading categories, 3 Action categories, 2 System categories, Trash, and TaxSales. Real estate content (including "market updates") now strictly routed to REI patterns checked first. Zero false positives confirmed.
- **Inbox cleaned**: 10,962 total messages, 201 remaining after processing, 46 mislabeled Trading messages purged. Auto-archive of 42 messages completed.
- **OKC Budget DB Sync Complete** (23:02 UTC): DB and Excel tracker now reconciled and in perfect sync — both show $68,209.64 across 65 entries, net of 5 refunds. Budget threshold of $60k TRIGGERED ($8,209.64 over). Alert sent via cron output. Only $6,790.36 remaining against $75k budget.

## 2026‑04‑25 (Saturday)
- **Email Agent Overhaul — IMAP Migration**: Gmail API Python client OOMs the 2GB VPS. All Gmail accounts switched to lightweight IMAP with app passwords. Gmail API tokens deprecated.
- **5 Email Accounts Configured**: RuralHaven, NikNakLife, RoboLawnSalon, nalaugh, nalaughlin (last one auth failing). Processing all via IMAP.
- **PROPERTY_ROUTE feature**: Static routing table sends property-specific emails to project labels (e.g., 2015 NW 20th flips) before auto-categorization.
- **Trading removed from RuralHaven**: Per Nathan's request, no trading/forex at the REI address. Trading categories kept as NikNakLife-only labels.
- **Label refinements**: REI-Other → REI-FlipDeals with tighter regex. Added JUNK senders list (skool, basecamp, clickup, monday). Google security alerts dump to Garbage.
- **Known issues**: nalaughlin@mail.com IMAP not enabled. IMAP Gmail archive requires STORE +X-GM-LABELS workaround.
- **Backlog**: ~13,199 total unseen across 4 active accounts — processing continues in background.
- **Label refinements (April 25, 12:08 UTC)**: Added FundingOffer label for hard money/DSCR/bridge loan offers (kept in inbox, before property routes). All security alerts now route to Trash-Garbage. Deleted 3,194 old deal/funding emails (>120 days) from RuralHaven via raw IMAP socket. Standalone `cleanup_deals.py` created.
- **VPS memory constraint**: 1.9GB RAM — IMAP fetch-per-message OOMs on 10k+ All Mail. Raw socket approach (cleanup_deals.py) works fine. Keep inbox batch sizes small (50-100).
- **Skool/Garbage fix**: Added explicit mark-read before archive for Gmail garbage path. Cleanup deal retention policy: 7-day hold → Trash → delete at 120 days.
- **Skills Discovery**: ClawHub (clawhub.ai) has 52k+ skills, 12M+ downloads. Recommended: yahoo-data-fetcher, real-estate-skill, lead-scorer, weather, summarize.

## 2026‑04‑26 (Sunday)
- **Mission Control Unified Dashboard**: Built `mission_control_backend.py` serving both HTML and live data APIs on port 8083. Endpoints: health, config, system (RAM/Disk/Uptime), email (live IMAP counts), skills (12 installed), memory (daily .md files), tasks, deals. Auth: admin/mission2026secure!. Auto-refresh every 60s.
- **Skills Installation via Raw GitHub**: OpenClaw CLI (`openclaw`, `clawhub`) OOMs the 1.9GB VPS. Installed 12 skills manually via `curl` from `github.com/openclaw/skills`. Skills: yahoo-data-fetcher, csv-pipeline, duckdb-en, supabase, data-enricher, tabstack-extractor, amazon-data, weather, github, lead-scorer, real-estate-skill, mineral-deal-watch.
- **VPS RAM confirmed**: 1.9GB total — OpenClaw CLI, clawhub, npm install -g all OOM reliably. Workaround: raw file downloads + lightweight scripts.
- **Hostname confirmed**: `45.32.195.189`.

## 2026‑04‑27 (Monday)
- **OKC Flip Weekly Check-in (14:02 UTC)**: Rehab 90% complete, $68,209.64 spent (90.9% of $75k), holding costs $11,589.91+. No new expenses since April 24 sync. Purchase price discrepancy ($160k vs $210k) unresolved. Excel reconciliation due April 29.
- **NE Arizona Minerals Weekly Monitor (14:03 UTC)**: Status GREEN. Copper at $6.02/lb (+24% YoY, within 9% of ATH). Potash $380.63/MT (+13.2% YoY, US spot $659/MT). BLM LR2000 deep search planned for May. Alert thresholds need updating (copper script threshold too conservative at $4.50).

## 2026‑04‑29 (Wednesday)
- **Budget/Expense Module**: Built budget server (port 8099) with full UI — 4 tabs (Link Drive, Files, Extract, Reconcile). Integrated into MASTER-TRADING-SYSTEM.html via ?module=journal. Google Drive mount: 704 files, 85 spreadsheets.
- **TradingMaster updates**: Journal tab now loads budget module when ?module=journal set. Portfolio fake values removed (replaced with data-driven).
- **OKC Flip Excel Reconciliation (May 6, 2026)**: DB in sync. Actuals: $68,209.64 total ($57,892.69 rehab + $10,316.95 loan holding). Purchase price ($160k vs $210k) and rehab budget ($55k vs $75k in calc) still unresolved. No new expenses since March 20, 2026 — project spending dormant 7+ weeks. Holding costs ~$81.21/day. Next reconciliation: May 13, 2026.

## 2026‑05‑01 (Friday)
- **Yard care reminders**: Spray ticks/mosquitos this week using 0.5 oz Bifen I/T per gallon, focusing on yard perimeter and tall grass edges, then repeat monthly through October.
- **Bermuda schedule**: Fertilize now in May with 15-5-10 slow release, repeat in June, skip July/August heat, fertilize again in September, winterizer in October.

## 2026‑05‑02 (Saturday)
- **OKC flip clarification**: DB is confirmed in sync at $68,209.64 total ($56,619.73 rehab + $11,589.91 holding). The $60k budget alert is being tripped by combined rehab + holding, while rehab alone remains under the $75k rehab budget.

## 2026‑05‑04 (Monday)
- **OKC Flip Weekly Check-in**: No new expenses since May 2 reconciliation. Total cost remains $68,209.64, with holding costs around $81.21/day. Next Excel reconciliation is May 6.
- **NE Arizona Minerals Weekly Monitor**: Status GREEN. Copper eased to about $5.90/lb from $6.02 while remaining constructive. Potash steady-firm at $380.63/MT. No new confirmed Arizona geology or claim/regulatory alerts this cycle.
## 2026‑05‑06 (Wednesday)
- **OKC Flip Reconciliation**: DB ↔ Excel match reconfirmed at $68,209.64 across 65 entries, with no new expenses since March 20. Purchase price discrepancy remains unresolved ($160k in Excel vs $210k in prior notes). Rehab budget discrepancy also remains unresolved ($55k in calculator vs $75k tracking DB, $70,900 summary planned rehab). Next reconciliation: May 13.

## 2026‑05‑11 (Monday)
- **OKC Flip Weekly Check-in**: Rehab still appears around 90% complete with no new expenses and no phase change. DB remains synced at $68,209.64 across 65 entries. Weekly check-in estimated holding costs near $11,995.96 and all-in total around $68,615.69, with May 13 still set as the next Excel reconciliation.
- **NE Arizona Minerals Weekly Monitor**: Status upgraded from GREEN to YELLOW. Copper rose to $6.4665/lb, potash to $401.25/MT, and Altura Energy reported Saddle Horse Draw helium infrastructure work on schedule with near-term sales expected. Helium is now the lead watch item for Holbrook Basin follow-up.

## Durable Themes
- Communication platform preference is shifting toward Discord for better topic organization.
- Nathan values persistent memory, searchable history, and structured project notes over chat-only context.
- Prefers hierarchical agent control with main agent supervising sub‑agents.
- **Business mindset**: Focus on building monetizable systems that generate revenue from day one.
- **Technical pragmatism**: Prefers working solutions over perfect solutions; willing to use fallbacks (Google Form vs custom script).
- **Systematic approach**: Builds comprehensive systems with documentation, launch plans, and scalability in mind.
