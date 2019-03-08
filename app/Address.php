<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';
    public function Users()
    {
        return $this->belongsTo(Users::class);
    }
    public function Orders() {
        return $this->hasMany(Orders::class);
    }
}
