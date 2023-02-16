{{--
|--------------------------------------------------------------------------
| Homepage in Admin
|--------------------------------------------------------------------------
|
| This is the introductory page of the website
| available to the Admin.
|
--}}

@extends('layouts.app', ["currentUserType" => "Admin" , "otherUserType" => "Guest"])

@section('title' , 'Laravel DC Comics - Admin-Section')