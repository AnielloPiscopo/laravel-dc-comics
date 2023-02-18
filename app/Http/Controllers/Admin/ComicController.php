<?php

/*
|--------------------------------------------------------------------------
| Comic Controller in Admin
|--------------------------------------------------------------------------
|
| A controller for the istance Comic
|
*/

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *  
     * @param Comic $comic 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        
        return view('Admin.pages.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $defaultComic = new Comic();
        return view('Admin.pages.comics.create' , compact('defaultComic'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Comic $comic)
    {
        $currentDate = Carbon::now()->toDateString();
        $formData = $request->validate([
                "title"=> ["required","between:2,255", Rule::unique('comics','title')->ignore($comic)],
                "description" => "required|min:10",
                "price" => "between:0.1,999999.99",
                "series" => "required|between:2,255",
                "sale_date" => "before:$currentDate",
                "type" => "required|between:2,255",
            ],
            [
                'title.required' => 'Il titolo deve essere inserito obbligatoriamente',
                'series.required' => 'La serie deve essere specificata',
                'series.type' => 'Il tipo di fumetto deve essere specificato',
                'description.required' => 'Deve inserire ancora una descrizione(min= 10 caratteri) per il fumetto',
                'description.min' => 'La descrizione non è abbastanza lunga(min=10 caratteri)',
                'sale_date.before' => 'La data non può essere uguale o superiore a quella attuale',
                'title.between' => 'Il titolo deve avere un numero di caratteri compreso tra 2 e 255',
                'series.between' => 'La serie deve avere un numero di caratteri compreso tra 2 e 255',
                'type.between' => 'Il tipo del fumetto deve avere un numero di caratteri compreso tra 2 e 255',
                'price.between' => 'Il prezzo deve essere compreso tra 0.1 e 999999.99',
            ]
        );

        $newComic = new Comic();
        $newComic->fill($formData);
        $newComic->save();

        return redirect()->route('Admin.pages.comics.show',$newComic->id)->with('message' , "$newComic->title has been created");
    }

    /**
     * Display the specified resource.
     *
     * @param  Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('Admin.pages.comics.show',compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('Admin.pages.comics.edit',compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {

        $currentDate = Carbon::now()->toDateString();
        $formData = $request->validate([
            "title"=> ["required","between:2,255", Rule::unique('comics','title')->ignore($comic)],
            "description" => "required|min:10",
            "price" => "between:0.1,999999.99",
            "series" => "required|between:2,255",
            "sale_date" => "before:$currentDate",
            "type" => "required|between:2,255",
        ],
        [
            'title.required' => 'Il titolo deve essere inserito obbligatoriamente',
            'series.required' => 'La serie deve essere specificata',
            'series.type' => 'Il tipo di fumetto deve essere specificato',
            'description.required' => 'Deve inserire ancora una descrizione(min= 10 caratteri) per il fumetto',
            'description.min' => 'La descrizione non è abbastanza lunga(min=10 caratteri)',
            'sale_date.before' => 'La data non può essere uguale o superiore a quella attuale',
            'title.between' => 'Il titolo deve avere un numero di caratteri compreso tra 2 e 255',
            'series.between' => 'La serie deve avere un numero di caratteri compreso tra 2 e 255',
            'type.between' => 'Il tipo del fumetto deve avere un numero di caratteri compreso tra 2 e 255',
            'price.between' => 'Il prezzo deve essere compreso tra 0.1 e 999999.99',
        ]
    );

        $comic->update($formData);

        return redirect()->route('Admin.pages.comics.show',$comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('Admin.pages.comics.index')->with('message' , "$comic->title has been deleted");
    }
}