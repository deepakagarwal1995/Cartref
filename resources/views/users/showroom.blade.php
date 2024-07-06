@extends('users.layout', ['title' => 'Showroom'])
@section('content')
    <div class="container-fluid banner-slider pt-3">
        <div class="row">
            <div class="col-md-6 slider1"><a href="#"><img src="{{ asset('assets/images/2022-01-25.jpg') }}"
                        class="img-fluid height-banner" alt=""></a></div>
            <div class="col-md-3 slider2">
                <div class="row home-banner">
                    <div class="col-12">
                        <a href="#"><img src="{{ asset('assets/images/IMG_3704.JPG') }}" class="img-fluid "
                                alt=""></a>
                    </div>
                    <div class="col-12">
                        <a href="#"><img src="{{ asset('assets/images/IMG_3779.JPG') }}" class="img-fluid"
                                alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 slider3"><a href="#"><img src="{{ asset('assets/images/DSC_0929.JPG') }}"
                        class="img-fluid height-banner" alt=""></a></div>
        </div>
    </div>



    <section class="vendor-profile pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="profile-left">
                        <div class="profile-image">
                            <div>
                                <img src="{{ asset('assets/images/e0d1e95d409648b44673e347af1eb1cb.png') }}"
                                    class="img-fluid" alt="">


                            </div>
                        </div>
                        <div class="profile-detail">
                            <div>
                                <h3><b>Bachoomal Sons</b></h3>
                                <p>A ready-made garment retailer offering diverse collections for men, women, and children,
                                    with a specialization in ethnic wear.</p>
                                <p><b>OPEN NOW 8AM -10 PM (TODAY)</b></p>
                            </div>
                        </div>
                        <div class="vendor-contact">
                            <div>

                                <a href="#" class="btn btn-solid btn-sm"><i class="fa fa-star"></i> 4.5</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="section-t-space">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="title1 title-fancy ">

                        <h2 class="title-inner1">Brands</h2>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-b-space" style="background: #EBD96B;">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="slide-6 no-arrow">
                        <div>
                            <div class="logo-block">
                                <a href="#"><img
                                        src="{{ asset('assets/images/f3240d68376b6cb35b797b008f6db4c8.png') }}"
                                        alt=""></a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#"><img
                                        src="{{ asset('assets/images/8c89c9161b417d305d0f08d2db03c4ec.png') }}"
                                        alt=""></a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#"><img
                                        src="{{ asset('assets/images/76bb0367568b670ebfe594c8a244cb80.png') }}"
                                        alt=""></a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#"><img
                                        src="{{ asset('assets/images/a7a924a8f3749acd7fbac4f50aad5392.png') }}"
                                        alt=""></a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#"><img
                                        src="{{ asset('assets/images/7a778f298fba60c37c0049ea4b3246d2.png') }}"
                                        alt=""></a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#"><img
                                        src="{{ asset('assets/images/8c89c9161b417d305d0f08d2db03c4ec.png') }}"
                                        alt=""></a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#"><img
                                        src="{{ asset('assets/images/76bb0367568b670ebfe594c8a244cb80.png') }}"
                                        alt=""></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->
    <section class="ratio_asos gradient-slider section-t-space">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="title1 title-fancy ">

                        <h2 class="title-inner1">New Arrivals</h2>

                    </div>
                </div>
                <div class="col">
                    <div class="product-7 product-m no-arrow">
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="#"><img
                                        src="{{ asset('assets/images/2e81613b401c4689b9ced6df9a3b631a.jpg') }}"
                                        class="img-fluid   bg-img" alt=""></a>
                            </div>
                            <div class="product-detail">
                                <div class="">
                                    <a href="#" class="text-center">
                                        <h6>Coats & Parkas
                                        </h6>
                                        <p>Explore Now!</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="#"><img
                                        src="{{ asset('assets/images/527834489346f983b00b7694764c987d.jpeg') }}"
                                        class="img-fluid   bg-img" alt=""></a>
                            </div>
                            <div class="product-detail">
                                <div class="">
                                    <a href="#" class="text-center">
                                        <h6>Coats & Parkas
                                        </h6>
                                        <p>Explore Now!</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="#"><img
                                        src="{{ asset('assets/images/caedfff6f199090866e9fe1b5997ca26.jpg') }}"
                                        class="img-fluid   bg-img" alt=""></a>
                            </div>
                            <div class="product-detail">
                                <div class="">
                                    <a href="#" class="text-center">
                                        <h6>Coats & Parkas
                                        </h6>
                                        <p>Explore Now!</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="#"><img
                                        src="{{ asset('assets/images/527834489346f983b00b7694764c987d.jpeg') }}"
                                        class="img-fluid   bg-img" alt=""></a>
                            </div>
                            <div class="product-detail">
                                <div class="">
                                    <a href="#" class="text-center">
                                        <h6>Coats & Parkas
                                        </h6>
                                        <p>Explore Now!</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->
    <section class="gift-card-section ratio2_1 section-b-space">
        <div class="container-fluid">
            <div class="card-box">
                <div class="row partition2">
                    <div class="col-12">
                        <div class="title1 title-fancy ">

                            <h2 class="title-inner1">Categories</h2>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/istockphoto-1733124463-170667a.webp') }}"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="detail-inline s_cat mt-3">
                                    <h6>Mens</h6>

                                    <h4><i class="ti ti-arrow-right"></i></h4>
                                </div>
                                <p>Explore Now!</p>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/ban2_600x600.webp') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="detail-inline s_cat mt-3">
                                    <h6>Hoodies & Sweetshirt</h6>

                                    <h4><i class="ti ti-arrow-right"></i></h4>
                                </div>
                                <p>Explore Now!</p>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/images.jpeg') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="detail-inline s_cat mt-3">

                                    <h6>Kids </h6>


                                    <h4><i class="ti ti-arrow-right"></i></h4>
                                </div>
                                <p>Explore Now!</p>

                            </div>
                        </a>
                    </div>



                </div>
            </div>
        </div>
    </section>


    <section class="banner-goggles ratio2_1 banner-padding section-b-space">
        <div class="container container-lg">
            <div class="row partition3">
                <div class="col-md-6 d-flex">
                    <div class="app_landing my-auto">
                        <div>

                            <h2 style="font-weight: 800;margin-bottom: 27px;">DOWNLOAD APP & <br> GET THE VOUCHER!</h2>
                            <p class="mt-3" style="font-size: 18px;
  font-weight: 500;">Get 30% off for first
                                transaction using<br> Cartrefs mobile app for now.</p>
                            <div class="d-flex mb-5">
                                <a href="#"><img
                                        src="{{ asset('assets/images/02a81c7a16ff8b39721da74ca91ff888.png') }}"
                                        style="
    height: 50px;
"></a>
                                <a href="#"><img
                                        src="{{ asset('assets/images/8744857b28d4bdb70882450915024c1e.png') }}"
                                        style="
    height: 50px;
"></a>
                            </div>


                            <div class="input-group mb-3 app_m_g">
                                <input type="text" class="form-control app_mail"
                                    placeholder="Enter your Email address">
                                <i class="ti ti-arrow-right"></i>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <img src="{{ asset('assets/images/app_landing.jpg') }}" class="img-fluid" alt=""
                        style="margin: auto;
  display: block;
  max-height: 450px;">
                </div>

            </div>
            </a>
        </div>

        </div>
        </div>
    </section>
@endsection
