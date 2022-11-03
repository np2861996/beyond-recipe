<?php
	function r_add_new_recipe_columns( $columns ){

		$new_columns = [];
		$new_columns['cb'] = '<input type="checkbox">';
		$new_columns['title'] = __('Title', 'beyond-recipe');
		$new_columns['author'] = __('Author', 'beyond-recipe');
		$new_columns['categories'] = __('Categories', 'beyond-recipe');
		$new_columns['count'] = __('Rating Count', 'beyond-recipe');
		$new_columns['rating'] = __('Average Rating', 'beyond-recipe');
		$new_columns['date'] = __('Date', 'beyond-recipe');

		return $new_columns;
		

	}
	 
	function r_manage_beyond_recipe_columns( $column, $post_id ){
		
		switch( $column ){

			case 'count':
				$recipe_data = get_post_meta( $post_id, 'beyond_recipe_data', true );
				echo isset($recipe_data['rating_count']) ? $recipe_data['rating_count']:0; 
				break;
			case 'rating':
				$recipe_data = get_post_meta( $post_id, 'beyond_recipe_data', true );
				echo isset($recipe_data['rating']) ? $recipe_data['rating']:'N/A';
				break;
			default:
				break;

		}

		

	}