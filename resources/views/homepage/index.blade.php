@extends('welcome')
@section('content')
<div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-height-xs="360">

    <div class="slide kenburns" data-bg-parallax="{!!asset('storage/bg/headercover.jpg')!!}">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="slide-captions text-light">

                <span data-animate="fadeInUp" data-animate-delay="300" class="strong"><a href="#" class="business"><span
                            class="business">we are <strong>INFINITY
                                SOLUTIONS</strong></span></a>
                </span>
                <h1 data-animate="fadeInUp" data-animate-delay="600">Information Technology<br>Startup Company
                    Based in
                    Indonesia</h1>
                <div data-animate="fadeInUp" data-animate-delay="900">
                    <button type="button" class="btn btn-rounded btn-reveal btn-reveal-left"><a
                            href="{!!asset('document/CompanyProfile_InfinitySolutions_EN.pdf')!!}"
                            target="_blank"><span>Learn
                                More</span></a><i class="fa fa-arrow-right"></i></button>
                </div>

                <div class="row" style="padding-top:14%;">
                    <div class="col-lg-3" data-animate="fadeInUp" data-animate-delay="1200">
                        <h4>Secured Server</h4>
                        <p>Every service is designed with security in mind. Access controls, encryption,
                            monitoring and detection at every moment.</p>
                    </div>
                    <div class="col-lg-3" data-animate="fadeInUp" data-animate-delay="1500">
                        <h4>Backup Facility</h4>
                        <p>We provide backup servers that you can use to keep your important data. Its
                            protection its our ultra most priority</p>
                    </div>
                    <div class="col-lg-3" data-animate="fadeInUp" data-animate-delay="1800">
                        <h4>Own System</h4>
                        <p>We built our system on our own. And our system we use it as like our home.</p>
                    </div>
                    <div class="col-lg-3" data-animate="fadeInUp" data-animate-delay="2100">
                        <h4>Live Chat Support</h4>
                        <p>Feel satisfied when you can solve your problems with our technical support.</p>
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
                    <p class="lead">Start growing with <strong>Infinity Solutions</strong> today. With the Most
                        Helpful Humans in
                        Application, Hosting and Internet. We'll give you the <strong>best solutions</strong>.
                    </p>
                    {{-- <a href="https://www.youtube.com/watch?v=awLnur5Yt9o" data-lightbox="iframe"
                        class="play-button dark"><i class="fa fa-play"></i></a> --}}
                </div>
            </div>
        </div>
    </div>
</section>


<section class="p-t-200 p-b-200" data-bg-parallax="{!!asset('storage/bg/pricingsection.jpg')!!}">
    <div class="container xs-text-center sm-text-center text-light">
        <div class="bg-overlay"></div>
        <div class="row">
            <div class="col-lg-5">
                <div class="heading-text heading-section">
                    <h2>Our Services & Goals</h2>
                    <p class="lead"><strong>Infinity Solutions</strong> is a competent provider of any kind of
                        software solutions
                        including web solutions, hardware solutions and so on. Our expertise lies in clearly
                        perceiving the goals of our customers, choosing the most appropriate technologies and
                        efficiently developing solutions catered to the customer needs.</p>
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

        <div class="col-lg-3" style="background-color: #3a8860;">
            <div class="text-box">
                <a href="#">
                    <i class="fas fa-code"></i>
                    <h3>Hardware &amp; Software Development </h3>
                    <p>We offer a powerful, functional, and robust application in combination with a system that
                        is always updated and any modern database system.</p>
                </a>
            </div>
        </div>


        <div class="col-lg-3" style="background-color: #3a9566;">
            <div class="text-box">
                <a href="#">
                    <i class="fas fa-chart-pie"></i>
                    <h3>Design Creation </h3>
                    <p>We offer a number of designs and we also put it in several mockups, so the client can
                        choose and feel satisfied with the several options we provide.</p>
                </a>
            </div>
        </div>


        <div class="col-lg-3" style="background-color: #3a8860;">
            <div class="text-box">
                <a href="#">
                    <i class="far fa-lightbulb"></i>
                    <h3>IT &amp; Development Consultation</h3>
                    <p>Our consulting services are designed to meet your business need with the help of our
                        individual and joint experience in the design, implementation, and management of IT.</p>
                </a>
            </div>
        </div>


        <div class="col-lg-3" style="background-color: #3a9566;">
            <div class="text-box">
                <a href="#">
                    <i class="fas fa-calculator"></i>
                    <h3>Accounting Software Support</h3>
                    <p>We sell <strong>ASCEND ERP Solutions</strong> too. This software already running in palm
                        oil mill &
                        plantation, Hotel, Manufactory, Distribution &amp; Logistics Services.</p>
                </a>
            </div>
        </div>

    </div>
