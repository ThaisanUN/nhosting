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
            <ul id="nava">
                <li ><a href="/">Home</a></li>
                <li><a href="about">About</a></li>
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
            <li><a href="locale/kh"><span class="icon_chat_alt"></span>Khmer</a></li>
            <li><a href="locale/en"><span class="icon_chat_alt"></span>English</a></li>
            <!-- <li><a href="locale/ch"><span class="icon_chat_alt"></span>Chinese</a></li> -->
                <li><a href="#"><span class="icon_chat_alt"></span> @lang('home.live_chat')</a></li>
                <li><a href="{{url('/login')}}"><span class="fa fa-user"></span> Login / Register</a></li>
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
                    <div class="col-lg-6 col-md-6">
                        <div class="header__info-left">
                            <ul>
                                <li><span class="icon_phone"></span> +855 77 34 33 03</li>
                                <li><span class="fa fa-envelope"></span> nhosting@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__info-right">
                            <ul>
                            <li><a href="locale/kh"><img src="{{url('img/lang/kh.png')}}" alt="Girl in a jacket">Khmer</a></li>
                            <li><a href="locale/en"><img src="{{url('img/lang/en.png')}}" alt="Girl in a jacket">English</a></li>
                            <!-- <li><a href="locale/ch"><img src="{{url('img/lang/ch.png')}}" alt="Girl in a jacket">Chinese</a></li> -->
                                <li><a href="#"><span class="icon_chat_alt"></span>@lang('home.live_chat')</a></li>
                                <li><a href="{{url('/login')}}"><span class="fa fa-user"></span> @lang('home.login') / @lang('home.register')</a></li>
                            </ul>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="{{url('/')}}"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <nav class="header__menu">
                        <ul id="navaaa">
                            <li class="active_home"><a href="/">@lang('home.home')</a></li>
                            <li class="active_about"><a href="about">@lang('home.about')</a></li>
                            <li class="active_hosting"><a href="hosting">@lang('home.hosting')</a></li>
                            <li class="active_pages"><a href="#">@lang('home.pages')</a>
                                <ul class="dropdown">
                                    <li><a href="{{url('/pricing')}}">Pricing</a></li>
                                    <li><a href="{{url('/blog-details')}}">Blog Details</a></li>
                                    <li><a href="{{url('/404')}}">404</a></li>
                                </ul>
                            </li>
                            <li class="active_blog"><a href="{{url('/blog')}}">@lang('home.news')</a></li>
                            <li class="active_contact"><a href="{{url('/contact')}}">@lang('home.contact')</a></li>
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
