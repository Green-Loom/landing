# Green Loom Landing

Public marketing site for [Green Loom](https://github.com/Green-Loom), delivered as a **static Astro** site.

Copy and IA come from the Design Dash `green-loom-landing-page` (M1 mission manifesto). Conversion is **Follow updates** by email only. No discovery-call booking. Product suite detail is deferred.

## Requirements

- Node.js **22.12+**
- npm 10+

## Project layout

```
src/
  pages/                  index, privacy
  layouts/BaseLayout.astro
  components/             Header, Footer, FollowForm, sections/*
  scripts/follow-form.ts  Client stub (no ESP)
  styles/                 tokens.css + atmosphere.css
public/img/               Brand logo + section photography
design-system/green-loom/ MASTER.md visual guide
```

## Design system

UI guidance lives in `design-system/green-loom/MASTER.md` (Apple-quiet storytelling, Loom Green + Figtree). Prefer that file when iterating.

## Preview

```bash
cd /Users/aaron/Sites/greenloom-landing
npm install
npm run dev
```

Production build:

```bash
npm run build
npm run preview
```

## GitHub Pages

Live site: **https://www.greenloom.com**  
Fallback: https://green-loom.github.io/landing/

Deploys from `main` via [`.github/workflows/deploy.yml`](.github/workflows/deploy.yml). Custom domain is `www.greenloom.com` (`public/CNAME`).

Do **not** serve from the archived monorepo folder `greenloom/landing-page` — that is static HTML from an earlier era. Do not use WordPress Playground for this repo anymore.

## Follow form (stub)

The Follow form is a client-side stub:

| State | Behavior |
|---|---|
| default | Email + optional role + consent |
| validating | Client-side email/consent checks |
| submitting | Button reads “Sending…”; inputs disabled |
| success | “You are on the list…” |
| error | Field errors, or vendor-down message |

There is **no network submit** until an ESP is chosen (Design Dash Q-002).

### Swap-in when ESP is ready

1. Keep the client validation; replace the stub `setTimeout` in `src/scripts/follow-form.ts` with a `fetch` to your endpoint (Kit, Mailchimp, custom REST, or form proxy).
2. Map fields: `email`, `role` (`operator` \| `builder-agency` \| `other`), `consent`, hidden `source_section=follow`.
3. On HTTP/vendor failure, surface the vendor-down copy already in the script.
4. Update the Privacy page with processor name and retention.

Force the error path in a browser console while testing:

```js
window.__GL_FOLLOW_FORCE_ERROR = true;
```

## Design notes

- Loom Green `#39823D` is the primary accent.
- Display and body: Figtree. Avoid Inter-only stacks.
- Visitor copy: no em dashes; dual recognition voice (D-009) from the dash `copy.md`.
- Atmosphere CSS is limited to craft tokens cannot express (hero plane, form controls). Honors `prefers-reduced-motion`.

## License

Code in this repo is available for Green Loom product use. Prefer an explicit LICENSE file before public redistribution.
