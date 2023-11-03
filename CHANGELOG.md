# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/).

## [1.41.0]

### Removed
- `_theme-basics.scss` - Removed all `blockquote`-related rules since are just copies of rules contained in `_blockquote.scss`


## [1.40.1]

### Added
- `_page-structure.scss` - Added `hyphens:auto` to `<p>` inside main article text
- `_pre-code.scss` - Added `hyphens:none` 

## [1.40.0]

### Changed
- `functions.php` - revert autoversioning to self's theme number and call parent theme's version via child theme `functions.php`

## [1.39.0]

### Changed
- `functions.php` - got CSS and JS autoversioning functioning on parent theme

## [1.38.3]

### Added
- `_headings.scss` - Make sure `<code>` inside all `<h1-h6>` is `font-weight:normal`

## [1.38.2]

### Changed
- `_embed-plus-youtube.scss` - Make sure `<code>` inside the `<h5>` is `font-weight:normal`
	
## [1.38.1]

### Changed
- `_page-structure.scss` - Make `.wp-block-heading` `text-align:left` because they don't look good with `text-align:justify` on small viewports
- `_embed-plus-youtube.scss` - Add `!important` to the `<h5>` `text-align` to keep it `left`

## [1.38.0]

### Changed
- `header.php` - Changed site name from hard coded "STUDIO N CREATIONS BLOG" to Wordpress variable
- `_header-masthead.scss` - Removed improper use of `font-weight:700` for site name

## [1.37.2]

### Added
- `style.css` - Added `text-align:left` Jetpack-Related article thumbs, overruling `text-align:justy` set on article contents

## [1.37.1]

### Added
- `style.css` - Added `text-align:justify` to article contents

## [1.37.0]

### Changed
- `static-front-page.php` - "About Me" prose update
- `static-front-page.php` - `app.css` cache-bust date string updated
- `web-development-template` - `app.css` cache-bust date string updated

## [1.36.0]

### Changed
- `style.css` - Change `<h5>` and `<h6>` from `font-weight:normal` to `font-weight:bold`

### Added
- `style.css` - Added new rules to address `Embed Plus YouTube WordPress Plugin` styles

## [1.35.1]

### Changed
- `functions.php` - Tweaked favicon targeting method

## [1.35.0]

### Added
- `functions.php` - Added function so Gutenberg `<video>` blocks autoplay

## [1.34.0]

### Added
- `functions.php` - Added new ability of displaying inline site Favicons for outgoing anchorlinks

## [1.33.0]

### Changed
- `header.php` - Hard coded blog site name

## [1.32.0]

### Changed
- `style.css` - Added some tweaked `a:active` styles

## [1.31.0]

### Added
- Added new Dark Mode toggle. Affected files include: `style.css`, `bundle.js`

## [1.30.0]

### Removed
- `static-front-page.php` - Removed jquery CDN script lines
- `web-development-template.php` - Removed jquery CDN script lines

### Changed
- `static-front-page.php` - Updated the app-min.js UTC time stamp
- `web-development-template.php` - Updated the app-min.js UTC time stamp

## [1.29.0]

### Changed
- `static-front-page.php` - Updated tagline prose

## [1.28.0]

### Added
- `_jetpack.scss` - Enforced standard `<a:hover>` styles for Jetpack related posts

## [1.27.0]

### Removed
- `header.php` - Removed `<meta http-equiv="x-ua-compatible" content="ie=edge">` line
- `header.php` - Removed `<?php get_template_part('template-parts/svgpack-sprite'); ?>` since is obsolete partial and is unused
- `header.php` - Removed function that adds obsolete `.col-` class to body content
- `footer.php` - Removed lines regarding unused `nav.social-navigation`
- `app.js` - Removed svg directory and social icon code reference 
- `static-front-page.php` - Removed `<meta http-equiv="x-ua-compatible" content="ie=edge">`
- `web-development-template.php` - Removed `<meta http-equiv="x-ua-compatible" content="ie=edge">`

### Added
- `header.php` - Added `<meta name="color-scheme" content="light dark">` line

### Changed
- `template-tags.php` & `style.css` - corrected label typo of `.publised` to `.published`

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
