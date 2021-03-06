<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
   protected $fillable = ['title', 'content'];
   protected $table = 'categories';
   public function post()
   {
   	$this->hasMany('App\Post');
   }
}
