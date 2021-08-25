<?php b5st_footer_before();?>

<footer>
    <div class="container pt-5">
        <div class="row">
            <div class="col-12 col-lg-3 mt-lg-5 mt-3">
                <img src="<?php echo get_bloginfo( 'template_directory' );?>/theme/assets/img/logo.png" alt="Logo SMKN 1 Kemang" class="logo mx-auto">
            </div>
            <div class="col-6 col-lg-3 mt-lg-5 mt-3">
                <h5>Media Sosial</h5>
                <ul class="list-unstyled mt-4">
                    <li class="mt-3">
                        <a href="https://www.instagram.com/smknsatukemang/">
                            Instagram
                        </a>
                    </li>
                    <li class="mt-3">
                        <a href="https://www.facebook.com/smknsatukemang">
                            Facebook
                        </a>
                    </li>
                    <li class="mt-3">
                        <a href="https://twitter.com/smknsatukemang">
                            Twitter
                        </a>
                    </li>
                    <li class="mt-3">
                        <a href="https://www.tiktok.com/@smknsatukemang?lang=en">
                            Tiktok
                        </a>
                    </li>
                    <li class="mt-3">
                        <a href="https://www.youtube.com/channel/UCKI_OhdvMZgxZ_fdsyujLUw">
                            Youtube
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-6 col-lg-3 mt-lg-5 mt-3">
                <h5>Tentang Sekolah</h5>
                <ul class="list-unstyled mt-4">
                    <li class="mt-3">
                        <a href="/page/sejarah-sekolah">
                            Sejarah Sekolah
                        </a>
                    </li>
                    <li class="mt-3">
                        <a href="/page/visi-misi">
                            Visi & Misi
                        </a>
                    </li>
                    <li class="mt-3">
                        <a href="/page/fasilitas-sekolah">
                            Fasilitas Sekolah
                        </a>
                    </li>
                    <li class="mt-3">
                        <a href="/page/profil-sekolah">
                            Profil Sekolah
                        </a>
                    </li>
                    <li class="mt-3">
                        <a href="/page/sturktur-organisasi">
                            Struktur Organisasi
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-lg-3 mt-lg-5 mt-3">
                <h5>Kontak</h5>
                <div class="kontak mt-3">
                    <div class="kontak-item d-flex">
                        <img 
                            src="<?php echo get_bloginfo( 'template_directory' );?>/theme/assets/icon/ic_placeholder.svg"
                            alt="Lokasi"
                            class="me-3"
                        >
                        <p>
                            Jl. Kemang Limus Manggung RT. 004 RW. 002 Kemang Desa Kemang Kecamatan Kemang Kabupaten Bogor
                        </p>
                    </div>
                    <div class="kontak-item d-flex">
                        <img 
                            src="<?php echo get_bloginfo( 'template_directory' );?>/theme/assets/icon/ic_telephone.svg"
                            alt="Telepon"
                            class="me-3"
                        >
                        <p>
                            +622517594566
                        </p>
                    </div>
                    <div class="kontak-item d-flex">
                        <img
                            src="<?php echo get_bloginfo( 'template_directory' );?>/theme/assets/icon/ic_mail.svg"
                            alt="E-mail"
                            class="me-3"
                        >
                        <p class="text-break">
                            smknsatukemang@gmail.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="mt-5 mb-0">
    <span class="d-flex align-items-center justify-content-center text-center">
        &copy; 2021 SMK Negeri 1 Kemang. All Rights Reserved.
    </span>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
<script src="<?php echo get_bloginfo( 'template_directory' );?>/theme/js/splideConfig.js"></script>

<?php b5st_footer_after();?>

<?php wp_footer(); ?>
</body>
</html>
