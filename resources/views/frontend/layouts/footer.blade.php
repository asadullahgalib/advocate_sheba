<footer class="main">
    <section class="newsletter mb-15 wow animate__animated animate__fadeIn alert alert-danger" style="padding: 35px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="text-align:justify;text-align: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert text-[#EAB308] flex-shrink-0 mt-0.5" aria-hidden="true"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path><path d="M12 9v4"></path><path d="M12 17h.01"></path></svg>

                    Disclaimer: Information on AdvocateSheba is for general educational purposes only and does not replace professional medical advice, diagnosis, or treatment. Consult a qualified doctor or healthcare provider.
                </div>
            </div>
        </div>
    </section>

    <section class="featured section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 mb-md-4 mb-xl-0">
                    <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay="0">
                        <div class="banner-icon">
                            <img src="{{asset('frontend')}}/assets/img/theme/icons/icon-1.svg" alt="" />
                        </div>
                        <div class="banner-text">
                            <h3 class="icon-box-title">Verified Information</h3>
                            <p>Reviewed from public records & credentials</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <div class="banner-icon">
                            <img src="{{asset('frontend')}}/assets/img/theme/icons/icon-2.svg" alt="" />
                        </div>
                        <div class="banner-text">
                            <h3 class="icon-box-title">Find Nearby</h3>
                            <p>Search doctors by specialty & location</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                        <div class="banner-icon">
                            <img src="{{asset('frontend')}}/assets/img/theme/icons/icon-3.svg" alt="" />
                        </div>
                        <div class="banner-text">
                            <h3 class="icon-box-title">Trusted by Clients</h3>
                            <p>Helps Clients make informed decisions</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                        <div class="banner-icon">
                            <img src="{{asset('frontend')}}/assets/img/theme/icons/icon-4.svg" alt="" />
                        </div>
                        <div class="banner-text">
                            <h3 class="icon-box-title">Secure & Private</h3>
                            <p>Protected by strict data standards</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                        <div class="banner-icon">
                            <img src="{{asset('frontend')}}/assets/img/theme/icons/icon-5.svg" alt="" />
                        </div>
                        <div class="banner-text">
                            <h3 class="icon-box-title">Easy Appointment</h3>
                            <p>Connect with doctors and request appointments easily</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container pb-30 wow animate__animated animate__fadeInUp" data-wow-delay="0" style="background: #fff;padding-bottom: 15px !important;">
        <div class="row">
            <div class="col-12 mb-30">
                <div class="footer-bottom"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-2 text-center">
                <a href="{{url('')}}">
                    <img src="{{asset('uploads/logo_images/'.@$logo->image)}}" alt="Shastho Plus logo" style="margin-top: -25px;">
                </a>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 footer_link" style="display: flex; justify-content: center; align-items: center;">
                <a href="#">For Advocates</a> 
                <a href="#">How It Works</a> 
                <a href="#">User Guide</a> 
                <a href="#">About</a> 
                <a href="#">Contact</a> 
                <a href="#">Privacy Policy</a> 
                <a href="#">Terms of Use</a> 
                <a href="#">Disclaimer</a> 
                <a href="#">Editorial Policy</a> 
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 text-center">
                <div class="mobile-social-icon">
                    <a title="Page" href="#" target="_blank"><i class="bi bi-facebook" style="margin-top: 10px;"></i></a>
                    <a title="Page" href="#" target="_blank"><i class="bi bi-instagram" style="margin-top: 10px;"></i></a>
                    <a title="Youtube" href="#" target="_blank"><i class="bi bi-youtube" style="margin-top: 10px;"></i></a>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 25px;">
            <div class="col-xl-12 col-lg-12 col-md-12 text-center">
                <p class="font-sm mb-0" style="color: #fff;color: #000;">
                    Copyright &copy;  <strong class="text-brand" style="color:#000; !important">{{@$contact->name}}</strong> &nbsp; 
                    All rights reserved.
                </p>
            </div>
        </div>
    </div>
</footer>