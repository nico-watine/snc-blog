# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/).

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
