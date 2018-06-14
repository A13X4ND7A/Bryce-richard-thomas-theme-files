<?php


/**
 * Theme customizations
 *
 * @package      responsive-child
 * @author       Alexandra Faller
 * @link         http://www.alexfaller.uk/
 * @copyright    Copyright (c) Alexandra Faller
 * @license      GPL-2.0+
 */



// Exit if accessed directly
if ( !defined('ABSPATH')) exit;


//add custom widgets

if ( function_exists('register_sidebar') ){
    register_sidebar(array(
        'name' => 'column-widget-right',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle"><span class="sidebar-title">',
        'after_title' => '</span></h4>',
));
}



if ( function_exists('register_sidebar') ){
    register_sidebar(array(
        'name' => 'column-widget-left',
        'before_widget' => '<div class="title">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle"><span class="sidebar-title">',
        'after_title' => '</span></h4>',
));
}

if ( function_exists('register_sidebar') ){
    register_sidebar(array(
        'name' => 'column-widget-center',
        'before_widget' => '<div class="title">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle"><span class="sidebar-title">',
        'after_title' => '</span></h4>',
));
}

if ( function_exists('register_sidebar') ){
    register_sidebar(array(
        'name' => 'bookBanner',
        'before_widget' => '<div class="title">',
        'after_widget' => '</div>',
        'before_title' => '',
        'after_title' => '',
));
}


//enque custom scripts

add_action( "wp_enqueue_scripts", "wp_addScript", 11 );

function wp_addScript() 
{
    wp_enqueue_script( 
        'customJs.js', 
        get_stylesheet_directory_uri() . '/core/js/customJs.js', 
        array( 'jquery' ), 
        '1.0', 
        true
    );
    
}

//allows wordpress to access the jquery-effects package
wp_enqueue_script("jquery-effects-core");

//allows the pages to use excerpts
// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read the full article...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

the_content('...on the edge of your seat? Click
here to solve the mystery.'); 



?>
