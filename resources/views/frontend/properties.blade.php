@extends('layouts.app')

      
@section('content')


        <!-- flat-title -->
        <section class="flat-title style-2">
            <div class="tf-container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-inner ">
                            <ul class="breadcrumb">
                                <li><a class="home fw-6 text-color-3" href="index.html">Home</a></li>
                                <li>Property Listing</li>
                            </ul>
                        </div>
                        <div class="wg-filter style-2 relative">
                            <div class="form-title style-2">
                                <form>
                                    <fieldset>
                                        <input type="text" placeholder="Address, City, ZIP...">
                                    </fieldset>
                                </form>
                                <div class="nice-select" tabindex="0">
                                    <span class="current">Status</span>
                                    <ul class="list">
                                        <li data-value class="option selected">Status</li>
                                        <li data-value="bungalow" class="option">Bungalow</li>
                                        <li data-value="apartment" class="option">Apartment</li>
                                        <li data-value="house" class="option">House</li>
                                        <li data-value="smart-home" class="option">Smart Home</li>
                                        <li data-value="Single family home" class="option">Office</li>
                                        <li data-value="Multi family home" class="option">Villa</li>
                                    </ul>
                                </div>
                                <div class="nice-select" tabindex="0">
                                    <span class="current">Type</span>
                                    <ul class="list">
                                        <li data-value="1" class="option">Type</li>
                                        <li data-value="bungalow" class="option">Bungalow</li>
                                        <li data-value="apartment" class="option">Apartment</li>
                                        <li data-value="house" class="option">House</li>
                                        <li data-value="smart-home" class="option">Smart Home</li>
                                        <li data-value="Single family home" class="option">Office</li>
                                        <li data-value="Multi family home" class="option">Villa</li>
                                    </ul>
                                </div>
                                <div class="nice-select" tabindex="0">
                                    <span class="current">Bath</span>
                                    <ul class="list">
                                        <li data-value="" class="option selected focus">Baths</li>
                                        <li data-value="floating" class="option">Floating baths</li>
                                        <li data-value="massage" class="option">Massage baths</li>
                                        <li data-value="floor-standing" class="option">Floor-standing bath</li>
                                        <li data-value="built-in" class="option">Built-in baths</li>
                                    </ul>
                                </div>
                                <div class="nice-select" tabindex="0">
                                    <span class="current">Beds</span>
                                    <ul class="list">
                                        <li data-value="" class="option selected focus">Beds</li>
                                        <li data-value="twin" class="option">Twin beds</li>
                                        <li data-value="bunk" class="option">Bunk beds</li>
                                        <li data-value="kids" class="option">Kids beds</li>
                                        <li data-value="single" class="option">Single bed</li>
                                    </ul>
                                </div>
                                <div class="wrap-btn">
                                    <div class="btn-filter show-form">
                                        <div class="icons">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21 4H14" stroke="#F1913D" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M10 4H3" stroke="#F1913D" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M21 12H12" stroke="#F1913D" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M8 12H3" stroke="#F1913D" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M21 20H16" stroke="#F1913D" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12 20H3" stroke="#F1913D" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M14 2V6" stroke="#F1913D" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M8 10V14" stroke="#F1913D" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M16 18V22" stroke="#F1913D" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </div>
                                    <a href="#" class="tf-btn bg-color-primary pd-3 fw-6">
                                        Search <i class="icon-MagnifyingGlass fw-6"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="wd-search-form">
                                <div class="group-price">
                                    <div class="widget-price">
                                        <div class="box-title-price">
                                            <span class="title-price">Price range</span>
                                            <div class="caption-price">
                                                <span>from</span>
                                                <span class="value fw-6" id="slider-range-value1"></span>
                                                <span>to</span>
                                                <span class="value fw-6" id="slider-range-value2"></span>
                                            </div>
                                        </div>
                                        <div id="slider-range"></div>
                                        <div class="slider-labels">
                                            <div>
                                                <input type="hidden" name="min-value" value="">
                                                <input type="hidden" name="max-value" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-price">
                                        <div class="box-title-price">
                                            <span class="title-price">Size range</span>
                                            <div class="caption-price">
                                                <span>from</span>
                                                <span class="value fw-6" id="slider-range-value01"></span>
                                                <span>to</span>
                                                <span class="value fw-6" id="slider-range-value02"></span>
                                            </div>
                                        </div>
                                        <div id="slider-range2"></div>
                                        <div class="slider-labels">
                                            <div>
                                                <input type="hidden" name="min-value2" value="">
                                                <input type="hidden" name="max-value2" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" group-select">
                                    <div class="box-select">
                                        <div class="nice-select" tabindex="0">
                                            <span class="current">Province / States</span>
                                            <ul class="list">
                                                <li data-value="1" class="option">California</li>
                                                <li data-value="2" class="option selected">Texas</li>
                                                <li data-value="3" class="option">Florida </li>
                                                <li data-value="4" class="option">New York
                                                </li>
                                                <li data-value="5" class="option">Illinois</li>
                                                <li data-value="6" class="option">Washington</li>
                                                <li data-value="7" class="option">Pennsylvania</li>
                                                <li data-value="8" class="option">Ohio</li>
                                                <li data-value="9" class="option">Georgia</li>
                                                <li data-value="10" class="option">North Carolina
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="box-select">
                                        <div class="nice-select" tabindex="0">
                                            <span class="current">Rooms</span>
                                            <ul class="list">
                                                <li data-value="1" class="option">1</li>
                                                <li data-value="2" class="option selected">2</li>
                                                <li data-value="3" class="option">3</li>
                                                <li data-value="4" class="option">4</li>
                                                <li data-value="5" class="option">5</li>
                                                <li data-value="6" class="option">6</li>
                                                <li data-value="7" class="option">7</li>
                                                <li data-value="8" class="option">8</li>
                                                <li data-value="9" class="option">9</li>
                                                <li data-value="10" class="option">10</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="box-select">

                                        <div class="nice-select" tabindex="0">
                                            <span class="current">Bath: Any</span>
                                            <ul class="list">
                                                <li data-value="1" class="option">1</li>
                                                <li data-value="2" class="option selected">2</li>
                                                <li data-value="3" class="option">3</li>
                                                <li data-value="4" class="option">4</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="box-select">

                                        <div class="nice-select" tabindex="0">
                                            <span class="current">Beds: Any</span>
                                            <ul class="list">
                                                <li data-value="1" class="option">1</li>
                                                <li data-value="2" class="option selected">2</li>
                                                <li data-value="3" class="option">3</li>
                                                <li data-value="4" class="option">4</li>
                                                <li data-value="5" class="option">5</li>
                                                <li data-value="6" class="option">6</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="group-checkbox">
                                    <div class=" title text-4 fw-6">Amenities:</div>
                                    <div class="group-amenities ">
                                        <fieldset class="checkbox-item style-1  ">
                                            <label>
                                                <span class="text-4">Bed linens</span>
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                        </fieldset>
                                        <fieldset class="checkbox-item style-1   mt-12">
                                            <label>
                                                <span class="text-4"> Carbon alarm</span>
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                        </fieldset>
                                        <fieldset class="checkbox-item style-1   mt-12">
                                            <label>
                                                <span class="text-4">Check-in lockbox </span>
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                        </fieldset>
                                        <fieldset class="checkbox-item style-1   mt-12">
                                            <label>
                                                <span class="text-4">Coffee maker </span>
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                        </fieldset>
                                        <fieldset class="checkbox-item style-1  ">
                                            <label>
                                                <span class="text-4"> Dishwasher</span>
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                        </fieldset>
                                        <fieldset class="checkbox-item style-1   mt-12">
                                            <label>
                                                <span class="text-4"> Fireplace</span>
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                        </fieldset>
                                        <fieldset class="checkbox-item style-1   mt-12">
                                            <label>
                                                <span class="text-4">Extra pillows </span>
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                        </fieldset>
                                        <fieldset class="checkbox-item style-1   mt-12">
                                            <label>
                                                <span class="text-4">First aid kit </span>
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                        </fieldset>

                                        <fieldset class="checkbox-item style-1  ">
                                            <label>
                                                <span class="text-4">Hangers </span>
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                        </fieldset>
                                        <fieldset class="checkbox-item style-1   mt-12">
                                            <label>
                                                <span class="text-4">Iron</span>
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                        </fieldset>
                                        <fieldset class="checkbox-item style-1   mt-12">
                                            <label>
                                                <span class="text-4"> Microwave</span>
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                        </fieldset>
                                        <fieldset class="checkbox-item style-1   mt-12">
                                            <label>
                                                <span class="text-4">Fireplace</span>
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                        </fieldset>

                                        <fieldset class="checkbox-item style-1  ">
                                            <label>
                                                <span class="text-4"> Refrigerator</span>
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                        </fieldset>
                                        <fieldset class="checkbox-item style-1   mt-12">
                                            <label>
                                                <span class="text-4">Security cameras </span>
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                        </fieldset>
                                        <fieldset class="checkbox-item style-1   mt-12">
                                            <label>
                                                <span class="text-4"> Smoke alarm</span>
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                        </fieldset>
                                        <fieldset class="checkbox-item style-1   mt-12">
                                            <label>
                                                <span class="text-4">Fireplace </span>
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /flat-title -->

        <!-- .main-content -->
        <div class="main-content">

            <section class="section-property-layout ">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-12">

                            <div class="box-title">
                                <h2>Property listing</h2>
                                 
                            </div>

                            <div class="flat-animate-tab">
                                <div class="tab-content">
                                    <div class="tab-pane active show" id="gridLayout" role="tabpanel">
                                        <div class="tf-grid-layout lg-col-3 md-col-2">
                                        <div class="swiper-slide">
                                        <div class="box-house hover-img ">
                                            <div class="image-wrap">
                                                <a href="/raw-district-2">
                                                    <img class="lazyload" data-src="{{ asset('assets/images/newimages/property/Raw District/Gallery-4-10.jpg') }}"
                                                        src="{{ asset('assets/images/newimages/property/Raw District/Gallery-4-10.jpg') }}" alt="">
                                                </a> 
                                                <ul class="box-tag flex gap-8 ">
                                                    <li class="flat-tag text-4 bg-main fw-6 text_white">Off-plan</li>
                                                    <li class="flat-tag text-4 bg-3 fw-6 text_white">Apartments, Office +1</li>
                                                </ul>
                                                <div class="list-btn flex gap-8 ">
                                                    <a href="#" class="btn-icon save hover-tooltip"><i
                                                            class="icon-save"></i>
                                                        <span class="tooltip">Add Favorite</span>
                                                    </a>
                                                    <a href="#" class="btn-icon find hover-tooltip"><i
                                                            class="icon-find-plus"></i>
                                                        <span class="tooltip">Quick View</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="/raw-district-2">Raw District 2</a>

                                                </h5>
                                                <p class="location text-1 line-clamp-1 ">
                                                    <i class="icon-location"></i>  Sheikh Zayed Road
                                                </p>
                                                <ul class="meta-list flex">
                                                    <li class="text-1 flex"><span>1, 2, 3, Studio</span>Beds</li>
                                                    <li class="text-1 flex"><span>1, 2, 3, Studio</span>Baths</li>
                                                    <li class="text-1 flex"><span>850 – 3,200 </span>Sqft</li>
                                                </ul>
                                                <div class="bot flex justify-between items-center">
                                                    <h5 class="price">
                                                    AED 666K
                                                    </h5>
                                                    <div class="wrap-btn flex">
                                                         
                                                        <a href="/raw-district-2"
                                                            class="tf-btn style-border pd-4">Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box-house hover-img ">
                                            <div class="image-wrap">
                                                <a href="/linar">
                                                    <img class="lazyload" data-src="{{ asset('assets/images/newimages/property/Linar/Gallery-2-10.jpg') }}"
                                                        src="{{ asset('assets/images/newimages/property/Linar/Gallery-2-10.jpg') }}  " alt="">
                                                </a>
                                                <ul class="box-tag flex gap-8 ">
                                                    <li class="flat-tag text-4 bg-main fw-6 text_white">Off-plan</li>
                                                    <li class="flat-tag text-4 bg-3 fw-6 text_white">Apartments, Office +1</li>
                                                </ul>
                                                <div class="list-btn flex gap-8 ">
                                                    <a href="#" class="btn-icon save hover-tooltip"><i
                                                            class="icon-save"></i>
                                                        <span class="tooltip">Add Favorite</span>
                                                    </a>
                                                    <a href="#" class="btn-icon find hover-tooltip"><i
                                                            class="icon-find-plus"></i>
                                                        <span class="tooltip">Quick View</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="/linar">Linar</a>

                                                </h5>
                                                <p class="location text-1 line-clamp-1 ">
                                                    <i class="icon-location"></i> Al Mamzar beach
                                                </p>
                                                <ul class="meta-list flex">
                                                    <li class="text-1 flex"><span>1, 2, 3, 4</span>Beds</li>
                                                    <li class="text-1 flex"><span>1, 2, 3, 4</span>Baths</li>
                                                    <li class="text-1 flex"><span>850 – 3,200</span>Sqft</li>
                                                </ul>
                                                <div class="bot flex justify-between items-center">
                                                    <h5 class="price">
                                                    AED 849k
                                                    </h5>
                                                    <div class="wrap-btn flex">
                                                        
                                                        <a href="/linar"
                                                            class="tf-btn style-border pd-4">Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide ">
                                        <div class="box-house hover-img ">
                                            <div class="image-wrap">
                                                <a href="/hudayriyat-golf-estates">
                                                    <img class="lazyload" data-src="{{ asset('assets/images/newimages/property/Hudayriyat/gallery-3-8.jpg') }}  "
                                                        src="{{ asset('assets/images/newimages/property/Hudayriyat/gallery-3-8.jpg') }}   " alt="">
                                                </a>
                                                <ul class="box-tag flex gap-8 ">
                                                    <li class="flat-tag text-4 bg-main fw-6 text_white">Off-plan</li>
                                                    <li class="flat-tag text-4 bg-3 fw-6 text_white">Villas, Golf Homes +3</li>
                                                </ul>
                                                <div class="list-btn flex gap-8 ">
                                                    <a href="#" class="btn-icon save hover-tooltip"><i
                                                            class="icon-save"></i>
                                                        <span class="tooltip">Add Favorite</span>
                                                    </a>
                                                    <a href="#" class="btn-icon find hover-tooltip"><i
                                                            class="icon-find-plus"></i>
                                                        <span class="tooltip">Quick View</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="/hudayriyat-golf-estates">Hudayriyat Golf Estates</a>
                                                </h5>
                                                <p class="location text-1 line-clamp-1 ">
                                                    <i class="icon-location"></i> Al Hudayriat Island
                                                </p>
                                                <ul class="meta-list flex">
                                                    <li class="text-1 flex"><span>3, 4, 5, 6</span>Beds</li>
                                                    <li class="text-1 flex"><span>3, 4, 5, 6</span>Baths</li>
                                                    <li class="text-1 flex"><span>850 – 3,200 sq.ft</span>Sqft</li>
                                                </ul>
                                                <div class="bot flex justify-between items-center">
                                                    <h5 class="price">
                                                    AED 4,250,000
                                                    </h5>
                                                    <div class="wrap-btn flex">
                                                        
                                                        <a href="/hudayriyat-golf-estates"
                                                            class="tf-btn style-border pd-4">Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box-house hover-img ">
                                            <div class="image-wrap">
                                                <a href="/roudah">
                                                    <img class="lazyload" data-src="{{ asset('assets/images/newimages/property/Roudah/Gallery-1-8.jpg') }}   "
                                                        src="{{ asset('assets/images/newimages/property/Roudah/Gallery-1-8.jpg') }}   " alt="">
                                                </a>
                                                <ul class="box-tag flex gap-8 ">
                                                    <li class="flat-tag text-4 bg-main fw-6 text_white">Off-plan</li>
                                                    <li class="flat-tag text-4 bg-3 fw-6 text_white">Apartments</li>
                                                </ul>
                                                <div class="list-btn flex gap-8 ">
                                                    <a href="#" class="btn-icon save hover-tooltip"><i
                                                            class="icon-save"></i>
                                                        <span class="tooltip">Add Favorite</span>
                                                    </a>
                                                    <a href="#" class="btn-icon find hover-tooltip"><i
                                                            class="icon-find-plus"></i>
                                                        <span class="tooltip">Quick View</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="/roudah">Roudah</a>

                                                </h5>
                                                <p class="location text-1 line-clamp-1 ">
                                                    <i class="icon-location"></i> Expo City
                                                </p>
                                                <ul class="meta-list flex">
                                                    <li class="text-1 flex"><span>1, 2, 3</span>Beds</li>
                                                    <li class="text-1 flex"><span>1, 2, 3</span>Baths</li>
                                                    <li class="text-1 flex"><span>850 – 3,200</span>Sqft</li>
                                                </ul>
                                                <div class="bot flex justify-between items-center">
                                                    <h5 class="price">
                                                    AED 1.69M
                                                    </h5>
                                                    <div class="wrap-btn flex">
                                                        
                                                        <a href="/roudah"
                                                            class="tf-btn style-border pd-4">Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box-house hover-img ">
                                            <div class="image-wrap">
                                                <a href="/everly-place">
                                                    <img class="lazyload" data-src="{{ asset('assets/images/newimages/property/Everly/Gallery-1-6.jpg') }}   "
                                                        src="{{ asset('assets/images/newimages/property/Everly/Gallery-1-6.jpg') }}   " alt="">
                                                </a>
                                                <ul class="box-tag flex gap-8 ">
                                                    <li class="flat-tag text-4 bg-main fw-6 text_white">Off-plan
                                                    </li>
                                                    <li class="flat-tag text-4 bg-3 fw-6 text_white">Apartments</li>
                                                </ul>
                                                <div class="list-btn flex gap-8 ">
                                                    <a href="#" class="btn-icon save hover-tooltip"><i
                                                            class="icon-save"></i>
                                                        <span class="tooltip">Add Favorite</span>
                                                    </a>
                                                    <a href="#" class="btn-icon find hover-tooltip"><i
                                                            class="icon-find-plus"></i>
                                                        <span class="tooltip">Quick View</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="/everly-place">Everly Place</a>

                                                </h5>
                                                <p class="location text-1 line-clamp-1 ">
                                                    <i class="icon-location"></i> MBR City
                                                </p>
                                                <ul class="meta-list flex">
                                                    <li class="text-1 flex"><span>1, 2, 3</span>Beds</li>
                                                    <li class="text-1 flex"><span>1, 2, 3</span>Baths</li>
                                                    <li class="text-1 flex"><span>850 – 3,200</span>Sqft</li>
                                                </ul>
                                                <div class="bot flex justify-between items-center">
                                                    <h5 class="price">
                                                    TBA
                                                    </h5>
                                                    <div class="wrap-btn flex">
                                                        
                                                        <a href="/everly-place"
                                                            class="tf-btn style-border pd-4">Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slider">
                                        <div class="box-house hover-img ">
                                            <div class="image-wrap">
                                                <a href="/113-residences">
                                                    <img class="lazyload" data-src="{{ asset('assets/images/newimages/property/Residences/gallery-1-5.jpg') }}   "
                                                        src="{{ asset('assets/images/newimages/property/Residences/gallery-1-5.jpg') }}   " alt="">
                                                </a>
                                                <ul class="box-tag flex gap-8 ">
                                                    <li class="flat-tag text-4 bg-main fw-6 text_white">Off-plan</li>
                                                    <li class="flat-tag text-4 bg-3 fw-6 text_white">Apartments, Duplex</li>
                                                </ul>
                                                <div class="list-btn flex gap-8 ">
                                                    <a href="#" class="btn-icon save hover-tooltip"><i
                                                            class="icon-save"></i>
                                                        <span class="tooltip">Add Favorite</span>
                                                    </a>
                                                    <a href="#" class="btn-icon find hover-tooltip"><i
                                                            class="icon-find-plus"></i>
                                                        <span class="tooltip">Quick View</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="/113-residences">113 Residences</a>

                                                </h5>
                                                <p class="location text-1 line-clamp-1 ">
                                                    <i class="icon-location"></i> Al Sufouh
                                                </p>
                                                <ul class="meta-list flex">
                                                    <li class="text-1 flex"><span>1, 2, 3, Duplex</span>Beds</li>
                                                    <li class="text-1 flex"><span>3</span>Baths</li>
                                                    <li class="text-1 flex"><span>850 – 3,200</span>Sqft</li>
                                                </ul>
                                                <div class="bot flex justify-between items-center">
                                                    <h5 class="price">
                                                    AED 1.8M
                                                    </h5>
                                                    <div class="wrap-btn flex">
                                                        
                                                        <a href="/113-residences"
                                                            class="tf-btn style-border pd-4">Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                                    <div class="box-house hover-img ">
                                                        <div class="image-wrap">
                                                            <a href="/aquaCrest-residences">
                                                                <img class="lazyload"
                                                                    data-src="{{ asset('assets/images/newimages/property/AquaCrest/Aquacrest-g-6.jpg') }}"
                                                                    src="{{ asset('assets/images/newimages/property/AquaCrest/Aquacrest-g-6.jpg') }}" alt="">
                                                            </a>
                                                            <ul class="box-tag flex gap-8 ">
                                                                <li class="flat-tag text-4 bg-main fw-6 text_white">
                                                                Off-plan</li>
                                                                <li class="flat-tag text-4 bg-3 fw-6 text_white">Apartments</li>
                                                            </ul>
                                                            <div class="list-btn flex gap-8 ">
                                                                <a href="#" class="btn-icon save hover-tooltip"><i
                                                                        class="icon-save"></i>
                                                                    <span class="tooltip">Add Favorite</span>
                                                                </a>
                                                                <a href="#" class="btn-icon find hover-tooltip"><i
                                                                        class="icon-find-plus"></i>
                                                                    <span class="tooltip">Quick View</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="title">
                                                                <a href="/aquaCrest-residences">AquaCrest Residences</a>

                                                            </h5>
                                                            <p class="location text-1 flex items-center gap-8">
                                                                <i class="icon-location"></i> Downtown Dubai
                                                            </p>
                                                            <ul class="meta-list flex">
                                                                <li class="text-1 flex"><span>1, 2, 3</span>Beds</li>
                                                                <li class="text-1 flex"><span>1, 2, 3</span>Baths</li> 
                                                                <li class="text-1 flex"><span>850 – 3,200</span>Sqft</li>
                                                            </ul>
                                                            <div class="bot flex justify-between items-center">
                                                                <h5 class="price">
                                                                AED 1.16M
                                                                </h5>
                                                                <div class="wrap-btn flex">
                                                                     
                                                                    <a href="/aquaCrest-residences"
                                                                        class="tf-btn style-border pd-4">Details</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="box-house hover-img ">
                                                        <div class="image-wrap">
                                                            <a href="/DWTN-residences">
                                                                <img class="lazyload"
                                                                    data-src="{{ asset('assets/images/newimages/property/DWTN/DWTN-g-1.jpg') }}  "
                                                                    src="{{ asset('assets/images/newimages/property/DWTN/DWTN-g-1.jpg') }}  " alt="">
                                                            </a>
                                                            <ul class="box-tag flex gap-8 ">
                                                                <li class="flat-tag text-4 bg-main fw-6 text_white">
                                                                Off-plan</li>
                                                                <li class="flat-tag text-4 bg-3 fw-6 text_white">Apartments, Duplex</li>
                                                            </ul>
                                                            <div class="list-btn flex gap-8 ">
                                                                <a href="#" class="btn-icon save hover-tooltip"><i
                                                                        class="icon-save"></i>
                                                                    <span class="tooltip">Add Favorite</span>
                                                                </a>
                                                                <a href="#" class="btn-icon find hover-tooltip"><i
                                                                        class="icon-find-plus"></i>
                                                                    <span class="tooltip">Quick View</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="title">
                                                                <a href="/DWTN-residences">DWTN Residences</a>

                                                            </h5>
                                                            <p class="location text-1 flex items-center gap-8">
                                                                <i class="icon-location"></i> Downtown Dubai
                                                            </p>
                                                            <ul class="meta-list flex">
                                                                <li class="text-1 flex"><span>1, 2, 3, 4</span>Beds</li>
                                                                <li class="text-1 flex"><span>1, 2, 3, 4</span>Baths</li>
                                                                <li class="text-1 flex"><span>850 – 3,200</span>Sqft</li>
                                                            </ul>
                                                            <div class="bot flex justify-between items-center">
                                                                <h5 class="price">
                                                                AED 1.86M
                                                                </h5>
                                                                <div class="wrap-btn flex">
                                                                    
                                                                    <a href="/DWTN-residences"
                                                                        class="tf-btn style-border pd-4">Details</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="box-house hover-img ">
                                                        <div class="image-wrap">
                                                            <a href="/binghatti-aquarise">
                                                                <img class="lazyload"
                                                                    data-src="{{ asset('assets/images/newimages/property/Binghatti/Aquarise-g-3.jpg') }}  "
                                                                    src="{{ asset('assets/images/newimages/property/Binghatti/Aquarise-g-3.jpg') }}  " alt="">
                                                            </a>
                                                            <ul class="box-tag flex gap-8 ">
                                                                <li class="flat-tag text-4 bg-main fw-6 text_white">
                                                                Off-plan</li>
                                                                <li class="flat-tag text-4 bg-3 fw-6 text_white">Apartments, Retail Units</li>
                                                            </ul>
                                                            <div class="list-btn flex gap-8 ">
                                                                <a href="#" class="btn-icon save hover-tooltip"><i
                                                                        class="icon-save"></i>
                                                                    <span class="tooltip">Add Favorite</span>
                                                                </a>
                                                                <a href="#" class="btn-icon find hover-tooltip"><i
                                                                        class="icon-find-plus"></i>
                                                                    <span class="tooltip">Quick View</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="title">
                                                                <a href="/binghatti-aquarise">Binghatti Aquarise</a>

                                                            </h5>
                                                            <p class="location text-1 flex items-center gap-8">
                                                                <i class="icon-location"></i> Downtown Dubai
                                                            </p>
                                                            <ul class="meta-list flex">
                                                                <li class="text-1 flex"><span>1, 2, 3, 4, Studio</span>Beds</li>
                                                                <li class="text-1 flex"><span>3</span>Baths</li>
                                                                <li class="text-1 flex"><span>850 – 3,200</span>Sqft</li>
                                                            </ul>
                                                            <div class="bot flex justify-between items-center">
                                                                <h5 class="price">
                                                                AED 1M

                                                                </h5>
                                                                <div class="wrap-btn flex">
                                                                     
                                                                    <a href="/binghatti-aquarise"
                                                                        class="tf-btn style-border pd-4">Details</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="box-house hover-img ">
                                                        <div class="image-wrap">
                                                            <a href="/address-grand">
                                                                <img class="lazyload"
                                                                    data-src="{{ asset('assets/images/newimages/property/Address/3-1-6-1024x585.jpg') }}  "
                                                                    src="{{ asset('assets/images/newimages/property/Address/3-1-6-1024x585.jpg') }}  " alt="">
                                                            </a>
                                                            <ul class="box-tag flex gap-8 ">
                                                                <li class="flat-tag text-4 bg-main fw-6 text_white">
                                                                Off-plan</li>
                                                                <li class="flat-tag text-4 bg-3 fw-6 text_white">Apartments, Duplex</li>
                                                            </ul>
                                                            <div class="list-btn flex gap-8 ">
                                                                <a href="#" class="btn-icon save hover-tooltip"><i
                                                                        class="icon-save"></i>
                                                                    <span class="tooltip">Add Favorite</span>
                                                                </a>
                                                                <a href="#" class="btn-icon find hover-tooltip"><i
                                                                        class="icon-find-plus"></i>
                                                                    <span class="tooltip">Quick View</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="title">
                                                                <a href="/address-grand">Address Grand</a>

                                                            </h5>
                                                            <p class="location text-1 flex items-center gap-8">
                                                                <i class="icon-location"></i> Downtown Dubai
                                                            </p>
                                                            <ul class="meta-list flex">
                                                                <li class="text-1 flex"><span>3, 4, 5</span>Beds</li>
                                                                <li class="text-1 flex"><span>3, 4, 5</span>Baths</li>
                                                                <li class="text-1 flex"><span>850 – 3,200</span>Sqft</li>
                                                            </ul>
                                                            <div class="bot flex justify-between items-center">
                                                                <h5 class="price">
                                                                AED 17.5M
                                                                </h5>
                                                                <div class="wrap-btn flex">
                                                                     
                                                                       
                                                                    <a href="/address-grand"
                                                                        class="tf-btn style-border pd-4">Details</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="box-house hover-img">
                                                        <div class="image-wrap">
                                                            <a href="/one-residence">
                                                                <img class="lazyload"
                                                                    data-src="{{ asset('assets/images/newimages/property/One Residence/one-1-1.jpg') }}  "
                                                                    src="{{ asset('assets/images/newimages/property/One Residence/one-1-1.jpg') }}  " alt="">
                                                            </a>
                                                            <ul class="box-tag flex gap-8 ">
                                                                <li class="flat-tag text-4 bg-main fw-6 text_white">
                                                                    off-plan</li>
                                                                <li class="flat-tag text-4 bg-3 fw-6 text_white">Apartments, Penthouses</li>
                                                            </ul>
                                                            <div class="list-btn flex gap-8 ">
                                                                <a href="#" class="btn-icon save hover-tooltip"><i
                                                                        class="icon-save"></i>
                                                                    <span class="tooltip">Add Favorite</span>
                                                                </a>
                                                                <a href="#" class="btn-icon find hover-tooltip"><i
                                                                        class="icon-find-plus"></i>
                                                                    <span class="tooltip">Quick View</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="title">
                                                                <a href="/one-residence">One Residence</a>

                                                            </h5>
                                                            <p class="location text-1 flex items-center gap-8">
                                                                <i class="icon-location"></i> Downtown Dubai
                                                            </p>
                                                            <ul class="meta-list flex">
                                                                <li class="text-1 flex"><span>1, 2, Studio</span>Beds</li>
                                                                <li class="text-1 flex"><span>3</span>Baths</li>
                                                                <li class="text-1 flex"><span>850 – 3,200</span>Sqft</li>
                                                            </ul>
                                                            <div class="bot flex justify-between items-center">
                                                                <h5 class="price">
                                                                AED 1.27M
                                                                </h5>
                                                                <div class="wrap-btn flex">
                                                                    
                                                                    <a href="/one-residence"
                                                                        class="tf-btn style-border pd-4">Details</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="box-house hover-img">
                                                        <div class="image-wrap">
                                                            <a href="/fairmont-residences-solara-tower">
                                                                <img class="lazyload"
                                                                    data-src="{{ asset('assets/images/newimages/property/Fairmont/solara-1.jpg') }}  "
                                                                    src="{{ asset('assets/images/newimages/property/Fairmont/solara-1.jpg') }}  " alt="">
                                                            </a>
                                                            <ul class="box-tag flex gap-8 ">
                                                                <li class="flat-tag text-4 bg-main fw-6 text_white">
                                                                Off-plan</li>
                                                                <li class="flat-tag text-4 bg-3 fw-6 text_white">Apartments, Duplex</li>
                                                            </ul>
                                                            <div class="list-btn flex gap-8 ">
                                                                <a href="#" class="btn-icon save hover-tooltip"><i
                                                                        class="icon-save"></i>
                                                                    <span class="tooltip">Add Favorite</span>
                                                                </a>
                                                                <a href="#" class="btn-icon find hover-tooltip"><i
                                                                        class="icon-find-plus"></i>
                                                                    <span class="tooltip">Quick View</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="title">
                                                                <a href="/fairmont-residences-solara-tower">Fairmont Residences  </a>

                                                            </h5>
                                                            <p class="location text-1 flex items-center gap-8">
                                                                <i class="icon-location"></i> Downtown Dubai
                                                            </p>
                                                            <ul class="meta-list flex">
                                                                <li class="text-1 flex"><span>1, 2, 3, 4, 5</span>Beds</li>
                                                                <li class="text-1 flex"><span>3</span>Baths</li>
                                                                <li class="text-1 flex"><span>850 – 3,200</span>Sqft</li>
                                                            </ul>
                                                            <div class="bot flex justify-between items-center">
                                                                <h5 class="price">
                                                                AED 2.9M
                                                                </h5>
                                                                <div class="wrap-btn flex">
                                                                     
                                                                    <a href="/fairmont-residences-solara-tower"
                                                                        class="tf-btn style-border pd-4">Details</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="box-house hover-img ">
                                                        <div class="image-wrap">
                                                            <a href="/bella-by-PASSO">
                                                                <img class="lazyload"
                                                                    data-src="{{ asset('assets/images/newimages/property/PASSO/Gallery-6-17.jpg') }}"
                                                                    src="{{ asset('assets/images/newimages/property/PASSO/Gallery-6-17.jpg') }}" alt="">
                                                            </a>
                                                            <ul class="box-tag flex gap-8 ">
                                                                <li class="flat-tag text-4 bg-main fw-6 text_white">
                                                                Off-plan</li>
                                                                <li class="flat-tag text-4 bg-3 fw-6 text_white">Apartments, Beach Mansions</li>
                                                            </ul>
                                                            <div class="list-btn flex gap-8 ">
                                                                <a href="#" class="btn-icon save hover-tooltip"><i
                                                                        class="icon-save"></i>
                                                                    <span class="tooltip">Add Favorite</span>
                                                                </a>
                                                                <a href="#" class="btn-icon find hover-tooltip"><i
                                                                        class="icon-find-plus"></i>
                                                                    <span class="tooltip">Quick View</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="title">
                                                                <a href="/bella-by-PASSO">Bella by PASSO</a>

                                                            </h5>
                                                            <p class="location text-1 flex items-center gap-8">
                                                                <i class="icon-location"></i> Palm Jumeirah
                                                            </p>
                                                            <ul class="meta-list flex">
                                                                <li class="text-1 flex"><span>2, 3, 4, 5, 6</span>Beds</li>
                                                                <li class="text-1 flex"><span>3</span>Baths</li>
                                                                <li class="text-1 flex"><span>850 – 3,200</span>Sqft</li>
                                                            </ul>
                                                            <div class="bot flex justify-between items-center">
                                                                <h5 class="price">
                                                                AED 6.2M
                                                                </h5>
                                                                <div class="wrap-btn flex">
                                                                    
                                                                    <a href="/bella-by-PASSO"
                                                                        class="tf-btn style-border pd-4">Details</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="box-house hover-img ">
                                                        <div class="image-wrap">
                                                            <a href="/olaia-residences">
                                                                <img class="lazyload"
                                                                    data-src="{{ asset('assets/images/newimages/property/Olaia/Solaia-Residences-g-5.jpg') }}  "
                                                                    src="{{ asset('assets/images/newimages/property/Olaia/Solaia-Residences-g-5.jpg') }}  " alt="">
                                                            </a>
                                                            <ul class="box-tag flex gap-8 ">
                                                                <li class="flat-tag text-4 bg-main fw-6 text_white">
                                                                Off-plan</li>
                                                                <li class="flat-tag text-4 bg-3 fw-6 text_white">Apartments, Duplex</li>
                                                            </ul>
                                                            <div class="list-btn flex gap-8 ">
                                                                <a href="#" class="btn-icon save hover-tooltip"><i
                                                                        class="icon-save"></i>
                                                                    <span class="tooltip">Add Favorite</span>
                                                                </a>
                                                                <a href="#" class="btn-icon find hover-tooltip"><i
                                                                        class="icon-find-plus"></i>
                                                                    <span class="tooltip">Quick View</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="title">
                                                                <a href="/olaia-residences">Olaia Residences</a>

                                                            </h5>
                                                            <p class="location text-1 flex items-center gap-8">
                                                                <i class="icon-location"></i> Palm Jumeirah
                                                            </p>
                                                            <ul class="meta-list flex">
                                                                <li class="text-1 flex"><span>1, 2, 3, 4, 5</span>Beds</li>
                                                                <li class="text-1 flex"><span>3</span>Baths</li>
                                                                <li class="text-1 flex"><span>850 – 3,200</span>Sqft</li>
                                                            </ul>
                                                            <div class="bot flex justify-between items-center">
                                                                <h5 class="price">
                                                                AED 3.2M
                                                                </h5>
                                                                <div class="wrap-btn flex">
                                                                    
                                                                    <a href="/olaia-residences"
                                                                        class="tf-btn style-border pd-4">Details</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="box-house hover-img ">
                                                        <div class="image-wrap">
                                                            <a href="/ela-residences">
                                                                <img class="lazyload"
                                                                    data-src="{{ asset('assets/images/newimages/property/ELA/ela-residences-2.jpg') }}  "
                                                                    src="{{ asset('assets/images/newimages/property/ELA/ela-residences-2.jpg') }}  " alt="">
                                                            </a>
                                                            <ul class="box-tag flex gap-8 ">
                                                                <li class="flat-tag text-4 bg-main fw-6 text_white">
                                                                Off-plan</li>
                                                                <li class="flat-tag text-4 bg-3 fw-6 text_white">Apartments, Penthouses</li>
                                                            </ul>
                                                            <div class="list-btn flex gap-8 ">
                                                                <a href="#" class="btn-icon save hover-tooltip"><i
                                                                        class="icon-save"></i>
                                                                    <span class="tooltip">Add Favorite</span>
                                                                </a>
                                                                <a href="#" class="btn-icon find hover-tooltip"><i
                                                                        class="icon-find-plus"></i>
                                                                    <span class="tooltip">Quick View</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="title">
                                                                <a href="/ela-residences">ELA Residences</a>

                                                            </h5>
                                                            <p class="location text-1 flex items-center gap-8">
                                                                <i class="icon-location"></i> Palm Jumeirah
                                                            </p>
                                                            <ul class="meta-list flex">
                                                                <li class="text-1 flex"><span>3, 4</span>Beds</li>
                                                                <li class="text-1 flex"><span>3</span>Baths</li>
                                                                <li class="text-1 flex"><span>850 – 3,200</span>Sqft</li>
                                                            </ul>
                                                            <div class="bot flex justify-between items-center">
                                                                <h5 class="price">
                                                                AED 43.3M
                                                                </h5>
                                                                <div class="wrap-btn flex">
                                                                    
                                                                    <a href="/ela-residences"
                                                                        class="tf-btn style-border pd-4">Details</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="box-house hover-img ">
                                                        <div class="image-wrap">
                                                            <a href="/mansio-at-th8">
                                                                <img class="lazyload"
                                                                    data-src="{{ asset('assets/images/newimages/property/Mansio/mansio-2.jpg') }}  "
                                                                    src="{{ asset('assets/images/newimages/property/Mansio/mansio-2.jpg') }}  " alt="">
                                                            </a>
                                                            <ul class="box-tag flex gap-8 ">
                                                                <li class="flat-tag text-4 bg-main fw-6 text_white">
                                                                Ready</li>
                                                                <li class="flat-tag text-4 bg-3 fw-6 text_white">Apartments, Penthouses</li>
                                                            </ul>
                                                            <div class="list-btn flex gap-8 ">
                                                                <a href="#" class="btn-icon save hover-tooltip"><i
                                                                        class="icon-save"></i>
                                                                    <span class="tooltip">Add Favorite</span>
                                                                </a>
                                                                <a href="#" class="btn-icon find hover-tooltip"><i
                                                                        class="icon-find-plus"></i>
                                                                    <span class="tooltip">Quick View</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="title">
                                                                <a href="/mansio-at-th8">Mansio at Th8</a>

                                                            </h5>
                                                            <p class="location text-1 flex items-center gap-8">
                                                                <i class="icon-location"></i> Palm Jumeirah
                                                            </p>
                                                            <ul class="meta-list flex">
                                                                <li class="text-1 flex"><span>1, 2, 3</span>Beds</li>
                                                                <li class="text-1 flex"><span>3</span>Baths</li>
                                                                <li class="text-1 flex"><span>850 – 3,200</span>Sqft</li>
                                                            </ul>
                                                            <div class="bot flex justify-between items-center">
                                                                <h5 class="price">
                                                                AED 3.7M
                                                                </h5>
                                                                <div class="wrap-btn flex">
                                                                     
                                                                    <a href="/mansio-at-th8"
                                                                        class="tf-btn style-border pd-4">Details</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="box-house hover-img">
                                                        <div class="image-wrap">
                                                            <a href="/armani-beach-residences">
                                                                <img class="lazyload"
                                                                    data-src="{{ asset('assets/images/newimages/property/Armani/armani-1-2.jpg') }}  "
                                                                    src="{{ asset('assets/images/newimages/property/Armani/armani-1-2.jpg') }}  " alt="">
                                                            </a>
                                                            <ul class="box-tag flex gap-8 ">
                                                                <li class="flat-tag text-4 bg-main fw-6 text_white">
                                                                Ready</li>
                                                                <li class="flat-tag text-4 bg-3 fw-6 text_white">Apartments, Penthouses</li>
                                                            </ul>
                                                            <div class="list-btn flex gap-8 ">
                                                                <a href="#" class="btn-icon save hover-tooltip"><i
                                                                        class="icon-save"></i>
                                                                    <span class="tooltip">Add Favorite</span>
                                                                </a>
                                                                <a href="#" class="btn-icon find hover-tooltip"><i
                                                                        class="icon-find-plus"></i>
                                                                    <span class="tooltip">Quick View</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="title">
                                                                <a href="/armani-beach-residences">Armani Beach Residences</a>

                                                            </h5>
                                                            <p class="location text-1 flex items-center gap-8">
                                                                <i class="icon-location"></i> Palm Jumeirah
                                                            </p>
                                                            <ul class="meta-list flex">
                                                                <li class="text-1 flex"><span>2, 3, 4, 5</span>Beds</li>
                                                                <li class="text-1 flex"><span>2, 3, 4, 5</span>Baths</li>
                                                                <li class="text-1 flex"><span>850 – 3,200</span>Sqft</li>
                                                            </ul>
                                                            <div class="bot flex justify-between items-center">
                                                                <h5 class="price">
                                                                AED 23M
                                                                </h5>
                                                                <div class="wrap-btn flex">
                                                                     
                                                                    <a href="/armani-beach-residences"
                                                                        class="tf-btn style-border pd-4">Details</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="box-house hover-img">
                                                        <div class="image-wrap">
                                                            <a href="/como-residences-by-nakheel">
                                                                <img class="lazyload"
                                                                    data-src="{{ asset('assets/images/newimages/property/Nakheel/como-img-1.jpg') }}  "
                                                                    src="{{ asset('assets/images/newimages/property/Nakheel/como-img-1.jpg') }}  " alt="">
                                                            </a>
                                                            <ul class="box-tag flex gap-8 ">
                                                                <li class="flat-tag text-4 bg-main fw-6 text_white">
                                                                Off-plan</li>
                                                                <li class="flat-tag text-4 bg-3 fw-6 text_white">Apartments, Duplex</li>
                                                            </ul>
                                                            <div class="list-btn flex gap-8 ">
                                                                <a href="#" class="btn-icon save hover-tooltip"><i
                                                                        class="icon-save"></i>
                                                                    <span class="tooltip">Add Favorite</span>
                                                                </a>
                                                                <a href="#" class="btn-icon find hover-tooltip"><i
                                                                        class="icon-find-plus"></i>
                                                                    <span class="tooltip">Quick View</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="title">
                                                                <a href="/como-residences-by-nakheel">Como Residences</a>

                                                            </h5>
                                                            <p class="location text-1 flex items-center gap-8">
                                                                <i class="icon-location"></i> Palm Jumeirah
                                                            </p>
                                                            <ul class="meta-list flex">
                                                                <li class="text-1 flex"><span>2, 3, 4, 5, 6, 7</span>Beds</li>
                                                                <li class="text-1 flex"><span>2, 3, 4, 5</span>Baths</li>
                                                                <li class="text-1 flex"><span>850 – 3,200</span>Sqft</li>
                                                            </ul>
                                                            <div class="bot flex justify-between items-center">
                                                                <h5 class="price">
                                                                AED 21M
                                                                </h5>
                                                                <div class="wrap-btn flex">
                                                                     
                                                                    <a href="/como-residences-by-nakheel"
                                                                        class="tf-btn style-border pd-4">Details</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="box-house hover-img ">
                                                        <div class="image-wrap">
                                                            <a href="/rove-home-dubai-marina">
                                                                <img class="lazyload"
                                                                    data-src="{{ asset('assets/images/newimages/property/Rove/rove-home-11.jpg') }}"
                                                                    src="{{ asset('assets/images/newimages/property/Rove/rove-home-11.jpg') }}" alt="">
                                                            </a>
                                                            <ul class="box-tag flex gap-8 ">
                                                                <li class="flat-tag text-4 bg-main fw-6 text_white">
                                                                Off-plan</li>
                                                                <li class="flat-tag text-4 bg-3 fw-6 text_white">Apartments</li>
                                                            </ul>
                                                            <div class="list-btn flex gap-8 ">
                                                                <a href="#" class="btn-icon save hover-tooltip"><i
                                                                        class="icon-save"></i>
                                                                    <span class="tooltip">Add Favorite</span>
                                                                </a>
                                                                <a href="#" class="btn-icon find hover-tooltip"><i
                                                                        class="icon-find-plus"></i>
                                                                    <span class="tooltip">Quick View</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="title">
                                                                <a href="/rove-home-dubai-marina">Rove Home Dubai Marina</a>

                                                            </h5>
                                                            <p class="location text-1 flex items-center gap-8">
                                                                <i class="icon-location"></i> Dubai Marina
                                                            </p>
                                                            <ul class="meta-list flex">
                                                                <li class="text-1 flex"><span>1, 2, Studio</span>Beds</li>
                                                                <li class="text-1 flex"><span>3</span>Baths</li>
                                                                <li class="text-1 flex"><span>850 – 3,200</span>Sqft</li>
                                                            </ul>
                                                            <div class="bot flex justify-between items-center">
                                                                <h5 class="price">
                                                                TBA
                                                                </h5>
                                                                <div class="wrap-btn flex">
                                                                     
                                                                    <a href="/rove-home-dubai-marina"
                                                                        class="tf-btn style-border pd-4">Details</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="box-house hover-img ">
                                                        <div class="image-wrap">
                                                            <a href="/pelagos">
                                                                <img class="lazyload"
                                                                    data-src="{{ asset('assets/images/newimages/property/Pelagos/pelagos-g-2.jpg') }}  "
                                                                    src="{{ asset('assets/images/newimages/property/Pelagos/pelagos-g-2.jpg') }}  " alt="">
                                                            </a>
                                                            <ul class="box-tag flex gap-8 ">
                                                                <li class="flat-tag text-4 bg-main fw-6 text_white">
                                                                Off-plan</li>
                                                                <li class="flat-tag text-4 bg-3 fw-6 text_white">Apartments</li>
                                                            </ul>
                                                            <div class="list-btn flex gap-8 ">
                                                                <a href="#" class="btn-icon save hover-tooltip"><i
                                                                        class="icon-save"></i>
                                                                    <span class="tooltip">Add Favorite</span>
                                                                </a>
                                                                <a href="#" class="btn-icon find hover-tooltip"><i
                                                                        class="icon-find-plus"></i>
                                                                    <span class="tooltip">Quick View</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="title">
                                                                <a href="/pelagos">Pelagos</a>

                                                            </h5>
                                                            <p class="location text-1 flex items-center gap-8">
                                                                <i class="icon-location"></i> Dubai Marina
                                                            </p>
                                                            <ul class="meta-list flex">
                                                                <li class="text-1 flex"><span>1, 2, Studio</span>Beds</li>
                                                                <li class="text-1 flex"><span>3</span>Baths</li>
                                                                <li class="text-1 flex"><span>850 – 3,200</span>Sqft</li>
                                                            </ul>
                                                            <div class="bot flex justify-between items-center">
                                                                <h5 class="price">
                                                                AED 1.2M
                                                                </h5>
                                                                <div class="wrap-btn flex">
                                                                     
                                                                    <a href="/pelagos"
                                                                        class="tf-btn style-border pd-4">Details</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="box-house hover-img ">
                                                        <div class="image-wrap">
                                                            <a href="/marina-cove">
                                                                <img class="lazyload"
                                                                    data-src="{{ asset('assets/images/newimages/property/Marina Cove/g-8-14.jpg') }}  "
                                                                    src="{{ asset('assets/images/newimages/property/Marina Cove/g-8-14.jpg') }}  " alt="">
                                                            </a>
                                                            <ul class="box-tag flex gap-8 ">
                                                                <li class="flat-tag text-4 bg-main fw-6 text_white">
                                                                Off-plan</li>
                                                                <li class="flat-tag text-4 bg-3 fw-6 text_white">Apartments</li>
                                                            </ul>
                                                            <div class="list-btn flex gap-8 ">
                                                                <a href="#" class="btn-icon save hover-tooltip"><i
                                                                        class="icon-save"></i>
                                                                    <span class="tooltip">Add Favorite</span>
                                                                </a>
                                                                <a href="#" class="btn-icon find hover-tooltip"><i
                                                                        class="icon-find-plus"></i>
                                                                    <span class="tooltip">Quick View</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="title">
                                                                <a href="/marina-cove">Marina Cove</a>

                                                            </h5>
                                                            <p class="location text-1 flex items-center gap-8">
                                                                <i class="icon-location"></i> Dubai Marina
                                                            </p>
                                                            <ul class="meta-list flex">
                                                                <li class="text-1 flex"><span>1, 2, 3, 4</span>Beds</li>
                                                                <li class="text-1 flex"><span>3</span>Baths</li>
                                                                <li class="text-1 flex"><span>850 – 3,200</span>Sqft</li>
                                                            </ul>
                                                            <div class="bot flex justify-between items-center">
                                                                <h5 class="price">
                                                                AED 2.03M
                                                                </h5>
                                                                <div class="wrap-btn flex">
                                                                     
                                                                    <a href="/marina-cove"
                                                                        class="tf-btn style-border pd-4">Details</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="box-house hover-img ">
                                                        <div class="image-wrap">
                                                            <a href="/franck-muller-vanguard">
                                                                <img class="lazyload"
                                                                    data-src="{{ asset('assets/images/newimages/property/Vanguard/g-1-1-1.jpg') }}  "
                                                                    src="{{ asset('assets/images/newimages/property/Vanguard/g-1-1-1.jpg') }}  " alt="">
                                                            </a>
                                                            <ul class="box-tag flex gap-8 ">
                                                                <li class="flat-tag text-4 bg-main fw-6 text_white">
                                                                Off-plan</li>
                                                                <li class="flat-tag text-4 bg-3 fw-6 text_white">Apartments</li>
                                                            </ul>
                                                            <div class="list-btn flex gap-8 ">
                                                                <a href="#" class="btn-icon save hover-tooltip"><i
                                                                        class="icon-save"></i>
                                                                    <span class="tooltip">Add Favorite</span>
                                                                </a>
                                                                <a href="#" class="btn-icon find hover-tooltip"><i
                                                                        class="icon-find-plus"></i>
                                                                    <span class="tooltip">Quick View</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="title">
                                                                <a href="/franck-muller-vanguard">Franck Muller Vanguard</a>

                                                            </h5>
                                                            <p class="location text-1 flex items-center gap-8">
                                                                <i class="icon-location"></i> Dubai Marina
                                                            </p>
                                                            <ul class="meta-list flex">
                                                                <li class="text-1 flex"><span>1, 2, 3, Studio</span>Beds</li>
                                                                <li class="text-1 flex"><span>3</span>Baths</li>
                                                                <li class="text-1 flex"><span>850 – 3,200</span>Sqft</li>
                                                            </ul>
                                                            <div class="bot flex justify-between items-center">
                                                                <h5 class="price">
                                                                AED 1.25M
                                                                </h5>
                                                                <div class="wrap-btn flex">
                                                                    
                                                                    <a href="/franck-muller-vanguard"
                                                                        class="tf-btn style-border pd-4">Details</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="box-house hover-img">
                                                        <div class="image-wrap">
                                                            <a href="/kempinski-marina-residences">
                                                                <img class="lazyload"
                                                                    data-src="{{ asset('assets/images/newimages/property/Kempinski/kempinski-9.jpg') }}  "
                                                                    src="{{ asset('assets/images/newimages/property/Kempinski/kempinski-9.jpg') }}  " alt="">
                                                            </a>
                                                            <ul class="box-tag flex gap-8 ">
                                                                <li class="flat-tag text-4 bg-main fw-6 text_white">
                                                                Off-plan</li>
                                                                <li class="flat-tag text-4 bg-3 fw-6 text_white">Apartments, Duplex</li>
                                                            </ul>
                                                            <div class="list-btn flex gap-8 ">
                                                                <a href="#" class="btn-icon save hover-tooltip"><i
                                                                        class="icon-save"></i>
                                                                    <span class="tooltip">Add Favorite</span>
                                                                </a>
                                                                <a href="#" class="btn-icon find hover-tooltip"><i
                                                                        class="icon-find-plus"></i>
                                                                    <span class="tooltip">Quick View</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="title">
                                                                <a href="/kempinski-marina-residences">Kempinski Marina</a>

                                                            </h5>
                                                            <p class="location text-1 flex items-center gap-8">
                                                                <i class="icon-location"></i> Dubai Marina
                                                            </p>
                                                            <ul class="meta-list flex">
                                                                <li class="text-1 flex"><span>1, 2, 3, 4, 5</span>Beds</li>
                                                                <li class="text-1 flex"><span>3</span>Baths</li>
                                                                <li class="text-1 flex"><span>850 – 3,200</span>Sqft</li>
                                                            </ul>
                                                            <div class="bot flex justify-between items-center">
                                                                <h5 class="price">
                                                                AED 2.2M
                                                                </h5>
                                                                <div class="wrap-btn flex">
                                                                     
                                                                    <a href="/kempinski-marina-residences"
                                                                        class="tf-btn style-border pd-4">Details</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="box-house hover-img">
                                                        <div class="image-wrap">
                                                            <a href="/habtoor-grand-residences">
                                                                <img class="lazyload"
                                                                    data-src="{{ asset('assets/images/newimages/property/Habtoor/habtoor-8-1.jpg') }}  "
                                                                    src="{{ asset('assets/images/newimages/property/Habtoor/habtoor-8-1.jpg') }}  " alt="">
                                                            </a>
                                                            <ul class="box-tag flex gap-8 ">
                                                                <li class="flat-tag text-4 bg-main fw-6 text_white">
                                                                Off-plan</li>
                                                                <li class="flat-tag text-4 bg-3 fw-6 text_white">Apartments, Penthouses</li>
                                                            </ul>
                                                            <div class="list-btn flex gap-8 ">
                                                                <a href="#" class="btn-icon save hover-tooltip"><i
                                                                        class="icon-save"></i>
                                                                    <span class="tooltip">Add Favorite</span>
                                                                </a>
                                                                <a href="#" class="btn-icon find hover-tooltip"><i
                                                                        class="icon-find-plus"></i>
                                                                    <span class="tooltip">Quick View</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="title">
                                                                <a href="/habtoor-grand-residences">Habtoor Grand</a>

                                                            </h5>
                                                            <p class="location text-1 flex items-center gap-8">
                                                                <i class="icon-location"></i> Dubai Marina
                                                            </p>
                                                            <ul class="meta-list flex">
                                                                <li class="text-1 flex"><span>2, 3, 4, 5</span>Beds</li>
                                                                <li class="text-1 flex"><span>3</span>Baths</li>
                                                                <li class="text-1 flex"><span>850 – 3,200</span>Sqft</li>
                                                            </ul>
                                                            <div class="bot flex justify-between items-center">
                                                                <h5 class="price">
                                                                AED 11M
                                                                </h5>
                                                                <div class="wrap-btn flex">
                                                                     
                                                                    <a href="/habtoor-grand-residences"
                                                                        class="tf-btn style-border pd-4">Details</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="box-house hover-img ">
                                                        <div class="image-wrap">
                                                            <a href="/the-canal">
                                                                <img class="lazyload"
                                                                    data-src="{{ asset('assets/images/newimages/property/Canal/Gallery-8-20.jpg ') }}"
                                                                    src="{{ asset('assets/images/newimages/property/Canal/Gallery-8-20.jpg ') }}" alt="">
                                                            </a>
                                                            <ul class="box-tag flex gap-8 ">
                                                                <li class="flat-tag text-4 bg-main fw-6 text_white">
                                                                Off-plan</li>
                                                                <li class="flat-tag text-4 bg-3 fw-6 text_white">Apartments, Penthouses</li>
                                                            </ul>
                                                            <div class="list-btn flex gap-8 ">
                                                                <a href="#" class="btn-icon save hover-tooltip"><i
                                                                        class="icon-save"></i>
                                                                    <span class="tooltip">Add Favorite</span>
                                                                </a>
                                                                <a href="#" class="btn-icon find hover-tooltip"><i
                                                                        class="icon-find-plus"></i>
                                                                    <span class="tooltip">Quick View</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="title">
                                                                <a href="/the-canal">The Canal</a>

                                                            </h5>
                                                            <p class="location text-1 flex items-center gap-8">
                                                                <i class="icon-location"></i> Business Bay
                                                            </p>
                                                            <ul class="meta-list flex">
                                                                <li class="text-1 flex"><span>3, 4, 5</span>Beds</li>
                                                                <li class="text-1 flex"><span>3</span>Baths</li>
                                                                <li class="text-1 flex"><span>850 – 3,200</span>Sqft</li>
                                                            </ul>
                                                            <div class="bot flex justify-between items-center">
                                                                <h5 class="price">
                                                                AED 24.1M
                                                                </h5>
                                                                <div class="wrap-btn flex">
                                                                    
                                                                    <a href="/the-canal"
                                                                        class="tf-btn style-border pd-4">Details</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="box-house hover-img ">
                                                        <div class="image-wrap">
                                                            <a href="/haus-Of-tenet">
                                                                <img class="lazyload"
                                                                    data-src="{{ asset('assets/images/newimages/property/Tenet/Gallery-1-7.jpg') }}  "
                                                                    src="{{ asset('assets/images/newimages/property/Tenet/Gallery-1-7.jpg') }}  " alt="">
                                                            </a>
                                                            <ul class="box-tag flex gap-8 ">
                                                                <li class="flat-tag text-4 bg-main fw-6 text_white">
                                                                Off-plan</li>
                                                                <li class="flat-tag text-4 bg-3 fw-6 text_white">Office</li>
                                                            </ul>
                                                            <div class="list-btn flex gap-8 ">
                                                                <a href="#" class="btn-icon save hover-tooltip"><i
                                                                        class="icon-save"></i>
                                                                    <span class="tooltip">Add Favorite</span>
                                                                </a>
                                                                <a href="#" class="btn-icon find hover-tooltip"><i
                                                                        class="icon-find-plus"></i>
                                                                    <span class="tooltip">Quick View</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="title">
                                                                <a href="/haus-Of-tenet">Haus Of Tenet</a>

                                                            </h5>
                                                            <p class="location text-1 flex items-center gap-8">
                                                                <i class="icon-location"></i> Business Bay
                                                            </p>
                                                            <ul class="meta-list flex">
                                                                <li class="text-1 flex"><span>TBA</span>Beds</li>
                                                                <li class="text-1 flex"><span>TBA</span>Baths</li>
                                                                <li class="text-1 flex"><span>850 – 3,200</span>Sqft</li>
                                                            </ul>
                                                            <div class="bot flex justify-between items-center">
                                                                <h5 class="price">
                                                                TBA
                                                                </h5>
                                                                <div class="wrap-btn flex">
                                                                     
                                                                    <a href="/haus-Of-tenet"
                                                                        class="tf-btn style-border pd-4">Details</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="box-house hover-img ">
                                                        <div class="image-wrap">
                                                            <a href="/avarra">
                                                                <img class="lazyload"
                                                                    data-src="{{ asset('assets/images/newimages/property/avarra/Gallery-4-26.jpg') }}  "
                                                                    src="{{ asset('assets/images/newimages/property/avarra/Gallery-4-26.jpg') }}  " alt="">
                                                            </a>
                                                            <ul class="box-tag flex gap-8 ">
                                                                <li class="flat-tag text-4 bg-main fw-6 text_white">
                                                                Off-plan</li>
                                                                <li class="flat-tag text-4 bg-3 fw-6 text_white">Apartments</li>
                                                            </ul>
                                                            <div class="list-btn flex gap-8 ">
                                                                <a href="#" class="btn-icon save hover-tooltip"><i
                                                                        class="icon-save"></i>
                                                                    <span class="tooltip">Add Favorite</span>
                                                                </a>
                                                                <a href="#" class="btn-icon find hover-tooltip"><i
                                                                        class="icon-find-plus"></i>
                                                                    <span class="tooltip">Quick View</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="title">
                                                                <a href="/avarra">Avarra</a>

                                                            </h5>
                                                            <p class="location text-1 flex items-center gap-8">
                                                                <i class="icon-location"></i> Business Bay
                                                            </p>
                                                            <ul class="meta-list flex">
                                                                <li class="text-1 flex"><span>1, 2, 3, 4</span>Beds</li>
                                                                <li class="text-1 flex"><span>1, 2, 3, 4</span>Baths</li>
                                                                <li class="text-1 flex"><span>850 – 3,200</span>Sqft</li>
                                                            </ul>
                                                            <div class="bot flex justify-between items-center">
                                                                <h5 class="price">
                                                                AED 2.7M
                                                                </h5>
                                                                <div class="wrap-btn flex">
                                                                     
                                                                    <a href="/avarra"
                                                                        class="tf-btn style-border pd-4">Details</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="box-house hover-img ">
                                                        <div class="image-wrap">
                                                            <a href="/eywa">
                                                                <img class="lazyload"
                                                                    data-src="{{ asset('assets/images/newimages/property/Eywa/Gallery-2-9.jpg') }}  "
                                                                    src="{{ asset('assets/images/newimages/property/Eywa/Gallery-2-9.jpg') }}  " alt="">
                                                            </a>
                                                            <ul class="box-tag flex gap-8 ">
                                                                <li class="flat-tag text-4 bg-main fw-6 text_white">
                                                                Off-plan</li>
                                                                <li class="flat-tag text-4 bg-3 fw-6 text_white">Apartments, Duplex</li>
                                                            </ul>
                                                            <div class="list-btn flex gap-8 ">
                                                                <a href="#" class="btn-icon save hover-tooltip"><i
                                                                        class="icon-save"></i>
                                                                    <span class="tooltip">Add Favorite</span>
                                                                </a>
                                                                <a href="#" class="btn-icon find hover-tooltip"><i
                                                                        class="icon-find-plus"></i>
                                                                    <span class="tooltip">Quick View</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="title">
                                                                <a href="/eywa">Eywa 2</a>

                                                            </h5>
                                                            <p class="location text-1 flex items-center gap-8">
                                                                <i class="icon-location"></i> Business Bay
                                                            </p>
                                                            <ul class="meta-list flex">
                                                                <li class="text-1 flex"><span>2, 3, 4, 5</span>Beds</li>
                                                                <li class="text-1 flex"><span>3</span>Baths</li>
                                                                <li class="text-1 flex"><span>850 – 3,200</span>Sqft</li>
                                                            </ul>
                                                            <div class="bot flex justify-between items-center">
                                                                <h5 class="price">
                                                                AED 8.3M
                                                                </h5>
                                                                <div class="wrap-btn flex">
                                                                    
                                                                    <a href="/eywa"
                                                                        class="tf-btn style-border pd-4">Details</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="box-house hover-img">
                                                        <div class="image-wrap">
                                                            <a href="/lumena-alta">
                                                                <img class="lazyload"
                                                                    data-src="{{ asset('assets/images/newimages/property/Lumena/alta-g-3.jpg') }}  "
                                                                    src="{{ asset('assets/images/newimages/property/Lumena/alta-g-3.jpg') }}  " alt="">
                                                            </a>
                                                            <ul class="box-tag flex gap-8 ">
                                                                <li class="flat-tag text-4 bg-main fw-6 text_white">
                                                                Off-plan</li>
                                                                <li class="flat-tag text-4 bg-3 fw-6 text_white">Office, Retail Units</li>
                                                            </ul>
                                                            <div class="list-btn flex gap-8 ">
                                                                <a href="#" class="btn-icon save hover-tooltip"><i
                                                                        class="icon-save"></i>
                                                                    <span class="tooltip">Add Favorite</span>
                                                                </a>
                                                                <a href="#" class="btn-icon find hover-tooltip"><i
                                                                        class="icon-find-plus"></i>
                                                                    <span class="tooltip">Quick View</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="title">
                                                                <a href="/lumena-alta">Lumena Alta</a>

                                                            </h5>
                                                            <p class="location text-1 flex items-center gap-8">
                                                                <i class="icon-location"></i> Business Bay
                                                            </p>
                                                            <ul class="meta-list flex">
                                                                <li class="text-1 flex"><span>Office</span>Beds</li>
                                                                <li class="text-1 flex"><span>1</span>Baths</li>
                                                                <li class="text-1 flex"><span>850 – 3,200</span>Sqft</li>
                                                            </ul>
                                                            <div class="bot flex justify-between items-center">
                                                                <h5 class="price">
                                                                AED 19M
                                                                </h5>
                                                                <div class="wrap-btn flex">
                                                                     
                                                                    <a href="/lumena-alta"
                                                                        class="tf-btn style-border pd-4">Details</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="box-house hover-img">
                                                        <div class="image-wrap">
                                                            <a href="/eden-house-marasi">
                                                                <img class="lazyload"
                                                                    data-src="{{ asset('assets/images/newimages/property/Eden/Gallery-1-2.jpg') }}  "
                                                                    src="{{ asset('assets/images/newimages/property/Eden/Gallery-1-2.jpg') }}  " alt="">
                                                            </a>
                                                            <ul class="box-tag flex gap-8 ">
                                                                <li class="flat-tag text-4 bg-main fw-6 text_white">
                                                                Off-plan</li>
                                                                <li class="flat-tag text-4 bg-3 fw-6 text_white">Penthouses</li>
                                                            </ul>
                                                            <div class="list-btn flex gap-8 ">
                                                                <a href="#" class="btn-icon save hover-tooltip"><i
                                                                        class="icon-save"></i>
                                                                    <span class="tooltip">Add Favorite</span>
                                                                </a>
                                                                <a href="#" class="btn-icon find hover-tooltip"><i
                                                                        class="icon-find-plus"></i>
                                                                    <span class="tooltip">Quick View</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="title">
                                                                <a href="/eden-house-marasi">Eden House Marasi</a>

                                                            </h5>
                                                            <p class="location text-1 flex items-center gap-8">
                                                                <i class="icon-location"></i> Business Bay
                                                            </p>
                                                            <ul class="meta-list flex">
                                                                <li class="text-1 flex"><span>4</span>Beds</li>
                                                                <li class="text-1 flex"><span>4</span>Baths</li>
                                                                <li class="text-1 flex"><span>850 – 3,200</span>Sqft</li>
                                                            </ul>
                                                            <div class="bot flex justify-between items-center">
                                                                <h5 class="price">
                                                                TBA
                                                                </h5>
                                                                <div class="wrap-btn flex">
                                                                     
                                                                    <a href="/eden-house-marasi"
                                                                        class="tf-btn style-border pd-4">Details</a>
                                                                </div>
                                                            </div>
                                                        </div>
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