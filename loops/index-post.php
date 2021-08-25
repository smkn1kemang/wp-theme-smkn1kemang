<?php
/*
 * The Index Post (or excerpt)
 * ===========================
 * Used by index.php, category.php and author.php
 */
?>

<div class="col-12 col-md-6 col-lg-4"  id="post_<?php the_ID()?>" <?php post_class("wrap-md entry-content pt-5"); ?>>
  <div class="card mx-3 mb-5 p-4 shadow-sm rounded">
      <?php the_post_thumbnail(); ?>

      <div class="card-body p-0">
          <div class="date-container d-flex align-items-center my-3">
              <img src="<?php echo get_bloginfo( 'template_directory' );?>/theme/assets/icon/ic_calendar.svg" alt="" class="me-2" width="16px">
              <span class="text-muted"><?php b5st_post_date(); ?></span>
          </div>

          <h4>
              <a
                  href="<?php the_permalink(); ?>"
                  class="card-title"
              >
                <?php the_title()?>
              </a>
          </h4>
          <p class="card-text mt-3">
            <?php if ( has_excerpt( $post->ID ) ) {
              the_excerpt();
              ?><a href="<?php the_permalink(); ?>">
                <?php _e( 'Continue reading →', 'b5st' ) ?>
                </a>
              <?php } else {
                the_content( __('Continue reading →', 'b5st' ) );
            } ?>
          </p>
      </div>
  </div>
</div>
