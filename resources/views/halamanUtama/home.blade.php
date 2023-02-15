<!doctype html>
<html lang="en">
<title>Bumindo - Jasa Ekpedisi Domestic/International | Home </title>
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
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('services') }}">Services</a>
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
    <!--/Banner-Start-->
    <!-- main-slider -->
    <section class="w3l-main-slider banner-slider" id="home">
    <div class="owl-one owl-carousel owl-theme">
            <div class="item">
                <div class="slider-info banner-view banner-top1">
                    <div class="container">
                        <div class="banner-info header-hero-19">
                            <p class="w3hny-tag">Make the right move.</p>
                            <h3 class="title-hero-19">Moving your products across all borders.</h3>
                            <a href="{{ route('about') }}" class="btn btn-style btn-primary mt-4">Learn More </a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-info banner-view banner-top2">
                    <div class="container">
                        <div class="banner-info header-hero-19">

                            <p class="w3hny-tag">Go smoothly with safety.</p>
                            <h3 class="title-hero-19">We are here to move your business.</h3>
                            <a href="{{ route('about') }}" class="btn btn-style btn-primary mt-4">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-info banner-view banner-top3">
                    <div class="container">
                        <div class="banner-info header-hero-19">
                            <p class="w3hny-tag">Make the right move.</p>
                            <h3 class="title-hero-19">Moving your products across all borders.</h3>

                            <a href="{{ route('about') }}" class="btn btn-style btn-primary mt-4">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-info banner-view banner-top4">
                    <div class="container">
                        <div class="banner-info header-hero-19">
                            <p class="w3hny-tag">Go smoothly with safety.</p>
                            <h3 class="title-hero-19">We are here to move your business.</h3>
                            <a href="{{ route('about') }}" class="btn btn-style btn-primary mt-4">Learn More </a>

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
                    <img src="{{ asset('assets/images/g2.jpg') }}" alt="" class="img-fluid radius-image">
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

    <!--/bottom-3-grids-->
    <div class=" w3l-3-grids py-5" id="grids-3">
        <div class="container py-md-4">
            <div class="row">
                <div class="col-md-6 mt-md-0">
                    <div class="grids3-info position-relative">
                        <a href="#img" class="d-block zoom"><img src="{{ asset('assets/images/banner1.jpg') }}" alt="" class="img-fluid news-image"></a>
                        <div class="w3-grids3-info">
                            <h4 class="gdnhy-1"><a href="#img">Global Logistic Service For Business</a>
                                <a class="w3item-link btn btn-style mt-4" href="#">
                                    Explore Property
                                </a>

                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-4 grids3-info2">
                    <div class="grids3-info position-relative">
                        <a href="#img" class="d-block zoom"><img src="{{ asset('assets/images/banner2.jpg') }}" alt="" class="img-fluid news-image"></a>
                        <div class="w3-grids3-info second">
                            <h4 class="gdnhy-1"><a href="#img">We give you complete control
                                    of your shipments.</a>
                                <a class="w3item-link btn btn-style mt-4" href="#">
                                    Explore Property
                                </a>
                            </h4>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//bottom-3-grids-->

    <!--/w3-grids-->
    <section class="w3l-passion-mid-sec py-5">
        <div class="container py-md-5 py-3">
                <div class="row w3l-passion-mid-grids">

                    <div class="col-lg-6 passion-grid-item-info pe-lg-5 mb-lg-0 mb-5">
                        <h6 class="title-subw3hny mb-1">Secure courier</h6>
                        <h3 class="title-w3l mb-4">Secure courier for small & big packages</h3>
                        <p class="mt-3 pe-lg-5">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in
                            ligula. Semper at tempufddfel.Lorem ipsum dolor sit, amet consectetur elit. Earum mollitia
                            cum ex ipsam autem!earum sequi amet.</p>
                        <div class="w3banner-content-btns">
                            <a href="{{ route('about') }}" class="btn btn-style btn-primary mt-lg-5 mt-4 me-2">Learn More </a>

                        </div>
                    </div>
                    <div class="col-lg-6 passion-grid-item-info ps-lg-4">
                        <div class="w3lgrids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-truck-loading"></i>
                            </div>
                            <div class="icon-text">
                                <h4><a href="{{ route('services') }}" class="title-head mb-3">Tracking Is Easy</a></h4>
                                <p class="text-para mt-3">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula tempufddfel.</p>
                            </div>
                        </div>
                        <div class="w3lgrids-1 box-wrap mt-4">
                            <div class="icon">
                                <i class="fas fa-boxes"></i>
                            </div>
                            <div class="icon-text">
                                <h4><a href="{{ route('services') }}" class="title-head mb-3">Multiple Warehouses</a></h4>
                                <p class="text-para mt-3">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula tempufddfel.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <!--//w3-grids-->
    <!--/video-->
    <section class="w3l-index5 py-5" id="video">
        <div class="container py-md-5 py-3">
            <div class="row bottom-ab-grids align-items-center">
                <div class="w3l-video-left col-lg-6 mb-lg-0 mb-5">
                    <!-- /home-page-video-popup-->
                    <div class="position-relative mt-5">
                        <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                            <span class="video-play-icon">
                                <span class="fa fa-play"></span>
                            </span>
                        </a>
                        <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                        <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                            <iframe src="https://player.vimeo.com/video/395483299?h=f7c7d5cb59" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                        </div>
						<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                    </div>
                    <!-- //home-page-video-popup-->
                </div>
                <div class="w3ab-left-top col-lg-6 mt-lg-0 mt-5 ps-lg-5">
                    <h6 class="title-subw3hny mb-1">Fastest Courier Services</h6>
                    <h3 class="title-w3l two mb-2">We provide the best and fastest courier services nowadays</h3>
                    <p class="my-3"> Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at tempufddfel.Lorem ipsum dolor sit, amet consectetur ante ipsum elit. </p>
                    <p class="my-3"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                        Nulla mollis dapibus nunc.</p>
                    <a href="{{ route('about') }}" class="btn btn-style btn-primary mt-4">Learn More </a>
                </div>
            </div>
        </div>
    </section>
    <!--//video-->
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
                                <i class="fas fa-truck"></i>
                            </div>
                            <h4><a href="{{ route('services') }}" class="title-head mb-3">Transportation</a></h4>
                            <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            <h4><a href="{{ route('services') }}" class="title-head mb-3">Live Monitoring</a></h4>
                            <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-people-carry"></i>
                            </div>
                            <h4><a href="{{ route('services') }}" class="title-head mb-3">Worldwide Service</a></h4>
                            <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam. </p>
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

            </div>
            <!--//row-1-->
            <div class="w3l-md-btn mx-auto text-center mt-md-5 mt-4">
                <a href="{{ route('services') }}" class="btn btn-style btn-primary mt-4">Layanan Lainnya</a>
            </div>
        </div>
    </section>
    <!--//w3l-grids-->

    <!--/testimonials-->
    <section class="w3l-clients py-5" id="testimonials">
        <div class="container pt-md-5 pt-4">
            <div class="w3-testimonial-grids align-items-center py-lg-5">
                <div class="w3-testimonial-content-top">
                    <div class="mb-4">
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <q><i class="fas fa-quote-left me-2"></i>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae
                                            laudantium
                                            voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus tempora.
                                            Dolores molestias adipisci dolor sit amet! by the Desire to achieve
                                            Success.</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="test-img"><img src="{{ asset('assets/images/team1.jpg') }}" class="img-fluid" alt="client-img">
                                        </div>
                                        <div class="peopl align-self">
                                            <h3>John wilson</h3>
                                            <p class="indentity">Subtitle goes here</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--//testimonials-->

    <!--/w3l-newsletter-->
    <section class="w3l-newsletter py-5">
        <div class="container py-sm-5">
            <div class="uphny-w3l-newsletter-inf">
                <div class="row uphny-w3l-newsletter align-items-center">
                    <div class="col-lg-6 w3l-newsletter-left text-left">
                        <h3 class="titlehny">Don't miss our future updates! Get subscribed today!</h3>
                    </div>
                    <div class="col-lg-6 w3l-newsletter-form ps-lg-5 mt-lg-0 mt-md-5 mt-4">
                        <form action="#" method="post" class="subscribe-wthree">
                            <div class="flex-wrap subscribe-wthree-field">
                                <input class="form-control" type="email" placeholder="Type Your Email Address" name="email" required="">
                                <button class="btn btn-style btn-primary" type="submit">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//w3l-newsletter-->
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
