@extends('Admin.layouts.app')

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

<article class="my_card">
    <div class="my_img-container">
        <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}" title="{{$comic['series']}}">
    </div>
    
    <ul>
        @foreach ($listElements as $listEl)
            <li>{{$comic->$listEl}}</li> 
        @endforeach
    </ul>
</article>
@endsection