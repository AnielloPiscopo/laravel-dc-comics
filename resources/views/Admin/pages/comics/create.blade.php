@extends('Admin.layouts.app')
@section('main-content')
@include('Admin.partials.comicsForm',["route" => "Admin.pages.comics.store"  , "formMethod" => "POST" , "comic" => $defaultComic]);
@endsection