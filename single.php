<?php
$paged = get_query_var('paged', 1);
$args = array(
  'post_type' => 'post',
  'paged' => $paged
);
$the_query = new WP_Query($args);
?>

<?php get_header(); ?>

<div id="content" class="site-content">

  <div id="primary" class="content-area">
    <div id="main" class="site-main">
      <article　id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php if(have_posts()): while(have_posts()):the_post(); ?>

        <!-- <?php the_tags(); ?> -->
        <h1 class="post-title aligncenter"><?php the_title(); ?></h1>
        <?php the_post_thumbnail(); ?>
        <?php the_content(); ?>

        <!--nextpage-->
        <!-- pagenation -->
        <?php wp_link_pages( array(
	'before'      => '<div class="page-links"><span class="page-links-title">' .'Pages:'  . '</span>',
	'after'       => '</div>',
	'link_before' => '<span>',
	'link_after'  => '</span>',
	) );
?>
        <?php posts_nav_link(); ?>
        <!-- pagination finish -->

        <?php endwhile; endif; ?>

        <!-- comments -->

        <?php comments_template(); ?>

      </article>


    </div>
  </div>

  <div class="secondary">
    <?php dynamic_sidebar( 'sidebar-item' ); ?>
  </div>

</div>

<?php get_footer(); ?>