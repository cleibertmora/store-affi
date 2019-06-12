@extends('layout.main')

@section('content')

 <!-- Breadcrumb area Start -->
 <section class="page-title-area bg-image ptb--80" data-bg-image="assets/img/bg/page_title_bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Shop Three Columns</h1>
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="current"><span>Shop Three Columns</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb area End -->


<!-- Main Content Wrapper Start -->
<div  class="main-content-wrapper">
    <div class="shop-page-wrapper ptb--80">
        <div class="container">

            <div class="shop-products">
                <div class="row">
                    <div class="col-xl-4 col-sm-6 mb--50">

                            <div class="ft-product">
                                    <div class="product-inner">
                                        <div class="product-image">
                                            <a data-toggle="modal" data-target="#productModal">
                                            <figure class="product-image--holder">
                                                <img src="{{ asset('images/1.jpg') }}" alt="Product">
                                            </figure>
                                            </a>
                                            <div class="product-action">
                                                <a data-toggle="modal" data-target="#productModal" class="action-btn">
                                                    <i class="la la-eye"></i>
                                                </a>
                                                <a href="wishlist.html" class="action-btn">
                                                    <i class="la la-heart-o"></i>
                                                </a>
                                                <a href="wishlist.html" class="action-btn">
                                                    <i class="la la-repeat"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info text-center">
                                            <h3 class="product-title"><a href="product-details.html">Golden Easy Spot Chair.</a></h3>
                                            <div class="product-category">
                                                <a href="product-details.html">Chair</a>
                                            </div>
                                            <p><button data-toggle="modal" data-target="#productModal" type="button" class="btn btn-size-sm btn-shape-square btn-detail-product">
                                                    Ver
                                                </button></p>
                                            <div class="product-info-bottom">
                                                <div class="product-price-wrapper">
                                                    
                                                </div>
                                                {{-- <a href="cart.html" class="add-to-cart pr--15">
                                                    <i class="la la-plus"></i>
                                                    <span>Add To Cart</span>
                                                </a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ft-product-list">
                                    <div class="product-inner">
                                        <figure class="product-image">
                                            <a href="product-details.html">
                                                <img src="assets/img/products/prod-01.jpg" alt="Products">
                                            </a>
                                            <div class="product-thumbnail-action">
                                                <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                    <i class="la la-eye"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-info">
                                                                                       
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
@endsection