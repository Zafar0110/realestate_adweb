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
                                <li>Property 113 Residences</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /flat-title -->

        <!-- .main-content -->
        <div class="main-content">


            <!-- section-property-detail -->
            <section class="section-property-detail  style-2">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7">
                            <div class=" single-property-gallery style-1">
                                <div class="position-relative">
                                    <div class="swiper sw-single">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a href="{{ asset('assets/images/newimages/property/Residences/gallery-1-5.jpg') }}"
                                                    data-fancybox="gallery" class="image-wrap d-block">
                                                    <img class="lazyload"
                                                        data-src="{{ asset('assets/images/newimages/property/Residences/gallery-1-5.jpg') }}"
                                                        src="{{ asset('assets/images/newimages/property/Residences/gallery-1-5.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="{{ asset('assets/images/newimages/property/Residences/gallery-2-5.jpg') }}"
                                                    data-fancybox="gallery" class="image-wrap d-block">
                                                    <img class="lazyload"
                                                        data-src="{{ asset('assets/images/newimages/property/Residences/gallery-2-5.jpg') }}"
                                                        src="{{ asset('assets/images/newimages/property/Residences/gallery-2-5.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="{{ asset('assets/images/newimages/property/Residences/gallery-3-4.jpg') }}"
                                                    data-fancybox="gallery" class="image-wrap d-block">
                                                    <img class="lazyload"
                                                        data-src="{{ asset('assets/images/newimages/property/Residences/gallery-3-4.jpg') }}"
                                                        src="{{ asset('assets/images/newimages/property/Residences/gallery-3-4.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="{{ asset('assets/images/newimages/property/Residences/gallery-4-4.jpg') }}"
                                                    data-fancybox="gallery" class="image-wrap d-block">
                                                    <img class="lazyload"
                                                        data-src="{{ asset('assets/images/newimages/property/Residences/gallery-4-4.jpg') }}"
                                                        src="{{ asset('assets/images/newimages/property/Residences/gallery-4-4.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="{{ asset('assets/images/newimages/property/Residences/gallery-1-5.jpg') }}"
                                                    data-fancybox="gallery" class="image-wrap d-block">
                                                    <img class="lazyload"
                                                        data-src="{{ asset('assets/images/newimages/property/Residences/gallery-1-5.jpg') }}"
                                                        src="{{ asset('assets/images/newimages/property/Residences/gallery-1-5.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="{{ asset('assets/images/newimages/property/Residences/gallery-2-5.jpg') }}"
                                                    data-fancybox="gallery" class="image-wrap d-block">
                                                    <img class="lazyload"
                                                        data-src="{{ asset('assets/images/newimages/property/Residences/gallery-2-5.jpg') }}"
                                                        src="{{ asset('assets/images/newimages/property/Residences/gallery-2-5.jpg') }}" alt="">
                                                </a>
                                            </div>
                                             
                                        </div>
                                    </div>
                                    <div class="box-navigation">
                                        <div class="swiper-button-prev sw-button style-2 sw-thumbs-prev">
                                            <i class="icon-arrow-left-1"></i>
                                        </div>
                                        <div class="swiper-button-next sw-button style-2 sw-thumbs-next">
                                            <i class="icon-arrow-right-1"></i>
                                        </div>
                                    </div>
                                    <div class="swiper thumbs-sw-pagi" data-preview="5" data-space="15"
                                        data-mobile-sm="5">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="img-thumb-pagi">
                                                    <img src="{{ asset('assets/images/newimages/property/Residences/gallery-1-5.jpg') }}" alt="images">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="img-thumb-pagi">
                                                    <img src="{{ asset('assets/images/newimages/property/Residences/gallery-2-5.jpg') }}" alt="images">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="img-thumb-pagi">
                                                    <img src="{{ asset('assets/images/newimages/property/Residences/gallery-3-4.jpg') }}" alt="images">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="img-thumb-pagi">
                                                    <img src="{{ asset('assets/images/newimages/property/Residences/gallery-4-4.jpg') }}" alt="images">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="img-thumb-pagi">
                                                    <img src="{{ asset('assets/images/newimages/property/Residences/gallery-1-5.jpg') }}" alt="images">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="img-thumb-pagi">
                                                    <img src="{{ asset('assets/images/newimages/property/Residences/gallery-2-5.jpg') }}" alt="images">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wg-property box-overview ">
                                <div class="heading flex justify-between">
                                    <div class="title text-5 fw-6 text-color-heading">
                                    113 Residences

                                    </div>
                                    <div class="price text-5 fw-6 text-color-heading">
                                    AED 1.8M
                                        
                                    </div>
                                </div>
                                <div class="info flex justify-between">
                                    <div class="feature">
                                        <p class="location text-1 flex items-center gap-10">
                                            <i class="icon-location"></i>Al Sufouh
                                        </p>
                                        <ul class="meta-list flex">
                                            <li class="text-1 flex"><span>1, 2, 3, Duplex</span>Bed</li>
                                            <li class="text-1 flex"><span>1, 2, 3</span>Bath</li>
                                            <li class="text-1 flex"><span>850 – 3,200  </span>Sqft</li>
                                        </ul>
                                    </div>
                                    <div class="action action-button-list">
                                        <ul class="list-action">
                                            <li><a href="#"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.75 6.1875C15.75 4.32375 14.1758 2.8125 12.234 2.8125C10.7828 2.8125 9.53625 3.657 9 4.86225C8.46375 3.657 7.21725 2.8125 5.76525 2.8125C3.825 2.8125 2.25 4.32375 2.25 6.1875C2.25 11.6025 9 15.1875 9 15.1875C9 15.1875 15.75 11.6025 15.75 6.1875Z"
                                                            stroke="#5C5E61" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a></li>
                                            <li><a href="#"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5.625 15.75L2.25 12.375M2.25 12.375L5.625 9M2.25 12.375H12.375M12.375 2.25L15.75 5.625M15.75 5.625L12.375 9M15.75 5.625H5.625"
                                                            stroke="#5C5E61" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a></li>
                                            <li><a href="#"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5.04 10.3718C4.86 10.3943 4.68 10.4183 4.5 10.4438M5.04 10.3718C7.66969 10.0418 10.3303 10.0418 12.96 10.3718M5.04 10.3718L4.755 13.5M12.96 10.3718C13.14 10.3943 13.32 10.4183 13.5 10.4438M12.96 10.3718L13.245 13.5L13.4167 15.3923C13.4274 15.509 13.4136 15.6267 13.3762 15.7378C13.3388 15.8489 13.2787 15.951 13.1996 16.0376C13.1206 16.1242 13.0244 16.1933 12.9172 16.2407C12.8099 16.288 12.694 16.3125 12.5767 16.3125H5.42325C4.92675 16.3125 4.53825 15.8865 4.58325 15.3923L4.755 13.5M4.755 13.5H3.9375C3.48995 13.5 3.06072 13.3222 2.74426 13.0057C2.42779 12.6893 2.25 12.2601 2.25 11.8125V7.092C2.25 6.28125 2.826 5.58075 3.62775 5.46075C4.10471 5.3894 4.58306 5.32764 5.0625 5.2755M13.2435 13.5H14.0618C14.2834 13.5001 14.5029 13.4565 14.7078 13.3718C14.9126 13.287 15.0987 13.1627 15.2555 13.006C15.4123 12.8493 15.5366 12.6632 15.6215 12.4585C15.7063 12.2537 15.75 12.0342 15.75 11.8125V7.092C15.75 6.28125 15.174 5.58075 14.3723 5.46075C13.8953 5.38941 13.4169 5.32764 12.9375 5.2755M12.9375 5.2755C10.3202 4.99073 7.67978 4.99073 5.0625 5.2755M12.9375 5.2755V2.53125C12.9375 2.0655 12.5595 1.6875 12.0938 1.6875H5.90625C5.4405 1.6875 5.0625 2.0655 5.0625 2.53125V5.2755M13.5 7.875H13.506V7.881H13.5V7.875ZM11.25 7.875H11.256V7.881H11.25V7.875Z"
                                                            stroke="#5C5E61" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a></li>
                                            <li><a href="#"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5.41251 8.18028C5.23091 7.85351 4.94594 7.5963 4.60234 7.44902C4.25874 7.30173 3.87596 7.27271 3.51408 7.36651C3.1522 7.46032 2.83171 7.67163 2.60293 7.96728C2.37414 8.26293 2.25 8.62619 2.25 9.00003C2.25 9.37387 2.37414 9.73712 2.60293 10.0328C2.83171 10.3284 3.1522 10.5397 3.51408 10.6335C3.87596 10.7273 4.25874 10.6983 4.60234 10.551C4.94594 10.4038 5.23091 10.1465 5.41251 9.81978M5.41251 8.18028C5.54751 8.42328 5.62476 8.70228 5.62476 9.00003C5.62476 9.29778 5.54751 9.57753 5.41251 9.81978M5.41251 8.18028L12.587 4.19478M5.41251 9.81978L12.587 13.8053M12.587 4.19478C12.6922 4.39288 12.8358 4.56803 13.0095 4.70998C13.1832 4.85192 13.3834 4.95782 13.5985 5.02149C13.8135 5.08515 14.0392 5.1053 14.2621 5.08075C14.4851 5.0562 14.7009 4.98745 14.897 4.87853C15.093 4.7696 15.2654 4.62267 15.404 4.44634C15.5427 4.27001 15.6448 4.06781 15.7043 3.85157C15.7639 3.63532 15.7798 3.40937 15.751 3.18693C15.7222 2.96448 15.6494 2.75 15.5368 2.55603C15.3148 2.17378 14.9518 1.89388 14.5256 1.77649C14.0995 1.6591 13.6443 1.71359 13.2579 1.92824C12.8715 2.1429 12.5848 2.50059 12.4593 2.92442C12.3339 3.34826 12.3797 3.80439 12.587 4.19478ZM12.587 13.8053C12.4794 13.9991 12.4109 14.2121 12.3856 14.4324C12.3603 14.6526 12.3787 14.8757 12.4396 15.0888C12.5005 15.3019 12.6028 15.501 12.7406 15.6746C12.8784 15.8482 13.0491 15.993 13.2429 16.1007C13.4367 16.2083 13.6498 16.2767 13.87 16.302C14.0902 16.3273 14.3133 16.309 14.5264 16.2481C14.7396 16.1872 14.9386 16.0849 15.1122 15.9471C15.2858 15.8092 15.4306 15.6386 15.5383 15.4448C15.7557 15.0534 15.8087 14.5917 15.6857 14.1613C15.5627 13.7308 15.2737 13.3668 14.8824 13.1494C14.491 12.932 14.0293 12.879 13.5989 13.002C13.1684 13.125 12.8044 13.4139 12.587 13.8053Z"
                                                            stroke="#5C5E61" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info-detail ">
                                    <div class="wrap-box">
                                        <div class="box-icon">
                                            <div class="icons">
                                                <i class="icon-HouseLine"></i>
                                            </div>
                                            <div class="content">
                                                <div class="text-4 text-color-default">ID:</div>
                                                <div class="text-1 text-color-heading">7623</div>
                                            </div>
                                        </div>
                                        <div class="box-icon">
                                            <div class="icons">
                                                <i class="icon-Bathtub"></i>
                                            </div>
                                            <div class="content">
                                                <div class="text-4 text-color-default">Bathrooms:</div>
                                                <div class="text-1 text-color-heading">1, 2, 3  </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wrap-box">
                                        <div class="box-icon">
                                            <div class="icons">
                                                <i class="icon-SlidersHorizontal"></i>
                                            </div>
                                            <div class="content">
                                                <div class="text-4 text-color-default">Type:</div>
                                                <div class="text-1 text-color-heading">Apartments, Duplex     </div>
                                            </div>
                                        </div>
                                        <div class="box-icon">
                                            <div class="icons">
                                                <i class="icon-Crop"></i>
                                            </div>
                                            <div class="content">
                                                <div class="text-4 text-color-default">Land Size:</div>
                                                <div class="text-1 text-color-heading">850 – 3,200 sq.ft</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="wrap-box">
                                        <div class="box-icon">
                                            <div class="icons">
                                                <i class="icon-Bed-2"></i>
                                            </div>
                                            <div class="content">
                                                <div class="text-4 text-color-default">Bedrooms:</div>
                                                <div class="text-1 text-color-heading">1, 2, 3, Duplex</div>
                                            </div>
                                        </div>
                                         
                                    </div>
                                </div>
                             </div>
                             
                            <div class="wg-property box-property-detail  spacing-1">
                                <div class="wg-title text-11 fw-6 text-color-heading">
                                Project Overview
                                </div>
                                <div class="content">
                                    <p class="description text-1 mb-10">113 Residences by Iman Developers presents a sophisticated residential destination in Al Sufouh, crafted with fluid architecture, layered terraces, and elegant contemporary finishes. The development offers a curated collection of 1, 2, and 3-bedroom apartments alongside exclusive 4-bedroom duplexes with private pools, designed for refined urban living in one of Dubai’s most connected districts.
                                        <br>113 Residences Al Sufouh combines premium residential experiences with strong long-term investment potential and high capital appreciation. Residents will enjoy fitness, leisure, and recreational facilities, expansive layouts, floor-to-ceiling glazing, and luxury design elements that create a balanced lifestyle surrounded by comfort, privacy, and modern sophistication.
                                    </p>
                                     
                                </div>
                                <div class="box">
                                    <ul>
                                        <li class="flex">
                                            <p class="fw-6">ID</p>
                                            <p>7623</p>
                                        </li>
                                        <li class="flex">
                                            <p class="fw-6">Starting Price</p>
                                            <p>AED 1,800,000
                                            </p>
                                        </li>
                                        <li class="flex">
                                            <p class="fw-6">Size Range</p>
                                            <p>850 – 3,200 sq.ft</p>
                                        </li>
                                       
                                        <li class="flex">
                                            <p class="fw-6">Property Types</p>
                                            <p>Apartments, Duplex</p>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="flex">
                                            <p class="fw-6">Developer</p>
                                            <p>Iman Developers</p>
                                        </li>
                                        <li class="flex">
                                            <p class="fw-6">Handover</p>
                                            <p>2029</p>
                                        </li>
                                        <li class="flex">
                                            <p class="fw-6">Bedrooms</p>
                                            <p>1, 2, 3, Duplex</p>
                                        </li>
                                        <li class="flex">
                                            <p class="fw-6">Location</p>
                                            <p>Al Sufouh</p>
                                        </li>
                                        
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="wg-property box-amenities spacing-3">
                                <div class="wg-title text-11 fw-6 text-color-heading">
                                    Amenities And Features
                                </div>
                                <p>113 Residences offers an exceptional array of world-class amenities designed to enhance every aspect of modern living.</p>
                                <br>
                                <div class="wrap-feature">
                                    <div class="box-feature">
                                        <ul>
                                            <li class="feature-item">
                                            Fitness Facilities
                                            </li>
                                            <li class="feature-item">
                                            Leisure and Recreation
                                            </li>
                                             
                                             
                                        </ul>
                                    </div>
                                    
                                   
                                </div>
                            </div>
                          
                            <div class="wg-property single-property-map spacing-9">
                                <div class="wg-title text-11 fw-6 text-color-heading">Get Direction</div>
                                <iframe class="map"
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d135905.11693909427!2d-73.95165795400088!3d41.17584829642291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1727094281524!5m2!1sen!2s"
                                    style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    <p>113 Residences Dubai apartments are located in Al Sufouh 1, offering seamless access to Sheikh Zayed Road (E11) and some of Dubai’s most prominent lifestyle destinations. The project combines urban connectivity with a refined residential atmosphere, positioned close to beaches, golf clubs, retail hubs, and major city landmarks.</p>    
                            </div>
                           
                          
                            
                            
                          
                             

                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class=" tf-sidebar sticky-sidebar ">
                                <form class="form-contact-seller mb-30">
                                    <h4 class="heading-title mb-30">
                                        Contact Sellers
                                    </h4>
                                    <div class="seller-info">
                                        <div class="avartar">
                                            <img src="{{ asset('assets/images/avatar/seller.jpg') }} " alt="">
                                        </div>
                                        <div class="content">
                                            <h6 class="name">Shara Conner</h6>
                                            <ul class="contact">
                                                <li><i class="icon-phone-1"></i><span>1-333-345-6868</span></li>
                                                <li><i class="icon-mail"></i><a href="#">themesflat@gmail.com</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <fieldset class="mb-12">
                                        <input type="text" class="form-control" placeholder="Full Name" name="name"
                                            id="name2" required>
                                    </fieldset>
                                    <fieldset class="mb-30">
                                        <textarea name="message" cols="30" rows="10" placeholder="How can an agent help"
                                            id="message2" required></textarea>
                                    </fieldset>

                                    <a href="#" class="tf-btn bg-color-primary w-full">
                                        Send message</a>
                                </form>
                                <div class=" sidebar-ads mb-30">
                                    <div class="image-wrap">
                                        <img class="lazyload" data-src="{{ asset('assets/images/blog/ads.jpg') }} " src="images/blog/ads.jpg"
                                            alt="">
                                    </div>
                                    <div class="logo relative z-5">
                                        <img src="{{ asset('assets/logo/logo-2%402x.png') }}  " alt="">
                                    </div>
                                    <div class="box-ads relative z-5">
                                        <div class="content ">
                                            <h4 class="title"><a href="property-detail-v1.html">We can help you find
                                                    a
                                                    local real estate agent</a> </h4>
                                            <div class="text-addres ">
                                                <p>Connect with a trusted agent who knows the market inside out -
                                                    whether you’re buying or selling.</p>
                                            </div>
                                        </div>
                                        <a href="#" class="tf-btn fw-6 bg-color-primary fw-6 w-full">
                                            Connect with an agent
                                        </a>
                                    </div>
                                </div>
                                <form class="form-contact-agent">
                                    <h4 class="heading-title mb-30">
                                        More About This Property
                                    </h4>
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Your name" name="name"
                                            id="name3" required>
                                    </fieldset>
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Email" name="email"
                                            id="email3" required>
                                    </fieldset>
                                    <fieldset class="phone">
                                        <input type="text" class="form-control " placeholder="Phone" name="phone"
                                            id="phone" required>
                                    </fieldset>
                                    <fieldset>
                                        <textarea name="message" cols="30" rows="10" placeholder="Message" id="message3"
                                            required></textarea>
                                    </fieldset>
                                    <div class="wrap-btn">
                                        <a href="#" class="tf-btn bg-color-primary fw-6 w-full"><svg width="20"
                                                height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18.125 5.625V14.375C18.125 14.8723 17.9275 15.3492 17.5758 15.7008C17.2242 16.0525 16.7473 16.25 16.25 16.25H3.75C3.25272 16.25 2.77581 16.0525 2.42417 15.7008C2.07254 15.3492 1.875 14.8723 1.875 14.375V5.625M18.125 5.625C18.125 5.12772 17.9275 4.65081 17.5758 4.29917C17.2242 3.94754 16.7473 3.75 16.25 3.75H3.75C3.25272 3.75 2.77581 3.94754 2.42417 4.29917C2.07254 4.65081 1.875 5.12772 1.875 5.625M18.125 5.625V5.8275C18.125 6.14762 18.0431 6.46242 17.887 6.74191C17.7309 7.0214 17.5059 7.25628 17.2333 7.42417L10.9833 11.27C10.6877 11.4521 10.3472 11.5485 10 11.5485C9.65275 11.5485 9.31233 11.4521 9.01667 11.27L2.76667 7.425C2.4941 7.25711 2.26906 7.02224 2.11297 6.74275C1.95689 6.46325 1.87496 6.14845 1.875 5.82833V5.625"
                                                    stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                            Email agent</a>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section-property-detail -->

            <!-- section-opinion -->
            <section class="section-similar-properties tf-spacing-3 ">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading-section mb-32">
                                <h2 class="title ">Similar Properties</h2>
                            </div>
                            <div class="swiper style-pagination tf-sw-mobile-1" data-screen="991" data-preview="1"
                                data-space="15">
                                <div class="swiper-wrapper tf-layout-mobile-xl  lg-col-3 wrap-agent wow fadeInUp"
                                    data-wow-delay=".2s">
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
                                </div>
                                <div class="sw-pagination sw-pagination-mb-1 text-center d-lg-none d-block mt-20"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /section-opinion -->

            <!-- section-CTA -->
            <section class="section-CTA">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="content-inner">
                                <img src="{{ asset('assets/images/section/cta.png') }} " alt="">
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