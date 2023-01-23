# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/).

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
