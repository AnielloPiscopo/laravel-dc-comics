{{-- 
|--------------------------------------------------------------------------
| Comics show in Admin
|--------------------------------------------------------------------------
|
| This is the show 'Comics' section of the website
| available to the Admin.
|
--}}

@extends('layouts.app', ["currentUserType" => "Admin" , "otherUserType" => "Guest"])

@section('title' , 'Laravel DC Comics - Admin-Section')

@section('main-content')
@php
    $listElements = [
        'title',
        'description',
        'price',
        'sale_date',
        'type',
    ]
@endphp

@if (session('message'))
    <span>{{session('message')}}</span>
@endif

<article class="my_card">
    <div class="my_img-container">
        <img src="{{$comic->thumb}}" alt="{{$comic->series}}" title="{{$comic->series}}">
    </div>
    
    <ul>
        @foreach ($listElements as $listEl)
            <li>{{$comic->$listEl}}</li> 
        @endforeach
    </ul>
</article>
@endsection