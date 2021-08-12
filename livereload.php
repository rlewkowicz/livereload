<?php
/*
Plugin Name: LiveReload
Plugin URI: https://hireryan.today
Description: Add the LiveReload javascript snippet to your site
Version: 1.0
Author: Ryan Lewkowicz
Author URI: https://github.com/rlewkowicz
*/

function livereload_snippet_enqueue_js() {
    $url = home_url( );

    wp_register_script('livereload', $url . ':35729/livereload.js?snipver=1', null, false, true);
    wp_enqueue_script('livereload');
}

add_action( 'wp_enqueue_scripts', 'livereload_snippet_enqueue_js' );
add_action( 'admin_enqueue_scripts', 'livereload_snippet_enqueue_js' );
