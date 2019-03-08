<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function Product()
    {
        return $this->hasOne('App\Product');
    }
}
