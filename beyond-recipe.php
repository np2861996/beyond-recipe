<?php
/*
Plugin Name:  Beyond Recipe Plugin
Plugin URI:   https://www.beyondrecipeplugin.com 
Description:  A WordPress plugin for recipes that you needs.  
Version:      1.0
Author:       Nikhil Patel 
Author URI:   https://www.beyondrecipeplugin.com
License: GPLv2 or later
Text Domain: beyond-recipe
*/

/*
* privent from direct run
*/ 
if( !function_exists( 'add_action' ) ){
	exit();
}

//setup
define( 'BEYOND_RECIPE_PLUGIN_URL', __FILE__ );

//include
include('includes/activate.php');
include('includes/init.php');
include('process/save-post.php');
include('process/rete-recipe.php');
include('process/filter-content.php');
include('includes/front/enqueue.php');
include('includes/admin/init.php');


//hooks
register_activation_hook( __FILE__,'r_activate_plugin' );
add_action('init','recipe_init');
add_action('save_post_beyond-recipe','r_save_post_admin', 10, 3);
add_action('the_content','r_filter_recipe_content', 10, 3);
add_action('wp_enqueue_scripts', 'r_enqueue_scripts', 100);
add_action('wp_ajax_r_rate_recipe', 'r_rate_recipe');
add_action('wp_ajax_nopriv_r_rate_recipe', 'r_rate_recipe');
add_action('admin_init', 'recipe_admin_init');
//shortcodes