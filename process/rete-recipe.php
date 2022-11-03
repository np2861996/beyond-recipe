<?php 

function r_rate_recipe(){

	global $wpdb;

	$output  = [ 'status' => 1 ];
	$post_ID = absint( $_POST['rid'] );
	$rating  = round( $_POST['rating'], 1 );
	$user_IP = $_SERVER['REMOTE_ADDR'];

	$ratings_count = $wpdb->get_var(
		"SELECT COUNT(*) FROM `". $wpdb->prefix .  "recipe_ratings` where recipe_id ='" . $post_ID . "' AND user_ip= '".$user_IP."' "
	);

	if( $ratings_count > 0 ){

		wp_send_json($output);
	}

	$wpdb->insert(

		$wpdb->prefix . 'recipe_ratings',
			[

				'recipe_id' => $post_ID,
				'rating'    => $rating,
				'user_ip'   => $user_IP

			],
			[ '%d', '%f', '%s' ]
	);

	$recipe_data = get_post_meta( $post_ID, 'beyond_recipe_data', true );
	$recipe_data[ 'rating_count' ]++; 
	$recipe_data[ 'rating' ] = round($wpdb->get_var(
		"SELECT AVG('rating') FROM `". $wpdb->prefix .  "recipe_ratings` where recipe_id ='" . $post_ID . "' "
	), 1);

	update_post_meta( $post_ID, 'beyond_recipe_data', $recipe_data );


	$output['status'] = 2;
	wp_send_json($output);
}