<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    protected $table = 'command';
//    protected $fillable = ['mail',
//        'MotDePasse'];

    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
