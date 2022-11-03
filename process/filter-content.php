<?php 

function r_filter_recipe_content( $content ){

	if( !is_singular('beyond-recipe') ) {
		return $content;
	}

	global $post, $wpdb;
	
	$beyond_recipe_data = get_post_meta($post->ID, 'beyond_recipe_data', true); 

	//var_dump($beyond_recipe_data);

	$beyond_recipe_html = file_get_contents('beyond-recipe-template.php', true);

	$beyond_recipe_html = str_replace('RATE_I18N', __("Rating", "beyond-recipe"), $beyond_recipe_html);

	$beyond_recipe_html = str_replace('RECIPE_ID', $post->ID, $beyond_recipe_html);
	
	$beyond_recipe_html = str_replace('RECIPE_RATING',1, $beyond_recipe_html);

	$user_IP = $_SERVER['REMOTE_ADDR'];

	$ratings_count = $wpdb->get_var(
		"SELECT COUNT(*) FROM `". $wpdb->prefix .  "recipe_ratings` where recipe_id ='" . $post->ID . "' AND user_ip= '".$user_IP."' "
	);

	if( $ratings_count > 0 ){

		$recipe_html = str_replace(

			'READONLY_PLACEHOLDER', 'data-rateit-READONLY="true"', $beyond_recipe_html
		);
	}
	else
	{
		$recipe_html = str_replace(

			'READONLY_PLACEHOLDER', '', $beyond_recipe_html
		);
	}

	



	return $beyond_recipe_html  .  $content;


}
