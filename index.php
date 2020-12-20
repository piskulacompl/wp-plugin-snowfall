<?php
/*
Plugin Name: Snowfall
Description: Prosta wtyczka dodająca opady śniegu na stronę.
Version: 1.0
Author: Patrycja (Patka) Piskuła
Author URI: https://piskula.com.pl
*/

function snowfall_enqueue() {
    wp_enqueue_script(
        'snowfall',
        plugin_dir_url(__FILE__).'snowfall.js'
    );
}

add_action('wp_enqueue_scripts', 'snowfall_enqueue');

?>