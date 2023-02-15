@extends('Admin.layouts.app')
@section('main-content')
@include('Admin.partials.comicsForm',["route" => "Admin.pages.comics.update"  , "formMethod" => "PUT" , "comic" => $comic]);
@endsection