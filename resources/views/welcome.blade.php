@extends('layouts.frontend.app')

@section('title','Home')

@push('css')
    <style>

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
                                <div class="main-slider__content">
                                    <p class="main-slider__sub-title">THE PURCHASING SPECIALIST FOR OIL & GAS</p>
                                    <h2 class="main-slider__title">INDIRECT PURCHASING OIL & GAS</h2>
                                    <p class="main-slider__text">Oil & gas’s core task is to extract energy. The priority is to optimize the purchasing categories that are close to the core task. You make contract agreements with these suppliers.</p>
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
                                <div class="main-slider__content">
                                    <p class="main-slider__sub-title">THE PROCUREMENT SPECIALIST FOR THE INDUSTRY</p>
                                    <h2 class="main-slider__title">INDIRECT PROCUREMENT INDUSTRY</h2>
                                    <p class="main-slider__text">The core task of the industry is the processing of raw materials for the production of new products. The priority is to optimize the purchasing categories that are close to the core task.</p>
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
                                <div class="main-slider__content">
                                    <p class="main-slider__sub-title">THE PURCHASING SPECIALIST FOR THE ENERGY SECTOR</p>
                                    <h2 class="main-slider__title">INDIRECT ENERGY PURCHASE</h2>
                                    <p class="main-slider__text">The core task of energy companies, utility companies, network operators or metering companies is to trade in energy and its raw materials.You make contract agreements with these suppliers.</p>
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
    </section>
    <!--Main Slider End-->

    <!--Feature One Start-->
    <section class="feature-one">
        <div class="container">
            <div class="feature-one__inner">
                <div class="feature-one__dot">
                    <img src="{{ asset('assets/frontend/images/shapes/feature-one-dot.png') }}" alt="">
                </div>
                <div class="row">
                    <!--Feature One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-one__single">
                            <div class="feature-one__top">
                                <div class="feature-one__icon">
                                    <span class="icon-roof-5"></span>
                                </div>
                                <div class="feature-one__title-box">
                                    <h3 class="feature-one__title"><a href="about.html">Quality <br> materials</a></h3>
                                </div>
                            </div>
                            <div class="feature-one__single-inner">
                                <p class="feature-one__text">Nullam neque augue, maximus id nulla id, dignissim tristique nunc.</p>
                                <div class="feature-one__read-more">
                                    <a href="about.html">Read More <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Feature One Single End-->
                    <!--Feature One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="feature-one__single">
                            <div class="feature-one__top">
                                <div class="feature-one__icon">
                                    <span class="icon-construction-worker"></span>
                                </div>
                                <div class="feature-one__title-box">
                                    <h3 class="feature-one__title"><a href="team.html">Professional <br> workers</a></h3>
                                </div>
                            </div>
                            <div class="feature-one__single-inner">
                                <p class="feature-one__text">Nullam neque augue, maximus id nulla id, dignissim tristique nunc.</p>
                                <div class="feature-one__read-more">
                                    <a href="team-details.html">Read More <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Feature One Single End-->
                    <!--Feature One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="feature-one__single">
                            <div class="feature-one__top">
                                <div class="feature-one__icon">
                                    <span class="icon-online-registration"></span>
                                </div>
                                <div class="feature-one__title-box">
                                    <h3 class="feature-one__title"><a href="contact.html">Free <br> estimates</a></h3>
                                </div>
                            </div>
                            <div class="feature-one__single-inner">
                                <p class="feature-one__text">Nullam neque augue, maximus id nulla id, dignissim tristique nunc.</p>
                                <div class="feature-one__read-more">
                                    <a href="contact.html">Read More <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Feature One Single End-->
                </div>
            </div>
        </div>
    </section>
    <!--Feature One End-->

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
                            <div class="about-one__big-text">roofing</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-one__right">
                        <div class="section-title text-left">
                            <div class="section-sub-title-box">
                                <p class="section-sub-title">About roofsie</p>
                                <div class="section-title-shape-1">
                                    <img src="{{ asset('assets/frontend/images/shapes/section-title-shape-1.png') }}" alt="">
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

    <!--Services One Start-->
    <section class="services-one">
        <div class="services-one-shape-1 float-bob-x">
            <img src="{{ asset('assets/frontend/images/shapes/services-one-shape-1.png') }}" alt="">
        </div>
        <div class="services-one-shape-2">
            <img src="{{ asset('assets/frontend/images/shapes/services-one-shape-2.png') }}" alt="">
        </div>
        <div class="container">
            <div class="services-one__top">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="services-one__top-left">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">Our services</p>
                                    <div class="section-title-shape-1">
                                        <img src="{{ asset('assets/frontend/images/shapes/section-title-shape-1.png') }}" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">We’re providing quality roofing services</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="services-one__top-right">
                            <p class="services-one__top-right-text">Nulla commodo dolor massa, vel pellentesque nulla congue quis. Fusce ut convallis diam. Nam id tortor et nunc tempor faucibus. Sed eu leo egestas.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-one__bottom">
                <div class="row">
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-one__single">
                            <div class="services-one__img">
                                <img src="{{ asset('assets/frontend/images/services/services-1-1.jpg') }}" alt="">
                            </div>
                            <div class="services-one__content">
                                <div class="services-one__icon">
                                    <span class="icon-roof"></span>
                                </div>
                                <h3 class="services-one__title"><a href="single-play-roofing.html">Single play roofing</a></h3>
                                <p class="services-one__text">Nulla commodo dolor massa, vel pellen esque nulla congue quis.</p>
                                <div class="services-one__read-more">
                                    <a href="single-play-roofing.html">Read More <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="services-one__single">
                            <div class="services-one__img">
                                <img src="{{ asset('assets/frontend/images/services/services-1-2.jpg') }}" alt="">
                            </div>
                            <div class="services-one__content">
                                <div class="services-one__icon">
                                    <span class="icon-joist"></span>
                                </div>
                                <h3 class="services-one__title"><a href="modified-roofing.html">Modified roofing</a></h3>
                                <p class="services-one__text">Nulla commodo dolor massa, vel pellen esque nulla congue quis.</p>
                                <div class="services-one__read-more">
                                    <a href="modified-roofing.html">Read More <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="services-one__single">
                            <div class="services-one__img">
                                <img src="{{ asset('assets/frontend/images/services/services-1-3.jpg') }}" alt="">
                            </div>
                            <div class="services-one__content">
                                <div class="services-one__icon">
                                    <span class="icon-roof-1"></span>
                                </div>
                                <h3 class="services-one__title"><a href="built-up-roofing.html">Built-up roofing</a></h3>
                                <p class="services-one__text">Nulla commodo dolor massa, vel pellen esque nulla congue quis.</p>
                                <div class="services-one__read-more">
                                    <a href="built-up-roofing.html">Read More <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                </div>
            </div>
        </div>
    </section>
    <!--Services One End-->

    <!--Why Choose One Start-->
    <section class="why-choose-one">
        <div class="why-choose-one-bg" style="background-image: url(assets/images/backgrounds/why-choose-one-bg.jpg);"></div>
        <div class="why-choose-one-shape-3 float-bob-y-2"></div>
        <div class="why-choose-one-shape-4 float-bob-x">
            <img src="{{ asset('assets/frontend/images/shapes/why-choose-one-shape-4.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="why-choose-one__left">
                        <div class="section-title text-left">
                            <div class="section-sub-title-box">
                                <p class="section-sub-title">Why choose us</p>
                                <div class="section-title-shape-1">
                                    <img src="{{ asset('assets/frontend/images/shapes/section-title-shape-1.png') }}" alt="">
                                </div>
                            </div>
                            <h2 class="section-title__title">Few reasons to choose our company</h2>
                        </div>
                        <p class="why-choose-one__text">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute aboris nisi ut aliquip ex irure reprehederit.</p>
                        <div class="why-choose-one__points-box">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="why-choose-one__points-single">
                                        <div class="why-choose-one__points-icon">
                                            <span class="icon-roof-2"></span>
                                        </div>
                                        <div class="why-choose-one__points-title-box">
                                            <h4 class="why-choose-one__points-title">Quality <br> materials</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="why-choose-one__points-single">
                                        <div class="why-choose-one__points-icon">
                                            <span class="icon-shield"></span>
                                        </div>
                                        <div class="why-choose-one__points-title-box">
                                            <h4 class="why-choose-one__points-title">Fully <br> insured</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="why-choose-one__points-single">
                                        <div class="why-choose-one__points-icon">
                                            <span class="icon-mission"></span>
                                        </div>
                                        <div class="why-choose-one__points-title-box">
                                            <h4 class="why-choose-one__points-title">Mission <br> statement</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="why-choose-one__points-single">
                                        <div class="why-choose-one__points-icon">
                                            <span class="icon-construction-worker"></span>
                                        </div>
                                        <div class="why-choose-one__points-title-box">
                                            <h4 class="why-choose-one__points-title">Expert <br> engineers</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="why-choose-one__right">
                        <div class="why-choose-one__img-box">
                            <div class="why-choose-one__img wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                                <img src="{{ asset('assets/frontend/images/resources/why-choose-one-img-1.png') }}" alt="">
                            </div>
                            <div class="why-choose-one__shape-1"></div>
                            <div class="why-choose-one__shape-2"></div>
                            <div class="why-choose-one__author-sign">
                                <p>Kevin Martin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Why Choose One End-->

    <!--Brand One Start-->
    <section class="brand-one">
        <div class="brand-one__inner">
            <div class="brand-one__shape-1 float-bob-y">
                <img src="{{ asset('assets/frontend/images/shapes/brand-one-shape-1.png') }}" alt="">
            </div>
            <div class="brand-one__shape-2 float-bob-y">
                <img src="{{ asset('assets/frontend/images/shapes/brand-one-shape-2.png') }}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="brand-one__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='{
                                "margin": 0,
                                "smartSpeed": 700,
                                "loop":true,
                                "autoplay": 6000,
                                "nav":false,
                                "dots":false,
                                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                "responsive":{
                                    "0":{
                                        "items":1
                                    },
                                    "600":{
                                        "items":2
                                    },
                                    "800":{
                                        "items":3
                                    },
                                    "1024":{
                                        "items": 4
                                    },
                                    "1200":{
                                        "items": 5
                                    }
                                }
                            }'>
                            <!--Brand One Single-->
                            <div class="brand-one__single">
                                <div class="brand-one__img">
                                    <img src="{{ asset('assets/frontend/images/brand/brand-1-1.png') }}" alt="">
                                </div>
                            </div>
                            <!--Brand One Single-->
                            <div class="brand-one__single">
                                <div class="brand-one__img">
                                    <img src="{{ asset('assets/frontend/images/brand/brand-1-2.png') }}" alt="">
                                </div>
                            </div>
                            <!--Brand One Single-->
                            <div class="brand-one__single">
                                <div class="brand-one__img">
                                    <img src="{{ asset('assets/frontend/images/brand/brand-1-3.png') }}" alt="">
                                </div>
                            </div>
                            <!--Brand One Single-->
                            <div class="brand-one__single">
                                <div class="brand-one__img">
                                    <img src="{{ asset('assets/frontend/images/brand/brand-1-4.png') }}" alt="">
                                </div>
                            </div>
                            <!--Brand One Single-->
                            <div class="brand-one__single">
                                <div class="brand-one__img">
                                    <img src="{{ asset('assets/frontend/images/brand/brand-1-5.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Brand One End-->

    <!--Project One Start-->
    <section class="project-one">
        <div class="project-one__top">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-sub-title-box">
                        <p class="section-sub-title">Latest Projects</p>
                        <div class="section-title-shape-1">
                            <img src="{{ asset('assets/frontend/images/shapes/section-title-shape-1.png') }}" alt="">
                        </div>
                    </div>
                    <h2 class="section-title__title">Explore our latest projects <br> for your inspiration</h2>
                </div>
            </div>
        </div>
        <div class="project-one__bottom">
            <div class="project-one__bottom-wrapper">
                <div class="project-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                        "loop": true,
                        "autoplay": true,
                        "margin": 30,
                        "nav": false,
                        "dots": true,
                        "smartSpeed": 500,
                        "autoplayTimeout": 10000,
                        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                        "responsive": {
                            "0": {
                                "items": 1
                            },
                            "768": {
                                "items": 2
                            },
                            "992": {
                                "items": 3
                            },
                            "1200": {
                                "items": 4
                            }
                        }
                    }'>
                    <!--Project One Single Start-->
                    <div class="item">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="{{ asset('assets/frontend/images/project/project-1-1.jpg') }}" alt="">
                                </div>
                                <div class="project-one__content">
                                    <h4 class="project-one__title"><a href="work-details.html">Modern <br> roofing style</a>
                                    </h4>
                                </div>
                                <div class="project-one__link">
                                    <a class="img-popup" href="{{ asset('assets/frontend/images/project/project-1-1.jpg') }}"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                    <!--Project One Single Start-->
                    <div class="item">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="{{ asset('assets/frontend/images/project/project-1-2.jpg') }}" alt="">
                                </div>
                                <div class="project-one__content">
                                    <h4 class="project-one__title"><a href="work-details.html">Modern <br> roofing style</a>
                                    </h4>
                                </div>
                                <div class="project-one__link">
                                    <a class="img-popup" href="{{ asset('assets/frontend/images/project/project-1-2.jpg') }}"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                    <!--Project One Single Start-->
                    <div class="item">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="{{ asset('assets/frontend/images/project/project-1-3.jpg') }}" alt="">
                                </div>
                                <div class="project-one__content">
                                    <h4 class="project-one__title"><a href="work-details.html">Modern <br> roofing style</a>
                                    </h4>
                                </div>
                                <div class="project-one__link">
                                    <a class="img-popup" href="{{ asset('assets/frontend/images/project/project-1-3.jpg') }}"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                    <!--Project One Single Start-->
                    <div class="item">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="{{ asset('assets/frontend/images/project/project-1-4.jpg') }}" alt="">
                                </div>
                                <div class="project-one__content">
                                    <h4 class="project-one__title"><a href="work-details.html">Modern <br> roofing style</a>
                                    </h4>
                                </div>
                                <div class="project-one__link">
                                    <a class="img-popup" href="{{ asset('assets/frontend/images/project/project-1-4.jpg') }}"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                    <!--Project One Single Start-->
                    <div class="item">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="{{ asset('assets/frontend/images/project/project-1-1.jpg') }}" alt="">
                                </div>
                                <div class="project-one__content">
                                    <h4 class="project-one__title"><a href="work-details.html">Modern <br> roofing style</a>
                                    </h4>
                                </div>
                                <div class="project-one__link">
                                    <a class="img-popup" href="{{ asset('assets/frontend/images/project/project-1-1.jpg') }}"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                    <!--Project One Single Start-->
                    <div class="item">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="{{ asset('assets/frontend/images/project/project-1-2.jpg') }}" alt="">
                                </div>
                                <div class="project-one__content">
                                    <h4 class="project-one__title"><a href="work-details.html">Modern <br> roofing style</a>
                                    </h4>
                                </div>
                                <div class="project-one__link">
                                    <a class="img-popup" href="{{ asset('assets/frontend/images/project/project-1-2.jpg') }}"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                    <!--Project One Single Start-->
                    <div class="item">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="{{ asset('assets/frontend/images/project/project-1-3.jpg') }}" alt="">
                                </div>
                                <div class="project-one__content">
                                    <h4 class="project-one__title"><a href="work-details.html">Modern <br> roofing style</a>
                                    </h4>
                                </div>
                                <div class="project-one__link">
                                    <a class="img-popup" href="{{ asset('assets/frontend/images/project/project-1-3.jpg') }}"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                    <!--Project One Single Start-->
                    <div class="item">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="{{ asset('assets/frontend/images/project/project-1-4.jpg') }}" alt="">
                                </div>
                                <div class="project-one__content">
                                    <h4 class="project-one__title"><a href="work-details.html">Modern <br> roofing style</a>
                                    </h4>
                                </div>
                                <div class="project-one__link">
                                    <a class="img-popup" href="{{ asset('assets/frontend/images/project/project-1-4.jpg') }}"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                    <!--Project One Single Start-->
                    <div class="item">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="{{ asset('assets/frontend/images/project/project-1-1.jpg') }}" alt="">
                                </div>
                                <div class="project-one__content">
                                    <h4 class="project-one__title"><a href="work-details.html">Modern <br> roofing style</a>
                                    </h4>
                                </div>
                                <div class="project-one__link">
                                    <a class="img-popup" href="{{ asset('assets/frontend/images/project/project-1-1.jpg') }}"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                    <!--Project One Single Start-->
                    <div class="item">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="{{ asset('assets/frontend/images/project/project-1-2.jpg') }}" alt="">
                                </div>
                                <div class="project-one__content">
                                    <h4 class="project-one__title"><a href="work-details.html">Modern <br> roofing style</a>
                                    </h4>
                                </div>
                                <div class="project-one__link">
                                    <a class="img-popup" href="{{ asset('assets/frontend/images/project/project-1-2.jpg') }}"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                    <!--Project One Single Start-->
                    <div class="item">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="{{ asset('assets/frontend/images/project/project-1-3.jpg') }}" alt="">
                                </div>
                                <div class="project-one__content">
                                    <h4 class="project-one__title"><a href="work-details.html">Modern <br> roofing style</a>
                                    </h4>
                                </div>
                                <div class="project-one__link">
                                    <a class="img-popup" href="{{ asset('assets/frontend/images/project/project-1-3.jpg') }}"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                    <!--Project One Single Start-->
                    <div class="item">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="{{ asset('assets/frontend/images/project/project-1-4.jpg') }}" alt="">
                                </div>
                                <div class="project-one__content">
                                    <h4 class="project-one__title"><a href="work-details.html">Modern <br> roofing style</a>
                                    </h4>
                                </div>
                                <div class="project-one__link">
                                    <a class="img-popup" href="{{ asset('assets/frontend/images/project/project-1-4.jpg') }}"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                </div>
            </div>
        </div>
    </section>
    <!--Project One  End-->

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

    <!--Testimonial One Start-->
    <section class="testimonial-one">
        <div class="testimonial-one-shape" style="background-image: url(assets/frontend/images/shapes/testimonial-one-shape.png);"></div>
        <div class="container">
            <div class="section-title text-center">
                <div class="section-sub-title-box">
                    <p class="section-sub-title">testimonials</p>
                    <div class="section-title-shape-1">
                        <img src="{{ asset('assets/frontend/images/shapes/section-title-shape-1.png') }}" alt="">
                    </div>
                </div>
                <h2 class="section-title__title">What they’re talking <br> about us</h2>
            </div>
            <div class="testimonial-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                    "loop": true,
                    "autoplay": true,
                    "margin": 50,
                    "nav": false,
                    "dots": false,
                    "smartSpeed": 500,
                    "autoplayTimeout": 10000,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive": {
                        "0": {
                            "items": 1
                        },
                        "768": {
                            "items": 2
                        },
                        "992": {
                            "items": 2
                        },
                        "1200": {
                            "items": 2
                        }
                    }
                }'>
                <!--Testimonial One Single Start-->
                <div class="item">
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__client-info">
                            <div class="testimonial-one__client-img-box">
                                <div class="testimonial-one__client-img">
                                    <img src="{{ asset('assets/frontend/images/testimonial/testimonial-1-1.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="testimonial-one__client-details">
                                <h4 class="testimonial-one__client-name">Jessica Brown</h4>
                                <p class="testimonial-one__client-sub-title">CEO - Co Founder</p>
                            </div>
                        </div>
                        <p class="testimonial-one__text">Exercitation ullamco laboris nisi ut aliquip ex ea ex commodo consequat duis aute aboris nisi ut aliquip  irure reprehederit in voluptate velit esse .</p>
                        <div class="testimonial-one__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
                <!--Testimonial One Single End-->
                <!--Testimonial One Single Start-->
                <div class="item">
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__client-info">
                            <div class="testimonial-one__client-img-box">
                                <div class="testimonial-one__client-img">
                                    <img src="{{ asset('assets/frontend/images/testimonial/testimonial-1-2.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="testimonial-one__client-details">
                                <h4 class="testimonial-one__client-name">David Cooper</h4>
                                <p class="testimonial-one__client-sub-title">CEO - Co Founder</p>
                            </div>
                        </div>
                        <p class="testimonial-one__text">Exercitation ullamco laboris nisi ut aliquip ex ea ex commodo consequat duis aute aboris nisi ut aliquip  irure reprehederit in voluptate velit esse .</p>
                        <div class="testimonial-one__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
                <!--Testimonial One Single End-->
                <!--Testimonial One Single Start-->
                <div class="item">
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__client-info">
                            <div class="testimonial-one__client-img-box">
                                <div class="testimonial-one__client-img">
                                    <img src="{{ asset('assets/frontend/images/testimonial/testimonial-1-3.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="testimonial-one__client-details">
                                <h4 class="testimonial-one__client-name">Kevin Martin</h4>
                                <p class="testimonial-one__client-sub-title">CEO - Co Founder</p>
                            </div>
                        </div>
                        <p class="testimonial-one__text">Exercitation ullamco laboris nisi ut aliquip ex ea ex commodo consequat duis aute aboris nisi ut aliquip  irure reprehederit in voluptate velit esse .</p>
                        <div class="testimonial-one__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
                <!--Testimonial One Single End-->
                <!--Testimonial One Single Start-->
                <div class="item">
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__client-info">
                            <div class="testimonial-one__client-img-box">
                                <div class="testimonial-one__client-img">
                                    <img src="{{ asset('assets/frontend/images/testimonial/testimonial-1-4.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="testimonial-one__client-details">
                                <h4 class="testimonial-one__client-name">Mike Hardson</h4>
                                <p class="testimonial-one__client-sub-title">CEO - Co Founder</p>
                            </div>
                        </div>
                        <p class="testimonial-one__text">Exercitation ullamco laboris nisi ut aliquip ex ea ex commodo consequat duis aute aboris nisi ut aliquip  irure reprehederit in voluptate velit esse .</p>
                        <div class="testimonial-one__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
                <!--Testimonial One Single End-->
            </div>
        </div>
    </section>
    <!--Testimonial One End-->

    <!--Blog One Start-->
    <section class="blog-one">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-sub-title-box">
                    <p class="section-sub-title">News & Updates</p>
                    <div class="section-title-shape-1">
                        <img src="{{ asset('assets/frontend/images/shapes/section-title-shape-1.png') }}" alt="">
                    </div>
                </div>
                <h2 class="section-title__title">Stay update with roofsie <br> news & articles</h2>
            </div>
            <div class="row">
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('assets/frontend/images/blog/blog-1-1.jpg') }}" alt="">
                        </div>
                        <div class="blog-one__content">
                            <div class="blog-one__user">
                                <div class="blog-one__user-img">
                                    <img src="{{ asset('assets/frontend/images/blog/blog-one-user-1-1.jpg') }}" alt="">
                                </div>
                                <div class="blog-one__user-content">
                                    <p>by Admin</p>
                                    <h5>January 2, 2022</h5>
                                </div>
                            </div>
                            <h3 class="blog-one__title"><a href="blog-details.html">Ex-homeless shelter head agrees to settlement</a></h3>
                            <p class="blog-one__text">Nulla commodo dolor massa, vel pellen esque nulla congue quis.</p>
                            <div class="blog-one__read-more">
                                <a href="blog-details.html">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('assets/frontend/images/blog/blog-1-2.jpg') }}" alt="">
                        </div>
                        <div class="blog-one__content">
                            <div class="blog-one__user">
                                <div class="blog-one__user-img">
                                    <img src="{{ asset('assets/frontend/images/blog/blog-one-user-1-2.jpg') }}" alt="">
                                </div>
                                <div class="blog-one__user-content">
                                    <p>by Admin</p>
                                    <h5>January 2, 2022</h5>
                                </div>
                            </div>
                            <h3 class="blog-one__title"><a href="blog-details.html">Roofing surveys paints optimistic outlook</a></h3>
                            <p class="blog-one__text">Nulla commodo dolor massa, vel pellen esque nulla congue quis.</p>
                            <div class="blog-one__read-more">
                                <a href="blog-details.html">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('assets/frontend/images/blog/blog-1-3.jpg') }}" alt="">
                        </div>
                        <div class="blog-one__content">
                            <div class="blog-one__user">
                                <div class="blog-one__user-img">
                                    <img src="{{ asset('assets/frontend/images/blog/blog-one-user-1-3.jpg') }}" alt="">
                                </div>
                                <div class="blog-one__user-content">
                                    <p>by Admin</p>
                                    <h5>January 2, 2022</h5>
                                </div>
                            </div>
                            <h3 class="blog-one__title"><a href="blog-details.html">Protect your roof with 4 winter mistakes</a></h3>
                            <p class="blog-one__text">Nulla commodo dolor massa, vel pellen esque nulla congue quis.</p>
                            <div class="blog-one__read-more">
                                <a href="blog-details.html">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
            </div>
        </div>
    </section>
    <!--Blog One End-->

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
                    <p class="cta-one__sub-title">Quality roofing provider</p>
                    <h3 class="cta-one__title">Need roofing services?</h3>
                </div>
                <div class="cta-one__btn-box">
                    <a href="contact.html" class="thm-btn cta-one__btn"> <i class="fa fa-arrow-right"></i> get free quote</a>
                </div>
            </div>
        </div>
    </section>
    <!--CTA One End-->
@endsection

@push('js')

@endpush
