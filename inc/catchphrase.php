<?php
function theme_customizer_add_txt( $wp_customize ) {
  $wp_customize->add_section( 'original_txt_section', array(
    'title' => 'Frontpage',
    'priority' => 230,
  ));
  $wp_customize->add_setting('original_txt', array(
    'type' => 'option',
    'sanitize_callback' => 'wp_filter_post_kses'
  ));
  $wp_customize->add_control('original_txt', array(
    'settings' => 'original_txt',
    'label' => 'catchphrase',
    'section' => 'original_txt_section',
    'type' => 'textarea',
  ));

 $wp_customize->add_setting('set_img1_url' , array(
   'sanitize_callback' => 'esc_url_raw',
 ));
 $wp_customize->add_setting('set_img2_url' , array(
   'sanitize_callback' => 'esc_url_raw',
 ));
 $wp_customize->add_setting('set_img3_url' , array(
   'sanitize_callback' => 'esc_url_raw',
 ));

 $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'set_img1_url', array(
  'label' => 'slide-img1',
  'section' => 'original_txt_section',
  'settings' => 'set_img1_url',
  'description' => 'Uploading an image will replace the image in the specified location.
',
 )));
 $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'set_img2_url', array(
  'label' => 'slide-img2',
  'section' => 'original_txt_section',
  'settings' => 'set_img2_url',
  'description' => 'Uploading an image will replace the image in the specified location.
',
 )));
 $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'set_img3_url', array(
  'label' => 'slide-img3',
  'section' => 'original_txt_section',
  'settings' => 'set_img3_url',
  'description' => 'Uploading an image will replace the image in the specified location.
',
 )));
}
add_action( 'customize_register', 'theme_customizer_add_txt' );

function get_img_url1(){
  return esc_url(get_theme_mod('set_img1_url'));
}
function get_img_url2(){
  return esc_url(get_theme_mod('set_img2_url'));
}
function get_img_url3(){
  return esc_url(get_theme_mod('set_img3_url'));
}