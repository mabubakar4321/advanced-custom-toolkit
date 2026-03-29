<?php

class ACT_Helpers {

    public static function sanitize($value) {
        return sanitize_text_field($value);
    }

    public static function escape($value) {
        return esc_html($value);
    }

    public static function get_option($key, $default = '') {
        return get_option($key, $default);
    }
}