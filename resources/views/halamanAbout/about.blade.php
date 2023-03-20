<!doctype html>
<html lang="en">
<title>Bumindo - Jasa Ekpedisi Domestic/International | About </title>
@include('layout.head')
<body>
    <!--/Header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
            <h1><a class="navbar-brand" href="{{ route('index') }}">
                        <img src="{{ asset('assets/images/Logo_Bumindo.png') }}" alt="Bumindo" tittle="Bumindo">
                    </a></h1>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('about') }}">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('services') }}">Layanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Kontak</a>
                        </li>
                    </ul>
                    <!--/search-->
                    <button id="trigger-overlay" class="searchw3-icon mx-xl-4 mx-lg-3" type="button"><i class="fas fa-search"></i></button>
                    <!-- open/close -->
                    <div class="overlay overlay-slidedown">
                        <button type="button" class="overlay-close"><i class="fas fa-times"></i></button>
                        <nav class="w3l-formhny">
                            <h5 class="mb-3">Search here</h5>
                            <form action="#" method="GET" class="d-sm-flex search-header">
                                <input class="form-control me-2" type="search" placeholder="Search here..." aria-label="Search" required>
                                <button class="btn btn-style btn-primary" type="submit">Search</button>
                            </form>
                        </nav>
                    </div>
                    <!--//search-->
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--//Header-->
    <!--/inner-page-->
    <div class="inner-banner3 py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title mt-lg-5 mt-4">
                            About Us </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> About Us</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!--//inner-page-->
    <!--/about-page-->
    <section class="w3l-ab-page py-5" id="about1">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-5">
                    <h6 class="title-subw3hny mb-2">Profil</h6>
                    <h3 class="title-w3l mb-2">Perusahaan Kami
                    </h3>

                    <p class="mt-3">
                        PT BUMINDO SARANA TRANSPORTASI berdiri karena menyadari tingginya permintaan dunia usaha dan industri akan
                        Jasa Transportasi. Dengan kemampuan, optimisme serta kekuatan management dan marketing yang handal perusahaan
                        kami sangat serius dalam melayani pengelolaan Jasa Transportasi dan Logistik sehingga siap menjawab tantangan
                        terhadap layanan pengiriman yang cepat, akurat dan aman.
                        <br>
                        <br>
                        Didukung dengan armada, jaringan transportasi serta kantor perwakilan dan keagenan yang tersebar di seluruh Indonesia,
                        kami siap menjadi bagian inti dari usaha pelanggan.
                        <br>
                        <br>
                        Dukungan management dan staff yang kuat, disertai kerjasama yang solid antara perusahaan dan klien merupakan
                        modal dasar perusahaan dalam mewujudkan pelayanan yang prima. Kami sangat yakin akan dapat menjadi mitra yang baik
                        dalam pendistribusian produk - produk industri keseluruh wilayah dan tujuan.
                    </p>
                </div>
                <div class="col-lg-5 offset-lg-1 text-end mt-lg-0 mt-5 position-relative">
                    <img src="{{ asset('assets/images/IMG-20220310-WA0057.jpg') }}" alt="" class="img-fluid radius-image">
                    <div class="imginfo__box">
                        <h6 class="imginfo__title">15</h6>
                        <p>Tahun Pengalaman</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!--//about-page-->
     <!--/w3l-join-main-->
     <section class="w3l-join-main py-5">
        <div class="container py-md-5">
            <div class="w3l-project-in">
                <div class="row bottom-info text-left">
                    <div class="col-lg-7 w3l-project-in-left pe-lg-5">
                        <h6 class="title-subw3hny mb-2">Cek Layanan Kami</h6>
                        <h3 class="title-w3l two mb-2">Mitra terbaik untuk pendistribusian produk anda.
                        </h3>


                    </div>
                    <div class="col-lg-5 w3l-project-in-right">
                        <div class="w3banner-content-btns">
                            <a href="{{ route('services') }}" class="btn btn-style btn-white mt-4">Cek Layanan</a>
                            <a href="{{ route('contact') }}" class="btn btn-style btn-primary mt-4 ms-3">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//w3l-join-main-->
    <!--/faq-section-->
    <div class="w3l-faq-block py-5" id="faq">
        <div class="container content-gd py-lg-5">
            <div class="row mt-3">
                <div class="col-lg-6 faqw3-right pe-lg-5">
                    <div class="faqw3content text-left">
                        <h3 class="title-w3l mb-2">Visi Perusahaan</h3>
                    </div>
                    <p class="mb-3">1. Menjadi perusahaan logistic terbesar di Indonesia dengan pelayanan tercepat, aman,
                        dan terpercaya serta mengembangkan kualitas layanan yang saling menguntungkan.
                    </p>
                    <p class="mb-3">2. Membangun hubungan yang harmonis dengan setiap pihak yang mengutamakan musyawarah dalam
                        setiap kendala yang dihadapi agar tercipta kenyamanan di kedua belah pihak.
                    </p>
                    <p class="">3. Menjadi perusahaan yang mengutamakan zero accident.
                    </p>
                </div>
                <div class="col-lg-6 faqw3-left">
                    <div class="faqw3content text-left">
                        <h3 class="title-w3l mb-2">Misi Perusahaan</h3>
                    </div>
                    <p class="mb-3">1. Mengutamakan kepuasan konsumen dengan memberikan pelayanan terbaik.
                    </p>
                    <p class="mb-3">2. Membangun kemitraan yang saling mendukung dan menguntungkan.
                    </p>
                    <p class="mb-3">3. Meningkatkan kinerja sumber daya manusia guna peningkatan kerja.
                    </p>
                    <p class="mb-3">4. Mengupayakan pertumbuhan finansial dan intelektual bagi klien dan perusahaan dalam jangka panjang.
                    </p>
                    <p class="">5. Menyediakan transportasi angkutan yang aman, efisien, dan menguntungkan yang dijalankan secara profesional.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- //faq-section -->

    @include('layout.footer')
        <!-- Js scripts -->
        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            <span class="fas fa-level-up-alt" aria-hidden="true"></span>
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }

        </script>
        <!-- //move top -->
    </footer>
    <!--//footer-9 -->


    @include('layout.listscript')
</body>

</html>
