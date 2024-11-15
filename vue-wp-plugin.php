<?php
/*
Plugin Name: Vue WP Plugin
Description: A custom WordPress plugin that uses Vue.js.
Version: 1.0
Author: Your Name
*/

if (!defined('ABSPATH')) {
    exit;
}
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

use Vuep\Inc\AdminMenu;
new AdminMenu();

function vue_wp_plugin_enqueue_admin_scripts($hook) {
    // Load scripts only on the specific admin page
    if ($hook === 'toplevel_page_vue-wp-plugin') {
        wp_enqueue_script(
            'vue-wp-plugin-admin-script',
            plugins_url('/dist/main.js', __FILE__),
            array(),
            '1.0',
            true
        );

        wp_enqueue_style(
            'vue-wp-plugin-admin-style',
            plugins_url('/dist/assets/main.css', __FILE__)
        );
    }
}
add_action('admin_enqueue_scripts', 'vue_wp_plugin_enqueue_admin_scripts');