@extends('layouts.frontend.app')

@section('title','Strategic Partnership')

@push('css')
    <style>
        .services-two__single1 {
            position: relative;
            display: block;
            border-radius: 10px;
            text-align: center;
            padding: 5px 0 0px;
            /* margin-bottom: 30px; */
        }
        .services-two__title1 {
            /* font-size: 24px; */
            font-weight: 800;
            line-height: 36px;
            margin-top: 5px;
            margin-bottom: 21px;
        }
        .ship-icon{
            width: 45px;
        }
        .services-two__icon1 {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 120px;
            width: 120px;
            background-color: #99774C;
            border-radius: 50%;
            margin: 0 auto;
            z-index: 1;
        }

    </style>
@endpush

@section('content')
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/frontend/images/backgrounds/partnership.png)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li>Strategic Partnership</li>
                </ul>
                <h2>STRATEGIC PARTNERSHIP</h2>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="about-three__right">
                        <div class="section-title text-left">
                            <div class="section-sub-title-box"><br><br>
                                <p class="section-sub-title d-flex">WHO WE ARE</p>
                                <div class="section-title-shape-1"><br><br>
                                    <img class="fab-icon-main" src="{{ asset('assets/frontend/images/favicons/icon.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <p class="about-three__text">Corlido Procurement Services is part of Corlido Group, a global procurement organization offering an all-round solution. From managing the tail spend to supplying specific commodities. Corlido Procurement Services is a 100% transparent partner of a sustainable extension of the client’s procurement department by handling the complete tail spend. In an optimized process with smart software solutions, structural cost and risk reductions are achieved throughout the entire procurement and logistics process.
                            <br><br>We are located across multiple global locations including Europe, Africa, South America, The Middle East, Russia and Kazakhstan. Since Corlido Group’s foundation in 1995, we have always been aiming for excellence, delivering the best service possible. Our key strength is our sustainable customer relationship, which is based on mutual trust and dedication.
                        </p>
                        <br>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-3 col-lg-5"><br><br><br><br>
                                    <div class="service-details__left">
                                        <h2 style="color: #99774C; text-align: center">SECTORS WE SERVE</h2>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-7">
                                    <div class="row">
                                        <!--Services Two Single Start-->
                                        <div class="col-xl-3 col-lg-6 col-md-6">
                                            <div class="services-two__single1">
                                                <div class="services-two__icon1">
                                                    <img class="ship-icon" src="{{ asset('assets/frontend/images/sector/icon-industry.png') }}">
                                                </div>
                                                <p>Industry</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6">
                                            <div class="services-two__single1">
                                                <div class="services-two__icon1">
                                                    <img class="ship-icon" src="{{ asset('assets/frontend/images/sector/icon-gas.png') }}">
                                                </div>
                                                <p>Oil & Gas</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6">
                                            <div class="services-two__single1">
                                                <div class="services-two__icon1">
                                                    <img class="ship-icon" src="{{ asset('assets/frontend/images/sector/icon-solar.png') }}">
                                                </div>
                                                <p>Energy</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6">
                                            <div class="services-two__single1">
                                                <div class="services-two__icon1">
                                                    <img class="ship-icon" src="{{ asset('assets/frontend/images/sector/icon-truck.png') }}">
                                                </div>
                                                <p>Transport</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6">
                                            <div class="services-two__single1">
                                                <div class="services-two__icon1">
                                                    <img class="ship-icon" src="{{ asset('assets/frontend/images/sector/icon-presentation.png') }}">
                                                </div>
                                                <p>Business and financial services</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6">
                                            <div class="services-two__single1">
                                                <div class="services-two__icon1">
                                                    <img class="ship-icon" src="{{ asset('assets/frontend/images/sector/icon-health.png') }}">
                                                </div>
                                                <p>Healthcare</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6">
                                            <div class="services-two__single1">
                                                <div class="services-two__icon1">
                                                    <img class="ship-icon" src="{{ asset('assets/frontend/images/sector/hall.png') }}">
                                                </div>
                                                <p>Education</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6">
                                            <div class="services-two__single1">
                                                <div class="services-two__icon1">
                                                    <img class="ship-icon" src="{{ asset('assets/frontend/images/sector/icon-school.png') }}">
                                                </div>
                                                <p>Public sector</p>
                                            </div>
                                        </div>
                                        <!--Services Two Single End-->
                                    </div>
                                </div>
                            </div>
                        </div><hr><br>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-3 col-lg-5"><br><br><br><br><br>
                                    <div class="service-details__left">
                                        <h2 style="color: #99774C">AT A GLANCE</h2>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-7">
                                    <div class="row">
                                        <!--Services Two Single Start-->
                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                            <div class="services-two__single1">
                                                <div class="services-two__icon1">
                                                    <p style="color: #fff">1995</p>
                                                </div>
                                                <p>Dutch founded</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                            <div class="services-two__single1">
                                                <div class="services-two__icon1">
                                                    <img class="ship-icon" src="{{ asset('assets/frontend/images/sector/globe.jpg') }}">
                                                </div>
                                                <p>Global footprint</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                            <div class="services-two__single1">
                                                <div class="services-two__icon1">
                                                    <img class="ship-icon" src="{{ asset('assets/frontend/images/sector/usd.png') }}">
                                                </div>
                                                <p> $100M turnover</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                            <div class="services-two__single1">
                                                <div class="services-two__icon1">
                                                    <p style="color: #fff">> 100</p>
                                                </div>
                                                <p>> 100 procurement<br>
                                                    & logistic professionals
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                            <div class="services-two__single1">
                                                <div class="services-two__icon1">
                                                    <img class="ship-icon" src="{{ asset('assets/frontend/images/sector/list.png') }}">
                                                </div>
                                                <p>1M<br>
                                                    order items
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                            <div class="services-two__single1">
                                                <div class="services-two__icon1">
                                                    <img class="ship-icon" src="{{ asset('assets/frontend/images/sector/quality.png') }}">
                                                </div>
                                                <p>Certified quality</p>
                                            </div>
                                        </div>
                                        <!--Services Two Single End-->
                                    </div>
                                </div>
                            </div>
                        </div><br>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-5">
                                    <div class="">
                                        <img src="{{ asset('assets/frontend/images/services/shutterstock_1781285183.jpg') }}" alt="" style="width: 471px;height: 247px;margin-top: 7px;">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-7">
                                    <p>Due to our  deep knowledge in  procurement, the  acquisition of  procurement services is handled by  experienced and best in class procurement specialists. Currently, we are the exclusive authorized agent for Corlido Group in Saudi Arabia, a global leader in procurement for oil and gas projects with over 6000 suppliers worldwide, +100$ million in turnover and +1 million order items. Dutch founded in 1995, the Dutch Corlido is a global procurement and logistics company with the ability to procure items at a low-er cost due to its economies of scale for, sourcing, and logistics bidding, piping products, project materials and MRO commodities</p>
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <p>With 27 years of experience and 24 offices worldwide boasting over 100 procurement professionals, Corlido Group is a global leader in buying and logistics services since they enjoy large economies of scale and are located in multiple global locations including Europe, Africa, South America, The Middle East, Russia, and Kazakhstan.</p>
                                    <img src="{{ asset('assets/frontend/images/backgrounds/CAF-Blog-2019-Apparel-Sourcing-Trends.jpg') }}" alt="" style="height: 470px"><br>
                                    <br><p>Coralido Group manages operational buying, order management, warehousing, logistics, and financial and administrative services. Through their expertise, Corlido is an extension of your buying organization, simultaneously boosting the process and lowering the cost price. Client portfolio consists of the oil, process, and gas industries and customers from government, healthcare, and education branches. They have supported most IOC and NOC companies and signed contracts with Shell Germany for Spend Management services and with the Government of Suriname for MRO and Piping supply agreements.</p>
                                </div>
                            </div>
                        </div><br>
                    </div>
                </div>
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
                    <a href="{{ url('contact-us') }}" class="thm-btn cta-one__btn"> <i class="fa fa-arrow-right"></i> REQUEST ADVICE</a>
                </div>
            </div>
        </div>
    </section>
    <!--CTA One End-->
@endsection

@push('js')

@endpush
