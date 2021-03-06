<?php

add_theme_support( 'automatic-feed-links' );

add_action( 'init', 'learn_register_menus' );
function learn_register_menus() {
	register_nav_menus(
		array( 'fp-below-header-menu' => 'Front Page Below Header Menu' )
	);
}

add_action( 'widgets_init', 'learn_register_sidebars' );
function learn_register_sidebars() {
	register_sidebar( array(
		'name' => 'Main Sidebar',
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) );
}


