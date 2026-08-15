# SEO Changelog - spokanetowing.com

Running log of SEO audits, changes, and results.

---

## August 15, 2026

**Stats (3-month window: May 16 - Aug 13) — 33 days after July 13 audit**
- 84 clicks (+32, +62%) | 35,107 impressions (+11,700, +50%) | 0.24% CTR (up) | 47.1 avg position (-3.4, still flood-driven)
- Month over month (32-day windows): 48 clicks vs 20 — best period on record
- Mobile: +39 of the 48 new clicks (81%)
- Note: zip was again a 16-month export, but site data starts 2025-08-05, so diffing against the July 13 16-month files gives EXACT Jul 13 - Aug 13 numbers. No UI transcription needed.

**Key findings:**
- **Best month ever with zero changes shipped.** July closed at 40 clicks (2x previous best); August pacing 1.46 clicks/day. 18 of 21 content pages gained clicks. Looks like ranking momentum + summer demand.
- /towing-deer-park is the new #1 page (+9 clicks, window pos 9.5, 26 all-time). "deer park towing" converted 3 of 10 impressions at position 4.9.
- /towing-airway-heights woke up: flat at 5 clicks for three audits, then +9 this month.
- /towing-colville self-resolved the July CTR flag: +4 clicks (1% CTR) with no title change.
- July regressions recovered: /lockout-flat-tire +4, /winch-out-recovery +1, /roadside-assistance 0 → +4.
- Battery cluster STILL unconverted: ~72 new impressions at pos ~12, 0 clicks (787 all-time impressions, 0 clicks). Remains the top fixable gap.
- "spokane valley towing" slid: pos 7.3 → 11.9 in-window, back to 0 clicks (228 imp). Watching, not reacting.
- /heavy-duty-towing still weakest: +1,323 imp, +1 click; "heavy duty towing" lands at pos ~59 (generic dilution).
- Generic flood still growing: /spokane-towing-services took 11,185 of the month's ~16,900 impressions at pos 61 for 1 click.
- New CTR-gap candidate: /towing-hayden-id — only page-1 page with 0 clicks this month (266 imp, pos 11.2).
- Named queries explain only 11 of 48 new clicks; growth is anonymized long-tail.
- Search Appearance still empty — FAQ schema has produced no rich results after 4 months. Indexing not checkable from export.

**Changes made (site expansion + internal linking overhaul, same day):**

