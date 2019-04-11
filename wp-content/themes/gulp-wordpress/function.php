<?php
/**
 * Created by PhpStorm.
 * User: takeuchidaijiro
 * Date: 2019/02/13
 * Time: 18:05
 */

wp_enqueue_script( 'gulp-wordpress-javascript', get_template_directory_uri() . '/js/app.min.js', array(), '20151215', true );

/**
 * Enqueue scripts and styles.
 */
function gulp_wordpress_scripts() {
    wp_enqueue_style( 'gulp-wordpress-style', get_stylesheet_uri() );

    wp_enqueue_script( 'gulp-wordpress-javascript', get_template_directory_uri() . '/js/app.min.js', array(), '20151215', true );
}
add_action( 'wp_enqueue_scripts', 'gulp_wordpress_scripts' );