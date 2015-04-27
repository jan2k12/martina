<?php

add_theme_support( 'post-thumbnails', array( 'page' ) ); 

// Registering Menus For Theme
 
add_action( 'init', 'register_my_menus' );
add_filter('nav_menu_css_class', 'build_dropdown', 10, 2);
add_action('template_redirect', 'my_scripts');

function build_dropdown($classes, $item){
    $pages=get_pages('child_of='.$item->ID);
    if(count($pages)>0){
        $classes[]="dropdown";
    }
    
    return $classes;
}

function register_my_menus() {
	register_nav_menus(
		array(
			'main' => __( 'Main' ),

		)
	);
}

function my_scripts() {
    wp_enqueue_script('jquery', get_bloginfo('template_directory').'/js/jquery.js');
    wp_enqueue_script('bootstrap', get_bloginfo('template_directory').'/js/bootstrap.min.js');
    
}

include 'nav_walker.php';
