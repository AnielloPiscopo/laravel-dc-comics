{{-- 
|--------------------------------------------------------------------------
| Comics create in Admin
|--------------------------------------------------------------------------
|
| This is the create 'Comics' section of the website
| available to the Admin.
|
--}}

@extends('layouts.app', ["currentUserType" => "Admin" , "otherUserType" => "Guest"])

@section('title' , 'Laravel DC Comics - Admin-Section')

@section('main-content')
@include('Admin.pages.comics.partials.form',["route" => "Admin.pages.comics.store"  , "formMethod" => "POST" , "comic" => $defaultComic])
@endsection