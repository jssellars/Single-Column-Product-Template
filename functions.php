<?php
/*This file is part of ChildThemeSalient, salient child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/

if ( ! function_exists( 'suffice_child_enqueue_child_styles' ) ) {
	function ChildThemeSalient_enqueue_child_styles() {
	    // loading parent style
	    wp_register_style(
	      'parente2-style',
	      get_template_directory_uri() . '/style.css'
	    );

	    wp_enqueue_style( 'parente2-style' );
	    // loading child style
	    wp_register_style(
	      'childe2-style',
	      get_stylesheet_directory_uri() . '/style.css'
	    );
	    wp_enqueue_style( 'childe2-style');
	 }
}
add_action( 'wp_enqueue_scripts', 'ChildThemeSalient_enqueue_child_styles' );

/*Write here your own functions */


/* adding custom.js file */

function my_custom_scripts() {
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/js/custom.js', array( 'jquery' ),'',true );
}
add_action( 'wp_enqueue_scripts', 'my_custom_scripts' );


add_filter( 'template_include', 'single_subscription_product_template_include', 50, 1 );
function single_subscription_product_template_include( $template ) {
    if ( is_singular('product') && (has_term( 'abbonamenti', 'product_cat')) ) {
        $template = get_stylesheet_directory() . '/single-product-subscription.php';
    } 
	else if ( is_singular('product') && (has_term( 'abbonamenti-2', 'product_cat')) ) {
        $template = get_stylesheet_directory() . '/single-product-subscription.php';
    }
    return $template;
}

add_filter( 'template_include', 'single_wreaths_product_template_include', 50, 1 );
function single_wreaths_product_template_include( $template ) {
    if ( is_singular('product') && (has_term( 'wreaths', 'product_cat')) ) {
        $template = get_stylesheet_directory() . '/single-product-wreaths.php';
    } 
	else if ( is_singular('product') && (has_term( 'ghirlande', 'product_cat')) ) {
        $template = get_stylesheet_directory() . '/single-product-wreaths.php';
    }
    return $template;
}


add_filter( 'template_include', 'single_bouqet_product_template_include', 50, 1 );
function single_bouqet_product_template_include( $template ) {
    if ( is_singular('product') && (has_term( 'bouqet-2', 'product_cat')) ) {
        $template = get_stylesheet_directory() . '/single-product-bouqet.php';
    } 
	else if ( is_singular('product') && (has_term( 'bouqet', 'product_cat')) ) {
        $template = get_stylesheet_directory() . '/single-product-bouqet.php';
    }
    return $template;
}

