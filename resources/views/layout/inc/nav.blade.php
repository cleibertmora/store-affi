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
                                        <a href="index.html" class="logo--normal">
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
                                                <a href="index.html" class="mainmenu__link">
                                                    <span class="mm-text">Home</span>
                                                </a>
                                            </li>
                                            <li class="mainmenu__item menu-item-has-children megamenu-holder">
                                                <a href="shop.html" class="mainmenu__link">
                                                    <span class="mm-text">Shop</span>
                                                </a>
                                            </li>
                                            <li class="mainmenu__item menu-item-has-children">
                                                <a href="blog.html" class="mainmenu__link">
                                                    <span class="mm-text">Blog</span>
                                                </a>
                                            </li>
                                        @if (Route::has('login'))
                                            <li class="mainmenu__item">
                                                <a href="#formsRigth" class="mainmenu__link">
                                                    <span class="mm-text">Log In</span>
                                                </a>
                                            </li>
                                            <li class="mainmenu__item">
                                                <a href="{{ route('register') }}" class="mainmenu__link">
                                                    <span class="mm-text">Register</span>
                                                </a>
                                            </li>
                                        @endif
                                        
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header__main-right">
                                    <div class="header-toolbar-wrap">
                                        <div class="header-toolbar">
                                            <div class="header-toolbar__item header-toolbar--search-btn">
                                                <a href="#formsRigth" class="mainmenu__link toolbar-btn">
                                                    Log in
                                                </a>
                                            </div>
                                            <div class="header-toolbar__item header-toolbar--search-btn">
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
    </header>
    <!-- Header End -->