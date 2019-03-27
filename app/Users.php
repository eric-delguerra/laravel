<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = ['firstName', 'lastName', 'email', 'password'];
    public $timestamps = false;

    public function address()
    {
        return $this->hasOne('App\Address');
    }

    public function Orders()
    {
        return $this->hasMany(Orders::class);
    }
}
