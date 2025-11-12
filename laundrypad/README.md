# LaundryPad WordPress Block Theme

LaundryPad is a production-ready full-site-editing (FSE) theme that reproduces the LaundryPad landing page design in WordPress using native Gutenberg blocks. It ships with curated block patterns, a front-page template, and starter media so the marketing site can be published instantly on activation.

## Requirements

- WordPress 6.4 or higher
- PHP 8.2+
- Node.js 18+ (for local asset builds)
- Local by Flywheel (or another WordPress stack) with Nginx & MySQL 8 as per the design brief

## Quick Start with Local by Flywheel

1. **Create the site**
   - Open Local and create a new site named `laundrypad.local` using the Custom configuration.
   - Set PHP to 8.2+, the web server to Nginx, and the database to MySQL 8.

2. **Add the theme**
   - From Local, click `Open Site Shell` or open the site folder in your file explorer.
   - Copy the `laundrypad` theme folder from this repository into `app/public/wp-content/themes/`.

3. **Activate the theme**
   - Log in to `https://laundrypad.local/wp-admin` and go to **Appearance → Themes**.
   - Activate the **LaundryPad** theme.

4. **Set the front page**
   - Navigate to **Settings → Reading** and set **Front page displays** to `A static page`.
   - Choose `Landing Page` (created by the theme) as the front page.

5. **Recommended plugins**
   - **SVG Support** – allows SVG uploads for the custom illustrations and logos included with the theme.
   - **Disable Comments** – optional, removes unused comment UI on the marketing site.
   - **Yoast SEO** or **Rank Math** – adds advanced SEO controls.
   - **Advanced Custom Fields** – optional; enables the Site Settings options page registered by the theme.
   - **Cache Enabler** (or your preferred page cache) for optimal performance.

Once activated, the landing page is automatically composed from block patterns that mirror the provided Figma design. All copy, images, and links remain fully editable in the Site Editor or block inspector.

## Development Scripts

The theme bundles pre-built production assets in `build/`. If you want to customize the SCSS or JavaScript:

```bash
npm install
npm run dev   # Watcher with live rebuilds
npm run build # Production build
npm run lint  # Run eslint via @wordpress/scripts
```

> The repository already includes compiled assets so `npm install` is only required when you change code under `src/`.

## Editing Design Tokens

Global tokens live in `theme.json`. You can adjust colors, typography, spacing scales, radii, and shadows there. Changes propagate automatically to every block that references the presets. Key sections include:

- `settings.color.palette` – brand and semantic colors
- `settings.typography.fontFamilies` and `fontSizes` – font stacks and size presets
- `settings.custom.laundrypad` – shared radii, shadows, and container paddings
- `styles` – default typography, link styles, and block-level overrides

## Working with Patterns & Blocks

Reusable block patterns are registered under **Patterns → LaundryPad Sections** in the Site Editor. Each pattern corresponds to a major landing page section (Hero, Features, How It Works, Stats & Logos, Testimonials, Pricing, FAQ, CTA).

- Insert patterns from the block inserter and update copy, images, or CTA links inline.
- Cards, toggles, and accordions use native Gutenberg blocks with minimal JavaScript for interactions.
- Hover states and transitions follow the Figma hovers specification and respect `prefers-reduced-motion`.

## Starter Content / Importing

The theme provisions the landing page automatically:

- `templates/front-page.html` stitches the section patterns together.
- Activating the theme and assigning the Front Page sets up the full layout instantly.
- If you need to clone the content into an existing site, use **Appearance → Editor → Patterns** to insert the LaundryPad patterns manually in any template.

For portability, export your composed landing page via **Tools → Export** after editing. Re-import the WXR file on another site to reproduce your customized content.

## Accessibility & Performance

- Semantic landmarks (`header`, `main`, `section`, `footer`) are baked into templates.
- Navigation, pricing toggles, and FAQ accordions are keyboard-accessible with ARIA attributes and focus traps.
- Fonts default to locally available Inter / Plus Jakarta Sans with `font-display: swap`; update `assets/css/fonts.css` with self-hosted WOFF2 files if you have licensed variants.
- Images ship as optimized SVGs. Swap them in the editor to match production assets.
- Minified JS/CSS and lightweight assets help the site hit 95+ Lighthouse scores on desktop builds.

## Preloading Fonts

To preload custom fonts, upload your WOFF2 files into `assets/fonts/` and replace the sources in `assets/css/fonts.css`. Then enqueue them via `inc/assets.php` (already registered as `laundrypad-fonts`). Add `<link rel="preload" ...>` tags in `functions.php` if you require additional performance tuning.

## Support & Maintenance

- Use the ACF options page (**Site Settings**) to store shared CTAs or social URLs if ACF is installed.
- `inc/` contains the theme bootstrap files (`setup.php`, `assets.php`, `patterns.php`, `options.php`) for quick customization.
- JavaScript powering interactions lives in `src/index.js` (compiled to `build/index.js`).

Happy launching!
