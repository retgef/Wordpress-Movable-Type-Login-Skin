<?php
/*
Plugin Name: Fake Moveable Type Login
Plugin URI: http://coderrr.com
Description: Make the Wordpress login form look like Moveable Type's login form. ROFLOL
Version: 0.01
Author: Brian Fegter
Author URI: http://coderrr.com
License: GPL2
*/

function fake_mt_scripts(){
    $plugin_url =  WP_PLUGIN_URL . '/fake-mt-login';
    echo "<link rel='stylesheet' type='text/css' href='$plugin_url/css/style.css' />";
    echo "<script type='text/javascript' src='$plugin_url/js/core.js'></script>";
}
if(!$_GET['action']) add_action('login_head', 'fake_mt_scripts', 12);