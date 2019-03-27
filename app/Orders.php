<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    public function Address() {
        return $this->hasOne(Address::class);
    }
    public function User() {
        return $this->belongsTo(User::class, 'users_id');
    }
    public function product() {
        return $this->belongsToMany('App\Product','orders_product', 'order_id','product_id', '', '',
            '')
            ->withPivot('quantity');
    }
}
