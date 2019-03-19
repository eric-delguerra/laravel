<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class promo extends Model
{
    protected $fillable = ['name','description','value','type'];
    public $timestamps = false;

    public function Products()
    {
        return $this->hasMany('App\Product');
    }
}
