# DESIGN.md --- Marrky-Inspired Design Specification

> **Purpose:** This document translates the visual and interaction
> language observed on the Marrky reference site into an implementation
> brief for Codex.
>
> **Important:** This is a design-analysis document, not a
> content-copying specification. Do not copy the reference site's text,
> logos, photographs, illustrations, proprietary assets, HTML/CSS,
> source code, or branded visual artwork. Recreate the *design
> principles* with original content and original assets.

## 1. Reference

Reference site:

`https://wp.agratri.com/marrky/`

The reference is a modern digital-marketing-agency WordPress theme with
a premium, editorial SaaS/agency aesthetic.

### Inspection status

The homepage was successfully inspected from the live site.

The site's navigation exposes these additional routes/templates:

-   Home One --- Light
-   Home One --- Dark
-   Home Two --- SEO/Growth
-   About Us
-   Our Team
-   Pricing
-   Case Studies
-   Case Study Details
-   404
-   Services
-   Services Details
-   Blog
-   Blog Details
-   Contact Us

At the time of this analysis, several secondary routes timed out when
fetched individually. Therefore, this document should **not claim
pixel-level observations for those pages**. Where secondary-page
behavior is specified below, it is expressed as a reusable design-system
recommendation based on the verified homepage and the site's visible
route architecture.

------------------------------------------------------------------------

# 2. Core Design Direction

Recreate the reference's overall character as:

**Premium + editorial + conversion-focused + restrained + spacious +
data-driven.**

Avoid making the result look like a generic AI-generated SaaS landing
page.

The design should communicate:

-   confidence
-   maturity
-   measurable outcomes
-   strategic expertise
-   premium service
-   clarity
-   modern digital capability

The visual language should feel closer to a high-end consultancy /
growth agency than a startup dashboard.

------------------------------------------------------------------------

# 3. Design Principles

## 3.1 Large visual hierarchy

Sections use strong headline typography rather than dense explanatory
copy.

Typical pattern:

-   small eyebrow/category label
-   large section heading
-   concise supporting paragraph
-   clear CTA
-   supporting visual/data element

Do not fill every area with text.

## 3.2 Strong whitespace

Whitespace is a major part of the design.

Use generous:

-   section top/bottom padding
-   heading-to-paragraph spacing
-   card padding
-   column gaps
-   page margins

Do not compress sections merely to fit more information above the fold.

## 3.3 Editorial rhythm

The page should alternate between:

-   large statements
-   structured grids
-   oversized numbers
-   image-led sections
-   cards
-   horizontal service/category strips
-   CTA sections

Avoid a monotonous sequence of identical cards.

## 3.4 Outcome-oriented presentation

The reference repeatedly presents services and proof through measurable
outcomes.

Use:

-   large metrics
-   percentages
-   multipliers
-   campaign counts
-   customer/review counts
-   concise proof statements

Metrics should visually behave as design elements, not merely body text.

------------------------------------------------------------------------

# 4. Global Layout

## 4.1 Container

Use a centered max-width content container.

Recommended implementation:

-   desktop max-width: approximately 1200--1320px
-   fluid horizontal padding
-   narrower text measure for long-form paragraphs
-   full-bleed sections where visual impact benefits from it

Do not allow paragraphs to span the entire viewport.

## 4.2 Grid

Primary layouts should use:

-   2-column editorial layouts
-   3-column card grids
-   asymmetric image/text compositions
-   horizontal metric groups
-   full-width CTA bands

Prefer intentional asymmetry over a collection of identical boxes.

## 4.3 Section spacing

Use generous vertical spacing.

Suggested starting tokens:

``` css
--section-space-xl: clamp(96px, 10vw, 160px);
--section-space-lg: clamp(72px, 8vw, 120px);
--section-space-md: clamp(56px, 6vw, 88px);
--section-space-sm: clamp(32px, 4vw, 56px);
```

These are implementation starting points, not claims about the exact
source CSS.

------------------------------------------------------------------------

# 5. Typography

The typography is one of the most important parts of the visual
identity.

## Headings

Use a modern, high-contrast display treatment:

-   large
-   bold
-   tight line-height
-   carefully controlled line breaks
-   strong visual hierarchy

Hero headings should be capable of occupying multiple lines without
feeling cramped.

Recommended starting scale:

``` css
h1: clamp(48px, 6vw, 88px);
h2: clamp(38px, 4.5vw, 64px);
h3: clamp(24px, 2.5vw, 36px);
```

Use tighter line-height for large headings.

## Body

Body copy should remain comparatively restrained:

-   comfortable line-height
-   medium/neutral weight
-   muted secondary text
-   approximately 16--19px desktop starting point

## Labels

Small uppercase or compact category labels can be used for:

