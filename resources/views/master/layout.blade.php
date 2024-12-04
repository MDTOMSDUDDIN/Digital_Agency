
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>DIGITAL AGENCY</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('asset/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/vendor.css') }}">

    <!-- script
    ================================================== -->
    <script defer src="{{ asset('asset/js/vendor/fontawesome/all.min.js') }}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>

<body id="top" class="ss-preload">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader"></div>
    </div>

    <!-- header
    ================================================== -->
    <header class="s-header">
        <div class="row s-header__nav-wrap">
            <nav class="s-header__nav">
                <ul>
                    <li class="current"><a class="smoothscroll" href="{{ route('home') }}">Home</a></li>
                    <li><a class="smoothscroll" href="{{ route('about')}} ">About</a></li>
                    <li><a class="smoothscroll" href="{{ route('resume')}}">Resume</a></li>
                    <li><a class="smoothscroll" href="{{ route('portfolio') }}">Works</a></li>
                    <li><a class="smoothscroll" href="{{ route('testimonial')}}">Testimonials</a></li>
                    <li><a class="smoothscroll" href="{{ route('contact')}}">Say Hello</a></li>
                </ul>
            </nav>
        </div> <!-- end row -->
        
        <a class="s-header__menu-toggle " href="#0" title="Menu">
            <span class="s-header__menu-icon"></span>
        </a>
    </header>
     <!-- end s-header -->


    @yield('content')



    <!-- footer
    ================================================== -->
    <footer class="s-footer">
        <div class="row">
            <div class="column large-4 medium-6 w-1000-stack s-footer__social-block">
                <ul class="s-footer__social">
                    <li><a href="#0"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                    <li><a href="#0"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#0"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#0"><i class="fab fa-dribbble" aria-hidden="true"></i></a></li>
                    <li><a href="#0"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                </ul>
            </div>

            <div class="column large-7 medium-6 w-1000-stack ss-copyright">
                <span>© Copyright Digital Agency 2024</span> 
                <span>Design by <a href="#">MD TOMSD UDDIN</a></span>
            </div>
        </div>

        <div class="ss-go-top">
            <a class="smoothscroll" title="Back to Top" href="#top">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M6 4h12v2H6zm5 10v6h2v-6h5l-6-6-6 6z"/></svg>
             </a>
        </div> <!-- end ss-go-top -->
    </footer>


    <!-- Java Script
    ================================================== -->
    <script src="{{ asset('asset/js/plugins.js')}}"></script>
    <script src="{{ asset('asset/js/main.js')}}"></script>

</body>

</html>