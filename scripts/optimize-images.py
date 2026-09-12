"""Create responsive WebP derivatives without modifying the original assets.

Requires Pillow. Run from the repository root: python3 scripts/optimize-images.py
New filenames allow safe long-lived caching after deployment.
"""
from pathlib import Path
from PIL import Image

root = Path(__file__).resolve().parents[1] / 'public'
for source in sorted((root / 'images').glob('service-*.webp')):
    if source.stem.rsplit('-', 1)[-1].isdigit():
        continue
    for width in (480, 800):
        im = Image.open(source)
        im.thumbnail((width, width), Image.Resampling.LANCZOS)
        target = source.with_name(f'{source.stem}-{width}.webp')
        im.save(target, 'WEBP', quality=75, method=6)
        print(f'{target.relative_to(root)}: {target.stat().st_size:,} bytes')

for width in (384, 640):
    im = Image.open(root / 'header-logo.webp')
    im.thumbnail((width, width), Image.Resampling.LANCZOS)
    target = root / f'images/header-logo-{width}.webp'
    im.save(target, 'WEBP', quality=85, method=6)
    print(f'{target.relative_to(root)}: {im.width}x{im.height}, {target.stat().st_size:,} bytes')
