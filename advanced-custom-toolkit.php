<?php
/**
 * Plugin Name: Advanced Custom Toolkit
 * Description: Professional WordPress plugin with shortcode, AJAX views, and admin panel.
 * Version: 1.0.0
 * Author: Sameer
 */

if (!defined('ABSPATH')) exit;

// Constants
define('ACT_PATH', plugin_dir_path(__FILE__));
define('ACT_URL', plugin_dir_url(__FILE__));

// Load core
require_once ACT_PATH . 'includes/class-init.php';

// Run plugin
function act_run() {
    $plugin = new ACT_Init();
    $plugin->run();
}
act_run();  