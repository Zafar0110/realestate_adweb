@extends('layouts.app')

      
@section('content')





        <!-- flat-title -->
        <section class="flat-title ">
            <div class="tf-container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-inner ">
                            <ul class="breadcrumb">
                                <li><a class="home fw-6 text-color-3" href="index.html">Home</a></li>
                                <li>Property Listing</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /flat-title -->

        <!-- .main-content -->
        <div class="page-content">

            <!-- section-agent -->
            <section class="section-agent ">
                <div class="tf-container">
                    <div class="row">
                        <div class="box-title style-2 mb-48">
                            <h2>Agents</h2>
                            <div class="wrap-sort">
                                <form>
                                    <fieldset>
                                        <input class="" type="text" placeholder="Agent name" name="name" tabindex="2"
                                            aria-required="true">
                                    </fieldset>
                                </form>
                                <div class="nice-select" tabindex="0">
                                    <span class="current ">All agency</span>
                                    <ul class="list">
                                        <li data-value="" class="option selected focus">All agency</li>
                                        <li data-value="floating" class="option">Floating baths</li>
                                        <li data-value="massage" class="option">Massage baths</li>
                                        <li data-value="floor-standing" class="option">Floor-standing bath</li>
                                        <li data-value="built-in" class="option">Built-in baths</li>
                                    </ul>
                                </div>
                                <div class="nice-select" tabindex="0">
                                    <span class="current">All location</span>
                                    <ul class="list">
                                        <li data-value="" class="option selected focus">All location</li>
                                        <li data-value="floating" class="option">Floating baths</li>
                                        <li data-value="massage" class="option">Massage baths</li>
                                        <li data-value="floor-standing" class="option">Floor-standing bath</li>
                                        <li data-value="built-in" class="option">Built-in baths</li>
                                    </ul>
                                </div>
                                <div class="nice-select select-sort style-2 " tabindex="0"><span class="current">Sort by
                                        (Default)</span>
                                    <ul class="list">
                                        <li data-value="default" class="option selected">Sort by (Default)</li>
                                        <li data-value="new" class="option">Newest</li>
                                        <li data-value="old" class="option">Oldest</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=" tf-grid-layout-2 lg-col-4 md-col-3 sm-col-2">
                            <div class="agent-item hover-img ">
                                <div class="image-wrap">
                                    <a href="/agent-detailed">
                                        <img class="lazyload" data-src="{{ asset('assets/images/section/agent-item-1.jpg') }}"
                                            src="{{ asset('assets/images/section/agent-item-1.jpg') }}" alt="">
                                    </a>
                                    <ul class="tf-social style-3">
                                        <li><a href="#"><i class="icon-fb"></i></a></li>
                                        <li><a href="#"><i class="icon-X"></i></a></li>
                                        <li><a href="#"><i class="icon-linked"></i></a></li>
                                        <li><a href="#"><i class="icon-ins"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <div class="author">
                                        <h5 class="name lh-30"><a href="/agent-detailed">Leslie Alexander</a></h5>
                                        <p class="text-2 lh-18">Sale agent</p>
                                    </div>
                                    <div class="wrap-btn-icon">
                                        <a href="#" class="btn-icon"><i class="icon-phone-3"></i></a>
                                        <a href="#" class="btn-icon"><i class="icon-letter"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="agent-item hover-img">
                                <div class="image-wrap">
                                    <a href="agents-details.html">
                                        <img class="lazyload" data-src="{{ asset('assets/images/section/agent-item-2.jpg') }}"
                                            src="{{ asset('assets/images/section/agent-item-2.jpg') }}" alt="">
                                    </a>
                                    <ul class="tf-social style-3">
                                        <li><a href="#"><i class="icon-fb"></i></a></li>
                                        <li><a href="#"><i class="icon-X"></i></a></li>
                                        <li><a href="#"><i class="icon-linked"></i></a></li>
                                        <li><a href="#"><i class="icon-ins"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <div class="author">
                                        <h5 class="name lh-30"><a href="agents-details.html">Leslie Alexander</a></h5>
                                        <p class="text-2 lh-18">Sale agent</p>
                                    </div>
                                    <div class="wrap-btn-icon">
                                        <a href="#" class="btn-icon"><i class="icon-phone-3"></i></a>
                                        <a href="#" class="btn-icon"><i class="icon-letter"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="agent-item hover-img">
                                <div class="image-wrap">
                                    <a href="agents-details.html">
                                        <img class="lazyload" data-src="{{ asset('assets/images/section/agent-item-3.jpg') }}"
                                            src="{{ asset('assets/images/section/agent-item-3.jpg') }}" alt="">
                                    </a>
                                    <ul class="tf-social style-3">
                                        <li><a href="#"><i class="icon-fb"></i></a></li>
                                        <li><a href="#"><i class="icon-X"></i></a></li>
                                        <li><a href="#"><i class="icon-linked"></i></a></li>
                                        <li><a href="#"><i class="icon-ins"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <div class="author">
                                        <h5 class="name lh-30"><a href="agents-details.html">Leslie Alexander</a></h5>
                                        <p class="text-2 lh-18">Sale agent</p>
                                    </div>
                                    <div class="wrap-btn-icon">
                                        <a href="#" class="btn-icon"><i class="icon-phone-3"></i></a>
                                        <a href="#" class="btn-icon"><i class="icon-letter"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="agent-item hover-img">
                                <div class="image-wrap">
                                    <a href="agents-details.html">
                                        <img class="lazyload" data-src="{{ asset('assets/images/section/agent-item-4.jpg') }}"
                                            src="{{ asset('assets/images/section/agent-item-4.jpg') }}" alt="">
                                    </a>
                                    <ul class="tf-social style-3">
                                        <li><a href="#"><i class="icon-fb"></i></a></li>
                                        <li><a href="#"><i class="icon-X"></i></a></li>
                                        <li><a href="#"><i class="icon-linked"></i></a></li>
                                        <li><a href="#"><i class="icon-ins"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <div class="author">
                                        <h5 class="name lh-30"><a href="agents-details.html">Leslie Alexander</a></h5>
                                        <p class="text-2 lh-18">Sale agent</p>
                                    </div>
                                    <div class="wrap-btn-icon">
                                        <a href="#" class="btn-icon"><i class="icon-phone-3"></i></a>
                                        <a href="#" class="btn-icon"><i class="icon-letter"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="agent-item hover-img ">
                                <div class="image-wrap">
                                    <a href="agents-details.html">
                                        <img class="lazyload" data-src="{{ asset('assets/images/section/agent-item-9.jpg') }}"
                                            src="{{ asset('assets/images/section/agent-item-9.jpg') }}" alt="">
                                    </a>
                                    <ul class="tf-social style-3">
                                        <li><a href="#"><i class="icon-fb"></i></a></li>
                                        <li><a href="#"><i class="icon-X"></i></a></li>
                                        <li><a href="#"><i class="icon-linked"></i></a></li>
                                        <li><a href="#"><i class="icon-ins"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <div class="author">
                                        <h5 class="name lh-30"><a href="agents-details.html">Leslie Alexander</a></h5>
                                        <p class="text-2 lh-18">Sale agent</p>
                                    </div>
                                    <div class="wrap-btn-icon">
                                        <a href="#" class="btn-icon"><i class="icon-phone-3"></i></a>
                                        <a href="#" class="btn-icon"><i class="icon-letter"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="agent-item hover-img">
                                <div class="image-wrap">
                                    <a href="agents-details.html">
                                        <img class="lazyload" data-src="{{ asset('assets/images/section/agent-item-10.jpg') }}"
                                            src="{{ asset('assets/images/section/agent-item-10.jpg') }}" alt="">
                                    </a>
                                    <ul class="tf-social style-3">
                                        <li><a href="#"><i class="icon-fb"></i></a></li>
                                        <li><a href="#"><i class="icon-X"></i></a></li>
                                        <li><a href="#"><i class="icon-linked"></i></a></li>
                                        <li><a href="#"><i class="icon-ins"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <div class="author">
                                        <h5 class="name lh-30"><a href="agents-details.html">Leslie Alexander</a></h5>
                                        <p class="text-2 lh-18">Sale agent</p>
                                    </div>
                                    <div class="wrap-btn-icon">
                                        <a href="#" class="btn-icon"><i class="icon-phone-3"></i></a>
                                        <a href="#" class="btn-icon"><i class="icon-letter"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="agent-item hover-img">
                                <div class="image-wrap">
                                    <a href="agents-details.html">
                                        <img class="lazyload" data-src="{{ asset('assets/images/section/agent-item-11.jpg') }}"
                                            src="{{ asset('assets/images/section/agent-item-11.jpg') }}" alt="">
                                    </a>
                                    <ul class="tf-social style-3">
                                        <li><a href="#"><i class="icon-fb"></i></a></li>
                                        <li><a href="#"><i class="icon-X"></i></a></li>
                                        <li><a href="#"><i class="icon-linked"></i></a></li>
                                        <li><a href="#"><i class="icon-ins"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <div class="author">
                                        <h5 class="name lh-30"><a href="agents-details.html">Leslie Alexander</a></h5>
                                        <p class="text-2 lh-18">Sale agent</p>
                                    </div>
                                    <div class="wrap-btn-icon">
                                        <a href="#" class="btn-icon"><i class="icon-phone-3"></i></a>
                                        <a href="#" class="btn-icon"><i class="icon-letter"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="agent-item hover-img">
                                <div class="image-wrap">
                                    <a href="agents-details.html">
                                        <img class="lazyload" data-src="{{ asset('assets/images/section/agent-item-12.jpg') }}"
                                            src="{{ asset('assets/images/section/agent-item-12.jpg') }}" alt="">
                                    </a>
                                    <ul class="tf-social style-3">
                                        <li><a href="#"><i class="icon-fb"></i></a></li>
                                        <li><a href="#"><i class="icon-X"></i></a></li>
                                        <li><a href="#"><i class="icon-linked"></i></a></li>
                                        <li><a href="#"><i class="icon-ins"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <div class="author">
                                        <h5 class="name lh-30"><a href="agents-details.html">Leslie Alexander</a></h5>
                                        <p class="text-2 lh-18">Sale agent</p>
                                    </div>
                                    <div class="wrap-btn-icon">
                                        <a href="#" class="btn-icon"><i class="icon-phone-3"></i></a>
                                        <a href="#" class="btn-icon"><i class="icon-letter"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="agent-item hover-img ">
                                <div class="image-wrap">
                                    <a href="agents-details.html">
                                        <img class="lazyload" data-src="{{ asset('assets/images/section/agent-item-13.jpg') }}"
                                            src="{{ asset('assets/images/section/agent-item-13.jpg') }}" alt="">
                                    </a>
                                    <ul class="tf-social style-3">
                                        <li><a href="#"><i class="icon-fb"></i></a></li>
                                        <li><a href="#"><i class="icon-X"></i></a></li>
                                        <li><a href="#"><i class="icon-linked"></i></a></li>
                                        <li><a href="#"><i class="icon-ins"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <div class="author">
                                        <h5 class="name lh-30"><a href="agents-details.html">Leslie Alexander</a></h5>
                                        <p class="text-2 lh-18">Sale agent</p>
                                    </div>
                                    <div class="wrap-btn-icon">
                                        <a href="#" class="btn-icon"><i class="icon-phone-3"></i></a>
                                        <a href="#" class="btn-icon"><i class="icon-letter"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="agent-item hover-img">
                                <div class="image-wrap">
                                    <a href="agents-details.html">
                                        <img class="lazyload" data-src="{{ asset('assets/images/section/agent-item-14.jpg') }}"
                                            src="{{ asset('assets/images/section/agent-item-14.jpg') }}" alt="">
                                    </a>
                                    <ul class="tf-social style-3">
                                        <li><a href="#"><i class="icon-fb"></i></a></li>
                                        <li><a href="#"><i class="icon-X"></i></a></li>
                                        <li><a href="#"><i class="icon-linked"></i></a></li>
                                        <li><a href="#"><i class="icon-ins"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <div class="author">
                                        <h5 class="name lh-30"><a href="agents-details.html">Leslie Alexander</a></h5>
                                        <p class="text-2 lh-18">Sale agent</p>
                                    </div>
                                    <div class="wrap-btn-icon">
                                        <a href="#" class="btn-icon"><i class="icon-phone-3"></i></a>
                                        <a href="#" class="btn-icon"><i class="icon-letter"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="agent-item hover-img">
                                <div class="image-wrap">
                                    <a href="agents-details.html">
                                        <img class="lazyload" data-src="{{ asset('assets/images/section/agent-item-15.jpg') }}"
                                            src="{{ asset('assets/images/section/agent-item-15.jpg') }}" alt="">
                                    </a>
                                    <ul class="tf-social style-3">
                                        <li><a href="#"><i class="icon-fb"></i></a></li>
                                        <li><a href="#"><i class="icon-X"></i></a></li>
                                        <li><a href="#"><i class="icon-linked"></i></a></li>
                                        <li><a href="#"><i class="icon-ins"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <div class="author">
                                        <h5 class="name lh-30"><a href="agents-details.html">Leslie Alexander</a></h5>
                                        <p class="text-2 lh-18">Sale agent</p>
                                    </div>
                                    <div class="wrap-btn-icon">
                                        <a href="#" class="btn-icon"><i class="icon-phone-3"></i></a>
                                        <a href="#" class="btn-icon"><i class="icon-letter"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="agent-item hover-img">
                                <div class="image-wrap">
                                    <a href="agents-details.html">
                                        <img class="lazyload" data-src="{{ asset('assets/images/section/agent-item-3.jpg') }}"
                                            src="{{ asset('assets/images/section/agent-item-3.jpg') }}" alt="">
                                    </a>
                                    <ul class="tf-social style-3">
                                        <li><a href="#"><i class="icon-fb"></i></a></li>
                                        <li><a href="#"><i class="icon-X"></i></a></li>
                                        <li><a href="#"><i class="icon-linked"></i></a></li>
                                        <li><a href="#"><i class="icon-ins"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <div class="author">
                                        <h5 class="name lh-30"><a href="agents-details.html">Leslie Alexander</a></h5>
                                        <p class="text-2 lh-18">Sale agent</p>
                                    </div>
                                    <div class="wrap-btn-icon">
                                        <a href="#" class="btn-icon"><i class="icon-phone-3"></i></a>
                                        <a href="#" class="btn-icon"><i class="icon-letter"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrap-pagination">
                            <p class="text-1">1 – 20 of 250+ property available</p>
                            <ul class="wg-pagination justify-center">
                                <li class="arrow">
                                    <a href="#"><i class="icon-arrow-left"></i></a>
                                </li>
                                <li>
                                    <a href="#">1</a>
                                </li>
                                <li class="active">
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">...</a>
                                </li>
                                <li>
                                    <a href="#">20</a>
                                </li>
                                <li class="arrow">
                                    <a href="#"><i class="icon-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section-agent -->

            <!-- section-CTA -->
            <section class="section-CTA">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="content-inner">
                                <img src="{{ asset('assets/images/section/cta.png') }}" alt="">
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
            </section>
            <!-- /section-CTA -->

        </div>
        <!-- /main-content -->

@endsection