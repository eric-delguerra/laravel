<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
//    protected $table = '';
    protected $fillable = ['name',
        'description',
        'price',
        'weigth',
        'stock',
        'ID_category'];
}
