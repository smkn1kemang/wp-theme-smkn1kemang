<?php
  get_header(); 
  // b5st_mainbody_before();
?>

<main>
  <header>
      <div class="container">
          <div class="row d-flex justify-content-center">
              <div  class="col-10">
                  <div class="content">
                      <h1 class="text-white">
                          SMK Negeri 1 Kemang
                      </h1>
                      <p class="text-white">
                          Religius, Disiplin, Kreatif, Inovatif dan Mandiri.
                      </p>
                      <div class="button-container mt-5">
                          <a href="/page/ppdb-2021" class="mt-3 mt-md-0 btn btn-primary me-3 shadow-sm info-btn">
                              <img
                                  src="<?php echo get_bloginfo( 'template_directory' );?>/theme/assets/icon/ic_switch.svg"
                                  alt="icon ppdb"
                                  class="me-2"
                              >
                              <span>
                                  Info PPDB
                              </span>
                          </a> 
                          <a href="/page/profil-sekolah" class="mt-3 mt-md-0 btn btn-outline-light shadow-sm profile-btn">
                              <img
                                  src="<?php echo get_bloginfo( 'template_directory' );?>/theme/assets/icon/ic_home.svg"
                                  alt="icon profil"
                                  class="me-2 svg-one"
                              >
                              <img
                                  src="<?php echo get_bloginfo( 'template_directory' );?>/theme/assets/icon/ic_home2.svg"
                                  alt="icon profil"
                                  class="me-2 svg-alternative"
                              >
                              <span>
                                  Profil Sekolah
                              </span>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </header>

  <section class="section-sejarah">
      <div class="container">
          <div class="row">
              <div class="col-12 col-md-5">
                  <img src="<?php echo get_bloginfo( 'template_directory' );?>/theme/assets/img/sejarah.jpg" alt="">
              </div>
              <div class="col-md-7">
                  <h2 class="mt-4 mt-lg-3 mt-xxl-3">
                      Sejarah Singkat
                  </h2>
                  <p class="mt-3 mt-lg-2 mt-xxl-4 text-muted">
                      SMK Negeri 1 Kemang berdiri Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged....
                  </p>
                  <a href="/page/sejarah-sekolah" class="btn btn-primary mt-3 py-2 px-3 shadow-sm selengkapnya-btn">
                      Selengkapnya
                  </a>
              </div>
          </div>
      </div>
  </section>

  <section class="section-vismistu">
      <div class="container">
          <div class="row">
              <div class="col-12 col-md-6 col-lg-4">
                  <div class="card px-4 px-lg-5 shadow-sm rounded">
                      <img 
                          src="<?php echo get_bloginfo( 'template_directory' );?>/theme/assets/icon/ic_visi.svg"
                          alt="Icon visi" 
                          class="ic svg-one mt-5 mx-auto"
                      >
                      <img
                          src="<?php echo get_bloginfo( 'template_directory' );?>/theme/assets/icon/ic_visi2.svg"
                          alt="icon visi"
                          class="ic svg-alternative mt-5 mx-auto"
                      >
                      <div class="card-body px-0 mb-5">
                          <h2 class="card-title text-center">
                              Visi
                          </h2>
                          <p class="card-text text-muted">
                              Menjadi Lembaga Pendidikan dan Pelatihan, 
                              serta menghasilkan lulusan yang amanah, 
                              produktif, mampu bersaing secara Nasional 
                              dan Internasional yang beriman dan bertaqwa.
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
                  <div class="card px-4 px-lg-5 shadow-sm rounded">
                      <img
                          src="<?php echo get_bloginfo( 'template_directory' );?>/theme/assets/icon/ic_misi.svg"
                          alt="icon misi" 
                          class="ic svg-one mt-5 mx-auto"
                      >
                      <img 
                          src="<?php echo get_bloginfo( 'template_directory' );?>/theme/assets/icon/ic_misi2.svg"
                          alt="icon misi"
                          class="ic svg-alternative mt-5 mx-auto"
                      >
                      <div class="card-body px-0 mb-5">
                          <h2 class="card-title text-center">
                              Misi
                          </h2>
                          <p class="card-text text-muted">
                              1. Menyelenggarakan pembelajaran yang
                              inovatif dan kreatif sesuai dengan 
                              tuntutan era global.<br>
                              2. Melaksanakan pengamalan ajaran agama
                              yang dianutnya.<br>
                              3. Mengembangkan sistem pembelajaran
                              dan manajemen berbasis teknologi
                              informasi.<br>
                              4. Menjalin kemitraan dan kerjasama antar
                              sekolah maupun DU/DI baik dengan skala
                              Nasional maupun Internasional.
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
                  <div class="card px-4 px-lg-5 shadow-sm rounded">
                      <img
                          src="<?php echo get_bloginfo( 'template_directory' );?>/theme/assets/icon/ic_tujuan.svg"
                          alt="icon tujuan"
                          class="ic svg-one mt-5 mx-auto"
                      >
                      <img
                          src="<?php echo get_bloginfo( 'template_directory' );?>/theme/assets/icon/ic_tujuan2.svg" 
                          alt="icon tujuan" 
                          class="ic svg-alternative mt-5 mx-auto"
                      >
                      <div class="card-body px-0 mb-5">
                          <h2 class="card-title text-center">
                              Tujuan
                          </h2>
                          <p class="card-text text-muted">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci vel deleniti quidem iusto placeat, ab ad vero perferendis? Laboriosam, nihil?
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section class="section-jurusan py-5">
      <div class="container-fluid">
          <h2 class="text-center py-3 mb-5">
              Kompetensi Keahlian
          </h2>
          <div class="splide my-5 d-flex align-items-center">
              <div class="splide__track">
                  <ul class="splide__list row">
                      <li class="splide__slide col-10 col-lg-4">
                          <a href="/page/tesha" class="nav-link text-dark">
                              <div class="card shadow-sm">
                                  <img src="<?php echo get_bloginfo( 'template_directory' );?>/theme/assets/icon/ic_tesha.svg" class="card-img-top mx-auto mt-4" alt="">
                                  <h3 class="card-title text-center mt-3">
                                      TESHA
                                  </h3>
                                  <span class="card-text text-center text-muted px-3">
                                      Teknik Energi Surya, Hidro, dan Angin
                                  </span>
                              </div>
                          </a>
                      </li>
                      <li class="splide__slide col-10 col-lg-4">
                          <a href="/page/dpib" class="nav-link text-dark">
                              <div class="card shadow-sm">
                                  <img src="<?php echo get_bloginfo( 'template_directory' );?>/theme/assets/icon/ic_dpib.svg" class="card-img-top mx-auto mt-4" alt="">
                                  <h3 class="card-title text-center mt-3">
                                      DPIB
                                  </h3>
                                  <span class="card-text text-center text-muted px-3">
                                      Desain Pemodelan dan Informasi Bangunan
                                  </span>
                              </div>
                          </a>
                      </li>
                      <li class="splide__slide col-10 col-lg-4">
                          <a href="/page/tkj" class="nav-link text-dark">
                              <div class="card shadow-sm">
                                  <img src="<?php echo get_bloginfo( 'template_directory' );?>/theme/assets/icon/ic_tkj.svg" class="card-img-top mx-auto mt-4" alt="">
                                  <h3 class="card-title text-center mt-3">
                                      TKJ
                                  </h3>
                                  <span class="card-text text-center text-muted px-3">
                                      Teknik Komputer dan Jaringan
                                  </span>
                              </div>
                          </a>
                      </li>
                      <li class="splide__slide col-10 col-lg-4">
                          <a href="/page/tbo" class="nav-link text-dark">
                              <div class="card shadow-sm">
                                  <img src="<?php echo get_bloginfo( 'template_directory' );?>/theme/assets/icon/ic_tbo.svg" class="card-img-top mx-auto mt-4" alt="">
                                  <h3 class="card-title text-center mt-3">
                                      TBO
                                  </h3>
                                  <span class="card-text text-center text-muted px-3">
                                      Teknik Bodi Otomotif
                                  </span>
                              </div>
                          </a>
                      </li>
                      <li class="splide__slide col-10 col-lg-4">
                          <a href="/page/tkkr" class="nav-link text-dark">
                              <div class="card shadow-sm">
                                  <img src="<?php echo get_bloginfo( 'template_directory' );?>/theme/assets/icon/ic_tkkr.svg" class="card-img-top mx-auto mt-4" alt="">
                                  <h3 class="card-title text-center mt-3">
                                      TKKR
                                  </h3>
                                  <span class="card-text text-center text-muted px-3">
                                      Tata Kecantikan Kulit dan Rambut
                                  </span>
                              </div>
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </section>

  <section class="section-berita mt-5">
      <div class="container">
          <h2 class="py-3 text-center text-md-start">Berita Terbaru</h2>
          <div class="row mt-5">
              <?php
                b5st_mainbody_start();
                get_template_part('loops/index-loop');
                b5st_mainbody_end();
              ?>
            </div>       
          </div>
          <div class="d-flex justify-content-center">
            <a href="<?php echo get_site_url();?>/category/berita" class="btn btn-primary my-5 shadow-sm lainya-btn">Lainya</a>
          </div>
      </div>
  </section>
</main>

<?php 
  // b5st_mainbody_after();
  get_footer(); 
?>

<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
<script src="<?php echo get_bloginfo( 'template_directory' );?>/theme/js/splideConfig.js"></script>