<p align="center">
  <img src="https://raw.githubusercontent.com/troychaplin/parlour-ui/main/public/graphics/parlour-icon.svg" alt="Parlour logo: two scoops of ice cream melting over a bowl" width="140" />
</p>

<h1 align="center">Parlour Block Theme</h1>

<p align="center">
  <strong>Pick a flavour. The whole site follows.</strong>
</p>

<p align="center">
  A WordPress block theme served in flavours.<br />
  One set of templates, every flavour.
</p>

---

## What's a flavour?

A flavour is a complete colour pattern for your site, not just a light or dark switch. Every flavour defines the same palette slots: `base`, a neutral ramp, `contrast`, and `primary`. So switching flavours changes every colour at once, and every template, part, pattern, and block style keeps working.

Choose a flavour in **Appearance → Editor → Styles** and the header, footer, post listings, buttons, and tinted sections all change with it. You don't have to reskin anything or clean up afterwards.

### On the menu today

| Flavour           | Where it lives                     |
| ----------------- | ---------------------------------- |
| **Default**       | `theme.json`                       |
| **Sage and Clay** | `styles/colors/sage-and-clay.json` |
| **Cool Slate**    | `styles/colors/cool-slate.json`    |

More flavours are on the way.

## Toppings

Flavours change colour across the whole site. Block style variations are smaller toppings that you add to one block, and they follow whichever flavour is active:

- **Group:** Base 40, Neutral Darkest, Neutral Lighter, Neutral Pale, White
- **Buttons:** Small, Small Outline
- **Heading:** Thick Border

## What's in the bowl

- **Templates:** front page, blog home, archive, single post, page, page with breadcrumbs, and an index fallback.
- **Template parts:** header and footer.
- **Patterns:** Latest Post Listing, under the **Parlour Sections** category.
- **Custom blocks:**
  - **Day Tracker** (`parlour/day-tracker`): the current day of the year ("Day No. 280"), with an optional formatted date.
  - **Pagination Count** (`parlour/pagination-count`): "Page X of Y" for query loops.
- **Text format:** Thin Font, a toolbar button that sets selected text in a lighter weight.
- **Typography:** Inter Tight, Source Serif 4, and JetBrains Mono, served locally from `assets/fonts/`.

> **Fresh out of the churn.** Parlour is early-stage and moving quickly. The flavour system and templates are in place; the pattern library and flavour list grow with every release.

## Part of the Parlour family

This theme is the WordPress counter of [Parlour UI](https://github.com/troychaplin/parlour-ui), a token-first UI kit for React and WordPress. They share the same design language: the same three typefaces, the same `--parlour--*` naming, and the same neutral ramp. Flavours are where the two meet. Pick one, and React and WordPress serve the same colours.

---

## Get a scoop

Requires WordPress 7.0 or later.

1. Clone the theme into `wp-content/themes/parlour-block-theme`.
2. Install dependencies and build the assets:

   ```bash
   composer install
   pnpm install
   pnpm run build
   ```

3. Activate **Parlour Block Theme** in **Appearance → Themes**.

## Behind the counter

```bash
pnpm run start   # watch CSS, editor styles, JS, and blocks
```

### Scripts

| Command                       | Description                                                      |
| ----------------------------- | ---------------------------------------------------------------- |
| `pnpm run build`              | Clean `assets/`, then build CSS, editor styles, JS, and blocks   |
| `pnpm run start`              | Watch everything and rebuild on change                           |
| `pnpm run build:css`          | Front-end stylesheet: `src/styles.css` → `assets/css/styles.css` |
| `pnpm run build:editor`       | Editor stylesheet: `src/editor.css` → `assets/css/editor.css`    |
| `pnpm run build:block-styles` | Per-block CSS: `src/css/blocks/` → `assets/css/blocks/`          |
| `pnpm run build:js`           | Theme scripts and editor formats with `@wordpress/scripts`       |
| `pnpm run build:blocks`       | Custom blocks from `src/blocks/` to `assets/blocks/`             |
| `composer lint`               | PHP_CodeSniffer with WordPress Coding Standards                  |
| `composer format`             | Auto-fix PHP coding standards issues                             |

### Project structure

```
theme.json                 # Default flavour, global settings, and styles
style.css                  # Theme header
functions.php              # Boots the modules in classes/
classes/                   # Parlour_Block_Theme namespace: enqueues, blocks, patterns
styles/
  colors/                  # Flavours (colour style variations)
  buttons/ group/ heading/ # Block style variations (toppings)
templates/                 # Block templates
parts/                     # Header and footer
patterns/                  # Block patterns
src/
  styles.css               # Front-end stylesheet entry
  editor.css               # Editor stylesheet entry
  css/                     # Tokens, globals, parts, patterns, per-block styles
  blocks/                  # Custom block source
  editor/                  # Editor formats (Thin Font)
assets/                    # Build output, don't edit by hand
docs/                      # Design system notes
```

### Adding a flavour

Copy one of the files in `styles/colors/` and give it a new `title`. Then change the colour values, but keep every palette `slug`. Templates, patterns, and block styles only use slugs, so a new flavour that defines the same slots works everywhere straight away.

---

<p align="center">
  <strong>Pick a flavour. The whole site follows.</strong> 🍨
</p>
