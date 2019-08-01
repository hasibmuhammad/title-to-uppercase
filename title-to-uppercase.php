<?php
/*
Plugin Name: Title to Uppercase
PLugin URI: https://github.com/hasibmuhammad/title-to-uppercase
Description: This plugin will capitalize your post title.
Version: 1.0
Author: Hasib Muhammad
Author URI: https://github.comm/hasibmuhammad
License: GPLv2 or later
Text Domain: title-to-uppercase
Doomain Path: /languages/
 */

function ttu_load_textdomain()
{
    load_plugin_textdomain('title-to-uppercase', false, dirname(__FILE__) . "/languages");
}
add_action("plugins_loaded", "ttu_load_textdomain");

function ttu_uppercase_title_post($title)
{
    $strppedTitle = strip_tags($title);
    $uppercase = strtoupper($strppedTitle);
    return $uppercase;
}
add_filter("the_title","ttu_uppercase_title_post");
