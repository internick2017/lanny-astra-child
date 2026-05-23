# Astra Child — Lanny Herrera

Child theme for [lanny.nickgranados.com](https://lanny.nickgranados.com), the personal site of **Lanny Herrera** — online language teacher (English, Spanish, Portuguese) based in Brazil.

Built on top of [Astra](https://wordpress.org/themes/astra/) with Polylang for trilingual content (PT/ES/EN).

## Installation

1. Install and activate **Astra** parent theme from WordPress.org (Appearance → Themes → Add New).
2. Package this folder into a ZIP:
   ```bash
   zip -r lanny-astra-child.zip . -x ".git/*" "*.DS_Store" "*.zip"
   ```
3. Upload via WP admin → Appearance → Themes → Add New → Upload Theme.
4. Activate.

## Development

For iteration during development, SFTP files directly to:
```
/wp-content/themes/astra-child-lanny/
```

Then hard-refresh (Ctrl+Shift+R) — no need to rebuild the ZIP each time.

## Structure

- `style.css` — theme header + base CSS variables (palette, typography)
- `functions.php` — enqueues parent + child stylesheets, custom hooks
- `assets/` — additional CSS/images (created as needed)

## Stack

- WordPress 6.x
- Astra theme (parent)
- Polylang (PT default, ES + EN)
- Contact Form 7 + Flamingo
- Yoast SEO
- LiteSpeed Cache
- Strong Testimonials (Phase 1 — to be replaced by custom plugin in Phase 2)

## License

MIT — see [LICENSE](./LICENSE)
