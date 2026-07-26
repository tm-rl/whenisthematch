<?php
/**
 * Plugin Name: WhenIsTheMatch Widget
 * Description: Display your football team's next match and live score on your WordPress website.
 * Version: 1.0.0
 * Author: WhenIsTheMatch
 * Author URI: https://whenisthematch.com
 * License: GPLv2 or later
 * Text Domain: whenisthematch-widget
 */

if (!defined('ABSPATH')) {
    exit;
}

define(
    'WHENISTHEMATCH_WIDGET_VERSION',
    '1.0.0'
);

define(
    'WHENISTHEMATCH_WIDGET_PLUGIN_DIR',
    plugin_dir_path(__FILE__)
);


/**
 * Load plugin files
 */
require_once WHENISTHEMATCH_WIDGET_PLUGIN_DIR . 'includes/shortcode.php';


/**
 * Load frontend assets
 */
function whenisthematch_widget_enqueue_scripts() {

    wp_enqueue_script(
        'whenisthematch-widget',
        plugins_url(
            'assets/widget.js',
            __FILE__
        ),
        array(),
        WHENISTHEMATCH_WIDGET_VERSION,
        true
    );
}

add_action(
    'wp_enqueue_scripts',
    'whenisthematch_widget_enqueue_scripts'
);