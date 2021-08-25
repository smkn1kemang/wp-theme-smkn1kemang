<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php b5st_navbar_before();?>

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <!-- <a class="navbar-brand" href="/">
            <img
                src="/assets/img/logo.png"
                class="logo"
                alt="Logo SMKN 1 Kemang"
            >
            <span class="redkim ms-3 p-0">REDKIM</span>
        </a> -->

        <?php b5st_navbar_brand();?>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <?php
            wp_nav_menu( array(
              'theme_location'  => 'navbar',
              'container'       => false,
              'menu_class'      => '',
              'fallback_cb'     => '__return_false',
              'items_wrap'      => '<ul id="%1$s" class="navbar-nav ms-auto %2$s">%3$s</ul>',
              'depth'           => 2,
              'walker'          => new b5st_walker_nav_menu()
            ) );
          ?>
            <!-- <ul class="navbar-nav mb-3 mb-lg-0 ms-auto d-flex">
                <li class="nav-item">
                    <a
                        class="nav-link"
                        aria-current="page"
                        href="/"
                    >
                        Beranda
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="/berita"
                    >
                        Berita
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profil
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="/page/sambutan-kepala-sekolah">
                                Sambutan Kepala Sekolah
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/page/sejarah-sekolah">
                                Sejarah Sekolah
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/page/visi-misi">
                                Visi & Misi
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/page/tujuann">
                                Tujuan
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/page/Kebijakan-Mutu">
                                Kebijakan Mutu
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Manajemen
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="/page/struktur-organisasi">
                                Struktur Organisasi
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/page/kurikulum">
                                Kurikulum
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/page/kesiswaan">
                                Kesiswaan
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/page/fasilitas">
                                Fasilitas
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/page/hubin">
                                Hubin
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/galeri">
                        Galeri
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/contact" class="btn btn-primary mt-3 mt-md-0">
                        Hubungi Kami
                    </a>
                </li>
            </ul> -->
        </div>
    </div>
</nav>

<?php b5st_navbar_after();?>
<!-- <nav id="site-navbar" class="container-fluid border-bottom navbar navbar-expand-md navbar-light bg-light">
  <div class="container-fluid px-0">

    <?php b5st_navbar_brand();?>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php
        wp_nav_menu( array(
          'theme_location'  => 'navbar',
          'container'       => false,
          'menu_class'      => '',
          'fallback_cb'     => '__return_false',
          'items_wrap'      => '<ul id="%1$s" class="navbar-nav ms-auto %2$s">%3$s</ul>',
          'depth'           => 2,
          'walker'          => new b5st_walker_nav_menu()
        ) );
      ?>

      <?php b5st_navbar_search();?>    
    </div>

  </div>
</nav> -->
  
</div>

<?php b5st_navbar_after();?>