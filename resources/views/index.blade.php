@extends('master.master')
@section('title','Home')
@section('body-content')
@include('web_stuff.navbar')
  <div class="carousel carousel-slider">
    <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/800/400/food/1"></a>
    <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/800/400/food/2"></a>
    <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/800/400/food/3"></a>
    <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/800/400/food/4"></a>
  </div>

    {{-- Services --}}
    @include('web_stuff.services')

    {{-- About Us --}}
    @include('web_stuff.about')

    {{-- Contact Us --}}
    @include('web_stuff.contact')

    {{-- Footer --}}
    @include('web_stuff.footer')

@endsection
