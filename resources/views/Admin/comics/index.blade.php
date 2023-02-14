@extends('Admin.layouts.app')

@section('main-content')
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Thumb</th>
            <th>Price</th>
            <th>Sale_Date</th>
            <th>Type</th>
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
                <td><a href="{{route('Admin.comics.show' , $comic->id)}}">Show</a></td>
            </tr>
        @endforeach
    </tbody>
</table>    
@endsection