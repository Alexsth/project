<!doctype html>
<html class="no-js" lang="zxx">
@include('frontend.head')
<body>
    <div id="app">

    <!-- JS here -->

    <script type="application/javascript" src=" {{ asset('/frontend/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script type="application/javascript" src=" {{ asset('/frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script type="application/javascript" src=" {{ asset('/frontend/js/popper.min.js') }}"></script>
    <script type="application/javascript" src=" {{ asset('/frontend/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script type="application/javascript" src=" {{ asset('/frontend/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script type="application/javascript" src=" {{ asset('/frontend/js/owl.carousel.min.js') }}"></script>
    <script type="application/javascript" src=" {{ asset('/frontend/js/slick.min.js') }}"></script>

    <!-- One Page, Animated-HeadLin -->
    <script type="application/javascript" src=" {{ asset('/frontend/js/wow.min.js') }}"></script>
    <script type="application/javascript" src=" {{ asset('/frontend/js/animated.headline.js') }}"></script>
    <script type="application/javascript" src=" {{ asset('/frontend/js/jquery.magnific-popup.js') }}"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script type="application/javascript" src=" {{ asset('/frontend/js/jquery.scrollUp.min.js') }}"></script>
    <script type="application/javascript" src=" {{ asset('/frontend/js/jquery.nice-select.min.js') }}"></script>
    <script type="application/javascript" src=" {{ asset('/frontend/js/jquery.sticky.js') }}"></script>

    <!-- contact js -->
    {{-- <script type="application/javascript" src=" {{ asset('/frontend/js/contact.js') }}"></script> --}}
    <script type="application/javascript" src=" {{ asset('/frontend/js/jquery.form.js') }}"></script>
    <script type="application/javascript" src=" {{ asset('/frontend/js/jquery.validate.min.js') }}"></script>
    <script type="application/javascript" src=" {{ asset('/frontend/js/mail-script.js') }}"></script>
    <script type="application/javascript" src=" {{ asset('/frontend/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script type="application/javascript" src=" {{ asset('/frontend/js/plugins.js') }}"></script>
    <script type="application/javascript" src=" {{ asset('/frontend/js/main.js') }}"></script>


    </div>
    <script type="application/javascript" src="{{ mix('js/app.js') }}"> </script>
</body>
</html>
