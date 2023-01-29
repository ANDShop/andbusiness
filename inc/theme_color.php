<?php
// テーマカラー
function theme_customize($wp_customize) {

$wp_customize->add_section( 'theme_color_customize', array(
'title' => 'theme color',
'priority' => 210,
) );

$wp_customize->add_setting( 'body_color', array(
  'default' => '#fff',
  'sanitize_callback' => 'sanitize_hex_color',
  ));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'body_color', array(
'label' => 'background color',
'section' => 'theme_color_customize',
'settings' => 'body_color',
  )));
$wp_customize->add_setting( 'main_color', array(
  'default' => '#000',
  'sanitize_callback' => 'sanitize_hex_color',
  ));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_color', array(
'label' => 'main color',
'section' => 'theme_color_customize',
'settings' => 'main_color',
  )));
$wp_customize->add_setting( 'hover_color', array(
  'default' => '#000',
  'sanitize_callback' => 'sanitize_hex_color',
  ));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hover_color', array(
'label' =>'hover color',
'section' => 'theme_color_customize',
'settings' => 'hover_color',
) ) );

}
add_action('customize_register', 'theme_customize');

function theme_customize_css()
{
$body_color = get_theme_mod( 'body_color', '#F9F9F9');
$main_color = get_theme_mod( 'main_color', '#B08838');
$hover_color = get_theme_mod( 'hover_color', '#B08838');
?>
<style type="text/css">
body {
  background: <?php echo esc_html($body_color);
  ?>
}

a,
.home-header-title {
  color: <?php echo esc_html($main_color);
  ?>
}

a:hover {
  color: <?php echo esc_html($hover_color);
  ?>
}
</style>

<?php } add_action( 'wp_head', 'theme_customize_css');