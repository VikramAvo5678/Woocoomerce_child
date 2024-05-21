<?php

add_theme_support( 'post-thumbnails' );


//enqueue the file

function addMyScript() {
    wp_enqueue_style('assets-main-css',get_template_directory_uri().'/assets/main.css',);
}
add_action('wp_head', 'addMyScript');


//menu Features
add_theme_support('menus');
function register_my_menus() {
    $args = array( 
        'menu-1' => __( 'Main Menu' )
    );
    register_nav_menus( $args );
}
add_action( 'init', 'register_my_menus' );


//CPT
// Our custom post type function
function create_posttype() {
  
    register_post_type( 'movies',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Movies' ),
                'singular_name' => __( 'Movie' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'movies'),
            'show_in_rest' => true,
  
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

function custom_post_type() {
  
        $labels = array(
            'name'                => _x( 'Movies', 'Post Type General Name', 'twentytwentyfour' ),
            'singular_name'       => _x( 'Movie', 'Post Type Singular Name', 'twentytwentyfour' ),
            'menu_name'           => __( 'Movies', 'twentytwentyfour' ),
            'parent_item_colon'   => __( 'Parent Movie', 'twentytwentyfour' ),
            'all_items'           => __( 'All Movies', 'twentytwentyfour' ),
            'view_item'           => __( 'View Movie', 'twentytwentyfour' ),
            'add_new_item'        => __( 'Add New Movie', 'twentytwentyfour' ),
            'add_new'             => __( 'Add New', 'twentytwentyfour' ),
            'edit_item'           => __( 'Edit Movie', 'twentytwentyfour' ),
            'update_item'         => __( 'Update Movie', 'twentytwentyfour' ),
            'search_items'        => __( 'Search Movie', 'twentytwentyfour' ),
            'not_found'           => __( 'Not Found', 'twentytwentyfour' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyfour' ),
        );
          
          
        $args = array(
            'label'               => __( 'movies', 'twentytwentyfour' ),
            'description'         => __( 'Movie news and reviews', 'twentytwentyfour' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'taxonomies'          => array( 'genres' ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
      
        );
          
        // Registering your Custom Post Type
        register_post_type( 'movies', $args );
      
    }
      
    /* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */
      
    add_action( 'init', 'custom_post_type', 0 );
