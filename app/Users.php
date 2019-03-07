<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public function adress()
    {
        return $this->hasOne('App\Adress');
    }
}
