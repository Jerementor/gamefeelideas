<?php
//Loading in Scripts
function gamefeelideas_enqueue_styles(){
    wp_enqueue_script('webflow-js', get_template_directory_uri() . '/assets/js/webflow.js', array('jquery'));
    // wp_enqueue_script('gamefeelideas_custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'));
    
    wp_enqueue_style("normalize",  get_template_directory_uri() . "/assets/css/normalize.css");
    wp_enqueue_style("webflow",  get_template_directory_uri() . "/assets/css/webflow.css");
    wp_enqueue_style("gamefeelideas",  get_template_directory_uri() ."/assets/css/gamefeelideas2.webflow.css");
    wp_enqueue_style("gamefeelideas-style", get_stylesheet_uri());
    
}
add_action("wp_enqueue_scripts", "gamefeelideas_enqueue_styles");
function gamefeelideas_menu_setup(){
    
    //Registers custom primary nav menu 
    register_nav_menus( array(
        'logged-in'     => __("Logged-In Menu", "gamefeelideas-login"),
        'logged-out'    => __("Logged-Out Menu", "gamefeelideas-logout"),
        'main-nav'    => __("Main-Nav Menu", "gamefeelideas-mainnav"),
        // 'drop-down'    => __("Dropdown Menu", "thegameclass-drop"),
        // 'second-nav'    => __("Second Nav Menu", "thegameclass-secondnav"),
        
    ));
    
}
add_action("after_setup_theme", "gamefeelideas_menu_setup");
function gamefeelideas_setup(){
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	
	) );
}
add_action( 'after_setup_theme', 'gamefeelideas_setup' );

//remove_filter('the_content', 'wpautop');


add_post_type_support( 'page', 'excerpt' );

// add_filter ('get_the_excerpt','gamefeelideas_filter_excerpt');

// function gamefeelideas_filter_excerpt ($post_excerpt) { 
//   $post_excerpt = '<p class="jer_blog_sub">' . $post_excerpt . '</p>';
//   return $post_excerpt;
// }  

function gamefeelideas_widgets(){
  
    register_sidebar(array(
     'name'           => __('Categories- Sidebar', 'gamefeelideas'),
     'id'             => 'article-sidebar',
     'description'    => __('Add widgets here to appear in the sidebar', 'gamefeelideas'),
     'before_widget'  => '<div id="%1$s" class="%2$s">',
     'after_widget'   => '</div>',
     'before_title'   => '<h3 class="jer_h3"> ',
     'after_title'    => '</h3>',
  ));
  
  
  
    
}
add_action('widgets_init', 'gamefeelideas_widgets');

add_filter('widget_title','gamefeelideas_widget_title'); 
function gamefeelideas_widget_title($t)
{

    return null;
}


function gamefeelideas_edd_empty_cart_redirect() {
	$cart 		= function_exists( 'edd_get_cart_contents' ) ? edd_get_cart_contents() : false;
	$redirect 	= site_url( 'join-community' ); // could be the URL to your shop
	if ( function_exists( 'edd_is_checkout' ) && edd_is_checkout() && ! $cart ) {
		wp_redirect( $redirect, 301 ); 
		exit;
	}
}
add_action( 'template_redirect', 'gamefeelideas_edd_empty_cart_redirect' );



function gamefeelideas_disable_admin_bar() {
    if (current_user_can('Subscriber' || 'EDD Subscriber')) {
        show_admin_bar(false);
    }
}

add_action('admin_init', 'gamefeelideas_disable_admin_bar');



function gamefeelideas_disable_dashboard() {
    if (!is_user_logged_in()) {
        return null;
    }
    if (!current_user_can('administrator') && is_admin()) {
        wp_redirect(home_url());
        exit;
    }
}

add_action('admin_init', 'gamefeelideas_disable_dashboard');
