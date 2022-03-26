@extends('layouts.app')

@section('content')
<div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center">
                                <h3>INTOOIT KIDS CLUB</h3>
                                {{-- <p>Pixel perfect design with awesome contents</p> --}}
                                <a href="{{ url('/destinations') }}" class="boxed-btn3">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center">
                                <h3>INTOOIT KIDS CLUB</h3>
                                {{-- <p>Pixel perfect design with awesome contents</p> --}}
                                <a href="{{ url('/destinations') }}" class="boxed-btn3">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_3 overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center">
                                <h3>INTOOIT KIDS CLUB</h3>
                                {{-- <p>Pixel perfect design with awesome contents</p> --}}
                                <a href="{{ url('/destinations') }}" class="boxed-btn3">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- slider_area_end -->


    <!-- popular_destination_area_start  -->
    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>INTOOIT…</h3>
                        <p>Childrens, Kids club Marbella INTOOIT includes three separate areas:

                            kid’s soft play structure, Toddler’s area and the Game area. Our location is enclosed, and private, and our attentive staff ensure your children will be safe and happy. Do you want to take a walk or have a shopping spree? Or perhaps you are invited to a party with friends?

                            For your child those would be boring “adult things-to-do” – let him/her have some fun!

                            The INTOOIT staff will find a worthwhile activity for everybody..</p>
                    </div>
                </div>
            </div>
            <div class="row">
            @foreach($trip as $val)
                        @if($val->capacity>0)
                        <div class="col-md-4">
                        <a href="{{ URL::to('show-trip/' . $val->id) }}">
                                <div class="single_place">
                                    <div class="thumb">
                                        <img src="{{ asset('/assets/uploads/trip/'.$val->image) }}" alt="">
                                        <p  class="prise">${{$val->price}}</p>
                                    </div>
                                    <div class="place_info">
                                    <h3>{{$val->name}}</h3>
                                        <p>{{$val->country->name}}</p>
                                        <p>{{$val->brief}}</p>

                                        <div class="rating_days d-flex justify-content-between">
                                            <span class="d-flex justify-content-center align-items-center">
                                                <p>{{$val->capacity}} Seats Left</p>
                                            </span>
                                            <div class="days">
                                                <i class="fa fa-clock-o"></i>
                                            {{$val->days}} Days
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endif
                        @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="more_place_btn text-center">
                        <a class="boxed-btn4" href="{{ url('/destinations') }}">More Places</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- popular_destination_area_end  -->

    <!-- newletter_area_start  -->
    <div class="newletter_area overlay">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-10">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="newsletter_text">
                                <h4>Subscribe Our Newsletter</h4>
                                <p>Subscribe newsletter to get offers and about
                                    new places to discover.</p>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="mail_form">
                                <div class="row no-gutters">
                                    <div class="col-lg-9 col-md-8">
                                        <div class="newsletter_field">
                                            <input type="email" placeholder="Your mail" >
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="newsletter_btn">
                                            <button class="boxed-btn4 " type="submit" >Subscribe</button>
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
    <!-- newletter_area_end  -->

    <div class="travel_variation_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="img/svg_icon/1.svg" alt="">
                        </div>
                        <h3>Convenient planning</h3>
                        <p>online booking .</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="img/svg_icon/2.svg" alt="">
                        </div>
                        <h3>Great choice</h3>
                        <p>Great choice of activities and various zones of interest for kids.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="img/svg_icon/3.svg" alt="">
                        </div>
                        <h3>Safe and fun</h3>
                        <p>Safe and fun environment for the children .</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- testimonial_area  -->
    <div class="testimonial_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="img/testmonial/author.png" alt="">
                                        </div>
                                        <p>"The kids just adore the staff at Intooit, and we had time to have a romantic dinner at our favorite restaurant, the kids were very sleepy when we got them home."</p>
                                        <div class="testmonial_author">
                                            <h3>- Jim Adams</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="img/testmonial/author.png" alt="">
                                        </div>
                                        <p>"i´m so happy with Intooit, had time to go shopping feeling good with the service provided… recommend Intooit to any parents."</p>
                                        <div class="testmonial_author">
                                            <h3>- Janet Barberssen.</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="img/testmonial/author.png" alt="">
                                        </div>
                                        <p>"i´m so happy with Intooit, had time to go shopping feeling good with the service provided… recommend Intooit to any parents."</p>
                                        <div class="testmonial_author">
                                            <h3>- Janet Barberssen.</h3>
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
    <!-- /testimonial_area  -->


@endsection
