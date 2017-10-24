<?php 

	function theme_name_scripts() {
		wp_enqueue_script( '$handle', '$src');
	}

	add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

//Миниатюра
add_theme_support('post-thumbails' );

 ?>