<!doctype html>
<html lang="en">
<title>Bumindo - Jasa Ekpedisi Domestic/International | Home </title>
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
                            <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">Tentang</a>
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
    <!--/Banner-Start-->
    <!-- main-slider -->
    <section class="w3l-main-slider banner-slider" id="home">
    <div class="owl-one owl-carousel owl-theme">
            <div class="item">
                <div class="slider-info banner-view banner-top1">
                    <div class="container">
                        <div class="banner-info header-hero-19">
                            <p class="w3hny-tag">Jangan salah pilih.</p>
                            <h3 class="title-hero-19">Dapatkan pengiriman terbaik dengan layanan kami.</h3>
                            <a href="{{ route('about') }}" class="btn btn-style btn-primary mt-4">Pelajari Lebih Lanjut</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-info banner-view banner-top2">
                    <div class="container">
                        <div class="banner-info header-hero-19">

                            <p class="w3hny-tag">Kirim aman, sampai terjamin.</p>
                            <h3 class="title-hero-19">Melayani dengan sepenuh hati untuk kepuasan pelanggan.</h3>
                            <a href="{{ route('about') }}" class="btn btn-style btn-primary mt-4">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-info banner-view banner-top3">
                    <div class="container">
                        <div class="banner-info header-hero-19">
                            <p class="w3hny-tag">Pengiriman anda, prioritas kami.</p>
                            <h3 class="title-hero-19">Satu solusi untuk semua pengiriman Anda.</h3>

                            <a href="{{ route('about') }}" class="btn btn-style btn-primary mt-4">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-info banner-view banner-top4">
                    <div class="container">
                        <div class="banner-info header-hero-19">
                            <p class="w3hny-tag">Jangan biarkan pengiriman menjadi masalah, percayakan pada kami.</p>
                            <h3 class="title-hero-19">Jasa pengiriman cepat, andal, dan aman untuk kebutuhan bisnis dan personal Anda.</h3>
                            <a href="{{ route('about') }}" class="btn btn-style btn-primary mt-4">Pelajari Lebih Lanjut</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //main-slider -->
    <!--/grids-->
    <section class="w3l-grids-3 py-5" id="about">
        <div class="container py-md-5 py-3">
            <div class="row w3home-ab-grids">
                <div class="w3ab-right-top col-lg-6 pe-lg-5">
                    <img src="{{ asset('assets/images/IMG-20220310-WA0093_2.jpg') }}" alt=""  class="img-fluid radius-image">
                </div>
                <div class="w3ab-left-top col-lg-6 mt-lg-0 mt-4 pt-lg-0 pt-2">
                    <h6 class="title-subw3hny mb-1">Profil Perusahaan.</h6>
                    <h3 class="title-w3l mb-2">Jasa Transportasi dan Logistik Cepat, Akurat dan Aman</h3>
                    <p class="my-3"> 
                    PT BUMINDO SARANA TRANSPORTASI adalah perusahaan yang berdiri sejak 2008 dan bergerak di bidang jasa Trucking,
                    Movers, Project cargo, Pergudangan, Distribusi dan International Freight Forwarder.

                    </p>

                    <a href="{{ route('about') }}" class="btn btn-style btn-primary mt-4">Pelajari Lebih Lanjut</a>
                </div>

            </div>
        </div>
    </section>
    <!--//grids-->

    <!-- features section -->
    <section class="w3l-features py-5" id="features">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-content text-center mb-lg-3 mb-4">
                <h6 class="title-subw3hny mb-1">Apa Keahlian Kami</h6>
                <h3 class="title-w3l">Layanan Usaha</h3>
            </div>
            <div class="main-cont-wthree-2">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-warehouse"></i>
                            </div>
                            <h4><a href="{{ route('services') }}" class="title-head mb-3">Gudang Penyimpanan</a></h4>
                            <p class="text-para">Gudang penyimpanan kami menawarkan ruang yang luas, aman, dan terorganisir untuk semua jenis barang. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <h4><a href="{{ route('services') }}" class="title-head mb-3">Pengiriman Cepat dan Efisien</a></h4>
                            <p class="text-para">Layanan Pengiriman Cepat dan Efisien tanpa mengurangi kualitas dan keamanan serta pengiriman yang tepat waktu, akurat, dan efektif. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-people-carry"></i>
                            </div>
                            <h4><a href="{{ route('services') }}" class="title-head mb-3">Layanan International</a></h4>
                            <p class="text-para">Layanan Internasional kami mencakup berbagai jenis pengiriman, dengan dukungan dari mitra logistik yang terpercaya di seluruh dunia. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//features section -->
    <!--/w3l-grids-->
    <section class="w3l-witemshny-main py-5">
        <div class="container py-md-4">
            <!--/row-1-->
            <div class="witemshny-grids row">
                <div class="col-md-3 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="#img" class="d-block zoom"><img src="{{ asset('assets/images/g1.jpg') }}" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-lg-4 mt-3"><a href="#img">Jasa Pengiriman Domestik Udara</a>
                    </h4>
                    <p class="mt-md-2">Kami menawarkan Jasa Pengiriman Domestik Udara yang memungkinkan Anda mengirimkan barang dengan cepat dan mudah ke berbagai daerah di dalam negeri.</p>
                </div>
                <div class="col-md-3 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="#img" class="d-block zoom"><img src="{{ asset('assets/images/IMG-20220310-WA0049.jpg') }}" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-lg-4 mt-3"><a href="#img">Jasa Angkutan Domestik Laut dan Darat</a>
                    </h4>
                    <p class="mt-md-2">Kami menawarkan Jasa Angkutan Domestik Laut dan Darat yang memungkinkan Anda mengirimkan barang dengan cepat dan efisien ke berbagai daerah di dalam negeri.
.</p>
                </div>
                <div class="col-md-3 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="#img" class="d-block zoom"><img src="{{ asset('assets/images/IMG-20220310-WA0070.jpg') }}" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-lg-4 mt-3"><a href="#img"> Jasa Inklaring Pelabuhan</a>
                    </h4>
                    <p class="mt-md-2">Kami menawarkan Jasa Inklaring Pelabuhan yang memastikan barang Anda dapat lolos pemeriksaan bea cukai dan dokumen administrasi di pelabuhan dengan cepat dan efisien.</p>
                </div>
                <div class="col-md-3 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="#img" class="d-block zoom"><img src="{{ asset('assets/images/IMG-20220310-WA0090.jpg') }}" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-lg-4 mt-3"><a href="#img">Pergudangan dan Distribusi</a>
                    </h4>
                    <p class="mt-md-2">Kami menawarkan layanan Pergudangan dan Distribusi dengan jaringan pergudangan yang luas dan dilengkapi dengan perlengkapan yang memadai untuk memudahkan pelanggan dalam mengakses dan mengelola persediaan barang.</p>
                </div>

            </div>
            <!--//row-1-->
            <div class="w3l-md-btn mx-auto text-center mt-md-5 mt-4">
                <a href="{{ route('services') }}" class="btn btn-style btn-primary mt-4">Layanan Selengkapnya</a>
            </div>
        </div>
    </section>
    <!--//w3l-grids-->
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
