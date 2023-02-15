@extends('Admin.layouts.app')

@section('main-content')
@php
$tableElements=[
    'Id',
    'Title',
    'Description',
    'Thumb',
    'Price',
    'Sale_Date',
    'Type',
    '#'
];    
@endphp

<table>
    <thead>
        <tr>
            @foreach ($tableElements as $tableEl)
                <th>{{$tableEl}}</th>
            @endforeach
        </tr> 
    </thead>
    <tbody>
        @foreach ($comics as $comic)
            <tr>
                <td>{{$comic->id}}</td>
                <td>{{$comic->title}}</td>
                <td>{{$comic->description}}</td>
                <td>{{$comic->thumb}}</td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->type}}</td>
                <td><a href="{{route('Admin.pages.comics.show' , $comic->id)}}">Show</a></td>
            </tr>
        @endforeach
    </tbody>
</table>    
@endsection