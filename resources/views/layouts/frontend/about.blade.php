@extends('layouts.frontend.app')

@section('title','About Us')

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
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/frontend/images/backgrounds/inner-banner-16.png)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li>About Us</li>
                </ul>
                <h2>About Us</h2>
            </div>
        </div>
    </section>

    <section class="about-three about-four">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-three__left">
                        <div class="about-three__img-box wow slideInLeft animated" data-wow-delay="100ms" data-wow-duration="2500ms" style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInLeft;">
                            <div class="about-three__img">
                                <img src="{{ asset('assets/frontend/images/resources/about-three-img-1.jpg') }}" alt="">
                            </div>
                            <div class="about-three__img-two">
                                <img src="{{ asset('assets/frontend/images/resources/about-three-img-2.jpg') }}" alt="">
                            </div>
                            <div class="about-three__border"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-three__right">
                        <div class="section-title text-left">
                            <div class="section-sub-title-box">
                                <p class="section-sub-title">About TAMARA TRADING</p>
                                <div class="section-title-shape-1">
                                    <img class="fab-icon-main" src="{{ asset('assets/frontend/images/favicons/icon.png') }}" alt="">
                                </div>
                            </div>
                            <h2 class="section-title__title">Roofsie - exceptional roofing services</h2>
                        </div>
                        <p class="about-three__text">Nulla commodo dolor massa, vel pellentesque nulla congue quis. Fusce ut convallis diam. Nam id tortor et nunc tempor faucibus. Sed eu leo egestas, imperdiet felis sed, vestibulum ligula.</p>
                        <ul class="list-unstyled about-three__point">
                            <li>
                                <div class="icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="text">
                                    <p>Exploring version oflorem veritatis proin</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="text">
                                    <p>Auctor aliquet aenean simply free text veritatis quis</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="text">
                                    <p>Consequat ipsum nec lorem sagittis sem nibh.</p>
                                </div>
                            </li>
                        </ul>
                        <a href="about.html" class="thm-btn about-three__btn"> <i class="fa fa-arrow-right"></i> Discover more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Trust Company Start-->
    <section class="trust-company">
        <div class="trust-company-shape-1">
            <img src="{{ asset('assets/frontend/images/shapes/traust-company-shape-1.png') }}" alt="">
        </div>
        <div class="trust-company-shape-2"></div>
        <div class="trust-company-shape-3"></div>
        <div class="trust-company-shape-4"></div>
        <div class="trust-company-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(assets/frontend/images/backgrounds/trust-company-bg.jpg);"></div>
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

    <section class="about-three about-four">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-three__left">
                        <div class="about-three__img-box wow slideInLeft animated" data-wow-delay="100ms" data-wow-duration="2500ms" style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInLeft;">
                            <div class="about-three__img">
                                <img src="{{ asset('assets/frontend/images/resources/about-three-img-1.jpg') }}" alt="">
                            </div>
                            <div class="about-three__img-two">
                                <img src="{{ asset('assets/frontend/images/resources/about-three-img-2.jpg') }}" alt="">
                            </div>
                            <div class="about-three__border"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-three__right">
                        <div class="section-title text-left">
                            <div class="section-sub-title-box">
                                <p class="section-sub-title">About EXPERTS</p>
                                <div class="section-title-shape-1">
                                    <img class="fab-icon-main" src="{{ asset('assets/frontend/images/favicons/icon.png') }}" alt="">
                                </div>
                            </div>
                            <h2 class="section-title__title">Roofsie - exceptional roofing services</h2>
                        </div>
                        <p class="about-three__text">Nulla commodo dolor massa, vel pellentesque nulla congue quis. Fusce ut convallis diam. Nam id tortor et nunc tempor faucibus. Sed eu leo egestas, imperdiet felis sed, vestibulum ligula.</p>
                        <ul class="list-unstyled about-three__point">
                            <li>
                                <div class="icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="text">
                                    <p>Exploring version oflorem veritatis proin</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="text">
                                    <p>Auctor aliquet aenean simply free text veritatis quis</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="text">
                                    <p>Consequat ipsum nec lorem sagittis sem nibh.</p>
                                </div>
                            </li>
                        </ul>
                        <a href="about.html" class="thm-btn about-three__btn"> <i class="fa fa-arrow-right"></i> Discover more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
    </section>
    <!--CTA One End-->
@endsection

@push('js')

@endpush
