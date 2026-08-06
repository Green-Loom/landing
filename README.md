# Green Loom Landing

Public marketing site for [Green Loom](https://github.com/Green-Loom), delivered as a **WordPress block theme**.

Copy and IA come from the Design Dash `green-loom-landing-page` (M1 mission manifesto). Conversion is **Follow updates** by email only. No discovery-call booking. Product suite detail is deferred.

## Requirements

- WordPress **6.7+** (`theme.json` version 3)
- PHP 7.4+

## Theme layout

```
style.css                 Theme header (GPL-2.0-or-later)
theme.json                Presets + global styles (v3)
functions.php             Enqueue, pattern category, Follow block
templates/                front-page, index, page-privacy
parts/                    header, footer
patterns/                 M1 sections (hero → faq) + sticky header
blocks/follow-form/       Interactivity API stub form
assets/css/atmosphere.css Full-bleed hero craft + form styles
assets/img/               Brand logo
blueprint.json            WordPress Playground preview
```

Text domain: `green-loom-landing`.

## Design system

UI/UX Pro Max recommendations live in `design-system/green-loom/MASTER.md` (storytelling pattern, brand-locked Loom Green + Fraunces/Figtree). Prefer that file over the skill’s default navy/gold SaaS palette when iterating.

## Preview with Playground

**Local theme mount (use this to see uncommitted redesign work):**

```bash
cd /Users/aaron/Sites/greenloom-landing
npx @wp-playground/cli@latest start
```

Do **not** run Playground from the archived monorepo folder `greenloom/landing-page` — that is static HTML, not this theme.

Or run the Blueprint against the published theme on GitHub (will not include local-only changes until pushed):

```bash
npx @wp-playground/cli@latest server --blueprint=./blueprint.json
```

Browser share (once `main` is on GitHub): open Playground with this Blueprint URL, or paste `blueprint.json` into the Blueprint editor.

## Follow form (stub)

The `green-loom-landing/follow-form` block uses the **Interactivity API**:

| State | Behavior |
|---|---|
| default | Email + optional role + consent |
| validating | Client-side email/consent checks |
| submitting | Button reads “Sending…”; inputs disabled |
| success | “You are on the list…” |
| error | Field errors, or vendor-down message |

There is **no network submit** until an ESP is chosen (Design Dash Q-002).

### Swap-in when ESP is ready

1. Keep the Interactivity actions; replace the stub `setTimeout` in `blocks/follow-form/view.js` with a `fetch` to your endpoint (Kit, Mailchimp, custom REST, or CF7 proxy).
2. Map fields: `email`, `role` (`operator` \| `builder-agency` \| `other`), `consent`, hidden `source_section=follow`.
3. On HTTP/vendor failure, set `state.formError` to the vendor-down copy already in PHP state.
4. Update the Privacy page with processor name and retention.

Force the error path in a browser console while testing:

```js
window.__GL_FOLLOW_FORCE_ERROR = true;
```

## Design notes

- Loom Green `#39823D` is the `primary` color preset.
- Display: Fraunces. Body: Figtree. Avoid Inter-only stacks.
- Visitor copy: no em dashes; dual recognition voice (D-009) from the dash `copy.md`.
- Atmosphere CSS is limited to craft theme.json cannot express (hero plane, form controls). Honors `prefers-reduced-motion`.

## License

GPL-2.0-or-later (WordPress theme convention).
