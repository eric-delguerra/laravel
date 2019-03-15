<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class user extends Authenticatable
{
    protected $table = 'user';
    protected $fillable = ['mail',
        'MotDePasse'];

    public $timestamps = false;

    public function command(){
        return $this->hasMany('App\Command');
    }
}
