<!-- Page Preloder -->
<div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas__menu__overlay"></div>
    <div class="offcanvas__menu__wrapper">
        <div class="canvas__close">
            <span class="fa fa-times-circle-o"></span>
        </div>
        <div class="offcanvas__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <nav class="offcanvas__menu mobile-menu">
            <ul>
                <li class="active"><a href="{{url('')}}">Home</a></li>
                <li><a href="{{url('/about')}}">About</a></li>
                <li><a href="{{url('/hosting')}}">Hosting</a></li>
                <li><a href="#">Pages</a>
                    <ul class="dropdown">
                        <li><a href="{{url('/pricing')}}">Pricing</a></li>
                        <li><a href="{{url('/blog-details')}}">Blog Details</a></li>
                        <li><a href="{{url('/404')}}">404</a></li>
                    </ul>
                </li>
                <li><a href="{{url('/blog')}}">News</a></li>
                <li><a href="{{url('/contact')}}">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <ul>
                <li><a href="#"><span class="icon_chat_alt"></span> Live chat</a></li>
                <li><a href="#"><span class="fa fa-user"></span> Login / Register</a></li>
            </ul>
        </div>
        <div class="offcanvas__info">
            <ul>
                <li><span class="icon_phone"></span> +855 77 34 33 03</li>
                <li><span class="fa fa-envelope"></span> nhosting@gmail.com</li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header-section header-normal">
        <div class="header__info">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__info-left">
                            <ul>
                                <li><span class="icon_phone"></span> +855 77 34 33 03</li>
                                <li><span class="fa fa-envelope"></span> nhosting@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__info-right">
                            <ul>
                                <li><a href="#"><span class="icon_chat_alt"></span> Live chat</a></li>
                                <li><a href="#"><span class="fa fa-user"></span> Login / Register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="{{url('')}}"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="{{url('')}}">Home</a></li>
                            <li><a href="{{url('/about')}}">About</a></li>
                            <li><a href="{{url('/hosting')}}">Hosting</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="{{url('/pricing')}}">Pricing</a></li>
                                    <li><a href="{{url('/blog-details')}}">Blog Details</a></li>
                                    <li><a href="{{url('/404')}}">404</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('/blog')}}">News</a></li>
                            <li class="active"><a href="{{url('/contact')}}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>
    <!-- Header End -->