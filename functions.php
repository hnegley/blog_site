<?php 

/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
    register_sidebar( array(
        'name' => ('First Widget'),
        'id' => 'first-widget',
        'description' => 'Widget for our sidebar on pages', 
        'before_widget' => '<div class="widget-sidebar">', 
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'                        
        ));

/*---First New Widget---*/

    register_sidebar( array(
        'name' => ('Footer Widget One'),
        'id' => 'footer-widget-one',
        'description' => 'First widget for our footer', 
        'before_widget' => '<div class="widget-footer">', 
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
        ));                   

/*---Second New Widget---*/

    register_sidebar( array(
        'name' => ('Footer Widget Two'),
        'id' => 'footer-widget-two',
        'description' => 'Second widget for our footer', 
        'before_widget' => '<div class="widget-footer">', 
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
        ));  

/*---Third New Widget---*/

    register_sidebar( array(
        'name' => ('Footer Widget Three'),
        'id' => 'footer-widget-three',
        'description' => 'Third widget for our footer', 
        'before_widget' => '<div class="widget-footer">', 
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
        ));                 

    }
add_action('widgets_init', 'blank_widgets_init');

/*-------------- Enable Menu --------------- */

add_theme_support('menus');

/*-------------- Enable Featured Images --------------- */

add_theme_support('post-thumbnails');