</section>


<section id="section3" class="background-grey p-t-120 p-b-120">
    <div class="container">
        <div class="col-lg-8 m-b-100  center">
            <div class="heading-text heading-section text-center">
                <h4>Prices based on your needs</h4>
                <h2>The most affordable pricing</h2>
                <p>We <strong>promise</strong> that what we can deliver.
                    Then <strong>deliver more than</strong> what we promise.</p>
            </div>
        </div>
        <hr class="space">
        <div class="row pricing-table">
            <div class="col-lg-4 col-md-12 col-12">
                <div class="plan">
                    <div class="plan-header">
                        <h4>Silver Package</h4>
                        <p class="text-muted">recommended for information web services.</p>
                        <div class="plan-price"><sup>IDR</sup>800K<span>/Yearly</span> </div>
                    </div>
                    <div class="plan-list">
                        <ul>
                            <li><i class="fa fa-thumbs-up"></i>8GB Storage SSD Boosts</li>
                            <li><i class="fa fa-signal"></i>Unlimited Bandwidth</li>
                            <li><i class="fas fa-cookie"></i>Cache & Cookies Manager</li>
                            <li><i class="fas fa-user-shield"></i>Privacy Protection</li>
                            <li><i class="fa fa-user"></i>Unlimited Email Addresses</li>
                            <li><i class="fa fa-rocket"></i>4X Processing Power</li>
                            <li><i class="fa fa-server"></i>Premium DNS + DDoS Protection</li>
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
                        <h4>Gold Package</h4>
                        <p class="text-muted">recommended for wide information web apps services.</p>
                        <div class="plan-price"><sup>IDR</sup>1200K<span>/Yearly</span> </div>
                    </div>
                    <div class="plan-list">
                        <ul>
                            <li><i class="fa fa-thumbs-up"></i>16GB Storage SSD Boosts</li>
                            <li><i class="fa fa-signal"></i>Unlimited Bandwidth</li>
                            <li><i class="fas fa-cookie"></i>Cache & Cookies Manager</li>
                            <li><i class="fas fa-user-shield"></i>Privacy Protection</li>
                            <li><i class="fa fa-user"></i>Unlimited Email Addresses</li>
                            <li><i class="fa fa-rocket"></i>4X Processing Power</li>
                            <li><i class="fa fa-server"></i>Premium DNS + DDoS Protection</li>
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
                        <h4>Platinum Package</h4>
                        <p class="text-muted">recommended for wide information apps or many website services.
                        </p>
                        <div class="plan-price"><sup>IDR</sup>2200K<span>/Yearly</span> </div>
                    </div>
                    <div class="plan-list">
                        <ul>
                            <li><i class="fa fa-thumbs-up"></i>32GB Storage SSD Boosts</li>
                            <li><i class="fa fa-signal"></i>Unlimited Bandwidth</li>
                            <li><i class="fas fa-cookie"></i>Cache & Cookies Manager</li>
                            <li><i class="fas fa-user-shield"></i>Privacy Protection</li>
                            <li><i class="fa fa-user"></i>Unlimited Email Addresses</li>
                            <li><i class="fa fa-rocket"></i>4X Processing Power</li>
                            <li><i class="fa fa-server"></i>Premium DNS + DDoS Protection</li>
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
                <p><strong>Infinity Solutions</strong> is an emerging information technology company in
                    <strong>Indonesia</strong> that provides
                    software services in the form of websites, logo creation, company profile, business card
                    design and provides opportunities for job opportunities for those who pursue IT. We also
                    provide quality hardware products that we have compared among our presenters to clients
                    since 2019. We are committed to continuously improving our intelligence and expertise and
                    thus we can achieve our success through achieving high performance and quality.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h4 class="m-b-20">We are making progress</h4>
                <div class="p-progress-bar-container title-up small color">
                    <div class="p-progress-bar" data-percent="100" data-delay="0" data-type="%">
                        <div class="progress-title">HTML5</div>
                    </div>
                </div>
                <div class="p-progress-bar-container title-up small color">
                    <div class="p-progress-bar" data-percent="98" data-delay="100" data-type="%">
                        <div class="progress-title">CSS3</div>
                    </div>
                </div>
                <div class="p-progress-bar-container title-up small color">
                    <div class="p-progress-bar" data-percent="89" data-delay="200" data-type="%">
                        <div class="progress-title">JQUERY</div>
                    </div>
                </div>
                <div class="p-progress-bar-container title-up small color">
                    <div class="p-progress-bar" data-percent="100" data-delay="300" data-type="%">
                        <div class="progress-title">MYSQL</div>
                    </div>
                </div>
                <div class="p-progress-bar-container title-up small color">
                    <div class="p-progress-bar" data-percent="100" data-delay="400" data-type="%">
                        <div class="progress-title">PHP</div>
                    </div>
                </div>
                <div class="p-progress-bar-container title-up small color">
                    <div class="p-progress-bar" data-percent="95" data-delay="400" data-type="%">
                        <div class="progress-title">FRAMEWORK</div>
                    </div>
                </div>
                <p class="lead">IN
                    EVERY DEVELOPMENT STEPS, WE USE CREATIVE IDEAS AND PROVEN METHODOLOGY.
                    WE GUARANTEE THAT WE'RE DOING USEFUL FOR YOUR TECHNOLOGY IMPROVEMENT.
                </p>
            </div>
            <div class="col-lg-6">
                <h4 class="m-b-20">Our Product &amp; Services</h4>
                <div class="accordion fancy radius clean">
                    <div class="ac-item ac-active">
                        <h5 class="ac-title"><i class="fas fa-code"></i>Hardware &amp; Software Development
                        </h5>
                        <div class="ac-content ac-active">We offer a powerful, functional, and robust
                            application in combination with a system that is always updated and any modern
                            database system.</div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title"><i class="fas fa-chart-pie"></i>Design Creation</h5>
                        <div class="ac-content">We offer a number of designs and we also put it in several
                            mockups, so the client can choose and feel satisfied with the several options we
                            provide.</div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title"><i class="far fa-lightbulb"></i>IT &amp; Development
                            Consultation</h5>
                        <div class="ac-content">Our consulting services are designed to meet your business need
                            with the help of our individual and joint experience in the design, implementation,
                            and management of IT.</div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title"><i class="fas fa-calculator"></i>Accounting Software Support</h5>
                        <div class="ac-content">We sell <strong>ASCEND ERP Solutions.</strong> This Software has
                            already running in palm oil & plantation, hotel, manufactory, distribution and
                            Logistics &amp; Services.</div>
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
                <h2>Our quality will always prove that will reach your work with target audiences.</h2>
                <p>Our clients see technology as a source of growth, as a way to make their next flagship
                    product. So because that we are here to provide you a high quality services.</p>
            </div>
        </div>
        <div class="row m-b-100">
            <div class="col-lg-4">
                <div class="icon-box text-center effect border color">
                    <div class="icon">
                        <a href="#"><i class="fa fa-rocket"></i></a>
                    </div>
                    <h5>Modern Development Structure</h5>
                    <p class="lead">Always make you comfortable with our modern structure development will
                        always improve your system apps to get better than nowdays.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="icon-box text-center effect border color">
                    <div class="icon">
                        <a href="#"><i class="fa fa-flask"></i></a>
                    </div>
                    <h5>Clean Modern Code</h5>
                    <p class="lead">Our development will always develop on clean mode. So that we will easier
                        improve our system on yours.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="icon-box text-center effect border color">
                    <div class="icon">
                        <a href="#"><i class="fa fa-umbrella"></i></a>
                    </div>
                    <h5>Lifetime Updates &amp; Support</h5>
                    <p class="lead">Dont worry if you have got a trouble. We will always help you 24/7 days by
                        live chat support system.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="col-lg-8 m-b-100 center">
            <div class="heading-text heading-section text-center">
                <h2>Meet our team</h2>
                <p>We're led by a team who constantly questions, tinkers, and challengers to unlock great
                    creativity
                    around every turn.</p>
            </div>
        </div>
        <div class="carousel equalize testimonial testimonial-box" data-margin="20" data-arrows="false" data-items="4"
            data-items-sm="2" data-items-xxs="1" data-equalize-item=".testimonial-item">

            <div class="testimonial-item">
                <img src="{!!asset('storage/team/user-1.jpg')!!}" alt="">
                <p>Whatever you do, if you do it with your heart and as strong and strong as you can. Believe
                    that someone's success is judged to be what he gets. Don't count too much, the most
                    important thing is to try and learn.</p>
                <span>Yong Cen</span>
                <span>CEO &amp; Founder</span>
            </div>


            <div class="testimonial-item">
                <img src="{!!asset('storage/team/user-2.jpg')!!}" alt="">
                <p>The second important things after dreaming of it is do it. Many people have so much an idea
                    and plan, but just a few of many people do that things for make it worth it. So, do it to
                    achieve it.
                </p>
                <span>Bintang Tobing</span>
                <span>Co-Founder & Web Apps Developer</span>
            </div>


            <div class="testimonial-item">
                <img src="{!!asset('storage/team/user-3.jpg')!!}" alt="">
                <p>Success is the dream of all people in the world, but success also has many different
                    meanings. Do what is a passion of yourself and you will not work forever.</p>
                <span>Handoko Wijaya</span>
                <span>Co-founder &amp; Technical Developer</span>
            </div>


            <div class="testimonial-item">
                <img src="{!!asset('storage/team/user-4.jpg')!!}" alt="">
                <p>Keep working and don't give up, Keep working, keep revising and don't worry about various
                    rejection from the client. Why? Because in the end you will find the answer.</p>
                <span>Malvin Moses</span>
                <span>Chief Design</span>
            </div>
        </div>

    </div>
