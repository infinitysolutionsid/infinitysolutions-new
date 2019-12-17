<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo">
    <link rel="icon" type="image/png" href="images/favicon.png">

    <title>POLO | The Multi-Purpose HTML5 Template</title>

    <link href="{!!asset('css/plugins.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/style.css')!!}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ae026c985d.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="body-inner">

        <header id="header" data-transparent="true" class="dark submenu-light">
            <div class="header-inner">
                <div class="container">

                    <div id="logo"> <a href="index.html"><span class="logo-default">INFINITY</span><span
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
                            <li> <a id="btn-search" href="#"> <i class="fas fa-search"></i></a> </li>
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
                                    <li><a href="index.html">Home</a></li>
                                    <li class="dropdown"><a href="#">Layout</a>
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
                                    </li>
                                    <li class="dropdown"><a href="#">Features</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu"><a href="#">Sliders</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="slider-revolution-slider.html">Revolution Slider</a>
                                                    </li>
                                                    <li><a href="slider-inspiro-slider.html">Inspiro Slider</a></li>
                                                    <li><a href="slider-static-media-image.html">Fullscreen Image</a>
                                                    </li>
                                                    <li><a href="slider-static-media-parallax.html">Fullscreen
                                                            Parallax</a></li>
                                                    <li><a href="slider-static-media-text-rotator.html">Fullscreen Text
                                                            Rotator</a></li>
                                                    <li><a href="slider-static-media-video.html">Fullscreen HTML5
                                                            Video</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="widgets.html">Widgets</a></li>
                                            <li><a href="page-loaders.html">Page Loaders<span
                                                        class="badge badge-danger">NEW</span></a></li>
                                            <li class="dropdown-submenu"><a href="#">Modal Auto Open<span
                                                        class="badge badge-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="modal-auto-open-subscription.html">Subscription</a>
                                                    </li>
                                                    <li><a href="modal-auto-open-shop.html">Shop Promotion</a></li>
                                                    <li><a href="modal-auto-open-login.html">Login Form</a></li>
                                                    <li><a href="modal-auto-open-audio.html">Audio Player</a></li>
                                                    <li><a href="modal-auto-open-video.html">HTML5 Video</a></li>
                                                    <li><a href="modal-auto-open-youtube.html">YouTube Video</a></li>
                                                    <li><a href="modal-auto-open-vimeo.html">Vimeo Video</a></li>
                                                    <li><a href="modal-auto-open-iframe.html">Iframe</a></li>
                                                    <li><a href="modal-auto-open.html">Sample Text</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Cookie Notify<span
                                                        class="badge badge-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="cookie-notify.html">Top position</a></li>
                                                    <li><a href="cookie-notify-bottom.html">Bottom position</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shape-dividers.html">Shape Dividers<span
                                                        class="badge badge-danger">NEW</span></a></li>
                                            <li class="dropdown-submenu"><a href="#">Menu Labels</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Label (new)<span
                                                                class="badge badge-danger">NEW</span></a></li>
                                                    <li><a href="#">Label (hot)<span
                                                                class="badge badge-danger">HOT</span></a></li>
                                                    <li><a href="#">Label (popular)<span
                                                                class="badge badge-success">POPULAR</span></a></li>
                                                    <li><a href="#">Label (sale)<span
                                                                class="badge badge-warning">SALE</span></a></li>
                                                    <li><a href="#">Label (info)<span
                                                                class="badge badge-info">INFO</span></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu-item"><a href="#">Elements</a>
                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <ul>
                                                            <li><a href="shortcode-according.html">Accordions</a></li>
                                                            <li><a href="shortcode-alerts.html">Alerts</a></li>
                                                            <li><a href="shortcode-animations.html">Animations</a></li>
                                                            <li><a href="shortcode-avatar.html">Avatar</a></li>
                                                            <li><a href="shortcode-audio-video.html">Audio & Video</a>
                                                            </li>
                                                            <li><a href="shortcode-blockquotes.html">Blockquotes</a>
                                                            </li>
                                                            <li><a href="component-bootstrap-switch.html">BS Switch<span
                                                                        class="badge badge-danger">NEW</span></a></li>
                                                            <li><a href="component-bootstrap-notify.html">BS Notify<span
                                                                        class="badge badge-danger">NEW</span></a></li>
                                                            <li><a href="shortcode-breadcrumbs.html">Breadcrumbs</a>
                                                            </li>
                                                            <li><a href="shortcode-buttons.html">Buttons</a></li>
                                                            <li><a href="shortcode-background-image.html">Background
                                                                    Image</a></li>
                                                            <li><a href="shortcode-background-overlays.html">Background
                                                                    Overlays</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <ul>
                                                            <li><a href="component-charts-chartjs.html">Charts<span
                                                                        class="badge badge-danger">NEW</span></a></li>
                                                            <li><a href="component-calendar.html">Calendar<span
                                                                        class="badge badge-danger">NEW</span></a></li>
                                                            <li><a href="shortcode-client-logo.html">Clients logos</a>
                                                            </li>
                                                            <li><a href="shortcode-calltoaction.html">Call to action</a>
                                                            </li>
                                                            <li><a href="shortcode-carousel.html">Carousel</a></li>
                                                            <li><a href="shortcode-code.html">Code</a></li>
                                                            <li><a href="shortcode-countdown-timer.html">Countdown
                                                                    Timers</a></li>
                                                            <li><a href="shortcode-countdown.html">Countdown<span
                                                                        class="badge badge-danger">NEW</span></a></li>
                                                            <li><a href="shortcode-counters.html">Counter Numbers</a>
                                                            </li>
                                                            <li><a href="component-clipboard.html">Clipboard<span
                                                                        class="badge badge-danger">NEW</span></a></li>
                                                            <li><a href="component-datatable.html">Data Tables<span
                                                                        class="badge badge-danger">NEW</span></a></li>
                                                            <li><a href="component-daterangepicker.html">Date & Time
                                                                    Pickers</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <ul>
                                                            <li><a href="shortcode-dropcat-highlight.html">Dropcat &
                                                                    Highlight</a></li>
                                                            <li><a href="shortcode-dropdowns.html">Dropdowns</a></li>
                                                            <li><a href="shortcode-team-members.html">Team members</a>
                                                            </li>
                                                            <li><a href="shortcode-forms.html">Form Controls</a></li>
                                                            <li><a href="shortcode-form-validation.html">Form
                                                                    Validation</a></li>
                                                            <li><a href="shortcode-form-layouts.html">Form Layouts</a>
                                                            </li>
                                                            <li><a href="shortcode-file-upload.html">File upload</a>
                                                            </li>
                                                            <li><a href="shortcode-grid.html">Grid System</a></li>
                                                            <li><a href="shortcode-heading-styles.html">Heading
                                                                    Styles</a></li>
                                                            <li><a href="shortcode-icon-boxes.html">Icon Boxes</a></li>
                                                            <li><a href="shortcode-icon-lists.html">Icons</a></li>
                                                            <li><a href="shortcode-images.html">Images</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <ul>
                                                            <li><a href="shortcode-lightbox.html">Lightbox</a></li>
                                                            <li><a href="shortcode-lists.html">Lists</a></li>
                                                            <li><a href="shortcode-labels-badgets.html">Labels &
                                                                    Badges</a></li>
                                                            <li><a href="shortcode-maps.html">Maps</a></li>
                                                            <li><a href="shortcode-modal.html">Modal</a></li>
                                                            <li><a href="shortcode-modal-strip.html">Modal Strip</a>
                                                            </li>
                                                            <li><a href="shortcode-navs.html">Navbar & Navs</a></li>
                                                            <li><a href="shortcode-paginations.html">Pagination &
                                                                    Pager</a></li>
                                                            <li><a href="shortcode-panels.html">Panels</a></li>
                                                            <li><a href="shortcode-pie-chart.html">Pie charts</a></li>
                                                            <li><a href="shortcode-popover.html">Popover</a></li>
                                                            <li><a href="shortcode-milestone-stats.html">Milestone &
                                                                    Stats</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <ul>
                                                            <li><a href="shortcode-pricing-table.html">Pricing
                                                                    tables</a></li>
                                                            <li><a href="shortcode-progress-bar.html">Progress bars</a>
                                                            </li>
                                                            <li><a href="shortcode-parallax.html">Parallax</a></li>
                                                            <li><a href="shortcode-particles.html">Particles<span
                                                                        class="badge badge-danger">NEW</span></a></li>
                                                            <li><a href="shortcode-responsive-utilities.html">Responsive
                                                                    utilities</a></li>
                                                            <li><a href="component-ion-range-slider.html">Range
                                                                    Slider<span
                                                                        class="badge badge-danger">NEW</span></a></li>
                                                            <li><a href="shortcode-sections.html">Sections</a></li>
                                                            <li><a href="shortcode-smooth-scrolling.html">Smooth
                                                                    Scrolling</a></li>
                                                            <li><a href="shortcode-social-icons.html">Social Icons</a>
                                                            </li>
                                                            <li><a href="shortcode-spinners.html">Spinners<span
                                                                        class="badge badge-danger">NEW</span></a></li>
                                                            <li><a href="component-toggles-radio-checkboxes.html">Switch
                                                                    Toggle<span
                                                                        class="badge badge-danger">NEW</span></a></li>
                                                            <li><a href="shortcode-shape-dividers.html">Shape
                                                                    Dividers<span
                                                                        class="badge badge-danger">NEW</span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <ul>
                                                            <li><a href="shortcode-ratings.html">Ratings<span
                                                                        class="badge badge-danger">NEW</span></a></li>
                                                            <li><a href="shortcode-tables.html">Tables</a></li>
                                                            <li><a href="shortcode-textbox.html">Text Boxes</a></li>
                                                            <li><a href="shortcode-tabs.html">Tabs</a></li>
                                                            <li><a href="shortcode-testimonial.html">Testimonials</a>
                                                            </li>
                                                            <li><a href="shortcode-toggles.html">Toggles</a></li>
                                                            <li><a href="shortcode-tooltips.html">Tooltips</a></li>
                                                            <li><a href="shortcode-typography.html">Typography</a></li>
                                                            <li><a href="shortcode-text-rotator.html">Text Rotator</a>
                                                            </li>
                                                            <li><a href="shortcode-timeline.html">Timeline<span
                                                                        class="badge badge-danger">NEW</span></a></li>
                                                            <li><a href="shortcode-video-background.html">Video
                                                                    Background</a></li>
                                                            <li><a href="shortcode-wizard.html">Wizard<span
                                                                        class="badge badge-danger">NEW</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Pages</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">About
                                                    us</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-about-basic.html">Basic</a></li>
                                                    <li><a href="page-about-extended.html">Extended</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">About
                                                    me</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-about-me-creative.html">Creative<span
                                                                class="badge badge-danger">NEW</span></a></li>
                                                    <li><a href="page-about-me-basic.html">Basic</a></li>
                                                    <li><a href="page-about-me-extended.html">Extended</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Contact
                                                    us</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-contact-classic.html">Classic</a></li>
                                                    <li><a href="page-contact-fullwidth-map.html">Fullwidth Map</a></li>
                                                    <li><a href="page-contact-fullscreen-map.html">Fullscreen Map</a>
                                                    </li>
                                                    <li><a href="page-contact-map-bottom.html">Map bottom</a></li>
                                                    <li><a href="page-contact-sidebar-left.html">Sidebar Left</a></li>
                                                    <li><a href="page-contact-sidebar-right.html">Sidebar Right</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span
                                                    class="dropdown-menu-title-only">Gallery</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-gallery-2.html">Two Columns</a></li>
                                                    <li><a href="page-gallery-3.html">Three Columns</a></li>
                                                    <li><a href="page-gallery-4.html">Four Columns</a></li>
                                                    <li><a href="page-gallery-5.html">Five Columns</a></li>
                                                    <li><a href="page-gallery-6.html">Six Columns</a></li>
                                                    <li><a href="page-gallery-sidebar.html">Sidebar version</a></li>
                                                    <li><a href="page-gallery-wide.html">Wide version</a></li>
                                                    <li><a href="page-gallery-load-more.html">Load more</a></li>
                                                    <li><a href="page-gallery-infinite-scroll.html">Infinity Scroll</a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">User
                                                    pages</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-user-login.html">Login</a></li>
                                                    <li><a href="page-user-login-classic.html">Login - Classic</a></li>
                                                    <li><a href="page-user-register.html">Register</a></li>
                                                    <li><a href="page-user-register-classic.html">Register - Classic</a>
                                                    </li>
                                                    <li><a href="page-user-password-recovery.html">Recovery Password</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="page-services.html">Services</a></li>
                                            <li><a href="page-our-team.html">Our team</a></li>
                                            <li><a href="page-our-clients.html">Our clients</a></li>
                                            <li><a href="page-maintenance.html">Maintenance</a></li>
                                            <li><a href="page-404.html">404 Page</a></li>
                                            <li><a href="page-404-parallax.html">404 Page - Parallax</a></li>
                                            <li><a href="page-500.html">500 Page</a></li>
                                            <li><a href="page-fullwidth.html">Fullwidth page</a></li>
                                            <li><a href="page-fullwidth-wide.html">Fullwidth page - Wide</a></li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Page
                                                    with Sidebar</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-sidebar.html">Sidebar Left</a></li>
                                                    <li><a href="page-sidebar-right.html">Sidebar Right</a></li>
                                                    <li><a href="page-sidebar-both.html">Sidebar Both</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="page-site-map.html">Site Map</a></li>
                                            <li><a href="page-faq.html">FAQ</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu-item"><a href="#">Portfolio</a>
                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Grids</li>
                                                            <li><a href="portfolio-2.html">Two Columns</a></li>
                                                            <li><a href="portfolio-3.html">Three Columns</a></li>
                                                            <li><a href="portfolio-4.html">Four Columns</a></li>
                                                            <li><a href="portfolio-5.html">Five Columns</a></li>
                                                            <li><a href="portfolio-6.html">Six Columns</a></li>
                                                            <li><a href="portfolio-sidebar.html">Sidebar version</a>
                                                            </li>
                                                            <li><a href="portfolio-wide-3.html">Wide version</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Masonry</li>
                                                            <li><a href="portfolio-masonry-2.html">Two Columns</a></li>
                                                            <li><a href="portfolio-masonry-3.html">Three Columns<span
                                                                        class="badge badge-danger">HOT</span></a></li>
                                                            <li><a href="portfolio-masonry-4.html">Four Columns</a></li>
                                                            <li><a href="portfolio-masonry-5.html">Five Columns</a></li>
                                                            <li><a href="portfolio-masonry-6.html">Six Columns</a></li>
                                                            <li><a href="portfolio-masonry-sidebar.html">Sidebar
                                                                    version</a></li>
                                                            <li><a href="portfolio-masonry-wide-3.html">Wide version</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Styles</li>
                                                            <li><a href="portfolio-filter-styles.html">Filter Styles</a>
                                                            </li>
                                                            <li><a href="portfolio-load-more.html">Load more</a></li>
                                                            <li><a href="portfolio-load-more-sidebar.html">Load more -
                                                                    Sidebar</a></li>
                                                            <li><a href="portfolio-infinite-scroll.html">Infinity
                                                                    Scroll</a></li>
                                                            <li><a href="portfolio-ajax.html">Portfolio Ajax</a></li>
                                                            <li><a href="portfolio-gallery-modal.html">Gallery Modal</a>
                                                            </li>
                                                            <li><a href="portfolio-video-modal.html">Video Modal</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Layouts</li>
                                                            <li><a href="portfolio-sidebar-left.html">Left Sidebar</a>
                                                            </li>
                                                            <li><a href="portfolio-sidebar-right.html">Right Sidebar</a>
                                                            </li>
                                                            <li><a href="portfolio-sidebar-both.html">Both Sidebars</a>
                                                            </li>
                                                            <li><a href="portfolio-slider-3.html">Slider Default</a>
                                                            </li>
                                                            <li><a href="portfolio-no-page-title.html">No Page Title</a>
                                                            </li>
                                                            <li><a href="portfolio-no-page-title-sidebar.html">No Page
                                                                    Title - Sidebar</a></li>
                                                            <li><a href="portfolio-hover-styles.html">Hover Styles</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Single Project</li>
                                                            <li><a href="portfolio-page-grid-gallery.html">Grid
                                                                    Gallery</a></li>
                                                            <li><a href="portfolio-page-particles.html">Particles Wide
                                                                    Project</a></li>
                                                            <li><a href="portfolio-page-floating-sidebar.html">Floating
                                                                    Sidebar</a></li>
                                                            <li><a href="portfolio-page-slider.html">Slider version</a>
                                                            </li>
                                                            <li><a href="portfolio-page-background-image.html">Fullscreen
                                                                    image</a></li>
                                                            <li><a href="portfolio-page-background-video.html">Fullscreen
                                                                    Video</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-12 no-padding">
                                                        <div class="d-none d-lg-block m-t-40 m-b-10">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-lg-9 m-t-10">
                                                                        <div class="text-center center">
                                                                            <div class="heading-creative">
                                                                                <strong>20+</strong> Amazing Hover
                                                                                Styles</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3"><a
                                                                            href="portfolio-hover-styles.html"
                                                                            class="btn m-l-20 btn-light btn-shadow btn-light-hover btn-light-hover">View
                                                                            All Hover Styles</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ul class="d-block d-lg-none">
                                                            <li><a class="mega-menu-title"
                                                                    href="portfolio-hover-styles.html">20+ Amazing Hover
                                                                    Styles</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu-item"><a href="#">Blog</a>
                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Masonry</li>
                                                            <li><a href="blog-masonry-2.html">Two Columns</a></li>
                                                            <li><a href="blog-masonry-3.html">Three Columns<span
                                                                        class="badge badge-danger">HOT</span></a></li>
                                                            <li><a href="blog-masonry-4.html">Four Columns</a></li>
                                                            <li><a href="blog-masonry-sidebar.html">Sidebar version</a>
                                                            </li>
                                                            <li><a href="blog-masonry-no-page-title.html">No page
                                                                    title</a></li>
                                                            <li><a href="blog-masonry-wide.html">Wide version</a></li>
                                                            <li><a href="blog-masonry-load-more.html">Load More</a></li>
                                                            <li><a href="blog-masonry-infinite-scroll.html">Infinite
                                                                    Scroll</a></li>
                                                            <li><a href="blog-masonry-filter.html">Filter Categories</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Grids Layout</li>
                                                            <li><a href="blog-1.html">One Column</a></li>
                                                            <li><a href="blog-2.html">Two Columns</a></li>
                                                            <li><a href="blog-3.html">Three Columns</a></li>
                                                            <li><a href="blog-4.html">Four Columns</a></li>
                                                            <li><a href="blog-no-page-title.html">No page title</a></li>
                                                            <li><a href="blog-wide.html">Wide version</a></li>
                                                            <li><a href="blog-load-more.html">Load More</a></li>
                                                            <li><a href="blog-infinite-scroll.html">Infinite Scroll</a>
                                                            </li>
                                                            <li><a href="blog-filter.html">Filter Categories</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Left Image</li>
                                                            <li><a href="blog-left-image-sidebar-right.html">Right
                                                                    Sidebar</a></li>
                                                            <li><a href="blog-left-image-sidebar-left.html">Left
                                                                    Sidebar</a></li>
                                                            <li><a href="blog-left-image-sidebar-both.html">Both
                                                                    Sidebars</a></li>
                                                            <li><a href="blog-left-image-no-sidebar.html">No Sidebar</a>
                                                            </li>
                                                            <li><a href="blog-left-image-no-page-title.html">No page
                                                                    title</a></li>
                                                            <li><a href="blog-left-image-load-more.html">Load More</a>
                                                            </li>
                                                            <li><a href="blog-left-image-infinite-scroll.html">Infinite
                                                                    Scroll</a></li>
                                                            <li><a href="blog-left-image-author-info.html">Author
                                                                    Info</a></li>
                                                            <li><a href="blog-left-image-filter.html">Filter
                                                                    Categories</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Layouts</li>
                                                            <li><a href="blog-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a href="blog-sidebar-right.html">Right Sidebar</a></li>
                                                            <li><a href="blog-sidebar-both.html">Both Sidebars</a></li>
                                                            <li><a href="blog-fullwidth.html">Fullwidth</a></li>
                                                            <li class="mega-menu-title">Post Item Styles</li>
                                                            <li><a href="blog-style-shadow.html">Shadow</a></li>
                                                            <li><a href="blog-style-textual.html">Textual</a></li>
                                                            <li><a href="blog-style-grey-bg.html">Grey Background</a>
                                                            </li>
                                                            <li><a href="blog-style-author-info.html">Author Info</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Single Post</li>
                                                            <li><a href="blog-single.html">Default</a></li>
                                                            <li><a href="blog-single-slider.html">Slider</a></li>
                                                            <li><a href="blog-single-video.html">Video</a></li>
                                                            <li><a href="blog-single-audio.html">Audio</a></li>
                                                            <li><a href="blog-single-creative.html">Creative</a></li>
                                                            <li class="mega-menu-title">Comments<span
                                                                    class="badge badge-danger">NEW</span></li>
                                                            <li><a href="blog-comments.html#comments">Default
                                                                    Comments</a></li>
                                                            <li><a href="blog-comments-disqus.html#comments">Disqus
                                                                    Comments</a></li>
                                                            <li><a href="blog-comments-facebook.html#comments">Facebook
                                                                    Comments</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu-item"><a href="#">Shop</a>
                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Columns</li>
                                                            <li><a href="shop-columns-2.html">Two Columns</a></li>
                                                            <li><a href="shop-columns-3.html">Three Columns</a></li>
                                                            <li><a href="shop-columns-4.html">Four Columns</a></li>
                                                            <li><a href="shop-columns-5.html">Five Columns</a></li>
                                                            <li><a href="shop-columns-6.html">Six Columns</a></li>
                                                            <li><a href="shop-sidebar-sticky.html">Sidebar Sticky</a>
                                                            </li>
                                                            <li><a href="shop-wide.html">Wide version</a></li>
                                                            <li><a href="shop-no-page-title.html">No page title</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Layouts</li>
                                                            <li><a href="shop-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a href="shop-sidebar-right.html">Right Sidebar</a></li>
                                                            <li><a href="shop-sidebar-both.html">Both Sidebars</a></li>
                                                            <li><a href="shop-fullwidth.html">Fullwidth (Wide)</a></li>
                                                            <li class="mega-menu-title">Loading Styles</li>
                                                            <li><a href="shop-load-more.html">Load more</a><a
                                                                    href="shop-load-more-sidebar.html">Load Sidebar</a>
                                                            </li>
                                                            <li><a href="shop-infinite-scroll.html">Infinity Scroll</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Order process</li>
                                                            <li><a class="animsition-link" href="shop-cart.html">Shoping
                                                                    Cart</a></li>
                                                            <li><a class="animsition-link"
                                                                    href="shop-cart-empty.html">Shoping Cart - Empty</a>
                                                            </li>
                                                            <li><a class="animsition-link"
                                                                    href="shop-checkout.html">Checkout</a></li>
                                                            <li><a class="animsition-link"
                                                                    href="shop-checkout-completed.html">Checkout
                                                                    Completed</a></li>
                                                            <li><a href="shop-wishlist.html">Wishlist</a></li>
                                                            <li><a href="shop-wishlist-empty.html">Wishlist Empty</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Single Product</li>
                                                            <li><a href="shop-single-product.html">Fullwidth</a></li>
                                                            <li><a href="shop-single-product-sidebar-left.html">Left
                                                                    Sidebar</a></li>
                                                            <li><a href="shop-single-product-sidebar-right.html">Right
                                                                    Sidebar</a></li>
                                                            <li><a href="shop-single-product-sidebar-both.html">Both
                                                                    Sidebars</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5 p-l-0">
                                                        <h4 class="text-theme">BIG SALE<small>Up to</small></h4>
                                                        <h2 class="text-lg text-theme lh80 m-b-30">70%</h2>
                                                        <p class="m-b-0">The most happiest time of the day!. Morbi
                                                            sagittis, sem quis ipsum dolor sit amet lacinia faucibus.
                                                        </p><a class="btn btn-shadow btn-rounded btn-block m-t-10">SHOP
                                                            NOW!</a><small class="t300">
                                                            <p class="text-center m-0"><em>* Limited time Offer</em></p>
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </header>


        <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-height-xs="360">

            <div class="slide kenburns" data-bg-parallax="images/parallax/3.jpg">
                <div class="bg-overlay"></div>
                <div class="container">
                    <div class="slide-captions text-light">

                        <span data-animate="fadeInUp" data-animate-delay="300" class="strong"><a href="#"
                                class="business"><span class="business">Let's Do This</span></a>
                        </span>
                        <h1 data-animate="fadeInUp" data-animate-delay="600">We’re Polo, A Creative<br>Startup Based in
                            Melburne</h1>
                        <div data-animate="fadeInUp" data-animate-delay="900">
                            <button type="button" class="btn btn-rounded btn-reveal btn-reveal-left"><span>Learn
                                    More</span><i class="fa fa-arrow-right"></i></button>
                        </div>

                        <div class="row" style="padding-top:14%;">
                            <div class="col-lg-3" data-animate="fadeInUp" data-animate-delay="1200">
                                <h4>Highly Customizable</h4>
                                <p>Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that
                                    never been told!.</p>
                            </div>
                            <div class="col-lg-3" data-animate="fadeInUp" data-animate-delay="1500">
                                <h4>Clean Code</h4>
                                <p>Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that
                                    never been told!.</p>
                            </div>
                            <div class="col-lg-3" data-animate="fadeInUp" data-animate-delay="1800">
                                <h4>Heavily Awarded</h4>
                                <p>Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that
                                    never been told!.</p>
                            </div>
                            <div class="col-lg-3" data-animate="fadeInUp" data-animate-delay="2100">
                                <h4>Fast Performance</h4>
                                <p>Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that
                                    never been told!.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <section class="p-t-120 p-b-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 center">
                        <div class="heading-text heading-section text-center" data-animate="fadeInUp">
                            <h4>Be The First</h4>
                            <h2>Set your goals high, and don't stop till you get there.</h2>
                            <p class="lead">Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story,
                                that never been told!. Fusce id mi diam, non ornare.</p>
                            <a href="https://www.youtube.com/watch?v=nrJtHemSPW4" data-lightbox="iframe"
                                class="play-button dark"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="p-t-200 p-b-200" data-bg-parallax="homepages/corporate-v7/images/parallax/4.jpg">
            <div class="container xs-text-center sm-text-center text-light">
                <div class="bg-overlay"></div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="heading-text heading-section">
                            <h2>Our Numbers & Smoth parallax</h2>
                            <p class="lead">Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story,
                                that never been told!. Fusce id mi diam, non ornare. Fusce id mi diam, non ornare orci.
                                Pellentesque ipsum erat, id molestie ipsum volutpat quis. facilisis ut venenatis eu.</p>
                        </div>
                        <a href="#services" class="btn btn-light btn-outline btn-rounded">Our Services</a>
                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="text-center">
                                    <div class="counter text-lg"> <span data-speed="3000" data-refresh-interval="50"
                                            data-to="12416" data-from="600" data-seperator="true"></span> </div>
                                    <div class="seperator seperator-small"></div>
                                    <p>LINES OF CODE</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text-center">
                                    <div class="counter text-lg"> <span data-speed="4500" data-refresh-interval="23"
                                            data-to="365" data-from="100" data-seperator="true"></span> </div>
                                    <div class="seperator seperator-small"></div>
                                    <p>CUPS OF COFFEE</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text-center">
                                    <div class="counter text-lg"> <span data-speed="3000" data-refresh-interval="12"
                                            data-to="114" data-from="50" data-seperator="true"></span> </div>
                                    <div class="seperator seperator-small"></div>
                                    <p>FINISHED PROJECTS</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text-center">
                                    <div class="counter text-lg"> <span data-speed="4550" data-refresh-interval="50"
                                            data-to="14825" data-from="48" data-seperator="true"></span> </div>
                                    <div class="seperator seperator-small"></div>
                                    <p>SATISFIED CLIENTS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="no-padding equalize" data-equalize-item=".text-box">
            <div class="row col-no-margin">

                <div class="col-lg-3" style="background-color: #2F2F2F;">
                    <div class="text-box">
                        <a href="#">
                            <i class="fa fa-paper-plane"></i>
                            <h3>Tags &amp; Models </h3>
                            <p>Ispendisse consectetur fringilla luctus usce id mi diam, non ornare.</p>
                        </a>
                    </div>
                </div>


                <div class="col-lg-3" style="background-color: #383838;">
                    <div class="text-box">
                        <a href="#">
                            <i class="fas fa-chart-pie"></i>
                            <h3>Our charts </h3>
                            <p>Ispendisse consectetur fringilla luctus usce id mi diam, non ornare.</p>
                        </a>
                    </div>
                </div>


                <div class="col-lg-3" style="background-color: #313131;">
                    <div class="text-box">
                        <a href="#">
                            <i class="far fa-lightbulb"></i>
                            <h3>Light &amp; Dark</h3>
                            <p>Ispendisse consectetur fringilla luctus usce id mi diam, non ornare.</p>
                        </a>
                    </div>
                </div>


                <div class="col-lg-3" style="background-color: #383838;">
                    <div class="text-box">
                        <a href="#">
                            <i class="fa fa-language"></i>
                            <h3>RTL Support</h3>
                            <p>Ispendisse consectetur fringilla luctus usce id mi diam, non ornare.</p>
                        </a>
                    </div>
                </div>

            </div>
        </section>


        <section id="section3" class="background-grey p-t-120 p-b-120">
            <div class="container">
                <div class="col-lg-8 m-b-100  center">
                    <div class="heading-text heading-section text-center">
                        <h4>See by yourself</h4>
                        <h2>The most affordable pricing</h2>
                        <p>Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been
                            told!. Fusce id mi diam, non ornare.</p>
                    </div>
                </div>
                <hr class="space">
                <div class="row pricing-table">
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="plan">
                            <div class="plan-header">
                                <h4>Ultimate Plan</h4>
                                <p class="text-muted">Plan short description</p>
                                <div class="plan-price"><sup>$</sup>80<span>/mo</span> </div>
                            </div>
                            <div class="plan-list">
                                <ul>
                                    <li><i class="fas fa-globe-americas"></i>Unlimited Websites</li>
                                    <li><i class="fa fa-thumbs-up"></i>Unlimited Storage</li>
                                    <li><i class="fa fa-signal"></i>Unlimited Bandwidth</li>
                                    <li><i class="fa fa-user"></i>1000 Email Addresses</li>
                                    <li><i class="fa fa-star"></i>Free domain with annual plan</li>
                                    <li><i class="fa fa-rocket"></i>4X Processing Power</li>
                                    <li><i class="fa fa-server"></i>Premium DNS</li>
                                </ul>
                                <div class="plan-button">
                                    <a href="#" class="btn btn-light">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="plan featured">
                            <div class="plan-header">
                                <h4>Deluxe Plan</h4>
                                <p class="text-muted">Plan short description</p>
                                <div class="plan-price"><sup>$</sup>20<span>/mo</span> </div>
                            </div>
                            <div class="plan-list">
                                <ul>
                                    <li><i class="fas fa-globe-americas"></i>Unlimited Websites</li>
                                    <li><i class="fa fa-thumbs-up"></i>Unlimited Storage</li>
                                    <li><i class="fa fa-signal"></i>Unlimited Bandwidth</li>
                                    <li><i class="fa fa-user"></i>1000 Email Addresses</li>
                                    <li><i class="fa fa-star"></i>Free domain with annual plan</li>
                                    <li><i class="fa fa-rocket"></i>4X Processing Power</li>
                                    <li><i class="fa fa-server"></i>Premium DNS</li>
                                </ul>
                                <div class="plan-button">
                                    <a href="#" class="btn">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="plan">
                            <div class="plan-header">
                                <h4>Professional Plan</h4>
                                <p class="text-muted">Plan short description</p>
                                <div class="plan-price"><sup>$</sup>69<span>/mo</span> </div>
                            </div>
                            <div class="plan-list">
                                <ul>
                                    <li><i class="fas fa-globe-americas"></i>Unlimited Websites</li>
                                    <li><i class="fa fa-thumbs-up"></i>Unlimited Storage</li>
                                    <li><i class="fa fa-signal"></i>Unlimited Bandwidth</li>
                                    <li><i class="fa fa-user"></i>1000 Email Addresses</li>
                                    <li><i class="fa fa-star"></i>Free domain with annual plan</li>
                                    <li><i class="fa fa-rocket"></i>4X Processing Power</li>
                                    <li><i class="fa fa-server"></i>Premium DNS</li>
                                </ul>
                                <div class="plan-button">
                                    <a href="#" class="btn btn-light">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="p-t-120 p-b-120">
            <div class="container">
                <div class="col-lg-8 m-b-100 center">
                    <div class="heading-text heading-section text-center">
                        <h4>Know More</h4>
                        <h2>About Our Company</h2>
                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                            nibh id elit. Proin gravida nibh vel velit auctor Aenean sollicitudin, adipisicing elit sed
                            lorem quis bibendum auctor.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <h4 class="m-b-20">We are making progress</h4>
                        <div class="p-progress-bar-container title-up small color">
                            <div class="p-progress-bar" data-percent="100" data-delay="0" data-type="%">
                                <div class="progress-title">HTML5</div>
                            </div>
                        </div>
                        <div class="p-progress-bar-container title-up small color">
                            <div class="p-progress-bar" data-percent="94" data-delay="100" data-type="%">
                                <div class="progress-title">CSS3</div>
                            </div>
                        </div>
                        <div class="p-progress-bar-container title-up small color">
                            <div class="p-progress-bar" data-percent="89" data-delay="200" data-type="%">
                                <div class="progress-title">JQUERY</div>
                            </div>
                        </div>
                        <div class="p-progress-bar-container title-up small color">
                            <div class="p-progress-bar" data-percent="78" data-delay="300" data-type="%">
                                <div class="progress-title">MYSQL</div>
                            </div>
                        </div>
                        <div class="p-progress-bar-container title-up small color">
                            <div class="p-progress-bar" data-percent="75" data-delay="400" data-type="%">
                                <div class="progress-title">PHP</div>
                            </div>
                        </div>
                        <p class="lead">Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story,
                            that never been told!.</p>
                    </div>
                    <div class="col-lg-4">
                        <h4 class="m-b-20">Best services around</h4>
                        <div class="accordion fancy radius clean">
                            <div class="ac-item ac-active">
                                <h5 class="ac-title"><i class="fa fa-rocket"></i>Suscipit laboriosam</h5>
                                <div class="ac-content ac-active">We’re POLO, a creative agency located in the heart of
                                    New York city. A true story, that never been told!.
                                    <br />
                                    <br /> Fusce id mi diam, Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                    amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora</div>
                            </div>
                            <div class="ac-item">
                                <h5 class="ac-title"><i class="fa fa-heart"></i>Aliquam voluptatem</h5>
                                <div class="ac-content">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                    consectetur, adipisci velit, sed quia non numquam
                                    <br />
                                    <br /> Fusce id mi diam, Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                    amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora</div>
                            </div>
                            <div class="ac-item">
                                <h5 class="ac-title"><i class="fa fa-shopping-cart"></i>Labore et dolore</h5>
                                <div class="ac-content">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                    consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                                    labore et dolore magnam aliquam quaerat voluptatem.
                                    <br />
                                    <br /> Fusce id mi diam, Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                    amet</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h4 class="m-b-20">Latest from Blog</h4>
                        <div class="post-thumbnail-list">
                            <div class="post-thumbnail-entry">
                                <img src="homepages/corporate-v7/images/blog/5.jpg" alt="">
                                <div class="post-thumbnail-content">
                                    <a href="#">Suspendisse consectetur fringilla</a>
                                    <span class="post-date"><i class="far fa-clock"></i> 6m ago</span>
                                    <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                </div>
                            </div>
                            <div class="post-thumbnail-entry">
                                <img src="homepages/corporate-v7/images/blog/6.jpg" alt="">
                                <div class="post-thumbnail-content">
                                    <a href="#">Beautiful nature, and rare feathers!</a>
                                    <span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                </div>
                            </div>
                            <div class="post-thumbnail-entry">
                                <img src="homepages/corporate-v7/images/blog/7.jpg" alt="">
                                <div class="post-thumbnail-content">
                                    <a href="#">The most happiest time of the day!</a>
                                    <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                </div>
                            </div>
                            <div class="post-thumbnail-entry">
                                <img src="homepages/corporate-v7/images/blog/8.jpg" alt="">
                                <div class="post-thumbnail-content">
                                    <a href="#">Fringilla Lorem ipsum dolor sit amet</a>
                                    <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="background-grey p-t-120 p-b-120">
            <div class="container">
                <div class="col-lg-8 m-b-100 center">
                    <div class="heading-text heading-section text-center">
                        <h2>The simpliest way to share your work with target audiences.</h2>
                        <p>Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been
                            told!. Fusce id mi diam, non ornare.</p>
                    </div>
                </div>
                <div class="row m-b-100">
                    <div class="col-lg-4">
                        <div class="icon-box text-center effect border color">
                            <div class="icon">
                                <a href="#"><i class="fa fa-rocket"></i></a>
                            </div>
                            <h5>Modern Design</h5>
                            <p class="lead">Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse
                                condimentum porttitor cursumus.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon-box text-center effect border color">
                            <div class="icon">
                                <a href="#"><i class="fa fa-flask"></i></a>
                            </div>
                            <h5>Clean Modern Code</h5>
                            <p class="lead">Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse
                                condimentum porttitor cursumus.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon-box text-center effect border color">
                            <div class="icon">
                                <a href="#"><i class="fa fa-umbrella"></i></a>
                            </div>
                            <h5>Lifetime Updates &amp; Support</h5>
                            <p class="lead">Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse
                                condimentum porttitor cursumus.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">

                <div class="carousel equalize testimonial testimonial-box" data-margin="20" data-arrows="false"
                    data-items="4" data-items-sm="2" data-items-xxs="1" data-equalize-item=".testimonial-item">

                    <div class="testimonial-item">
                        <img src="images/team/9.jpg" alt="">
                        <p>Polo is by far the most amazing template out there! I literally could not be happier that I
                            chose to buy this template!</p>
                        <span>Alan Monre</span>
                        <span>CEO, Square Software</span>
                    </div>


                    <div class="testimonial-item">
                        <img src="images/team/9.jpg" alt="">
                        <p>Polo is by far the most amazing template out there! I literally could not be happier that I
                            chose to buy this template!</p>
                        <span>Alan Monre</span>
                        <span>CEO, Square Software</span>
                    </div>


                    <div class="testimonial-item">
                        <img src="images/team/9.jpg" alt="">
                        <p>The world is a dangerous place to live; not because of the people who are evil, but because
                            of the people who don't do anything about it.</p>
                        <span>Alan Monre</span>
                        <span>CEO, Square Software</span>
                    </div>


                    <div class="testimonial-item">
                        <img src="images/team/10.jpg" alt="">
                        <p>Art is the only serious thing in the world. And the artist is the only person who is never
                            serious.</p>
                        <span>Resa Smith</span>
                        <span>Developer @Apple</span>
                    </div>


                    <div class="testimonial-item">
                        <img src="images/team/11.jpg" alt="">
                        <p>The world is a dangerous place to live; not because of the people who are evil, but because
                            of the people who don't do anything about it.</p>
                        <span>Ariol Perry</span>
                        <span>Creative Designer</span>
                    </div>

                </div>

            </div>
        </section>


        <section class="background-colored text-center p-t-80  p-b-30">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="widget widget-newsletter">
                            <form class="widget-subscribe-form" action="include/subscribe-form.php" role="form"
                                method="post" novalidate="novalidate">
                                <h3 class="text-light">Subscribe to our Newsletter</h3>
                                <div class="input-group mb-0">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-paper-plane"></i></span>
                                    </div>
                                    <input type="email" required name="widget-subscribe-form-email"
                                        class="form-control required email" placeholder="Enter your Email">
                                    <div class="input-group-append">
                                        <button type="submit" id="widget-subscribe-submit-button"
                                            class="btn btn-light">Subscribe</button>
                                    </div>
                                </div>
                                <small class="text-light">Stay informed on our latest news!</small>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="p-t-150 p-b-200"
            style="background-image:url(homepages/branding/images/background-4.png); background-position:71% 22%;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="heading-text heading-section">
                                    <h2>Get in Touch with Us</h2>
                                    <p class="lead">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts. A small river named Duden.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 m-b-30">
                                <address>
                                    <strong>Headquarters:</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                </address>
                                <strong>Phone:</strong> (+1) 1234 56789
                                <br>
                                <strong>Fax:</strong> (+1) 12 3456 78910
                                <br>
                                <strong>Email:</strong> info@inspiro-media.com
                            </div>
                            <div class="col-lg-6 m-b-30">
                                <address>
                                    <strong>Headquarters:</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                </address>
                                <strong>Phone:</strong> (+1) 1234 56789
                                <br>
                                <strong>Fax:</strong> (+1) 12 3456 78910
                                <br>
                                <strong>Email:</strong> info@inspiro-media.com
                            </div>
                            <div class="col-lg-12 m-b-30">
                                <h4>We are social</h4>
                                <div class="social-icons social-icons-light social-icons-colored-hover">
                                    <ul>
                                        <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                                        <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li class="social-vimeo"><a href="#"><i class="fab fa-vimeo"></i></a></li>
                                        <li class="social-youtube"><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li class="social-instagram"><a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li class="social-pinterest"><a href="#"><i class="fab fa-pinterest"></i></a>
                                        </li>
                                        <li class="social-gplus"><a href="#"><i class="fab fa-google-plus-g"></i></a>
                                        </li>
                                        <li class="social-dribbble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                        <li class="social-skype"><a href="#"><i class="fab fa-skype"></i></a></li>
                                        <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                        <li class="social-behance"><a href="#"><i class="fab fa-behance"></i></a></li>
                                        <li class="social-flickr"><a href="#"><i class="fab fa-flickr"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-1">
                        <form class="widget-contact-form" novalidate action="include/contact-form.php" role="form"
                            method="post">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" aria-required="true" required name="widget-contact-form-name"
                                        class="form-control required name" placeholder="Enter your Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" aria-required="true" required name="widget-contact-form-email"
                                        class="form-control required email" placeholder="Enter your Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea type="text" required name="widget-contact-form-message" rows="8"
                                    class="form-control required" placeholder="Enter your Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-light" type="submit" id="form-submit"><i
                                        class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


        <footer id="footer">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="widget">
                                <div class="widget-title">Polo HTML5 Template</div>
                                <p class="mb-5">Built with love in Fort Worth, Texas, USA<br>
                                    All rights reserved. Copyright © 2019. INSPIRO.</p>
                                <a href="https://themeforest.net/item/polo-responsive-multipurpose-html5-template/13708923"
                                    class="btn btn-inverted">Purchase Now</a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Discover</div>
                                        <ul class="list">
                                            <li><a href="#">Features</a></li>
                                            <li><a href="#">Layouts</a></li>
                                            <li><a href="#">Corporate</a></li>
                                            <li><a href="#">Updates</a></li>
                                            <li><a href="#">Pricing</a></li>
                                            <li><a href="#">Customers</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Features</div>
                                        <ul class="list">
                                            <li><a href="#">Layouts</a></li>
                                            <li><a href="#">Headers</a></li>
                                            <li><a href="#">Widgets</a></li>
                                            <li><a href="#">Footers</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Pages</div>
                                        <ul class="list">
                                            <li><a href="#">Portfolio</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Shop</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">
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
                    <div class="copyright-text text-center">&copy; 2019 POLO - Responsive Multi-Purpose HTML5 Template.
                        All Rights Reserved.<a href="//www.inspiro-media.com" target="_blank"> INSPIRO</a> </div>
                </div>
            </div>
        </footer>

    </div>


    <a id="scrollTop"><i class="fas fa-chevron-up"></i><i class="fas fa-chevron-up"></i></a>

    <script src="{!!asset('js/jquery.js')!!}"></script>
    <script src="{!!asset('js/plugins.js')!!}"></script>

    <script src="{!!asset('js/functions.js')!!}"></script>
</body>

</html>
