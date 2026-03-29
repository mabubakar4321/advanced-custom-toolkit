<?php

class ACT_Ajax {

    public function __construct() {
        add_action('wp_ajax_act_track_post_view', [$this, 'track']);
        add_action('wp_ajax_nopriv_act_track_post_view', [$this, 'track']);
    }

    public function track() {

        if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'act_nonce')) {
            wp_send_json_error();
        }

        $post_id = intval($_POST['post_id']);

        $views = get_post_meta($post_id, 'post_views', true);
        $views = $views ? intval($views) : 0;
        $views++;

        update_post_meta($post_id, 'post_views', $views);

        wp_send_json_success(['views' => $views]);
    }
}