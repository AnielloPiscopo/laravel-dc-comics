@extends('layouts.app', ["currentUserType" => "Admin" , "otherUserType" => "Guest"])

@section('title' , 'Laravel DC Comics - Admin-Section')
@section('main-content')

@include('Admin.pages.comics.partials.form',["route" => "Admin.pages.comics.update"  , "formMethod" => "PUT" , "comic" => $comic]);
@endsection