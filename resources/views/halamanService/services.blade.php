<!doctype html>
<html lang="en">
<title>Bumindo - Jasa Ekpedisi Domestic/International | Services </title>
@include('layout.head')
<body>
    <!--/Header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
                <h1><a class="navbar-brand" href="{{ route('home') }}">
                        <i class="fas fa-truck-moving"></i> Bumindo
                    </a></h1>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('services') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
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
    <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title mt-lg-5 mt-4">
                            Services </h2>

                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Services </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!--//inner-page-->
    <!--/w3l-index3-->
    <section class="w3l-index-about py-5" id="about2">
        <div class="container py-md-5 py-2">
            <div class="row">
                <div class="col-lg-6 pe-lg-5">
                    <div class="w3l-abouthny-img">
                        <img src="{{ asset('assets/images/ab.jpg') }}" alt="" class="img-fluid radius-image">
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5">
                    <div class="w3l-abouthny-info">
                        <h6 class="title-subw3hny">Apa Keahlian Kami</h6>
                        <h3 class="title-w3l">Kami memberikan pelayanan terbaik untuk anda.</h3>
                        <p class="mt-4">
                            PT BUMINDO SARANA TRANSPORTASI adalah pelaku jasa layanan untuk kebutuhan pengiriman barang baik
                            industri maupun perdagangan serta telah mendapat kepercayaan aktif terlibat di bidang transportasi / 
                            cargo dalam penanganan mega project industri.
                        </p>
                        <ul class="w3l-right-book w3l-right-book-grid mt-md-5 mt-4">
                            <li><span class="fas fa-check"></span> Harga Transparan dan Aman</li>
                            <li><span class="fas fa-check"></span> Gudang Penyimpanan</li>
                            <li><span class="fas fa-check"></span> Keamanan Barang Terjamin</li>
                            <li><span class="fas fa-check"></span> Pengiriman Cepat dan Efisien</li>
                            <li><span class="fas fa-check"></span> Layanan International</li>
                            <li><span class="fas fa-check"></span> Tenaga Ahli dan Profesional</li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//w3l-index3-->
    <!--/features-section-->
    <section class="w3l-features py-5" id="work">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-content text-center mb-lg-3 mb-4">
                <h6 class="title-subw3hny mb-1">Layanan Kami</h6>
                <h3 class="title-w3l">Apa yang kami tawarkan</h3>
            </div>
            <div class="main-cont-wthree-2">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h4><a href="#service" class="title-head">Harga Transparan dan Aman</a></h4>
                            <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-warehouse"></i>
                            </div>
                            <h4><a href="#service" class="title-head">Gudang Penyimpanan</a></h4>
                            <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-truck-loading"></i>
                            </div>
                            <h4><a href="#service" class="title-head">Keamanan Barang Terjamin</a></h4>
                            <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <h4><a href="#service" class="title-head">Pengiriman Cepat dan Efisien</a></h4>
                            <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-people-carry"></i>
                            </div>
                            <h4><a href="#service" class="title-head">Layanan International</a></h4>
                            <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <h4><a href="#service" class="title-head">Tenaga Ahli dan Profesional</a></h4>
                            <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//features-section -->
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
                    <p class="mt-md-2">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam.</p>
                </div>
                <div class="col-md-3 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="#img" class="d-block zoom"><img src="{{ asset('assets/images/g6.jpg') }}" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-lg-4 mt-3"><a href="#img">Jasa Angkutan Domestik Laut dan Darat</a>
                    </h4>
                    <p class="mt-md-2">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam.</p>
                </div>
                <div class="col-md-3 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="#img" class="d-block zoom"><img src="{{ asset('assets/images/g2.jpg') }}" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-lg-4 mt-3"><a href="#img"> Jasa Inklaring Pelabuhan</a>
                    </h4>
                    <p class="mt-md-2">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam.</p>
                </div>
                <div class="col-md-3 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="#img" class="d-block zoom"><img src="{{ asset('assets/images/g5.jpg') }}" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-lg-4 mt-3"><a href="#img">Pergudangan dan Distribusi</a>
                    </h4>
                    <p class="mt-md-2">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam.</p>
                </div>

                <div id="moreService" class="w3l-md-btn mx-auto text-center mt-md-5 mt-4">
                    <button class="btn btn-style btn-primary mt-4" onclick= "toggleserviceContent()" id="show-more-btn">Show More</a>
                </div>

            <div id="moreServiceContent" style="display: none;">
            <div class="witemshny-grids row">
                <div class="col-md-3 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="#img" class="d-block zoom"><img src="{{ asset('assets/images/g1.jpg') }}" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-lg-4 mt-3"><a href="#img">Domestik dan International Movers/Pindahan Kantor, Rumah, Gudang</a>
                    </h4>
                    <p class="mt-md-2">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam.</p>
                </div>
                <div class="col-md-3 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="#img" class="d-block zoom"><img src="{{ asset('assets/images/g6.jpg') }}" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-lg-4 mt-3"><a href="#img">Exhibition Forwarding</a>
                    </h4>
                    <p class="mt-md-2">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam.</p>
                </div>
                <div class="col-md-3 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="#img" class="d-block zoom"><img src="{{ asset('assets/images/g2.jpg') }}" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-lg-4 mt-3"><a href="#img">Project Cargo Handling</a>
                    </h4>
                    <p class="mt-md-2">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam.</p>
                </div>
                <div class="col-md-3 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="#img" class="d-block zoom"><img src="{{ asset('assets/images/g5.jpg') }}" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-lg-4 mt-3"><a href="#img">Jasa Inbound/Import</a>
                    </h4>
                    <p class="mt-md-2">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam.</p>
                </div>
                <div class="col-md-3 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="#img" class="d-block zoom"><img src="{{ asset('assets/images/g5.jpg') }}" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-lg-4 mt-3"><a href="#img">Jasa Kurir</a>
                    </h4>
                    <p class="mt-md-2">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam.</p>
                </div>
                <div class="col-md-3 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="#img" class="d-block zoom"><img src="{{ asset('assets/images/g5.jpg') }}" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-lg-4 mt-3"><a href="#img">Rental Armada</a>
                    </h4>
                    <p class="mt-md-2">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam.</p>
                </div>

                <div id="lessService" class="w3l-md-btn mx-auto text-center mt-md-5 mt-4">
                    <button class="btn btn-style btn-primary mt-4" onclick= "toggleserviceContent()" id="show-less-btn">Show Less</a>
                </div>
            </div>
            </div>
            <!--//row-1-->
        </div>
    </section>
    <!--//w3l-grids-->
    <!--/servicess-2-->
    <section class="locations-1 w3services-3">
        <div class="locations py-5">
            <div class="container py-lg-5 py-md-4 py-2">
                <div class="heading text-center mx-auto">
                    <h6 class="title-subw3hny mb-1">Armada Kami</h6>
                    <h3 class="title-w3l mb-3">Daftar Armada</h3>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-6 mt-md-5 mt-4">
                        <div class="w3property-grid">
                            <a href="#property">
                                <div class="box16">
                                    <img class="img-fluid" src="{{ asset('assets/images/g3.jpg') }}" alt="">
                                    <div class="box-content text-center">
                                        <i class="fas fa-truck-pickup"></i>
                                        <h3 class="title">Mobil Pickup</h3>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="col-lg-3 col-6 mt-md-5 mt-4">
                        <div class="w3property-grid">
                            <a href="#property">
                                <div class="box16">
                                    <img class="img-fluid" src="{{ asset('assets/images/g6.jpg') }}" alt="">
                                    <div class="box-content text-center">
                                        <i class="fas fa-truck"></i>
                                        <h3 class="title">Truck</h3>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="col-lg-3 col-6 mt-md-5 mt-4">
                        <div class="w3property-grid">
                            <a href="#property">
                                <div class="box16">

                                    <img class="img-fluid" src="{{ asset('assets/images/g1.jpg') }}" alt="">
                                    <div class="box-content text-center">
                                        <i class="fas fa-truck-moving"></i>
                                        <h3 class="title">Tronton</h3>

                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="col-lg-3 col-6 mt-md-5 mt-4">
                        <div class="w3property-grid">
                            <a href="#property">
                                <div class="box16">
                                    <img class="img-fluid" src="{{ asset('assets/images/g5.jpg') }}" alt="">
                                    <div class="box-content text-center">
                                        <i class="fas fa-ship"></i>
                                        <h3 class="title">Stooring</h3>

                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!--/servicess-2-->

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
