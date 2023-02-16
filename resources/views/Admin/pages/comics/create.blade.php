@extends('layouts.app', ["currentUserType" => "Admin" , "otherUserType" => "Guest"])
@section('main-content')
@include('Admin.pages.comics.partials.form',["route" => "Admin.pages.comics.store"  , "formMethod" => "POST" , "comic" => $defaultComic])
@endsection