<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'articles';
    protected $fillable = ['title','price','content','image','vignette'];
}
