<?php

class ACT_Shortcode {

    public function __construct() {
        add_shortcode('custom_message', [$this, 'render']);
    }

    public function render($atts) {

        $atts = shortcode_atts([
            'text' => 'Default Message'
        ], $atts);

        $text = get_option('act_message') ?: $atts['text'];

        return '<div class="act-message">' . esc_html($text) . '</div>';
    }
}