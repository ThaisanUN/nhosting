
@extends('layouts.app')
@section('title', '404')
@section('content')
<style>
.header__menu ul li.active_pages a:after{
    opacity: 1;
	height: 50%;
}
/* .active_blog{
    background: #4c57d6;
} */
</style>
 

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__option">
                        <a href="./index.html"><span class="fa fa-home"></span> Home</a>
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- 404 Section Begin -->
    <section class="section-404 spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text__404">
                        <img src="img/404.png" alt="">
                        <h3>Opps! This page Could Not Be Found!</h3>
                        <p>Sorry bit the page you are looking for does not exist, have been removed or name changed</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your keyword">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 404 Section End -->

    


    @endsection