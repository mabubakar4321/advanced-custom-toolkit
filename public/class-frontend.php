<?php

class ACT_Frontend {

    public function __construct() {
        add_action('wp_enqueue_scripts', [$this, 'enqueue']);
    }

    public function enqueue() {

        if (is_single()) {

            wp_enqueue_style('act-css', ACT_URL . 'assets/css/frontend.css');

            wp_enqueue_script(
                'act-js',
                ACT_URL . 'assets/js/frontend.js',
                [],
                '1.0',
                true
            );

            wp_localize_script('act-js', 'act_ajax', [
                'ajax_url' => admin_url('admin-ajax.php'),
                'post_id' => get_the_ID(),
                'nonce' => wp_create_nonce('act_nonce')
            ]);
        }
    }
}