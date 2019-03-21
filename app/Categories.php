<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = ['name'];

    public static $rules = 
    [
            'name' => 'required|min:4|unique:categories'
            
    ];

    public function Product()
    {
        return $this->hasMany('App\Product');
    }
}
