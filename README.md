# Personal Website

This is a WordPress-based website project for Natalie Smith.

## Project Structure

- WordPress core is installed in the `wp` directory
- Custom content is located in `wp-content`
- The child theme is in `wp-content/themes/twentytwentyfour-child`
```
├── composer.json
├── wp-config.php
├── wp-content
│   ├── mu-plugins
│   ├── plugins
│   ├── themes
├── wp
├── vendor
```

## Requirements

- PHP 7.4 or higher
- Composer for dependency management

## Installation

1. Clone this repository
2. Run `composer install` to install dependencies
3. Configure your web server to point to the project root
4. Set up your WordPress database
5. Copy `wp-config-sample.php` to `wp-config.php` and configure it with your database details

## Theme

The site uses a child theme of Twenty Twenty-Four (v1.2+).

## Development

- The child theme's functions are defined in `wp-content/themes/twentytwentyfour-child/functions.php`
- Custom styles should be added to `wp-content/themes/twentytwentyfour-child/style.css`

## Coding Standards

This project follows WordPress Coding Standards. You can run checks using:
`composer phpcs`

And automatically fix some issues with:
`composer phpcbf`

## License

This project is licensed under the GPL License.

## Author

Developed by ns-rx (hello@nataliesmith.dev)