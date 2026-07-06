@extends('layouts.app')

      
@section('content')
  <!-- .page-title -->
  <div class="page-title career">
            <div class="tf-container">
                <div class="row justify-center">
                    <div class="col-lg-8">
                        <div class="content-inner">
                            <div class="heading-title">
                                <h1 class="title">A Culture of Inclusivity
                                    and Belonging</h1>
                                <p class="h6 fw-4">Thousands of luxury home enthusiasts just like you visit our website.
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.page-title -->

        <!-- .main-content -->
        <div class="main-content">

           

            <section class="section-benefits" style="margin-top:20px;">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="box-benefits">
                                <div class="wrap-image relative">
                                    <div class="image img-1  wow animate__zoomIn animate__animated"
                                        data-wow-duration="2s" data-wow-delay="0s">
                                        <img class="lazyload parallax-img"
                                            data-src="{{ asset('assets/images/section/section-benefits-1.jpg') }}"
                                            src="{{ asset('assets/images/section/section-benefits-1.jpg') }}" alt="">
                                    </div>
                                    <div class="image img-2  wow animate__zoomIn animate__animated"
                                        data-wow-duration="2s" data-wow-delay="0s">
                                        <img class="lazyload parallax-img"
                                            data-src="{{ asset('assets/images/section/section-benefits-2.jpg') }}"
                                            src="{{ asset('assets/images/section/section-benefits-2.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="content">
                                    <h2 class="title wow animate__fadeInUp animate__animated" data-wow-duration="1s"
                                        data-wow-delay="0s">Benefits when you work <br>
                                        at Proty
                                    </h2>
                                    <div class="description wow animate__fadeInUp animate__animated"
                                        data-wow-duration="1s" data-wow-delay="0s">
                                        <p class="text-1 mb-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Aenean
                                            sollicitudin ipsum ullamcorper, pulvinar ipsum in, imperdiet ante. In
                                            feugiat tortor
                                            semper nibh rhoncus volutpat. Suspendisse potenti. </p>
                                        <p class="text-1">Proin pharetra rhoncus maximus. Sed est dolor, consectetur eu
                                            sagittis
                                            a</p>
                                    </div>
                                    <div class="wrap-icon">
                                        <div class="box-icon  wow animate__zoomIn animate__animated"
                                            data-wow-duration="1s" data-wow-delay="0s">
                                            <div class="icons">
                                                <i class="icon-heart-1"></i>
                                            </div>
                                            <div class="title text-1 text-center fw-6">
                                                Health care
                                            </div>
                                        </div>
                                        <div class="box-icon  wow animate__zoomIn animate__animated"
                                            data-wow-duration="1s" data-wow-delay="0s">
                                            <div class="icons">
                                                <i class="icon-pig"></i>
                                            </div>
                                            <div class="title text-1 text-center fw-6">
                                                Attractive salary and bonus
                                            </div>
                                        </div>
                                        <div class="box-icon  wow animate__zoomIn animate__animated"
                                            data-wow-duration="1s" data-wow-delay="0s">
                                            <div class="icons">
                                                <i class="icon-family"></i>
                                            </div>
                                            <div class="title text-1 text-center fw-6">
                                                Family life
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="tf-btn bg-color-primary fw-7 pd-17 wow animate__fadeInUp animate__animated"
                                        data-wow-duration="1s" data-wow-delay="0s">Join our team</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section-review -->
            <section class="section-review tf-spacing-1">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="box-review">
                                <div class="content-left">
                                    <h2 class="title mb-32 wow animate__fadeInUp animate__animated"
                                        data-wow-duration="1s" data-wow-delay="0s">Reviews from employees working at
                                        Proty
                                    </h2>
                                    <div class="description mb-32 wow animate__fadeInUp animate__animated"
                                        data-wow-duration="1s" data-wow-delay="0s">
                                        <p class="text-1 mb-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Aenean sollicitudin ipsum ullamcorper, pulvinar ipsum in, imperdiet ante. In
                                            feugiat tortor semper nibh rhoncus volutpat.</p>
                                        <p class="text-1">Proin pharetra rhoncus maximus. Sed est dolor, consectetur eu
                                            sagittis a</p>
                                    </div>
                                    <a href="#"
                                        class="tf-btn bg-color-primary fw-7 pd-18 wow animate__fadeInUp animate__animated"
                                        data-wow-duration="1s" data-wow-delay="0s">More stories</a>
                                </div>
                                <div class="content-right">
                                    <div class="person  wow animate__zoomIn animate__animated" data-wow-duration="1s"
                                        data-wow-delay="0s">
                                        <img src="{{ asset('assets/images/section/person-3.png') }}" alt="">
                                    </div>
                                    <div class="box-author  ani5" data-wow-duration="1s" data-wow-delay="0s">
                                        <div class="avatar">
                                            <img src="{{ asset('assets/images/avatar/avt-png18.png') }}" alt="">
                                        </div>
                                        <div class="content">
                                            <h6 class="name">
                                                Cody Fisher
                                            </h6>
                                            <p class="text-2 lh-16">CEO Themesflat</p>
                                        </div>
                                    </div>
                                    <div class="ratings ani4  ani5" data-wow-duration="1s" data-wow-delay="0s">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                    <div class="wg-testimonial ani8 style-2  ani5" data-wow-duration="1s"
                                        data-wow-delay="0s">
                                        <div class="ratings ">
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                        </div>
                                        <p class="text-1 description line-clamp-3">Vivamus at nisl ornare, vulputate
                                            turpis finibus,
                                            posuere metus. Donec in placerat felis. Praesent ante tellus, dignissim nec
                                            imperdiet ac.</p>
                                        <div class="author">
                                            <div class="avatar">
                                                <img src="{{ asset('assets/images/avatar/testimonials-4.jpg') }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h6 class="name">
                                                    <a href="#">Cody Fisher</a>
                                                </h6>
                                                <p class="text-2">CEO Themesflat</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /.section-review -->

            <!-- .section-CTA -->
            <section class="section-CTA">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="content-inner">
                                <img src="{{asset('assets/images/section/cta.png') }}" alt="">
                                <div class="content">
                                    <h4 class="text_white mb-8 ">Find a Local Real Estate Agent Today</h4>
                                    <p class="text_white text-1">If you’re looking to buy or sell a home. We’ll help you
                                        make
                                        the most money
                                        possible.</p>
                                </div>
                                <a href="#" class="tf-btn style-2 fw-6 ">Find your location agent <i
                                        class="icon-MagnifyingGlass fw-6"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /.section-CTA -->

        </div> <!-- /.main-content -->

@endsection