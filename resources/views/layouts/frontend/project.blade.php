@extends('layouts.frontend.app')

@section('title','Project SUPPLY')

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
        <div class="page-header-bg" style="background-image: url(assets/frontend/images/backgrounds/project.jpg); background-position: center; background-size: cover">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li>Project Supply</li>
                </ul>
                <h2>PROJECT SUPPLY</h2>
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

                                <li class="active"><a href="{{ url('/project') }}">PROJECT SUPPLY <span class="fa fa-angle-right"></span></a></li>

                                <li><a href="{{ url('/piping') }}">PIPING SUPPLY <span class="fa fa-angle-right"></span></a></li>

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
                        <div class="row">
                            <div class="col-xl-6">
                                <ul class="list-unstyled service-details__benefits-points">
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                        <div class="text">
                                            <p>Piping, materials, valves and accessories</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                        <div class="text">
                                            <p>Automation equipment</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                        <div class="text">
                                            <p>Mechanical static</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                        <div class="text">
                                            <p>Drilling and wall completion equipment</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                        <div class="text">
                                            <p>Electrical equipment</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                        <div class="text">
                                            <p>Instrumentation Equipment</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xl-6">
                                <ul class="list-unstyled service-details__benefits-points">
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                        <div class="text">
                                            <p>Structural steel</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                        <div class="text">
                                            <p>Rotating equipment</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                        <div class="text">
                                            <p>Chemicals and lubricants</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                        <div class="text">
                                            <p>Laboratory equipment</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                        <div class="text">
                                            <p>OEM spare parts</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                        <div class="text">
                                            <p>Tools and machinery</p>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                    </div>
                    <div class="service-details__right">
                        <div class="service-details__content">
                            <p class="service-details__text-1" style="text-align: justify">Our process is designed to work with clients aiming to create value-added services to their companies. Our executives have hands-on experience and are very familiar with industrial projects from initial basic design throughout engineering, procurement, and construction until commissioning. This means that your purchasing teams do not need to devote expensive resources to managing large volumes of low-value orders. In addition, we provide low-cost alternatives and a second source on key components.</p>
                        </div>
                    </div><br>
                    <section class="">
                        <div class="container">
                            <div class="page-header__inner">
                                <div class="row" style="padding: 8px 0px;color: #fff;background-image: url(assets/frontend/images/backgrounds/po-1.png);">
                                    <div class="col-md-6"><h3 style="color: #fff">INVOICE AND SUPPLIER BASE REDUCTION</h3></div>
                                    <div class="col-md-6"><p style="text-align: justify">We are one supplier, managing thousands for you. Replacing the large group of c-suppliers by one overall supplier means a reduction of your supplier base, up to 80%.</p></div>
                                </div><br>
                                <div class="row" style="padding: 8px 0px;color: #fff;background-image: url(assets/frontend/images/backgrounds/po-2.png);">
                                    <div class="col-md-6"><h3 style="color: #fff">LOWER TCO</h3></div>
                                    <div class="col-md-6"><p style="text-align: justify">Corlido  Group  reduces your indirect costs to a bare minimum. According to Corlido Group’s experience, organizations can save up to 21% on costs, productivity, and efficiency.</p> </div>
                                </div><br>
                                <div class="row" style="padding: 8px 0px;color: #fff;background-image: url(assets/frontend/images/backgrounds/po-3.png);">
                                    <div class="col-md-6"><h3 style="color: #fff">COMPLIANCE</h3></div>
                                    <div class="col-md-6"><p style="text-align: justify">Our extensive customized management reporting provides the necessary insights to bundle further and structure purchasing flows. Your spend 100% under control, and maverick buying will be reduced.</p></div>
                                </div><br>
                                <div class="row" style="padding: 8px 0px;color: #fff;background-image: url(assets/frontend/images/backgrounds/po-4.png);">
                                    <div class="col-md-6"><h3 style="color: #fff">CYCLE-TIME REDUCTION</h3></div>
                                    <div class="col-md-6"><p style="text-align: justify">Through intelligent software solutions, catalogs, and procedures for sourcing, tendering, and expediting your business will receive their purchases sooner.</p></div>
                                </div>
                            </div>
                        </div>
                    </section><br>
                    <div class="service-details__right">
                        <div class="service-details__img">
                            <img src="{{ asset('assets/frontend/images/services/shutterstock_1781285183.jpg') }}" alt="">
                        </div><br>
                        <p class="service-details__text-4" style="text-align: justify">Tamara Trading has developed an efficient concept. The single creditor model – one overall supplier for the complete tail spend. We are an independent supplier with no set assortment. We can deliver a truly unlimited range of products backed by deep industry knowledge for fit.</p>
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
