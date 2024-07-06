@extends('users.layout', ['title' => 'Category'])

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/price-range.css') }}">
@endsection
@section('content')
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>collection</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">collection</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->


    <!-- section start -->
    <section class="section-b-space ratio_asos">
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 collection-filter">
                        <!-- side-bar colleps block stat -->
                        <div class="collection-filter-block">
                            <!-- brand filter start -->
                            <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left"
                                        aria-hidden="true"></i> back</span></div>
                            <div class="collection-collapse-block open">
                                <h3 class="collapse-block-title">brand</h3>
                                <div class="collection-collapse-block-content">
                                    <div class="collection-brand-filter">
                                        <div class="form-check collection-filter-checkbox">
                                            <input type="checkbox" class="form-check-input" id="zara">
                                            <label class="form-check-label" for="zara">zara</label>
                                        </div>
                                        <div class="form-check collection-filter-checkbox">
                                            <input type="checkbox" class="form-check-input" id="vera-moda">
                                            <label class="form-check-label" for="vera-moda">vera-moda</label>
                                        </div>
                                        <div class="form-check collection-filter-checkbox">
                                            <input type="checkbox" class="form-check-input" id="forever-21">
                                            <label class="form-check-label" for="forever-21">forever-21</label>
                                        </div>
                                        <div class="form-check collection-filter-checkbox">
                                            <input type="checkbox" class="form-check-input" id="roadster">
                                            <label class="form-check-label" for="roadster">roadster</label>
                                        </div>
                                        <div class="form-check collection-filter-checkbox">
                                            <input type="checkbox" class="form-check-input" id="only">
                                            <label class="form-check-label" for="only">only</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- color filter start here -->
                            <div class="collection-collapse-block open">
                                <h3 class="collapse-block-title">colors</h3>
                                <div class="collection-collapse-block-content">
                                    <div class="color-selector">
                                        <ul>
                                            <li class="color-1 active"></li>
                                            <li class="color-2"></li>
                                            <li class="color-3"></li>
                                            <li class="color-4"></li>
                                            <li class="color-5"></li>
                                            <li class="color-6"></li>
                                            <li class="color-7"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- size filter start here -->
                            <div class="collection-collapse-block border-0 open">
                                <h3 class="collapse-block-title">size</h3>
                                <div class="collection-collapse-block-content">
                                    <div class="collection-brand-filter">
                                        <div class="form-check collection-filter-checkbox">
                                            <input type="checkbox" class="form-check-input" id="hundred">
                                            <label class="form-check-label" for="hundred">s</label>
                                        </div>
                                        <div class="form-check collection-filter-checkbox">
                                            <input type="checkbox" class="form-check-input" id="twohundred">
                                            <label class="form-check-label" for="twohundred">m</label>
                                        </div>
                                        <div class="form-check collection-filter-checkbox">
                                            <input type="checkbox" class="form-check-input" id="threehundred">
                                            <label class="form-check-label" for="threehundred">l</label>
                                        </div>
                                        <div class="form-check collection-filter-checkbox">
                                            <input type="checkbox" class="form-check-input" id="fourhundred">
                                            <label class="form-check-label" for="fourhundred">xl</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- price filter start here -->
                            <div class="collection-collapse-block border-0 open">
                                <h3 class="collapse-block-title">price</h3>
                                <div class="collection-collapse-block-content">
                                    <div class="wrapper mt-3">
                                        <div class="range-slider">
                                            <input type="text" class="js-range-slider" value="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- silde-bar colleps block end here -->

                    </div>
                    <div class="collection-content col">
                        <div class="page-main-content">
                            <div class="row">
                                <div class="col-sm-12">

                                    <div class="collection-product-wrapper">
                                        <div class="product-top-filter">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="filter-main-btn"><span class="filter-btn btn btn-theme"><i
                                                                class="fa fa-filter" aria-hidden="true"></i> Filter</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="product-wrapper-grid">
                                            <div class="row margin-res">
                                                <div class="col-xl-4 col-6 col-grid-box">
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
                                                <div class="col-xl-4 col-6 col-grid-box">
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
                                                <div class="col-xl-4 col-6 col-grid-box">
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
                                                <div class="col-xl-4 col-6 col-grid-box">
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
                                                <div class="col-xl-4 col-6 col-grid-box">
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
                                                <div class="col-xl-4 col-6 col-grid-box">
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
                                                <div class="col-xl-4 col-6 col-grid-box">
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
                                                <div class="col-xl-4 col-6 col-grid-box">
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
                                                <div class="col-xl-4 col-6 col-grid-box">
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
                                                <div class="col-xl-4 col-6 col-grid-box">
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
                                                <div class="col-xl-4 col-6 col-grid-box">
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
                                                <div class="col-xl-4 col-6 col-grid-box">
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
                                                <div class="col-xl-4 col-6 col-grid-box">
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
                                                <div class="col-xl-4 col-6 col-grid-box">
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
                                                <div class="col-xl-4 col-6 col-grid-box">
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
                                                <div class="col-xl-4 col-6 col-grid-box">
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
                                        <div class="product-pagination">
                                            <div class="theme-paggination-block">
                                                <div class="row">
                                                    <div class="col-xl-6 col-md-6 col-sm-12">
                                                        <nav aria-label="Page navigation">
                                                            <ul class="pagination">
                                                                <li class="page-item"><a class="page-link" href="#"
                                                                        aria-label="Previous"><span aria-hidden="true"><i
                                                                                class="fa fa-chevron-left"
                                                                                aria-hidden="true"></i></span> <span
                                                                            class="sr-only">Previous</span></a></li>
                                                                <li class="page-item active"><a class="page-link"
                                                                        href="#">1</a></li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="#">2</a></li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="#">3</a></li>
                                                                <li class="page-item"><a class="page-link" href="#"
                                                                        aria-label="Next"><span aria-hidden="true"><i
                                                                                class="fa fa-chevron-right"
                                                                                aria-hidden="true"></i></span> <span
                                                                            class="sr-only">Next</span></a></li>
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6 col-sm-12">
                                                        <div class="product-search-count-bottom">
                                                            <h5>Showing Products 1-24 of 10 Result</h5>
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
        </div>
    </section>
    <!-- section End -->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/price-range.js') }}"></script>
@endsection