-   section identifiers
-   service categories
-   metadata
-   case-study types

Use letter spacing sparingly.

------------------------------------------------------------------------

# 6. Color System

The verified homepage presents a predominantly modern light editorial
interface.

Use a restrained palette:

``` css
--background: #f7f7f5;       /* warm/light neutral starting point */
--surface: #ffffff;
--foreground: #111111;
--muted: #6f6f6a;
--border: rgba(17,17,17,.12);
--accent: <project-specific accent>;
```

The exact accent color should be chosen for the new project rather than
copied from the reference.

Important:

-   Do not overuse gradients.
-   Do not use many unrelated accent colors.
-   Let typography, spacing, photography, borders and composition create
    most of the visual character.
-   Dark sections should be used deliberately for contrast.

------------------------------------------------------------------------

# 7. Header / Navigation

The header should feel lightweight and premium.

Expected structure:

-   brand/logo on left
-   primary navigation in the center/right
-   CTA on the right
-   responsive mobile navigation

The reference navigation contains grouped dropdown-style page categories
such as:

-   Home
-   Pages
-   Services
-   Blog
-   Contact

Implement navigation with clean spacing rather than heavy boxed buttons.

### Navigation behavior

Desktop:

-   horizontally aligned
-   generous clickable areas
-   subtle hover state
-   dropdowns where appropriate

Mobile:

-   compact menu trigger
-   full navigation drawer/panel
-   clear hierarchy
-   prominent CTA

------------------------------------------------------------------------

# 8. Hero Section

The hero is the highest-priority visual area.

Observed structure:

1.  small category/eyebrow
2.  very large headline
3.  concise supporting statement
4.  primary CTA
5.  secondary CTA where appropriate
6.  proof/metrics below or adjacent
7.  large supporting image/visual

The hero should not resemble a typical centered SaaS template.

Prefer:

-   strong editorial composition
-   large type
-   asymmetric visual balance
-   substantial whitespace
-   carefully controlled CTA placement

------------------------------------------------------------------------

# 9. Metrics / Proof Bar

The homepage uses prominent business metrics such as:

-   brands scaled
-   ROAS
-   managed ad spend
-   years of experience
-   campaigns
-   retention
-   specialists

Treat these as a reusable component.

Example structure:

``` text
01
Metric
Short description
```

or:

``` text
0+
Brands scaled
```

Use oversized numeric typography and understated labels.

Numbers should align consistently across the grid.

------------------------------------------------------------------------

# 10. Trusted Brands Strip

The homepage includes a social-proof area containing:

-   trust statement
-   multiple brand names/logos
-   horizontal visual rhythm

Recreate the *concept*, not the reference brands.

Recommended treatment:

-   muted logos/text
-   low visual noise
-   horizontal alignment
-   generous spacing
-   optional subtle marquee motion

Do not make logos compete with the primary content.

------------------------------------------------------------------------

# 11. Services Section

The services section is a key structural pattern.

The reference presents six service categories.

Each service item contains:

-   sequence number
-   service title
-   concise description
-   supporting tags
-   Learn More action

The list feels editorial rather than like six identical SaaS cards.

### Recommended component

``` text
/ 01

SERVICE TITLE

Short explanatory statement.

Tag   Tag   Tag

Learn More →
```

Use dividers and spacing to separate items.

Avoid excessive shadows.

------------------------------------------------------------------------

# 12. Why Us / Positioning Section

This section communicates the agency's operating model.

Pattern:

-   small section label
-   large headline
-   explanatory paragraph
-   several short differentiators
-   supporting metric block
-   large image

The differentiators should be presented as compact principles rather
than large cards.

Example structure:

``` text
Revenue-first strategy
Senior-only team
Transparent reporting
No long lock-ins
```

------------------------------------------------------------------------

# 13. Decorative Horizontal Service Strip

The homepage contains a horizontal repeated service/category strip.

It visually behaves like a moving editorial ticker.

Implementation:

-   horizontal text sequence
-   repeated categories
-   generous spacing
-   subtle separator
-   optional continuous animation

Example:

``` text
SEO · PPC · SOCIAL MEDIA · CONTENT · EMAIL · ANALYTICS · CRO
```

This is a visual rhythm device, not primary navigation.

------------------------------------------------------------------------

# 14. Case Studies

The case-study section emphasizes measurable results.

Pattern:

-   section label
-   large heading
-   View All Case Studies CTA
-   featured image
-   category
-   result metric
-   title

Example visual hierarchy:

``` text
[Large image]

CATEGORY

+212% Qualified Leads

CASE STUDY TITLE
```

Do not use generic cards with equal visual weight for every case study.

The featured case study should have significantly more visual
prominence.

------------------------------------------------------------------------

# 15. Process / How We Work

