<?php

function recipe_admin_init(){

	include('columns.php');
	add_filter( 'manage_beyond-recipe_posts_columns','r_add_new_recipe_columns' );
	add_filter( 'manage_beyond-recipe_posts_custom_column','r_manage_beyond_recipe_columns', 1, 2 ); 
}