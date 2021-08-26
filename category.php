<?php
  get_header(); 
  b5st_mainbody_before();
?>

<main id="site-main">
  <?php b5st_mainbody_start(); ?>


  <h2 class="text-center judul my-5">
    <?php echo single_cat_title(); ?>
  </h2>

  <section class="section-berita mb-5">    
      <div class="container mb-5">
          <div class="row mt-5 d-flex">
            <?php
              b5st_mainbody_start();
              get_template_part('loops/index-loop');
              b5st_mainbody_end();
            ?>
          </div>
      </div>
  </section>
</main>

<?php 
  b5st_mainbody_after();
  get_footer(); 
?>