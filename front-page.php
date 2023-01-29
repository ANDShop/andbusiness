<?php get_header(); ?>

<div class="home-header" style="background-image: url(' <?php header_image(); ?>">
  <div class="home-header-overlay">
    <div class="home-header-content">
      <h2 class="home-header-title">
        <?php echo get_option('original_txt'); ?>
      </h2>
    </div>
  </div>
</div>

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <div id="main" class="site-main">
      <article>

        <div class="entry-content">
          <div class="slider">
            <div class="mainvisual">

              <div class="blog-list">
                <h1>NEWS</h1>
                <div class="blog-wrap">
                  <?php if(have_posts()): while(have_posts()): the_post(); ?>
                  <hr>
                  <dl>
                    <a href="<?php the_permalink(); ?>" tabindex="0">
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

      </article>
      <!-- site-main finish -->
    </div>
    <!-- content-area finish -->
  </div>
  <!-- site-content finish -->
</div>

<!-- swiper -->
<script>
let mySwiper6 = new Swiper('#swiper06', {
  autoplay: {
    delay: 2000,
  },

  loop: true,

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
})
</script>

<?php get_footer(); ?>