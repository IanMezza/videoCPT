<?php

/*
Plugin Name: Video CPT
Plugin URI: https://github.com/IanMezza/videoCPT
Description: Simple Wordpress Custom Post Type is a very simple CPT plugin to post youtube embebed videos in a Wordpress page.
Version: 1.0
Author: Ian Meza
Author URI: https://github.com/IanMezza
License: A "Slug" license name e.g. GPL2
*/

function create_Youtube_CPT() {
	register_post_type('youtube_video',
		array(
			'labels' => array(
				'name' => __('Youtube Videos'),
				'singular_name' => __('Youtube Video'),
				'add_new' => _x('Agregar Nuevo', 'video'),
				'add_new_item' => __('Agregar un Video'),
				'edit_item' => __('Editar Video'),
				'new_item' => __('Nuevo Video'),
				'all_items' => __('Todos los Videos'),
				'view_item' => __('Ver Video'),
				'search_items' => __('Buscar Video'),
				'not_found' =>  __('Videos no encontrados'),
				'not_found_in_trash' => __('No hay Videos en la Papelera'),
			),
			'pubic' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'youtube_videos'),
			'show_ui' => true,
			'show_in_rest' => true,
			'show_in_menu' => true,
			'menu_icon' => 'dashicons-video-alt3',
			'capability_type' => 'post',
			'taxonomies'  => array( 'category' ),
			'supports' => array( 'title', 'excerpt', 'custom-fields' )
		)
	);

}
add_action('init', 'create_Youtube_CPT');