The homepage presents a four-step process:

1.  Audit & Strategy
2.  Creative & Messaging
3.  Launch & Distribution
4.  Measure & Scale

The important design idea is the numbered progression.

Recommended UI:

``` text
01
TITLE
Description

02
TITLE
Description

03
TITLE
Description

04
TITLE
Description
```

Use large numbers as visual anchors.

The four steps should feel like one connected operating system rather
than four unrelated cards.

------------------------------------------------------------------------

# 16. Differentiators

The "What Sets Us Apart" pattern uses:

-   large headline
-   short paragraph
-   three principle blocks
-   supporting image

Each principle should be compact.

Avoid oversized feature-card styling.

------------------------------------------------------------------------

# 17. Testimonials

The reference uses testimonial content with:

-   testimonial quote
-   person image
-   name
-   role/company
-   multiple testimonials

Recommended design:

-   large quote typography
-   portrait/avatar
-   metadata below
-   pagination/navigation if carousel
-   generous whitespace

The quote should be the dominant element.

Avoid putting testimonials into tiny card grids.

------------------------------------------------------------------------

# 18. Pricing

The homepage includes three pricing tiers:

-   entry
-   growth
-   scale

The middle tier receives "Most Popular" emphasis.

General design pattern:

``` text
PLAN NAME

Short description

PRICE

Feature
Feature
Feature
Feature

CTA
```

The featured plan can use:

-   stronger border
-   accent background
-   badge
-   slightly elevated visual treatment

Do not make every pricing card visually identical.

------------------------------------------------------------------------

# 19. Blog / Insights

The homepage displays recent articles as editorial cards.

Each item contains:

-   category
-   date
-   reading time
-   title
-   Read More

The hierarchy should prioritize the article title.

Recommended layout:

-   3-column desktop grid
-   1-column mobile
-   restrained metadata
-   optional image

Avoid excessive card chrome.

------------------------------------------------------------------------

# 20. CTA Section

The main conversion CTA should be visually distinct.

Structure:

``` text
READY TO [OUTCOME]?

Large headline

Short supporting statement

Primary CTA
Secondary CTA
```

Use a contrasting background or large visual treatment.

The CTA should feel like the conclusion of the page rather than another
generic section.

------------------------------------------------------------------------

# 21. FAQ

The FAQ is an accordion-style interaction.

Important characteristics:

-   question is visually prominent
-   answer remains hidden until expanded
-   clean dividers
-   minimal decoration
-   generous vertical spacing

Recommended behavior:

-   smooth open/close transition
-   keyboard accessible
-   only one item open at a time if that fits the product
-   clear active/open state

------------------------------------------------------------------------

# 22. Footer

The footer is structured rather than visually heavy.

Include:

### Company

-   About
-   Team
-   Case Studies
-   Pricing
-   Contact

### Services

-   relevant service categories

### Newsletter

-   short description
-   email field
-   subscribe CTA

### Bottom line

-   brand
-   copyright
-   legal links

Use generous spacing and a strong typographic hierarchy.

------------------------------------------------------------------------

# 23. Responsive Design

Do not simply shrink the desktop design.

## Desktop

Use:

-   large display typography
-   asymmetric layouts
-   multi-column grids
-   large images
-   generous whitespace

## Tablet

-   reduce grid columns
-   reduce heading sizes
-   preserve whitespace
-   simplify decorative elements

## Mobile

Prioritize:

1.  headline
2.  CTA
3.  proof
4.  content

Use:

-   single-column layouts
-   reduced but still generous spacing
-   horizontal overflow only where intentionally designed
-   compact navigation
-   full-width buttons where appropriate

Avoid tiny text.

------------------------------------------------------------------------

# 24. Images

Photography should feel:

-   editorial
-   professional
-   human
-   premium
-   authentic

Prefer:

-   team collaboration
-   strategy sessions
-   business environments
-   close-up portraits
-   product/campaign visuals

Do not reuse Marrky's actual photographs.

For placeholder development, use clearly replaceable local assets.

------------------------------------------------------------------------

# 25. Iconography

Use one consistent icon family.

Characteristics:

-   simple line icons
-   restrained stroke weight
-   no random emoji
-   no mixture of outline and filled icon styles

Icons should support hierarchy rather than dominate it.

------------------------------------------------------------------------

# 26. Borders, Cards and Shadows

The design should not depend heavily on card shadows.

Prefer:

-   thin borders
-   subtle separators
-   flat surfaces
-   occasional restrained elevation

Use shadows only where interaction/state benefits from them.

------------------------------------------------------------------------

# 27. Motion

Motion should be subtle and purposeful.

Recommended:

-   fade/slide reveal on scroll
-   button hover transitions
-   accordion height transitions
-   image hover movement
-   horizontal ticker/marquee
-   subtle card/image transforms

