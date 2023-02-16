<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{   
    public function run()
    {
        /**
         * Run the database seeds.
         *  
         * @param Comic $newComic 
         * @param String $newComic->title 
         * @param Text $newComic->description 
         * @param Text $newComic->thumb 
         * @param Float $newComic->price 
         * @param String $newComic->series 
         * @param Date $newComic->sale_date 
         * @param String $newComic->type 
         * @return void
         */

        $comics = config('db.comics');
        foreach($comics as $comic){
            $newComic = new Comic();
            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->thumb = $comic['thumb'];
            $newComic->price = $comic['price'];
            $newComic->series = $comic['series'];
            $newComic->sale_date = $comic['sale_date'];
            $newComic->type = $comic['type'];
            $newComic->save();
        }
    }
}