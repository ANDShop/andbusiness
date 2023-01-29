<?php
// キャッチフレーズ
function theme_contact_add_txt( $wp_customize ) {
  $wp_customize->add_section( 'contact_section', array(
    'title' => 'Contact',
    'priority' => 270,
  ));
  $wp_customize->add_setting('contact_url', array(
    'type' => 'option',
    'sanitize_callback' => 'wp_filter_post_kses',
  ));

  $wp_customize->add_control( 'contact_url', array(
    'settings' => 'contact_url',
    'label' => 'Contactpage URL',
    'section' => 'contact_section',
    'type' => 'text',
  ));

  // background color
  $wp_customize->add_setting( 'button_background_color', array(
 'default' => '#000',
 'sanitize_callback' => 'wp_filter_post_kses',
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_background_color', array(
 'label' => 'button color',
 'section' => 'contact_section',
 'settings' => 'button_background_color',
 'priority' => 20,
)));

  // font color
  $wp_customize->add_setting( 'button_color', array(
 'default' => '#fff',
 'sanitize_callback' => 'wp_filter_post_kses',
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_color', array(
 'label' => 'text color',
 'section' => 'contact_section',
 'settings' => 'button_color',
 'priority' => 30,
)));

}
add_action( 'customize_register', 'theme_contact_add_txt' );