Avoid:

-   excessive bouncing
-   aggressive parallax
-   long animations
-   animations that delay content access

Suggested transition:

``` css
transition: 180ms–300ms ease;
```

------------------------------------------------------------------------

# 28. Interaction Details

Buttons should have obvious states:

-   default
-   hover
-   focus
-   active
-   disabled

Links should have subtle hover feedback.

Interactive elements must have:

-   keyboard focus
-   accessible labels
-   adequate touch targets
-   visible state changes

------------------------------------------------------------------------

# 29. Page Architecture

Codex should implement a reusable design system rather than individually
styling every page.

Recommended component families:

``` text
Layout
├── Header
├── MobileNavigation
├── Footer

Typography
├── Eyebrow
├── DisplayHeading
├── SectionHeading
├── BodyText

Marketing
├── Hero
├── CTA
├── Metrics
├── TrustStrip
├── ServicesList
├── CaseStudy
├── ProcessSteps
├── Differentiators
├── Testimonials
├── Pricing
├── BlogGrid
├── FAQ

UI
├── Button
├── Link
├── Badge
├── Divider
├── Accordion
├── Card
```

Build these primitives first.

Then compose pages from them.

------------------------------------------------------------------------

# 30. Page Templates

Implement these page families:

## Homepage

Hero → Metrics → Trust → Services → Positioning → Case Studies → Process
→ Differentiators → Testimonials → Pricing → Blog → CTA → FAQ → Footer

## About

Hero → company positioning → story → values/principles → metrics →
team/CTA

## Team

Hero → team grid → individual information → CTA

## Pricing

Hero → pricing comparison → included services → FAQ → CTA

## Case Studies

Hero → case-study grid/list → filters/categories if needed → CTA

## Case Study Detail

Hero → client/project metadata → challenge → approach → execution →
measurable results → gallery → related cases → CTA

## Services

Hero → service overview → service list → process → CTA

## Service Detail

Hero → service value proposition → capabilities → process →
proof/results → FAQ → CTA

## Blog

Hero → featured article → article grid → categories → pagination → CTA

## Blog Detail

Article header → metadata → article body → related content → CTA

## Contact

Hero → contact information → contact form → FAQ/expectation setting →
CTA

## 404

Simple branded error state with:

-   large 404
-   concise message
-   Home CTA

------------------------------------------------------------------------

# 31. Critical Codex Instructions

Do **not** reproduce the reference site literally.

Instead:

### Reproduce

-   visual hierarchy
-   spacing philosophy
-   editorial composition
-   section rhythm
-   typography scale
-   restrained color usage
-   metric presentation
-   service-list structure
-   case-study presentation
-   process presentation
-   testimonial treatment
-   pricing hierarchy
-   FAQ interaction
-   CTA rhythm
-   responsive philosophy
-   subtle motion

### Do not reproduce

-   exact text
-   exact copywriting
-   logos
-   brand names
-   photographs
-   illustrations
-   source code
-   proprietary assets
-   exact branded graphics
-   distinctive artwork
-   tracking/analytics implementation
-   hidden functionality

Use original content and original visual assets appropriate to the new
project.

------------------------------------------------------------------------

# 32. Quality Bar

The implementation should NOT look like:

-   a generic Tailwind template
-   a generic SaaS dashboard
-   a collection of shadcn cards
-   an AI-generated landing page with repetitive sections
-   a page where every section uses the same card component

It SHOULD look like:

-   a professionally art-directed agency website
-   strong editorial typography
-   intentional composition
-   deliberate whitespace
-   varied section structures
-   strong conversion hierarchy
-   restrained visual effects
-   polished responsive behavior

------------------------------------------------------------------------

# 33. Implementation Order

Codex should work in this order:

1.  Establish design tokens.
2.  Build global typography.
3.  Build header/navigation.
4.  Build buttons and basic primitives.
5.  Build hero.
6.  Build metrics.
7.  Build services list.
8.  Build case-study components.
9.  Build process component.
10. Build testimonial component.
11. Build pricing.
12. Build blog components.
13. Build FAQ.
14. Build CTA.
15. Build footer.
16. Compose homepage.
17. Build secondary page templates.
18. Add responsive behavior.
19. Add motion.
20. Perform visual QA at desktop, tablet and mobile widths.

Do not build every page independently before establishing the shared
component system.

------------------------------------------------------------------------

# 34. Final Design Rule

The goal is **not to make a clone of Marrky**.

The goal is to understand why its composition feels premium and
reproduce those underlying design decisions in an original visual
system.

When forced to choose between:

-   copying a visual detail literally, or
-   preserving the underlying design principle with an original
    treatment,

always choose the second.
