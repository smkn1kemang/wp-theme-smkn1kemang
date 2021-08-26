<?php
/*
 * The Single Post
 */
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article class="container mb-5" id="post_<?php the_ID()?>" <?php post_class("entry-content")?>>
      <div class="row mt-5 d-flex">
          <div class="col-12 col-lg-8 mx-auto">
              <div class="content-container">
                  
                  <h2 class="mt-3 text-center"><?php the_title()?></h2>

                  <p class="text-muted text-center mt-3">Dipublish pada <?php b5st_post_date(); ?></p>
                    
                  <div class="thumbnail border rounded mt-5">
                    <?php the_post_thumbnail(); ?>
                  </div>
          
                  <div class="content py-3 px-2 px-lg-4 my-4 border shadow-sm rounded">
                    <?php the_content(); ?>
                  </div>
              </div>
              <div class="sharethis-inline-share-buttons py-3 px-2 my-4 border shadow-sm rounded"></div>
              <div class="py-3 px-2 px-lg-4 my-4 border shadow-sm rounded">
                <?php
                  // This continues in the single post loop
                  if ( comments_open() || get_comments_number() ) :

                  //comments_template();
                  comments_template('/loops/single-post-comments.php');

                  endif;
                ?>
              </div>
          </div>
      </div>
  </article>

  <?php
  endwhile; else :
    get_template_part('loops/404');
  endif;
?>


