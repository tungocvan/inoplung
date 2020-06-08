<?php
function getPost($slug){
	$args = array(
		'post_type' => 'post',
		'name' => $slug
	);
	$vnkings = new WP_Query($args);
	$data = array_map(
		function( $post ) {
			return (array) $post;
		},
		$post = $vnkings->posts
	 );
	 return $data;
}
function getPostCateSlug($slug){
	$args = array(
		'post_type' => 'post',
		'category_name' => $slug
	);
	$vnkings = new WP_Query($args);
	$data = array_map(
		function( $post ) {
			return (array) $post;
		},
		$post = $vnkings->posts
	 );
	 
	 foreach($data as $key => $value){
		$id=$value['ID'] ;
		$data[$key]['img'] = get_the_post_thumbnail_url($id, 'post-thumbnail'); 
	 }

	 return $data;
}

?>

