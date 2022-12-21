@extends('layouts.default')

@section('title', 'Home')

@section('content')

    <!-- start banner Area -->
    <section class="banner-area">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-start">
                <div class="col-lg-12">
                    <div class="active-banner-slider owl-carousel">
                        <!-- single-slide -->
                        <div class="row single-slide align-items-center d-flex">
                            <div class="col-lg-5 col-md-6">
                                <div class="banner-content">
                                    <h1>Nike New <br />Collection!</h1>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation.
                                    </p>
                                    <div class="add-bag d-flex align-items-center">
                                        <a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
                                        <span class="add-text text-uppercase">Add to Bag</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="banner-img">
                                    <img class="img-fluid" src="{{ asset('/frontsite/img/banner/banner-img.png') }}"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                        <!-- single-slide -->
                        <div class="row single-slide">
                            <div class="col-lg-5">
                                <div class="banner-content">
                                    <h1>Nike New <br />Collection!</h1>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation.
                                    </p>
                                    <div class="add-bag d-flex align-items-center">
                                        <a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
                                        <span class="add-text text-uppercase">Add to Bag</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="banner-img">
                                    <img class="img-fluid" src="{{ asset('/frontsite/img/banner/banner-img.png') }}"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- start features Area -->
    <section class="features-area section_gap">
        <div class="container">
            <div class="row features-inner">
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="{{ asset('/frontsite/img/features/f-icon1.png') }}" alt="" />
                        </div>
                        <h6>Free Delivery</h6>
                        <p>Free Shipping on all order</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="{{ asset('/frontsite/img/features/f-icon2.png') }}" alt="" />
                        </div>
                        <h6>Return Policy</h6>
                        <p>Free Shipping on all order</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="{{ asset('/frontsite/img/features/f-icon3.png') }}" alt="" />
                        </div>
                        <h6>24/7 Support</h6>
                        <p>Free Shipping on all order</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="{{ asset('/frontsite/img/features/f-icon3.png') }}" alt="" />
                        </div>
                        <h6>Secure Payment</h6>
                        <p>Free Shipping on all order</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end features Area -->

    <!-- Start category Area -->
    <section class="category-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="{{ asset('/frontsite/img/category/c1.jpg') }}"
                                    alt="" />
                                <a href="{{ asset('/frontsite/img/category/c1.jpg') }}" class="img-pop-up" target="_blank">
                                    <div class="deal-details">
                                        <h6 class="deal-title">Sneaker for Sports</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="{{ asset('/frontsite/img/category/c2.jpg') }}"
                                    alt="" />
                                <a href="{{ asset('/frontsite/img/category/c2.jpg') }}" class="img-pop-up" target="_blank">
                                    <div class="deal-details">
                                        <h6 class="deal-title">Sneaker for Sports</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="{{ asset('/frontsite/img/category/c3.jpg') }}"
                                    alt="" />
                                <a href="{{ asset('/frontsite/img/category/c3.jpg') }}" class="img-pop-up" target="_blank">
                                    <div class="deal-details">
                                        <h6 class="deal-title">Product for Couple</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="{{ asset('/frontsite/img/category/c4.jpg') }}"
                                    alt="" />
                                <a href="{{ asset('/frontsite/img/category/c4.jpg') }}" class="img-pop-up"
                                    target="_blank">
                                    <div class="deal-details">
                                        <h6 class="deal-title">Sneaker for Sports</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-deal">
                        <div class="overlay"></div>
                        <img class="img-fluid w-100" src="{{ asset('/frontsite/img/category/c5.jpg') }}"
                            alt="" />
                        <a href="{{ asset('/frontsite/img/category/c5.jpg') }}" class="img-pop-up" target="_blank">
                            <div class="deal-details">
                                <h6 class="deal-title">Sneaker for Sports</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End category Area -->

    <!-- start product Area -->
    <section class="owl-carousel active-product-area section_gap">
        <!-- single product slide -->
        <div class="single-product-slider">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-title">
                            <h1>Latest Products</h1>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- single product -->
                    @foreach ($product_desc as $product_item)
                        <div class="col-lg-3 col-md-6">
                            <div class="single-product">
                                <img class="img-fluid"
                                    src="{{ request()->getSchemeAndHttpHost() . '/storage' . '/' . $product_item->photo }}"
                                    alt="" />
                                <div class="product-details">
                                    <h6>{{ isset($product_item->name) ? $product_item->name : '' }}</h6>
                                    <div class="price">
                                        <h6>{{ 'IDR ' . number_format($product_item->price) ?? '' }}</h6>
                                    </div>
                                    <div class="prd-bottom">
                                        <a href="" class="social-info">
                                            <span class="ti-bag"></span>
                                            <p class="hover-text">add to chart</p>
                                        </a>
                                        <a href="{{ route('frontsite.home.edit', encrypt($product_item->id)) }}"
                                            class="social-info">
                                            <span class="lnr lnr-move"></span>
                                            <p class="hover-text">view more</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- single product slide -->
        <div class="single-product-slider">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-title">
                            <h1>Coming Products</h1>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- single product -->
                    @foreach ($product_asc as $product_item)
                        <div class="col-lg-3 col-md-6">
                            <div class="single-product">
                                <img class="img-fluid"
                                    src="{{ request()->getSchemeAndHttpHost() . '/storage' . '/' . $product_item->photo }}"
                                    alt="" />
                                <div class="product-details">
                                    <h6>{{ isset($product_item->name) ? $product_item->name : '' }}</h6>
                                    <div class="price">
                                        <h6>{{ 'IDR ' . number_format($product_item->price) ?? '' }}</h6>
                                    </div>
                                    <div class="prd-bottom">
                                        <a href="" class="social-info">
                                            <span class="ti-bag"></span>
                                            <p class="hover-text">add to chart</p>
                                        </a>
                                        <a href="{{ route('frontsite.home.edit', encrypt($product_item->id)) }}"
                                            class="social-info">
                                            <span class="lnr lnr-move"></span>
                                            <p class="hover-text">view more</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- end product Area -->

    <!-- Start brand Area -->
    <section class="brand-area section_gap">
        <div class="container">
            <div class="row">
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="{{ asset('/frontsite/img/brand/1.png') }}"
                        alt="" />
                </a>
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="{{ asset('/frontsite/img/brand/2.png') }}"
                        alt="" />
                </a>
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="{{ asset('/frontsite/img/brand/3.png') }}"
                        alt="" />
                </a>
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="{{ asset('/frontsite/img/brand/4.png') }}"
                        alt="" />
                </a>
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="{{ asset('/frontsite/img/brand/5.png') }}"
                        alt="" />
                </a>
            </div>
        </div>
    </section>
    <!-- End brand Area -->

@endsection
