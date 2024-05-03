<?php

add_action( 'init', '_themename_acf_init_block_types' );
function _themename_acf_init_block_types() {
	register_block_type( get_template_directory() . '/blocks/button-group/block.json' );
	register_block_type( get_template_directory() . '/blocks/card-block/block.json' );
}

function _studio14_scripts() {
	
	wp_enqueue_style( 'studio14-style', get_stylesheet_uri() );
	
	wp_enqueue_style('studio14-style-min', get_stylesheet_directory_uri() . '/dist/css/bundle.css', array(), filemtime( get_stylesheet_directory() . '/dist/css/bundle.css' ), false );
	
	wp_enqueue_script('studio14-js', get_stylesheet_directory_uri() . '/dist/js/bundle.js', array('jquery'), filemtime( get_stylesheet_directory() . '/dist/js/bundle.js' ), true);
	
	$translation_array = array('ajaxURL' => admin_url('admin-ajax.php'), 'nonce' => wp_create_nonce( 'theme-script-nonce' ));
	wp_localize_script( 'studio14-js', 'theme', $translation_array );
}

add_action( 'wp_enqueue_scripts', '_studio14_scripts' );