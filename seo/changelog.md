# SEO Changelog - spokanetowing.com

Running log of SEO audits, changes, and results.

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
