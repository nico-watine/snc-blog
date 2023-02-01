# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/).

## [1.27.0]

### Removed
- `header.php` - Removed `<meta http-equiv="x-ua-compatible" content="ie=edge">` line
- `header.php` - Removed `<?php get_template_part('template-parts/svgpack-sprite'); ?>` since is obsolete partial and is unused
- `header.php` - Removed function that adds obsolete `.col-` class to body content
- `footer.php` - Removed lines regarding unused `nav.social-navigation`

### Added
- `header.php` - Added `<meta name="color-scheme" content="light dark">` line

## [1.26.0]

### Added
- `functions.php` - added features from child theme functions (such as remove Wordpress Generator from head) that should really be in the parent theme

## [1.25.0]

### Added
- `functions.php` - add line back that was removed in v1.15.0 to enqueue style.css
- child theme `functions.php` - tweaked line to import child CSS, but not double import of parent CSS

## [1.24.0]

### Changed
- CSS - `font-size` of `pre` and `code` from `px` to `rem`

## [1.23.0]

### Changed
- CSS - tweaked more `padding` and `margin` for nav elements

## [1.22.0]

### Changed
- CSS - converted most `px` measurements to `rems`

## [1.21.0]

### Added
- CSS - added `text-underline-offset` and `text-decoration-thickness` to `<a>` for better `:hover` styles
- CSS - tweak post meta author `a:hover` styles

### Removed
- `content.php` - removed the `<span>` that wraps the "Featured" tag and also the `svg` contained within

## [1.20.0]

### Changed
- header.php - Changed masthead URL from `/` to `/blog/`

## [1.19.0]

### Added
- functions.php - added function to dequeue `jquery-migrate.js` from loading in `<head>`

## [1.18.0]

### Changed
- CSS - changed `<footer>` background scrim to multiply
- footer.php - simplified div markup of `.colophon`

## [1.17.0]

### Added
- `max-width: 100%` to `.entry__info` so that `overflow-wrap:break-word` on `.entry__title` functions correctly

### Changed
- `overflow-wrap:break-word` rule on various elements
- Changed `code` within `figcaption` from bold to normal font-weight

## [1.16.0]

### Changed
- functions.php - Changed excerpt word count from 120 to 30

### Added
- Static page templates for Index and Our-Services

## [1.15.0]

### Removed
- functions.php - Removed line to prevent double import of theme's style.css

### Changed
- functions.php - Changed hook labels to match theme name

## [1.14.4]

### Removed
- `padding-bottom` for `a`
- Overly specific rules related to `overflow-wrap: break-word`
- `color: inherit;` from headings elements

### Changed
- scss variable naming conventions
- `<body> background-color` to `#ebebeb`

## [1.14.3]

### Changed
- All media-queries pertaining to the theme were changed to use new scss rem-based vars

## [1.14.2]

### Removed
- Styles for certain unused elements

### Added
- Many annotations to scss partials

## [1.14.1]

### Added
- Initial commit of existing Wordpress theme files, beginning at v1.13.9
