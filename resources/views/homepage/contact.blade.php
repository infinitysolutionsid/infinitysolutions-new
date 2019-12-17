@extends('welcome')
@section('title','| Gallery')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="text-uppercase">Get In Touch</h3>
                <p>The most happiest time of the day!. Suspendisse condimentum porttitor cursus. Duis nec nulla
                    turpis. Nulla lacinia laoreet odio, non lacinia nisl malesuada vel. Aenean malesuada
                    fermentum bibendum.</p>
                <p>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum
                    gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie
                    ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare orci.
                    Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                <div class="row m-t-40">
                    <div class="col-lg-6">
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
                    <div class="col-lg-6">
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
                </div>
                <div class="social-icons m-t-30 social-icons-colored">
                    <ul>
                        <li class="social-facebook"><a href="https://facebook.com/infinitysolutionsid"><i
                                    class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="social-twitter"><a href="https://twitter.com/infinityslts"><i
                                    class="fab fa-twitter"></i></a></li>
                        <li class="social-instagram"><a href="https://instagram.com/infinitysolutionsid"><i
                                    class="fab fa-instagram"></i></a></li>
                        <li class="social-linkedin"><a
                                href="https://www.linkedin.com/company/infinity-solutions-pt-benua-solusi-teknologi"><i
                                    class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <form class="widget-contact-form" novalidate action="include/contact-form.php" role="form"
                    method="post">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" aria-required="true" name="widget-contact-form-name" required
                                class="form-control required name" placeholder="Enter your Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" aria-required="true" name="widget-contact-form-email" required
                                class="form-control required email" placeholder="Enter your Email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="subject">Your Subject</label>
                            <input type="text" name="widget-contact-form-subject" required class="form-control required"
                                placeholder="Subject...">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea type="text" name="widget-contact-form-message" required rows="5"
                            class="form-control required" placeholder="Enter your Message"></textarea>
                    </div>

                    <button class="btn" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send
                        message</button>
                </form>
            </div>
        </div>
    </div>
</section>


<section class="no-padding">

    <div class="map" data-latitude="-1.2585331" data-longitude="98.3042232" data-style="light"
        data-info="Hello from &lt;br&gt; Inspiro Themes"></div>

</section>

@endsection
