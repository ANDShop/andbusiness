<?php

function theme_customizer_service( $wp_customize ) {
 $wp_customize->add_section( "customize_service", array(
  'title' => 'Service',
  'priority' =>250,
 ));

// service-1
//  img
 $wp_customize->add_setting( 'test_img1_url', array(
   'type' => 'option',
   'sanitize_callback' => 'esc_url_raw',
 ));

//  title
$wp_customize->add_setting( 'test_txt1', array(
    'type' => 'option',
    // 'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'esc_html'
  ));

// text
 $wp_customize->add_setting( 'test_txtarea1', array(
    'type' => 'option',
    'sanitize_callback' => 'sanitize_text_field'
  ));

// service-2
//  img
 $wp_customize->add_setting( 'test_img2_url', array(
   'type' => 'option',
   'sanitize_callback' => 'esc_url_raw',

 ));

//  title
$wp_customize->add_setting( 'test_txt2', array(
    'type' => 'option',
    // 'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'esc_html'
  ));

// text
 $wp_customize->add_setting( 'test_txtarea2', array(
    'type' => 'option',
    'sanitize_callback' => 'sanitize_text_field'
  ));

// service-3
//  img
 $wp_customize->add_setting( 'test_img3_url', array(
   'type' => 'option',
   'sanitize_callback' => 'esc_url_raw',
 ));

//  title
$wp_customize->add_setting( 'test_txt3', array(
    'type' => 'option',
    // 'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'esc_html'
  ));

// text
 $wp_customize->add_setting( 'test_txtarea3', array(
    'type' => 'option',
    'sanitize_callback' => 'sanitize_text_field'
  ));

// service-4
//  img
 $wp_customize->add_setting( 'test_img4_url', array(
   'type' => 'option',
   'sanitize_callback' => 'esc_url_raw',
 ));

//  title
$wp_customize->add_setting( 'test_txt4', array(
    'type' => 'option',
    // 'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'esc_html'
  ));

// text
 $wp_customize->add_setting( 'test_txtarea4', array(
    'type' => 'option',
    'sanitize_callback' => 'sanitize_text_field'
  ));

 //add-control

//  service-1
//  img
 $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'test_img1_url' , array(
  'label' => 'service-img11',
  'section' => 'customize_service',
  'settings' => 'test_img1_url',
  'description' => 'Uploading an image will replace the image in the specified location.',
 )));

//  title
  $wp_customize->add_control( 'test_txt1' , array(
    'label' => 'service-title1',
    'section' => 'customize_service',
    'settings' => 'test_txt1',
    'type' => 'text',
  ));

// text
    $wp_customize->add_control( 'test_txtarea1' , array(
    'label' =>'service-text1',
    'section' => 'customize_service',
    'settings' => 'test_txtarea1',
    'type' => 'textarea',
  ));

//  service-2
//  img
 $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'test_img2_url' , array(
  'label' => 'service-img2',
  'section' => 'customize_service',
  'settings' => 'test_img2_url',
  'description' => 'Uploading an image will replace the image in the specified location.',
 )));

//  title
  $wp_customize->add_control( 'test_txt2' , array(
    'label' => 'service-title2',
    'section' => 'customize_service',
    'settings' => 'test_txt2',
    'type' => 'text',
  ));

// text
    $wp_customize->add_control( 'test_txtarea2' , array(
    'label' =>'service-text2',
    'section' => 'customize_service',
    'settings' => 'test_txtarea2',
    'type' => 'textarea',
  ));

//  service-3
//  img
 $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'test_img3_url' , array(
  'label' => 'service-img3',
  'section' => 'customize_service',
  'settings' => 'test_img3_url',
  'description' => 'Uploading an image will replace the image in the specified location.',
 )));

//  title
  $wp_customize->add_control( 'test_txt3' , array(
    'label' => 'service-title3',
    'section' => 'customize_service',
    'settings' => 'test_txt3',
    'type' => 'text',
  ));

// text
    $wp_customize->add_control( 'test_txtarea3' , array(
    'label' =>'service-text3',
    'section' => 'customize_service',
    'settings' => 'test_txtarea3',
    'type' => 'textarea',
  ));

//  service-4
//  img
 $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'test_img4_url' , array(
  'label' => 'service-img4',
  'section' => 'customize_service',
  'settings' => 'test_img4_url',
  'description' => 'Uploading an image will replace the image in the specified location.',
 )));

//  title
  $wp_customize->add_control( 'test_txt4' , array(
    'label' => 'service-title4',
    'section' => 'customize_service',
    'settings' => 'test_txt4',
    'type' => 'text',
  ));

// text
    $wp_customize->add_control( 'test_txtarea4' , array(
    'label' =>'service-text4',
    'section' => 'customize_service',
    'settings' => 'test_txtarea4',
    'type' => 'textarea',
  ));

}
add_action( 'customize_register', 'theme_customizer_service' );
function get_service() {
 return get_theme_mod( 'customize_service' );
}