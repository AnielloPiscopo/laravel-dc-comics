@extends('Admin.layouts.app')
@section('main-content')
<article class="my_card">
    <div class="my_img-container">
        <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}" title="{{$comic['series']}}">
    </div>
    <ul>
        <li>{{$comic->title}}</li>
        <li>{{$comic->description}}</li>
        <li>{{$comic->price}}</li>
        <li>{{$comic->sale_date}}</li>
        <li>{{$comic->type}}</li>
    </ul>
</article>
@endsection