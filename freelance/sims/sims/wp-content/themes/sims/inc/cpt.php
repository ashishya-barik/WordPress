<?php
function courses_cpt() {
     register_post_type( 'courses',
            array(
                'labels' => array(
                'name' => __( 'Courses' ),
                'singular_name' => __( 'Courses' ),
                ),
                'public' => true,
                'has_archive' => true,
                'rewrite' => array('slug' => 'courses'),
                'supports' => array('title','editor', 'thumbnail'),
                'menu_icon'           => 'dashicons-book-alt'
            )
        );

        register_post_type( 'notice',
            array(
                'labels' => array(
                'name' => __( 'Notice' ),
                'singular_name' => __( 'Notice' ),
                ),
                'public' => true,
                'has_archive' => true,
                'rewrite' => array('slug' => 'notice'),
                'supports' => array('title','editor', 'thumbnail'),
                'menu_icon'           => 'dashicons-bell'
            )
        );

    flush_rewrite_rules();

}
add_action( 'init', 'courses_cpt', 0 );

