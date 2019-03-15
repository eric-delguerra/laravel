<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $table = 'promo';
    protected $fillable = ['Type',
        'Valeur',
        'begin_date',
        'end_date'
    ];

    public $timestamps = false;

    public function product(){
        return $this->hasMany('App\product');
    }
}
