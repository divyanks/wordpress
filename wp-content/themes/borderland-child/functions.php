<?php

/***  Enqueue Elated child theme stylesheet ***/

function elated_child_enqueue_style() {
	wp_register_style( 'childstyle', get_stylesheet_directory_uri() . '/style.css'  );
	wp_enqueue_style( 'childstyle' );
}
add_action( 'wp_enqueue_scripts', 'elated_child_enqueue_style', 11);
