<?php get_header(); ?>

<div class="container">
  <div class="contents">

    <div class="blog-list">
      <div class="blog-wrap">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <hr>

        <dl>
          <a href="<?php the_permalink(); ?>">
            <dt><?php the_time("Y/n/j/"); ?></dt>
            <dd>
              <?php the_title(); ?>
            </dd>
          </a>
        </dl>

        <?php endwhile; endif; ?>
        <hr>
      </div>
    </div>

  </div>
  <!--end contents-->
</div>
<!--end container-->

<?php get_footer(); ?>