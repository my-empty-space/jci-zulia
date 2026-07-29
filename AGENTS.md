## Project Structure

Inside this Astro project, the codebase is structured as follows.

```text
/
├── public/                  # Public static assets & section images (images, logos, etc)
│   ├── contact.php          # PHP backend endpoint for form submission
│   ├── etc...
├── src/
│   ├── assets/              # Inline SVG icon assets
│   │   └── icons/           # SVG icons (to be used as inline svg in components)
│   ├── components/          # Reusable UI Astro components
│   ├── layouts/             # Page layouts
│   ├── pages/               # File-based routing pages
│   │   ├── about-us.astro   # About page
│   │   ├── contact.astro    # Contact page
│   │   ├── index.astro      # Home page
│   │   ├── privacy.astro    # Privacy Policy page
│   │   ├── academy.astro    # Courses catalog page
│   │   └── news.astro       # News page
│   ├── sections/            # Reusable sections of pages, each section is composed of several components.
│   └── styles/              # Global CSS stylesheets
│       └── globals.css      # CSS custom properties, resets, utility classes
├── AGENTS.md                # Agent instructions, project structure & style guidelines
├── astro.config.mjs         # Astro configuration & i18n locale settings
├── eslint.config.mjs        # ESLint configuration (TypeScript, Astro, Prettier)
├── .prettierrc.mjs          # Prettier formatting rules & Astro plugin setup
├── package.json             # Project dependencies and npm scripts
└── tsconfig.json            # TypeScript configuration
```

## Code Style & Development Guidelines

When modifying or adding code to this project, adhere strictly to the following conventions and style choices established in the codebase:

### 1. Code Formatting & Syntax Rules

- **ESLint & Prettier**: Formatting rules are enforced via Prettier (`.prettierrc.mjs`) and ESLint (`eslint.config.mjs`).
  - Single quotes (`'`) for JS/TS strings.
  - Semicolons (`semi: true`).
  - 2 spaces indent width (`tabWidth: 2`).
  - Trailing commas in ES5 multi-line structures (`trailingComma: 'es5'`).
  - Run `npm run format` and `npm run lint` to check/clean code.

### 2. Component Architecture (Astro)

- **Single File Components**: Keep template, script, and styles inside `.astro` files.
- **Frontmatter Structure (`---`)**:
  - Define `interface Props` when the component accepts properties, providing clear default values via destructuring (`const { variant = 'solid', ... } = Astro.props`).
- **Polymorphic / Dynamic Elements**: Use dynamic tags (e.g. `const Tag = href ? 'a' : 'button'`) when components double as links and action buttons.
- **HTML Semantics & Accessibility**:
  - Use semantic elements (`<header>`, `<nav>`, `<main>`, `<section>`, `<article>`, `<footer>`).
  - Implement full ARIA support (`aria-expanded`, `aria-label`, `aria-controls`) for interactive UI elements (e.g., mobile hamburger toggle in `Navbar.astro`).

### 3. Styling & CSS Architecture

> [!IMPORTANT]
> There is more information about styling at `/context/design.md`.

- **Scoped Styles**: Place styles in `<style>` blocks within Astro components. Avoid inline styles unless passing dynamic CSS variables.
- **Design Tokens (CSS Variables)**: Centralize design tokens in `src/styles/globals.css`:
  - **Primary Colors**:
    - `var(--color-jci-blue)` (`#0097D7` - JCI Blue / Primary Accent | RGB `0/151/215` | CMYK `77/25/0/0` | PMS `2925 C`)
    - `var(--color-jci-black)` (`#130F2D` - JCI Black / Main Text & Dark Backgrounds | RGB `19/15/45` | CMYK `100/98/47/66` | PMS `5395 C`)
    - `var(--color-jci-white)` (`#FFFFFF` - JCI White / Light Backgrounds & Negative Space | RGB `255/255/255` | CMYK `0/0/0/0`)
  - **Secondary Colors**:
    - `var(--color-jci-navy)` (`#1F4789` - JCI Navy / Secondary Backgrounds & Medium Hierarchy | RGB `31/71/137` | CMYK `96/76/15/3` | PMS `2728 C`)
    - `var(--color-jci-teal)` (`#57BCBC` - JCI Teal / Interactive & Support Elements | RGB `87/188/188` | CMYK `63/0/30/0` | PMS `3265 C`)
    - `var(--color-jci-yellow)` (`#EFC40F` - JCI Yellow / Limited Accent & Callouts | RGB `239/196/15` | CMYK `7/21/93/0` | PMS `142 C`)
  - **Font Families**:
    - `var(--font-main)` (`'Plus Jakarta Sans', sans-serif` - Primary Font)
    - `var(--font-secondary)` (`'Arvo', serif` - Secondary Font, exclusively for quotes & callouts)
    - `var(--font-fallback)` (`'Readex Pro', sans-serif` - Fallback Font)
- **Typography**:
  - **Main**: Plus Jakarta Sans.
  - **Featured Quotes / Callouts**: Arvo.

### 4. Media & Asset Management

- **Images**: Store static section images in WebP format inside `public/`.
- **LCP Optimization**: Critical background images (like `hero.webp` in `Hero.astro`) must include `loading="eager"` and `fetchpriority="high"`. Non-critical images must use `loading="lazy"`.
- **SVG Icons**: Place reusable inline icons in `src/assets/icons/` as `.svg` files and import them directly into Astro components as SVG components (e.g., `import IconLocation from '../assets/icons/location.svg';`).

## Development

When starting the dev server, use background mode:

```
astro dev --background
```

Manage the background server with `astro dev stop`, `astro dev status`, and `astro dev logs`.

## Documentation

Full documentation: https://docs.astro.build

Consult these guides before working on related tasks:

- [Adding pages, dynamic routes, or middleware](https://docs.astro.build/en/guides/routing/)
- [Working with Astro components](https://docs.astro.build/en/basics/astro-components/)
- [Using React, Vue, Svelte, or other framework components](https://docs.astro.build/en/guides/framework-components/)
- [Adding or managing content](https://docs.astro.build/en/guides/content-collections/)
- [Adding styles or using Tailwind](https://docs.astro.build/en/guides/styling/)
- [Supporting multiple languages](https://docs.astro.build/en/guides/internationalization/)
