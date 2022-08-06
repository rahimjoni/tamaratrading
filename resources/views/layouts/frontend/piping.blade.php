@extends('layouts.frontend.app')

@section('title','Piping')

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
    </style>
@endpush

@section('content')
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/frontend/images/backgrounds/pipe.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li>Piping Supply</li>
                </ul>
                <h2>PIPING SUPPLY</h2>
            </div>
        </div>
    </section>

    <section class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="service-details__left">
                        <div class="service-details__category">
                            <ul class="service-details__category-list list-unstyled">

                                <li><a href="{{ url('/project-supply') }}">PROJECT SUPPLY <span class="fa fa-angle-right"></span></a></li>

                                <li class="active"><a href="{{ url('/piping') }}">PIPING SUPPLY <span class="fa fa-angle-right"></span></a></li>

                                <li><a href="{{ url('mro') }}">MRO SUPPLY <span class="fa fa-angle-right"></span></a></li>

                            </ul>
                        </div> <br>
                        <div class="service-details__need-help">
                            <div class="service-details__need-help-bg" style="background-image: url(assets/frontend/images/backgrounds/project.jpg)">
                            </div>
                            <div class="service-details__need-help-icon">
                                <span class="icon-phone-call"></span>
                            </div>
                            <h2 class="service-details__need-help-title">For The Best Solution</h2>
                            <div class="service-details__need-help-contact">
                                <p>Call Anytime</p>
                                <a href="tel:+966 13 830 2223 "> +966 13 830 2223 </a>
                            </div>
                        </div>
                        <div class="service-details__download">
                            <a href="{{ url('contact-us') }}" class="thm-btn service-details__btn"> <i class="fa fa-arrow-right"></i> Get a free quote</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="service-details__right">
                        <div class="service-details__content">
                            <p class="service-details__text-1"><b>We are specialists in supplying pipes and their products, Our product portfolio includes pipes, fittings, flanges, special forged products, O-let/branch fittings, valves, studs and gaskets. Our scope of delivery meets global standards and the most stringent end-user specifications.</p>
                        </div>
                    </div><br>
                    <div class="container">
                        <div class="row">
                            <!--Blog One Single Start-->
                            <h2 style="color: #99774C">Products</h2><br>
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="blog-one__single">
                                    <div class="blog-one__img">
                                        <img class="img-fluid" src="{{ asset('assets/frontend/images/pipe/values.jpg') }}" alt="">
                                        <p>Valves</p>
                                    </div>
                                </div>
                            </div>
                            <!--Blog One Single End-->
                            <!--Blog One Single Start-->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="blog-one__single">
                                    <div class="blog-one__img">
                                        <img class="img-fluid" src="{{ asset('assets/frontend/images/pipe/flanges.jpg') }}" alt="">
                                        <p>Flanges</p>
                                    </div>
                                </div>
                            </div>
                            <!--Blog One Single End-->
                            <!--Blog One Single Start-->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="blog-one__single">
                                    <div class="blog-one__img">
                                        <img class="img-fluid" src="{{ asset('assets/frontend/images/pipe/fittings.jpg') }}" alt="">
                                        <p>Fittings</p>
                                    </div>
                                </div>
                            </div>
                            <!--Blog One Single End-->
                            <!--Blog One Single Start-->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="blog-one__single">
                                    <div class="blog-one__img">
                                        <img class="img-fluid" src="{{ asset('assets/frontend/images/pipe/pipes.png') }}" alt="">
                                        <p>Pipe</p>
                                    </div>
                                </div>
                            </div>
                            <!--Blog One Single End-->
                            <!--Blog One Single Start-->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="blog-one__single">
                                    <div class="blog-one__img">
                                        <img class="img-fluid" src="{{ asset('assets/frontend/images/pipe/engineered.jpg') }}" alt="">
                                        <p>ENGINEERED SOLUTIONS</p>
                                    </div>
                                </div>
                            </div>
                            <!--Blog One Single End-->
                            <!--Blog One Single Start-->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="blog-one__single">
                                    <div class="blog-one__img">
                                        <img class="img-fluid" src="{{ asset('assets/frontend/images/pipe/MISCELLANEOUS.jpg') }}" alt="">
                                        <p>MISCELLANEOUS</p>
                                    </div>
                                </div>
                            </div>
                            <!--Blog One Single End--><!--Blog One Single Start-->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="blog-one__single">
                                    <div class="blog-one__img">
                                        <img class="img-fluid" src="{{ asset('assets/frontend/images/pipe/Structural Steel Steel constructions.jpg') }}" alt="">
                                        <p>Structural Steel/ Steel constructions</p>
                                    </div>
                                </div>
                            </div>
                            <!--Blog One Single End--><!--Blog One Single Start-->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="blog-one__single">
                                    <div class="blog-one__img">
                                        <img class="img-fluid" style="width: 70%" src="{{ asset('assets/frontend/images/pipe/drill.jpg') }}" alt="">
                                        <p>Drill equipment</p>
                                    </div>
                                </div>
                            </div>
                            <!--Blog One Single End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
