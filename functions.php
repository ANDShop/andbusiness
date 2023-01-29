<?php
add_theme_support( 'title-tag' );
// HTML5
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
//aichatch
add_theme_support( 'post-thumbnails' );

// feed
add_theme_support( 'automatic-feed-links' );

// add
add_theme_support( "wp-block-styles" );
add_theme_support( "responsive-embeds" );
add_theme_support( "custom-background" );
add_theme_support('align-wide');

load_theme_textdomain( 'andbusiness' );

// comments
function newborn_enqueue_comments_reply() {
if( get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}
}
add_action( 'comment_form_before', 'newborn_enqueue_comments_reply' );

// registercss
register_block_style(
	'core/image',
	array(
		'name'         => 'drop-shadow',
		'label'        => __( 'Drop Shadow', 'andbusiness' ),
		'inline_style' => '.wp-block-image.is-style-drop-shadow { box-shadow: rgb(128, 128, 128) 4px 4px 4px 2px; }',
	)
);

// registerjs
register_block_pattern(
    '/my-awesome-pattern',
    array(
        'title'       => __( 'Two buttons', 'andbusiness' ),
        'description' => _x( 'Two horizontal buttons, the left button is filled in, and the right button is outlined.', 'Block pattern description', 'andbusiness' ),
        'content'     => "<!-- wp:buttons {\"align\":\"center\"} -->\n<div class=\"wp-block-buttons aligncenter\"><!-- wp:button {\"backgroundColor\":\"very-dark-gray\",\"borderRadius\":0} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-background has-very-dark-gray-background-color no-border-radius\">" . esc_html__( 'Button One', 'andbusiness' ) . "</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button {\"textColor\":\"very-dark-gray\",\"borderRadius\":0,\"className\":\"is-style-outline\"} -->\n<div class=\"wp-block-button is-style-outline\"><a class=\"wp-block-button__link has-text-color has-very-dark-gray-color no-border-radius\">" . esc_html__( 'Button Two', 'andbusiness' ) . "</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons -->",
    )
);

//menu
register_nav_menu( 'header-nav',  ' header navigation ' );
register_nav_menu( 'footer-nav',  ' footer navigation ' );

// logo
add_theme_support('custom-logo');

// header
add_theme_support( 'custom-header', apply_filters( 'andbusiness_custom_header_args', array(
		// 'default-image' => get_parent_theme_file_uri( '' ),
		'width'         => 1280,
		'height'        => 540,
		'flex-width'    => true,
		'flex-height'   => true,
		'header-text'   => false,
	) ) );

  // widget
  function my_widgets() {
    register_sidebar(array(
      'id' => 'sidebar-item',
      'name' => 'sidebar',
      'description' => 'Uploading an image will replace the image in the specified location.
',
      'before_widget' => '<aside class="sidebar-box">',
      'after_widget' => '</aside>',
      'before_title' => '<h2 class="sidebar-title">',
      'after_title' => '</h2>'
    ));
  }
  add_action( 'widgets_init', 'my_widgets' );

  // more tag
  function new_excerpt_more($more) {
     return '...<a class="readmore" href="'. esc_url( get_permalink() ) . '">' . 'more' . '</a>';
  }
  add_filter('excerpt_more', 'new_excerpt_more');

  // category title derate
  function custom_archive_title($title){
    $titleParts=explode(':',$title);
    if($titleParts[1]){
        return $titleParts[1];
    }
    return $title;
}
add_filter('get_the_archive_title','custom_archive_title');

// $content_width
function mytheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mytheme_content_width', 740 );
}
add_action( 'after_setup_theme', 'mytheme_content_width', 0 );

// editor-style.css
add_action('admin_init',function(){
    add_editor_style();
});

// sanitaize checkbox
function theme_slug_sanitize_checkbox( $checked ) {
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
}

// comments
function custom_comment_form($args) {
	$args['label_submit'] = 'submit';
	return $args;
}
add_filter('comment_form_defaults', 'custom_comment_form');

// css
	//all
  wp_enqueue_style( 'all', get_theme_file_uri( 'style.css' ), array(), '1.0' );
	//bootstrap
	wp_enqueue_style('boot', get_template_directory_uri().'/assets/css/bootstrap.css');

	//font(navmenu)
  function wp_load_fontawesome() {
    wp_enqueue_style(
		'font-awesome-5',
		'https://use.fontawesome.com/releases/v5.15.3/css/all.css',
		array(),
		'5.13.3'
	);
}
add_action( 'wp_enqueue_scripts', 'wp_load_fontawesome' );

	//slick
  wp_enqueue_style('slick1', get_template_directory_uri().'/assets/css/slick.css');
  wp_enqueue_style('slick2', get_template_directory_uri().'/assets/css/slick-theme.css');

  // js
	//slicjs
	wp_enqueue_script('slick1', "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js");
	wp_enqueue_script('slick2', get_template_directory_uri().'/assets/js/jquery.min.js');
	wp_enqueue_script('slick3', get_template_directory_uri().'/assets/js/slick.js');

  // nav.js
	wp_enqueue_script('menu', get_template_directory_uri().'/assets/js/nav.js');
  // swiper
  wp_enqueue_script( 'swiper_js', get_template_directory_uri().'/inc/swiper/js/swiper-bundle.js' );
	wp_enqueue_style('swiper_js', get_template_directory_uri().'/inc/swiper/css/swiper-bundle.css');
	wp_enqueue_style('morder_js', get_template_directory_uri().'/assets/js/morder.js');

  // focus.js
	wp_enqueue_script('index_js', get_template_directory_uri().'/assets/js/index.js');

// theme color 210
require "inc/theme_color.php";

// fixedpage background 220
require "inc/page_background_img.php";