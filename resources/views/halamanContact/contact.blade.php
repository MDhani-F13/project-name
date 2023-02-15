<!doctype html>
<html lang="en">
<title>Bumindo - Jasa Ekpedisi Domestic/International | Contact </title>
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
                            <a class="nav-link" href="{{ route('services') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('contact') }}">Contact</a>
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
                            Contact Us </h2>

                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Contact</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!--//inner-page-->
    <!-- contacts-5-grid -->
    <div class="w3l-contact-10 py-5" id="contact">
        <div class="form-41-mian pt-md-5 pt-3">
            <div class="container">
                <div class="row contacts-5-grid-main mb-5">
                    <div class="col-lg-6 contacts-5-grid pe-lg-5">
                        <h5 class="title-subw3hny">Contact our team</h5>
                        <h3 class="title-w3l mb-3">Get in touch with us</h3>
                        <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elitull am aliqu am, velit rutrum dictum lobortis, turpis justo auc tor quam, a auctor lorem odio in nunc.</p>

                        <h4 class="title-w3l-adinf mt-4">Support Center 24/7</h4>
                        <div class="address-grid d-flex">
                            <i class="fas fa-headset mt-2"></i>
                            <p><a href="tel:+12 324-016-694" class="link1">+12 324-016-694</a></p>
                        </div>
                        <div class="address-grid d-flex">
                            <i class="fas fa-envelope"></i>
                            <p class="mt-0"><a href="mailto:mail@example.com" class="link1">Office@example.com</a></p>

                        </div>
                    </div>

                    <div class="col-lg-6 form-inner-cont mt-lg-0 mt-4">
                        <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
                            <div class="form-grids">
                                <div class="form-input">
                                    <input type="text" name="w3lName" id="w3lName" placeholder="Enter your name *" required="" />
                                </div>
                                <div class="form-input">
                                    <input type="text" name="w3lSubject" id="w3lSubject" placeholder="Enter subject " required />
                                </div>
                                <div class="form-input">
                                    <input type="email" name="w3lSender" id="w3lSender" placeholder="Enter your email *" required />
                                </div>
                                <div class="form-input">
                                    <input type="text" name="w3lPhone" id="w3lPhone" placeholder="Enter your Phone Number *" required />
                                </div>
                            </div>
                            <div class="form-input">
                                <textarea name="w3lMessage" id="w3lMessage" placeholder="Type your query here" required=""></textarea>
                            </div>
                            <div class="w3-submit text-right">
                                <button class="btn btn-style btn-primary">Send Message <i class="fas fa-paper-plane ms-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- //contacts-5-grid -->
    </div>
    <div class="contacts-sub-5">
        <div class="contacts-mapw3 position-relative">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1306.2176843537673!2d112.73738753543907!3d-7.4480564426829385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e6bfeeafcca7%3A0xe2d59d3ea00309b7!2sPesona%20Permata%20Gading%202!5e0!3m2!1sen!2sid!4v1676344114113!5m2!1sen!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="map-content-5">
                <h4 class="title-w3l-adinf mb-3">Address Info</h4>
                <div class="address-grid">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>Sidoarjo - Pesona Permata Gading 2 Blok G No 10 Lingkar Timur</p>
                </div>
                <div class="address-grid my-2">
                    <i class="fas fa-envelope"></i>
                    <p><a href="mailto:mail@example.com" class="link1">mail@example.com</a></p>

                </div>
                <div class="address-grid">
                    <i class="fas fa-phone-alt"></i>
                    <p><a href="tel:+12 324-016-695" class="link1">+12 324-016-695</a></p>
                </div>
                <div class="address-grid my-2">
                    <i class="far fa-clock"></i>
                    <p>Senin - Sabtu: 9:00 - 17:00</p>
                </div>
                <div class="address-grid">
                    <p>Closed on Sunday</p>
                </div>
            </div>
        </div>
    </div>
    <!--Script to show Map yang dibutuhkan-->
    <script>
        $(document).ready(function() {
            $(".map").hide();
            $(".show-map").click(function(e) {
            e.preventDefault();
            var mapId = $(this).data("map");
            $(".map").hide();
            $("#" + mapId).show();
        });
        });
    </script>

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
