<?php
/*
 * The Page Content Loop
 */
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article class="container mb-5" id="post_<?php the_ID()?>" <?php post_class("entry-content")?>>
      <div class="row mt-5 d-flex">
          <div class="col-12 col-lg-8 mx-auto">
              <div class="content-container">
                  
                  <h2 class="mt-3 text-center"><?php the_title()?></h2>

                  <p class="text-muted text-center mt-3">Dipublish pada <?php b5st_post_date(); ?></p>
          
                  <div class="content py-3 px-2 px-lg-4 my-4 border shadow-sm rounded">
                    <?php the_content(); ?>
                  </div>
              </div>
              <div class="sharethis-inline-share-buttons py-3 px-2 my-4 border shadow-sm rounded"></div>
          </div>
      </div>
  </article>
<?php
  endwhile;
  else :
    get_template_part('loops/404');
  endif;
?>
