<?php get_header(); ?>

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <div id="main" class="site-main">
      <article class="<?php body_class(); ?>">

        <header class="page-header">
          <?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
        </header><!-- .page-header -->

        <?php if(have_posts()): while(have_posts()):the_post(); ?>

        <div class="archive-post">
          <h1 class="post-title"><?php the_title(); ?></h1>
          <?php the_excerpt(); ?>
        </div>


        <?php endwhile; endif; ?>

      </article>


    </div>
  </div>

  <div class="secondary">
    <?php dynamic_sidebar( 'sidebar-item' ); ?>
  </div>
</div>

<?php get_footer(); ?>