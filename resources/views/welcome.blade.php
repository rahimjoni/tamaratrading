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
            animation: scroll 50s linear infinite;
            display: flex;
            width: calc(250px * 14);
        }
        .sliderTest .slide {
            height: 100px;
            width: 250px;
            margin-top: 25px;
        }
        .serve-p{
            margin-top: 10px;
            color: #fff;
            margin-bottom: 60px;
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
                "delay": 6000
                }}'>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url(assets/frontend/images/backgrounds/cover-02.png);"></div>
                    <!-- /.image-layer -->

                    <div class="container"><br>
                        <div class="row">
                            <div class="col-xl-7 col-lg-8 col-sm-7 col-md-7">
                                <div class="main-slider__content"><br><br>
                                    <h5 class="main-slider__title"><b style="font-size: 55px">TAMARA TRADING</b></h5><br>
                                    <p class="main-slider__sub-title">Part of <b>TAMARA GROUP</b></p>
                                    <h5 class="main-slider__title">EXCLUSIVE AGENT OF <b>CORLIDO GROUP</b></h5>
                                    <img class="wow fadeInUp img-fluid" data-wow-delay="100ms"
                                         data-wow-duration="2500ms" src="{{ asset('assets/frontend/images/partner/logo-corlido.png') }}" style="width: 90px">
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
                            <div class="col-xl-7 col-lg-8 col-sm-7 col-md-7">
                                <div class="main-slider__content"><br><br><br>
                                    <h5 class="main-slider__title"><b style="font-size: 55px">TAMARA TRADING</b></h5><br>
                                    <p class="main-slider__sub-title">Part of <b>TAMARA GROUP</b></p>
                                    <h5 class="main-slider__title">EXCLUSIVE AGENT OF <b>CORLIDO GROUP</b></h5>
                                    <img class="wow slideInUp img-fluid" data-wow-delay="100ms"
                                         data-wow-duration="2500ms" src="{{ asset('assets/frontend/images/partner/logo-corlido.png') }}" style="width: 90px">
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
            <img class="img-fluid" src="{{ asset('assets/frontend/images/shapes/services-two-shape-1.png') }}" alt="">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <div class="section-sub-title-box">
                    <p class="section-sub-title">OFFERINGS</p>
                    <div class="section-title-shape-1">
                        <img class="fab-icon-main img-fluid" src="{{ asset('assets/frontend/images/favicons/icon.png') }}" alt="">
                    </div>
                </div>
                <h2 class="section-title__title">TAMARA TRADING OFFERINGS</h2>
            </div>
            <div class="row">
                <!--Services Two Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-4 wow fadeInUp animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                    <div class="services-two__single" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0.8), rgba(0,0,0,0.7)),url(assets/frontend/images/backgrounds/project-supply.png); background-size: cover; background-position: center; background-repeat: no-repeat;">
                        <div class="services-two__icon">
                            <i class="fa fa-plus"></i>
                        </div>
                        <h3 class="services-two__title"><a href="{{ url('project-supply') }}">PROJECT SUPPLY</a></h3>
                        <div class="services-two__read-more">
                            <a href="{{ url('project-supply') }}"> More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!--Services Two Single End-->
                <!--Services Two Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-4 wow fadeInUp animated" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                    <div class="services-two__single" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0.8), rgba(0,0,0,0.7)),url(assets/frontend/images/backgrounds/pipe-supply.png); background-size: cover; background-position: center; background-repeat: no-repeat;">
                        <div class="services-two__icon">
                            <i class="fa fa-plus"></i>
                        </div>
                        <h3 class="services-two__title"><a href="{{ url('piping') }}">PIPING SUPPLY</a>
                        </h3>
                        <div class="services-two__read-more">
                            <a href="{{ url('piping') }}"> More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!--Services Two Single End-->
                <!--Services Two Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-4 wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                    <div class="services-two__single" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0.8), rgba(0,0,0,0.7)),url(assets/frontend/images/backgrounds/mro-supply.png); background-size: cover; background-position: center; background-repeat: no-repeat;">
                        <div class="services-two__icon">
                            <i class="fa fa-plus"></i>
                        </div>
                        <h3 class="services-two__title"><a href="{{ url('mro') }}">MRO SUPPLY</a>
                        </h3>
                        <div class="services-two__read-more">
                            <a href="{{ url('mro') }}"> More <i class="fa fa-arrow-right"></i></a>
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
                <img class="img-fluid" src="{{ asset('assets/frontend/images/resources/cta-one-img-1.jpg') }}" alt="">
            </div>
        </div>
        <div class="container">
            <div class="cta-one__inner">
                <div class="cta-one__left">
                    <p class="cta-one__sub-title">Need our services?</p>
                    <h3 class="cta-one__title">WE OPTIMIZE YOUR PROCUREMENT PROCESS</h3>
                </div>
                <div class="cta-one__btn-box">
                    <a href="{{ url('contact-us') }}" class="thm-btn cta-one__btn"> <i class="fa fa-arrow-right"></i>SEND REQUEST</a>
                </div>
            </div>
        </div>
    </section><br><br>
    <!--CTA One End-->

    <!--About One Start-->
    <section class="about-one">
        <div class="about-one__shape float-bob-x">
            <img class="img-fluid" src="{{ asset('assets/frontend/images/shapes/about-one-shape.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__left">
                        <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms"
                             data-wow-duration="2500ms">
                            <div class="about-one__img">
                                <img class="img-fluid" src="{{ asset('assets/frontend/images/backgrounds/about-home.png') }}" alt="">
                            </div>
                            <div class="about-one__line">
                                <img class="img-fluid" src="{{ asset('assets/frontend/images/shapes/about-one-line.png') }}" alt="">
                            </div>
                            <div class="about-one__satisfied">
                                <div class="about-one__satisfied-inner">
                                    <div class="about-one__satisfied-shape">
                                        <img class="img-fluid" src="{{ asset('assets/frontend/images/shapes/about-one-satisfied-shape-1.png') }}" alt="">
                                    </div>
                                    <div class="about-one__satisfied-content">
                                        <div class="about-one__satisfied-count-box">
                                            <h3 class="odometer" data-count="6000">6000</h3>
                                        </div>
                                        <p class="about-one__satisfied-text"> Suppliers World-Wide</p>
                                    </div>
                                </div>
                            </div>
                            <div class="about-one__big-text">TAMARA TRADING</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-lg-6">
                    <div class="about-one__right">
                        <div class="section-title text-left">
                            <div class="section-sub-title-box">
                                <p class="section-sub-title">ABOUT TAMARA TRADING</p>
                                <div class="section-title-shape-1">
                                    <img class="fab-icon-main img-fluid" src="{{ asset('assets/frontend/images/favicons/icon.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <p class="about-one__text">Tamara Trading provides high-end products and services and is currently based in Al Khobar, Saudi Arabia. Currently, we are the exclusive authorized agent for Corlido Group in Saudi Arabia, a global leader in procurement for oil and gas projects with over 6000 suppliers world- wide, more than 100$ million in turnover, and 1 million order items. As an official representative of a global company, we have the ability to procure items at a lower cost due to their economies of scale for procurement, sourcing, piping products materials and, projects and MRO commodities.</p><br>
                        <p class="about-one__text">We are primarily a trading company that source products and materials for industrial projects. Our product portfolio includes project materials, rotating and static equipment, MRO, piping materials, such as pipes, fittings, flanges, unique forged products, O-let/branch fittings, valves, studs, and gaskets. Our scope of delivery meets global standards and the most stringent end-user specifications.</p><br>
                        <a href="{{ url('about-us') }}" class="thm-btn about-one__btn"> <i class="fa fa-arrow-right"></i> Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About One End-->
    <section class="why-choose-two">
        <div class="why-choose-two-bg" style="background-image: url(assets/frontend/images/backgrounds/partnership.png);"></div>
        <div class="container" style="text-align: center">
            <div class="section-title text-center">
                <div class="section-sub-title-box">
                    <p class="section-sub-title">SECTORS WE SERVE</p>
                    <div class="section-title-shape-1">
                        <img class="fab-icon-main img-fluid" src="{{ asset('assets/frontend/images/favicons/icon.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <!--Services Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="services-two__single1">
                        <div class="services-two__icon1">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/sector/icon-industry.png') }}">
                        </div>
                        <p class="serve-p">Industry</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="services-two__single1">
                        <div class="services-two__icon1">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/sector/icon-gas.png') }}">
                        </div>
                        <p class="serve-p">Oil & Gas</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="services-two__single1">
                        <div class="services-two__icon1">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/sector/icon-solar.png') }}">
                        </div>
                        <p class="serve-p">Energy</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="services-two__single1">
                        <div class="services-two__icon1">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/sector/icon-truck.png') }}">
                        </div>
                        <p class="serve-p">Transport</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="services-two__single1">
                        <div class="services-two__icon1">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/sector/icon-presentation.png') }}">
                        </div>
                        <p class="serve-p">Business and financial</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="services-two__single1">
                        <div class="services-two__icon1">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/sector/icon-health.png') }}">
                        </div>
                        <p class="serve-p">Healthcare</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="services-two__single1">
                        <div class="services-two__icon1">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/sector/hall.png') }}">
                        </div>
                        <p class="serve-p">Education</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="services-two__single1">
                        <div class="services-two__icon1">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/sector/icon-school.png') }}">
                        </div>
                        <p class="serve-p">Public sector</p>
                    </div>
                </div>
                <!--Services Two Single End-->
            </div>
        </div>
    </section><br>
    <!--Why Choose One Start-->

    <!--Brand One Start-->
    <section class="brand-one">
        <div class="brand-one__inner">
            <div class="brand-one__shape-1">
                <img class="img-fluid" src="{{ asset('assets/frontend/images/shapes/brand-one-shape-1.png') }}" alt="">
            </div>
            <div class="brand-one__shape-2 float-bob-y">
                <img class="img-fluid" src="{{ asset('assets/frontend/images/shapes/brand-one-shape-2.png') }}" alt="">
            </div>
            <div class="container">
                <div class="sliderTest">
                    <div class="slide-track">
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/aramco1.png') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="80" alt="" />
                        </div>
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/Nobian1.png') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="80" alt="" />
                        </div>
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/rdw.png') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="80" alt="" />
                        </div>
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/lng1.png') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="80" alt="" />
                        </div>
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/ar.jpg') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="80" alt="" />
                        </div>
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/GE1.png') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="80" alt="" />
                        </div>
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/ye1.png') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="60" alt="" />
                        </div>
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/cbre.png') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="80" alt="" />
                        </div>
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/cargill.jpg') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="80" alt="" />
                        </div>
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/3M1.png') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="80" alt="" />
                        </div>
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/eaton.png') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="80" alt="" />
                        </div>
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/sabic1.png') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="80" alt="" />
                        </div>
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/staatsolie_logo_rgb.png') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="80" alt="" />
                        </div>
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/taqa-og-300.png') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="80" alt="" />
                        </div>
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/Philips_logo.png') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="80" alt="" />
                        </div>
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/lynkco.png') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="80" alt="" />
                        </div>
                        <div class="slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/partner/huntsman.png') }}" style="margin-left: 25px; margin-right: 25px" height="50" width="80" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><br>
    <!--Brand One End-->
@endsection

@push('js')

@endpush