*New pages (7):*
- /battery-jump-start — targets the battery cluster (1,625 imp all-time at pos ~11, 0 clicks)
- /commercial-towing — targets the commercial cluster (2,562 imp, 0 clicks, no page existed)
- /motorcycle-towing — small cluster, was advertised on location pages with no page
- /spokane-towing-cost — targets cheap/cost/price cluster (1,764 imp); publishes $140 + $6/mi rates
- /service-areas — locations hub (breadcrumb schema previously pointed to nonexistent /#locations)
- /towing-greenacres — only searched town with no page (~90 imp across 9 queries)
- /towing-medical-lake — second uncovered town (23 imp)

*Internal linking:*
- /spokane-towing-services hub now links to all 11 service pages + location pages + /service-areas (previously linked to ZERO services/locations despite 27K impressions)
- New sitewide footer partial with all services + all locations (replaced 6-link footers on home, hub, FAQ, and both layouts)
- "Related services" block added to service-page layout (all service pages cross-link)
- "Nearby areas" block added to location-page layout + per-city links on all 12 location pages
- FAQ answers now link to service/location/cost pages
- /long-distance-towing fixed: added to homepage services grid + coverage-area partial (was a near-orphan; its impressions collapsed in July)
- Homepage: added battery, commercial, long-distance cards; Greenacres + Medical Lake links
- coverage-area partial: added Greenacres, Medical Lake, /service-areas link

*Title/meta and content changes:*
- /roadside-assistance: retitled to 'Roadside Assistance Spokane | Battery Jump Starts, 20-Min Response' (battery cluster, carried-over #1 action item); battery section links to new page
- /heavy-duty-towing: retitled to 'Heavy Duty Towing Spokane | Semi Truck Towing & Wrecker Service'; added Heavy Duty Roadside Assistance section (targets "heavy duty roadside assistance", 253 imp at pos 12-13) + wrecker language + FAQ
- /24-hour-towing: added wrecker service language ("wrecker service near me" ranks pos 7.7, word wasn't on the site)
- /lockout-flat-tire: added mobile tire service + "flat tire no spare" content (title unchanged — page is recovering)
- Location breadcrumb schema: /#locations → /service-areas
- Sitemap: 7 new URLs, lastmod bumped on all changed pages

*Deliberately NOT done:* /towing-spokane page (would cannibalize homepage + hub), About page (user decision), /towing-hayden-id title refresh (not yet).

**Recommended next actions:**
1. Watch for cannibalization between /battery-jump-start and /roadside-assistance on battery queries; consolidate if they fight.
2. /towing-hayden-id title/meta refresh (only page-1 page with 0 clicks this month — still open).
3. Watch "spokane valley towing" position; act only if it slides again.
4. Check indexing + rich results in GSC UI next audit; request indexing for the 7 new URLs in GSC after deploy.
5. Next audit: measure new-page impressions and whether hub-page links improved money-page positions.

**Raw data:** `seo/2026-08-15/`

---

## July 13, 2026

**Stats (3-month window: Apr 13 - Jul 12) — 11 weeks after April 27 audit**
- 52 clicks (+5) | 23,400 impressions (+12,500, +114%) | 0.2% CTR (halved) | 43.7 avg position (-16.5, worse)
- Mobile: 37 clicks (0.4% CTR, pos 36.1) | Desktop: 15 clicks (0.1% CTR, pos 49.1)
- Note: downloaded zip was a 16-month export; 3-month comparison numbers were pulled from the GSC UI (saved as `*-3mo-from-ui.csv`)

**Key findings:**
- **The April 27 /towing-spokane-valley title rewrite worked**: 3 → 10 clicks, CTR 0.24% → 0.7%, position 17.8 → 12.9. Now the #1 clicked page. "spokane valley towing" finally converted (0 → 2 clicks) after two audits at zero.
- The generic-query flood (from April 18) never receded and now dominates: ~12K of 23.4K impressions hit /spokane-towing-services at position 63 for national queries ("towing services" 1,828 imp). CTR/position averages are cosmetically wrecked but money keywords improved underneath: "spokane towing" 29.7 → 16.3, "towing spokane" 44 → 33.4, "towing spokane valley" 22.9 → 15.6.
- July pacing at 0.92 clicks/day — best month on record. June was weak (13 clicks).
- /towing-deer-park surged: 2 → 7 clicks, position 25.3 → 15.7.
- New CTR gaps (page 1-2 rankings, zero clicks): battery-roadside queries on /roadside-assistance (~230 imp at pos ~11), /towing-colville (pos 27 → 9.6, 204 imp), /towing-sandpoint (pos 11.4, 125 imp).
- Real regressions: /heavy-duty-towing 3 → 0 clicks (position flat), /lockout-flat-tire 4 → 2, /winch-out-recovery 2 → 1.
- Indexing: 22 indexed / 5 not indexed (one page slipped to "crawled - not indexed"). FAQ rich results still not showing (Search Appearance empty).

**Changes made:**
None — measurement-only audit.

**Recommended next actions:**
1. Apply the spokane-valley title/meta formula to /roadside-assistance, targeting the battery jump-start cluster (biggest fixable gap).
2. Title/meta refresh on /towing-colville and /towing-sandpoint (new page-1 rankings, 0 clicks).
3. Investigate /heavy-duty-towing click loss (3 → 0 with flat position).
4. Next audit: identify which page fell out of the index; keep ignoring the generic flood unless money keywords worsen.

**Raw data:** `seo/2026-07-13/`

---

## April 27, 2026

**Stats (3-month window: Jan 24 - Apr 23) — 15 days after April 12 baseline**
- 47 clicks (+6) | 10,900 impressions (+1,260) | 0.4% CTR (flat) | 27.2 avg position (-3.3, worse)
- Mobile: 31 clicks (0.64% CTR, pos 19.1) | Desktop: 16 clicks (0.27% CTR, pos 33.7)

**Key findings:**
- Position decline is **not** a real ranking loss — Google started showing the site for many new generic, non-Spokane queries (e.g. "towing services", "tow truck service", "truck towing near me") at positions 50-80, dragging the average down. The shift began April 18 and has held steady.
- Last-7-day position (4/17-4/23) was 47.6, with "towing services" (141 imp pos 54.9) and "tow truck service" (111 imp pos 65.9) leading.
- "spokane towing" actually IMPROVED from position 35.6 → 29.7 with +1 click.
- "spokane valley towing" still the biggest missed opportunity: 498 impressions at position 8.4 with 0 clicks (CTR problem on /towing-spokane-valley).
- Homepage clicks doubled (2 → 5) — title/meta optimizations from April 12 working.
- Airway Heights and Cheney location pages each picked up a click and remain on page 1.
- /long-distance-towing lost a click (3 → 2) — only real regression.
- /spokane-towing-services position worsened (30.1 → 37.8) due to broad-query bleed.

**Changes made:**
None — measurement-only audit.

**Recommended next actions:**
1. Rewrite title/meta on /towing-spokane-valley to fix the 0-click-at-position-8 problem (biggest gap on site).
2. Wait 2-3 weeks before reacting to position drop — likely benign query expansion.
3. Quick review of /long-distance-towing for the click regression.

**Raw data:** `seo/2026-04-27/`

---

## April 12, 2026

**Baseline Stats (3-month window: Jan 11 - Apr 10)**
- 41 clicks | 9,640 impressions | 0.4% CTR | 23.9 avg position
- 23 indexed pages, 4 not indexed
- Mobile: 26 clicks (0.58% CTR, pos 16.7) | Desktop: 15 clicks (0.30% CTR, pos 30.5)

**Key findings:**
- Most pages ranking on page 2-3 (avg position 23.9)
- Huge impression-to-click gap: 9,640 impressions but only 41 clicks
- "spokane valley towing" getting 476 impressions at position 8.1 with 0 clicks
- Location pages nearly on page 1: Cheney (8.2), Liberty Lake (8.6), Airway Heights (9.2), CdA (9.7)
- /roadside-assistance getting 1,232 impressions but only 1 click
- /spokane-towing-services getting 2,334 impressions but only 8 clicks

**Changes made:**
1. Updated sitemap lastmod dates from 2025-02-01 to 2026-04-12 (were 14 months stale)
2. Added /contact page to sitemap (was getting 160 impressions but missing from sitemap)
3. Fixed 7 empty image alt tags on homepage service cards and quote page
4. Optimized title tags across all 19 pages — location pages changed from "Towing Services [City]" to "[City] Towing | ..." format to match search behavior
5. Rewrote meta descriptions with response times (20-30 min), phone number, and CTAs
6. Added coverage area cross-links to /roadside-assistance (was the only service page missing it)
7. Added FAQ schema (JSON-LD) + visible FAQ content to 4 high-opportunity pages:
   - /spokane-towing-services (2,334 impressions)
   - /roadside-assistance (1,232 impressions)
   - /24-hour-towing (476 impressions)
   - /heavy-duty-towing (798 impressions)

**Raw data:** `seo/2026-04-12/`
