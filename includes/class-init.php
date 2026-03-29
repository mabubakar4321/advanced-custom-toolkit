<?php

class ACT_Init {

    public function run() {

        require_once ACT_PATH . 'admin/class-admin.php';
        require_once ACT_PATH . 'public/class-shortcode.php';
        require_once ACT_PATH . 'public/class-post-views.php';
        require_once ACT_PATH . 'public/class-ajax.php';
        require_once ACT_PATH . 'public/class-frontend.php';

        new ACT_Admin();
        new ACT_Shortcode();
        new ACT_Post_Views();
        new ACT_Ajax();
        new ACT_Frontend();
    }
}