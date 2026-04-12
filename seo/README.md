# SEO Tracking for spokanetowing.com

## How to run an SEO check

1. Open Google Search Console for `spokanetowing.com` (sc-domain property)
2. Go to Performance > Full report
3. Enable all 4 metrics (clicks, impressions, CTR, position)
4. Set date range to "Last 3 months"
5. Click Export > Download CSV
6. Extract the zip into a new dated folder: `seo/YYYY-MM-DD/`
7. Review the data and compare against previous entries in `changelog.md`
8. Write a summary in `seo/YYYY-MM-DD/summary.md` with the same format as previous ones
9. Add a new entry to `changelog.md` with stats, findings, and any changes made

## What to compare each time

- Total clicks, impressions, CTR, avg position vs previous period
- Which pages moved up or down in position
- Which queries gained or lost impressions/clicks
- Whether FAQ rich snippets are showing (check Search Appearance tab)
- Indexing status — any new pages not indexed?
- Check if location pages broke through to page 1 (position < 10)

## Key pages to watch

These had the highest opportunity (high impressions, low clicks) as of April 2026:

| Page | Why |
|------|-----|
| /spokane-towing-services | Highest impressions (2,334), main service hub |
| /roadside-assistance | 1,232 impressions, only 1 click |
| /towing-spokane-valley | 1,172 impressions, position 18.4 |
| / (homepage) | 1,052 impressions, position 34.5 |
| /heavy-duty-towing | 798 impressions, position 41.6 |

## Key queries to watch

| Query | Baseline (Apr 2026) |
|-------|---------------------|
| spokane valley towing | 476 imp, pos 8.1, 0 clicks |
| spokane towing | 232 imp, pos 35.6, 2 clicks |
| roadside assistance | 223 imp, pos 12.9, 0 clicks |
| towing service | 172 imp, pos 18.2, 0 clicks |
| tow truck spokane | 172 imp, pos 36.5, 0 clicks |
| towing spokane | 140 imp, pos 47.7, 0 clicks |
| commercial towing services | 127 imp, pos 35.6, 0 clicks |

## Folder structure

```
seo/
├── README.md        ← this file
├── changelog.md     ← running log of all audits and changes
└── YYYY-MM-DD/      ← one folder per audit
    ├── summary.md   ← stats snapshot
    ├── Chart.csv    ← daily clicks/impressions
    ├── Queries.csv  ← all search queries
    ├── Pages.csv    ← per-page performance
    ├── Countries.csv
    ├── Devices.csv
    ├── Filters.csv
    └── Search appearance.csv
```
