<?php

/*
|--------------------------------------------------------------------------
| Comic Class
|--------------------------------------------------------------------------
|
| A class that represents a comic istance
|
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;
    
    protected $fillable = array('title' , 'description' , 'thumb' , 'price' , 'series' , 'sale_date' , 'type');
}