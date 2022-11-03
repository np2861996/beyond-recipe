<?php

function r_save_post_admin( $post_id, $post, $update ){

	$beyond_recipe_data = get_post_meta( $post_id, 'beyond_recipe_data', true);
	$beyond_recipe_data = empty($beyond_recipe_data) ? []:$beyond_recipe_data;
	$beyond_recipe_data['rating'] = isset($beyond_recipe_data['rating']) ? absint($beyond_recipe_data['rating']) : 0;
	$beyond_recipe_data['rating_count'] = isset($beyond_recipe_data['rating_count']) ? absint($beyond_recipe_data['rating_count']) : 0;

	update_post_meta( $post_id, 'beyond_recipe_data', $beyond_recipe_data );

}