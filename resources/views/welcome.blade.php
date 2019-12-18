<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Bintang J Tobing" />
    <meta name="keywords"
        content="infinity, infinity solutions, infinity solutions ID, infinity ID, buat web terbaik, hosting murah, jasa desain terbaik, software accounting, ascend, ascend erp, hardware, konsultan IT terbaik">
    <meta name="description" content="Infinity Solutions is an emerging information technology company that provides
        software hardware development, design creations, and consultation.">
    <meta name="google-site-verification" content="bTmCCNB2-zcfo7NrYXlUIJVTDCZ9_V1V-jfHbmADuys">
    <meta name="msvalidate.01" content="85BB1F108E1BB71008A6260F2D262234" />
    <link rel="shortcut icon"
        href="https://res.cloudinary.com/https-www-infinitysolutions-co-id/image/upload/v1554180259/icon.ico"
        type="image/x-icon">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">

    <title>INFINITY SOLUTIONS @yield('title')</title>
    <meta name="title" content="INFINITY SOLUTIONS ID">

    <link href="{!!asset('css/plugins.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/style.css')!!}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ae026c985d.js" crossorigin="anonymous"></script>
    <script>
        window.addEventListener("load", function () {
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {
                        "background": "#3a8860"
                    },
                    "button": {
                        "background": "#62ffaa"
                    }
                },
                "content": {
                    "link": "Learn More",
                    "href": "https://infinitysolutions.co.id/cookies-policy"
                }
            })
        });

    </script>
</head>

<body>

    <div class="body-inner">

        <header id="header" data-transparent="true" class="dark submenu-light">
            <div class="header-inner">
                <div class="container">

                    <div id="logo"> <a href="/"><span class="logo-default">INFINITY</span><span
                                class="logo-dark">INFINITY</span></a> </div>


                    <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i
                                class="fas fa-times"></i></a>
                        <form class="search-form" action="search-results-page.html" method="get">
                            <input class="form-control" name="q" type="search" placeholder="Type & Search..." />
                            <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                        </form>
                    </div>

                    <div class="header-extras">
                        <ul>
                            {{-- <li> <a id="btn-search" href="#"> <i class="fas fa-search"></i></a> </li> --}}
                            <li>
                                <div class="p-dropdown"> <a href="#"><i class="fas fa-globe"></i><span>EN</span></a>
                                    {{-- <ul class="p-dropdown-content">
                                        <li><a href="#">Indonesia</a></li>
                                    </ul> --}}
                                </div>
                            </li>
                        </ul>
                    </div>


                    <div id="mainMenu-trigger"> <a class="lines-button x"><span class="lines"></span></a> </div>


                    <div id="mainMenu" class="menu-sub-title">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="/">Home<span class="menu-sub-title">Main
                                                page</span></a></li>
                                    <li><a href="/about-us">About Us<span class="menu-sub-title">Our story
                                                page</span></a></li>
                                    <li><a href="/gallery">Gallery<span class="menu-sub-title">Our
                                                documentation</span></a></li>
                                    <li><a href="https://infinitysolutions.co.id/blog">Blog<span
                                                class="menu-sub-title">News page</span></a></li>
                                    <li><a href="/contact-us">Contact Us<span class="menu-sub-title">Get in touch with
                                                us</span></a></li>
                                    <li class="dropdown"><a href="#">Account<span class="menu-sub-title">Managements
                                                page</span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Login</a></li>
                                            <li><a href="#">Register</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </header>


        @yield('content')

        <footer id="footer">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="widget">
                                <div class="widget-title">Infinity Solutions ID</div>
                                <img src="https://res.cloudinary.com/https-www-infinitysolutions-co-id/image/upload/v1554180258/footerpng.png"
                                    class="img-responsive" alt="Infinity Solutions Logo">
                                <p class="mb-5"><br>
                                    All rights reserved. Copyright © 2019. <br>PT BENUA SOLUSI TEKNOLOGI.</p>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="widget">
                                        <div class="widget-title">Important Links</div>
                                        <ul class="list">
                                            <li><a href="/about-us">About Us</a></li>
                                            <li><a href="/terms-conditions">Terms & Conditions</a></li>
                                            <li><a href="/privacy-policy">Privacy & Policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="widget">
                                        <div class="widget-title">Support</div>
                                        <ul class="list">
                                            <li><a href="#">Frequently Asked Questions</a></li>
                                            <li><a href="/contact-us">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-content">
                <div class="container">
                    <div class="copyright-text text-center">&copy; 2019 PT BENUA SOLUSI TEKNOLOGI - Infinity Solutions
                        ID.
                        All Rights Reserved. </div>
                </div>
            </div>
        </footer>

    </div>


    <a id="scrollTop"><i class="fas fa-chevron-up"></i><i class="fas fa-chevron-up"></i></a>

    <script src="{!!asset('js/jquery.js')!!}"></script>
    <script src="{!!asset('js/plugins.js')!!}"></script>
    <script type='text/javascript'
        src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAZIus-_huNW25Jl7RPmHgoGZjD5udgBMI'>
    </script>
    <script src="{!!asset('js/functions.js')!!}"></script>
    <script src="{!!asset('js/gmap/gmap3.min.js')!!}"></script>
    <script src="{!!asset('js/gmap/map-styles.js')!!}"></script>
</body>

</html>