</section>


<div style="background-image:url({!!asset('storage/bg/calltoac.jpg')!!})"
    class="call-to-action p-t-100 p-b-100 background-image mb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <h3 class="text-light">
                    Join us to make a wonderfull project.
                </h3>
                <p class="text-light">
                    Start growing with <strong>Infinity Solutions</strong> today. <br>With the Most Helpful Humans in
                    Application, Hosting
                    and Internet. We'll give you the best solutions.
                </p>
            </div>
            <div class="col-lg-2">
                <a class="btn btn-light btn-outline" href="/contact-us">Become a partner!</a>
            </div>
        </div>
    </div>
</div>


<section class="p-t-150 p-b-200"
    style="background-image:url(homepages/branding/images/background-4.png); background-position:71% 22%;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading-text heading-section">
                            <h2>Get in Touch with Us</h2>
                            <p class="lead">Dont be shy if you have a question about us or about your confusing
                                trouble. We are here ready to give you an advise to <strong>solve your
                                    problem</strong>.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 m-b-30">
                        <address>
                            <strong>Kantor pusat:</strong><br>
                            Bukit Gading Raya SB-25<br>
                            Kelapa Gading Barat, DKI Jakarta 14240<br>
                        </address>
                        <strong>Phone:</strong> (+62) 21 2245 9102
                        <br>
                        <strong>Mobile:</strong> (+62) 811 6577 799
                        <br>
                        <strong>Email:</strong> info@infinitysolutions.co.id
                    </div>
                    <div class="col-lg-6 m-b-30">
                        <address>
                            <strong>Kantor Cabang:</strong><br>
                            Komplek MMTC Blok B 84/85<br>
                            Jalan Williem Iskandar, Medan Deli Serdang 20371<br>
                        </address>
                        <strong>Phone:</strong> (+62) 61 8003 2999 (ext. 103)
                        <br>
                        <strong>Mobile:</strong> (+62) 811 6577 799
                        <br>
                        <strong>Email:</strong> info@infinitysolutions.co.id
                    </div>
                    <div class="col-lg-12 m-b-30">
                        <h4>We are social</h4>
                        <div class="social-icons social-icons-light social-icons-colored-hover">
                            <ul>
                                <li class="social-facebook"><a href="https://www.facebook.com/infinitysolutionsid"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="social-twitter"><a href="https://www.twitter.com/infinityslts"><i
                                            class="fab fa-twitter"></i></a></li>
                                {{-- <li class="social-vimeo"><a href="#"><i class="fab fa-vimeo"></i></a></li>
                                <li class="social-youtube"><a href="#"><i class="fab fa-youtube"></i></a></li> --}}
                                <li class="social-instagram"><a href="https://www.instagram.com/infinitysolutionsid"><i
                                            class="fab fa-instagram"></i></a>
                                </li>
                                {{-- <li class="social-pinterest"><a href="#"><i class="fab fa-pinterest"></i></a>
                                </li>
                                <li class="social-gplus"><a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                                <li class="social-dribbble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li class="social-skype"><a href="#"><i class="fab fa-skype"></i></a></li> --}}
                                <li class="social-linkedin"><a
                                        href="https://www.linkedin.com/company/infinity-solutions-pt-benua-solusi-teknologi"><i
                                            class="fab fa-linkedin"></i></a></li>
                                {{-- <li class="social-behance"><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li class="social-flickr"><a href="#"><i class="fab fa-flickr"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-1">
                @if(session('sukses'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <h4 class="alert-heading"><strong>Well done!</strong></h4>
                    <p>Message has been successfully sent! Our support team will reply you in 2x24
                        hours.</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <form action="/send-email" class="" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" aria-required="true" required name="name"
                                class="form-control required name" placeholder="Enter your Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" aria-required="true" required name="email"
                                class="form-control required email" placeholder="Enter your Email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Subject">Subject
                                <input type="text" name="subject" placeholder="Enter your subject" id=""
                                    class="form-control required subject" required>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea type="text" required name="message" rows="8" class="form-control required"
                            placeholder="Enter your Message"></textarea>
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
@endsection
