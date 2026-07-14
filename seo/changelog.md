# SEO Changelog - spokanetowing.com

Running log of SEO audits, changes, and results.

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
