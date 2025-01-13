# WordPress Page Parent Filter

A lightweight WordPress plugin that adds a parent page filter to the WordPress admin panel, making it easier to manage hierarchical pages.

## Description

This plugin adds a dropdown filter to the WordPress pages list, allowing administrators to quickly filter pages by their parent page. It's particularly useful for sites with many nested pages or complex hierarchical structures.

## Features

- Clean and simple parent page filter in the admin panel
- Hierarchical dropdown menu showing all available parent pages
- Optimized for performance with minimal database queries
- Compatible with WordPress multisite
- No configuration needed - works out of the box

## Installation

1. Download the plugin zip file
2. Go to WordPress admin panel > Plugins > Add New
3. Click on "Upload Plugin" and choose the downloaded file
4. Click "Install Now" and then "Activate"

Or manually:

1. Upload the plugin files to `/wp-content/plugins/page-parent-filter` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

## Requirements

- WordPress 5.0 or higher
- PHP 7.2 or higher

## Usage

1. Go to Pages > All Pages in your WordPress admin panel
2. Look for the dropdown menu labeled "Filter by parent page"
3. Select a parent page to filter the list
4. The page list will update to show only the child pages of the selected parent

## Screenshots

1. Parent page filter dropdown in action
2. Filtered results showing child pages

## Frequently Asked Questions

**Q: Does this plugin modify my database?**
A: No, this plugin only adds a filter to the admin interface and doesn't modify any content or structure in your database.

**Q: Will this work with custom post types?**
A: Currently, this plugin is designed to work specifically with WordPress pages.

**Q: Can I modify the filter to show more levels of hierarchy?**
A: The plugin shows all available parent pages by default in a hierarchical structure.

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

This project is licensed under the GPL v2 or later - see the [LICENSE.md](LICENSE.md) file for details.

## Author

Jean

## Changelog

### 1.0.0
- Initial release
- Added parent page filter functionality
- Basic admin interface implementation
