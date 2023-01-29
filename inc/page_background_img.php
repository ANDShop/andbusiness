<?php
function set_page_image_cutomizer($wp_customize) {
 $wp_customize->add_section('set_img_section', array(
  'title' => 'Background image fixed pages',
  'priority' => 220,
  'discription' => 'Change the background image of fixed pages.',
 ));

 $wp_customize->add_setting('set_img_fix' , array (
   'sanitize_callback' => 'esc_url_raw',
 ));

 $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'set_img_fix', array(
  'label' => 'background image of fixed pages.',
  'section' => 'set_img_section',
  'settings' => 'set_img_fix',
  'description' => 'Change the background image of fixed pages.',
 )));
}

add_action('customize_register', 'set_page_image_cutomizer');
function get_image_url(){
  return esc_url(get_theme_mod('set_img_fix'));
}