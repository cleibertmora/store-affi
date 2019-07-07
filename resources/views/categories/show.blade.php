@extends('layout.main')

@section('content')

 <!-- Breadcrumb area Start -->
 <section class="page-title-area bg-image ptb--80" data-bg-image="assets/img/bg/page_title_bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">{{ $categoryObj->name }}</h1>
                <p class="page-description">{{ $categoryObj->description }}</p>  
                <ul class="breadcrumb">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li class="current"><span>{{ $categoryObj->name }}</span></li>
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

            @if(!Auth::guest() && Auth::user()->admin())

            <div class="text-center mb-8" style="margin-bottom: 20px">
                <a type="button" href="{{ route('products.create') }}" class="btn btn-primary">Agregar Producto</a>
            </div>

            @endif

            <div class="shop-products">

            <div class="row">

            {{-- @foreach($products->chunk(3) as $item) --}}

            @foreach($products as $product)

            <div class="col-xl-4 col-sm-6 mb--50">
                            <div class="ft-product">
                                    <div class="product-inner">
                                        <div class="product-image">
                                            <a data-toggle="modal" data-target="#productModal">
                                            <figure class="product-image--holder">
                                                <img src="upload/products-thumbnail/{{ $product->photo }}" alt="Product">
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
                                            <h3 class="product-title"><a href="product-details.html">{{ $product->name }}</a></h3>
                                            <div class="product-category">
                                                <a href="product-details.html">{{ $product->meta_description }}</a>

                                                @if(!Auth::guest() && Auth::user()->admin())

                                                    <a href="{{ route('products.edit', $product->id) }}"><i class="fas fa-edit"></i></a>

                                                @endif

                                            </div>
                                            <p><button data-toggle="modal" data-target="#productModal" onclick="getContentForModal( this, {{ $product->id }} )" type="button" class="btn btn-size-sm btn-shape-square btn-detail-product">
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
                                            <div id="image_product_id_{{ $product->id }}" src="{{ $product->photo }}"></div>
                                            <div id="title_product_id_{{ $product->id }}">{{ $product->name }}</div>                                 
                                            <div name="contenido-modal" id="contenido_product_id_{{ $product->id }}">{{ $product->description }}</div>
                                            <a id="product-link_{{ $product->id }}" data-auth="{{ Auth::guest() }}" href="{{ route('products-click') }}"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                </div>

            {{-- @endforeach --}}

            </div>
        </div>
    </div>
</div>

@include('forms.elem-create_account')

@endsection

@section('customjs')

<script>

$( document ).ready(function() {

    
});

function getContentForModal( item, id ){
    var contenido    = $('#contenido_product_id_' + id).html();
    var title        = $('#title_product_id_' + id).html();
    var elemLink     = $('#product-link_' + id);
    var productLink  = elemLink.attr('href').toString();
    var isAuth       = elemLink.data('auth').toString();
    var photo        = $('#image_product_id_' + id).attr('src');

    console.log(photo);
    
    var title_modal     = $('#product-title-modal');
    var contenido_modal = $('#product-description-modal');
    var button_action   = $('#product-action-btn');
    var img_modal       = $('#product-image');

    title_modal.empty();
    contenido_modal.empty();
    img_modal.attr('src', '');
    img_modal.attr('alt', '');

    title_modal.html(title);
    contenido_modal.html(contenido);
    img_modal.attr('src', 'upload/products-thumbnail/'+photo);
    img_modal.attr('alt', title);

    button_action[0].dataset.auth = '';
    button_action[0].dataset.link = '';
    button_action[0].dataset.id = '';

    button_action[0].dataset.auth = isAuth;
    button_action[0].dataset.link = productLink;
    button_action[0].dataset.idproduct = id;
}

function redirectToProduct( elem ){
    var action_btn = $('#product-action-btn');
    var url  = action_btn.data('link');
    var auth = action_btn.data('auth');
    var idproduct = action_btn.data('idproduct');

    if(auth == '1'){
        
        $('#productModal').modal('hide');
        $('#createAccountModal').modal('show');
        
    }else{
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
                type     : 'POST',
                url      : url,
                dataType : 'json',
                data: {
                    auth: auth,
                    idproduct: idproduct	
                },
            success: function(data){
                console.log(data);
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    }
}

$('#sign-up-form').on('submit', function(e){

    e.preventDefault();
    var home = $('#url-home').val();

    var action = $( this ).attr('action');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
            type     : 'POST',
            url      : action,
            dataType : 'json',
            data: {
                name: $('#name_signup').val(),
                email   : $('#email_signup').val(),
                password: $('#password_signup').val(),
            },
        success: function(data){
            if(data.id){
                window.location.replace(home);
            }
        },
        error: function (data) {
            console.log('Error:', data);
        }
    });
    
});

</script>

@endsection