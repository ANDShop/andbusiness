<?php
/*
Template Name: companypage
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

      <article class="post-26 page type-page status-publish hentry">
        <div class="entry-content">
          <figure class="wp-block-table is-style-regular">
            <table>
              <tbody>

                <?php
            $s = get_option( 'company_txt1' );
            // echo $s;
            if (empty($s)) {
              ?>
                <tr style="display: none;"></tr>
                <?php
            }else {
              ?>
                <tr>
                  <td><?php esc_html_e( 'Company name' , 'andbusiness' );?></td>
                  <td><?php echo $s ?></td>
                </tr>
                <?php
            }
            ?>

                <?php
            $s = get_option( 'company_txt2' );
            // echo $s;
            if (empty($s)) {
              ?>
                <tr style="display: none;"></tr>
                <?php
            }else {
              ?>
                <tr>
                  <td><?php esc_html_e( 'Headquarters' , 'andbusiness' );?></td>
                  <td><?php echo $s ?></td>
                </tr>
                <?php
            }
            ?>

                <?php
            $s = get_option( 'company_txt3' );
            // echo $s;
            if (empty($s)) {
              ?>
                <tr style="display: none;"></tr>
                <?php
            }else {
              ?>
                <tr>
                  <td><?php esc_html_e( 'Office' , 'andbusiness' );?></td>
                  <td><?php echo $s ?></td>
                </tr>
                <?php
            }
            ?>

                <?php
            $s = get_option( 'company_txt4' );
            // echo $s;
            if (empty($s)) {
              ?>
                <tr style="display: none;"></tr>
                <?php
            }else {
              ?>
                <tr>
                  <td><?php esc_html_e( 'Company Establishment' , 'andbusiness' );?></td>
                  <td><?php echo $s ?></td>
                </tr>
                <?php
            }
            ?>

                <?php
            $s = get_option( 'company_txt5' );
            // echo $s;
            if (empty($s)) {
              ?>
                <tr style="display: none;"></tr>
                <?php
            }else {
              ?>
                <tr>
                  <td><?php esc_html_e( 'Capital stock' , 'andbusiness' );?></td>
                  <td><?php echo $s ?></td>
                </tr>
                <?php
            }
            ?>

                <?php
            $s = get_option( 'company_txt6' );
            // echo $s;
            if (empty($s)) {
              ?>
                <tr style="display: none;"></tr>
                <?php
            }else {
              ?>
                <tr>
                  <td><?php esc_html_e( 'Representative Director' , 'andbusiness' );?></td>
                  <td><?php echo $s ?></td>
                </tr>
                <?php
            }
            ?>

                <?php
            $s = get_option( 'company_txt7' );
            // echo $s;
            if (empty($s)) {
              ?>
                <tr style="display: none;"></tr>
                <?php
            }else {
              ?>
                <tr>
                  <td><?php esc_html_e( 'Business Partners' , 'andbusiness' );?></td>
                  <td><?php echo $s ?></td>
                </tr>
                <?php
            }
            ?>

                <?php
            $s = get_option( 'company_txt8' );
            // echo $s;
            if (empty($s)) {
              ?>
                <tr style="display: none;"></tr>
                <?php
            }else {
              ?>
                <tr>
                  <td><?php esc_html_e( 'Licenses and permits' , 'andbusiness' );?></td>
                  <td><?php echo $s ?></td>
                </tr>
                <?php
            }
            ?>

              </tbody>
            </table>
          </figure>

          <h3><?php esc_html_e( 'Access' , 'andbusiness' );?></h3>
          <div class="wp-block-columnn">

            <div class="wp-block-column">
              <?php echo get_option('map_url'); ?>
            </div>

          </div>
          <figure class="block-image size-large">
            <img loading="lazy" width="918" height="294" src="<?php echo get_company_image_url(); ?>" alt="" class="wp-image-31">
          </figure>

          <div class="block-buttons">
            <div class="block-button">

              <?php $contact_url1 = get_option( 'contact_url');?>
              <?php $contact_button = get_theme_mod( 'button_background_color');?>

            </div>
          </div>

        </div>
      </article>

    </div>
  </div>
</div>

<?php get_footer(); ?>