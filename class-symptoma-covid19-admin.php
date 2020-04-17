<?php
/**
 * Plugin Name: Symptoma COVID-19 Chatbot
 * Plugin URI: https://github.com/symptoma/covid19-wordpress
 * Description: This plugin integrates the Symptoma chatbot to check COVID-19 symptoms on a global basis
 * Version: 1.0.1
 * Date: 2020-04-17
 * Author: Helmuth Lammer, Thomas Lutz
 * Author URI: https://www.symptoma.com
 * License: GNU GENERAL PUBLIC LICENSE Version 2, June 1991
 */


add_action( 'admin_menu', 'symptoma_covid19_init' );
add_action('wp_footer','symptoma_covid19_hook_footer');

define("SYMPTOMA_COVID19_SLUG", 'symptoma-covid19');

function symptoma_covid19_init(){

    $iconPath = plugin_dir_url(__FILE__) . "img/logo.png";
    add_menu_page( 'Covid19', 'Covid19', 'manage_options', SYMPTOMA_COVID19_SLUG.'-item', 'symptoma_covid19_backend', $iconPath);

}

function symptoma_covid19_backend(){

    $itemSlug = SYMPTOMA_COVID19_SLUG."-item";
    include "views/settings-view.php";
}

function symptoma_covid19_hook_footer() {

    include "views/footer-hook-view.php";

}

function symptoma_covid19_load_textdomain() {
    load_plugin_textdomain( SYMPTOMA_COVID19_SLUG, false, basename( dirname( __FILE__ ) ) . '/languages' );
}

add_action( 'plugins_loaded', 'symptoma_covid19_load_textdomain' );
