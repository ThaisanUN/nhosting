
@extends('layouts.app')

@section('content')
<style>
.header__menu ul li.active_contact a:after{
    opacity: 1;
	height: 50%;
}
/* .active_blog{
    background: #4c57d6;
} */
</style>
<body>
   

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__option">
                        <a href="{{url('/')}}"><span class="fa fa-home"></span> Home</a>
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact__text">
                        <h3>Contact info</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <ul>
                            <li>
                                <span class="fa fa-map-marker"></span>
                                <h5>Address</h5>
                                <p>#39; St. CKD10, Khan Dangkor, <br />
                                Phnom Penh, Kingdom of Cambodia.</p>
                            </li>
                            <li>
                                <span class="fa fa-mobile"></span>
                                <h5>Address</h5>
                                <p>+855 34 33 03 | 96 73 62 510</p>
                            </li>
                            <li>
                                <span class="fa fa-headphones"></span>
                                <h5>Address</h5>
                                <p>nhosting@gmail.com</p>
                            </li>
                        </ul>
                        <div class="contact__social">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="youtube"><i class="fa fa-youtube-play"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.648188564749!2d104.86884631412212!3d11.505282248464544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTHCsDMwJzE5LjAiTiAxMDTCsDUyJzE1LjciRQ!5e0!3m2!1sen!2skh!4v1594138108330!5m2!1sen!2skh" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <!-- <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.648188564749!2d104.86884631412212!3d11.505282248464544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTHCsDMwJzE5LjAiTiAxMDTCsDUyJzE1LjciRQ!5e0!3m2!1sen!2skh!4v1594138108330!5m2!1sen!2skh"
                            height="515" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>SEND MESSAGE</h3>
                    <form action="#">
                        <div class="input-list">
                            <input type="text" placeholder="Name">
                            <input type="text" placeholder="Email">
                            <input type="text" placeholder="Website">
                        </div>
                        <textarea placeholder="Question"></textarea>
                        <button type="submit" class="site-btn">Send question</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form End -->

  

@endsection