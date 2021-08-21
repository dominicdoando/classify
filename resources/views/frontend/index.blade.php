@extends('layouts.master')

@section('content')
<section class="banner">
        <div class="swiper-container mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                  <img src="{{ asset('images/slider/slider1.png') }}" alt="" />
              </div>
              <div class="swiper-slide">
                <img src="{{ asset('images/slider/slider3.png') }}" alt="" />
              </div>
              <div class="swiper-slide">
                <img src="{{ asset('images/slider/slider2.png') }}" alt="" />
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
</section>

@endsection
