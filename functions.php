<?php

    function admin_bar() {
        if(is_user_logged_in()) {
            add_filter('show_admin_bar', '__return_true', 1000);
        }
    }

add_action('init', 'admin_bar');

    function theme_css() {
        wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    }

add_action('wp_enqueue_scripts', 'theme_css');

    function theme_js() {
        global $wp_scripts;
        
        wp_enqueue_script('bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
        wp_enqueue_script('jquery_js', 'https://code.jquery.com/jquery-3.2.1.min.js');
    }

add_action('wp_enqueue_scripts', 'theme_js');


?>