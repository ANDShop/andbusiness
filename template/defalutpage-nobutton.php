<?php
/*
Template Name: none-buttonpage
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

      <!-- <h1 class="post-title"><?php the_title(); ?></h1> -->
      <!-- <?php the_post_thumbnail(); ?> -->
      <?php the_content(); ?>

      <?php endwhile; endif; ?>

    </div>
  </div>
</div>

<?php get_footer(); ?>