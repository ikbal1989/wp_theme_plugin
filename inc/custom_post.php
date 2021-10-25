<?php

/**
 * Add a custom post movies
 */
function create_custom_post() {
 
    register_post_type( 'faq',
        array(
            'labels' => array(
                'name' => __( 'Faqs' ),
                'singular_name' => __( 'Faq' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'faq'),
            'show_in_rest' => true,
        )
    );
}

add_action( 'init', 'create_custom_post' );



/*
* Creating a function to create our CPT
*/
 
function custom_post_type_taxonomies() {
 
    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Movies', 'Post Type General Name', 'blackcv' ),
        'singular_name'       => _x( 'Movie', 'Post Type Singular Name', 'blackcv' ),
        'menu_name'           => __( 'Movies', 'blackcv' ),
        'parent_item_colon'   => __( 'Parent Movie', 'blackcv' ),
        'all_items'           => __( 'All Movies', 'blackcv' ),
        'view_item'           => __( 'View Movie', 'blackcv' ),
        'add_new_item'        => __( 'Add New Movie', 'blackcv' ),
        'add_new'             => __( 'Add New', 'blackcv' ),
        'edit_item'           => __( 'Edit Movie', 'blackcv' ),
        'update_item'         => __( 'Update Movie', 'blackcv' ),
        'search_items'        => __( 'Search Movie', 'blackcv' ),
        'not_found'           => __( 'Not Found', 'blackcv' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'blackcv' ),
    );
         
    // Set other options for Custom Post Type
        
    $args = array(
        'label'               => __( 'movies', 'blackcv' ),
        'description'         => __( 'Movie news and reviews', 'blackcv' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 
            'title', 
            'editor', 
            'excerpt', 
            'author', 
            'thumbnail', 
            'comments', 
            'revisions', 
            'custom-fields'
        ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
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
    
add_action( 'init', 'custom_post_type_taxonomies', 0 );