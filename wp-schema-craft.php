<?php
/**
 * Plugin Name:       SchemaCraft WP: Custom Post Type Schema Generator
 * Plugin URI:        https://github.com/smit-backend/wp-schema-craft
 * Description:       Clean OOP builder for WordPress Custom Post Types, taxonomies, and meta fields via expressive configuration arrays.
 * Version:           1.0.0
 * Author:            smit-backend
 * Author URI:        https://github.com/smit-backend
 * License:           MIT
 * Text Domain:       wp-schema-craft
 */

if (!defined('ABSPATH')) {
    exit;
}

final class SchemaBuilder
{
    public static function boot(): void
    {
        // WordPress hooks bootstrapping
    }
}

add_action('plugins_loaded', ['SchemaBuilder', 'boot']);
