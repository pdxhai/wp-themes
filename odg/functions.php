<?php
if ( ! function_exists( 'odg_setup' ) ) {
  function odg_setup() {
    load_theme_textdomain( 'odg' );
    add_theme_support( 'post-thumbnails' );
  	set_post_thumbnail_size( 825, 510, true );
    register_nav_menus( array(
  		'primary' => __( 'Primary Menu',      'odg' ),
  		'social'  => __( 'Social Links Menu', 'odg' ),
  	) );
    /*
    add_theme_support( 'post-formats', array(
  		'standard', 'image', 'gallery', 'video', 'audio'
  	) );
    */
  }
}
add_action( 'after_setup_theme', 'odg_setup' );

function odg_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'odg' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'odg' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'odg_widgets_init' );
