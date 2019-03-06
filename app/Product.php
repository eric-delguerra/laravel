<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','price','description','weigth','stock','img','idCategory'];
    public $timestamps = false;
    //
}
