<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','price','description','weigth','stock','img','categories_id','promos_id'];
    public $timestamps = false;

    public function Categories()
    {
        return $this->belongsTo(Categories::class);
    }

    public function Promo()
    {
        return $this->belongsTo(Promo::class, 'promos_id');
    }
    public function order() {
        return $this->belongsTo('App\Orders','orders_product', 'product_id','order_id');
    }
}
