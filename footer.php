<footer id="footer" class="footer">
  <div id="supplementary" class="footer-widget-area" role="complementary">
    <div class="footer-widget-content">
      <div class="footer-widget-wrapper">
        <!-- footer widget1 -->
        <div class="footer-widget-1 footer-widget widget-area">
          <aside id="media_image-2" class="widget widget_media_image">
            <a href="<?php echo esc_url( $url ); ?>">
              <?php the_custom_logo(); ?>
            </a>
          </aside>
        </div>
        <!-- footer widget2 -->
        <div class="footer-widget-2 footer-widget widget-area">
          <aside id="nav_menu-3" class="widget widget_nav_menu">
            <div class="menu-mainmn-container">
              <?php wp_nav_menu( array(
        'theme_location' => 'footer-nav',
        'container' => 'nav',
        'container_class' => 'footer-nav',
        'container_id' => 'footer-nav',
        'fallback_cb' => 'wp_page_menu'
        ) ); ?>
            </div>
          </aside>
        </div>

      </div>
    </div>

  </div>
  <!--end footer-inner-->

  <div class="site-bottom">
    <div class="site-bottom-content">
      <div class="site-info">
        <div class="site-copyright">
          <?php $url = home_url();?>
          <?php esc_html_e( '©︎ 2021' , 'andbusiness' );?><a href="<?php echo esc_url( $url ); ?>"><?php bloginfo( 'name' ); ?></a>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

<?php wp_body_open(); ?>
</body>

</html>