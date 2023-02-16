{{-- 
|--------------------------------------------------------------------------
| Comics in Guest
|--------------------------------------------------------------------------
|
| This is the 'Comics' section of the website
| available to the guest.
|
--}}

@extends('layouts.app' , ["currentUserType" => "Guest" , "otherUserType" => "Admin"])

@section('title','Laravel Comics - Comics')

@section('main-content')
@php
    $imgsPath = 'resources/assets/images/';
    
    $navItems= [
            [
                'text'=> 'Digital Comics',
                'src'=> 'buy-comics-digital-comics.png'
            ],


            [
                'text'=> 'DC Merchandise',
                'src'=> 'buy-comics-merchandise.png'
            ],


            [
                'text'=> 'Subscriptions',
                'src'=> 'buy-comics-subscriptions.png'
            ],


            [
                'text'=> 'Comic Shop Locator',
                'src'=> 'buy-comics-shop-locator.png'
            ],


            [
                'text'=> 'DC Power Visa',
                'src'=> 'buy-dc-power-visa.svg'
            ],
        ]
@endphp

<section id="jumbotron">
    <div class="my_background"></div>

    <section id="comics-container" class="my_container my_p-relative">
        <h2 class="my_title my_text-uppercase my_p-absolute">Current Series</h2>
    
        <div class="my_cards-container my_d-flex my_wrap">
            @foreach ($comics as $comic)
            <article class="my_card">
                <a href="{{route(Route::currentRouteName()) . '/comic' . $loop->iteration}}">
                    <div class="my_img-container">
                        <img src="{{$comic->thumb}}" alt="{{$comic->series}}" title="{{$comic->series}}">
                    </div>
                    <span class="my_text-uppercase">{{ $comic->series }}</span>
                </a>
            </article>
            @endforeach
        </div>
    
        <div class="my_btn-container my_d-flex my_justify-center">
            <a href="#" class="my_btn my_text-uppercase">Load More</a>
        </div>
    </section>
</section>

<nav class="my_container">
    <ul class="my_d-flex my_justify-around my_align-center">
        @foreach ($navItems as $navItem)
        <li>
            <a href="{{route(Route::currentRouteName()) . '/element' . $loop->iteration}}" class="my_d-flex my_align-center my_text-uppercase">
                <img src="{{Vite::asset( $imgsPath . $navItem['src'])}}" alt="{{$navItem['text']}}">
                <span>{{ $navItem['text'] }}</span>
            </a>
        </li>
        @endforeach
    </ul>
</nav>
@endsection

@section('styles')
<link rel="stylesheet" href="{{Vite::asset('resources/scss/Guest/_comics.scss')}}">
@endsection