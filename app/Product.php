<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','price','description','weigth','stock','img','category_id'];
    public $timestamps = false;

    public function Categories()
    {
        return $this->belongsTo('App\Categories');
    }
    //
}
