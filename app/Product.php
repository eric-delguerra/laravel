<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = ['name',
        'description',
        'price',
        'weigth',
        'stock',
        'ID_category'];

    public $timestamps = false;

    public function promo(){
        return $this->belongsTo('App\Promo');
    }
}
