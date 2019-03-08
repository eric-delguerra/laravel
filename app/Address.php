<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';
    public function Users()
    {
        return $this->belongsTo('App\Users');
    }
}
