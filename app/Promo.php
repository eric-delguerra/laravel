<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $fillable = ['name','description','value','type','promo_start', 'promo_end'];
    public $timestamps = false;

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
