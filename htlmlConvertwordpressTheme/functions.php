<?php

function htmlconvertwordpresstheme_theme_setup(){
   /*cuostm logo*/
 add_theme_support('custom-logo');

 /* post-features-image*/ 
 add_theme_support('post-thumbnails');

 /* post-feed-link*/
 add_theme_support('autmatic-feed-links');

 /* site title tag-image*/
 add_theme_support('title-tag');

 /* Custom-image- size*/
 add_image_size( 'fornt-featured', 600, 400, array ('center', 'center'));

  /* Protfolio-image- size*/
 add_image_size( 'protfolio-featured',800, 300, array ('center', 'center'));
  /* single-image- size*/
 add_image_size( 'single-post',580, 272, array ('center', 'center'));

/* custom-header-image*/
$args = array(
   'default-image' => get_template_directory().'/assets/images/bg.png',
   'default-text-color'=>'000',
   'width' => 1920,
   'height' => 400,
   'flex-width'=> true,
   'fliex-height' => true,
   );
 add_theme_support('custom-header', $args);
}
add_action('after_setup_theme','htmlconvertwordpresstheme_theme_setup');





  /* register sidebar */
 function htmlconvertwordpresstheme_widget_init() {
   register_sidebar( array(
       'name'          => __( 'Primary Sidebar', 'theme_name' ),
       'id'            => 'main-sidebar',
       'before_widget' => '<section id="%1$s" class="box %2$s">',
       'after_widget'  => '</section>',
       'before_title'  => '<header><h3 class="widget-title">',
       'after_title'   => '</h3></header>',
   ) );


            /* register home banner  */

            register_sidebar( array(
              'name'          => __( 'Home Banner ', 'htmlconvertwordpresstheme' ),
              'id'            => 'home-banner ',
              'before_widget' => '<section id="%1$s" class="widget %2$s">',
              'after_widget'  => '</section>',
              'before_title'  => '<header><h2 class="widget-title">',
              'after_title'   => '</h2></header>'
          ) );

            /* register home services  */

            register_sidebar( array(
              'name'          => __( 'Home Services ', 'htmlconvertwordpresstheme' ),
              'id'            => 'home-services ',
              'before_widget' => '<section id="%1$s" class="widget %2$s">',
              'after_widget'  => '</section>',
              'before_title'  => '<header><h2 class="widget-title">',
              'after_title'   => '</h2></header>'
          ) );
          
       

            /* register footer widght-1  */

   register_sidebar( array(
       'name'          => __( 'Footer Widght Left', 'htmlconvertwordpresstheme' ),
       'id'            => 'widght-left',
       'before_widget' => '<section id="%1$s" class="widget %2$s">',
       'after_widget'  => '</section>',
       'before_title'  => '<header><h2 class="widget-title">',
       'after_title'   => '</h2></header>'
   ) );
             /* register footer widght-2  */

   register_sidebar( array(
    'name'          => __( 'Footer Widght Middle', 'htmlconvertwordpresstheme' ),
    'id'            => 'widght-m',
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<header><h2  class="widget-title">',
    'after_title'   => '</h2></header>'
) );
           /* register footer widght-3  */

register_sidebar( array(
  'name'          => __( 'Fppter Widght Right', 'htmlconvertwordpressthemetheme_name' ),
  'id'            => 'widght-r',
  'before_widget' => '<section id="%1$s" class="widget %2$s">',
  'after_widget'  => '</section>',
  'before_title'  => '<header><h2 class="widget-title">',
  'after_title'   => '</h2></header>',
) );

 }
 add_action( 'widgets_init', 'htmlconvertwordpresstheme_widget_init' );




/* register our theme menu */
function register_my_menus(){
register_nav_menus( 
 array(
   'headermenu'=> __('Header Menu', 'htmlconvertwordpresstheme'),
     )
  );
}
add_action ('after_setup_theme', 'register_my_menus');



/* add enqueue scripts, style */
function htmlconvertwordpresstheme_scripts(){
/* style.css*/
   wp_enqueue_style( 'style', get_stylesheet_uri() );
/* jquery*/ 
   wp_enqueue_script('jquery');

/* custom-style.js*/
wp_enqueue_script('theme-browser', get_template_directory().'/assets/js/browser.main.js');
wp_enqueue_script('theme-breakpoint', get_template_directory().'/assets/js/breakpoints.main.js');
wp_enqueue_script('theme-util', get_template_directory().'/assets/js/util.js');
wp_enqueue_script('theme-mainjs', get_template_directory().'/assets/js/main.js');

/****bootstrap fils*****/
/*bootstrap main-css*/
wp_enqueue_script('bootstrap-main', get_template_directory().'/assets/bootstrap/css/bootstrap.min.css');

/*bootstrap main-js*/
wp_enqueue_script('bootstrap-main', get_template_directory().'/assets/bootstrap/js/bootstrap.min.js');

}
add_action('wp_enqueue_scripts', 'htmlconvertwordpresstheme_scripts');


/*customize function setting template*/
require get_template_directory().'/template/customize.php';

/*custom post type protfoliotemplate*/
require get_template_directory().'/template/protfolio.php';



