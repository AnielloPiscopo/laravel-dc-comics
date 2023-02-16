<?php

/*
|--------------------------------------------------------------------------
| Comic Controller in Guest
|--------------------------------------------------------------------------
|
| A controller for the istance Comic
|
*/

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *  
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $comics = Comic::all();
        
        return view('Guest.pages.comics', compact('comics'));
    }
}