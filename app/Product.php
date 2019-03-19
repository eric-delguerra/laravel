<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','price','description','weigth','stock','img','categories_id','promo_id'];
    public $timestamps = false;

    public function Categories()
    {
        return $this->belongsTo(Categories::class);
    }

    public function Promo()
    {
        return $this->belongsToMany('App\Promo');
    }
}
