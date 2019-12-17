@extends('welcome')
@section('title','| About us')
@section('content')
<div id="slider" class="inspiro-slider dots-creative" data-height-xs="360">

    <div class="slide kenburns" style="background-image:url('{!!asset('storage/bg/parallax-1.jpg')!!}');">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="slide-captions text-center text-light">

                <span class="strong">Who we are</span>
                <h1>About our company</h1>

            </div>
        </div>
    </div>

</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="heading-text heading-section">
                    <h2>THE COMPANY</h2>
                    <p>INFINITY SOLUTIONS STORY</p>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-6">Everything starts in 2018 to be exact starting in November. We are just a fad
                        to create a business group in the IT field. Initially only opened a division for website
                        creation. Currently the software division (Website) is headed by Mr. Bintang.
                        <br>Then in 2019 in January, everything seemed to be moving quickly, Mr. Yong Chen, who gave us
                        capital, gave us one division and gave a mandate to Mr. Handoko to be able to handle this
                        division, namely the hardware division. </div>
                    <div class="col-lg-6">Everything feels fast and so fast, since we opened the software and hardware
                        division, there have been many clients who have come to entrust us to create websites and
                        provide consultation on consulting for their companies.
                        <br>
                        Over time, we also opened a design division for logo design, company profile, business cards and
                        other designs. This division is also headed by Mr. Bintang.
                        And as time goes on, more and more clients trust us. We are also constrained by financial
                        management and other management. And Mr. Yong Chen entrusted Mr. Handoko to head the management
                        at our new office.<br>
                        And now we continue to grow and will improve our service and quality. We know that we have to
                        develop with the times and technology.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="box-fancy section-fullwidth text-light p-b-0">
    <div class="row">
        <div style="background-color:#917d5d" class="col-lg-4">
            <h1 class="text-lg text-uppercase">01.</h1>
            <h3>CONCEPT &amp; CONSULTANCY</h3>
            <span>Before the project work begins, we need to discuss how this project works. Basically this is a list of
                goals that need to be achieved to make the final result. After that, we will do data collection, data
                needed for system requirements, both from the description of the article and what will be given to
                visitors. </span>
        </div>
        <div style="background-color:#a08c6c" class="col-lg-4">
            <h1 class="text-lg text-uppercase">02.</h1>
            <h3>IMPLEMENTATION</h3>
            <span>After the data collection is complete, we usually directly involve the development team, the
                management team, to clarify the details of the client story, and the next stage we immediately design
                how UI design, code, and other techniques. We synchronize users with the latest developments, improve
                communication, identify obstacles that must be eliminated. In this way the proccess of carrying out work
                can be done on time. </span>
        </div>
        <div style="background-color:#ad9979" class="col-lg-4">
            <h1 class="text-lg text-uppercase">03.</h1>
            <h3>TESTING &amp; FINAL REVIEW</h3>
            <span>In this session, work is indicated. We also prepare for any changes that nneed to be made in
                accordance with the agreement. We always accept contructive suggestions to see what is going well, what
                is wrong and what can be improved in the proccess. This allowsus to continue to grow and develop.
            </span>
        </div>
    </div>
