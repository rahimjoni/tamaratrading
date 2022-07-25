@extends('layouts.frontend.app')

@section('title','Home')

@push('css')
    <style>
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(calc(-250px * 7));
            }
        }
        .sliderTest {
            height: 100px;
            margin: auto;
            overflow: hidden;
            position: relative;
            width: auto;
        }
        .sliderTest .slide-track {
            animation: scroll 40s linear infinite;
            display: flex;
            width: calc(250px * 14);
        }
        .sliderTest .slide {
            height: 100px;
            width: 250px;
        }

    </style>
@endpush

@section('content')
    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    <!--Main Slider Start-->
    <section class="main-slider clearfix">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url(assets/frontend/images/backgrounds/gasoil.jpg);"></div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-8">
                                <div class="main-slider__content"><br>
                                    <p class="main-slider__sub-title">THE PURCHASING SPECIALIST FOR OIL & GAS</p>
                                    <h2 class="main-slider__title">INDIRECT PURCHASING OIL & GAS</h2>
                                    <div class="main-slider__btn-box">
                                        <a href="about.html" class="thm-btn main-slider__btn"> <i class="fa fa-arrow-right"></i> Discover more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url(assets/frontend/images/backgrounds/pipe.jpeg);"></div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-8">
                                <div class="main-slider__content"><br>
                                    <p class="main-slider__sub-title">THE PROCUREMENT SPECIALIST FOR THE INDUSTRY</p>
                                    <h2 class="main-slider__title">INDIRECT INDUSTRY PROCUREMENT</h2>
                                    <div class="main-slider__btn-box">
                                        <a href="about.html" class="thm-btn main-slider__btn"> <i class="fa fa-arrow-right"></i> Discover more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url(assets/frontend/images/backgrounds/moto.jpg);"></div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-8">
                                <div class="main-slider__content"><br>
                                    <p class="main-slider__sub-title">THE PURCHASING SPECIALIST FOR THE ENERGY</p>
                                    <h2 class="main-slider__title">INDIRECT ENERGY PURCHASE</h2>
                                    <div class="main-slider__btn-box">
                                        <a href="about.html" class="thm-btn main-slider__btn"> <i class="fa fa-arrow-right"></i> Discover more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- If we need navigation buttons -->
            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="icon-left-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-right-arrow"></i>
                </div>
            </div>

        </div>
    </section><br><br>
    <!--Main Slider End-->
    <section class="services-two">
        <div class="services-two-shape-1 float-bob-x">
            <img src="{{ asset('assets/frontend/images/shapes/services-two-shape-1.png') }}" alt="">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <div class="section-sub-title-box">
                    <p class="section-sub-title">Our services</p>
                    <div class="section-title-shape-1">
                        <img class="fab-icon-main" src="{{ asset('assets/frontend/images/favicons/icon.png') }}" alt="">
                    </div>
                </div>
                <h2 class="section-title__title">WHAT SERVICES ARE YOU LOOKING FOR?</h2>
            </div>
            <div class="row">
                <!--Services Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                    <div class="services-two__single">
                        <div class="services-two__icon">
                            <i class="fa fa-plus"></i>
                        </div>
                        <h3 class="services-two__title"><a href="single-play-roofing.html">PROCUREMENT</a></h3>
                        <div class="services-two__read-more">
                            <a href="single-play-roofing.html"> More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!--Services Two Single End-->
                <!--Services Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp animated" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                    <div class="services-two__single">
                        <div class="services-two__icon">
                            <i class="fa fa-plus"></i>
                        </div>
                        <h3 class="services-two__title"><a href="modified-roofing.html">PIPING SUPPLY</a>
                        </h3>
                        <div class="services-two__read-more">
                            <a href="modified-roofing.html"> More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!--Services Two Single End-->
                <!--Services Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                    <div class="services-two__single">
                        <div class="services-two__icon">
                            <i class="fa fa-plus"></i>
                        </div>
                        <h3 class="services-two__title"><a href="built-up-roofing.html">MATERIAL HANDLING</a>
                        </h3>
                        <div class="services-two__read-more">
                            <a href="built-up-roofing.html"> More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!--Services Two Single End-->
                <!--Services Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp animated" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
                    <div class="services-two__single">
                        <div class="services-two__icon">
                            <i class="fa fa-plus"></i>
                        </div>
                        <h3 class="services-two__title"><a href="roof-inspection.html">E-PROCUREMENT</a></h3>
                        <div class="services-two__read-more">
                            <a href="roof-inspection.html"> More <i class="fa fa-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
                <!--Services Two Single End-->
            </div>
        </div>
    </section>
     <!--CTA One Start-->
     <section class="cta-one">
        <div class="cta-one__img-box">
            <div class="cta-one__img">
                <img src="{{ asset('assets/frontend/images/resources/cta-one-img-1.jpg') }}" alt="">
            </div>
        </div>
        <div class="container">
            <div class="cta-one__inner">
                <div class="cta-one__left">
                    <p class="cta-one__sub-title">Need our services?</p>
                    <h3 class="cta-one__title">WE OPTIMIZE YOUR PROCUREMENT PROCESS</h3>
                </div>
                <div class="cta-one__btn-box">
                    <a href="contact.html" class="thm-btn cta-one__btn"> <i class="fa fa-arrow-right"></i> REQUEST ADVICE</a>
                </div>
            </div>
        </div>
    </section><br><br>
    <!--CTA One End-->

    <!--About One Start-->
    <section class="about-one">
        <div class="about-one__shape float-bob-x">
            <img src="{{ asset('assets/frontend/images/shapes/about-one-shape.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__left">
                        <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms"
                             data-wow-duration="2500ms">
                            <div class="about-one__img">
                                <img src="{{ asset('assets/frontend/images/resources/about-one-img-1.jpg') }}" alt="">
                            </div>
                            <div class="about-one__line">
                                <img src="{{ asset('assets/frontend/images/shapes/about-one-line.png') }}" alt="">
                            </div>
                            <div class="about-one__satisfied">
                                <div class="about-one__satisfied-inner">
                                    <div class="about-one__satisfied-shape">
                                        <img src="{{ asset('assets/frontend/images/shapes/about-one-satisfied-shape-1.png') }}" alt="">
                                    </div>
                                    <div class="about-one__satisfied-content">
                                        <div class="about-one__satisfied-count-box">
                                            <h3 class="odometer" data-count="98">00</h3>
                                            <span class="about-one__satisfied-percent">%</span>
                                        </div>
                                        <p class="about-one__satisfied-text">Satisfied customers</p>
                                    </div>
                                </div>
                            </div>
                            <div class="about-one__big-text">Tamara Trading</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-one__right">
                        <div class="section-title text-left">
                            <div class="section-sub-title-box">
                                <p class="section-sub-title">About TAMARA TRADING</p>
                                <div class="section-title-shape-1">
                                    <img class="fab-icon-main" src="{{ asset('assets/frontend/images/favicons/icon.png') }}" alt="">
                                </div>
                            </div>
                            <h2 class="section-title__title">Experienced & quality roofing services providers</h2>
                        </div>
                        <p class="about-one__text">Nulla commodo dolor massa, vel pellentesque nulla congue quis. Fusce ut convallis diam. Nam id tortor et nunc tempor faucibus. Sed eu leo egestas, imperdiet felis sed, vestibulum ligula.</p>
                        <ul class="list-unstyled about-one__points">
                            <li>
                                <div class="icon-box">
                                    <div class="icon">
                                        <span class="icon-confirmation"></span>
                                    </div>
                                    <div class="text-box">
                                        <p>Innovative work</p>
                                    </div>
                                </div>
                                <div class="text-box-two">
                                    <p>Lorem ipsum dolor sit ame sedme consectetur nod.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon-box">
                                    <div class="icon">
                                        <span class="icon-confirmation"></span>
                                    </div>
                                    <div class="text-box">
                                        <p>Certified company</p>
                                    </div>
                                </div>
                                <div class="text-box-two">
                                    <p>Lorem ipsum dolor sit ame sedme consectetur nod.</p>
                                </div>
                            </li>
                        </ul>
                        <a href="about.html" class="thm-btn about-one__btn"> <i class="fa fa-arrow-right"></i> Discover more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About One End-->

    <section class="why-choose-two">
        <div class="why-choose-two-bg" style="background-image: url(assets/frontend/images/backgrounds/why-choose-two-bg.jpg);"></div>
        <div class="container">
            <div class="section-title text-center">
                <div class="section-sub-title-box">
                    <p class="section-sub-title">BRANCHES</p>
                    <div class="section-title-shape-1">
                        <img class="fab-icon-main" src="{{ asset('assets/frontend/images/favicons/icon.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="why-choose-two__left">
                        <ul class="list-unstyled why-choose-two__list-one">
                            <li>
                                <div class="icon">
                                    <span class="icon-roof-2"></span>
                                </div>
                                <div class="content">
                                    <h4>Industry</h4>
                                    <p>In a free hour when our power of choice is untrammelled and when nothing
                                        prevents.</p>
                                    <div class="why-choose-two__read-more">
                                        <a href="about.html">Read More <i class="fa fa-arrow-right"></i> </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-mission"></span>
                                </div>
                                <div class="content">
                                    <h4>Oil & Gas</h4>
                                    <p>In a free hour when our power of choice is untrammelled and when nothing
                                        prevents.</p>
                                    <div class="why-choose-two__read-more">
                                        <a href="about.html">Read More <i class="fa fa-arrow-right"></i> </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="why-choose-two__middle">
                        <div class="why-choose-two__img-box">
                            <div class="why-choose-two__img-one">
                                <img src="{{ asset('assets/frontend/images/favicons/icon.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="why-choose-two__right">
                        <ul class="list-unstyled why-choose-two__list-two clearfix">
                            <li class="clearfix">
                                <div class="content">
                                    <h4>Energy</h4>
                                    <p>In a free hour when our power of choice is untrammelled and when nothing
                                        prevents.</p>
                                    <div class="why-choose-two__read-more">
                                        <a href="about.html">Read More <i class="fa fa-arrow-right"></i> </a>
                                    </div>
                                </div>
                                <div class="icon">
                                    <span class="icon-shield"></span>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="content">
                                    <h4>Business & Financial</h4>
                                    <p>In a free hour when our power of choice is untrammelled and when nothing
                                        prevents.</p>
                                    <div class="why-choose-two__read-more">
                                        <a href="about.html">Read More <i class="fa fa-arrow-right"></i> </a>
                                    </div>
                                </div>
                                <div class="icon">
                                    <span class="icon-construction-worker"></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Why Choose One Start-->

    <!--Brand One Start-->
    <section class="brand-one">
        <div class="brand-one__inner">
            <div class="brand-one__shape-1">
                <img src="{{ asset('assets/frontend/images/shapes/brand-one-shape-1.png') }}" alt="">
            </div>
            <div class="brand-one__shape-2 float-bob-y">
                <img src="{{ asset('assets/frontend/images/shapes/brand-one-shape-2.png') }}" alt="">
            </div>
            <div class="container">
                <div class="sliderTest">
                    <div class="slide-track">
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Brand One End-->

    <!--Trust Company Start-->
    <section class="trust-company">
        <div class="trust-company-shape-1">
            <img src="{{ asset('assets/frontend/images/shapes/traust-company-shape-1.png') }}" alt="">
        </div>
        <div class="trust-company-shape-2"></div>
        <div class="trust-company-shape-3"></div>
        <div class="trust-company-shape-4"></div>
        <div class="trust-company-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(assets/images/backgrounds/trust-company-bg.jpg);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7">
                    <div class="trust-company__left">
                        <div class="trust-company__video-link">
                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                <div class="trust-company__video-icon">
                                    <span class="fa fa-play"></span>
                                    <i class="ripple"></i>
                                </div>
                            </a>
                        </div>
                        <h2 class="trust-company__title">Hundreds of customers trust our company</h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5">
                    <div class="trust-company__right">
                        <ul class="list-unstyled trust-compay__points">
                            <li>
                                <div class="icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="text">
                                    <p>We’ve expert & certified staff</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="text">
                                    <p>We only provide quality services</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="text">
                                    <p>We offer you free estimates</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Trust Company End-->
@endsection

@push('js')

@endpush
