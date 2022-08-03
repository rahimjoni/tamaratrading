@extends('layouts.frontend.app')

@section('title','MRO SUPPLY')

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
        <div class="page-header-bg" style="background-image: url(assets/frontend/images/backgrounds/mro.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li>MRO SUPPLY</li>
                </ul>
                <h2>MRO SUPPLY</h2>
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

                                <li><a href="{{ url('/project') }}">PROJECT SUPPLY <span class="fa fa-angle-right"></span></a></li>

                                <li><a href="{{ url('/piping') }}">PIPING SUPPLY <span class="fa fa-angle-right"></span></a></li>

                                <li class="active"><a href="{{ url('/mro') }}">MRO SUPPLY <span class="fa fa-angle-right"></span></a></li>

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
                            <p class="service-details__text-1"><b>Maintenance , repair and overhaul supplies are very important for industrial plants operation. To minimize operations interruption and high operating costs, Tamara ensures that the annual maintenance plan runs smoothly with a schedule of parts needed delivered promptly, on budget , and backed by our expert partners to ensure best-practice repairs supported by knowledgeable and trained technicians that can troubleshoot any problem.<br><br>

                                    We help organizations to reduce in direct costs and optimize the procurement process. Outsourcing in direct procurement , in particular , brings many advantages. You can focus on your core activities, keep full control and continue to determine which products/services are purchased from which suppliers and under which conditions.<br><br>
                                    This is a typical need in the industry , and Tamara trading can help you plan out your maintenance schedule to ensure every thing runs smoothly with minimal interruption to operational efficiency .
                                </b></p>
                        </div>
                    </div><br>
                    <div class="container">
                        <div class="row">
                            <!--Blog One Single Start-->
                            <h2 style="color: #99774C">SCOPE OF SUPPLY – PROJECT SUPPLY (MRO)</h2><br><br>
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="blog-one__single">
                                    <div class="blog-one__img">
                                        <img class="img-fluid" src="{{ asset('assets/frontend/images/mro/str.jpg') }}" alt="">
                                        <p>Structural Steel/ Steel constructions Electrical
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--Blog One Single End-->
                            <!--Blog One Single Start-->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="blog-one__single">
                                    <div class="blog-one__img">
                                        <img class="img-fluid" style="width: 50%" src="{{ asset('assets/frontend/images/mro/ele.jpg') }}" alt="">
                                        <p>Electrical & Instrumentation
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--Blog One Single End-->
                            <!--Blog One Single Start-->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="blog-one__single">
                                    <div class="blog-one__img">
                                        <img class="img-fluid" src="{{ asset('assets/frontend/images/mro/cable.jpg') }}" alt="">
                                        <p>Electrical Cable & Accessories </p>
                                    </div>
                                </div>
                            </div>
                            <!--Blog One Single End-->
                            <!--Blog One Single Start-->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="blog-one__single">
                                    <div class="blog-one__img">
                                        <img class="img-fluid" src="{{ asset('assets/frontend/images/mro/fil.jpg') }}" alt="">
                                        <p>Filtration products</p>
                                    </div>
                                </div>
                            </div>
                            <!--Blog One Single End-->
                            <!--Blog One Single Start-->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="blog-one__single">
                                    <div class="blog-one__img">
                                        <img class="img-fluid" src="{{ asset('assets/frontend/images/mro/cable-man.jpg') }}" alt="">
                                        <p>Cable management</p>
                                    </div>
                                </div>
                            </div>
                            <!--Blog One Single End-->
                            <!--Blog One Single Start-->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="blog-one__single">
                                    <div class="blog-one__img">
                                        <img class="img-fluid" src="{{ asset('assets/frontend/images/mro/pet.jpg') }}" alt="">
                                        <p>Petrochemical</p>
                                    </div>
                                </div>
                            </div>
                            <!--Blog One Single End--><!--Blog One Single Start-->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="blog-one__single">
                                    <div class="blog-one__img">
                                        <img class="img-fluid" src="{{ asset('assets/frontend/images/mro/spare-parts1.jpg') }}" alt="">
                                        <p>Spare parts</p>
                                    </div>
                                </div>
                            </div>
                            <!--Blog One Single End--><!--Blog One Single Start-->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="blog-one__single">
                                    <div class="blog-one__img">
                                        <img class="img-fluid" src="{{ asset('assets/frontend/images/mro/spare-parts2.jpg') }}" alt="">
                                        <p>Spare parts</p>
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