</section>
<section class="background-grey">
    <div class="container">
        <div class="heading-text heading-section text-center">
            <h2>OUR TEAM</h2>
            <span class="lead">We're led by a team who constantly questions, tinkers, and challengers to unlock great
                creativity around every turn.</span>
        </div>
        <div class="row team-members team-members-shadow m-b-40">
            <div class="col-lg-3">
                <div class="team-member">
                    <div class="team-image">
                        <img src="{!!asset('storage/team/user-1.jpg')!!}">
                    </div>
                    <div class="team-desc">
                        <h3>Yong Cen</h3>
                        <span>CEO & Founder</span>
                        <p>Whatever you do, if you do it with your heart and as strong and strong as you can. Believe
                            that someone's success is judged to be what he gets. Don't count too much, the most
                            important thing is to try and learn. </p>
                        <div class="align-center">
                            <a class="btn btn-xs btn-slide btn-light" href="https://instagram.com/yongcen"
                                data-width="118">
                                <i class="fab fa-instagram"></i>
                                <span>Instagram</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="mailto:yongcen@infinitysolutions.co.id"
                                data-width="80">
                                <i class="far fa-envelope"></i>
                                <span>Mail</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="team-member">
                    <div class="team-image">
                        <img src="{!!asset('storage/team/user-2.jpg')!!}">
                    </div>
                    <div class="team-desc">
                        <h3>Bintang Tobing</h3>
                        <span>Co-Founder & Web Apps Developer</span>
                        <p>The second important things after dreaming of it is do it. Many people have so much an idea
                            and plan, but just a few of many people do that things for make it worth it. So, do it to
                            achieve it. </p>
                        <div class="align-center">
                            <a class="btn btn-xs btn-slide btn-light" href="https://facebook.com/bintangjtobing">
                                <i class="fab fa-facebook-f"></i>
                                <span>Facebook</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="https://instagram.com/bintangj.exe"
                                data-width="118">
                                <i class="fab fa-instagram"></i>
                                <span>Instagram</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="mailto:bintang@infinitysolutions.co.id"
                                data-width="80">
                                <i class="far fa-envelope"></i>
                                <span>Mail</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="team-member">
                    <div class="team-image">
                        <img src="{!!asset('storage/team/user-3.jpg')!!}">
                    </div>
                    <div class="team-desc">
                        <h3>Handoko Wijaya</h3>
                        <span>Co-Founder & Technical Developer</span>
                        <p>Success is the dream of all people in the world, but success also has many different
                            meanings. Do what is a passion of yourself and you will not work forever. </p>
                        <div class="align-center">
                            <a class="btn btn-xs btn-slide btn-light" href="https://instagram.com/handoko_wu"
                                data-width="118">
                                <i class="fab fa-instagram"></i>
                                <span>Instagram</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="mailto:handoko@infinitysolutions.co.id"
                                data-width="80">
                                <i class="far fa-envelope"></i>
                                <span>Mail</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="team-member">
                    <div class="team-image">
                        <img src="{!!asset('storage/team/user-4.jpg')!!}">
                    </div>
                    <div class="team-desc">
                        <h3>Malvin Moses</h3>
                        <span>Chief Design</span>
                        <p>Keep working and don't give up, Keep working, keep revising and don't worry about various
                            rejection from the client. Why? Because in the end you will find the answer. </p>
                        <div class="align-center">
                            <a class="btn btn-xs btn-slide btn-light" href="https://instagram.com/malvin.99"
                                data-width="118">
                                <i class="fab fa-instagram"></i>
                                <span>Instagram</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="mailto:malvin@infinitysolutions.co.id"
                                data-width="80">
                                <i class="far fa-envelope"></i>
                                <span>Mail</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="lead">Our awesome clients we've had the pleasure to work with!</p>
            </div>
        </div>
        <ul class="grid grid-5-columns">
            <li>
                <a href="#"><img src="{!!asset('storage/client/indotech.png')!!}" alt="">
                </a>
            </li>
            <li>
                <a href="#"><img src="{!!asset('storage/client/ogi.png')!!}" alt="">
                </a>
            </li>
            <li>
                <a href="#"><img src="{!!asset('storage/client/allen.png')!!}" alt="">
                </a>
            </li>
            <li>
                <a href="#"><img src="{!!asset('storage/client/sbeu.png')!!}" alt="">
                </a>
            </li>
            <li>
                <a href="#"><img src="{!!asset('storage/client/btsa.png')!!}" alt="">
                </a>
            </li>
            <li>
                <a href="#"><img src="{!!asset('storage/client/plp.png')!!}" alt="">
                </a>
            </li>
            <li>
                <a href="#"><img src="{!!asset('storage/client/nbp.png')!!}" alt="">
                </a>
            </li>
        </ul>
    </div>
</section>

@endsection
