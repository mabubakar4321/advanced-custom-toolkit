<?php

class ACT_Admin {

    public function __construct() {
    add_action('admin_menu', [$this, 'menu']);
    add_action('admin_init', [$this, 'settings']);

    // ✅ ADD THIS LINE
    add_action('admin_enqueue_scripts', [$this, 'assets']);
}

    public function menu() {
        add_menu_page(
            'ACT Toolkit',
            'ACT Toolkit',
            'manage_options',
            'act-settings',
            [$this, 'page'],
            'dashicons-admin-tools'
        );
    }

    public function settings() {
        register_setting('act_group', 'act_message');
    }

    public function page() {
    require ACT_PATH . 'admin/views/settings-page.php';
}

public function assets() {

    wp_enqueue_style(
        'act-admin-css',
        ACT_URL . 'assets/css/admin.css'
    );

    wp_enqueue_script(
        'act-admin-js',
        ACT_URL . 'assets/js/admin.js',
        [],
        '1.0',
        true
    );
}
    }
