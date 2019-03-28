<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Orders() {
        return $this->hasMany(Orders::class);
    }
}
