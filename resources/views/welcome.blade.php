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


                    <div id="mainMenu">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about-us">About Us</a></li>
                                    <li><a href="/gallery">Gallery</a></li>
                                    <li><a href="https://infinitysolutions.co.id/blog">Blog</a></li>
                                    <li><a href="/contact-us">Contact Us</a></li>
                                    {{-- <li class="dropdown"><a href="#">Layout</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu"><a href="#">Topbar</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="header-topbar.html">Light</a></li>
                                                    <li><a href="header-topbar-dark.html">Dark</a></li>
                                                    <li><a href="header-topbar-transparent.html">Transparent</a></li>
                                                    <li><a href="header-topbar-colored.html">Colored</a></li>
                                                    <li><a href="header-topbar-fullwidth.html">Fullwidth</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Header</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="header.html">Light</a></li>
                                                    <li><a href="header-dark.html">Dark</a></li>
                                                    <li><a href="header-transparent.html">Transparent</a></li>
                                                    <li><a href="header-fullwidth.html">Fullwidth</a></li>
                                                    <li class="dropdown-submenu"><a href="#">Modern</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="header-modern.html">Light</a></li>
                                                            <li><a href="header-modern-dark.html">Dark</a></li>
                                                            <li><a href="header-modern-transparent.html">Transparent</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="header-mini.html">Mini</a></li>
                                                    <li><a href="header-alternative.html">Alternative</a></li>
                                                    <li><a href="header-always-fixed.html">Always Fixed</a></li>
                                                    <li><a href="header-disable-fixed.html">Disable Fixed</a></li>
                                                    <li><a href="header-responsive-fixed.html">Responsive Fixed</a></li>
                                                    <li class="dropdown-submenu"><a href="#">Logo</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="header-logo.html">Left</a></li>
                                                            <li><a href="header-logo-right.html">Right</a></li>
                                                            <li><a href="header-logo-center.html">Center</a></li>
                                                            <li><a href="header-logo-fixed-header.html">Header Fixed
                                                                    Logo</a></li>
                                                            <li><a href="header-logo-responsive.html">Header Responsive
                                                                    Logo</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu"><a href="#">Menu Positions</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="header-menu-left.html">Left</a></li>
                                                            <li><a href="header-menu-right.html">Right</a></li>
                                                            <li><a href="header-menu-center.html">Center</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Main Menu<span
                                                        class="badge badge-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="menu.html">Default</a></li>
                                                    <li><a href="menu-lowercase.html">Lowercase</a></li>
                                                    <li><a href="menu-split.html">Split Menu</a></li>
                                                    <li><a href="menu-sub-title.html">Sub Title Menu</a></li>
                                                    <li><a href="menu-overlay.html">Overlay Menu</a></li>
                                                    <li><a href="menu-creative.html">Creative Menu</a></li>
                                                    <li><a href="menu-lines.html">Lines Menu</a></li>
                                                    <li class="dropdown-submenu"><a href="#">Outline</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="menu-outline.html">Default</a></li>
                                                            <li><a href="menu-outline-dark.html">Dark</a></li>
                                                            <li><a href="menu-outline-light.html">Light</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu"><a href="#">Rounded</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="menu-rounded.html">Default</a></li>
                                                            <li><a href="menu-rounded-dark.html">Dark</a></li>
                                                            <li><a href="menu-rounded-light.html">Light</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu"><a href="#">Positions</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="menu-left.html">Left Aligned</a></li>
                                                            <li><a href="menu-center.html">Center Aligned</a></li>
                                                            <li><a href="menu-right.html">Right Aligned</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="menu-dots.html">Dots Menu</a></li>
                                                    <li><a href="menu-one-page.html">One Page Menu</a></li>
                                                    <li><a href="menu-hover-background.html">Hover Background</a></li>
                                                    <li><a href="menu-button.html">Button Version</a></li>
                                                    <li><a href="menu-social-icons.html">Social Icons Version</a></li>
                                                    <li><a href="menu-onclick.html">OnClick Open</a></li>
                                                    <li><a href="menu-rounded-dropdown.html">Rounded Dropdown</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Page Title</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-title.html">Default</a></li>
                                                    <li><a href="page-title-image.html">Image background</a></li>
                                                    <li><a href="page-title-video.html">Video background</a></li>
                                                    <li><a href="page-title-pattern.html">Pattern background</a></li>
                                                    <li><a href="page-title-background-color.html">Colored
                                                            background</a></li>
                                                    <li><a href="page-title-parallax.html">Parallax</a></li>
                                                    <li><a href="page-title-animated.html">Animated</a></li>
                                                    <li><a href="page-title-right.html">Right Aligned</a></li>
                                                    <li><a href="page-title-left.html">Left Aligned</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Page Menu<span
                                                        class="badge badge-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-menu.html">Default</a></li>
                                                    <li><a href="page-menu-rounded.html">Rounded</a></li>
                                                    <li><a href="page-menu-outline.html">Outline</a></li>
                                                    <li><a href="page-menu-lines.html">Lines</a></li>
                                                    <li><a href="page-menu-solid.html">Solid</a></li>
                                                    <li><a href="page-menu-light.html">Light</a></li>
                                                    <li><a href="page-menu-dark.html">Dark</a></li>
                                                    <li><a href="page-menu-creative.html">Creative</a></li>
                                                    <li><a href="page-menu.html">Dropdown</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Sidebars</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="sidebar-sticky.html">Sticky version</a></li>
                                                    <li><a href="sidebar.html">Left aligned</a></li>
                                                    <li><a href="sidebar-right.html">Right aligned</a></li>
                                                    <li><a href="sidebar-both.html">Both Sidebars</a></li>
                                                    <li><a href="sidebar-modern.html">Modern</a></li>
                                                    <li><a href="sidebar-modern-right.html">Modern Right</a></li>
                                                    <li><a href="sidebar-modern-both.html">Modern Both Sidebars</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Footers</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="footer.html#footer">Default</a></li>
                                                    <li><a href="footer-dark.html#footer">Dark</a></li>
                                                    <li><a href="footer-1.html#footer">Footer 1</a></li>
                                                    <li><a href="footer-2.html#footer">Footer 2</a></li>
                                                    <li><a href="footer-3.html#footer">Footer 3</a></li>
                                                    <li><a href="footer-4.html#footer">Footer 4</a></li>
                                                    <li><a href="footer-5.html#footer">Footer 5</a></li>
                                                    <li><a href="footer-6.html#footer">Footer 6</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Options</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="layout-boxed.html">Boxed</a></li>
                                                    <li><a href="layout-modern.html">Modern</a></li>
                                                    <li><a href="layout-frame.html">Frame</a></li>
                                                    <li><a href="layout-wide.html">Wide (default)</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="preview/index.html">Layout Demos<span
                                                        class="badge badge-primary">220+</span></a></li>
                                        </ul>
                                    </li> --}}

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
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Terms & Conditions</a></li>
                                            <li><a href="#">Privacy & Policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="widget">
                                        <div class="widget-title">Support</div>
                                        <ul class="list">
                                            <li><a href="#">Help Desk</a></li>
                                            <li><a href="#">Documentation</a></li>
                                            <li><a href="#">Contact Us</a></li>
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
