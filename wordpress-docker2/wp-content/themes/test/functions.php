<?php
function tema_namn_styles(){
 //versionen specifieras i style.css
 $version = time();
 wp_enqueue_style('demotema-style',
 get_template_directory_uri() . "/style.css",
 array(), $version, 'all');
}
add_action('wp_enqueue_scripts', 'tema_namn_styles');





function tema_namn_scripts(){
    //versionen specifieras i style.css
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('demotema-custom_script',
    get_template_directory_uri() . "/assets/js/script.js",
    array(), $version, true);
   }
   add_action('wp_enqueue_scripts', 'tema_namn_scripts');



   function tema_namn_menus(){
    $locations = array(
    'primary' => 'Navbar second',
    'sidebar' => 'sidebar'
    );
    register_nav_menus($locations);
   }
   add_action('init', 'tema_namn_menus' );

   function demotema_theme_handling()
{
    //add_theme_support("title-tag");
    add_theme_support('post-thumbnails');
    add_image_size("medium", 1000, false);
}
add_action('after_setup_theme', 'demotema_theme_handling');


function demotema_register_sidebars() {
    register_sidebar( array(
    'name' => 'adress widget',
    'id' => 'adress-widget',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>'

    ) );
   }
   add_action( 'widgets_init', 'demotema_register_sidebars' );


?>
