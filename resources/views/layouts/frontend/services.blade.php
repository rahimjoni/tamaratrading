@extends('layouts.frontend.app')

@section('title','Contact Us')

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
                    <li>Services</li>
                </ul>
                <h2>Procurement</h2>
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

                                <li class="active"><a href="modified-roofing.html">Procurement <span class="fa fa-angle-right"></span></a></li>

                                <li><a href="built-up-roofing.html">Piping Supply <span class="fa fa-angle-right"></span></a></li>

                                <li><a href="roof-inspection.html">Material Handling <span class="fa fa-angle-right"></span></a></li>

                                <li><a href="roof-installation.html">E-Procurement <span class="fa fa-angle-right"></span></a></li>

                            </ul>
                        </div> <br>
                        <div class="service-details__need-help">
                            <div class="service-details__need-help-bg" style="background-image: url(assets/frontend/images/backgrounds/inner-banner-16.png)">
                            </div>
                            <div class="service-details__need-help-icon">
                                <span class="icon-phone-call"></span>
                            </div>
                            <h2 class="service-details__need-help-title">Best solution <br> to your house &amp; <br> office roofing</h2>
                            <div class="service-details__need-help-contact">
                                <p>Call Anytime</p>
                                <a href="tel:92003680903"> +92 (003) 68-090</a>
                            </div>
                        </div>
                        <div class="service-details__download">
                            <a href="contact.html" class="thm-btn service-details__btn"> <i class="fa fa-arrow-right"></i> Get a free quote</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="service-details__right">
                        <div class="service-details__img">
                            <img src="{{ asset('assets/frontend/images/services/services-details-img-2.jpg') }}" alt="">
                        </div>
                        <div class="service-details__content">
                            <h3 class="service-details__content-title">Modified roofing</h3>
                            <p class="service-details__text-1">Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ndustry standard dummy text ever since the 1500s.</p>
                            <p class="service-details__text-2">When an unknown printer took a galley type and scrambled it to make a type specimen book.</p>
                            <p class="service-details__text-3">It has survived not only five centuries. Lorem Ipsum is simply dummy text of the new design printng and type setting Ipsum take a look at our round. When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                        </div>
                        <div class="service-details__points-box">
                            <ul class="list-unstyled service-details__points">
                                <li>
                                    <div class="service-details__points-icon">
                                        <span class="icon-roof"></span>
                                    </div>
                                    <div class="service-details__points-content">
                                        <p>Duis aute irure dolor in <br> reprehenderit in voluptate <br> velit esse cillum.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="service-details__points-icon">
                                        <span class="icon-roof-1"></span>
                                    </div>
                                    <div class="service-details__points-content">
                                        <p>Duis aute irure dolor in <br> reprehenderit in voluptate <br> velit esse cillum.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <p class="service-details__text-4">When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting. Lorem Ipsum has been the ndustry standard dummy text ever since the 1500s.</p>
                        <div class="service-details__benefits">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="service-details__benefits-single">
                                        <div class="service-details__benefits-img">
                                            <img src="{{ asset('assets/frontend/images/services/service-details-benefits-img-1.jpg') }}" alt="">
                                        </div>
                                        <div class="service-details__benefits-content">
                                            <h3 class="service-details__benefits-title">Service benefits</h3>
                                            <p class="service-details__benefits-text">When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="service-details__benefits-single">
                                        <div class="service-details__benefits-img">
                                            <img src="{{ asset('assets/frontend/images/services/service-details-benefits-img-2.jpg') }}" alt="">
                                        </div>
                                        <div class="service-details__benefits-content">
                                            <ul class="list-unstyled service-details__benefits-points">
                                                <li>
                                                    <div class="icon">
                                                        <i class="fa fa-arrow-right"></i>
                                                    </div>
                                                    <div class="text">
                                                        <p>In id diam nec nisi congue tincidunt</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <i class="fa fa-arrow-right"></i>
                                                    </div>
                                                    <div class="text">
                                                        <p>Pn malesuada purus a ligula dapibus</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <i class="fa fa-arrow-right"></i>
                                                    </div>
                                                    <div class="text">
                                                        <p>Vestibulum tincidunt arcu vel nisl</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <i class="fa fa-arrow-right"></i>
                                                    </div>
                                                    <div class="text">
                                                        <p>Sed tristique lorem non tesque</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
@endsection

@push('js')

@endpush
