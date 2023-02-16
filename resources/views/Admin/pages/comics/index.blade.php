@extends('layouts.app', ["currentUserType" => "Admin" , "otherUserType" => "Guest"])

@section('title' , 'Laravel DC Comics - Admin-Section')

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

@if (session('message'))
    <span>{{session('message')}}</span>
@endif

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
                <td>{{$comic->price}}&dollar;</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->type}}</td>
                <td>
                    <a href="{{route('Admin.pages.comics.show' , $comic->id)}}">Show</a>
                    <a href="{{route('Admin.pages.comics.edit' , $comic->id)}}">Edit</a>

                    <form action="{{route('Admin.pages.comics.destroy' , $comic->id)}}" method="POST" data-form-destroy data-element-name = '{{$comic->title}}' >
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table> 
@endsection

@section('scripts')
@vite('resources/js/Admin/deleteComicElement.js')
@endsection