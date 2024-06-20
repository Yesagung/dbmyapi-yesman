@extends('layouts.app-public')
@section('title', 'Home')
@section('content')
    <div class="site-wrapper-reveal">
        <div class="hero-box-area">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12">
                        <!-- Hero Slider Area Start -->
                        <div class="hero-area" id="product-preview">
                        </div>
                        <!-- Hero Slider Area End -->
                    </div>
                </div>
            </div>
        </div>

        <div class="about-us-area section-space--ptb_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-us-content_6 text-center">
                            <h2><span class="text-color-primary">Kain&nbsp;&nbsp;Producer</span></h2>
                            <p>
                                <small>
                                Whether you are looking for the latest premium fabrics, timeless classics, 
                                or an amazing hidden gem? 
                                Our carefully curated exclusive collection offers something special for everyone. 
                                Our passionate team is ready to help you find the perfect fabric, 
                                while the store's warm and inviting atmosphere invites you to explore every corner. 
                                gather with our community of fabric lovers and let us help you discover the magic in every piece. 
                                Visit us today and experience the satisfaction of discovering stunning fabrics &#10084;
                                </small>
                            </p>
                            <p class="mt-5">Discover your window to the world of premium fabrics! Or maybe,
                                <span class="text-color-primary">open the door to a hidden world with every charming strand!</span> 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Banner Video Area Start -->
        <div class="banner-video-area overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-video-box">
                            <img src="https://th.bing.com/th/id/R.a07b98d9ebb3156b6a4b68c97636dc7a?rik=cyDB1ew9%2b3OHJw&riu=http%3a%2f%2fwww.jalakapas.com%2fwp-content%2fuploads%2f2017%2f09%2fgudang-kain.jpg&ehk=NOAovepaEq4o24%2fPFkBq6dATcr%2fSxo54ioy6YmM7O0k%3d&risl=&pid=ImgRaw&r=0" alt="">
                            <div class="video-icon">
                                <a href="https://youtu.be/Na5KPnx0uS8?si=PPoJfum8xG-Jt8h9" class="popup-youtube"><i class="linear-ic-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Video Area End -->

        <!-- Our Brand Area Start -->
        <div class="our-brand-area section-space--pb_90">
        <div class="container">
            <div class="brand-slider-active">
                @php
                    $partner_count = 6;
                @endphp 
                @for($i = 1; $i <= $partner_count; $i++)
                    <div class="col-lg-12">
                        <div class="single-brand-item">
                            <a href="#"><img src="assets/images/brand/partnerb{{$i}}.jpg" class="img-fluid" alt="Partner Images"></a>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
        <!-- Our Brand Area End -->

        <!-- Our Member Area Start -->
        <div class="our-member-area section-space--pb_120">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="member--box">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-4">
                                    <div class="section-title small-mb__40 tablet-mb__40">
                                        <h4 class="section-title">Join the community!</h4>
                                        <p>Become one of the member and get discount 50% off</p>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-8">
                                    <div class="member-wrap">
                                        <form action="#" class="member--two">
                                            <input class="input-box" type="text" placeholder="Your email address">
                                            <button class="submit-btn"><i class="icon-arrow-right"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Member Area End -->

    </div>
@endsection
@section('addition_css')
@endsection
@section('addition_script')
    <script src="{{asset('pages/js/home.js')}}"></script>
@endsection