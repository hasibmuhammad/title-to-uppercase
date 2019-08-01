<?php
/*
Plugin Name: Capitalize Title
PLugin URI: https://github.com/hasibmuhammad
Description: This plugin will capitalize your post title.
Version: 1.0
Author: Hasib Muhammad
Author URI: https://github.comm/hasibmuhammad
License: GPLv2 or later
Text Domain: capitalize-title
Doomain Path: /languages/
 */

function ct_load_textdomain()
{
    load_plugin_textdomain('capitalize-title', false, dirname(__FILE__) . "/languages");
}
add_action("plugins_loaded", "ct_load_textdomain");

function ct_uppercase_title_post($title)
{
    $strppedTitle = strip_tags($title);
    $uppercase = strtoupper($strppedTitle);
    return $uppercase;
}
add_filter("the_title","ct_uppercase_title_post");
