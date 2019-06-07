<!-- Mini Cart Start -->
<aside class="mini-cart" id="formsRigth" style="overflow: auto;">
        <div class="mini-cart-wrapper">
            <div class="mini-cart__close">
                <a href="#" class="btn-close"><i class="la la-remove"></i></a>
            </div>
            <div class="mini-cart-inner">
                {{-- <h3 class="mini-cart__heading mb--45">Shopping Cart</h3> --}}
                <div class="mini-cart__content">
                    
                    @if(Auth::guest())
                    <h3 class="mini-cart__heading mb--45">Log In</h3>

                        {{ Form::open(['route' => 'login', 'method' => 'post'], ['class' => 'form']) }}

                            @include('forms.login')
                        
                        {{ Form::close() }}

                    @endif

                    {{-- <div class="mini-cart__buttons">
                        <a href="cart.html" class="btn btn-fullwidth btn-bg-primary mb--20">View Cart</a>
                        <a href="checkout.html" class="btn btn-fullwidth btn-bg-primary">Checkout</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </aside>
    <!-- Mini Cart End -->