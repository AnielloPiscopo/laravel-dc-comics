{{--
|--------------------------------------------------------------------------
| Homepage in Guest
|--------------------------------------------------------------------------
|
| This is the introductory page of the website
| available to the guest.
|
--}}

@extends('layouts.app' , ["currentUserType" => "Guest" , "otherUserType" => "Admin"])