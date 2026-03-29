<?php

class ACT_Post_Views {

    public function __construct() {
        add_filter('the_content', [$this, 'display']);
    }

    public function display($content) {

        if (is_single() && in_the_loop() && is_main_query()) {

            global $post;

            $views = get_post_meta($post->ID, 'post_views', true);
            $views = $views ? intval($views) : 0;

            return $content . '<p class="act-post-views">Views: ' . esc_html($views) . '</p>';
        }

        return $content;
    }
}