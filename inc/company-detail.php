<?php
// キャッチフレーズ
function theme_company_add_txt( $wp_customize ) {
  $wp_customize->add_section( 'company_txt_section', array(
    'title' => 'About Us',
    'priority' => 260,
  ));

  // text1
  $wp_customize->add_setting('company_txt1', array(
    'type' => 'option',
    'sanitize_callback' => 'wp_filter_post_kses'
  ));
  $wp_customize->add_control( 'company_txt1', array(
    'settings' => 'company_txt1',
    'label' => 'Company name',
    'section' => 'company_txt_section',
    'type' => 'text',
  ));

  // text2
  $wp_customize->add_setting('company_txt2', array(
    'type' => 'option',
    'sanitize_callback' => 'wp_filter_post_kses'
  ));
  $wp_customize->add_control( 'company_txt2', array(
    'settings' => 'company_txt2',
    'label' => 'headquarters',
    'section' => 'company_txt_section',
    'type' => 'textarea',
  ));

  // text3
  $wp_customize->add_setting('company_txt3', array(
    'type' => 'option',
    'sanitize_callback' => 'wp_filter_post_kses'
  ));
  $wp_customize->add_control( 'company_txt3', array(
    'settings' => 'company_txt3',
    'label' => 'office',
    'section' => 'company_txt_section',
    'type' => 'text',
  ));

  // text4
  $wp_customize->add_setting('company_txt4', array(
    'type' => 'option',
    'sanitize_callback' => 'wp_filter_post_kses'
  ));
  $wp_customize->add_control( 'company_txt4', array(
    'settings' => 'company_txt4',
    'label' => 'Company Establishment',
    'section' => 'company_txt_section',
    'type' => 'text',
  ));

  // text5
  $wp_customize->add_setting('company_txt5', array(
    'type' => 'option',
    'sanitize_callback' => 'wp_filter_post_kses'
  ));
  $wp_customize->add_control( 'company_txt5', array(
    'settings' => 'company_txt5',
    'label' => 'Capital stock',
    'section' => 'company_txt_section',
    'type' => 'text',
  ));

  // text6
  $wp_customize->add_setting('company_txt6', array(
    'type' => 'option',
    'sanitize_callback' => 'wp_filter_post_kses'
  ));
  $wp_customize->add_control( 'company_txt6', array(
    'settings' => 'company_txt6',
    'label' => 'Representative Director',
    'section' => 'company_txt_section',
    'type' => 'text',
  ));

  // text7
  $wp_customize->add_setting('company_txt7', array(
    'type' => 'option',
    'sanitize_callback' => 'wp_filter_post_kses'
  ));
  $wp_customize->add_control( 'company_txt7', array(
    'settings' => 'company_txt7',
    'label' => 'Business Partners',
    'section' => 'company_txt_section',
    'type' => 'textarea',
  ));

  // text8
  $wp_customize->add_setting('company_txt8', array(
    'type' => 'option',
    'sanitize_callback' => 'wp_filter_post_kses'
  ));
  $wp_customize->add_control( 'company_txt8', array(
    'settings' => 'company_txt8',
    'label' => 'Licenses and permits',
    'section' => 'company_txt_section',
    'type' => 'textarea',
  ));

  // 会社マップ
  $wp_customize->add_setting('map_url', array(
    'type' => 'option',
    'sanitize_callback' => 'wp_filter_post_kses'
  ));
  $wp_customize->add_control( 'map_url', array(
    'settings' => 'map_url',
    'label' => 'map URL',
    'description' => 'Please check on the site page, as it is not shown on the customize page.',
    'section' => 'company_txt_section',
    'type' => 'textarea',
  ));

 $wp_customize->add_setting('company-img' , array(
   'sanitize_callback' => 'esc_url_raw'
 ));
 $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'set_img_url', array(
  'label' => 'Company img',
  'section' => 'company_txt_section',
  'settings' => 'company-img',
 )));

}
add_action( 'customize_register', 'theme_company_add_txt' );
function get_company_image_url(){
  return esc_url(get_theme_mod('company-img'));
}