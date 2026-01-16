# Changelog

All notable changes to `laravel-redoc` will be documented in this file

## 2.0.0 - TBD

### Added
- Support for Laravel 10, 11, 12, 13
- Support for PHP 8.1, 8.2, 8.3, 8.4 (in addition to existing 7.4, 8.0)
- UPGRADE.md guide for migration assistance
- COMPATIBILITY_ANALYSIS.md for technical details

### Changed
- Modernized routing syntax from `Route::group()` to fluent `Route::middleware()->group()`
- Expanded `illuminate/*` dependency ranges to support Laravel 8-13
- Updated `orchestra/testbench` to support testing across Laravel versions

### Notes
- **Zero breaking changes** - all existing functionality remains the same
- **PHP 7.4 and 8.0 still supported** - no forced upgrades required
- **Laravel 8 and 9 still supported** - existing projects continue working
- Composer automatically resolves compatible Laravel versions based on your PHP version
- This is a compatibility expansion release to enable downstream projects to upgrade when ready

## 1.0.0 - 2022-03-06

- Initial release
