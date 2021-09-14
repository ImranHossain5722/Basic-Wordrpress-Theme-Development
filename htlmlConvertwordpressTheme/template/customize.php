<?php
function htmlconvertwordpresstheme($wp_customize){

   /* customize setting menu background */
   $wp_customize->add_panel('htmlconvertwordpresstheme_settings', array(

      'title'=>__('htmlconvertwordpresstheme_settings'),
      'description' =>'',
      'priority'=>10,


   ));


   $wp_customize->add_section('htmlconvertwordpresstheme_colors', array(
      'title'=>'color',
      'panel'=> 'htmlconvertwordpresstheme_settings',


   ));


   $wp_customize->add_setting('htmlconvertwordpresstheme_nav_bg_color', array(

      'type'=>'theme_mod',
      'capability'=> 'edit_theme_options',
      'default'=>'',
      'transport'=>'refresh',
      'sanitize_callback'=>'sanitize_hex_color',
   ));


   $wp_customize->add_control('htmlconvertwordpresstheme_nav_bg_color', array(
   
      'label'=>__('Menu Background'),
      'type'=>'color',
      'section'=>'htmlconvertwordpresstheme_colors',
   ));

/* customize setting body background color*/
$wp_customize->add_setting('htmlconvertwordpresstheme_body_background_color', array(

   'type'=>'theme_mod',
   'capability'=> 'edit_theme_options',
   'default'=>'#fff',
   'transport'=>'refresh',
   'sanitize_callback'=>'sanitize_hex_color',
));


$wp_customize->add_control('htmlconvertwordpresstheme_body_background_color', array(

   'label'=>__('Body Background color'),
   'type'=>'color',
   'section'=>'htmlconvertwordpresstheme_colors',
));


}
add_action ('customize_register', 'htmlconvertwordpresstheme');



























?>