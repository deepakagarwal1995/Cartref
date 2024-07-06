@extends('users.layout', ['title' => 'Home'])
@section('content')
    <section class="p-0">
        <div class="slider-animate home-slider">
            <div>
                <div class="home height-apply p-bottom">
                    <img src="{{ asset('assets/images/4ec616f602d9f91b003061a5deef40d0.jpg') }}" alt=""
                        class="bg-img  ">
                    <div class="container-lg">
                        <div class="row">
                            <div class="col">
                                <div class="slider-contain height-apply">
                                    <div>

                                        <h1>Elegance in simplicity,<br>Earth’s harmony</h1><a href="#"
                                            class="btn btn-solid btn-gradient animated">shop
                                            now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="home height-apply p-bottom">
                    <img src="{{ asset('assets/images/desktop_banner_1.webp') }}" alt="" class="bg-img  ">
                    <div class="container-lg">
                        <div class="row">
                            <div class="col">
                                <div class="slider-contain height-apply">
                                    <div>
                                        <h1>Elegance in harmony,<br>Earth’s simplicity</h1><a href="#"
                                            class="btn btn-solid btn-gradient animated">shop
                                            now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home slider end -->
    <!-- feature product start -->
    <!-- product slider -->
    <section class="ratio_asos gradient-slider section-b-space">
        <div class="container container-lg">
            <div class="row">
                <div class="col-12">
                    <div class="title1 title-fancy d-flex justify-content-end">

                        <h2 class="title-inner1">Best Sellers</h2>
                        <a href="#" class="ms-auto">View All</a>
                    </div>
                </div>
                <div class="col">
                    <div class="product-5 product-m no-arrow">
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="#"><img
                                        src="{{ asset('assets/images/2e81613b401c4689b9ced6df9a3b631a.jpg') }}"
                                        class="img-fluid   bg-img" alt=""></a>
                            </div>
                            <div class="product-detail">
                                <div class="detail-inline">
                                    <a href="#">
                                        <h6>tailored stretch</h6>
                                        <p>turn it up pants</p>
                                    </a>
                                    <h4>₹100.50</h4>
                                </div>
                                <ul class="color-variant pt-0">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="#"><img
                                        src="{{ asset('assets/images/527834489346f983b00b7694764c987d.jpeg') }}"
                                        class="img-fluid   bg-img" alt=""></a>
                            </div>
                            <div class="product-detail">
                                <div class="detail-inline">
                                    <a href="#">
                                        <h6>tailored stretch</h6>
                                        <p>turn it up pants</p>
                                    </a>
                                    <h4>₹100.50</h4>
                                </div>
                                <ul class="color-variant pt-0">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="#"><img
                                        src="{{ asset('assets/images/caedfff6f199090866e9fe1b5997ca26.jpg') }}"
                                        class="img-fluid   bg-img" alt=""></a>
                            </div>
                            <div class="product-detail">
                                <div class="detail-inline">
                                    <a href="#">
                                        <h6>tailored stretch</h6>
                                        <p>turn it up pants</p>
                                    </a>
                                    <h4>₹100.50</h4>
                                </div>
                                <ul class="color-variant pt-0">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="#"><img
                                        src="{{ asset('assets/images/527834489346f983b00b7694764c987d.jpeg') }}"
                                        class="img-fluid   bg-img" alt=""></a>
                            </div>
                            <div class="product-detail">
                                <div class="detail-inline">
                                    <a href="#">
                                        <h6>tailored stretch</h6>
                                        <p>turn it up pants</p>
                                    </a>
                                    <h4>₹100.50</h4>
                                </div>
                                <ul class="color-variant pt-0">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product slider -->
    <!-- Parallax banner -->
    <section class="p-0 pet-parallax">
        <div class="full-banner section-space parallax text-center p-left">
            <img src="{{ asset('assets/images/Taruni_BANNER_03.webp') }}" alt="" class="bg-img  ">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="banner-contain">
                            <h2>Get 50% Off</h2>

                            <h4>for all new product purchases min. purchase ₹350.000</h4>
                            <a href="#" class="btn btn-solid btn-gradient animated">shop
                                now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Parallax banner end -->
    <section class="section-t-space">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="title1 title-fancy d-flex justify-content-end">

                        <h2 class="title-inner1">Brands</h2>
                        <a href="#" class="ms-auto">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="b-gradient section-b-space">
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
    <section class="gift-card-section ratio2_1 section-b-space">
        <div class="container-fluid">
            <div class="card-box">
                <div class="row">
                    <div class="col-12">
                        <div class="title1 title-fancy d-flex justify-content-end">

                            <h2 class="title-inner1">Showroom At Your Home</h2>
                            <a href="#" class="ms-auto">View All</a>
                        </div>
                    </div>
                </div>
                <div class="row partition2">
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/e0d1e95d409648b44673e347af1eb1cb.png') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Bachoomal Sons</h4>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/67a2846d584f827949cf086b0ce96c4a.jpeg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Dimple Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/750a9c5223fe6929e1adf3a626d6f3e0.jpg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Rajkumar’s Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/e0d1e95d409648b44673e347af1eb1cb.png') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Bachoomal Sons</h4>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/67a2846d584f827949cf086b0ce96c4a.jpeg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Dimple Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/750a9c5223fe6929e1adf3a626d6f3e0.jpg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Rajkumar’s Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/e0d1e95d409648b44673e347af1eb1cb.png') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Bachoomal Sons</h4>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/67a2846d584f827949cf086b0ce96c4a.jpeg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Dimple Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/750a9c5223fe6929e1adf3a626d6f3e0.jpg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Rajkumar’s Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/e0d1e95d409648b44673e347af1eb1cb.png') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Bachoomal Sons</h4>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/67a2846d584f827949cf086b0ce96c4a.jpeg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Dimple Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/750a9c5223fe6929e1adf3a626d6f3e0.jpg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Rajkumar’s Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ratio_asos gradient-slider py-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="title1 title-fancy ">
                        <h2 class="title-inner1">Categories</h2>
                    </div>
                </div>
                <div class="col">
                    <div class="product-6 product-m no-arrow">
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="#"><img
                                        src="{{ asset('assets/images/94b0aadb73d3dc76dde2af9b11fe898a.jpeg') }}"
                                        class="img-fluid   bg-img" alt=""></a>
                            </div>
                            <div class="product-detail">
                                <div class="text-center">
                                    <a href="#">
                                        <h6>Mens</h6>

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
                                <div class="text-center">
                                    <a href="#">
                                        <h6>Womens</h6>

                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="#"><img src="{{ asset('assets/images/greentica_b30cc5da6d.jpg') }}"
                                        class="img-fluid   bg-img" alt=""></a>
                            </div>
                            <div class="product-detail">
                                <div class="text-center">
                                    <a href="#">
                                        <h6>Home Decor</h6>

                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="#"><img
                                        src="{{ asset('assets/images/c22fed72b784482aa8094f2d574d9f53.png') }}"
                                        class="img-fluid   bg-img" alt=""></a>
                            </div>
                            <div class="product-detail">
                                <div class="text-center">
                                    <a href="#">
                                        <h6>Kids</h6>

                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="#"><img
                                        src="{{ asset('assets/images/06a80c7a40896f0310e427c6694b91f1.png') }}"
                                        class="img-fluid   bg-img" alt=""></a>
                            </div>
                            <div class="product-detail">
                                <div class="text-center">
                                    <a href="#">
                                        <h6>Shoes</h6>

                                    </a>

                                </div>
                            </div>
                        </div>

                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="#"><img src="{{ asset('assets/images/18-yara-shahidi-1556642748.jpg') }}"
                                        class="img-fluid   bg-img" alt=""></a>
                            </div>
                            <div class="product-detail">
                                <div class="text-center">
                                    <a href="#">
                                        <h6>Jeans</h6>

                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- instagram section end -->

    <section class="gift-card-section ratio2_1 section-b-space">
        <div class="container-fluid">
            <div class="card-box">
                <div class="row">
                    <div class="col-12">
                        <div class="title1 title-fancy d-flex justify-content-end">

                            <h2 class="title-inner1">Showroom At Your Home</h2>
                            <a href="#" class="ms-auto">View All</a>
                        </div>
                    </div>
                </div>
                <div class="row partition2">
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/e0d1e95d409648b44673e347af1eb1cb.png') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Bachoomal Sons</h4>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/67a2846d584f827949cf086b0ce96c4a.jpeg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Dimple Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/750a9c5223fe6929e1adf3a626d6f3e0.jpg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Rajkumar’s Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/e0d1e95d409648b44673e347af1eb1cb.png') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Bachoomal Sons</h4>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/67a2846d584f827949cf086b0ce96c4a.jpeg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Dimple Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/750a9c5223fe6929e1adf3a626d6f3e0.jpg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Rajkumar’s Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/e0d1e95d409648b44673e347af1eb1cb.png') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Bachoomal Sons</h4>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/67a2846d584f827949cf086b0ce96c4a.jpeg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Dimple Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/750a9c5223fe6929e1adf3a626d6f3e0.jpg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Rajkumar’s Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/e0d1e95d409648b44673e347af1eb1cb.png') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Bachoomal Sons</h4>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/67a2846d584f827949cf086b0ce96c4a.jpeg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Dimple Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/750a9c5223fe6929e1adf3a626d6f3e0.jpg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Rajkumar’s Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ratio_asos gradient-slider py-3" style="background: #FFF5E1;
">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="title1 title-fancy ">
                        <h2 class="title-inner1">Mens</h2>
                    </div>
                </div>
                <div class="col">
                    <div class="product-6 product-m no-arrow">
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="#"><img
                                        src="{{ asset('assets/images/94b0aadb73d3dc76dde2af9b11fe898a.jpeg') }}"
                                        class="img-fluid   bg-img" alt=""></a>
                            </div>
                            <div class="product-detail">
                                <div class="text-center">
                                    <a href="#">
                                        <h6>Mens</h6>

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
                                <div class="text-center">
                                    <a href="#">
                                        <h6>Womens</h6>

                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="#"><img src="{{ asset('assets/images/greentica_b30cc5da6d.jpg') }}"
                                        class="img-fluid   bg-img" alt=""></a>
                            </div>
                            <div class="product-detail">
                                <div class="text-center">
                                    <a href="#">
                                        <h6>Home Decor</h6>

                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="#"><img
                                        src="{{ asset('assets/images/c22fed72b784482aa8094f2d574d9f53.png') }}"
                                        class="img-fluid   bg-img" alt=""></a>
                            </div>
                            <div class="product-detail">
                                <div class="text-center">
                                    <a href="#">
                                        <h6>Kids</h6>

                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="#"><img
                                        src="{{ asset('assets/images/06a80c7a40896f0310e427c6694b91f1.png') }}"
                                        class="img-fluid   bg-img" alt=""></a>
                            </div>
                            <div class="product-detail">
                                <div class="text-center">
                                    <a href="#">
                                        <h6>Shoes</h6>

                                    </a>

                                </div>
                            </div>
                        </div>

                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="#"><img src="{{ asset('assets/images/18-yara-shahidi-1556642748.jpg') }}"
                                        class="img-fluid   bg-img" alt=""></a>
                            </div>
                            <div class="product-detail">
                                <div class="text-center">
                                    <a href="#">
                                        <h6>Jeans</h6>

                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gift-card-section ratio2_1 section-b-space">
        <div class="container-fluid">
            <div class="card-box">
                <div class="row">
                    <div class="col-12">
                        <div class="title1 title-fancy d-flex justify-content-end">

                            <h2 class="title-inner1">Showroom At Your Home</h2>
                            <a href="#" class="ms-auto">View All</a>
                        </div>
                    </div>
                </div>
                <div class="row partition2">
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/e0d1e95d409648b44673e347af1eb1cb.png') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Bachoomal Sons</h4>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/67a2846d584f827949cf086b0ce96c4a.jpeg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Dimple Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/750a9c5223fe6929e1adf3a626d6f3e0.jpg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Rajkumar’s Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/e0d1e95d409648b44673e347af1eb1cb.png') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Bachoomal Sons</h4>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/67a2846d584f827949cf086b0ce96c4a.jpeg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Dimple Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/750a9c5223fe6929e1adf3a626d6f3e0.jpg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Rajkumar’s Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/e0d1e95d409648b44673e347af1eb1cb.png') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Bachoomal Sons</h4>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/67a2846d584f827949cf086b0ce96c4a.jpeg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Dimple Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/750a9c5223fe6929e1adf3a626d6f3e0.jpg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Rajkumar’s Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/e0d1e95d409648b44673e347af1eb1cb.png') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Bachoomal Sons</h4>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/67a2846d584f827949cf086b0ce96c4a.jpeg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Dimple Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/750a9c5223fe6929e1adf3a626d6f3e0.jpg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Rajkumar’s Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ratio_asos gradient-slider py-3" style="background: #EEC6C7;
">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="title1 title-fancy ">
                        <h2 class="title-inner1">Womens</h2>
                    </div>
                </div>
                <div class="col">
                    <div class="product-6 product-m no-arrow">
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="#"><img
                                        src="{{ asset('assets/images/565ac818d946c617091f041d62d4274d.png') }}"
                                        class="img-fluid   bg-img" alt=""></a>
                            </div>
                            <div class="product-detail">
                                <div class="text-center">
                                    <a href="#">
                                        <h6>Jewellery</h6>

                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="#"><img
                                        src="{{ asset('assets/images/617f5465c10714f0ce96a4470997ad90.png') }}"
                                        class="img-fluid   bg-img" alt=""></a>
                            </div>
                            <div class="product-detail">
                                <div class="text-center">
                                    <a href="#">
                                        <h6>Western Wear</h6>

                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="#"><img
                                        src="{{ asset('assets/images/eaec04d4a65ab04ab1904827d142f57a.png') }}"
                                        class="img-fluid   bg-img" alt=""></a>
                            </div>
                            <div class="product-detail">
                                <div class="text-center">
                                    <a href="#">
                                        <h6>Ethinic & Fushion Wear</h6>

                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="#"><img
                                        src="{{ asset('assets/images/c22fed72b784482aa8094f2d574d9f53.png') }}"
                                        class="img-fluid   bg-img" alt=""></a>
                            </div>
                            <div class="product-detail">
                                <div class="text-center">
                                    <a href="#">
                                        <h6>Kids</h6>

                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="#"><img
                                        src="{{ asset('assets/images/06a80c7a40896f0310e427c6694b91f1.png') }}"
                                        class="img-fluid   bg-img" alt=""></a>
                            </div>
                            <div class="product-detail">
                                <div class="text-center">
                                    <a href="#">
                                        <h6>Shoes</h6>

                                    </a>

                                </div>
                            </div>
                        </div>

                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="#"><img src="{{ asset('assets/images/18-yara-shahidi-1556642748.jpg') }}"
                                        class="img-fluid   bg-img" alt=""></a>
                            </div>
                            <div class="product-detail">
                                <div class="text-center">
                                    <a href="#">
                                        <h6>Jeans</h6>

                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gift-card-section ratio2_1 section-b-space">
        <div class="container-fluid">
            <div class="card-box">
                <div class="row">
                    <div class="col-12">
                        <div class="title1 title-fancy d-flex justify-content-end">

                            <h2 class="title-inner1">Showroom At Your Home</h2>
                            <a href="#" class="ms-auto">View All</a>
                        </div>
                    </div>
                </div>
                <div class="row partition2">
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/e0d1e95d409648b44673e347af1eb1cb.png') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Bachoomal Sons</h4>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/67a2846d584f827949cf086b0ce96c4a.jpeg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Dimple Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/750a9c5223fe6929e1adf3a626d6f3e0.jpg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Rajkumar’s Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/e0d1e95d409648b44673e347af1eb1cb.png') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Bachoomal Sons</h4>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/67a2846d584f827949cf086b0ce96c4a.jpeg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Dimple Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/750a9c5223fe6929e1adf3a626d6f3e0.jpg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Rajkumar’s Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/e0d1e95d409648b44673e347af1eb1cb.png') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Bachoomal Sons</h4>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/67a2846d584f827949cf086b0ce96c4a.jpeg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Dimple Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/750a9c5223fe6929e1adf3a626d6f3e0.jpg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Rajkumar’s Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/e0d1e95d409648b44673e347af1eb1cb.png') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Bachoomal Sons</h4>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/67a2846d584f827949cf086b0ce96c4a.jpeg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Dimple Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/750a9c5223fe6929e1adf3a626d6f3e0.jpg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Rajkumar’s Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ratio_asos gradient-slider py-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="title1 title-fancy ">
                        <h2 class="title-inner1">Categories</h2>
                    </div>
                </div>
                <div class="col">
                    <div class="product-6 product-m no-arrow">
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="#"><img
                                        src="{{ asset('assets/images/720a4e56b546f863624ad321ca206a05.png') }}"
                                        class="img-fluid   bg-img" alt=""></a>
                            </div>
                            <div class="product-detail">
                                <div class="text-center">
                                    <a href="#">
                                        <h6>Mens</h6>

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
                                <div class="text-center">
                                    <a href="#">
                                        <h6>Womens</h6>

                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="#"><img src="{{ asset('assets/images/greentica_b30cc5da6d.jpg') }}"
                                        class="img-fluid   bg-img" alt=""></a>
                            </div>
                            <div class="product-detail">
                                <div class="text-center">
                                    <a href="#">
                                        <h6>Home Decor</h6>

                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="#"><img
                                        src="{{ asset('assets/images/c22fed72b784482aa8094f2d574d9f53.png') }}"
                                        class="img-fluid   bg-img" alt=""></a>
                            </div>
                            <div class="product-detail">
                                <div class="text-center">
                                    <a href="#">
                                        <h6>Kids</h6>

                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="#"><img
                                        src="{{ asset('assets/images/06a80c7a40896f0310e427c6694b91f1.png') }}"
                                        class="img-fluid   bg-img" alt=""></a>
                            </div>
                            <div class="product-detail">
                                <div class="text-center">
                                    <a href="#">
                                        <h6>Shoes</h6>

                                    </a>

                                </div>
                            </div>
                        </div>

                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="#"><img src="{{ asset('assets/images/18-yara-shahidi-1556642748.jpg') }}"
                                        class="img-fluid   bg-img" alt=""></a>
                            </div>
                            <div class="product-detail">
                                <div class="text-center">
                                    <a href="#">
                                        <h6>Jeans</h6>

                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gift-card-section ratio2_1 section-t-space">
        <div class="container-fluid">
            <div class="card-box">
                <div class="row">
                    <div class="col-12">
                        <div class="title1 title-fancy d-flex justify-content-end">

                            <h2 class="title-inner1">Showroom At Your Home</h2>
                            <a href="#" class="ms-auto">View All</a>
                        </div>
                    </div>
                </div>
                <div class="row partition2">
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/e0d1e95d409648b44673e347af1eb1cb.png') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Bachoomal Sons</h4>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/67a2846d584f827949cf086b0ce96c4a.jpeg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Dimple Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/750a9c5223fe6929e1adf3a626d6f3e0.jpg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Rajkumar’s Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/e0d1e95d409648b44673e347af1eb1cb.png') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Bachoomal Sons</h4>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/67a2846d584f827949cf086b0ce96c4a.jpeg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Dimple Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/750a9c5223fe6929e1adf3a626d6f3e0.jpg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Rajkumar’s Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/e0d1e95d409648b44673e347af1eb1cb.png') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Bachoomal Sons</h4>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/67a2846d584f827949cf086b0ce96c4a.jpeg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Dimple Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/750a9c5223fe6929e1adf3a626d6f3e0.jpg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Rajkumar’s Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/e0d1e95d409648b44673e347af1eb1cb.png') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Bachoomal Sons</h4>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/67a2846d584f827949cf086b0ce96c4a.jpeg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Dimple Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="showroom-banner">
                                <div class="img-part">
                                    <img src="{{ asset('assets/images/750a9c5223fe6929e1adf3a626d6f3e0.jpg') }}"
                                        class="img-fluid" alt="">
                                    <span>% FLAT 15% OFF</span>
                                </div>
                                <div class="text-part">
                                    <h4>Rajkumar’s Collection</h4>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gift-card-section ratio2_1 section-b-space quotes_bg"
        style="    max-width: 1700px;
    margin: auto;">
        <div class="container container-lg my-sm-5">
            <div class="row">
                <div class="col-lg-6 d-flex">
                    <div class="testimonial my-auto">
                        <div>
                            <h4>Testimonials</h4>
                            <h2>What people say<br> about Us.</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="quotes">
                        <div class="feedback">
                            <div class="feedback-dp"><img
                                    src="{{ asset('assets/images/d9a2731a24bc49b57732fe3099397762.jpeg') }}"
                                    alt=""></div>
                            <blockquote> “On the Windows talking painted pasture yet its express parties use. Sure last upon
                                he same as knew next. Of believed or diverted no.”
                            </blockquote>
                            <div></div>
                            <div class="name"> Marianne Williamson</div>
                            <div class="city">Thane, Mumbai</div>
                        </div>

                        <div class="feedback">
                            <div class="feedback-dp"><img
                                    src="{{ asset('assets/images/d9a2731a24bc49b57732fe3099397762.jpeg') }}"
                                    alt=""></div>
                            <blockquote> “On the Windows talking painted pasture yet its express parties use. Sure last upon
                                he same as knew next. Of believed or diverted no.”
                            </blockquote>
                            <div></div>
                            <div class="name"> Marianne Williamson</div>
                            <div class="city">Thane, Mumbai</div>
                        </div>

                        <div class="feedback">
                            <div class="feedback-dp"><img
                                    src="{{ asset('assets/images/d9a2731a24bc49b57732fe3099397762.jpeg') }}"
                                    alt=""></div>
                            <blockquote> “On the Windows talking painted pasture yet its express parties use. Sure last upon
                                he same as knew next. Of believed or diverted no.”
                            </blockquote>
                            <div></div>
                            <div class="name"> Marianne Williamson</div>
                            <div class="city">Thane, Mumbai</div>
                        </div>



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
