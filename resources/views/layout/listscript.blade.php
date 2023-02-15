<!-- Template JavaScript -->
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme-change.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
    <!--/search-->
    <script src="{{ asset('assets/js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('assets/js/classie.js') }}"></script>
    <script src="{{ asset('assets/js/demo1.js') }}"></script>
    <!--//search-->
    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>
    <!-- //MENU-JS -->

    <!-- Owl Carousel -->
    <!-- script for banner slider-->
    <script>
        $(document).ready(function() {
            $('.owl-one').owlCarousel({
                loop: true,
                margin: 0,
                nav: false,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    480: {
                        items: 1
                    },
                    667: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
        })

    </script>
    <!-- //script -->
    <script>
        $(document).ready(function() {
            $("#owl-demo1").owlCarousel({
                loop: true,
                nav: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    736: {
                        items: 1,
                        nav: false
                    }
                }
            })
        })

    </script>
    <!--/Done Carousel -->

    <!--Show More Pekerja --> 
    <script>
    function toggleContent() {
        var content = document.getElementById("moreContent");
        var lessbutton = document.getElementById("lessbutton");
        var morebutton = document.getElementById('morebutton');

        if (content.style.display === "none") {
            content.style.display = "block";
            morebutton.style.display = 'none';
            lessbutton.style.display = 'block';
        } else {
            content.style.display = "none";
            morebutton.style.display = 'block';
            lessbutton.style.display = 'none';   
        }
    }
    
    function toggleserviceContent(){
        var content = document.getElementById("moreServiceContent");
        var lessbutton = document.getElementById("lessService");
        var morebutton = document.getElementById('moreService');

        if (content.style.display === "none") {
            content.style.display = "block";
            morebutton.style.display = 'none';
            lessbutton.style.display = 'block';
        } else {
            content.style.display = "none";
            morebutton.style.display = 'block';
            lessbutton.style.display = 'none';   
        }
    }
    </script>

    
    <!--/Done Show More Pekerja -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });

    </script>
    <!-- //disable body scroll which navbar is in active -->
    <!-- //bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>