<!-- HEADER DE LA APP -->
<div class="wrapper">
    <!-- MENU -->
    <header class="header">
        <div class="header__inner fixed-header">
            <div class="header__main">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="header__main-inner">
                                <div class="header__main-left">
                                    <div class="logo">
                                        <h2>
                                        <a href="{{ route('index') }}" class="logo--normal">
                                            {{-- <img src="assets/img/logo/logo.png" alt="Logo"> --}}
                                            Store Affi
                                        </a>
                                        </h2>
                                    </div>
                                </div>
                                <div class="header__main-center">
                                    <nav class="main-navigation text-center d-none d-lg-block">
                                        <ul class="mainmenu">
                                            <li class="mainmenu__item menu-item-has-children">
                                                <a href="{{ route('index') }}" class="mainmenu__link">
                                                    <span class="mm-text">Home</span>
                                                </a>
                                            </li>
        
                                            <li class="mainmenu__item menu-item-has-children">
                                                <a href="#" class="mainmenu__link">
                                                    <span class="mm-text">Categories</span>
                                                </a>

                                                <ul class="sub-menu">
                                                @foreach ($CategoryList as $item)
                                                    <li>
                                                        <a href="{{ route('show.category', $item->slug) }}" id="category-{{ $item->id }}">{{ $item->name }}</a>
                                                    </li>
                                                @endforeach
                                                </ul>

                                            </li>

                                            <li class="mainmenu__item menu-item-has-children">
                                                <a href="#" class="mainmenu__link">
                                                    <span class="mm-text">Term of use</span>
                                                </a>
                                            </li>
                                            <li class="mainmenu__item menu-item-has-children">
                                                <a href="#" class="mainmenu__link">
                                                    <span class="mm-text">Contact</span>
                                                </a>
                                            </li>
                                            @if(!Auth::guest())
                                            <li class="mainmenu__item menu-item-has-children">
                                                    <a href="#" class="mainmenu__link">
                                                        <span class="mm-text">{{ Auth::user()->name }}</span>
                                                    </a>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a href="my-account.html">
                                                                <span class="mm-text">My Account</span>
                                                            </a>
                                                            <a href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                                <span class="mm-text">Sign Out</span>
                                                            </a>

                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                {{ csrf_field() }}
                                                            </form>
                                                        </li>
                                                    </ul>
                                            </li>
                                            @endif
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header__main-right">
                                    <div class="header-toolbar-wrap">
                                        <div class="header-toolbar">
                                            @if(Auth::guest())
                                            <div class="header-toolbar__item header-toolbar--search-btn">
                                                <a href="#login-form" class="mainmenu__link toolbar-btn">
                                                    <i class="fa fa-user-circle"></i>
                                                </a>
                                            </div>
                                            
                                            @endif
                                            {{-- <div class="header-toolbar__item header-toolbar--search-btn">
                                                <a href="#searchForm" class="header-toolbar__btn toolbar-btn">
                                                    <i class="la la-search"></i>
                                                </a>
                                            </div>
                                            <div class="header-toolbar__item header-toolbar--minicart-btn">
                                                <a href="#miniCart" class="header-toolbar__btn toolbar-btn">
                                                    <i class="la la-shopping-cart"></i>
                                                    <span>01</span>
                                                </a>
                                            </div>
                                            <div class="header-toolbar__item d-block d-lg-none">
                                                <a href="#offcanvasMenu" class="header-toolbar__btn toolbar-btn menu-btn">
                                                    <div class="hamburger-icon">
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                    </div>
                                                </a>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="button-bottom">   
        <a href="#offcanvasMenu" class="header-toolbar__btn toolbar-btn menu-btn">
            <div class="hamburger-icon hamburger-menu-bottom">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </a>
    </div>
    <!-- Header End -->