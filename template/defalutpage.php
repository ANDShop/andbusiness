<?php
/*
Template Name: buttonpage
*/
?>

<?php get_header(); ?>

<div class="jumbotron customize-background site-header" style="background-image: url(<?php echo get_image_url(); ?>);">
  <div class="jumbotron-overlay">
    <div class="jumbotron-content">
      <h2 class="jumbotron-title"><?php the_title(); ?></h2>
    </div>
  </div>
</div>

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <div id="main" class="site-main">

      <?php if(have_posts()): while(have_posts()):the_post(); ?>

      <h1 class="post-title"><?php the_title(); ?></h1>
      <?php the_post_thumbnail(); ?>
      <?php the_content(); ?>

      <?php endwhile; endif; ?>

      <div class="wp-block-buttons">
        <div class="wp-block-button">

          <?php $contact_url1 = get_option('contact_url');?>
          <?php $contact_button = get_theme_mod('button_background_color');?>

          <a class="wp-block-button__link has-background" href="<?php echo esc_url($contact_url1); ?>" style="border-radius:8px;background-color:<?php echo esc_url($contact_button); ?>"><?php esc_html_e( 'Click here to contact us.' , 'andbusiness' );?></a>
        </div>
      </div>

    </div>
  </div>
</div>