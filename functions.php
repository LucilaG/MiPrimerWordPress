<?php

add_action('after_setup_theme', 'my_theme_theme_setup');

if ( ! function_exists( 'my_theme_theme_setup' ) ){
    function my_theme_theme_setup(){

        add_action('init', 'my_theme_register_my_menus');

        if ( ! function_exists( 'my_theme_register_my_menus' ) ){
            function my_theme_register_my_menus(){
                register_nav_menus(array(
                    'header-menu'  => esc_html__('Header Menu', 'my_theme'),
                    'footer-menu'  => esc_html__('Footer Menu', 'my_theme'),
                ));
            }
        }
    }
}
function myprefix_enqueue_scripts() {
wp_enqueue_script( 'my-script',  '/wp-content/themes/learningwordpress/index.js', array(), true );
}

add_action( 'wp_enqueue_scripts', 'myprefix_enqueue_scripts' );

function learningWordpress_resources(){

    wp_enqueue_style('style',get_stylesheet_uri());

}
add_action('wp_enqueue_scripts','learningWordpress_resources')


?>