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

    <!--Show/Hide Script --> 
    <script>
    function toggleContent() {
        const content = document.getElementById("moreContent");
        const lessbutton = document.getElementById("lessbutton");
        const morebutton = document.getElementById('morebutton');

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
        const content = document.getElementById("moreServiceContent");
        const lessbutton = document.getElementById("lessService");
        const morebutton = document.getElementById('moreService');

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

        const link1 = document.getElementById("map1_direction");
        const link2 = document.getElementById("map2_direction");
        const link3 = document.getElementById("map3_direction");

        const content = document.getElementById("map-content");
        const content1 = document.getElementById("map1-content");
        const content2 = document.getElementById("map2-content");
        const content3 = document.getElementById("map3-content");

        link1.addEventListener("click", function() {
        content1.classList.remove("hide");
        setTimeout(function() {
        content1.scrollIntoView();
        }, 25);

        content.classList.add("hide");
        content2.classList.add("hide");
        content3.classList.add("hide");
        });

        link2.addEventListener("click", function() {
        content2.classList.remove("hide");
        setTimeout(function() {
        content2.scrollIntoView();
        }, 25);   

        content1.classList.add("hide");
        content.classList.add("hide");
        content3.classList.add("hide");
        });

        link3.addEventListener("click", function() {
        content3.classList.remove("hide");
        setTimeout(function() {
        content3.scrollIntoView();
        }, 25);  

        content1.classList.add("hide");
        content.classList.add("hide");
        content2.classList.add("hide");
        });
    </script>
    <!--/Done Show/Hide Script -->

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