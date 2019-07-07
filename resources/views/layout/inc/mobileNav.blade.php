<!-- OffCanvas Menu Start -->
<div class="offcanvas-menu-wrapper" id="offcanvasMenu">
        <div class="offcanvas-menu-inner">
            <a href="" class="btn-close">
                <i class="la la-remove"></i>
            </a>
            <nav class="offcanvas-navigation">
                <ul class="offcanvas-menu">
                    <li>
                        <a href="contact-us.html">Home</a>
                    </li>
                    <li class="menu-item-has-children active">
                        <a href="#">Categories</a>
                        <ul class="sub-menu">
                            @foreach ($CategoryList as $item)
                                <li>
                                    <a href="{{ route('show.category', $item->slug) }}" id="category-{{ $item->id }}">{{ $item->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a href="#">Terms of Use</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
                <div class="site-info vertical">
                    <div class="site-info__item">
                        {{-- <a href="tel:+01223566678"><strong>+01 2235 666 78</strong></a>
                        <a href="mailto:Support@contixs.com">Support@furtrate.com</a> --}}
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- OffCanvas Menu End -->