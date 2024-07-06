@extends('users.layout', ['title' => 'Product'])
@section('content')
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>Wrap Top</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="index.php">
                                    Top + Blouses</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Wrap Top</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!-- section start -->
    <section>
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1 col-sm-2 col-xs-12">
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="slider-right-nav">
                                    <div><img src="{{ asset('assets/images/2e81613b401c4689b9ced6df9a3b631a.jpg') }}"
                                            alt="" class="img-fluid "></div>
                                    <div><img src="{{ asset('assets/images/527834489346f983b00b7694764c987d.jpeg') }}"
                                            alt="" class="img-fluid "></div>
                                    <div><img src="{{ asset('assets/images/caedfff6f199090866e9fe1b5997ca26.jpg') }}"
                                            alt="" class="img-fluid "></div>
                                    <div><img src="{{ asset('assets/images/527834489346f983b00b7694764c987d.jpeg') }}"
                                            alt="" class="img-fluid "></div>
                                    <div><img src="{{ asset('assets/images/527834489346f983b00b7694764c987d.jpeg') }}"
                                            alt="" class="img-fluid "></div>
                                    <div><img src="{{ asset('assets/images/caedfff6f199090866e9fe1b5997ca26.jpg') }}"
                                            alt="" class="img-fluid "></div>
                                    <div><img src="{{ asset('assets/images/527834489346f983b00b7694764c987d.jpeg') }}"
                                            alt="" class="img-fluid "></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-10 col-xs-12 order-up">
                        <div class="product-right-slick">
                            <div><img src="{{ asset('assets/images/2e81613b401c4689b9ced6df9a3b631a.jpg') }}" alt=""
                                    class="img-fluid  image_zoom_cls-0">
                            </div>
                            <div><img src="{{ asset('assets/images/527834489346f983b00b7694764c987d.jpeg') }}"
                                    alt="" class="img-fluid  image_zoom_cls-1">
                            </div>
                            <div><img src="{{ asset('assets/images/caedfff6f199090866e9fe1b5997ca26.jpg') }}" alt=""
                                    class="img-fluid  image_zoom_cls-2">
                            </div>
                            <div><img src="{{ asset('assets/images/527834489346f983b00b7694764c987d.jpeg') }}"
                                    alt="" class="img-fluid  image_zoom_cls-3">
                            </div>
                            <div><img src="{{ asset('assets/images/527834489346f983b00b7694764c987d.jpeg') }}"
                                    alt="" class="img-fluid  image_zoom_cls-4">
                            </div>
                            <div><img src="{{ asset('assets/images/caedfff6f199090866e9fe1b5997ca26.jpg') }}"
                                    alt="" class="img-fluid  image_zoom_cls-5">
                            </div>
                            <div><img src="{{ asset('assets/images/527834489346f983b00b7694764c987d.jpeg') }}"
                                    alt="" class="img-fluid  image_zoom_cls-6">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">

                            <h2>Wrap Top</h2>

                            <div class="label-section">
                                <p>Versatile and universally flattering, our wrap boluse can be tied, draped, snapped and
                                    wrapped multiple ways.</p>
                            </div>
                            <div class="border-product">
                                <h6 class="product-title">Color</h6>
                                <ul class="color-variant">
                                    <li class="bg-light0 active"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul>
                            </div>

                            <div id="selectSize" class="addeffect-section product-description border-product">



                                <h6 class="product-title size-text">Size <span><a href="" data-bs-toggle="modal"
                                            data-bs-target="#sizemodal">size
                                            chart</a></span></h6>
                                <div class="modal fade" id="sizemodal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Sheer
                                                    Straight Kurta</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body"><img src="../assets/images/size-chart.jpg"
                                                    alt="" class="img-fluid "></div>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="error-message">size</h6>
                                <div class="size-box">
                                    <ul>
                                        <li><a href="javascript:void(0)">s</a></li>
                                        <li><a href="javascript:void(0)">m</a></li>
                                        <li><a href="javascript:void(0)">l</a></li>
                                        <li><a href="javascript:void(0)">xl</a></li>
                                    </ul>
                                </div>

                            </div>





                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->


    <!-- product-tab starts -->
    <section class="faq-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">

                    <div class="accordion theme-accordion" id="accordionExample"
                        style="    background: #f1f1f1;box-shadow: 0px 0px 3px #b9b9b9;">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0"><button class="btn btn-link" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">Fitting</button></h5>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Fabric : <br>
                                        Tailored Stretch, <br>
                                        Made in Italy62% Nylon, 38% Elastane, 100% vegan materials
                                        Care: <br>
                                        Cold machine wash, line dry <br>
                                        Do not tumble dry or dry clean, Do not use bleach or fabric softener</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0"><button class="btn btn-link collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">Fabric & care </button></h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>it look like readable English. Many desktop publishing packages and web page
                                        editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                                        ipsum' will uncover many web sites still in their infancy. Various versions have
                                        evolved over the years,All the Lorem Ipsum generators on the Internet tend to
                                        repeat predefined chunks as necessary, making this the first true generator on
                                        the Internet. It uses a dictionary of over 200 Latin words, combined with a
                                        handful of model sentence structures</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0"><button class="btn btn-link collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">Product Detail</button></h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>it look like readable English. Many desktop publishing packages and web page
                                        editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                                        ipsum' will uncover many web sites still in their infancy. Various versions have
                                        evolved over the years,All the Lorem Ipsum generators on the Internet tend to
                                        repeat predefined chunks as necessary, making this the first true generator on
                                        the Internet. It uses a dictionary of over 200 Latin words, combined with a
                                        handful of model sentence structures</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0"><button class="btn btn-link collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">Shipping And Return</button></h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>it look like readable English. Many desktop publishing packages and web page
                                        editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                                        ipsum' will uncover many web sites still in their infancy. Various versions have
                                        evolved over the years,All the Lorem Ipsum generators on the Internet tend to
                                        repeat predefined chunks as necessary, making this the first true generator on
                                        the Internet. It uses a dictionary of over 200 Latin words, combined with a
                                        handful of model sentence structures</p>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>
                <div class="col-sm-6">
                    <a href="#"> <img src="{{ asset('assets/images/579f803a58412d7748869cf52497f51f.png') }}"
                            alt="" class="img-fluid"></a>
                </div>
            </div>
        </div>
    </section>
    <!-- product-tab ends -->

    <section class="ratio_asos gradient-slider section-b-space">
        <div class="container container-lg">
            <div class="row">
                <div class="col-12">
                    <div class="title1 title-fancy">

                        <h2 class="title-inner1">You may also like</h2>

                    </div>
                </div>
                <div class="col-xl-4 col-6 mb-3">
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
                </div>
                <div class="col-xl-4 col-6 mb-3">
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
                <div class="col-xl-4 col-6 mb-3">
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
                </div>
                <div class="col-xl-4 col-6 mb-3">
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
                <div class="col-xl-4 col-6 mb-3">
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
                </div>
                <div class="col-xl-4 col-6 mb-3">
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
                <div class="col-xl-4 col-6 mb-3">
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
                </div>
                <div class="col-xl-4 col-6 mb-3">
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
                <div class="col-xl-4 col-6 mb-3">
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
                </div>
                <div class="col-xl-4 col-6 mb-3">
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
                <div class="col-xl-4 col-6 mb-3">
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
                </div>
                <div class="col-xl-4 col-6 mb-3">
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
    </section>
@endsection
