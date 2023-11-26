
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>iPortfolio Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset("assets/img/favicon.png") }}" rel="icon">
    <link href="{{ asset("assets/img/apple-touch-icon.png") }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset("assets/vendor/aos/aos.css") }}" rel="stylesheet">
    <link href="{{ asset("assets/vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("assets/vendor/bootstrap-icons/bootstrap-icons.css") }}" rel="stylesheet">
    <link href="{{ asset("assets/vendor/boxicons/css/boxicons.min.css") }}" rel="stylesheet">
    <link href="{{ asset("assets/vendor/glightbox/css/glightbox.min.css") }}" rel="stylesheet">
    <link href="{{ asset("assets/vendor/swiper/swiper-bundle.min.css") }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset("assets/css/style.css") }}" rel="stylesheet">

</head>

<body>

<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img src="{{ asset("assets/img/profile-img.jpg") }}" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="index.html">Alex Smith</a></h1>
            <div class="social-links mt-3 text-center">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>

        <nav id="navbar" class="nav-menu navbar">
            <ul>
                <li><a href="{{ route('home') }}" class="nav-link scrollto {{ (request()->is('/')) ? 'active' : '' }}"><i class="bx bx-home"></i> <span>Home</span></a></li>
                <li><a href="{{ route('about') }}" class="nav-link scrollto {{ (request()->is('about')) ? 'active' : '' }}"><i class="bx bx-user"></i> <span>About</span></a></li>
                <li><a href="{{ route('resume') }}" class="nav-link scrollto {{ (request()->is('resume')) ? 'active' : '' }}"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
                <li><a href="{{ route('portfolio') }}" class="nav-link scrollto {{ (request()->is('portfolio')) ? 'active' : '' }}"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
                <li><a href="{{ route('services') }}" class="nav-link scrollto {{ (request()->is('services')) ? 'active' : '' }}"><i class="bx bx-server"></i> <span>Services</span></a></li>
                <li><a href="{{ route('contact') }}" class="nav-link scrollto {{ (request()->is('contact')) ? 'active' : '' }}"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->



<main id="main">
    @yield('content')

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>OstadPortfolio</span></strong>
        </div>
        <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">Sanjib Debnath</a>
        </div>
    </div>
</footer><!-- End  Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset("assets/vendor/purecounter/purecounter_vanilla.js") }}"></script>
<script src="{{ asset("assets/vendor/aos/aos.js") }}"></script>
<script src="{{ asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset("assets/vendor/glightbox/js/glightbox.min.js") }}"></script>
<script src="{{ asset("assets/vendor/isotope-layout/isotope.pkgd.min.js") }}"></script>
<script src="{{ asset("assets/vendor/swiper/swiper-bundle.min.js") }}"></script>
<script src="{{ asset("assets/vendor/typed.js/typed.umd.js") }}"></script>
<script src="{{ asset("assets/vendor/waypoints/noframework.waypoints.js") }}"></script>
{{--<script src="{{ asset("assets/vendor/php-email-form/validate.js") }}"></script>--}}

<!-- Template Main JS File -->
<script src="{{ asset("assets/js/main.js") }}"></script>

</body>

</html>
