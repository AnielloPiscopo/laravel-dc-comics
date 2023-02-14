@extends('Admin.layouts.app')
@section('main-content')
<form action="{{route('Admin.comics.store')}}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Insert the title">
    <textarea name="description" cols="30" rows="10" placeholder="Insert the description"></textarea>
    <input type="text" name="thumb" placeholder="Insert the thumb of the img">
    <input type="number" name="price" placeholder="Insert the price">
    <input type="text" name="series" placeholder="Insert the series">
    <input type="text" name="sale_date" placeholder="Insert the sale date">
    <input type="text" name="type" placeholder="Insert the type">
    <button type="submit">Click</button>
</form>
@endsection