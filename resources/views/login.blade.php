   {{-- <style>   </style> --}}
<x-layout>
    @slot('title','login')
    @slot('body')

    <!-- Start Main Banner Area -->
    <div class="home-slides owl-carousel owl-theme">
        <div class="single-banner-item banner-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container-fluid">
                <div class="row align-items-center">
                  

                    <div class="col-lg-7 col-md-12">
                        <div class="main-banner-image">
                            <img src="{{url('img/banner-img1.png')}}" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12">
                        <div class="main-banner-content">
                            <!-- <span class="sub-title">Enjoy The Game</span> -->
                            <div class="logo">
                                <img src="{{url('img/zelda.png')}}" alt="image">
                            </div>
                            <!-- <h6>Available Now</h6> -->
                            <div class="btn-box">
                                <a href="register.php" class="default-btn">Register Now</a>
                                <a href="login.php" class="optional-btn">Login Here</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

       
    </div>
    <!-- End Main Banner Area -->

    <!-- Start Contact Area -->
    <section class="contact-area">
        <div class="container">
            <div class="row align-items-center">


                <div class="col-lg-12 col-md-12">
                    <div class="contact-form">
                        <h2>Ready to Get Started?</h2>
                        <p>Your email address will not be published. Required fields are marked *</p>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" required
                                            data-error="Please enter your name" placeholder="Your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" required
                                            data-error="Please enter your email" placeholder="Your email address">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required
                                            data-error="Please enter your phone number" placeholder="Your phone number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" cols="30" rows="5" required
                                            data-error="Please enter your message"
                                            placeholder="Write your message..."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">Send Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

    @endslot
</x-layout>
