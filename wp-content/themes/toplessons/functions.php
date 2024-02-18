<?php

if( function_exists('acf_add_options_page') ) {

//	acf_add_options_page();

    if ( function_exists( 'acf_add_options_page' ) ) {

        acf_add_options_page(
            array(
                'page_title' => 'General Theme Settings',
                'menu_title' => 'Theme Settings',
                'post_id'    => 'option',
                'menu_slug'  => 'theme-settings',
                'capability' => 'edit_theme_options',
            )
        );

        acf_add_options_sub_page(
            array(
                'page_title'  => 'General Settings',
                'menu_title'  => 'General',
                'parent_slug' => 'theme-settings',
                'capability'  => 'edit_theme_options',
            )
        );

        acf_add_options_sub_page(
            array(
                'page_title'  => 'Header Settings',
                'menu_title'  => 'Header',
                'parent_slug' => 'theme-settings',
                'capability'  => 'edit_theme_options',
            )
        );

        acf_add_options_sub_page(
            array(
                'page_title'  => 'Footer Settings',
                'menu_title'  => 'Footer',
                'parent_slug' => 'theme-settings',
                'capability'  => 'edit_theme_options',
            )
        );

        acf_add_options_sub_page(
            array(
                'page_title'  => 'Content Settings',
                'menu_title'  => 'Content',
                'parent_slug' => 'theme-settings',
                'capability'  => 'manage_options',
            )
        );

        acf_add_options_sub_page(
            array(
                'page_title'  => 'Marketing Settings',
                'menu_title'  => 'Marketing',
                'parent_slug' => 'theme-settings',
                'capability'  => 'edit_theme_options',
            )
        );

        acf_add_options_sub_page(
            array(
                'page_title'  => 'Integrations Settings',
                'menu_title'  => 'Integrations',
                'parent_slug' => 'theme-settings',
                'capability'  => 'edit_theme_options',
            )
        );
    }
}

//require get_stylesheet_directory() . '/app/AutoLoader.php';
//$loader = new AutoLoader();
//$loader->register();
//$loader->addNamespace( 'dmh', get_stylesheet_directory() . '/app' );
//
//View::$view_dir = get_stylesheet_directory() . '/templates/views';
//
//require get_stylesheet_directory() . '/includes/scripts-and-styles.php';


function create_team() {

    register_post_type( 'team',
        array(
            'labels' => array(
                'name' => __( 'Teams' ),
                'singular_name' => __( 'Team' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'team'),
            'show_in_rest' => true,
            'supports' => array('title','thumbnail','editor','page-attributes','excerpt'),
        )
    );
}
add_action( 'init', 'create_team' );

function create_reviews() {

    register_post_type( 'review',
        array(
            'labels' => array(
                'name' => __( 'Reviews' ),
                'singular_name' => __( 'Review' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'review'),
            'show_in_rest' => true,
            'supports' => array('title','thumbnail','editor','page-attributes','excerpt'),
        )
    );
}
add_action( 'init', 'create_reviews' );


register_nav_menu('footer','Footer Menu');
function custom_footer_menu() {
    wp_nav_menu(array(
        'container' => '',
        'menu_id' => 'menu-other-menu',
        'fallback_cb' => 'thesis_nav_menu',
        'theme_location' => 'footer',
    ));
}
add_action('thesis_hook_footer','custom_footer_menu');

register_nav_menu('footer-main','Footer Copyright');
function custom_footer_menu_copyright() {
    wp_nav_menu(array(
        'container' => '',
        'menu_id' => 'menu-footer-copyright',
        'fallback_cb' => 'thesis_nav_menu_copyright',
        'theme_location' => 'footer-main',
    ));
}
add_action('thesis_hook_footer_menu','custom_footer_menu_copyright');

register_nav_menu('header','Header Menu');
function custom_header_home_menu() {
    wp_nav_menu(array(
        'container' => '',
        'menu_id' => 'menu-main',
        'fallback_cb' => 'thesis_nav_menu',
        'theme_location' => 'header',
    ));
}
add_action('thesis_hook_header','custom_header_home_menu');

function get_teams( $args = null ) {
    $defaults = array(
        'numberposts'      => -1,
        'category'         => 0,
        'orderby'          => 'date',
        'order'            => 'DESC',
        'include'          => array(),
        'exclude'          => array(),
        'meta_key'         => '',
        'meta_value'       => '',
        'post_type'        => 'team',
        'suppress_filters' => true,
    );

    $parsed_args = wp_parse_args( $args, $defaults );
    if ( empty( $parsed_args['post_status'] ) ) {
        $parsed_args['post_status'] = ( 'attachment' === $parsed_args['post_type'] ) ? 'inherit' : 'publish';
    }
    if ( ! empty( $parsed_args['numberposts'] ) && empty( $parsed_args['posts_per_page'] ) ) {
        $parsed_args['posts_per_page'] = $parsed_args['numberposts'];
    }
    if ( ! empty( $parsed_args['category'] ) ) {
        $parsed_args['cat'] = $parsed_args['category'];
    }
    if ( ! empty( $parsed_args['include'] ) ) {
        $incposts                      = wp_parse_id_list( $parsed_args['include'] );
        $parsed_args['posts_per_page'] = count( $incposts );  // Only the number of posts included.
        $parsed_args['post__in']       = $incposts;
    } elseif ( ! empty( $parsed_args['exclude'] ) ) {
        $parsed_args['post__not_in'] = wp_parse_id_list( $parsed_args['exclude'] );
    }

    $parsed_args['ignore_sticky_posts'] = true;
    $parsed_args['no_found_rows']       = true;

    $get_posts = new WP_Query;
    return $get_posts->query( $parsed_args );

}

function block_recaptcha_badge() {
    if ( !is_page( array( 'contact-us' ) ) ) {
        wp_dequeue_script( 'google-recaptcha' );
        wp_deregister_script( 'google-recaptcha' );
        add_filter( 'wpcf7_load_js', '__return_false' );
        add_filter( 'wpcf7_load_css', '__return_false' );
    }
}
add_action( 'wp_print_scripts', 'block_recaptcha_badge' );

add_theme_support('post-thumbnails');